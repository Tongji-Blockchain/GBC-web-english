<?php 
$pageTitle='Student Career FairB'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/authors.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "420px") {
        nav.style.height = "0";
    } else {
        nav.style.height = "420px";
    }
}


</script>
<div style="display: flex; justify-content: space-between; margin-top: 0%; margin-bottom: 5%;">


	<div style="flex: 5;">
        <button class="small-button" onclick="Nav()">Program<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="line-height: 1;height:0; overflow: hidden; transition: 0.5s;">
        <a href="program.php" style="margin-left: 2%;">Program</a> 
            <a href="Keynotes.php" style="margin-left: 2%;">Keynotes</a> 
			
            <a href="ExecutiveForum.php" style="margin-left: 2%;">Executive Forum</a> 
			
            <a href="SymposiumTechnicalSessions.php" style="margin-left: 2%;">Symposium Technical Sessions</a> 
			
			<a href="Day1.php" style="margin-left: 2%;">Day1</a>
			
            <a href="Day2.php" style="margin-left: 2%;"> Day2</a> 
            
            <a href="Day3.php" style="margin-left: 2%;"> Day3</a> 
			
            <a href="IndustryPanels.php" style="margin-left: 2%;">Industry Panels</a> 
            <a href="Workshops.php" style="margin-left: 2%;">Workshops</a> 
            <a href="Tutorials.php" style="margin-left: 2%;">Tutorials</a> 
            
			
            <a href="StudentCareerFairB" style="margin-left: 2%;">Student Career FairB</a> 
            <a href="ProgramVolunteers" style="margin-left: 2%;">Call For Volunteers</a> 
        </div>
    </div>
</div>


Stay tuned
<!--Detailed programs will be released soon.-->

<div style="height:50px;"></div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
