<?php
session_start();
session_destroy();  // Destroi todas as sessões
header("Location: " . URL_PATH . "../login.php");
exit;