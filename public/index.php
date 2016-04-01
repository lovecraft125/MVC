<?php
    require "../classes/config.php";
    use classes\DB\connection;
    use classes\Pagination;
    use classes\Article;
    use controller\ViewController;
    $page = !empty($_GET['page'])?$_GET['page']:1;
    //
    $per_page = 3;
    //

    $total_count = Article::count_all();

    $pagination = new Pagination($page, $per_page, $total_count);

    $sql = "SELECT * FROM articles ";
    $sql .= "LIMIT ".$pagination->offset();
    $sql .= ",".$per_page;
//    $articles = Article::find_by_sql($sql);
    include_tmp("header");

    $c = new ViewController();
    $c->home();

     include_tmp("footer");?>
