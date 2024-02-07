<?php 
$pageTitle='Organizing Committee'; //THIS MUST BE SET FOR EACH PAGE
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
	
	<div style="flex: 1;text-align: left;">
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

	<div style="flex: 5;">
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/wuzhiqiang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhiqiang Wu</div>
				<div class="role bold">Advisory Board Chair</div>
				<div class="affiliation">Tongji University</div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/zhengzhiming.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhiming Zheng</div>
				<div class="role bold">Honorary Chair</div>
				<div class="affiliation">Beihang University</div>
			</div>
		</div>

		
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/jiangchangjun.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Changjun Jiang</div>
				<div class="role bold">Honorary Chair</div>
				<div class="affiliation">Tongji University</div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/chunchen.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chun Chen</div>
				<div class="role bold">Honorary Chair</div>
				<div class="affiliation">Zhejiang University</div>
			</div>
		</div>
		
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/yizhilin.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chih-Lin I</div>
				<div class="role bold">Steering Committee Chair</div>
				<div class="affiliation">China Mobile</div>
			</div>
		</div>

		
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/yuanyu.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Yu Yuan</div>
				<div class="role bold">Steering Committee Chair</div>
				<div class="affiliation">IEEE</div>
			</div>
		</div>

		
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/liuerwu.jpg);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Erwu Liu</div>
				<div class="role bold">General Chair</div>
				<div class="affiliation">Tongji University</div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/HaoXu.jpg);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Hao Xu</div>
				<div class="role bold">Coordinator</div>
				<div class="affiliation">Tongji University</div>
			</div>
		</div>

		<div class="spacer"></div>

		<div class="organizer-group-title">TPC Co-Chair</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/elisa.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Elisa Bertino</div>
				<div class="role bold">IEEE Fellow, ACM Fellow</div>
				<div class="affiliation">Purdue University</div>
			</div>
		</div>
		
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/cuishuguang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Shuguang Cui</div>
				<div class="role bold">IEEE Fellow</div>
				<div class="affiliation">The Chinese University of Hong Kong, Shenzhen</div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/renkui.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Kui Ren</div>
				<div class="role bold">IEEE Fellow, ACM Fellow</div>
				<div class="affiliation">Zhejiang University</div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/chonggangwang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chonggang Wang</div>
				<div class="role bold">IEEE Fellow</div>
				<div class="affiliation">InterDigital</div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/leizhang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Lei Zhang</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">The University of Glasgow</div>
			</div>
		</div>
		
		<div class="spacer"></div>

		<div class="organizer-group-title">Publication Co-Chair</div>
		
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/HaiJin.jpg);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Hai Jin</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Huazhong University of Science and Technology</div>
			</div>
		</div>
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/HaibinKan.jpg);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Haibin Kan</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Fudan University</div>
			</div>
		</div>
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/ZhihongTian.jpg);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhihong Tian</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Guangzhou University</div>
			</div>
		</div>

	</div>





</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
