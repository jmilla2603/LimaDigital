<?php
session_start();

if (empty($_SESSION['PL']) && empty($_SESSION['FP'])) {
  $_SESSION['PL'] = 0;
  $_SESSION['FP'] = 0;
};

if (!isset($_POST['btnPL'])) {
  $_SESSION['PL'] = $_SESSION['PL'];
} else {
  $_SESSION['PL'] += 1;
}

if (!isset($_POST['btnFP'])) {
  $_SESSION['FP'] = $_SESSION['FP'];
} else {
  $_SESSION['FP'] += 1;
}


header("location:votacion.php");
