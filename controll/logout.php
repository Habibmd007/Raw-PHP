<?php
session_start();

unset($_SESSION['role']);
unset($_SESSION['username']);
header('Location: ../view/index.php');