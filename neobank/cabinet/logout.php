<?php
require 'auth.php';
session_destroy();
header("Location: /neobank/index.php");
exit;