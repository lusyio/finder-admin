<?php

session_start();
if (!isset($_SESSION) || !isset($_SESSION['auth']) || !$_SESSION['auth']) {
    header('HTTP/1.0 403 Forbidden');
    exit;
}

if (!isset($_POST['action'])) {
    die;
}

// Загрузка параметров подключения к базе данных
$dbConfig = parse_ini_file("../app/config/db.ini");

// Создаем экземпляр класса работы с базой данных
require_once '../app/Classes/Db.php';
$db = new Db($dbConfig['name'], $dbConfig['host'], $dbConfig['user'], $dbConfig['password']);

// Обновление элемента списка
if ($_POST['action'] == 'updateItem') {
    $newItemName = filter_var($_POST['newItemName'], FILTER_SANITIZE_STRING);
    $newItemName = trim($newItemName);
    $itemId = filter_var($_POST['itemId'], FILTER_SANITIZE_NUMBER_INT);
    if ($newItemName == '' || $itemId <= 0) {
        echo 0;
        exit;
    }
    $data = [':newItemName' => $newItemName, ':itemId' => $itemId];
    if ($_POST['itemType'] == 'interest') {
        $result = $db->query("UPDATE interests_enum SET interest_name = :newItemName WHERE interest_id = :itemId", $data, true);
    } else if ($_POST['itemType'] == 'timespend') {
        $result = $db->query("UPDATE timespend_enum SET timespend_name = :newItemName WHERE timespend_id = :itemId", $data, true);
    } else {
        echo 0;
        exit;
    }
    echo $result;
    exit;
}

// Обновление категории
if ($_POST['action'] == 'updateCategory') {
    $newCategoryName = filter_var($_POST['newCategoryName'], FILTER_SANITIZE_STRING);
    $newCategoryName = trim($newCategoryName);
    $categoryId = filter_var($_POST['categoryId'], FILTER_SANITIZE_NUMBER_INT);
    if ($newCategoryName == '' || $categoryId <= 0) {
        echo 0;
        exit;
    }
    $data = [':newCategoryName' => $newCategoryName, ':categoryId' => $categoryId];
    if ($_POST['categoryType'] == 'interest') {
        $result = $db->query("UPDATE interest_categories SET interest_category_name = :newCategoryName WHERE interest_category_id = :categoryId", $data, true);
    } else if ($_POST['categoryType'] == 'timespend') {
        $result = $db->query("UPDATE timespend_category SET timespend_category_name = :newCategoryName WHERE timespend_category_id = :categoryId", $data, true);
    } else {
        echo 0;
        exit;
    }
    echo $result;
    exit;
}

// Добавление элемента списка
if ($_POST['action'] == 'addItem') {
    $itemName = filter_var($_POST['itemName'], FILTER_SANITIZE_STRING);
    $itemName = trim($itemName);
    $categoryId = filter_var($_POST['categoryId'], FILTER_SANITIZE_NUMBER_INT);
    if ($itemName == '' || $categoryId == 0) {
        exit;
    }
    $data = [
        ':itemName' => $itemName,
        ':categoryId' => $categoryId,
    ];
    if ($_POST['categoryType'] == 'interest') {
        $isCategoryExist = (boolean)$db->firstValue("SELECT COUNT(*) FROM interest_categories WHERE interest_category_id = :categoryId", [':categoryId' => $categoryId]);
        if ($isCategoryExist) {
            $result = $db->query("INSERT INTO interests_enum (interest_name, interest_category) VALUES (:itemName, :categoryId)", $data, true);
            if ($result) {
                $newItemId = $db->getLastId();
                echo json_encode(['itemId' => $newItemId]);
            }
        }
    } else if ($_POST['categoryType'] == 'timespend') {
        $isCategoryExist = (boolean)$db->firstValue("SELECT COUNT(*) FROM timespend_category WHERE timespend_category_id = :categoryId", [':categoryId' => $categoryId]);
        if ($isCategoryExist) {
            $result = $db->query("INSERT INTO timespend_enum (timespend_name, timespend_category) VALUES (:itemName, :categoryId)", $data, true);
            if ($result) {
                $newItemId = $db->getLastId();
                echo json_encode(['itemId' => $newItemId]);
            }
        }
    } else {
        exit;
    }
}

// Добавление категории
if ($_POST['action'] == 'addCategory') {
    $categoryName = filter_var($_POST['categoryName'], FILTER_SANITIZE_STRING);
    $categoryName = trim($categoryName);
    if ($categoryName == '') {
        exit;
    }
    $data = [
        ':categoryName' => $categoryName,
    ];
    if ($_POST['categoryType'] == 'interest') {
        $result = $db->query("INSERT INTO interest_categories(interest_category_name) VALUES (:categoryName)", $data, true);
        if ($result) {
            $newCategoryId = $db->getLastId();
            echo json_encode(['categoryId' => $newCategoryId]);
        }
    } else if ($_POST['categoryType'] == 'timespend') {
        $result = $db->query("INSERT INTO timespend_category(timespend_category_name) VALUES (:categoryName)", $data, true);
        if ($result) {
            $newCategoryId = $db->getLastId();
            echo json_encode(['categoryId' => $newCategoryId]);
        }
    } else {
        exit;
    }
}

if ($_POST['action'] == 'addCity') {
    $cityName = filter_var($_POST['cityName'], FILTER_SANITIZE_STRING);
    $cityName = trim($cityName);
    $regionId = filter_var($_POST['regionId'], FILTER_SANITIZE_NUMBER_INT);
    if ($db->firstValue("SELECT COUNT(*) FROM regions_enum WHERE region_id = :regionId", [':regionId' => $regionId]) < 1) {
        echo 'region not found';
    } else {
        $db->query("INSERT INTO cities_enum(city_name, region_id) VALUES (:cityName, :regionId)", ['cityName' => $cityName, ':regionId' => $regionId]);
        $newCityId = $db->getLastId();
        $result = [
            'status' => 'ok',
            'id' => $newCityId
        ];
        echo json_encode($result);
    }
}

if ($_POST['action'] == 'addArea') {
    if (!isset($_POST['areaName'])) {
        echo 'Name is required';
        exit;
    }
    if(!isset($_POST['points'])) {
        echo 'Coordinates is required';
        exit;
    }
    $areaName = filter_var($_POST['areaName'], FILTER_SANITIZE_STRING);
    $areaName = trim($areaName);
    $points = json_decode($_POST['points']);
    if (!is_array($points) || count($points) < 3) {
        echo 'Wrong coordinates';
        exit;
    }
    //добавить имя зоны,
    $result = $db->query("INSERT INTO areas(area_name) VALUES (:areaName)", ['areaName' => $areaName]);
    $areaId = $db->getLastId();
    // добавить точки зоны
    foreach ($points as $point) { //point[0] - lat, point[1] - lng
        $db->query("INSERT INTO area_points(area_id, lat, lng) VALUES (:areaId, :lat, :lng)", ['areaId' => $areaId, ':lat' => $point[0], ':lng' => $point[1]]);
    }
    $result = ['status' => 'ok', 'areaId' => $areaId];
    echo json_encode($result);
    exit;
}

if ($_POST['action'] == 'updateAreaCoords') {
    if (!isset($_POST['areaId'])) {
        echo 'Name is required';
        exit;
    }
    if(!isset($_POST['points'])) {
        echo 'Coordinates is required';
        exit;
    }
    $areaId = intval($_POST['areaId']);
    $points = json_decode($_POST['points']);
    if (!is_array($points) || count($points) < 3) {
        echo 'Wrong coordinates';
        exit;
    }
    // добавить точки зоны
    $db->query("DELETE FROM area_points WHERE area_id = :areaId", ['areaId' => $areaId]);
    foreach ($points as $point) { //point[0] - lat, point[1] - lng
        $db->query("INSERT INTO area_points(area_id, lat, lng) VALUES (:areaId, :lat, :lng)", ['areaId' => $areaId, ':lat' => $point[0], ':lng' => $point[1]]);
    }
    echo 'ok';
    exit;
}

if ($_POST['action'] == 'updateAreaName') {
    if (!isset($_POST['areaId'])) {
        echo 'Name is required';
        exit;
    }
    if(!isset($_POST['areaName'])) {
        echo 'Name is required';
        exit;
    }
    $areaId = intval($_POST['areaId']);
    $areaName = filter_var($_POST['areaName'], FILTER_SANITIZE_STRING);
    $areaName = trim($areaName);
    // добавить точки зоны
    $db->query("UPDATE areas SET area_name = :areaName WHERE area_id = :areaId", ['areaId' => $areaId, ':areaName' => $areaName]);
    $result = ['status' => 'ok'];
    echo json_encode($result);
    exit;
}
if ($_POST['action'] == 'deleteArea') {
    if (!isset($_POST['areaId'])) {
        echo 'Name is required';
        exit;
    }
    $areaId = intval($_POST['areaId']);
    $db->query("DELETE FROM area_points WHERE area_id = :areaId", ['areaId' => $areaId]);
    $db->query("DELETE FROM areas WHERE area_id = :areaId", ['areaId' => $areaId]);
    $result = ['status' => 'ok'];
    echo json_encode($result);
    exit;
}

if ($_POST['action'] == 'updateUserLocation') {
    require_once '../app/Classes/PolyUtil.php';
    $areas = [];
    $areasFromDb = $db->allRows("SELECT point_id, area_id, lat, lng FROM area_points ORDER BY point_id");
    foreach ($areasFromDb as $point) {
        if (!key_exists($point['area_id'], $areas)) {
            $areas[$point['area_id']] = [];
        }
        $areas[$point['area_id']][] = ['lat' => $point['lat'], 'lng' => $point['lng']];
    }
    $userLocations = $db->allRows("SELECT user_id, lat, lng FROM user_data");
    foreach ($userLocations as $user) {
        if (is_null($user['lat']) || is_null($user['lng'])) {
            continue;
        }
        $userLocation = ['lat' => $user['lat'], 'lng' => $user['lng']];
        foreach ($areas as $areaId => $areaPoints) {
            if (PolyUtil::containsLocation($userLocation, $areaPoints)) {
                $db->query("UPDATE user_data SET user_city = :cityId WHERE user_id = :userId", [':cityId' => $areaId, ':userId' => $user['user_id']]);
                continue 2;
            }
        }
    }
    $result = ['status' => 'ok'];
    echo json_encode($result);
    exit;
}

if ($_POST['action'] == 'sendPush') {
    require __DIR__ . '/../../vendor/autoload.php';
    $type = filter_var($_POST['type'], FILTER_SANITIZE_STRING);
    $from = filter_var($_POST['from'], FILTER_SANITIZE_NUMBER_INT);
    $to = filter_var($_POST['to'], FILTER_SANITIZE_NUMBER_INT);
    $fcm = filter_var($_POST['fcm'], FILTER_SANITIZE_STRING);
    $fcm = trim($fcm);
    $userQuery = $db->firstValue("SELECT COUNT(*) FROM user_auth WHERE user_id = :userId", [':userId' => $to]);
    if ($userQuery == 0) {
        echo "Для пользователя " . $to . " не установлены данные авторизации. Нужно авторизоваться в приложении с данными этого пользователя";
        exit();
    }
    if ($fcm != '') {
        $db->query("UPDATE user_auth SET fcm_token = :fcm WHERE user_id = :userId", [':fcm' => $fcm, ':userId' => $to]);
        echo "Пользователю " . $to . " присвоен новый FCM токен: ". $fcm . "\r\n";
    }
    $rabbit = new \finder\Rabbit();
    $message = $rabbit->formatPushMessage($type, $from);
    $rabbit->sendForPush($to, json_encode($message));
    echo "Пользователю " . $to . " отправлено уведомление:\r\n";
    printf(json_encode($message));
    exit;
}

if ($_POST['action'] == 'sendSocket') {
    require __DIR__ . '/../../vendor/autoload.php';
    $text = filter_var($_POST['text'], FILTER_SANITIZE_STRING);
    $from = filter_var($_POST['from'], FILTER_SANITIZE_NUMBER_INT);
    $to = filter_var($_POST['to'], FILTER_SANITIZE_NUMBER_INT);
    $id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
    $messageToSocket = [
        'messageText' => $text,
        'author' => $from,
        'timestamp' => time(),
        'messageId' => $id,
    ];
    $rabbit = new \finder\Rabbit();
    $rabbit->sendForSocket(json_encode($messageToSocket), $from, $to);
    echo "Отправлено сообщение:\r\n";
    printf(json_encode($messageToSocket));
    exit;
}

if ($_POST['action'] == 'updateTariffs') {
    if (isset($_POST['tariffs'][0])) {
        unset($_POST['tariffs'][0]);
    }
    $tariffsQuery = $db->allRows("SELECT id FROM tariffs");
    $tariffs = [];
    foreach ($tariffsQuery as $tariffResult) {
        $tariffs[] = $tariffResult['id'];
    }
    foreach ($_POST['tariffs'] as $tariffId => $tariffCost) {
        if (!in_array($tariffId, $tariffs)) {
            continue;
        }
        $db->query("UPDATE tariffs SET cost = :cost WHERE id = :tariffId", [':cost' => $tariffCost, ':tariffId' => $tariffId]);
    }
    echo 1;
    exit;
}

if ($_POST['action'] == 'users') {
    $limit = isset($_POST['limit']) ? intval($_POST['limit']) : 10;
    $offset = isset($_POST['offset']) ? intval($_POST['offset']) : 0;
    $search = isset($_POST['search']) ? $_POST['search'] : '';
    $totalNotFiltered = $db->firstValue("SELECT COUNT(*) FROM user_data");
    if ($search == '') {
        $rows = $db->allRows("SELECT user_id AS id, user_name AS name, user_phone AS phone, user_email AS email, user_city AS city, is_blocked AS block FROM user_data LIMIT :limit OFFSET :offset", [':limit' => $limit, ':offset' => $offset]);
        $total = $db->firstValue("SELECT COUNT(*) FROM user_data");
    } else {
        $search = '%' . $search . '%';
        $rows = $db->allRows("SELECT user_id AS id, user_name AS name, user_phone AS phone, user_email AS email, user_city AS city, is_blocked AS block FROM user_data WHERE user_name LIKE :search OR user_email LIKE :search  OR user_phone LIKE :search LIMIT :limit OFFSET :offset", [':limit' => $limit, ':offset' => $offset, ':search' => $search]);
        $total = $db->firstValue("SELECT COUNT(*) FROM user_data WHERE user_name LIKE :search OR user_email LIKE :search OR user_phone LIKE :search", [':search' => $search]);
    }
    $citiesQuery = $db->allRows("SELECT area_id, area_name FROM areas");
    $cities = [];
    foreach ($citiesQuery as $city) {
        $cities[$city['area_id']] = $city['area_name'];
    }
    foreach ($rows as &$row) {
        if (isset($cities[$row['city']])) {
            $row['city'] = $cities[$row['city']];
        } else {
            $cities[$row['city']] = 'Заграница';
        }
        if ($row['block'] > 0) {
            $row['block'] = 'Да';
        } else {
            $row['block'] = 'Нет';
        }
    }
    $result = [
        'total' => intval($total),
        'totalNotFiltered' => intval($totalNotFiltered),
        'rows' => $rows
    ];

    echo json_encode($result);
}

if ($_POST['action'] == 'blockUser') {
    require __DIR__ . '/../../vendor/autoload.php';

    $reason = filter_var($_POST['reason'], FILTER_SANITIZE_STRING);
    $userId = filter_var($_POST['userId'], FILTER_SANITIZE_NUMBER_INT);
    $user = new \finder\User($userId);
    if($user->blockUser($reason)) {
        echo 1;
    } else {
        echo 0;
    }
}

if ($_POST['action'] == 'unblockUser') {
    require __DIR__ . '/../../vendor/autoload.php';

    $reason = filter_var($_POST['reason'], FILTER_SANITIZE_STRING);
    $userId = filter_var($_POST['userId'], FILTER_SANITIZE_NUMBER_INT);
    $user = new \finder\User($userId);
    if($user->unblockUser($reason)) {
        echo 1;
    } else {
        echo 0;
    }
}


