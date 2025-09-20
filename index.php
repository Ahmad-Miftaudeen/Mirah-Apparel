<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Mirah Apparel</title>
            <?php
                                                                        $dbservername='localhost';
                                                                        $dbusername='Ahmad';
                                                                        $dbpassword='champion18414';
                                                                        $dbname='mirahadmindb';

                                                                        $conn=new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

                                                                        if($conn->connect_error){
                                                                            die('Connection failed'. $conn->connect_error);
                                                                        }
                                                                        
            ?>
            <script>
                var page_num=1;
                function rchangepage() {
                    if (page_num==1){
                    document.getElementById('para-excel').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=2';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['paragraph'].'"';
                                                                        }    
                                                                    ?>;
                    document.getElementById('bas').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=2';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['title'].'"';
                                                                        }    
                                                                    ?>;
                    document.getElementById('splashimages').src=<?php
                                                                        $sql='select * from splash_details where pageno=2';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['imglink'].'"';
                                                                        }    
                                                                    ?>;
                    page_num=2;
                    }else if (page_num==2){
                        document.getElementById('para-excel').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=3';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['paragraph'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('bas').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=3';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['title'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('splashimages').src=<?php
                                                                        $sql='select * from splash_details where pageno=3';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['imglink'].'"';
                                                                        }    
                                                                    ?>;
                        page_num=3;
                    }else if (page_num==3){
                        document.getElementById('para-excel').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['paragraph'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('bas').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['title'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('splashimages').src=<?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['imglink'].'"';
                                                                        }    
                                                                    ?>;
                        page_num=1;
                    }
                }
                function lchangepage() {
                    if (page_num==3){
                    document.getElementById('para-excel').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=2';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['paragraph'].'"';
                                                                        }    
                                                                    ?>;
                    document.getElementById('bas').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=2';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['title'].'"';
                                                                        }    
                                                                    ?>;
                    document.getElementById('splashimages').src=<?php
                                                                        $sql='select * from splash_details where pageno=2';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['imglink'].'"';
                                                                        }    
                                                                    ?>;
                    page_num=2;
                    }else if (page_num==1){
                        document.getElementById('para-excel').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=3';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['paragraph'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('bas').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=3';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['title'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('splashimages').src=<?php
                                                                        $sql='select * from splash_details where pageno=3';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['imglink'].'"';
                                                                        }    
                                                                    ?>;
                        page_num=3;
                    }else if (page_num==2){
                        document.getElementById('para-excel').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['paragraph'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('bas').innerHTML=<?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['title'].'"';
                                                                        }    
                                                                    ?>;
                        document.getElementById('splashimages').src=<?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['imglink'].'"';
                                                                        }    
                                                                    ?>;
                        page_num=1;
                    }
                }
            </script>
            <style>
                *{
                    box-sizing:border-box;
                }
                body{
                    box-sizing:border-box;
                    margin:0;
                }
                .firsec{
                    background-image: url(Mainnewpic.jpg);
                    background-size: 100% 100%; /* Ensures the image covers the entire section */
                    margin-left:5%;
                    background-position: top right; /* Centers the image */
                    background-repeat: no-repeat; /* Prevents the image from repeating */
                    width:95%;
                    height: 435px; /* Set a height for the section */
                    color: white; /* Optional: Text color for better visibility */
                    display: inline-block; /* Optional: Align content */
                    justify-content: left;  /*Optional: Center horizontally */
                    text-align:left;
                }
                @font-face{
                    font-family:Miro3;
                    src:url('HvDTrial_Brandon_Grotesque_medium-BF64a625c84a521.otf');
                }
                @font-face{
                    font-family:Miro;
                    src:url('Seraphine DEMO VERSION.ttf');
                }
                @font-face{
                    font-family:Miro2;
                    src:url('BravenRegular.ttf');
                }
                ul {
    float:left;
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 5%;
    background:linear-gradient(to top, purple 60%, black);
    position: fixed;
    height: 100%;
    overflow: auto;
    text-align:left;
    border-right:1px solid grey;
    box-shadow: 100px 0px 400px rgba(128, 0, 128,0.2);

}
li{
        margin-top:20px;
        text-align:center;
        border-bottom:1px none transparent;
        /*box-shadow: 0px 0px 5px gold;*/
}
li:first-child{
    margin-top:150%;
}
li:last-child{
    border-bottom:none;
}
li a {
    cursor:pointer;
    padding:5px;
    display: inline-block;
    color:gold;
    margin:5px 0;
    /*visibility: hidden;*/
    color:transparent;
    border-radius:5px;
    padding: 12px 12px;
    text-decoration: none;
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
    font-size:1.5vw;
    text-shadow:0 0px 30px red, 0 0 30px blue;
}

li a.active {
    background-color: #4CAF50;
    color: white;
}

li a:hover {
    background-color: rgba(128, 0, 128,0.5);
    color: white;
}
.main{
    font-size: 6vw;
    display:inline-block;
    font-family:Palatino Linotype,Miro;
    margin-left:5%;
    float:left;
}
.web-desc{
    margin:0;
    float:left;
    font-size:2.5vw;
    margin-bottom:2%;
    margin-left:5%;
    margin-top:-60px;
    font-family:Miro3;
}

#bas{
    text-shadow:0px 0px 20px purple;
    z-index:2;
    font-size: 2vw;
    margin-top:3%;
    margin-left: 40%;
    display:inline-block;
    font-family:Miro3,'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
}
/*.listdesc{
    z-index: 4;
    color:red;
    font-size:2.3vw;
    /*font-size:4vw;*/
    /*display:inline-block;
    padding:1vw 4.2vw;
    text-align:center;
    margin:0;
    background-color: rgba(184, 33, 176, 0.2);
    font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;*/
    /*font-weight:900;*/

/*} */
#splashimages{
    /*width:60%;*/
    border-radius:15px;
    max-height:65vh;
    height:auto;
    margin:0;
    padding:0;
    margin-left:10%;
    margin-top:5%;
    display:inline-block;
    background-color: plum;
    max-width:65vh;
    width:auto;
    float:left;
    margin-right:3%;
    transition:box-shadow 0.2s linear;
    box-shadow:0px 0px 7px black, 0px 0px 15px purple;
    margin-bottom:15%;
}
#splashimages:hover{
    box-shadow:0px 0px 15px black, 0px 0px 25px purple;
}
#para-excel{
    float:left;
    background-color:transparent;
    display:inline-block;
    margin-left:7%;
    font-size:2vw;
    color:rgba(0, 0, 0, 1);
    font-family: Miro3;
    margin-top:0;
}
.column{
    float:left;
    width:40%;
    font-size:2vw;
}
.colum{
    position:absolute;
    top:130%;
    width:5%;
    float:left;
    font-size:2vw;
    border-radius: 50%;
    background-color: transparent;
    border-width:0px;
}
.bodyofbas{
    margin-left:8%;
}
.bodyofbas:after{
    content:"";
    display:table;
    clear:both;
}
#row_cloth:after{
    content: "";
    display: table;
    clear: both; 
}
#column_cloth{
    box-shadow:2px 5px 3px black;
    width:20%;
    float:left;
    height:415px;
    margin-left:11%;
    margin-top:5%;
    margin-bottom:2%;
    background-color: white;
    border-radius:15px;
}
#desc_cloth{
    text-align:center;
    word-wrap: break-word;
    font-family:Miro3;
    color:rgba(0, 0, 0, 0.8);
}
#footerh4{
    background-color:purple/*rgba(0, 0, 0, 0.9)*/;
    position:absolute;
    top:400%;
    padding:0%;
    color:whitesmoke;
    /*padding: 44%;*/   
    margin:0 0 0 5.01%;
    z-index:0;
    word-wrap:keep-all;
    text-align:center;
    font-family:Miro3;
}
#footer{
    background-color:purple/*rgba(0, 0, 0, 0.9)*/;
    position:absolute;
    top:400%;
    padding:4%;
    color:whitesmoke;
    /*padding: 44%;*/   
    margin:0 0 0 5.01%;
    z-index:0;
    word-wrap:keep-all;
    text-align:center;
    font-family:Miro3;
    box-shadow: 0px 0px 5px purple;
}
/*#footer p{
    margin:0;
    display:inline-block;
    padding:1% 100%;
    color:white;
    background-color:rgb(75, 123, 165);
}*/
.hr_clothsec{
        margin-bottom:5%;
        box-shadow:0px 0px 1px purple;
}
.allmenu{
    font-size:1.2vw;
    padding:4px 4px;
}
.exploremenu{
    background-color: purple;
    border-radius:5px;
    color:black;
    text-shadow:-1px 0 1px white, 1px 0 1px white, 0 -1px 1px white, 0 1px 1px white, 0 0 10px black;
    border-color:black;
    border-style:solid;
    box-shadow:3px 3px 2px grey;
    float:left;
    padding:12px;
    margin-right:5%;
    margin-left:48%;
    margin-top: 5%;
    margin-bottom:0%;
    /*position:absolute;
    z-index: 5;
    right:39%;
    top:380%;*/
}
.footerh4{

}
.footerimg{
    display:inline-block;
    margin:0px;
    padding:0px;
    position: absolute;
    right:60.2%;
    top:41.5%;
}
.footerimg2{
    display:inline-block;
    margin:0px;
    padding:0px;
    position: absolute;
    right:61%;
    top:52.5%;
}
.adminlogmenu{
    font-size:1vw;
    padding:5px 5px;
    border-style:solid;
    border-width: 0px;
    border-radius: 5%;
}
.adminlogmenu:hover{
    border-style:solid;
}
@media screen and (max-width:800px){
    .footerh4{
        font-size:3vw;
    }
    #para-excel{
        margin-left:8%;
    }
    .colum{
        display:inline;
        top:85%;
        width:5%;
    }
    ul{
        width:12%;
    }
    .web-desc, .main{
        margin-left: 10%;
    }
    .web-desc{
        margin-top:-10px;
        font-size:3.3vw;
    }
    .firsec{
        background-position: top right;
       /* background-size: 100% 100%;*/
        width:88%;
        height:+200px;
        margin-left:12%;
    }
    #bas{
        z-index:2;
        font-size: 4vw;
        margin-top:5%;
        margin-left:35%;
        text-shadow:0px 0px 2px purple;
        display:inline-block;
    }
    /*.listdesc{
        padding:2vw 5.5vw;
        font-size:5vw;
    }*/
    li a{
        font-size: 2.5vw; 
        padding:9px 9px;
    }
    #splashimages{
        max-height:50vh;
        height:50vh;
        padding-left:0%;
        max-width:40vh;
    }
    .column{
        width:90%;
        padding-left:25%;
        font-size:2.5vw;
    }
    .main{
        font-size: 7vw;
    }
    #para-excel{
        font-size:2.5vw;
        margin-left:-13%;
    }
    .bodyofbas{
        margin-left:25%;
    }
    #colum1{
        margin-right:5%;
        float:left;
        position:absolute;
        left:90px;
        display:block;
    }
    #colum2{
        margin-left:5%;
        float:left;
        position:absolute;
        display:block;
        right:30px;
    }
    #column_cloth{
        width:65%;
        height:390px;
        margin-left:23%;
    }
    .hr_clothsec{
        margin-bottom:15%;
        box-shadow:0px 0px 10px purple;
    }
    #desc_cloth{
        font-size:3.2vw;
    }
    .allmenu{
        font-size:2.1vw;
        padding:4px 4px;
    }
    #footer{
    background-color:purple/*rgba(0, 0, 0, 0.9)*/;
    padding:17%;
    color:whitesmoke;
    /*padding: 44%;*/   
    margin:0 0 0 12%;
    word-wrap:keep-all;
    font-family:Miro3;
    text-align:left;
    font-size:2.5vw;
    position:relative;
    top:95px;
    float:right;
    }
    .footerp{
        font-size: 3vw;
        
    }
    .exploremenu{
        /*position:absolute;
        right:21%;
        top: 590%;
        z-index: 5;*/
        margin-top:10%;
        margin-left:35%;
        float:left;
        font-size:+13px;
        padding:15px 40px;
    }
    .footerimg{
        position: absolute;
        top:46.4%;
        right:82%;
    }
    .footerimg2{
        position: absolute;
        top:53.5%;
        right:80.5%;
    }
    .adminlogmenu{
    font-size:1.9vw;
    }
}              

            </style>
        </head>
        <body>
            <ul>
                <li><a href="Mirah Admin Login.php" target="_blank;" style="background-color: gold; color:white;" class="adminlogmenu">Admin<br>Login</a></li>
                <hr style="margin-top:50%;">
                <!--<li><h1 class="listdesc" align="center">Colors</h1></li>-->
                <li><a href="Mirah Shopping.php" target="_blank;" style="background-color: purple; color:white;" class="allmenu">All</a></li>
                <li><a href='Mirah Shopping.php' class="bluemenu" style="background-color: navy;"></a></li>     
                <li><a  href="Mirah Shopping.php" class="orangemenu" style="background-color: rgb(236, 81, 81);"></a></li>
                <li><a href="Mirah Shopping.php" class="redmenu" style="background-color: white;"></a></linclick=>
                <li><a href="Mirah Shopping.php" style="background-color: black;" class="whitemenu"></a></linclick=>
                <li><a href="Mirah Shopping.php" style="background-color: rgb(18, 78, 18);" class="greenmenu"></a></linclick=>
                <li><a href="Mirah Shopping.php" style="background-color: yellow;" class="yellowmenu"></a></linclick=>
            </ul>
        <section class="firsec">
            <section>
                <h1 class="main">Mirah Apparel</h1>
                <p class="web-desc">Welcome to our curated selection of feminine fashion,<br>
                    crafted to embody the essence the standard of <br>
                    classic and stylish features.
            </section>
        </section>
            <section class="mainsec">
            <section class="secsec">
                <h2 id="bas"><?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo $row['title'];
                                                                        }    
                                                                    ?></h2>
                <hr width="60%" style="margin-bottom:2%;">
                <section class="bodyofbas">
                <button onclick='lchangepage();' class="colum" id="colum1">❮</button>
                <p id='para-excel' class="column"><?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo $row['paragraph'];
                                                                        }    
                                                                    ?></p>
                    <img id='splashimages'src=<?php
                                                                        $sql='select * from splash_details where pageno=1';
                                                                        $result=$conn->query($sql);
                                                                        while($row=$result->fetch_assoc()){
                                                                            echo '"'.$row['imglink'].'"';
                                                                        }    
                                                                    ?> class="column">
                    <button onclick="rchangepage();" class="colum" id="colum2">❯</button>
                </section>
            </section>
                <hr class="hr_clothsec">
                <hr class="hr_clothsec">
                <section class="cloth_sect"> <!--8378 20 BA-->
                    <div id="row_cloth">
                        <!--<a href="#">
                        <div id="column_cloth">
                            <img src="Navy_blue_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Zippered Navy Blue Embroidered Gown ₺2500 - $61<br>V-Shape Long Navy Blue Scarf-like Hijab ₺600 - $15</p>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div id="column_cloth">
                            <img src="Yellow_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Yellow Gold A-Shape Gown, Round-Shape Medium Yellow Gold Hijab"> 
                            <div id="desc_cloth">
                                <p>Yellow Gold A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Yellow Gold Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div id="column_cloth">
                            <img src="Emerald_2.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Emerald Green Nidha Fabric A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Size Emerald Green Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div id="column_cloth">
                            <img src="Navy_blue_stone_2.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Round-Shape Medium Size White Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div id="column_cloth">
                            <img src="Black_silver_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Black Silver Embroidered Gown ₺2500 - $61<br>U-Shape Shoulder Cinched Medium Size White Hijab ₺600 - $15</p>
                            </div>
                        </div>
                        </a>
                        <a href="#">
                        <div id="column_cloth">
                            <img src="White_golden_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>White Golden Embroidered Gown ₺2500 - $61<br>U-Shape Short White Embroidered Hijab ₺400 - $10</p>
                            </div>
                        </div>
                        </a>-->
                        <?php
                        /*$dbservername='localhost';
                        $dbusername='Ahmad';
                        $dbpassword='champion18414';
                        $dbname='mirahadmindb';

                        $conn=new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

                        if($conn->connect_error){
                            die('Connection failed'. $conn->connect_error);
                        }*/
                        $fakecount='select count("Product ID") from admin_post';
                        $realcoun=$conn->query($fakecount);
                        while($row=$realcoun->fetch_assoc()){
                            $realcount=$row['count("Product ID")'];
                            if ($realcount>5){
                                $realcount=$realcount-6;
                                $choose='Select * from admin_post limit 6 offset '.$realcount;
                                $result=$conn->query($choose);
                        if ($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                echo ('<a href="javascript:void(0);" id="'.$row['Category']. '"class="cc"><div id="column_cloth"><img src="'.$row['Img_link']. '"style="border-top-left-radius:15px; border-top-right-radius:15px;" width="100%" height="270px" alt="'.$row['Description'].'"><div id="desc_cloth"><p>'.$row['Description'].'</p></div></div></a>');
                                
                            }
                        }
                            }else{
                                echo '<section class="cloth_sect"> <!--8378 20 BA-->
                    <div id="row_cloth">
                        <a href="javascript:void(0);">
                        <div id="column_cloth">
                            <img src="Navy_blue_1.jpg" style="border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;"width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Zippered Navy Blue Embroidered Gown ₺2500 - $61<br>V-Shape Long Navy Blue Scarf-like Hijab ₺600 - $15</p>
                            </div>
                        </div>
                        </a>
                        <a href="javascript:void(0);">
                        <div id="column_cloth">
                            <img src="Yellow_1.jpg" style="border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;"width="100%" height="270px" alt="Yellow Gold A-Shape Gown, Round-Shape Medium Yellow Gold Hijab"> 
                            <div id="desc_cloth">
                                <p>Yellow Gold A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Yellow Gold Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="javascript:void(0);">
                        <div id="column_cloth">
                            <img src="Emerald_2.jpg" style="border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;"width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Emerald Green Nidha Fabric A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Size Emerald Green Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="javascript:void(0);">
                        <div id="column_cloth">
                            <img src="Navy_blue_stone_2.jpg" style="border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;"width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Round-Shape Medium Size White Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="javascript:void(0);">
                        <div id="column_cloth">
                            <img src="Black_silver_1.jpg" style="border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;"width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Black Silver Embroidered Gown ₺2500 - $61<br>U-Shape Shoulder Cinched Medium Size White Hijab ₺600 - $15</p>
                            </div>
                        </div>
                        </a>
                        <a href="javascript:void(0);">
                        <div id="column_cloth">
                            <img src="White_golden_1.jpg" style="border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;"width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>White Golden Embroidered Gown ₺2500 - $61<br>U-Shape Short White Embroidered Hijab ₺400 - $10</p>
                            </div>
                        </div>
                        </a>';
                            } 
                        }
                        
                        $conn->close();
                        ?>
                    </div>
                        <a href="Mirah Shopping.php">
                        <button class='exploremenu'>Explore More</button></a>
                </section>                
            </section>
            <hr style='margin-bottom:5%; float:left;'>
            <section id="footer">
                    <!--<div  id="footer">-->
                        <p class="footerp">Mirah Apparel | Crafted with care for your style and comfort. Discover quality fabrics and timeless designs made just for you. Connect with us for updates, exclusive offers, and personalized support.<br> &copy; 2025 Mirah Apparel. All rights reserved.</p>
                        <img class='footerimg' src="whatsapp_ico.png" width="27px" height="30px">
                        <img class='footerimg2' src="Instagram_icon.png" width="38.5px" height="38.5px">
                        <h4 class="footerh4">WhatsApp Contacts: ‪+905338748768‬<br>‪+905391357472‬ <br>Instagram Account: MirahApparel_Boutique <br> Kindly Support Us- Account Name: Habibah O. Miftaudeen-Rauf <br>
                                                                                                                                                                                                     Account Number: 68060067121<br>
                                                                                                                                                                                                     Bank Name:  İş Bankası</h4>
                    <!--</div>-->
            </section>
        </body>
    </html>
