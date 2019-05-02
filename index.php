<?php
require("modules/head/index.php");
require("modules/topbar.php");
require("modules/navbar.php");
require("modules/header.php");
require("modules/arama.php");
require("modules/page.php");
require("modules/footer.php");
require("modules/js.php");
require("modules/rich.php");
$head = new Head();
$topbar = new Topbar();
$navbar = new Navbar();
$header = new Header();
$arama = new Arama();
$page = new Page();
$footer = new Footer();
$js = new Js();
$rich = new Rich();
?>
<!DOCTYPE html>
<html lang="tr">
<?php $head->getHead(); ?>
  <body id="page-top">
<?php $topbar->getTopbar(); ?>
<?php $navbar->getNavbar(); ?>
<?php $header->getHeader(); ?>
<?php $arama->getArama(); ?>
<?php $page->getPage(); ?>
<?php $footer->getFooter(); ?>
<?php $js->getJs(); ?>
<?php $rich->getRich(); ?>  
</html>