<?php
session_start();
define('PRODUCTS_IMAGE_PATH', '/images/products/');
$user = 'root';
$pdo = new Pdo('mysql:dbname=fullstack2;host=127.0.0.1', $user);
$document_root = $_SERVER['DOCUMENT_ROOT'];