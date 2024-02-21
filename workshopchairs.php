<?php 
$pageTitle='workshop chairs'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/authors.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "120px") {  // 调整此值以适应您的导航栏高度
        nav.style.height = "0";
    } else {
        nav.style.height = "120px";  // 调整此值以适应您的导航栏高度
    }
}
</script>

<div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0%; margin-bottom: 5%;">
    <div style="flex: 5;">
        <button class="small-button" onclick="Nav()">Authors<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <div class="spacer" style="height: 10px;"></div> <!-- 使用百分比单位 -->
            <a href="Authors.php" style="margin-left: 2%;">Authors</a> <!-- 使用百分比单位 -->
            <div class="spacer" style="height: 20px;"></div> <!-- 使用百分比单位 -->
            <a href="Call for Tutorials.php" style="margin-left: 2%;">Call for Tutorials</a> <!-- 使用百分比单位 -->
            <div class="spacer" style="height: 20px;"></div> <!-- 使用百分比单位 -->
            <a href="Workshopchairs.php" style="margin-left: 2%;">workshop chairs</a> <!-- 使用百分比单位 -->
        </div>
    </div>
</div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
