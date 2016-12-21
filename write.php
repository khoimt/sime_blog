<?php include "include.php" ?>
<?php $posts = json_decode(file_get_contents('posts.json'), true); ?>
<html>
<head>
</head>

</body>
    <h2>Bài mới:</h2>
    <form method="POST" action="">
        <input name="title" type="input" placeholder="tiêu đề bài viết" />
        <br /><br />
        <textarea name="content"> </textarea>
        <br /><br />
        <input type="submit" value="Submit" />
    </form>

    <hr />
    <?php if (isset($_POST['title']) && isset($_POST['content'])): ?>
    <?php
        // thêm bài viết vào cơ sở dữ liệu
        $posts[] = [
            'id' => time(),
            'title' => $_POST['title'],
            'content' => $_POST['content'],
            'author' => 'anonymous',
            'date' => date('Y-m-d H:i:s')
        ];
        if (file_put_contents('posts.json', json_encode($posts))) {
            echo "Done!!!";
        } else {
            echo "Write Fail!!!";
        }
    ?>
    <?php else: ?>

    <?php endif; ?>

</body>
</html>
