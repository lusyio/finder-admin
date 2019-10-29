<?php
//$usersList = $db->allRows("SELECT user_phone, user_email, user_sex, user_birthdate, user_password, user_height, user_hair_color, user_body_type, user_last_visit, user_register_date, user_last_filter_time_spend, is_blocked, user_interests, user_timespend, user_city, user_name, user_id, user_eye_color FROM user_data");
$usersAuth = $db->allRows("SELECT auth_id, user_id, auth_token, generated_at FROM user_auth");
$registerCodes = $db->allRows("SELECT code_id, code_value, sent_at, phone FROM register_codes");