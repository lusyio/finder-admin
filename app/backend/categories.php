<?php
$interestCategories = $db->allRows("SELECT interest_category_id AS id, interest_category_name AS name FROM interest_categories ORDER BY interest_category_id");
$interestItems = $db->allRows("SELECT interest_id AS id, interest_name AS name, interest_category AS category FROM interests_enum ORDER BY interest_id");
$interestList = [];
foreach ($interestCategories as $row => $data) {
    $interestList[$data['id']] = [
      'name' => $data['name'],
      'items' => []
    ];
}
foreach ($interestItems as $row => $data) {
    $interestList[$data['category']]['items'][$data['id']] = [
        'name' => $data['name'],
    ];
}

$timeSpendCategories = $db->allRows("SELECT timespend_category_id AS id, timespend_category_name AS name FROM timespend_category ORDER BY timespend_category_id");
$timeSpendItems = $db->allRows("SELECT timespend_id AS id, timespend_name AS name, timespend_category AS category FROM timespend_enum ORDER BY timespend_id");
$timeSpendList = [];
foreach ($timeSpendCategories as $row => $data) {
    $timeSpendList[$data['id']] = [
      'name' => $data['name'],
      'items' => []
    ];
}
foreach ($timeSpendItems as $row => $data) {
    $timeSpendList[$data['category']]['items'][$data['id']] = [
        'name' => $data['name'],
    ];
}