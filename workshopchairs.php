<?php 
$pageTitle='workshop chairs'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/authors.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "150px") {
        nav.style.height = "0";
    } else {
        nav.style.height = "150px";
    }
}
</script>

<div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0%; margin-bottom: 5%;">
    <div style="flex: 5;">
        <button class="small-button" onclick="Nav()">Authors<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <div class="spacer" style="height: 5px;"></div> <!-- 使用百分比单位 -->
            <a href="Authors.php" style="margin-left: 2%;">Authors</a> <!-- 使用百分比单位 -->
            <div class="spacer" style="height: 5px;"></div> <!-- 使用百分比单位 -->
            <a href="Call for Tutorials.php" style="margin-left: 2%;">Call for Tutorials</a> <!-- 使用百分比单位 -->
            <div class="spacer" style="height: 5px;"></div> <!-- 使用百分比单位 -->
            <a href="Workshopchairs.php" style="margin-left: 2%;">workshop chairs</a> <!-- 使用百分比单位 -->
        </div>
    </div>
</div>


<div class="flex flex-auto" style="padding-top: 1%">
	<div style="margin-bottom: 1%;">
		<h1>IMPORTANT DATES</h1>
        <br><br>
        <br><br>
        <h1>WORKSHOPS</h1>
        <br><br>
        <br><br>

        <h1>AUTHOR AND SUBMISSION GUIDELINES</h1>
        Notification of Selection: 1 February  2024, with the deadline extended to 28 March 2024. Additionally, please ensure that the subject of your email contains 'IEEE GBC 2024 Tutorial Proposal'.
        <br><br>
        All tutorial proposals should be submitted to Prof. Yan Zhang via email.
        <class style="font-weight: bold"> (yanzhang@ifi.uio.no)</class>
		<br><br>

	</div>
</div>

<div style="height:50px;"></div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>

