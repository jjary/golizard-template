<!-- Start footer -->
<footer class="footer">
    <div class="container">
        <div class="row footer--wrapper">
            <!-- Site logo start-->
            <div class="col-md-6 col-lg-2 footer--logo">
                <a href="#">
                    <?php
                        dynamic_sidebar('footer-logo')
                    ;?>
                </a>
            </div>
            <!-- Site logo end-->

            <div class="col-md-6 col-lg-3 footer--item">
                <h4>Kontakt</h4>
                <p>123 123 123</p>
                <p>mail@mail.pl</p>
            </div>
            <div class="col-md-6 col-lg-3 footer--item">
                <h4>Kontakt</h4>
                <p>123 123 123</p>
                <p>mail@mail.pl</p>
            </div>
            <div class="col-md-6 col-lg-3 footer--item">
                <h4>Nawigacja</h4>
                <div class="footer--item__links">
                    <a href="#">Strona główna</a>
                    <a href="#">O mnie</a>
                    <a href="#">Realizacje</a>
                    <a href="#">Kontakt</a>
                    <a href="#">Polityka prywatności</a>
                </div>
            </div>
            <div class="col-md-12 col-lg-1 footer--socials">
                <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
            </div>
        </div>
        <hr class="footer--divider">
        <div class="row footer--copy">
            <div class="col-6 footer--copy__left">
                <p>Copyright: Golizard <?php echo date("Y");?></p>
            </div>
            <div class="col-6 footer--copy__right">
                <p>Wdrożenie: <a href="https://www.golizard.pl/">golizard.pl</a></p>
            </div>
        </div>
    </div>
</footer>
<!-- End footer -->

<div className="scroll-to-top">
    <span class="scrl-btn scrl-btn-position scrl-btn-style"><i class="fa-solid fa-angles-up"></i>
</div>

<?php wp_footer();?>
</body>
</html>