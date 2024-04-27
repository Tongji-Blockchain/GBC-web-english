<?php 
$pageTitle='TECHNICAL PROGRAM COMMITTEE'; //THIS MUST BE SET FOR EACH PAGE
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
			<a href="advisoryC.php">Advisory Board</a>
			<a href="Steering.php">Steering Committee</a>
            <a href="organizers.php">Organizing Committee</a>
            <a href="TPC.php">Technical Program Committee</a>
            <a href="IFEC.php">Industry Forums & Exhibition Committee</a>
            <a href="operationC.php">Operations Committee</a>
			<a href="TPCmember.php">TPC members</a>
            <a href="volunteer.php">Volunteer</a>
        </div><br/>

	<div class="organizer-group-title">TPC Co-Chair</div>

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/elisa.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Elisa Bertino</div>
			<div class="role bold">IEEE/ACM Fellow</div>
			<div class="affiliation">Purdue University</div>
		</div>
	</div>
	
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/cuishuguang.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Shuguang Cui</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">The Chinese University of Hong Kong, Shenzhen</div>
		</div>
	</div>

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/renkui.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Kui Ren</div>
			<div class="role bold">IEEE/ACM Fellow</div>
			<div class="affiliation">Zhejiang University</div>
		</div>
	</div>

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/organizers/chonggangwang.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Chonggang Wang</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">InterDigital, Inc.</div>
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

	<div class="spacer"></div>

	 <div class="organizer-group-title">Track Co-Chair</div>

	<div class="organizer-track-title">Track 1: Blockchain Consensus, Performance, and Scalability</div>

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/XiaotieDeng.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Xiaotie Deng</div>
			<div class="role bold">IEEE/ACM Fellow</div>
			<div class="affiliation">Peking University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/SisiDuan.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Sisi Duan</div>
			<div class="role bold"></div>
			<div class="affiliation">Tsinghua University</div>
		</div>
	</div> 
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/GiancarloFortino.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Giancarlo Fortino</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">University of Calabria</div>
		</div>
	</div> 
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/LiehuangZhu.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Liehuang Zhu</div>
			<div class="role bold"></div>
			<div class="affiliation">Beijing Institute of Technology</div>
		</div>
	</div> 
    <div class="spacer"></div>

	<div class="organizer-track-title">Track 2: Blockchain for Real-World Applications</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/AshishKundu.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Ashish Kundu</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Cisco Systems </div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/JieLi.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Jie Li</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Shanghai Jiao Tong University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/KeqiuLi.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Keqiu Li</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Tianjin University</div>
		</div>
	</div>
	 <div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/JiangXiao.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Jiang Xiao</div>
			<div class="role bold"></div>
			<div class="affiliation">Huazhong University of Science and Technology</div>
		</div>
	</div> 

	<div class="spacer"></div>
	<div class="organizer-track-title">Track 3: Security for Blockchain, Blockchain for Security</div>

	
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/ElenaFerrari.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Elena Ferrari</div>
			<div class="role bold">IEEE/ACM Fellow</div>
			<div class="affiliation">University of Insubria</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/ZhiqiangLin.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Zhiqiang Lin</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">The Ohio State University</div>
		</div>
	</div>

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/QianWang.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Qian Wang</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Wuhan University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/YinqianZhang.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Yinqian Zhang</div>
			<div class="role bold"></div>
			<div class="affiliation">Southern University of Science and Technology</div>
		</div>
	</div>

	
	<div class="spacer"></div>
	<div class="organizer-track-title">Track 4: Communications Network Infrastructures & DePIN</div>
		
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/MauroConti.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Mauro Conti</div>
			<div class="role bold">IEEE Fellow, EiC of IEEE TIFS</div>
			<div class="affiliation">University of Padua</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/SchahramDustdar.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Schahram Dustdar</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Vienna University of Technology</div>
		</div>
	</div>
	
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/SongGuo.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Song Guo</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Hong Kong University of Science and Technology</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/XiapuLuo.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Daniel Xiapu Luo</div>
			<div class="role bold"></div>
			<div class="affiliation">The Hong Kong Polytechnic University</div>
		</div>
	</div>


	<div class="spacer"></div>
	<div class="organizer-track-title">Track 5: Integration of Blockchain, Data Elements & AI</div> 

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/LinWilliamCong.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Lin William Cong</div>
			<div class="role bold"></div>
			<div class="affiliation">Cornell University</div>
			<div class="affiliation">NBER & IC3</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/HuaweiHuang.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Huawei Huang</div>
			<div class="role bold"></div>
			<div class="affiliation">Sun Yat-sen University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/CongWang.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Cong Wang</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">City University of Hong Kong</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/BinXiao.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Bin Xiao</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">The Hong Kong Polytechnic University</div>
		</div>
	</div>
	
	
	

	<div class="spacer"></div>
	<div class="organizer-track-title">Track 6: Blockchain for Web 3.0 & Metaverse Ecosystems</div> 

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/XiuzhenCheng.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Xiuzhen Cheng</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Shandong University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/KonstantinosStylianou.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Konstantinos Stylianou</div>
			<div class="role bold"></div>
			<div class="affiliation">University of the Glasgow</div>
		</div>
	</div> 
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/WeiWang.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Wei Wang</div>
			<div class="role bold"></div>
			<div class="affiliation">Beijing Jiaotong University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/YanZheng.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Zheng Yan</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Xidian University</div>
		</div>
	</div>

	<div class="spacer"></div>
	<h2>Stay tuned for more updates, the assignment of track co-chairs may be modified according to the overall conference planning.</h2>
</div>




	
	
</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
