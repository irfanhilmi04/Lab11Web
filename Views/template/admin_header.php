<?php

use App\Controllers\User;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
    <link rel="stylesheet" href="<?= base_url('/adminstyle.css');?>">
</head>
<body>
    <div id="container">
    <div class="pembuat">Mochammad Irfan Hilmi</div>
    <header>
        <h1>Halaman Admin</h1>
    </header>
    <nav>
        <a href="<?= base_url('/admin/artikel');?>" class="active">Dashboard</a>
        <a href="<?= base_url('/artikel');?>">Artikel</a>
        <a href="<?= base_url('/admin/artikel/add');?>">Tambah Artikel</a>
        <a href="<?= base_url('/admin/logout');?>">Logout</a>
    </nav>
    <section id="wrapper">