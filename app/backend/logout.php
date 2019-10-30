<?php
if (isset($_SESSION)) {
    $_SESSION = [];
}
header('location: http://' . $_SERVER['HTTP_HOST']);
exit;
