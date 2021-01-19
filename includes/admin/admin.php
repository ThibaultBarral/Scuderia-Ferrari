<?php  if (isset($_SESSION['id'])) { ?>

<section class="row wrap">
    <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
        <div class="padd-around">
            <h3>Salut <?= $_SESSION['firstname'] ?> <?= $_SESSION['lastname'] ?></h3>
            <p>Email : <?= $_SESSION['email'] ?></p>
        </div>
        <form method="POST">
            <input type="hidden" name="logout" value="ok">
            <button type="submit" class="btns">Déconnexion</button>
        </form>
    </div>
</section>

<?php } else {

    header('Location: ' . DOMAIN . '/login');
}