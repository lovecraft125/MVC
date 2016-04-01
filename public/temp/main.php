<div class="main">

    <?php foreach($this->articles as $article):?>
    <div class="article">
            <h3><?php echo $article->title;?></h3>
            <p><?php echo $article->body;?></p>
            <p><i><?php echo $article->author;?></i></p>
    </div>
    <?php endforeach;?>
    <div class="pagination">
        <?php
            global $pagination;
            if($pagination->total_pages()>1){
                if($pagination->has_previous_page()){
                    echo "<a href=\"index.php?aid=main&page=".$pagination->previous()."\">Previous</a>";
                }
                for($i=1;$i <= $pagination->total_pages(); $i++){
                    echo "<a href=\"index.php?aid=main&page=".$i."\">$i</a>";
                }
                if($pagination->has_next_page()){
                    echo "<a href=\"index.php?aid=main&page=".$pagination->next()."\">Next</a>";
                }
            }
        ?>
    </div>

</div>