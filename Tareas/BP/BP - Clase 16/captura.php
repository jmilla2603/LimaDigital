<?php

session_start();
echo $_SESSION['a'];
session_start();

echo $_SESSION['a'];

print_r($_SESSION['productos']);
