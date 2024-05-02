<?php 
$pageTitle='Steering Committee'; //THIS MUST BE SET FOR EACH PAGE
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
		<div class="pic headshot round" style="background:url(images/organizers/RameshRamadoss.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Ramesh Ramadoss</div>
			<div class="affiliation">Chair, IEEE Blockchain Technical Community</div>
		</div>
	</div>
	
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/GoraDatta.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Gora Datta</div>
			<div class="affiliation">Vice Chair, IEEE Blockchain Technical Community</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/yuanyu.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Yu Yuan</div>
				<!--<div class="role bold">Steering Committee Chair</div>-->
				<div class="affiliation">IEEE ISTO MASA</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/yizhilin.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chih-Lin I</div>
				<!--<div class="role bold">Steering Committee Chair</div>-->
				<div class="affiliation">China Mobile</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/RobertShorten.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Robert Shorten</div>
			<!--<div class="role bold">Volunteer Chair</div>-->
			<div class="affiliation">Imperial College London</div>
		</div>
	</div>
	
	
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/JianmingZhu.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Jianming Zhu</div>
			<!--<div class="role bold">Volunteer Chair</div>-->
			<div class="affiliation">Central University of Finance and Economics</div>
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
		<div class="pic headshot round" style="background:url(images/tracks/MingLi.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Ming Li</div>
			<div class="affiliation">W3SA-HK & IEEE BDL</div>
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
		<div class="pic headshot round" style="background:url(images/organizers/ZhongChen.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Zhong Chen</div>
			<!--<div class="role bold">Volunteer Chair</div>-->
			<div class="affiliation">Peking University</div>
		</div>
	</div>

	





    </div>
    
</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
