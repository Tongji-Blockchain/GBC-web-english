<?php 
$pageTitle='Call for Workshop Proposals'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/authors.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "420px") {
        nav.style.height = "0";
    } else {
        nav.style.height = "420px";
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
		
		<div style=" font-size: 20px;line-height: 1.5; margin-bottom: 20px;text-align:justify;">
        IEEE GBC 2024 is extending an invitation to researchers, scientists, and industrial engineers immersed in the blockchain landscape to orchestrate workshops centered around emerging and critical topics in blockchain. Workshops are envisioned to be cohesive, blockchain-relevant, timely, and enriching, while distinct from the traditional technical paper program.</div>
		

        <br><br>
        <h1>Submission Deadlines</h1>
        <div style=" font-size: 20px;line-height: 1.5; text-align:justify;">Workshop Proposal: <span style="color: #4512d2;">Late proposals welcome</span></div>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;">Notification of acceptance: <span style="color: #4512d2;">1 June, 2024</span></div>
        <br><br>
        <div style=" font-size: 24px;line-height: 1.5; text-align:justify;color: #191970;font-weight: bold;">To propose a Workshop for lEEE GBC 2024, adhere to the following guidelines:</div>
        <br><br>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;"> <span style="font-weight: bold;">1. Prepare Your Proposal:</span>Gather all requisite information needed for submission, encompassing details about yourself as the Workshop Organizer (Chair), any co-organizers, and the workshop content.Names, affiliations, locations, and contact information

IEEE Membership Number (if applicable) and ORCID Number (if available)

Recent high-resolution headshot photograph (JPEG format)

Short biography (up to 250 words) for each organizer

Title of the Workshop

Keywords elucidating the workshop's topic

Concise description highlighting the significance and timeliness of the workshop (up to 250 words)

Workshop content delineating the thematic focus

Planned format (full-day/half-day) and expected paper submission volume

Tentative list of Technical Program Committee (TPC) members

Draft Call for Papers

Advertisement plan for the Call for Papers

Workshop history (if applicable)</div>
<div style=" font-size: 20px;line-height: 1.5;text-align:justify;"> <span style="font-weight: bold;">2. Submit Your Proposal:</span> Email your comprehensive proposal to the Workshop Co-Chairs:</div><br>
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


<div style=" font-size: 20px;line-height: 1.5;text-align:justify;"> <span style="font-weight: bold;">3. Record Your Proposal ID:</span>Upon acceptance of the workshop proposal, you will receive a unique Proposal ID number. Maintain a record of this number for future correspondence regarding acceptance or rejection.
Following the proposal assessment, you will be apprised of the acceptance or rejection of your proposal. If accepted, you will receive further directives on chairing the Workshop.
For any queries or clarifications during the application process, do not hesitate to reach out to one of the Workshop Co-Chairs.</div>
	</div>
</div>


<div style="height:50px;"></div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
