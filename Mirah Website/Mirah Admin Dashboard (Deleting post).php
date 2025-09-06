<!DOCTYPE html>
    <html>
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <title>Mirah Admin Dashboard (Deleting Posts)</title>
            <script>

            </script>
            <style>
                body{
                    overflow-y: auto;
                    overflow-x:hidden;
                }
ul {
    float:left;
    list-style-type: none;
    margin: 0;
    padding: 0;
    margin-left:-10px;
    width: 10%;
    position:relative;
    bottom:0px;
    background:linear-gradient(to top, purple 60%, black);
    position: fixed;
    height: 100%;
    overflow: auto;
    text-align:left;
    border-right:1px solid grey;
    box-shadow: 100px 0px 400px rgba(128, 0, 128,0.2);

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
li:last-child{

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
#adminpostheading{
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    position:relative;
    left:12%;
}
.allmenu{
    font-size:1.2vw;
    padding:4px 4px;
}
.adminlogmenu{
    font-size:0.9vw;
    padding:2px 2px;
    border-style:groove;
}
.adminlogmenu:hover{
    border-style:ridge;
}
form{
    margin-left:100px;
}
.desclabel{
    margin-bottom: 20px;
}
textarea{
    margin-top:20px;
}
* {
    box-sizing: border-box;
}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    resize: vertical;
}

label {
    padding: 12px 12px 12px 0;
    display: inline-block;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    font-size:1.2vw;
    cursor: pointer;
    float: right;
}

input[type=submit]:hover {
    background-color: #45a049;
}
label{
    color:white;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif    ;
}
.container {
    border-radius: 5px;
    background:linear-gradient(150deg ,black,rgba(128, 0, 128,0.9));
    padding: 20px;
    width:92%;
    margin-left: auto;
    display: flex;
    flex-direction: column;
}

.col-25 {
    float: left;
    width: 25%;
    margin-top: 6px;
}

.col-75 {
    float: left;
    width: 75%;
    margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .col-25, .col-75, input[type=submit] {
        float:left;
        width: 80%;
        margin-top: 0;
    }
    input[type=submit]{
        font-size: 3vw;
    }
}
@font-face{
                    font-family:Miro3;
                    src:url('HvDTrial_Brandon_Grotesque_medium-BF64a625c84a521.otf');
                }
@media only screen and (max-width:800px){
    .col-25, .col-75, input[type=submit] {
        float:left;
        width: 80%;
        margin-top: 0;
    }
    input[type=submit]{
        font-size: 3vw;
    }
    body{
                overflow-y: auto;
                overflow-x:hidden;
                }
    ul{
        width:12%;
        overflow: hidden;
    }
    li a{
        font-size:2.7vw;
    }
    #adminpostheading{
        font-size:4vw;
        left: 25%;
    }
    .container{
        width:105%;
        display:inline-block;
    }
}
@media only screen and (max-width:340px){
    .col-25, .col-75, input[type=submit] {
        float:left;
        width: 75%;
        margin-top: 0;
    }
    input[type=submit]{
        font-size: 3vw;
    }
    body{
                overflow-y: auto;
                overflow-x:hidden;
                }
    ul{
        width:12%;
        overflow:hidden;
    }
    li a{
        font-size:2.7vw;
    }
    #adminpostheading{
        font-size:4vw;
        left: 25%;
    }
    .container{
        width:105%;
        display:inline-block;
    }
}
            </style>
        </head>
        <body>
            <!--<ul>
                <li><h1 class="listdesc" align="center">Colors</h1></li>
                <li><a href="Mirah Shopping.html" target="_blank;" style="background-color: purple; color:white;" class="allmenu">Posts</a></li>
                <li><a href='Mirah Shopping.html' class="bluemenu" style="background-color: transparent; color:red;">Post</a></li>     
                <li><a  href="Mirah Shopping.html" class="orangemenu" style="background-color: rgb(236, 81, 81);"></a></li>
                <li><a href="Mirah Shopping.html" class="redmenu" style="background-color: white;"></a></linclick=>
                <li><a href="Mirah Shopping.html" style="background-color: black;" class="whitemenu"></a></linclick=>
                <li><a href="Mirah Shopping.html" style="background-color: rgb(18, 78, 18);" class="greenmenu"></a></linclick=>
                <li><a href="Mirah Shopping.html" style="background-color: yellow;" class="yellowmenu"></a></linclick=>
            </ul> -->
            <h1 id="adminpostheading">Delete Post</h1>
            <ul>
                <li><a href="Mirah Admin Dashboard(Creating post).php" target="_blank;" style="color:white;" class="orangemenu">Create posts</a></li>
                <li><a href='Mirah Admin Dashboard (Deleting post).php' class="orangemenu" style="color: white;">Delete posts</a></li>     
                <li><a  href="Mirah post_table.php" class="orangemenu" style="color: white">View posts</a></li>
                <li><a  href="Mirah Admin Dashboard(Editing splash).php" class="orangemenu" style="color: white">Edit Splash</a></li>
            </ul>
            <div class="container">
  <form action="Mirah DeletingDB.php" method="POST">
    <div class="row">
      <div class="col-25">
        <label for="Imagelink">Image Link</label>
      </div>
      <div class="col-75">
        <input type="text" id="Imagelink" name="Imagelink" placeholder="Type the image link here..">
      </div>
    </div>
   <!-- <div class="row">
      <div class="col-25">
        <label for="category">Color Category</label>
      </div>
      <div class="col-75">
        <select id="category" name="category">
          <option value="navyblueid">Navy</option>
          <option value="orangepeachid">Orange Peach</option>
          <option value="whiteid">White</option>
          <option value="blackid">Black</option>
          <option value="greenid">Green</option>
          <option value="yellowid">Yellow</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="desc">Description & Pricing</label>
      </div>
      <div class="col-75">
        <textarea id="desc" name="desc" placeholder="Description & pricing" style="height:200px"></textarea>
      </div>
    </div>-->
    <div class="row">
      <input type="submit"  value="Delete">
    </div>
  </form>
</div>
            <!--<form action="" method="post">
                <label for="Description" class="desclabel">Description of Image post:</label>
                <textarea name="Description" placeholder="Type the description of post here.."></textarea><br>
                <label for="Imglink">Image link:</label>
                <input type="text" name="Imglink" id="Imglink" placeholder="Paste the image link here..">
            </form>-->
        </body>