<?php 
$pageTitle='Volunteer'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/organizers.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<div style="margin-top:0%; margin-bottom: 5%" class="flex-column">

	<button style="font-size: small" onclick="location.href='organizers.php';">Organizing Committee</button>
	<button style="font-size: small" onclick="location.href='TPC.php';">Technical Program Committee</button>
	<button style="font-size: small" onclick="location.href='operationC.php';">Operations Committee</button>
	<br/><br/>
	<button style="font-size: small" onclick="location.href='IFEC.php';">Industry Forums & Exhibition Committee</button>
	<button style="font-size: small" onclick="location.href='advisoryC.php';">Advisory Committee</button>
	<button style="font-size: small" onclick="location.href='volunteer.php';">Volunteer</button>

	<div class="spacer"></div>

	Stay tuned

</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>