<?php 
$pageTitle='Volunteer'; //THIS MUST BE SET FOR EACH PAGE
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
    <!-- 左侧部分：人物介绍 -->
    <div style="flex: 5;">
	<div class="flex flex-auto person-container">
		<div class="pic headshot round" style="background:url(images/organizers/RuiWang.jpg);background-size:100px 100px;"></div>
		<div class="info-container">
			<div class="name">Rui Wang</div>
			<div class="role bold">Volunteer Chair</div>
			<div class="affiliation">Tongji University</div>
		</div>
	</div>
    </div>

    <!-- 右侧部分：导航按钮 -->
    <div style="flex: 1;padding-left: 10px; text-align: left;">
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
</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
