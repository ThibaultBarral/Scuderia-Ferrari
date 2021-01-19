<section class="row wrap textblack">
    <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
        <div class="padd-around column center background-article-solo" style='background-image: url("<?= DOMAIN ?>/assets/media/images/<?= $article['image'] ?>")'></div>
        <div class="padd-around column center">
            <h1><?= $article['title'] ?></h1>
            <small>Plublié le <?= formatDate($article['created_at']) ?> par <b style="font-family: 'texte-bold', sans-serif;"><?= $article['author'] ?></b></small>
        </div>
        <div class="padd-around column center">
            <div class="padd-around">
                <div class="padd-around column textblack text-align">
            <p>
                <?= $article['content'] ?>
            </p>
                </div>
            </div>
            <a class="btns" href="<?= DOMAIN ?>/blog">Retour à la liste des articles</a>
        </div>
    </div>
</section>