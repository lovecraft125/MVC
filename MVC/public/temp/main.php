<div class="main">
    <?php foreach($this->articles as $article):?>
        <div class="article">
            <h3><?php echo $article->title;?></h3>
            <p><?php echo $article->body;?></p>
            <p><i><?php echo $article->author;?></i></p>
        </div>
    <?php endforeach;?>
</div>