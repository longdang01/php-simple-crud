<?php
require_once './assets/users/users.php';

$userId = $_POST['id'] ?? '';

if(!$userId) {
    include_once './assets/partials/not_found.php';
    exit;
}

deleteUser($userId);
header('Location: index.php');