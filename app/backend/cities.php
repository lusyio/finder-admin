<?php
$countries = $db->allRows("SELECT country_id, country_name FROM countries_enum");
$regions = $db->allRows("SELECT region_id, region_name, country_id FROM regions_enum");
$cities = $db->allRows("SELECT ce.city_id, ce.city_name, ce.region_id, re.region_name FROM cities_enum ce LEFT JOIN regions_enum re ON ce.region_id = re.region_id");
