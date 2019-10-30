<?php
if (isset($_SESSION)) {
    $_SESSION = [];
}
header('location: /');
exit;
