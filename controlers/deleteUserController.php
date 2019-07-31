<?php
$userInfos = new users();
$userInfos->id = $_SESSION['id'];
$allOthersUsers = $userInfos->allOthersUsers();
if(isset($_GET['confirmDelete'])){
  $userInfos = new users();
  $userInfos->id = $_GET['confirmDelete'];
  $userInfos->deleteUser();
  ?>
  <meta http-equiv="refresh" content="0;URL=profilAdmin.php?deleteUser">
  <?php
}
 ?>
