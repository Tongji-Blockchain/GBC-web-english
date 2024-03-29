<?php 
$pageTitle='Call for workshop papers'; //THIS MUST BE SET FOR EACH PAGE
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
		
    <div style="font-size: 20px; line-height: 1.5; margin-bottom: 20px; text-align: justify;">
    IEEE GBC 2024 will feature a series of half and full-day workshops. The aim of the conference workshops is to emphasize emerging topics that are not specifically covered in the main symposia. Each workshop may include a mix of regular papers, invited presentations, keynotes, and panels that encourage the participation of attendees in active discussion.<br>
    Please address all questions to the IEEE GBC 2024 Workshops Chairs:<br><br>
    Hamed Ahmadi(<span style="color: #4512d2;">hamed.ahmadi[AT]york.ac.uk</span>)<br>
    University of York<br><br>
    Bin Cao(<span style="color: #4512d2;">caobin[AT]bupt.edu.cn</span>)<br>
    Beijing University of Posts and Telecommunications<br><br>
    Butian Huang(<span style="color: #4512d2;">hbt[AT]yunphant.com</span>)<br>
    Yunphant<br><br>
    Jiaheng Wang(<span style="color: #4512d2;">jhwang[AT]seu.edu.cn</span>)<br>
    Southeast University<br><br>
    Shengli Zhang(<span style="color: #4512d2;">zsl[AT]szu.edu.cn</span>)<br>
    Shenzhen University
</div>


		

        <br><br>
        <h1>IMPORTANT DATES</h1>
        <div style=" font-size: 20px;line-height: 1.5; text-align:justify;">  Paper submission: <span style="color: #4512d2;">1 Feb, 2024</span></div>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;">  Notification of acceptance: <span style="color: #4512d2;">1 June, 2024</span></div>
        <div style="font-size: 20px; line-height: 1.5; text-align: justify;">  Camera-ready submission: <span style="color: #4512d2;">7 August, 2024</span></div>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;">  Presentation submission: <span style="color: #4512d2;">14 August, 2024</span></div>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;">  All papers must be submitted through EDAS (submission starts 20 April).</div>
		
        <br><br>
        <h1>WORKSHOPS</h1>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;"> WS-01: <a href="resources/Proposal-GBC-Workshop-BlockchainPolicy.pdf"><span style="color: #4512d2;">Proposal-GBC-Workshop-BlockchainPolicy</span></a></div>


	</div>
</div>

<div style="height:50px;"></div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>

