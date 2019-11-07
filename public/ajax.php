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

