<!DOCTYPE html>
    <html>
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Mirah Shopping</title>
            <script>
                alert("Welcome warmly to Mirah Shopping site where you will be able to view and buy the apparels you once wish for. Please note that there won't be ordering for your apparel you want to buy but may be available later. If you wish to support us, you cann do so by following the support menu in the footer. Thanks.");
                function allcategory() {
                    document.getElementById('categoryindicator').innerHTML='All';
                    document.getElementById('categoryindicator').style.borderBottom='3px solid purple';
                    const element = document.querySelectorAll('.cc');
                    element.forEach(el => {
                    el.style.display = 'block';
                    });
                }
                function navybluecategory() {
                    document.getElementById('categoryindicator').innerHTML='Navy Blue';
                    document.getElementById('categoryindicator').style.borderBottom='3px solid navy';
                    const element = document.querySelectorAll('.cc');
                    element.forEach(el => {
                    el.style.display = 'none';
                    });
                    const elements = document.querySelectorAll('#navyblueid');
                    elements.forEach(el => {
                    el.style.display = 'block';
                    });
                }
                function orangepeachcategory() {
                    document.getElementById('categoryindicator').innerHTML='Orange Peach';
                    document.getElementById('categoryindicator').style.borderBottom='3px solid rgb(236, 81, 81) ';
                    const element = document.querySelectorAll('.cc');
                    element.forEach(el => {
                    el.style.display = 'none';
                    });
                    const elements = document.querySelectorAll('#orangepeachid');
                    elements.forEach(el => {
                    el.style.display = 'block';
                    });
                }
                function whitecategory() {
                    document.getElementById('categoryindicator').innerHTML='White';
                    document.getElementById('categoryindicator').style.borderBottom='3px solid whitesmoke ';
                    const element = document.querySelectorAll('.cc');
                    element.forEach(el => {
                    el.style.display = 'none';
                    });
                    const elements = document.querySelectorAll('#whiteid');
                    elements.forEach(el => {
                    el.style.display = 'block';
                    });
                }
                function blackcategory() {
                    document.getElementById('categoryindicator').innerHTML='Black';
                    document.getElementById('categoryindicator').style.borderBottom='3px solid black ';
                    const element = document.querySelectorAll('.cc');
                    element.forEach(el => {
                    el.style.display = 'none';
                    });
                    const elements = document.querySelectorAll('#blackid');
                    elements.forEach(el => {
                    el.style.display = 'block';
                    });
                }
                function greencategory() {
                    document.getElementById('categoryindicator').innerHTML='Green';
                    document.getElementById('categoryindicator').style.borderBottom='3px solid green ';
                    const element = document.querySelectorAll('.cc');
                    element.forEach(el => {
                    el.style.display = 'none';
                    });
                    const elements = document.querySelectorAll('#greenid');
                    elements.forEach(el => {
                    el.style.display = 'block';
                    });
                }
                function yellowcategory() {
                    document.getElementById('categoryindicator').innerHTML='Yellow';
                    document.getElementById('categoryindicator').style.borderBottom='3px solid yellow ';
                    const element = document.querySelectorAll('.cc');
                    element.forEach(el => {
                    el.style.display = 'none';
                    });
                    const elements = document.querySelectorAll('#yellowid');
                    elements.forEach(el => {
                    el.style.display = 'block';
                    });
                }
            </script>
            <style>
                *{
                    box-sizing:border-box;
                }
                body{
                    font-family:Palatino Linotype;
                    box-sizing:border-box;
                    margin:0;
                }
ul {
    float:left;
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 5%;
    background:linear-gradient(to top, purple 60%,black);
    position: fixed;
    height: 100%;
    overflow: auto;
    text-align:left;
    border-right:1px solid grey;
    box-shadow: 100px 0px 400px purple;
}
li{
        cursor:pointer;
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
#row_cloth:after{
    content: "";
    display: table;
    clear: both; 
}
#column_cloth{
    box-shadow:2px 5px 3px black;
    width:20%;
    float:left;
    height: 415px;
    margin-left:11%;
    margin-top:1%;
    margin-bottom:6%;
    background-color: white;
    border-radius:15px;
}
#desc_cloth{
    text-align:center;
    word-wrap: break-word;
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color:rgba(0, 0, 0, 0.8);
}
/*p{
    
}*/
.ms_text{
    font-size:3vw;
    font-family:Palatino Linotype; 
    margin-left:8%;
    font-size:3vw; 
    display:inline-block;
}
.allmenu{
    font-size:1.2vw;
    padding:4px 4px;
}
#categoryindicator{
    z-index:5;
    margin-top:2%;
    display:block;
    color:black;
    margin-left:15%;
    font-family:Palatino Linotype;
    border-bottom: 3px solid purple;
    font-size:2.2vw;
    border-radius:2px;
    display:inline-block; 
    padding:0 10px 0 3px ;
}
.ms_hr{
    display:inline-block;
    width:90%;
    margin-left:7.5%;
}
.adminlogmenu{
    font-size:0.9vw;
    padding:5px 5px;
    border-style:solid;
    border-radius: 5%;
    border-width:0px;
}
.adminlogmenu:hover{
    border-style:solid;
}
@media only screen and (max-width:800px){
    #categoryindicator{
        font-size:4.5vw;
        margin-left:25%;
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
        font-size:3vw;
    }
    .firsec{
        background-position: top right;
       /* background-size: 100% 100%;*/
        width:88%;
        margin-left:12%;
    }
    #bas{
        z-index:2;
        font-size: 3vw;
        margin-top:5%;
        margin-left:35%;
        display:inline-block;
    }
    .listdesc{
        padding:2vw 5.5vw;
        font-size:5vw;
    }
    li a{
        font-size: 2.5vw; 
        padding:9px 9px;
    }
    .allmenu{
        font-size:2.1vw;
        padding:4px 4px;
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
    #para-excel{
        font-size:2.5vw;
    }
    .bodyofbas{
        margin-left:25%;
    }
    #colum1{
        margin-right:10%;
        float:left;
        position:absolute;
        left:90px;
        display:block;
    }
    #colum2{
        margin-left:10%;
        float:left;
        position:absolute;
        display:block;
        right:30px;
    }
    #column_cloth{
        width:70%;
        height:405px;
        margin-left:22.1%;
    }
    .ms_text{
        font-size:6vw;
        margin-left:15%;
    }
    #desc_cloth{
        font-size:3.4vw;    
    }
    .ms_hr{
        width:68.5%;
        margin-left:22%;
    }
    .adminlogmenu{
    font-size:1.7vw;
    }
} 
            </style>
        </head>
        <body>
            <ul>
                <li><a href="Mirah Admin Login.php" target="_blank;" style="background-color: gold; color:white;" class="adminlogmenu">Admin<br>Login</a></li>
                <hr style="margin-top:50%;">
                <!--<li><h1 class="listdesc" align="center">Colors</h1></li>-->
                <li onclick="allcategory();"><a style="background-color: purple; color:white;" class="allmenu">All</a></li>
                <li onclick="navybluecategory();"><a class="bluemenu" style="background-color: navy;"></a></li>     
                <li onclick="orangepeachcategory();"><a class="orangemenu" style="background-color: rgb(236, 81, 81);"></a></li>
                <li onclick="whitecategory();"><a class="redmenu" style="background-color: white;"></a></li>
                <li onclick="blackcategory();"><a style="background-color: black;" class="whitemenu"></a></li>
                <li onclick="greencategory();"><a style="background-color: rgb(18, 78, 18);" class="greenmenu"></a></li>
                <li onclick="yellowcategory();"><a style="background-color: yellow;" class="yellowmenu"></a></li>
            </ul>
            <h1 class='ms_text'>Mirah Shopping</h1>
        <hr class="ms_hr">
        <h2 id="categoryindicator">All</h2>
        <section class="cloth_sect"> <!--8378 20 BA-->
                    <div id="row_cloth">
                        <!--<a href="#" id="navyblueid" class="cc">
                        <div id="column_cloth">
                            <img src="Navy_blue_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Zippered Navy Blue Embroidered Gown ₺2500 - $61<br>V-Shape Long Navy Blue Scarf-like Hijab ₺600 - $15</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="yellowid" class="cc">
                        <div id="column_cloth">
                            <img src="Yellow_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Yellow Gold A-Shape Gown, Round-Shape Medium Yellow Gold Hijab"> 
                            <div id="desc_cloth">
                                <p>Yellow Gold A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Yellow Gold Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="greenid" class="cc">
                        <div id="column_cloth">
                            <img src="Emerald_2.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Emerald Green Nidha Fabric A-Shape Gown ₺1500 - $37<br>Round-Shape Medium Size Emerald Green Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="#"  id="navyblueid" class="cc">
                        <div id="column_cloth">
                            <img src="Navy_blue_stone_2.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Round-Shape Medium Size White Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="blackid" class="cc">
                        <div id="column_cloth">
                            <img src="Black_silver_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Black Silver Embroidered Gown ₺2500 - $61<br>U-Shape Shoulder Cinched Medium Size White Hijab ₺600 - $15</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="whiteid" class="cc">
                        <div id="column_cloth">
                            <img src="White_golden_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>White Golden Embroidered Gown ₺2500 - $61<br>U-Shape Short White Embroidered Hijab ₺400 - $10</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="blackid" class="cc">
                        <div id="column_cloth">
                            <img src="Pink.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'    width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Black Golden Embroidered Gown ₺2500 - $61<br>U-Shape Long Pink Hijab ₺600 - $15<br>Golden Fashion Brooch ₺200 - $5</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="navyblueid" class="cc">
                        <div id="column_cloth">
                            <img src="Navy_blue_2.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Square-Shape Medium Size Navy Blue Hijab ₺500 - $12.21</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="blackid" class="cc">
                        <div id="column_cloth">
                            <img src="Black_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Black Silver Embroidered Gown ₺2500 - $61<br>V-Shape Medium size Black Hijab ₺450 - $11</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="navyblueid" class="cc">
                        <div id="column_cloth">
                            <img src="Navy_pink_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Navy Blue Stone Embroidered Gown ₺2500 - $61<br>V-Shape Long Pink Scarf-like Hijab ₺600 - $15</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="orangepeachid" class="cc">
                        <div id="column_cloth">
                            <img src="orange_peach_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Zippered Brown Pink Gown ₺2500 - $61<br>Zippered U-Shape Short White Embroidered Hijab ₺400 - $10</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="greenid" class="cc">
                        <div id="column_cloth">
                            <img src="Green_frontal_tie_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Emerald Green Nidha Fabric A-Shape Gown ₺1500 - $37<br>Two Layers Long White Hijab with frontal tie ₺700 - $17</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="navyblueid" class="cc">
                        <div id="column_cloth">
                            <img src="Navy_pink_2.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Square-Shape Medium Size Pink Hijab ₺500 - $12.21</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="navyblueid" class="cc">
                        <div id="column_cloth">
                            <img src="Navy_pink_3.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Navy Blue Stone Embroidered Gown ₺2500 - $61<br>Zippered U-Shape Short Pink Hijab ₺400 - $10<br>Silver Fashion Brooch ₺200 - $5</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="blackid" class="cc">
                        <div id="column_cloth">
                            <img src="Black_Golden_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p>Black Golden Embroidered Gown ₺2500 - $61<br>Zippered U-Shape Short Black Hijab ₺400 - $10</p>
                            </div>
                        </div>
                        </a>
                        <a href="#" id="whiteid" class="cc">
                        <div id="column_cloth">
                            <img src="White_stoned_1.jpg" style='border-top-left-radius: 15px;
                                                              border-top-right-radius:15px;'width="100%" height="270px" alt="Zippered Navy Blue Embroidered Gown , V-Shape Long Navy Blue Scarf-like Hijab">
                            <div id="desc_cloth">
                                <p> White Stone Embroidered Gown ₺2500 - $61<br>Two Layers Short White Hijab ₺400 - $10</p>
                            </div>
                        </div>
                        </a>-->
                        <?php
                        $dbservername='localhost';
                        $dbusername='Ahmad';
                        $dbpassword='champion18414';
                        $dbname='mirahadmindb';

                        $conn=new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

                        if($conn->connect_error){
                            die('Connection failed'. $conn->connect_error);
                        }
                        $sql='SELECT * FROM admin_post';
                        $result=$conn->query($sql);
                        if ($result->num_rows>0){
                            while($row=$result->fetch_assoc()){
                                echo ('<a href="javascript:void(0);" id="'.$row['Category']. '"class="cc"><div id="column_cloth"><img src="'.$row['Img_link']. '"style="border-top-left-radius:15px; border-top-right-radius:15px;" width="100%" height="270px" alt="'.$row['Description'].'"><div id="desc_cloth"><p>'.$row['Description'].'</p></div></div></a>');
                            }
                        }
                        $conn->close();
                        ?>
                    </div>
        </body>
    </html>