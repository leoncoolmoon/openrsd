<?php
//Check for valid session:
session_start();
include('app/functions.php');
if(!isset($_SESSION['username'])){
	die("You must be logged in to view this page!");
}
echo '';
?>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">OpenRSD Updates <small><a href="#"><div onClick="pageLoad('check');" class="fa fa-refresh rotate"></div></a></h1>
        </div>
    </div>
    <div class="row">
    	<div class="col-lg-12">
    		<?php
    		$c = shell_exec("git fetch && git status");
    		if (strpos($c, 'no changes added to commit') !== false) {
    			echo '<p>You modified OpenRSD files, we cannot update this. Please reinstall!</p>';
			}elseif (strpos($c, 'behind') !== false) {
    			echo '<p>An update is available! Please click the button below to update!</p>';
    			echo '<a href="./app/updateorsd.php" class="btn btn-sm btn-info btn-raised">Update OpenRSD!</a>';
			} else {
				echo '<p>OpenRSD is completely up to date!</p>';
			}
    		?>
    	</div>
    </div>