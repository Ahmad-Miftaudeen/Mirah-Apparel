<!DOCTYPE html>
    <html>
        <head>
            <meta name='viewport' content='width=device-width, initial-scale=1.0'>
            <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <title>Mirah Admin Login</title>
            <style>
                body{
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                }
                label{
                    margin-top:5%;
                    position:relative;
                    top: 25px;
                }
                input[type=text],input[type=password]{
    width: 80%;
    padding: 12px 20px;
    margin: 8px 0;
    margin-top:8%;
    margin-left:10%;
    margin-bottom: 0%;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=text]:focus{
    background-color: #99ff99;
}
input[type=password]:focus{
    background-color:#99ff99;
}
input[type=submit] {
    width: 70%;
    background-color: #4CAF50;
    color: white;
    font-size: 1.5vw;
    padding: 14px 20px;
    margin: 8px;
    margin-top:10%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
    /*border-radius: 5px;
    background-color: rgb(153, 4, 153);
    padding: 20px;*/
    border-radius: 5% 0 5% 0;
                    box-shadow: 100px 0 500px rgba(0,0,0,0.03),0 100px 500px rgba(0,0,0,0.03),-100px 0 500px rgba(0,0,0,0.03), 0 -100px 800px rgba(0,0,0,0.03);
                    background:linear-gradient(330deg ,black,rgba(128, 0, 128,0.9));
                    display:inline-block;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    height: 65%;
                    width:30%;
                    position:absolute;
                    top:17%;
                    left:35%;
}
#adminlogin{
    font-size:2.7vw; 
    font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
@media only screen and (max-width:800px){
    label{
                    margin-top:5%;
                    position:relative;
                    top: 20px;
                }
    div{
        width:65%;
        left:17.5%;
        
    }
    input[type=submit] {
    width: 70%;
    background-color: #4CAF50;
    color: white;
    font-size: 3.1vw;
    padding: 14px 20px;
    margin: 8px;
    margin-top:10%;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
#adminlogin{
    font-size:7vw; 
}
}
@media only screen and (max-width:400px){
    div{
        width:65%;
        left:17.5%;
        height:45%;
    }
    label{
                    margin-top:5%;
                    position:relative;
                    top: 15px;
                }
    input[type=text],input[type=password]{
        padding:8px 20px;
    }
}
</style>
<body>

<h3 align="center" id="adminlogin">Admin Login</h3>

<div>
  <form action="MirahForm.php" method="POST">
    <label for="fname" style="color:white;">Admin Name</label>
    <input type="text" id="admin_name" name="admin_name" placeholder="Admin Name" autocomplete="on" required>

    <label for="password1" style="color:white;">Password 1</label>
    <input type="password" id="password1" name="password1" placeholder="Password 1" autocomplete="off" required>

    <label for="password2" style="color:white;">Password 2</label>
    <input type="password" id="password2" name="password2" placeholder="Password 2" autocomplete="off" required>
  
    <input type="submit" value="Submit" align="center">
  </form>
</div>
                <!--body{
                    font-family: palatino linotype;
                }
                .loginbox{
                    border-radius: 5% 0 5% 0;
                    box-shadow: 100px 0 500px rgba(0,0,0,0.01),0 100px 500px rgba(0,0,0,0.01),-100px 0 500px rgba(0,0,0,0.01), 0 -100px 800px rgba(0,0,0,0.01);
                    background-color: rgba(128, 0, 128,0.9);
                    display:inline-block;
                    justify-content: center;
                    align-items: center;
                    text-align: center;
                    height: 60%;
                    width:25%;
                    position:absolute;
                    top:17%;
                    left:40%;
                }
                label{
                    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                    color:white;
                }
                input{
                    border-radius: 10px;
                    padding:5px 30px;
                    margin-left:10px;
                    border-style: solid;
                    border-color: rgb(214, 7, 214);
                    border-width:3px;
                    margin-bottom: 55px;
                    font-family:Miro3;
                }
                input:ac{
                    background-color: aqua;
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
            </style>
        </head>
        <body>
            <div class="loginbox">
            <h2 style="font-family:Miro3;">Admin Login</h2>
            <form>
                <label for="adminname"><i class="fa fa-users"></i>&nbsp; &nbsp; &nbsp;</label>
                <input type="text" name="name" id="name" placeholder="Admin name"><br>
                <label for="password1"><i class="material-icons">password</i>&nbsp; &nbsp; &nbsp;</label>
                <input type="password" name="password1" id="password1" placeholder="Password 1"><br>
                <label for="password2"><i class="material-icons">password</i>&nbsp; &nbsp; &nbsp;</label>
                <input type="password" name="password2" id="password2" placeholder="Password 2">
            </form>
            </div>-->
        </body>
    </html>