<?php 
$pageTitle='Call for workshop papers'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/authors.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "150px") {
        nav.style.height = "0";
    } else {
        nav.style.height = "150px";
    }
}
</script>

<div style="display: flex; justify-content: space-between; align-items: center; margin-top: 0%; margin-bottom: 5%;">
    <div style="flex: 5;">
        <button class="small-button" onclick="Nav()">Authors<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <div class="spacer" style="height: 5px;"></div> <!-- 使用百分比单位 -->
            <a href="Authors.php" style="margin-left: 2%;">Authors</a> <!-- 使用百分比单位 -->
            <div class="spacer" style="height: 5px;"></div> <!-- 使用百分比单位 -->
            <a href="Call for Tutorials.php" style="margin-left: 2%;">Call for Tutorials</a> <!-- 使用百分比单位 -->
            <div class="spacer" style="height: 5px;"></div> <!-- 使用百分比单位 -->
            <a href="Workshopchairs.php" style="margin-left: 2%;">Call for workshop papers</a> <!-- 使用百分比单位 -->
        </div>
    </div>
</div>


<div class="flex flex-auto" style="padding-top: 1%">
	<div style="margin-bottom: 1%;">
    <h1>Description:</h1>
		
		<div style=" font-size: 20px;line-height: 1.5; margin-bottom: 20px;text-align:justify;">  The rapid expansion of decentralized technologies is redefining the landscape of legal and policy frameworks globally. As applications of DLT and blockchain gain momentum, they pave the way for more transparent, efficient, accountable and trustworthy governance systems, but also create challenges for their effective oversight. This symposium highlights the transformative impact of blockchain and other distributed ledger technologies on regulatory approaches within the crypto-economy, decentralized governance structures, systems interoperability, decentralized infrastructures and data governance policies. It will serve as an incubator for innovative ideas, where legal experts, policymakers, and DLT and blockchain pioneers converge to dissect and discuss the challenges and opportunities at this intersection. The focus will be on how blockchain technology can coexist with legal structures to foster a more equitable and decentralized future, emphasizing the synergy between technological advancements and policy adaptations.</div>
		
  
		<h1>Topics of Interest:</h1>
        <div style=" font-size: 20px;line-height: 1.5; margin-bottom: 20px;text-align:justify;">  The objective of this symposium will highlight the latest advances in DLT/blockchain law, regulation, and policy. We welcome submissions that offer novel contributions in law/policy with application to DLT/blockchain, or novel contributions in another discipline with application to law/policy. Contributions are invited on the following topics, including but not limited to:</div>
        <ul>
			<li style="font-size: 20px;">Blockchain policy-making and laws</li>
			
			<li style="font-size: 20px;">Regulation of the crypto-economy (financial, contracts etc)</li>
			
			<li style="font-size: 20px;">Antitrust issues in the decentralized economy</li>
			
			<li style="font-size: 20px;">Decentralized governance policies</li>

            <li style="font-size: 20px;">Blockchain and interoperability policy</li>
			
			<li style="font-size: 20px;">Lobbying in the crypto-economy</li>

            <li style="font-size: 20px;">Blockchain and data governance policy</li>

            <li style="font-size: 20px;">NFTs, creative industries, and policy</li>
			
		</ul>


        <br><br>
        <h1>WORKSHOPS</h1>
        <div style="font-size: 20px; line-height: 1.5;  text-align: justify;">
    All papers must be submitted through eWorks. You must choose the symposium track when submitting your paper in order to be considered for this symposium. The paper should be up to six (6) pages in length. The conference allows up to two additional pages for a maximum length of eight (8) pages upon payment of extra page fees once the paper has been accepted. </div> 
    <div style="font-size: 20px; line-height: 1.5; ">The paper can be prepared using the template available through the Authors / Proposers tab from the GBC conference website main page at: 
    <a href="https://conferences.ieeeauthorcenter.ieee.org/write-your-paper/authoring-tools-and-templates/" style="color: blue; text-decoration: underline;" target="_blank">http://www.ieee-gbc.org/authors.php</a>.</div> 
    <div style="font-size: 20px; line-height: 1.5;">An alternative is to use the IEEE Word or LaTeX tools that can be found through:
    <a href="http://www.ieee-gbc.org/authors.php" style="color: blue; text-decoration: underline;" target="_blank">https://conferences.ieeeauthorcenter.ieee.org/write-your-paper/authoring-tools-and-templates/</a>.
</div>
        <div style="font-size: 20px; line-height: 1.5; margin-bottom: 20px; text-align: justify;">Authors of accepted papers will need to provide a final version of your paper in PDF format and upload it by the camera-ready deadline and complete the assignment of copyright and release form. For your paper to be included in the proceedings and published in IEEE Xplore, at least one author is required to register for GBC 2023 by the deadline. Authors will be given the choice to submit an enhanced version of their paper for publication in Ledger. Ledger is published by the University of Pittsburgh Press, and it has a CiteScore of 5.7 and acceptance rate of 19% in 2022.</div>
        <br><br>
        <h1>IMPORTANT DATES</h1>
        <div style=" font-size: 20px;line-height: 1.5; text-align:justify;">  Paper submission: <span style="color: blue;">31st May</span></div>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;">  Notification of acceptance: <span style="color: blue;">1st August </span></div>
        <div style="font-size: 20px; line-height: 1.5; text-align: justify;">Camera-ready submission: <span style="color: blue;">tbc</span></div>
        <div style=" font-size: 20px;line-height: 1.5;text-align:justify;">  Presentation submission: <span style="color: blue;">tbc</span></div>
		<br><br>

	</div>
</div>

<div style="height:50px;"></div>


<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>

