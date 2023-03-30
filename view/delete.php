<?php
require_once "function.php";

$id = $_GET["id"];

if(deleteComment() > 0){
  location("admin.php");
}
?>