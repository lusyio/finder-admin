<?php
$interests = $db->allRows("SELECT ie.interest_id AS id, ie.interest_category AS catId, ie.interest_name as name, ic.interest_category_name AS catName FROM interests_enum ie LEFT JOIN interest_categories ic ON ie.interest_category = ic.interest_category_id order by interest_id");
$interestsCategory = $db->allRows("SELECT interest_category_id AS id, interest_category_name AS name FROM interest_categories order by interest_category_id");
$timeSpends = $db->allRows("SELECT te.timespend_id AS id, te.timespend_category AS catId, te.timespend_name as name, tc.timespend_category_name AS catName FROM timespend_enum te LEFT JOIN timespend_category tc ON te.timespend_category = tc.timespend_category_id order by timespend_id");
$timeSpendsCategory = $db->allRows("SELECT timespend_category_id AS id, timespend_category_name AS name FROM timespend_category order by timespend_category_id");
$bodyTypes = $db->allRows("SELECT body_type_id AS id, body_type_name AS name FROM body_type_enum ORDER BY body_type_id");
$eyeColors = $db->allRows("SELECT eye_color_id AS id, eye_color_name AS name FROM eye_color_enum ORDER BY eye_color_id");
$hairColors = $db->allRows("SELECT hair_color_id AS id, hair_color_name AS name FROM hair_color_enum ORDER BY hair_color_id");
$sexTypes = $db->allRows("SELECT sex_type_id AS id, sex_type_name AS name FROM sex_type_enum ORDER BY sex_type_id");
$simpleEnums = [
    'bodyTypes' => $bodyTypes,
    'eyeColors' => $eyeColors,
    'hairColors' => $hairColors,
    'sexTypes' => $sexTypes,
];
$enumNames = [
    'bodyTypes' => 'Телосложение',
    'eyeColors' => 'Цвет глаз',
    'hairColors' => 'Цвет волос',
    'sexTypes' => 'Пол',
];