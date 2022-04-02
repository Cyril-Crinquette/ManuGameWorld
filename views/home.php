<section class="homePage">
    <div class="topPage">
        <h1 class="titleTopPage">
            Bienvenue sur ManuGameWorld ! MGW: le site d'informations sur les jeux vidéos !
        </h1>
    </div>
    <?php
    foreach ($arrayXML as $key => $value) { 
    // value = catégorie
    ?>
    <a href="http://myrssfeed.localhost/controllers/pages-controller.php?category=<?=$key?>" class="catLink">
        <h2 class="titleCategory"><?=$value->nameCategory?></h2>
    </a>
    <div class="cartegoryArticle">
    <?php
    $items = $value->flux->channel->item;
    for ($i=0; $i<$format ; $i++) { 
    // foreach (($value->flux->channel->item) as $key => $value) {  
    // value = item
    ?>
            <div class="cardArticle">
                <a href="<?=$items[$i]->link?>" target="_blank" rel="noopener noreferrer">
                    <img src="<?=$items[$i]->enclosure['url']?>" class="pictureCardArticle" alt="...">
                </a>
                <h5 class="descriptionCardArticle">
                    <?=$items[$i]->title?>
                </h5>
            </div>
    
    <?php
    }
    ?>
    </div>
    <?php
    }
    ?>
    
</section>
