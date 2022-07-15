<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman <?= $data['judul']; ?></title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= BASEURL ?>/css/bootstrap.css">
</head>
<div class="container">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= BASEURL ?>">PHP MVC</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/home">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/mahasiswa">Mahasiswa</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?= BASEURL ?>/about">About</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled">Disabled</a>
        </li>
    </ul>
</div>

<body>