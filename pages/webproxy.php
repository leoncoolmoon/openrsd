<?php if(!defined("OPENRSD")){die();} ?>
<?php
//Check for valid session:
session_start();
include('app/functions.php');
if(!isset($_SESSION['username'])){
	die("You must be logged in to view this page!");
}
echo '';
?>
<style>
.frame {
  display: block;
  width: 100vw;
  height: 75vh;
  max-width: 100%;
  margin: 0;
  padding: 0;
  border: 0 none;
  box-sizing: border-box;
}
</style>
	<div class="row">
        <div class="col-lg-12">
        	<h1 class="page-header">Web Proxy <small><a href="#"><div onClick="pageLoad('webproxy');" class="fa fa-refresh rotate"></div></a></small></h1>
			<iframe src="webproxy/index.php" class="frame"></iframe>
        </div>
    </div>