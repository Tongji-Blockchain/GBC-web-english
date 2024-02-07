<?php 
$pageTitle='Industry Forums & Exhibition Committee'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/organizers.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "500px") {  // 调整此值以适应您的导航栏高度
        nav.style.height = "0";
    } else {
        nav.style.height = "500px";  // 调整此值以适应您的导航栏高度
    }
}
</script>

<div style="display: flex; justify-content: space-between; margin-top: 0%; margin-bottom: 5%;">

	<div style="flex: 3;">
	Stay tuned

	</div>

    <div style="flex: 1;padding-left: 10px; text-align: left;">
        <button class="small-button" onclick="Nav()">Committees</button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <a href="advisoryC.php">Advisory Committee</a>
            <a href="organizers.php">Organizing Committee</a>
            <a href="TPC.php">Technical Program Committee</a>
            <a href="IFEC.php">Industry Forums & Exhibition Committee</a>
            <a href="operationC.php">Operations Committee</a>
            <a href="volunteer.php">Volunteer</a>
            
        </div>
    </div>


</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>