<?php 
$pageTitle='TPC member'; //THIS MUST BE SET FOR EACH PAGE
$stylesheet='css/organizers.css';
require 'header-left-bar.php'; //THIS MUST BE INCLUDED FOR EACH PAGE
?>
<script>
function Nav() {
    var nav = document.getElementById("navContainer");
    if (nav.style.height === "300px") {  // 调整此值以适应您的导航栏高度
        nav.style.height = "0";
    } else {
        nav.style.height = "300px";  // 调整此值以适应您的导航栏高度
    }
}
</script>

<div style="display: flex; justify-content: space-between; margin-top: 0%; margin-bottom: 5%;">

    <div style="flex: 5;">
    
    <button class="small-button" onclick="Nav()">Committees<i class="fa fa-solid fa-caret-down fa-fw"></i></button><br/>
        <div id="navContainer" style="height: 0; overflow: hidden; transition: 0.5s;">
            <a href="advisoryC.php">Advisory Committee</a>
            <a href="Steering.php">Steering Committee</a>
            <a href="organizers.php">Organizing Committee</a>
            <a href="TPC.php">Technical Program Committee</a>
            <a href="IFEC.php">Industry Forums & Exhibition Committee</a>
            <a href="operationC.php">Operations Committee</a>
            <a href="TPCmember.php">TPC member</a>
            <a href="volunteer.php">Volunteer</a>
        </div><br/>

	
        <div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Abderrahim Benslimane (<span style="font-style: italic;">University of Avignon</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Aiman Erbad (<span style="font-style: italic;">Hamad Bin Khalifa University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Alessandra Scafuro (<span style="font-style: italic;">North Carolina State University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Alysson Bessani (<span style="font-style: italic;">Faculdade de Ciências da Universidade de Lisboa</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Andreas Veneris (<span style="font-style: italic;">University of Toronto</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Angelo De Caro (<span style="font-style: italic;">IBM Research Zurich</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Aniket Kate (<span style="font-style: italic;">Purdue University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Ashok Kumar Das (<span style="font-style: italic;">International Institute of Information Technology, Hyderabad</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Athman Bouguettaya (<span style="font-style: italic;">University of Sydney</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Bill Buchanan (<span style="font-style: italic;">Edinburgh Napier University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Christopher Kruegel (<span style="font-style: italic;">University of California, Santa Barbara</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Daehun Nyang (<span style="font-style: italic;">Ewha Womans University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Danda Rawat (<span style="font-style: italic;">Howard University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">David Mohaisen (<span style="font-style: italic;">University of Central Florida</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Eirini Eleni Tsiropoulou (<span style="font-style: italic;">University of New Mexico</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Francesco Longo (<span style="font-style: italic;">University of Messina</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Gautam Srivastava (<span style="font-style: italic;">Brandon University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">George Drosatos (<span style="font-style: italic;">Athena Research Center</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Gyu Myoung Lee (<span style="font-style: italic;">Liverpool John Moores University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Haiming Jin (<span style="font-style: italic;">Shanghai Jiao Tong University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Hoang Tam Vo (<span style="font-style: italic;">IBM Research -- Australia</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Hongxin Hu (<span style="font-style: italic;">University at Buffalo</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Houbing Song (<span style="font-style: italic;">University of Maryland, Baltimore County</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Imre Kocsis (<span style="font-style: italic;">Budapest University of Technology and Economics</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Ivan Homoliak (<span style="font-style: italic;">Brno University of Technology</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Jianyu Niu (<span style="font-style: italic;">Southern University of Science and Technology</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Jie Yang (<span style="font-style: italic;">Florida State University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Jinguang Han (<span style="font-style: italic;">Southeast University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Joshua Ellul (<span style="font-style: italic;">University of Malta</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Jun Dai (<span style="font-style: italic;">Worcester Polytechnic Institute</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Kai Li (<span style="font-style: italic;">San Diego State University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Kaihua Qin (<span style="font-style: italic;">Imperial College London</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Keke Gai (<span style="font-style: italic;">Beijing Institute of Technology</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Keping Yu (<span style="font-style: italic;">Hosei University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Kwok-Yan Lam (<span style="font-style: italic;">Nanyang Technological University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Laura Ricci (<span style="font-style: italic;">University of Pisa</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Lei Yang (<span style="font-style: italic;">University of Nevada, Reno</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Leonardo Aniello (<span style="font-style: italic;">University of Southampton</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Lo-Yao Yeh (<span style="font-style: italic;">National Central University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Lukas Aumayr (<span style="font-style: italic;">TU Wien</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Martin Maier (<span style="font-style: italic;">Institut National de la Recherche Scientifique (INRS)</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Mohammad Jalalzai (<span style="font-style: italic;">University of British Columbia</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Peiyao Sheng (<span style="font-style: italic;">University of Illinois Urbana-Champaign</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Qinglin Zhao (<span style="font-style: italic;">Macau University of Science and Technology</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Rongxing Lu (<span style="font-style: italic;">University of New Brunswick</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Salil Kanhere (<span style="font-style: italic;">UNSW Sydney</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Shamik Sural (<span style="font-style: italic;">IIT Kharagpur</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Shouling Ji (<span style="font-style: italic;">Zhejiang University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Stefan Schulte (<span style="font-style: italic;">Hamburg University of Technology</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Stefan Tai (<span style="font-style: italic;">TU Berlin</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Taeho Jung (<span style="font-style: italic;">University of Notre Dame</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Tao Xiang (<span style="font-style: italic;">Chongqing University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Thomas Thiery (<span style="font-style: italic;">Ethereum Foundation</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Wazen Shbair (<span style="font-style: italic;">VNX</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Weidong Shi (<span style="font-style: italic;">University of Houston</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Weizhi Meng (<span style="font-style: italic;">Technical University of Denmark</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Xihan Xiong (<span style="font-style: italic;">Imperial College London</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Xingliang Yuan (<span style="font-style: italic;">University of Melbourne</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Xun Yi (<span style="font-style: italic;">RMIT University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Ye Wang (<span style="font-style: italic;">University of Macau</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yingjie Xue (<span style="font-style: italic;">The Hong Kong University of Science and Technology (Guangzhou)</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yingjiu Li (<span style="font-style: italic;">University of Oregon</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yizhong Liu (<span style="font-style: italic;">Beihang University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Youngho Park (<span style="font-style: italic;">Kyungpook National University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yuanyuan Yang (<span style="font-style: italic;">Stony Brook University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yujin Kwon (<span style="font-style: italic;">UC Berkeley</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Yuzhe Tang (<span style="font-style: italic;">Syracuse University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Zakirul Alam Bhuiyan (<span style="font-style: italic;">Fordham University</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Zhipeng Gao (<span style="font-style: italic;">Beijing University of Posts and Telecommunications</span>)</div>
<div style="font-size: 20px; color: #191970; margin-bottom: 20px;">Zhipeng Wang (<span style="font-style: italic;">Imperial College London</span>)</div>








    </div>

    
</div>
<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
