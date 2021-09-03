<?php
require_once './assets/users/users.php';
include_once './assets/partials/header.php';

$userId = $_GET['id'] ?? '';
if(!$userId) {
    include_once './assets/partials/not_found.php';
    exit;
}

$user = getUserById($userId);

$errors = [
    'name' => "",
    'username' => "",
    'email' => "",
    'phone' => "",
    'website' => "",
];
$isValid = true;


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $isValid = validateUser($user, $errors);

    if($isValid) {

        $user = updateUser($_POST, $userId);
        uploadImg($_FILES['picture'], $user);
        
        header('Clear-Site-Data: "cache", "cookies", "storage", "executionContexts"');
        header('Location: index.php');
    }
}

include_once './_form.php';
include_once './assets/partials/footer.php';
?>