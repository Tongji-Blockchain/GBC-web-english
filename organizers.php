<?php 
$pageTitle='Organizing Committee'; //THIS MUST BE SET FOR EACH PAGE
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

		
		<!--<hr style="border: none; border-top: 1px dashed #191970; margin-top: 20px; margin-bottom: 20px;margin-right: 65%; text-align: left;">--><!--虚线分隔符-->
		
	<div class="organizer-group-title">General Chair</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/liuerwu.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Erwu Liu</div>
				<div class="affiliation">Tongji University</div>
			</div>
		</div>

		<div class="organizer-group-title">Advisory Board</div>
		
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/wuzhiqiang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhiqiang Wu</div>
				<div class="affiliation">Chair, Tongji University</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/zhengzhiming.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhiming Zheng</div>
				<!--<div class="role bold">Advisory Board Chair</div>-->
				<!--<div class="role bold">Honorary Chair</div>-->
				<div class="affiliation">Beihang University</div>
			</div>
		</div>

		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/jiangchangjun.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Changjun Jiang</div>
				<!--<div class="role bold">Advisory Board Chair</div>-->
				<!--<div class="role bold">Honorary Chair</div>-->
				<div class="affiliation">Tongji University</div>
			</div>
		</div>

		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/chunchen.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chun Chen</div>
				<!--<div class="role bold">Advisory Board Chair</div>-->
				<!--<div class="role bold">Honorary Chair</div>-->
				<div class="affiliation">Zhejiang University</div>
			</div>
		</div>
		

		
		<div class="organizer-group-title">Steering Committee</div>
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
		<!--<hr style="border: none; border-top: 1px dashed #191970; margin-top: 20px; margin-bottom: 20px;margin-right: 65%; text-align: left;">--><!--虚线分隔符-->
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
		<div class="pic headshot round" style="background:url(images//organizers/JianmingZhu.png);background-size:100px 100px;"></div>
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


		<div class="spacer"></div>

		<div class="organizer-group-title">TPC Co-Chair</div>

		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/chonggangwang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chonggang Wang</div>
				<div class="role bold">IEEE Fellow</div>
				<div class="affiliation">InterDigital</div>
			</div>
		</div>

		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/elisa.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Elisa Bertino</div>
				<div class="role bold">IEEE Fellow, ACM Fellow</div>
				<div class="affiliation">Purdue University</div>
			</div>
		</div>
			<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/renkui.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Kui Ren</div>
				<div class="role bold">IEEE Fellow, ACM Fellow</div>
				<div class="affiliation">Zhejiang University</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/leizhang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Lei Zhang</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">The University of Glasgow</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/cuishuguang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Shuguang(Robert) Cui</div>
				<div class="role bold">IEEE Fellow</div>
				<div class="affiliation">CUHK-Shenzhen</div>
			</div>
		</div>
 

	

	<div class="spacer"></div>
		<div class="organizer-group-title">Publicity Co-Chair</div>

		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/JiaqiYan.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Jiaqi Yan</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Nanjing University</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/QianhongWu.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Qianhong Wu</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Beihang University</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/XiaoshuaiZhang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Xiaoshuai Zhang</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Ocean University of China</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/YaoSun.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Yao Sun</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">The University of Glasgow</div>
			</div>
		</div>
		
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/YiSun.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Yi Sun</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Institute of Computing Technology,CAS</div>
			</div>
		</div>
	

		<div class="spacer"></div>
		<div class="organizer-group-title">Publication Co-Chair</div>
		
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/HaiJin.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Hai Jin</div>
				<div class="role bold">IEEE Fellow</div>
				<div class="affiliation">Huazhong Univ.of Sci. and Tech.</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/HaibinKan.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Haibin Kan</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Fudan University</div>
			</div>
		</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/ZhihongTian.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhihong Tian</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Guangzhou University</div>
			</div>
		</div>

			
		<div class="organizer-group-title">Award Chair</div>
		
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/XiaosongZhang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Xiaosong Zhang</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">Univ. of Electron. Sci. & Tech. of China</div>
			</div>
		</div>
		

		<div class="organizer-group-title">Tutorial Chair</div>
		
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/YanZhang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Yan Zhang</div>
				<!-- <div class="role bold">Associate Editor of IEEE IoT Journal</div> -->
				<div class="affiliation">University of Oslo</div>
			</div>
		</div>

		<div class="organizer-group-title">Workshop Chair</div>
		
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
		
		<div class="organizer-group-title">Volunteer</div>

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/RuiWang.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Rui Wang</div>
			<!--<div class="role bold">Volunteer Chair</div>-->
			<div class="affiliation">Tongji University</div>
		</div>
	</div>
    

    <div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/XiaoWu.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name"> Xiao Wu</div>
			<div class="affiliation">Ethereum Riyadh Community</div>
		</div>
	</div>
		
		<div class="organizer-group-title">Coordinator & TPC Vice chair for EDAS</div>
		<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
			<div class="pic headshot round" style="background:url(images/organizers/HaoXu.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Hao Xu</div>
				<!--<div class="role bold">Coordinator & TPe Vice chair for EDAS</div>-->
				<div class="affiliation">Tongji University</div>
			</div>
		</div>
		
	</div>
</div>
<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
