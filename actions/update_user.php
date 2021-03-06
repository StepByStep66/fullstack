<?php
session_start();
$user = 'root';
$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1', $user);

$userId = $_POST['id'];
$name = $_POST['name'];
$login = $_POST['login'];
$city_id = $_POST['city_id'];

$query = "UPDATE users SET name = :name, login = :login, city_id = :city_id WHERE id = :id";
$res = $pdo->prepare($query);
$status = $res->execute([
    ':id' => $userId,
    ':login' => $login,
    ':name' => $name,
    ':city_id' => $city_id
]);

if (!$status) {
    $error = $res->errorInfo()[2];
    $_SESSION['error'] = $error;
} else {
    $_SESSION['success'] = true;
};

header("Location: ../pages/user.php?id=$userId");