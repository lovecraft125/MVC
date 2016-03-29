<?php

if(isset($_POST['submit']) && !empty($_POST['title']) && !empty($_POST['title'])){
    $title = trim($_POST['title']);
    $title = htmlspecialchars($title);

    $body = trim($_POST['body']);
    $body = htmlspecialchars($body);
    if(!empty($_POST['author'])) {
        $author = trim($_POST['author']);
        $author = htmlspecialchars($author);
    }else{
        $author = "Anonimni korisnik";
    }
    $articles = new classes\Article();

    $articles->title = $title;
    $articles->body = $body;
    $articles->author = $author;

    $articles->insert();

    header("Location: .");
}


?>
<div class="main">
    <h2>Dodaj novu vest</h2>
    <form action="" method="post">
        <table>
            <tr>
                <td><label for="title">Naslov</label></td>
                <td><input type="text" name="title" id="title"></td>
            </tr>
            <tr>
                <td colspan="2"><label for="body">Text</label></td>
            </tr>
            <tr>
                <td colspan="2">
                    <textarea name="body" id="body" rows="14" cols="55"></textarea>
                </td>
            </tr>
            <tr>
                <td><label for="author">Autor</label></td>
                <td><input type="text" name="author" id="author"></td>
            </tr>
            <tr>
                <td><input type="submit" name="submit" value="Dodaj clanak"></td>
            </tr>
        </table>
    </form>
</div>