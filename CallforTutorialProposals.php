<?php 
$pageTitle='Call for Tutorials'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/authors.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "300px") {
        nav.style.height = "0";
    } else {
        nav.style.height = "300px";
    }
}
</script>


<div style="display: flex; justify-content: space-between; margin-top: 0%; margin-bottom: 5%;">


	<div style="flex: 5;">
        <button class="small-button" onclick="Nav()">Authors<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="line-height: 1;height:0; overflow: hidden; transition: 0.5s;">
            
            <a href="authors.php" style="margin-left: 2%;">Authors</a> 
			
            <a href="InstructionsforFinalPaperUpload.php" style="margin-left: 2%;">Instructions for Final Paper Upload</a> 
			
            <a href="IFSOSPapers.php" style="margin-left: 2%;">Instructions for Submission of Symposium Papers</a> 
			
			<a href="Callforworkshoppapers.php" style="margin-left: 2%;">Call for Workshop Papers</a>
			
            <a href="CallforWorkshopProposals.php" style="margin-left: 2%;"> Call for Workshop Proposals</a> 
            
            <a href="CallforTutorialProposals.php" style="margin-left: 2%;">Call for Tutorial Proposals</a> 
			
            <a href="IndustryProgram.php" style="margin-left: 2%;">Industry Program</a> 
			
            <a href="PanelProposals.php" style="margin-left: 2%;">Call for Panel Proposals</a> 
			
            <a href="PanelsGuidelines.php" style="margin-left: 2%;">Panels Guidelines</a> 
        </div>
    </div>
</div>




<div class="flex flex-auto" style="padding-top: 1%">
	<div style="margin-bottom: 1%;">
		<h1>RECOMMENDED OUTLINE OF PROPOSALS</h1>
        <div style="font-size: 20px;">For the tutorial, we will need a proposal not exceeding 4 pages. The proposal should concisely describe the content and objectives of the tutorial, and must include:</div>
        
		<ul>
			<li style="font-weight: bold; font-size: 20px;">Title of the tutorial</li>
			
			<li style="font-weight: bold; font-size: 20px;">Abstract, objectives, and motivation</li>
			
			<li style="font-weight: bold; font-size: 20px;">Name, affiliation, and a short biography (maximum 200 words) of each tutorial instructor</li>
			
			<li style="font-weight: bold; font-size: 20px;">A description of the topics that the tutorial will address, emphasizing their timeliness</li>
			
			<li style="font-weight: bold; font-size: 20px;">An outline of the tutorial, including a tentative time schedule</li>
			
		</ul>
        <h1>HOW TO SUBMIT PROPOSALS</h1>
        <div style="font-size: 20px;">Submissions open : 1 February  2024, with the deadline extended to 28 March 2024. Additionally, please ensure that the subject of your email contains 'IEEE GBC 2024 Tutorial Proposal'.
        All tutorial proposals should be submitted to Prof. Yan Zhang (yanzhang@ifi.uio.no) via email.</div>
        
       
		<br><br>

	</div>
</div>

<div style="height:50px;"></div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
