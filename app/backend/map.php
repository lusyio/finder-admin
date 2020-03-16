<?php
$usersGeo = $db->allRows("SELECT user_id, lat, lng, user_last_visit, user_sex FROM user_data WHERE lat IS NOT NULL AND lng IS NOT NULL");