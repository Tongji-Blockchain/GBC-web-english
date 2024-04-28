<?php 
$pageTitle='TECHNICAL PROGRAM COMMITTEE'; //THIS MUST BE SET FOR EACH PAGE
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


	<div class="organizer-group-title">Technical Program Co-Chair</div>

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
			<div class="affiliation">CUHK-Shenzhen</div>
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
		<div class="pic headshot round" style="background:url(images/tracks/SisiDuan.png);background-size:100px 100px;"></div>
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
		<div class="pic headshot round" style="background:url(images/tracks/LiehuangZhu.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Liehuang Zhu</div>
			<div class="role bold"></div>
			<div class="affiliation">Beijing Institute of Technology</div>
		</div>
	</div> 
    <div class="spacer"></div>

	<div class="organizer-track-title">Track 2: Blockchain for Real-World Applications</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/AshishKundu.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Ashish Kundu</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Cisco Systems </div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/JieLi.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Jie Li</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Shanghai Jiao Tong University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/KeqiuLi.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Keqiu Li</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Tianjin University</div>
		</div>
	</div>
	 <div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/JiangXiao.png);background-size:100px 100px;"></div>
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
		<div class="pic headshot round" style="background:url(images/tracks/YinqianZhang.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Yinqian Zhang</div>
			<div class="role bold"></div>
			<div class="affiliation">Southern University of Science and Technology</div>
		</div>
	</div>

	
	<div class="spacer"></div>
	<div class="organizer-track-title">Track 4: Communications Network Infrastructures & DePIN</div>
		
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/MauroConti.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Mauro Conti</div>
			<div class="role bold">IEEE Fellow, EiC of IEEE TIFS</div>
			<div class="affiliation">University of Padua</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/SchahramDustdar.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Schahram Dustdar</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Vienna University of Technology</div>
		</div>
	</div>
	
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/SongGuo.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Song Guo</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Hong Kong University of Science and Technology</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/XiapuLuo.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Daniel Xiapu Luo</div>
			<div class="role bold"></div>
			<div class="affiliation">The Hong Kong Polytechnic University</div>
		</div>
	</div>


	<div class="spacer"></div>
	<div class="organizer-track-title">Track 5: Integration of Blockchain, Data Elements & AI</div> 

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/LinWilliamCong.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Lin William Cong</div>
			<div class="role bold"></div>
			<div class="affiliation">Cornell University</div>
			<div class="affiliation">NBER & IC3</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/HuaweiHuang.png);background-size:100px 100px;"></div>
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
		<div class="pic headshot round" style="background:url(images/tracks/BinXiao.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Bin Xiao</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">The Hong Kong Polytechnic University</div>
		</div>
	</div>
	
	
	

	<div class="spacer"></div>
	<div class="organizer-track-title">Track 6: Blockchain for Web 3.0 & Metaverse Ecosystems</div> 

	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/XiuzhenCheng.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Xiuzhen Cheng</div>
			<div class="role bold">IEEE Fellow</div>
			<div class="affiliation">Shandong University</div>
		</div>
	</div>
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/KonstantinosStylianou.png);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Konstantinos Stylianou</div>
			<div class="role bold"></div>
			<div class="affiliation">University of the Glasgow</div>
		</div>
	</div> 
	<div class="flex flex-auto person-container"style="margin-bottom: 20px;margin-top: 20px;">
		<div class="pic headshot round" style="background:url(images/tracks/WeiWang.png);background-size:100px 100px;"></div>
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


<div class="organizer-group-title">TPC Members</div>

<table style="border-collapse: collapse; width: 100%;">

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Abderrahim Benslimane</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Avignon</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Aiman Erbad</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Hamad Bin Khalifa University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Alessandra Scafuro</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">North Carolina State University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Alessandro Aldini</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Urbino</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Alexander  Chuburkov</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Fintech Association</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Alexander  Semenov</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Florida</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Alysson Bessani</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Lisbon</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Amit Nanavati</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ahmedabad University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Andreas Veneris</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Toronto</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Angelo De Caro</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">IBM Research Zurich</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Aniket Kate</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Purdue University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Antonella Del Pozzo</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">CEA LIST</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ashok Kumar Das</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">IIIT Hyderabad</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Athanasios V. Vasilakos</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Lulea University of Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Athman Bouguettaya</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Sydney</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Axel Küpper</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">TU Berlin</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Bill Buchanan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Edinburgh Napier University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Catarina Ferreira Da Silva</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">ISTAR-IUL, CISUC</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Chase Wu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">New Jersey Institute of Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Chengnian Long</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shanghai Jiao Tong University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Cheqing Jin</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">East China Normal University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Christopher Kruegel</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of California, Santa Barbara</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Claudio Tessone</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Zurich</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Daehun Nyang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ewha Womans University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Danda Rawat</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Howard University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">David Mohaisen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Central Florida</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">David Wei</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Fordham University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Deepak Maram</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Mysten Labs</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Eirini Eleni Tsiropoulou</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of New Mexico</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Esteban Mocskos</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Buenos Aires</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Evangelos Pournaras</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Leeds</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Fehmi Jaafar</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Quebec University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Fei Chen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shenzhen University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Fengqi Li</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Dalian Jiaotong University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Filip Rezabek</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Technical University of Munich</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Francesco Longo</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Messina</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Frederico Schardong</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Instituto Federal Do Rio Grande Do Sul</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Gautam Srivastava</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Brandon University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">George Drosatos</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Athena Research Center</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Gladstone Arantes</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Brazilian Development Bank</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Guanqun  Zhou</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Stanford University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Guomin Yang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Singapore Management University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Gyu Myoung Lee</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Liverpool John Moores University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Haiming Jin</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shanghai Jiao Tong University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Hoang Tam Vo</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">RMIT University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Hong-Sheng Zhou</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Virginia Commonwealth University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Hongxin Hu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University at Buffalo, SUNY</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Houbing Song</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Maryland</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Huayi Duan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">ETH Zurich</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Igor Coelho</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Fluminense Federal University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Imre Kocsis</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Budapest Univ. of Technol. and Econ.</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ivan Homoliak</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Brno University of Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">James Kempf</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">UCSC Silicon Valley</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jean Martina</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Universidade Federal de Santa Catarina</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jean-Marc Seigneur</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Geneva</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jian Liu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhejiang University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jianan Hong</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shanghai Jiao Tong University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jianyu Niu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Southern University of Science and Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jie Yang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Florida State University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jinjun Chen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Swinburne University of Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jing  Chen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Wuhan University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jinguang Han</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Southeast University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jingyu He</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">City University of Hong Kong</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Joshua Ellul</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Malta</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jun Dai</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Worcester Polytechnic Institute</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Jun Zhao</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Nanyang Technological University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Kai Li</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">San Diego State University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Kaihua Qin</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Imperial College London</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Kaiping Xue</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Science and Technology of China</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Kang Chen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Tsinghua University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ke Xu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Tsinghua University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Keke Gai</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Beijing Institute of Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Keping Yu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Hosei University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Kwok-Yan Lam</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Nanyang Technological University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Laizhong Cui</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shenzhen University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Latif Ladid</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Luxembourg / IPv6 Forum</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Laura Ricci</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Pisa</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Lei Yang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Nevada, Reno</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Leonardo Aniello</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Southampton</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Liang Cai</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhejiang University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Liangmin Wang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Southeast University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Lo-Yao Yeh</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">National Central University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Luca Boldrin</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">InfoCert</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Lukas Aumayr</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">TU Wien</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Luyao Zhang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Duke Kunshan University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Marc Jansen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Applied Sciences Ruhr West</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Martin Maier</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">INRS, Canada</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Miaomiao Zhang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Tongji University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Mohammad Jalalzai</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of British Columbia</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Mohammad Rahman</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">UIU</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Murat Yuksel</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Central Florida</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Na Ruan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shanghai Jiao Tong University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Nicola Dimitri</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Siena</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Paulo Henrique Alves</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">PUC-Rio</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Pedro Miranda</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Waterloo</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Peiyao Sheng</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Illinois Urbana-Champaign</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Puwen Wei</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shandong University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Qi Li</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Tsinghua University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Qi Xia</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Univ. of Electron. Sci. & Tech. of China</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Qinglin Zhao</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Macau Univ. of Sci. and Tech.</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Qingqi Pei</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xidian University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Rami Bahsoon</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Birmingham</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Rongxing Lu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of New Brunswick</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Runchao Han</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">BabylonChain</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Salil Kanhere</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">UNSW Sydney</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">SB Venkatakrishnan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">The Ohio State University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shamik Sural</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">IIT Kharagpur</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shen Su</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Guangzhou University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Sheng Cao</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Univ. of Electron. Sci. & Tech. of China</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Shouling Ji</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhejiang University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Songze Li</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Southeast University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Stefan Schulte</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Hamburg University of Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Stefan Tai</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">TU Berlin</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Sylvain Bellemare</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">IC3, Cornell University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Taeho Jung</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Notre Dame</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Tao Xiang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Chongqing University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Thomas Thiery</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ethereum Foundation</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Tim Weingärtner</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Lucerne University of Applied Sciences and Arts</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ting Chen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Univ. of Electron. Sci. & Tech. of China (UESTC)</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Liangmin Wang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Southeast University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Wazen Shbair</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">VNX</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Weidong Shi</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Houston</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Weigan Wu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Sun Yat-Sen University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Weizhi Meng</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Technical University of Denmark</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xi Chen</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">GEIRI North America</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xiaoguang Liu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Nankai University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xiaokuan Zhang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">George Mason University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xihan Xiong</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Imperial College London</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xin Wan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Uniswap Labs</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xingliang Yuan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Monash University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Xun Yi</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">RMIT University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yang Shi</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Tongji University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yang Xu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Hunan University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Ye Wang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Macau</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yingjie Xue</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">HKUST(Guangzhou)</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yingjiu Li</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">University of Oregon</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yizhong Liu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Beihang University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yong Ding</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Guilin University of Electronic Technology</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yongjun Zhao</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">TikTok</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Youakim Badr</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Pennsylvania State University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Youngho Park</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Kyungpook National University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Youwen Zhu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Nanjing Univ. of Aeronaut. & Astronaut.</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yuan Lu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Institute of Software, Chinese Academy of Sciences</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yuanyuan Yang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Stony Brook University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yujin Potter</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">UC Berkeley</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yukun Cheng</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Suzhou Univ. of Sci. and Tech.</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Yuzhe Tang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Syracuse University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zakirul Alam Bhuiyan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Fordham University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhenguang Liu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhejiang Gongshang University</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhiguo Wan</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhejiang Lab</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhipeng Gao</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Beijing Univ. of Posts and Telecom.</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhipeng Wang</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Imperial College London</div>
    </td>
</tr>

<tr>
    <td style="border: 0.3vw solid #dddddd; border-right-color: transparent; padding: 8px; width: 32%;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Zhonghai Wu</div>
    </td>
    <td style="border: 0.3vw solid #dddddd; border-left-color: transparent; padding: 8px;">
        <div style="font-size: 18px; color: #191970; position: relative; line-height: 1.5;">Peking Univerisity</div>
    </td>
</tr>

    
</table>
<div class="spacer"></div>
<h2>Stay tuned for more updates, the assignment of track co-chairs may be modified according to the overall conference planning.</h2>
</div>

	
	
</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
