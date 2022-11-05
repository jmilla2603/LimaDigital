<?php

session_start();

$_SESSION['a']=15;

$productos=array('Lavadora'=>1500,'Televisor'=>2500);

$_SESSION['productos']=$productos;

