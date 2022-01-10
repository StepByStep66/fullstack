<?php

require $_SERVER['DOCUMENT_ROOT'] . '/templates/db.php';

$userId = $_POST['id'];

$query = "DELETE FROM users WHERE id = :id";
$res = $pdo->prepare($query);
$res->execute([
    ':id' => $userId,
]);

header('Location: /pages/admin/users.php');