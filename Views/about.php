<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= $title; ?></title>
</head>
<body>
    <?= $this->include('template/header'); ?>
    <section id="introduce">
        <div class="row">
            <img src="irfan.jpg" title="Mochammad Irfan Hilmi" alt="Mochammad Irfan Hilmi" class="image-circle" width="230"
            style="float: left; border: 2px solid black;">
            <h1>Hello!</h1>
            <p>Nama saya Mochammad Irfan Hilmi. Saya adalah seorang mahasiswa dari <i>Universitas Pelita Bangsa</i> yang saat ini sedang
                mempelajari mata kuliah Pemrograman web <i>Pemrograman Web</i>.</p>
        </div>
    </section>
    <?= $this->include('template/footer'); ?>
</body>
</html>