<?php 
$pageTitle='Authors'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/authors.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

<style>
  @keyframes blinker {
	50% { opacity: 0 }
  }

  .blink {
	animation:blinker 3s linear infinite;
	color: white; /* 改变文字颜色以增加可见性 */
	font-size: larger; /* 保持原有的字体大小 */
	cursor: pointer; /* 鼠标悬停时显示手形图标 */
  }
</style>

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
	<button style="font-size: larger" onclick="location.href='resources/CFP-Poster-EN.pdf';">Download Call for Papers

	</button><button style="font-size: larger" onclick="location.href='https://edas.info/newPaper.php?c=32098';">Submit Your Paper Now</button>
	<br><br>
	
<button class="blink" onclick="location.href='resources/Final Manuscript Uploading Guide.pdf';">Final Manuscript Uploading Guide</button><br><br>
		<br>
		<div style=" font-size: 20px;line-height: 1.5; margin-bottom: 20px;">The 2024 IEEE Global Blockchain Conference (GBC) will feature a comprehensive technical program covering the latest research and innovation in blockchain technologies.</div>
		

		<br><br>

		<h1>CALL FOR SUBMISSIONS</h1>
	
		<div style=" font-size: 20px;line-height: 1.5; margin-bottom: 20px;">The 2024 IEEE Global Blockchain Conference will be held in Shanghai, China, Oct/Nov 2024. Themed “Transforming a Trustworthy Digital Future”, the conference will feature a comprehensive high-quality technical program including 6 tracks and a variety of tutorials and workshops. IEEE GBC 2024 will also include an attractive industry program aimed at enthusiasts, with keynotes and panels from prominent research, industry and government leaders, business and industry panels, and technological exhibits. IEEE GBC 2024 will be held fully in person. Those authors that will not be allowed to travel to the conference due to visa issues or strict national rules will be given the opportunity to present their accepted work through a video presentation.</div>
		<div style="font-weight: bold; font-size: 20px;">Late Paper Submissions Due: <span style="color: #4512d2;">16 May, 2024</span> &nbsp; Contact Email: <span style="color: #4512d2;">jiangm_leo[AT]tongji.edu.cn</span></div>

		<br><br>

		<h1>TECHNICAL TRACKS</h1>

		<ul>
			<li style="font-weight: bold; font-size: 20px;">Track 1: Blockchain Consensus, Performance & Scalability</li>
			<div style=" font-size: 20px;">Consensus Mechanisms, Game Theory, Sharding, Peer-to-Peer Networks, Distributed Databases, Cross-Chain Mechanisms, Formal Verifications, On-Chip Acceleration, and other System Aspects of Blockchain Technology.</div>
			
			<br><br><li style="font-weight: bold; font-size: 20px;">Track 2: Blockchain for Real-World Applications</li>
			
			<div style=" font-size: 20px;">Central Bank Digital Currency & Electronic Payment, Trusted Data Elements Circulation, Policy-making, Geo-Network Navigation, Digital City Planning, Smart Agriculture, Blockchain Spacetime, and other Innovative Uses.</div>
			<br><br><li style="font-weight: bold; font-size: 20px;">Track 3: Security for Blockchain, Blockchain for Security</li>
			
			<div style=" font-size: 20px;">Hardcore Security for Future Blockchain and Blockchain for Future Security, e.g., Multi-Party Computation, Post-Quantum Public Key Algorithms, zk-SNARK, Private Set Intersection, Smart Contract Security, Consensus Security, Network Security, and dApps Security.</div>
			<br><br><li style="font-weight: bold; font-size: 20px;">Track 4: Communications Network Infrastructures & DePIN</li>
			
			<div style=" font-size: 20px;">Decentralized Physical Infrastructure Networks, Cloud/Edge Computing, Computing Force Network, 6G/F6G, Wireless Communications, DeWi, Internet Architecture, Internet of Things, Infrastructure Security, O-RAN and Cyber-Physical Systems.</div>
			<br><br><li style="font-weight: bold; font-size: 20px;">Track 5: Integration of Blockchain, Data Elements & AI</li>

			<div style=" font-size: 20px;">Blockchain Empowerment of Data Elements, Machine Learning, Deep Learning, Federated Learning, Large Language Models, Confidential Computing, AI Security, AI Entities, AI Autonomous Agents, AI Ethics, Generative AI, and Interdisciplinary Researches.</div>
			<br><br><li style="font-weight: bold; font-size: 20px;">Track 6: Blockchain for Web3.0 & Metaverse Ecosystems</li>
			
			<div style=" font-size: 20px;">Metaverse, Smart Contracts, NFTs, RWA Tokenization, Incentive Mechanisms, Privacy Preservation, Distributed Identity, Digital Assets, dApps, DeFi, Ordinals, Payment Channels, Decentralized Finance, Verifiable Credentials, Zero-Knowledge Proofs, Industrial Web 3.0, Trust Management, Digital Governance, Blockchain Policy-Making, GDPR and Social Impacts.</div>		
		</ul>
		<br><br>

		<h1>INSTRUCTIONS FOR SUBMISSION OF TRACK PAPERS</h1>

		<h2>IMPORTANT INFORMATION</h2>

		<div style=" font-size: 18px;">The Conference Proceedings will be included in <a style="color:blue"href="https://ieeexplore.ieee.org/">IEEE Xplore Publications</a>. All authors who have been accepted must register for the conference and attend the conference to present their papers. Authors who do not attend the conference to present their papers, or arrange for a co-author or knowledgeable colleague to present their paper in the absence of the primary author, will not have their paper published in IEEE Xplore, per IEEE policy. IEEE reserves the right to exclude a submission from distribution after the conference, including exclusion from IEEE Xplore if the submission does not meet IEEE standards for scope and/or quality. Articles excluded from further distribution shall be archived by IEEE but shall not be indexed or appear on IEEE Xplore.</div>
		<br><br>

		<h2>MANUSCRIPT PREPARATION</h2>
		<p style=" font-size: 18px;">This section provides guidelines regarding acceptable manuscript applications, layout, fonts, and graphics.</p>
		<ul>
			<li style=" font-size: 18px;">
				<strong>Templates:</strong>
				&nbsp;Please use Microsoft Word or LaTeX to create your document (LaTeX is preferred). It is strongly suggested to use the &nbsp;<a style="color:blue" href="https://www.ieee.org/conferences/publishing/templates.html" target="_blank">IEEE templates</a>
				&nbsp;that incorporate the correct formatting specifications.&nbsp;If you decide not to use the templates, please be aware that you might &nbsp;incur into problems when submitting the camera ready, where strict &nbsp;formatting according to the &nbsp;<a style="color:blue" href="https://www.ieee.org/content/dam/ieee-org/ieee/web/org/pubs/format-definition-table-and-glossary.pdf" target="_blank">Definition Table and Glossary</a>
				&nbsp;will be enforced.
			</li>
			<li style=" font-size: 18px;">
				<strong>Page limit:&nbsp;</strong>
				<strong>6</strong> maximum number of pages, with <strong>2</strong> additional page allowed with the purchase of additional page charges at the time of registration and final paper submission.
			</li>
			<li style=" font-size: 18px;">
				<strong>Headers, footers, and page numbers:&nbsp;</strong>
				No headers, footers, or page numbers should appear on your manuscript.
			</li>
			<li style=" font-size: 18px;">
				<strong>Margins:</strong>
				Papers cannot be accepted with margins smaller than those given in the table below (US Letter is preferred):
			</li>
		</ul>
		<table class="table" style="width:40%;margin:0 auto; border-collapse: collapse;">
			<tbody>
				<tr>
					<td style="background-color: rgb(0, 102, 153); border: 1px solid black;" valign="bottom" width="90">
						<span style="color:#ffffff;">
							<strong>Margin</strong>
						</span>
					</td>
					<td style="background-color: rgb(0, 102, 153); border: 1px solid black;" valign="bottom" width="115">
						<span style="color:#ffffff;">
							<strong>US Letter</strong>
						</span>
					</td>
					<td style="background-color: rgb(0, 102, 153); border: 1px solid black;" valign="bottom" width="81">
						<span style="color:#ffffff;">
							<strong>A4</strong>
						</span>
					</td>
				</tr>
				<tr>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Top</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">0.75 inch</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">19 mm</td>
				</tr>
				<tr>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Bottom</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">1 inch</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">43 mm</td>
				</tr>
				<tr>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Side</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">0.625 inch</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">13 mm</td>
				</tr>
			</tbody>
		</table>
		<ul>
			<li>
				<strong style=" font-size: 18px;">Fonts:</strong>
				Fonts must be either Post Script or True Type and licensed for embedding. Use of unlicensed and custom-made or hacked fonts is strictly prohibited; your submission will be rejected if it is found to contain them. Below is a list of recommended fonts:
			</li>
		</ul>
		<table class="table" style="width:40%;margin:0 auto;border-collapse: collapse;">
			<tbody>
				<tr>
					<td style="background-color: rgb(0, 102, 153); border: 1px solid black;" valign="bottom">
						<span style="color:#ffffff;">
							<strong>Content</strong>
						</span>
					</td>
					<td style="background-color: rgb(0, 102, 153); border: 1px solid black;" valign="bottom">
						<span style="color:#ffffff;">
							<strong>Font</strong>
						</span>
					</td>
				</tr>
				<tr>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Text</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Times New Roman</td>
				</tr>
				<tr>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Code</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Courier</td>
				</tr>
				<tr>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Equations</td>
					<td style="background-color: rgb(255, 255, 255); border: 1px solid black;" valign="top">Symbol</td>
				</tr>
			</tbody>
		</table>

		<ul>
			<li>
				<strong style=" font-size: 18px;">Graphics and Images:</strong>
				<ul style="font-size: 18px; line-height: 1.5; margin-bottom: 20px;">
					<li>Choose vector graphics (e.g., .eps or .pdf) over bitmap (.bmp, .png, or &nbsp;.jpg) images because they are electronically efficient and will not &nbsp;conflict with conversions to PDF.</li>
					<li>All images should be checked by printing to hardcopy if the conference will be producing a book, especially when color images in your paper will be translated to black and white in print.</li>
					<li>Resolution should be between 150 and 300 dpi or less. Resolutions greater than 300 will cause down sampling; images below 300 will not render well in print.</li>
					<li>Labels within graphics should have a type point size of 4 or higher.</li>
					<li>Smooth Graphics should not be used as it often produces extremely large files with slow loading time. The Smooth Graphics option is usually found in the Page Setup Dialog box.</li>
				</ul>
			</li>
		</ul>
		

		<div style="text-align: center;">
    <button style="font-size: larger" onclick="location.href='https://edas.info/newPaper.php?c=32098';">Submit Now</button>
</div>

	
	
	
	
	
	
	
	
	
	
	
	</div>
</div>

<div style="height:50px;"></div>

<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
