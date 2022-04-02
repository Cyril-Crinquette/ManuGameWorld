<?php
    $items = $arrayXML[$category]->flux->channel->item;
    for ($i=0; $i<$format ; $i++) { 
?>

    <!-- <div class="card">
        <h3 class="titleContent">< ?=$items[$i]->title?> </h3>
        <div class="cardsContent">
            <article>
            <p class="paragContent">< ?=$items[$i]->description?></p>
            </article>
            <aside>
            <img src="< ?=$items[$i]->enclosure['url']?>" alt="image de l'article">
            </aside>
        </div>
        <a class="discover" href="< ?=$items[$i]->link?>">En savoir plus</a>
    </div> -->
<!-- < ?php  ?> -->








<!-- < ?php for ($i=0; $i <$format ; $i++)  ?> -->

    
        <div class="cardPage">
            <div class="cardLeft">
                <a class="discover" href="<?=$items[$i]->link?>" target="_blank">
                    <img src="<?=$items[$i]->enclosure['url']?>" alt="image de l'article">
                </a>
            </div>
            <div class="cardsContent">
                <p class="paragContent"><?=$items[$i]->description?></p>
                <h3 class="titleContent"><?=$items[$i]->title?> </h3>
            </div>
        </div>
    <?php } ?> 


