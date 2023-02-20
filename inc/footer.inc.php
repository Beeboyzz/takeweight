

<!-- <footer class="footer">
    <div class="container">
        <a href="#">Contact</a>
        <a href="#">Mentions légales</a>
        <a href="#">Admin</a>
    </div>
</footer> -->

<footer class="modal-footer footer navbar-default navbar-fixed-bottom">
    <div class="container">
        <div class="navbar-header">
            <div class="navbar-text text-muted pull-left">
                &copy; 2020
                <?php
                /*
                if (date("Y") > 2016)
                {
                    echo " - ".date("Y");
                }
                else
                {

                }*/
                ?>
                Take weight
            </div>
        </div>
        <!--<div class="collapse navbar-collapse" id="footNav">-->
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Mentions légales</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-envelope"></span> Contact</a></li>
                <?php
                if (isset($_SESSION['adm_som'])) {
                    ?>
                    <li><a href="disconnect.php"><span class="fa fa-sign-out"></span> Déconnexion</a></li>
                    <?php
                }
                else
                {
                ?>
                    <li><a href="connect.php"><span class="glyphicon glyphicon-user"></span> Admin</a></li>
                    <!-- <li><a href="connect.php"><span class="fa fa-sign-in"></span> Admin</a></li> -->
                <?php
                }
                ?>
            </ul>
        <!-- </div> -->
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="js/js.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/coolizer.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/modernizer.js"></script>
