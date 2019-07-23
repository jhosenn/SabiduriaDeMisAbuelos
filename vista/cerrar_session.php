<?php 

session_start();

unset($_SESSION);

session_destroy();

echo"<script>window.location = '../index.html' </script>";


 ?>