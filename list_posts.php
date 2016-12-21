<!DOCTYPE html>
<?php session_start() ?>
<?php $posts = json_decode(file_get_contents('posts.json'), true); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <meta content="All Posts - 8th Light's blog is a place for software crafters to indulge their curiosities, share new ideas, and debate topics relevant to software craftsmanship." name="description">
        <meta content="Chicago, London, Los Angeles, New York, Custom Software, Software Development, Software Craftsmanship, Web Applications, Mobile Applications, Embedded Applications, Web Design, User Experience Design, User Interface Design, HTML5, CSS3, Ruby, Ruby on Rails, Clojure, jQuery, iOS, Android, Java, node.js, Learning, Web Development, Application Development, Consulting, DevOps" name="keywords">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@8thLightInc">
        <meta property="og:title" content="All Posts | 8th Light">

        <meta property="og:description" content="8th Light's blog is a place for software crafters to indulge their curiosities, share new ideas, and debate topics relevant to software craftsmanship.">

        <title>My Blog</title>
        <link rel="stylesheet" href="/css/blog.css">
    </head>
    <body>
        <header class="dark">
            <div class="container">
                <div class="cf">
                    <a class="logo-wrap-mobile" href="https://8thlight.com/"><span class="logo"></span></a>
                    <span class="toggle" data-id="menu-toggle"></span>
                    <a href="https://8thlight.com/contact/" class="header__contact">Contact Us</a>
                </div>
                <nav data-id="header-nav">
                    <span class="logo-wrap"><a class="mobile-hide" href="https://8thlight.com/"><span class="logo"></span></a></span>
                    <ul>
                        <li class="top-level-nav "><a><span>Work</span><span class="sub-nav-arrow"></span></a>
                            <ul class="sub-nav">
                                <li><a href="https://8thlight.com/services/">Services</a></li>
                                <li><a href="https://8thlight.com/design-studio/">Design Studio</a></li>
                                <li><a href="https://8thlight.com/portfolio/">Portfolio</a></li>
                                <li><a href="https://8thlight.com/process/">Process</a></li></ul>
                        </li>
                        <li class="top-level-nav "><a><span>Careers</span><span class="sub-nav-arrow"></span></a>
                            <ul class="sub-nav">
                                <li><a href="https://8thlight.com/careers/">Careers at 8th Light</a></li>
                                <li><a href="https://8thlight.com/apprenticeship/">Apprenticeship Program</a></li>
                                <li><a href="https://8thlight.com/apply/">Apply</a></li>
                            </ul>
                        </li>
                        <li class="top-level-nav "><a><span>Company</span><span class="sub-nav-arrow"></span></a>
                            <ul class="sub-nav">
                                <li><a href="https://8thlight.com/team/">Team</a></li>
                                <li><a href="https://8thlight.com/locations/">Locations</a></li>
                                <li><a href="https://8thlight.com/principles/">Principles</a></li>
                            </ul>
                        </li>
                        <li class="top-level-nav "><a href="https://8thlight.com/community/"><span>Community</span></a></li>
                        <li class="top-level-nav current"><a href="https://8thlight.com/blog/"><span>Blog</span></a></li>
                        <li class="top-level-nav"><a class="top-level-nav__contact" href="https://8thlight.com/contact/"><span>Contact Us</span></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section>
            <div class="container"><div class="column three-fourths">
                    <h1>All Posts</h1>
                    <?php foreach ($posts as $post): ?>
                        <article>
                            <h2 class="new blog-title">
                                <a href="/viewdetail.php?id=<?=$post['id'] ?>"><?= $post['title'] ?></a>
                            </h2>
                            <section class="breadcrumbs">
                                <ul>
                                    <li class="author">
                                        <a href="#"><?= $post['author']; ?></a>
                                    </li>
                                    <li class="date"><?= $post['date']; ?></li>
                                </ul>
                            </section>

                            <div class="blog-excerpt">
                                <?= substr($post['content'], 0, 200) ?>...<a href="/viewdetail.php?id=<?= $post['id']?>">more.</a>
                            </div>
                        </article>
                    <?php endforeach; ?>

                    <p class="pagination">
                        <span>
                            Page 1 <i>of</i> 40
                        </span>

                        <span> · </span>
                        <a href="https://8thlight.com/blog/page2">
                            <span> Next →</span>
                        </a>
                    </p>
                </div>
            </div>
        </section>
    </body>
</html>