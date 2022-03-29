<?php

$name = '';
$email = '';
$issue = '';
$description = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (
        isset($_POST['name']) &&
        isset($_POST['email']) &&
        isset($_POST['issue']) &&
        isset($_POST['description'])
    ) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $issue = $_POST['issue'];
        $description = $_POST['description'];
    }

    echo $name . "<br>";
    echo $email . "<br>";
    echo $issue . "<br>";
    echo $description . "<br>";
}