<?php
if(isset($_GET['order'])){
  $pokemonPage = new news();
  //par défault la première page
  $page = 1;
  //on limit l'affichage à 5 patients
  $limit = 10;
  if (!empty($_GET['page'])) {
      $page = $_GET['page'];
  }
  $start = ($page - 1) * $limit;
  $pokemonPagination = $pokemonPage->newsPaginationAsc($start);

  $pokemonsCount = $pokemonPage->maxNews();
  $maxPagination = ceil($pokemonsCount->id / $limit);

}else{
    $pokemonPage = new news();
//par défault la première page
    $page = 1;
//on limit l'affichage à 5 patients
    $limit = 10;
    if (!empty($_GET['page'])) {
        $page = $_GET['page'];
    }
    $start = ($page - 1) * $limit;
    $pokemonPagination = $pokemonPage->newsPagination($start);

    $pokemonsCount = $pokemonPage->maxNews();
    $maxPagination = ceil($pokemonsCount->id / $limit);

}
?>
