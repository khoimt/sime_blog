<!DOCTYPE html>
<?php session_start() ?>
<?php $posts = json_decode(file_get_contents('posts.json'), true); ?>



<html>
<head>
</head>
<body>
    <h1>List Post</h1>

    <?php foreach($posts as $post): ?>
        <div>
            <h3><?= $post['title']; ?></h3>
            <div><span><?php echo $post['title']; ?></span> &nbsp; <span><?php echo $post['date']; ?></span></div>
            <div><?= $post['content']; ?></div>
        </div> 
    <?php endforeach; ?>
</body>
</html>
