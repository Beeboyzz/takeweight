<?php
/**
 * Created by PhpStorm.
 * User: Hrafn
 * Date: 22/04/2016
 * Time: 15:03
 */

$link = new mysqli("localhost", "root", "", "takeweight");

if ($link->connect_errno)
{
    echo 'Echec lors de la connexion à MySQL : ('.$link->connect_errno.')'.$link->connect_error;
}