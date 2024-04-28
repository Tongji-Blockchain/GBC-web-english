<?php 
$pageTitle='Workshop Co-Chair'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/organizers.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "370px") {  // 调整此值以适应您的导航栏高度
        nav.style.height = "0";
    } else {
        nav.style.height = "370px";  // 调整此值以适应您的导航栏高度
    }
}
</script>

<div style="display: flex; justify-content: space-between; margin-top: 0%; margin-bottom: 5%;">

	<div style="flex: 5;">

    <button class="small-button" onclick="Nav()">Committees<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <a href="advisoryC.php">Advisory Board</a>
            <a href="Steering.php">Steering Committee</a>
            <a href="TPC.php">Technical Program Committee</a>
            <a href="IFEC.php">Industry Forum Committee</a>
            <a href="publicity_co_chair.php">Publicity Co-Chair</a>
            <a href="publication_co_chair.php">Publication Co-Chair</a>
            <a href="award_chair.php">Award Chair</a>
            <a href="tutorial_chair.php">Tutorial Chair</a>
            <a href="workshop_co_chair.php">Workshop Co-Chair</a>
            <a href="volunteer.php"> Volunteer Co-Chair</a>

            <!-- 之前的内容
            <a href="organizers.php">Organizing Committee</a>
            <a href="operationC.php">Operations Committee</a>
            <a href="TPCmember.php">TPC members</a>
            -->
            
 
        </div><br/>
        <div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/BinCao.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Bin Cao</div>
				<div class="affiliation">Beijing University of Posts and Telecommunications</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/ButianHuang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Butian Huang</div>
				<div class="affiliation">Yunphant</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/HamedAhmadi.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Hamed Ahmadi</div>
				<div class="affiliation">University of York</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/JiahengWang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Jiaheng Wang</div>
				<div class="affiliation">Southeast University</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/ShengliZhang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Shengli Zhang</div>
				<div class="affiliation">Shenzhen University</div>
			</div>
		</div>

	</div>


</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>