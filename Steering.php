<?php 
$pageTitle='Steering Committee'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/organizers.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "300px") {  // 调整此值以适应您的导航栏高度
        nav.style.height = "0";
    } else {
        nav.style.height = "300px";  // 调整此值以适应您的导航栏高度
    }
}
</script>

<div style="display: flex; justify-content: space-between; margin-top: 0%; margin-bottom: 5%;">

    <div style="flex: 5;">
    
    <button class="small-button" onclick="Nav()">Committees<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <a href="advisoryC.php">Advisory Committee</a>
            <a href="steering.php">Steering Committee</a>
            <a href="organizers.php">Organizing Committee</a>
            <a href="TPC.php">Technical Program Committee</a>
            <a href="IFEC.php">Industry Forums & Exhibition Committee</a>
            <a href="operationC.php">Operations Committee</a>
            <a href="TPCmember.php">TPC Members</a>
            <a href="volunteer.php">Volunteer</a>
        </div><br/>
    <div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/ZhongChen.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Zhong Chen</div>
			<!--<div class="role bold">Volunteer Chair</div>-->
			<div class="affiliation">Peking University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/GoraDatta.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Gora Datta</div>
			<div class="affiliation">Vice Chair, IEEE BCTC</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/MingLi.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Ming Li</div>
			<div class="affiliation">W3SA-HK & IEEE BDL</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/RameshRamadoss.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Ramesh Ramadoss</div>
			<div class="affiliation">Chair, IEEE BCTC</div>
		</div>
	</div>


	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/XuemingSi.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Xueming Si</div>
			<!--<div class="role bold">Volunteer Chair</div>-->
			<div class="affiliation">Fudan University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/KaiWei.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Kai Wei</div>
			<div class="affiliation">China Academy of Inf.  and Commun. Tech.</div>
		</div>
	</div>
    <div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/JianmingZhu.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Jianming Zhu</div>
			<!--<div class="role bold">Volunteer Chair</div>-->
			<div class="affiliation">Central University of Finance and Economics</div>
		</div>
	</div>
	


    </div>
    
</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
