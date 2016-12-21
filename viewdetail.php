<!DOCTYPE html>
<?php include 'include.php' ?>
<?php $posts = json_decode(file_get_contents('posts.json'), true); ?>
<?php $postId = $_GET['id'] ?>
<?php
    foreach ($posts as $post) if ($post['id'] == $postId) break;
?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">

        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@8thLightInc">
        <meta property="og:title" content="Designing for Pipeline Transformations | 8th Light">
        <title><?=$post['title']?></title>
        <link rel="stylesheet" href="/css/blog.css">
    </head>
    <body>
        <section><div class="container">
                <div class="column three-fourths" id="blog">
                    <div class="blog-post">
                        <h1><?php echo $post['title'] ?></h1>

                        <section class="breadcrumbs">
                            <ul>
                                <li class="author">
                                    <a href="#"><?= $post['author'] ?></a>
                                </li>
                                <li class="date"><?= $post['date'] ?></li>
                            </ul>
                        </section>
                        <article>
                            <?php echo $post['content']; ?>
                        </article>
                    </div>
                </div>


            </div></section>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="column one-third"><p>© 2016 8th Light, Inc.</p></div>
                    <div class="column two-thirds">
                        <ul>
                            <li><a href="https://8thlight.com/contact/">Contact</a></li>
                            <li><a href="https://8thlight.com/apprenticeship/" title="How to become a software crafter.">Apprenticeship</a></li>
                            <li><a href="https://8thlight.com/blog/" rel="external" title="https://8thlight.com/blog/">Blog</a></li>
                            <li><a href="https://twitter.com/#!/8thlightinc" rel="external" title="twitter.com/#!/8thlightinc">Twitter</a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <ul class="locations">
                        <li><a href="https://8thlight.com/locations/chicago/">Chicago</a></li>
                        <li><a href="https://8thlight.com/locations/london/">London</a></li>
                        <li><a href="https://8thlight.com/locations/los-angeles/">Los Angeles</a></li>
                        <li><a href="https://8thlight.com/locations/new-york/">New York</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </body>
</html>