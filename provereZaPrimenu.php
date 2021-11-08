<?php
$ime= filter_var($ime, FILTER_SANITIZE_STRING);
$indeks= filter_var($indeks, FILTER_SANITIZE_NUMBER_INT);
$title=filter_input(INPUT_POST,'title', FILTER_SANITIZE_STRING);
$id=filter_input(INPUT_POST,'id', FILTER_SANITIZE_NUMBER_INT);
$price=filter_input(INPUT_POST,'price', FILTER_SANITIZE_NUMBER_INT);
$category=filter_input(INPUT_POST,'category', FILTER_SANITIZE_STRING);
?>
<input type="text" name="#" pattern="[^\s]{3,}">
