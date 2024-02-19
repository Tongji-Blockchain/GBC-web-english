<?php 
$pageTitle='Call for Tutorials'; //THIS MUST BE SET FOR EACH PAGE
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
            <a href="Workshops.php" style="margin-left: 2%;">Workshops</a> <!-- 使用百分比单位 -->
        </div>
    </div>
</div>


<div class="flex flex-auto" style="padding-top: 1%">
	<div style="margin-bottom: 1%;">
	
		<button style="font-size: larger" onclick="location.href='resources/CFP-Poster-EN.pdf';">DOWNLOAD CALL FOR TUTORIAL PROPOSALS</button><button style="font-size: larger" onclick="location.href='https://edas.info/newPaper.php?c=32098';">Submit Now</button><br><br>


		<h1>RECOMMENDED OUTLINE OF PROPOSALS</h1>
        For the tutorial, we will need a proposal not exceeding 4 pages. The proposal should concisely describe the content and objectives of the tutorial, and 
must include:
		<ul>
			<li style="font-weight: bold">Title of the tutorial</li>
			
			<li style="font-weight: bold">Abstract, objectives, and motivation</li>
			
			<li style="font-weight: bold">Name, affiliation, and a short biography (maximum 200 words) of each tutorial instructor</li>
			
			<li style="font-weight: bold">A description of the topics that the tutorial will address, emphasizing their timeliness</li>
			
			<li style="font-weight: bold">An outline of the tutorial, including a tentative time schedule</li>
			
		</ul>
        <h1>HOW TO SUBMIT PROPOSALS</h1>
        
All tutorial proposals should be submitted via EDAS no later than 04 October 2023 Extended to 18 October 2023.

Notification of Selection: 18 December 2023 Extended to 08 January 2024
		<br><br>

	</div>
</div>

<div style="height:50px;"></div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
