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

	
        <div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Abderrahim Benslimane <span style="position: absolute; left: calc(30% + 10px);">University of Avignon</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Aiman Erbad <span style="position: absolute; left: calc(30% + 10px);">Hamad Bin Khalifa University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Alessandra Scafuro <span style="position: absolute; left: calc(30% + 10px);">North Carolina State University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Alessandro Aldini <span style="position: absolute; left: calc(30% + 10px);">University of Urbino</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Alysson Bessani <span style="position: absolute; left: calc(30% + 10px);">Faculdade de Ciências da Universidade de Lisboa</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Andreas Veneris <span style="position: absolute; left: calc(30% + 10px);">University of Toronto</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Angelo De Caro <span style="position: absolute; left: calc(30% + 10px);">IBM Research Zurich</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Aniket Kate <span style="position: absolute; left: calc(30% + 10px);">Purdue University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Ashok Kumar Das <span style="position: absolute; left: calc(30% + 10px);">International Institute of Information Technology, Hyderabad</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Athanasios V. Vasilakos <span style="position: absolute; left: calc(30% + 10px);">Lulea University of Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Athman Bouguettaya <span style="position: absolute; left: calc(30% + 10px);">University of Sydney</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Axel Küpper <span style="position: absolute; left: calc(30% + 10px);">TU Berlin</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Bill Buchanan <span style="position: absolute; left: calc(30% + 10px);">Edinburgh Napier University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Chase Wu <span style="position: absolute; left: calc(30% + 10px);">New Jersey Institute of Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Chengnian Long <span style="position: absolute; left: calc(30% + 10px);">Shanghai Jiao Tong University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Christopher Kruegel <span style="position: absolute; left: calc(30% + 10px);">University of California, Santa Barbara</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Daehun Nyang <span style="position: absolute; left: calc(30% + 10px);">Ewha Womans University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Danda Rawat <span style="position: absolute; left: calc(30% + 10px);">Howard University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">David Mohaisen <span style="position: absolute; left: calc(30% + 10px);">University of Central Florida</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">David Wei <span style="position: absolute; left: calc(30% + 10px);">Fordham University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Eirini Eleni Tsiropoulou <span style="position: absolute; left: calc(30% + 10px);">University of New Mexico</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Evangelos Pournaras <span style="position: absolute; left: calc(30% + 10px);">University of Leeds</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Filip Rezabek <span style="position: absolute; left: calc(30% + 10px);">Technical University of Munich</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Francesco Longo <span style="position: absolute; left: calc(30% + 10px);">University of Messina</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Gautam Srivastava <span style=" position: absolute; left: calc(30% + 10px);">Brandon University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">George Drosatos <span style=" position: absolute; left: calc(30% + 10px);">Athena Research Center</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Gyu Myoung Lee <span style=" position: absolute; left: calc(30% + 10px);">Liverpool John Moores University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Haiming Jin <span style=" position: absolute; left: calc(30% + 10px);">Shanghai Jiao Tong University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Hoang Tam Vo <span style=" position: absolute; left: calc(30% + 10px);">RMIT University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Hongxin Hu <span style="position: absolute; left: calc(30% + 10px);">University at Buffalo</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Houbing Song <span style="position: absolute; left: calc(30% + 10px);">University of Maryland, Baltimore County</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Imre Kocsis <span style="position: absolute; left: calc(30% + 10px);">Budapest University of Technology and Economics</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Ivan Homoliak <span style="position: absolute; left: calc(30% + 10px);">Brno University of Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">James Kempf <span style="position: absolute; left: calc(30% + 10px);">UCSC Silicon Valley</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Jianan Hong <span style="position: absolute; left: calc(30% + 10px);">Shanghai Jiao Tong University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Jianyu Niu <span style="position: absolute; left: calc(30% + 10px);">Southern University of Science and Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Jie Yang <span style="position: absolute; left: calc(30% + 10px);">Florida State University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Jinguang Han <span style="position: absolute; left: calc(30% + 10px);">Southeast University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Joshua Ellul <span style="position: absolute; left: calc(30% + 10px);">University of Malta</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Jun Dai <span style="position: absolute; left: calc(30% + 10px);">Worcester Polytechnic Institute</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Kai Li <span style="position: absolute; left: calc(30% + 10px);">San Diego State University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Kaihua Qin <span style="position: absolute; left: calc(30% + 10px);">Imperial College London</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Keke Gai <span style="position: absolute; left: calc(30% + 10px);">Beijing Institute of Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Keping Yu <span style="position: absolute; left: calc(30% + 10px);">Hosei University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Kwok-Yan Lam <span style="position: absolute; left: calc(30% + 10px);">Nanyang Technological University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Latif Ladid <span style="position: absolute; left: calc(30% + 10px);">University of Luxembourg / IPv6 Forum</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Laura Ricci <span style="position: absolute; left: calc(30% + 10px);">University of Pisa</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Lei Yang <span style="position: absolute; left: calc(30% + 10px);">University of Nevada, Reno</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Leonardo Aniello <span style="position: absolute; left: calc(30% + 10px);">University of Southampton</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Lo-Yao Yeh <span style="position: absolute; left: calc(30% + 10px);">National Central University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Lukas Aumayr <span style="position: absolute; left: calc(30% + 10px);">TU Wien</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Martin Maier <span style="position: absolute; left: calc(30% + 10px);">Institut National de la Recherche Scientifique (INRS)</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Mohammad Jalalzai <span style="position: absolute; left: calc(30% + 10px);">University of British Columbia</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Murat Yuksel <span style="position: absolute; left: calc(30% + 10px);">University of Central Florida</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Pedro Augusto Da Silva E Souza Miranda <span style="position: absolute; left: calc(50% + 10px);">University of Waterloo</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Peiyao Sheng <span style="position: absolute; left: calc(30% + 10px);">University of Illinois Urbana-Champaign</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Qi Xia <span style="position: absolute; left: calc(30% + 10px);">University of Electronic Science and Technology of China</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Qinglin Zhao <span style="position: absolute; left: calc(30% + 10px);">Macau University of Science and Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Rongxing Lu <span style="position: absolute; left: calc(30% + 10px);">University of New Brunswick</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Salil Kanhere <span style="position: absolute; top: 0; left: calc(30% + 10px);">UNSW Sydney</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Shamik Sural <span style="position: absolute; top: 0; left: calc(30% + 10px);">IIT Kharagpur</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Shouling Ji <span style="position: absolute; top: 0; left: calc(30% + 10px);">Zhejiang University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Stefan Schulte <span style="position: absolute; top: 0; left: calc(30% + 10px);">Hamburg University of Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Stefan Tai <span style="position: absolute; top: 0; left: calc(30% + 10px);">TU Berlin</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Taeho Jung <span style="position: absolute; top: 0; left: calc(30% + 10px);">University of Notre Dame</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Tao Xiang <span style="position: absolute; top: 0; left: calc(30% + 10px);">Chongqing University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Thomas Thiery <span style="position: absolute; top: 0; left: calc(30% + 10px);">Ethereum Foundation</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Wang Liangmin <span style="position: absolute; top: 0; left: calc(30% + 10px);">Southeast University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Wazen Shbair <span style="position: absolute; top: 0; left: calc(30% + 10px);">VNX</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Weidong Shi <span style="position: absolute; top: 0; left: calc(30% + 10px);">University of Houston</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Weizhi Meng <span style="position: absolute; top: 0; left: calc(30% + 10px);">Technical University of Denmark</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Xiaoguang Liu <span style="position: absolute; top: 0; left: calc(30% + 10px);">Nankai University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Xihan Xiong <span style="position: absolute; top: 0; left: calc(30% + 10px);">Imperial College London</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Xingliang Yuan <span style="position: absolute; top: 0; left: calc(30% + 10px);">University of Melbourne</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Xun Yi <span style="position: absolute; top: 0; left: calc(30% + 10px);">RMIT University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Ye Wang <span style="position: absolute; top: 0; left: calc(30% + 10px);">University of Macau</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Yingjie Xue <span style="position: absolute; top: 0; left: calc(30% + 10px);">The Hong Kong University of Science and Technology (Guangzhou)</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Yingjiu Li <span style="position: absolute; top: 0; left: calc(30% + 10px);">University of Oregon</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Yizhong Liu <span style="position:absolute; top: 0; left: calc(30% + 10px);">Beihang University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Youngho Park <span style="position: absolute; top: 0; left: calc(30% + 10px);">Kyungpook National University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Youwen Zhu <span style="position: absolute; top: 0; left: calc(30% + 10px);">Nanjing University of Aeronautics and Astronautics</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Yuanyuan Yang <span style="position: absolute; top: 0; left: calc(30% + 10px);">Stony Brook University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Yujin Potter <span style="position: absolute; top: 0; left: calc(30% + 10px);">UC Berkeley</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Yukun Cheng <span style="position: absolute; top: 0; left: calc(30% + 10px);">Suzhou University of Science and Technology</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Yuzhe Tang <span style="position: absolute; top: 0; left: calc(30% + 10px);">Syracuse University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Zakirul Alam Bhuiyan <span style="position: absolute; top: 0; left: calc(30% + 10px);">Fordham University</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Zhiguo Wan <span style="position: absolute; top: 0; left: calc(30% + 10px);">Zhejiang Lab, Hangzhou, Zhejiang</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Zhipeng Gao <span style="position: absolute; top: 0; left: calc(30% + 10px);">Beijing University of Posts and Telecommunications</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Zhipeng Wang <span style="position: absolute; top: 0; left: calc(30% + 10px);">Imperial College London</span></div>
<div style="font-size: 20px; color: #191970; position: relative; line-height: 1.5;">Zhonghai Wu <span style="position: absolute; top: 0; left: calc(30% + 10px);">Peking Univerisity</span></div>
















    </div>

    
</div>
<?php require 'right-bar-footer.php'; //THE MUST BE INCLUDED FOR EACH PAGE ?>
