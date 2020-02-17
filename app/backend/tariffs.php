<?php
$tariffs = $db->allRows("SELECT id, duration, tariff_name, cost, cost_discount from tariffs");
