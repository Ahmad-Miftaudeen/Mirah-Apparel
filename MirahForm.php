<?php
$adminname=filter_input(INPUT_POST, 'admin_name');
$password1=filter_input(INPUT_POST, 'password1');
$password2=filter_input(INPUT_POST, 'password2');

$dbservername='localhost';
$dbusername='Ahmad';
$dbpassword='champion18414';
$dbname='mirahadmindb';

$conn=new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

if($conn->connect_error){
    die('Connection failed'. $conn->connect_error);
}
$sql='SELECT * FROM admin';
$result=$conn->query($sql);
if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
        if ($row['Admin_name']==$adminname){
            if ($row['Password_1']==$password1){
                if($row['Password_2']==$password2){
                    echo 'Welcome to Mirah Administration Account.';
                    header('location:Mirah Admin Dashboard(Creating post).php');
                    break;
                } //else{
                    
                   // echo 'This credential is not correct, please try again.';
                }
            }else{
                    continue;
                }
        }
    }
//}

$conn->close();
//$sql='create table admin(
//    Admin_name varchar(255),
//    Password_1 varchar(255),
//    Password_2 varchar (255)
//)';
/*$sql='Insert into admin(Admin_name,Password_1,Password_2) 
      values("Halimah Miftaudeen-Rauf", "mirahdeen123", "mirahdeen456"),
            ("Hafsoh Miftaudeen-Rauf", "mirahdeen123", "mirahdeen456"),
            ("Habibah Miftaudeen-Rauf", "mirahdeen123", "mirahdeen456")';
if ($conn->query($sql)===TRUE){
    echo 'Added successfully.';
}*/
?>