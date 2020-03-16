<?php
$usersGeo = $db->allRows("SELECT user_id, lat, lng, user_last_visit FROM user_data WHERE lat IS NOT NULL AND lng IS NOT NULL");