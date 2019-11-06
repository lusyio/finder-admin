<?php
$userData = null;
if (isset($_GET['user'])) {
    $userId = filter_var($_GET['user'], FILTER_SANITIZE_NUMBER_INT);
    $userData = $db->firstRow("SELECT user_phone, user_email, user_sex, user_birthdate, user_password, user_height, user_hair_color, user_body_type, user_last_visit, user_register_date, user_last_filter_time_spend, is_blocked, user_interests, user_timespend, user_city, user_name, user_id, user_eye_color FROM user_data WHERE user_id = :userId", [':userId' => $userId]);
    $userPhotos = $db->allRows("SELECT photo_id, photo_url, user_id, upload_date, photo_name, photo_order FROM user_photos WHERE user_id = :userId ORDER BY photo_order", [':userId' => $userId]);
}

function decodeBitString($bitString)
{
    $length = strlen($bitString);
    $result = [];
    for ($i = $length - 1; $i >= 0; $i--) {
        if ($bitString[$i] == 1) {
            $result[] = $i;
        }
    }
    return $result;
}