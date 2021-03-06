<?php
$userData = null;
$isUserProfile = isset($_GET['user']);
$isUserExist = false;
if ($isUserProfile) {
    $userId = filter_var($_GET['user'], FILTER_SANITIZE_NUMBER_INT);
    $isUserExist = (bool)$db->firstValue("SELECT COUNT(*) FROM user_data WHERE user_id = :userId", [':userId' => $userId]);
    if ($isUserExist) {
        $user = new finder\User($userId);
        if ($user->cityId == 0) {
            $cityName = "Заграница";
        } else {
            $cityName = $db->firstRow("SELECT area_name FROM areas WHERE area_id = :cityId", [':cityId' => $user->cityId]);
            $cityName = $cityName['area_name'];
        }
        $payments = $user->getPayments();
        $log = $user->getLog();
    }
}
