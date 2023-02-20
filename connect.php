<?php
/**
 * Created by PhpStorm.
 * User: Hrafn
 * Date: 08/04/2016
 * Time: 21:52
 */
session_start();

if (isset($_SESSION['adm_som'])) {
    if ($_SESSION['fail'] == 0)
        header('Refresh: 3;URL=index.php');
}
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>takeweight - Connexion</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php include('inc/headincs.inc.php'); ?>
        <link rel="stylesheet" href="css/connect.css">
        <link href="css/signin.css" rel="stylesheet">
    </head>
    <body>
        <div id="wrap">
            <!-- Affix
                <div class="container-fluid" style="background-color:#ccc;color:#000;height:70px;">
                    <h1>Somlec logo</h1>
                </div>
            -->

            <!-- Navbar -->

            <!-- -->

            <!-- Container -->
            <div class="container">
                <div class="container-message">
<?php
                    if (!empty($_SESSION['fail']))
                    {
                        if ($_SESSION['fail'] == 1)
                        {
?>
                            <div class="alert alert-danger fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Combinaison incorrecte.</strong> Le nom d'utilisateur ou le mot de passe est
                                incorrect.
                            </div>
<?php
                            session_destroy();
                        }
                    }

                    if (isset($_SESSION['fail']))
                    {
                        if ($_SESSION['fail'] == 0)
                        {
?>
                            <div class="alert alert-success fade in">
                                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                                <strong>Correct.</strong> Vous êtes connecté. Redirection dans 3 secondes.
                            </div>
<?php
                        }
                    }
?>
                </div>
                <!-- Form -->
                <form class="form-signin" role="form" action="act/admin-connect.act.php" method="post">
                    <h2 class="form-signin-heading">Connexion</h2>
                        <label class="sr-only" for="usr">Nom d'utilisateur</label>
                        <input type="text" class="form-control" id="usr" name="usr" placeholder="Nom d'utilisateur" required="">
                        <label class="sr-only" for="pwd">Mot de passe</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Mot de passe" required="">
                        <button type="submit" class="btn btn-lg btn-primary btn-block">Se connecter</button>
                </form>
                <!-- -->

            </div>
            <!-- -->

        </div>

    </body>
</html>
