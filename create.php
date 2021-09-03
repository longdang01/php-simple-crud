<?php
require_once './assets/users/users.php';
include_once './assets/partials/header.php';

$user = [
    'id' => '',
    'name' => '',
    'username' => '',
    'email' => '',
    'phone' => '',
    'website' => ''
];


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
        $user = createUser($_POST);
        uploadImg($_FILES['picture'], $user);
    
        header('Location: index.php');
    }
}



include_once './_form.php';
include_once './assets/partials/footer.php';