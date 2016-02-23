<?php

session_start();

require 'config.php';

//Database Conection

$link = mysql_connect('localhost', 'root', '') or die(mysql_error());

mysql_select_db('phptest') or die(mysql_error());