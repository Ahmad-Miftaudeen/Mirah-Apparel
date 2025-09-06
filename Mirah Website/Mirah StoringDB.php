<?php
                        $imagelink=filter_input(INPUT_POST,'Imagelink');
                        $category=filter_input(INPUT_POST, 'category');
                        $description=filter_input(INPUT_POST, 'desc');

                        $dbservername='localhost';
                        $dbusername='Ahmad';
                        $dbpassword='champion18414';
                        $dbname='mirahadmindb';

                        $conn=new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

                        if($conn->connect_error){
                            die('Connection failed'. $conn->connect_error);
                        }
                        //$sql='delete from admin_post';
                        //if($conn->query($sql)===true){
                        //    echo ('Cascade');
                        //}
                        //$conn->close();
                        
                        $stmt=$conn->prepare('insert into admin_post(Description,Img_link,Category) values(?,?,?)');
                        $stmt->bind_param('sss', $description, $imagelink, $category);
                        $stmt->execute();
                        header('location:Mirah Admin Dashboard(Creating post).php');
                        $stmt->close();
                        $conn->close();
?>