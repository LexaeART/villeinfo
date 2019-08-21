<?php
$activInfos = new news();
$listNews = $activInfos->allNews();
$lastNews = $activInfos->lastNews();
if(isset($_GET['idArticle'])){
  $activInfos->id = $_GET['idArticle'];
  $oneNews = $activInfos->oneNews();
}
 ?>
