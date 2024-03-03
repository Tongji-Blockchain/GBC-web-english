<?php 
$pageTitle='welcome'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/organizers.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>

 
<?php 
	echo '<script>var config='.file_get_contents('configuration/config.json').'</script>';
?>

<script type="text/javascript">
	$(document).ready(function(){
		
		var newsCounter = 0

		setInterval(function(){
			
			if(newsCounter + 1 > config.newsTicker.length-1){
				newsCounter = 0
			}else{
				newsCounter++
			}
			
			$('#news-ticker-link').fadeOut(500, function(){
				$('#news-ticker-link').attr('href', config.newsTicker[newsCounter].link)
				$('#news-ticker-link').html(config.newsTicker[newsCounter].content)
				$('#news-ticker-link').fadeIn(500, function(){
				})
			})
			
		}, 5000)

		
	})
</script>

<div id="news-ticker" style="color:gray;background:white;padding:15px;margin:10px;border-radius:10px;box-shadow:2px 2px 2px 2px #ccc;margin-top:-20px;margin-bottom:20px; ">
		<p style="padding:0;margin:0;font-size:smaller">
			<i style="color:red;margin-right:10px" class="fa fa-1x fa-newspaper-o"></i> 
			<span id="news-ticker-content">
				<a id="news-ticker-link" href="https://edas.info/newPaper.php?c=32098">Submissions now open</a>
			</span>
		</p>
</div>

<div class="flex flex-auto" style="padding-top: 1%">
<div style="margin-bottom: 1%;">

<h2>Welcome to the IEEE Global Blockchain Conference 2024, where we're 'Transforming a Trustworthy Digital Future' with IEEE President, IET President and ACM Vice President. Led by the EiCs of top journals such as IEEE TDSC, IEEE TMC, IEEE TIFS, IEEE Network, the technical program includes six tracks and a variety of tutorials and workshops. IEEE GBC 2024 also features a series of visionary keynotes, panels, and discussions from top minds to shape the future of blockchain.</h2>
<br/>


</div>
</div>


<?php 
// replace the image files below with your own (you can keep the filenames if you want and rename your own).  Or, just delete the entire <div> below
?>
<div id="images" class="flex flex-wrap justify-center">
	<div class="about-image" style="background: url(images/blockchain/blockchain1.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain2.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain3.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain4.png) 150px 150px"></div>
	<div class="about-image" style="background: url(images/blockchain/blockchain5.png) 150px 150px"></div>
</div>	
<br><br>


<div style="font-weight: bold;font-size: 24;color: #191970;">Keynote Speakers</div>
<div style="display: inline-block; margin-right: 40px;">
    <table>
        <tr>
            <td style="text-align: center;padding-left: 15px;padding-top: 20px;">
                <div class="pic headshot round" style="background:url(images/organizers/thomas.png);background-size:100px 100px;"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div class="name" style="font-size: 16px;color: #191970;">Thomas Coughlin</div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div class="position" style="font-size: 16px;color: #191970;">IEEE President</div>
            </td>
        </tr>
    </table>
</div>
<div style="display: inline-block; margin-right: 40px;">
    <table>
        <tr>
            <td style="text-align: center;padding-left: 15px;padding-top: 20px;">
                <div class="pic headshot round" style="background:url(images/organizers/elisa.png);background-size:100px 100px;"></div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div class="name" style="font-size: 16px;color: #191970;">Elisa Bertino</div>
            </td>
        </tr>
        <tr>
            <td style="text-align: center;">
                <div class="position" style="font-size: 16px;color: #191970;">ACM Vice President</div>
            </td>
        </tr>
    </table>
</div>







<br><br>
<div style="font-weight: bold;font-size: 24;color: #191970;">Sponsors</div>
<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
