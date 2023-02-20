<?php
/**
 * Created by PhpStorm.
 * User: Hrafn
 * Date: 10/05/2016
 * Time: 22:01
 */

session_start();

if (isset($_SESSION['adm_som']))
    session_destroy();

header('Location: index.php');