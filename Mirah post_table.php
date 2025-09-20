<!DOCTYPE html>
    <html>
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Mirah Post Table</title>
            <style>
                *{
                    box-sizing: border-box;
                }
                 body{
                    overflow: auto;
                    box-sizing: border-box;
                    /*display:flex;
                    align-items:center;
                    /*justify-content:center;*/
                    /*height:100vh;
                    margin:0;
                    background-color:#fff;
                    font-family: Arial, Helvetica, sans-serif;*/
                }
                             ul {
    float:left;
    list-style-type: none;
    margin: 0;
    padding: 0;
    width: 10%;
    background:linear-gradient(to top, purple 60%, black);
    position:fixed;
    height: 100%;
    overflow: auto;
    text-align:left;
    border-right:1px solid grey;
    box-shadow: 100px 0px 400px rgba(128, 0, 128,0.2);
    position: absolute;
    left:0;
    top:0;
}
li{
        margin-top:0px;
        text-align:center;
        border-bottom:1px solid white;
        /*box-shadow: 0px 0px 5px gold;*/
}
li:first-child{
    margin-top:40%;
}
/*li:last-child{
        
}*/
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
                table{
                    justify-content: center;
                }
                .container{
                    width:70vw;
                    height:30vh;
                    background-color: #fff;
                    border-radius:12px;
                    display:flex;
                    align-items: center;
                    justify-content:center;
                    flex-direction: column;
                    padding: 20px;
                }
                table{
                    width:80%;
                    position:absolute;
                    top:10%;
                    left:15%;
                    border-collapse: collapse;
                    /*border-collapse: collapse;
                    width:90%;
                    display:inline-block;
                    margin:0 auto;
                    position:relative;
                    left:35%;
                    table-layout:auto;
                    text-overflow:ellipsis;*/
                }
                td, th{
                    border:1px solid black;
                    padding:8px;
                    text-align:left;
                }
                th{
                    color:white;
                    background-color: purple;
                }
                tr:nth-child(odd){
                    background-color:rgba(128,0,128,0.6);
                    color:white;
                }
                @media only screen and (max-width:800px){
    body{
                 overflow: auto;
                }
    ul{
        width:12%;
    }
    li a{
        font-size:2.7vw;
    }
    #adminpostheading{
        font-size:4vw;
        left: 25%;
    }
    .container{
        width:30%;
    }
    table{
                    width:20%;
                    left:18%;
    

                    /*border-collapse: collapse;
                    width:100%;
                    display:block;
                    margin:0 auto;
                    position:relative;
                    left:35%;
                    table-layout:fixed;
                    text-overflow:ellipsis;*/
                }
                td, th{
                    border:1px solid black;
                    padding:5px;
                    text-align:left;
                }
}
            </style>
        </head>
        <body>
            <ul>
                <li><a href="Mirah Admin Dashboard(Creating post).php" target="_blank;" style="color:white;" class="allmenu">Create posts</a></li>
                <li><a href='Mirah Admin Dashboard (Deleting post).php' class="bluemenu" style="color: white;">Delete posts</a></li>     
                <li><a  href="Mirah post_table.php" class="orangemenu" style="color: white">View posts</a></li>
                <li><a  href="Mirah Admin Dashboard(Editing splash).php" class="orangemenu" style="color: white">Edit Splash</a></li>
                <!--<li><a href="Mirah Shopping.php" class="redmenu" style="color: white;"></a></li>
                <li><a href="Mirah Shopping.php" style="color: black;" class="whitemenu"></a></li>
                <li><a href="Mirah Shopping.php" style="color: rgb(18, 78, 18);" class="greenmenu"></a></li>
                <li><a href="Mirah Shopping.php" style="color: yellow;" class="yellowmenu"></a></li>-->
            </ul>
        <div class="container" >
        <table>
            <tr>
                <th>Product ID</th>
                <th>Description & Pricing</th>
                <th>Image Link</th>
                <th>Color Category</th>
                <th>Time Created</th>
            </tr>
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
                        echo '<tr><td>'.$row["Product ID"].'</td><td>'.$row["Description"].'</td><td>'.$row["Img_link"].'</td><td>'.$row["Category"].'</td><td>'.$row["Created at"].'</td></tr>';
                    }
                }
            ?>
        </table>
        </div>
        </body>
    </html>