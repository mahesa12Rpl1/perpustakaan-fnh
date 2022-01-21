<?php
session_start();
session_destroy();

header("Location:index.php");
alert ('Anda berhasil logout !');

?>