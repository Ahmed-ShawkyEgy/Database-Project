<?php
require($_SERVER['DOCUMENT_ROOT']."/Database-Project/helper/sqlExec.php");
if(session_status() == PHP_SESSION_NONE)
if($_SESSION['userid'] == null)
  session_start();
echo '<div id="navigation" class="col-xs-12">
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div id="ShortcutLinks">
        <a href="MainPage.php" class="navbar-brand">iWork</a>
          <a href="profile.php" class="navbar-brand">Profile</a>';
if($_SESSION['userid'] != null)
  echo '<a href= "'.$_SERVER["DOCUMENT_ROOT"].'"/Database-Project/php/logout.php" class="navbar-brand">Logout</a>';
echo   "</div>
    </div>
  </nav>
</div>";
 ?>
