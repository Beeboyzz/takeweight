<?php
/**
 * Created by PhpStorm.
 * User: Hrafn
 * Date: 08/04/2016
 * Time: 22:51
 */

include('../inc/conn.inc.php');

if (!empty($_POST['usr']) && !empty($_POST['pwd']))
{


    $res = mysqli_query($link, 'SELECT * FROM admin WHERE id=1');
    $a = mysqli_fetch_assoc($res);

    if (htmlspecialchars(stripslashes($_POST['usr'])) == $a['usr'] && $hash2 == $a['pwd'])
    {
        session_start();

        $_SESSION['adm_som'] = 'admin';
        $_SESSION['fail'] = 0;

        header('Location: ../connect.php');
    }
    else
    {
        session_start();

        $_SESSION['fail'] = 1;

        header('Location: ../connect.php');
    }
}
else
{
    header('Location: ../connect.php');
}