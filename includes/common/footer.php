</main>
<?php if (!defined('MAINTENANCE') && !defined('ERROR_404') && !defined('ADMIN')) { ?>
<section class="row wrap" id="newsletter">
    <div class="xLarge-12 large-12 medium-12 small-12 xSmall-12">
        <div class="padd-around">
            <form method="post">
                <p>Abonnez-vous à la Newsletter !</p>
                <input type="email" name="email" autocomplete="off" required spellcheck="false" placeholder="exemple@domaine.com">
                <button type="submit" class="btns">S'inscrire</button>
            </form>
        </div>
    </div>
</section>
<footer>
    <section class="row wrap">
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="padd-around">
                <p>Informations</p>
                <ul>
                    <li>
                        <a href="<?= DOMAIN ?>/rgpd">RGPD</a>
                    </li>
                    <li>
                        <a href="<?= DOMAIN ?>/cgu">CGU</a>
                    </li>
                    <li>
                        <a href="<?= DOMAIN ?>/mentions-legales">Mentions Légales</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="padd-around">
                <p>
                    <img id="footer-logo" src="<?= DOMAIN ?>/assets/media/images/logo-QS.png">
                    Contact
                </p>
                <ul>
                    <li>Autodromo Nazionale di Monza, 5 Viale di Vedano </li>
                    <li>20900 Monza MB - Italie</li>
                    <li>
                        <a href="mailto:thibault.barral3347@gmail.com">Email : thibault.barral3347@gmail.com</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="xLarge-4 large-4 medium-12 small-12 xSmall-12">
            <div class="padd-around">
                <p>Derniers articles</p>
                <ul>
                    <li>
                        <a href="https://www.formula1.com/en/results.html/2020/drivers.html" target = "_blank">Classement F1</a>
                    </li>
                    <li>
                        <a href="https://www.formula1.com/en/results.html/2020/team.html" target="_blank">Teams</a>
                    </li>
                    <li>
                        <a href="https://www.formula1.com/en/results.html/2020/races.html" target="_blank">Races</a>
                    </li>
                </ul>
            </div>
        </div>
    </section>
</footer>
<?php } ?>
<script type="text/javascript" src="<?= DOMAIN ?>/assets/js/script.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js%22%3E"</script>
<script>
    AOS.init();
</script>
</body>
</html>
