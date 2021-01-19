<?php
$articles = getArticles();
?>
<section class="row grey wrap">
    <section class="row wrap">
        <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
            <div class="padd-around column center textblack">
                <p class="titleblog line anim-typewriter text-align textyelllow">Latest News Ferrari Scuderia</p>
                <p>Les dernières actualités :</p>
            </div>
        </div>
    </section>
    <section class="row wrap">

        <?php foreach ($articles as $article) { ?>

        <div class="xLarge-6 large-6 medium-12 small-12 xSmall-12 articles-preview">
            <div class="padd-around">
                <article>
                    <div class="background-article" style='background-image: url("<?= DOMAIN ?>/assets/media/images/<?= $article['image'] ?>")'></div>
                    <h3 class="red"><?= $article['title'] ?></h3>
                    <small>Publié le <?= formatDate($article['created_at']) ?> par <b style="font-family: 'texte-bold', sans-serif;"><?= $article['author'] ?></b></small>
                    <div class="article-content">
                        <p>
                            <?= substr($article['content'], 0, 200) . '...' ?>
                        </p>
                    </div>
                    <a class="article-lire btns" href="<?= DOMAIN ?>/blog/<?= $article['uri'] ?>">Lire la suite</a>
                </article>
            </div>
        </div>

        <?php } ?>

    </section>
</section>