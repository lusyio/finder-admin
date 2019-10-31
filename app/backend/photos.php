<?php
$photoList = $db->allRows("SELECT photo_id, photo_url, user_id, upload_date, photo_name, photo_order FROM user_photos");