<?php
$name="";
if(isset($_GET['email']))
{
     $email=$_GET['email'];
     //echo $email;
}
if (isset($_GET['name'])) {
    # code...

    $name=$_GET['name'];
    //echo $name;

}
?>


    <!-- Footer Section Begin -->

<footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <?php if($name == "" && $name == NULL): ?>
                        <div class="footer__about__logo">
                        <a href="./index1.php"><img src="img/logo1.png" alt=""><h2><b>Annadaata</b></h2></a>
                    </div>
                    <?php endif; ?>
                    <?php if($name != "" && $name != NULL): ?>
                        <div class="footer__about__logo">
                        <a href="./index1.php?name=<?= $name ?>&email=<?= $email ?>"><img src="img/logo1.png" alt=""><h2><b>Annadaata</b></h2></a>
                    </div>
                    <?php endif; ?>
                        
                        <ul>
                            <li>Address: Solapur,Maharashtra</li>
                            <li>Email: kisaansahayak@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="home.php">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            
                        </ul>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Contact us</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="kisaansahayak@gmail.com
">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        
                    </div>
                </div>
            </div>
        </div>
    </footer>
     <!-- Footer Section End -->
