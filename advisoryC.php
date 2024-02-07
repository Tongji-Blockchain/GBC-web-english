<?php 
$pageTitle='Advisory Committee'; //THIS MUST BE SET FOR EACH PAGE
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

	<div style="flex: 3;">

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/wuzhiqiang.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhiqiang Wu</div>
				<div class="role bold">Advisorary Chair</div>
				<div class="affiliation"></div>
			</div>
		</div>

		<div class="spacer"></div>

		Stay tuned



		<!-- <div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chun Chen</div>
				<div class="role bold">Honorary General Chair</div>
				<div class="affiliation"></div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Changjun Jiang</div>
				<div class="role bold">Honorary General Chair</div>
				<div class="affiliation"></div>
			</div>
		</div>
		
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhiming Zheng</div>
				<div class="role bold">Honorary General Chair</div>
				<div class="affiliation"></div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Erwu Liu</div>
				<div class="role bold">General Chair</div>
				<div class="affiliation">Tongji University, China</div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name"></div>
				<div class="role bold">Executive Chair</div>
				<div class="affiliation"></div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name"></div>
				<div class="role bold">Vice General Chair</div>
				<div class="affiliation"></div>
			</div>
		</div>

		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Chih-Lin I.</div>
				<div class="role bold">Steering Committee Chair</div>
				<div class="affiliation"></div>
			</div>
		</div>
		<div class="spacer"></div>

		<div class="organizer-group-title">Publication Co-Chair</div>
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Zhihong Tian</div>
				<div class="role bold"></div>
				<div class="affiliation"></div>
			</div>
		</div>
		<div class="spacer"></div>

		<div class="organizer-group-title">Award Co-Chair</div>
		<div class="flex flex-auto person-container">
			<div class="pic headshot round" style="background:url(images/organizers/.png);background-size:100px 100px;"></div>
			<div class="info-container">
				<div class="name">Xiaosong Zhang</div>
				<div class="role bold"></div>
				<div class="affiliation"></div>
			</div>
		</div>
		<div class="spacer"></div> -->

	</div>

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