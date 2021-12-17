<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Artikel Terbaru</h1>
    <a href="<?php echo site_url('blog/add/'); ?>">+ Tambah Artikel</a>
    <?php foreach ($blogs as $key=>$blog) :  ?>
    <div class='blog'>
        <h2>
            <a href="<?php echo site_url('blog/detail/'.$blog['url']); ?>">
                <?php echo $blog['title']; ?>
            </a>
        </h2>
        <p><a href="<?php echo site_url('blog/edit/'.$blog['id']); ?>">Edit</a></p>
        <?php echo $blog['content']; ?>
    <?php endforeach; ?>
</body>
</html>

