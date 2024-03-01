<?php 
$pageTitle='TPC member'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/organizers.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "250px") {  // 调整此值以适应您的导航栏高度
        nav.style.height = "0";
    } else {
        nav.style.height = "250px";  // 调整此值以适应您的导航栏高度
    }
}
</script>

<div style="display: flex; justify-content: space-between; margin-top: 0%; margin-bottom: 5%;">

    <div style="flex: 5;">
    
    <button class="small-button" onclick="Nav()">Committees<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <a href="advisoryC.php">Advisory Committee</a>
            <a href="Steering.php">Steering Committee</a>
            <a href="organizers.php">Organizing Committee</a>
            <a href="TPC.php">Technical Program Committee</a>
            <a href="IFEC.php">Industry Forums & Exhibition Committee</a>
            <a href="operationC.php">Operations Committee</a>
            <a href="TPCmember.php">TPC member</a>
            <a href="volunteer.php">Volunteer</a>
        </div><br/>

	
        <div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Abderrahim Benslimane (<span style="font-style: italic;">University of Avignon</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Taeho Jung (<span style="font-style: italic;">University of Notre Dame</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Salil Kanhere (<span style="font-style: italic;">UNSW Sydney</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Christopher Kruegel (<span style="font-style: italic;">University of California, Santa Barbara</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yujin Kwon (<span style="font-style: italic;">UC Berkeley</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Rongxing Lu (<span style="font-style: italic;">University of New Brunswick</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Alessandra Scafuro (<span style="font-style: italic;">North Carolina State University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Houbing Song (<span style="font-style: italic;">University of Maryland, Baltimore County</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Andreas Veneris (<span style="font-style: italic;">University of Toronto</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Lei Yang (<span style="font-style: italic;">University of Nevada, Reno</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yuanyuan Yang (<span style="font-style: italic;">Stony Brook University</span>)</div>


    </div>

    
</div>
<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
