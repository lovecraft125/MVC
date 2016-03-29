<?php
    require "../classes/config.php";
    use classes\DB\connection;
    use classes\DB;
    use classes\Article;
    use controller\ViewController;
    $articles = Article::find_all();
    include_tmp("header");

    $c = new ViewController();
    $c->home();

     include_tmp("footer");?>
