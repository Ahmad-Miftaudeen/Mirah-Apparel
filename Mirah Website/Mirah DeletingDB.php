<?php
                        $imagelink=filter_input(INPUT_POST,'Imagelink');
 //                       $category=filter_input(INPUT_POST, 'category');
 //                       $description=filter_input(INPUT_POST, 'desc');

                        $dbservername='localhost';
                        $dbusername='Ahmad';
                        $dbpassword='champion18414';
                        $dbname='mirahadmindb';

                        $conn=new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

                        if($conn->connect_error){
                            die('Connection failed'. $conn->connect_error);
                        }
                        //$sql='delete from admin_post where Img_link="'.$imagelink.'"';
                        //if($conn->query($sql)===true){
                        //    echo ('Cascade');
                        //}
                        //$conn->close();
                        
                        $stmt=$conn->prepare('delete from admin_post where Img_link="'.$imagelink.'"');
                        //$stmt->bind_param('i',$id);
                        $stmt->execute();
                        echo 'Finished';
                        header('location:Mirah Admin Dashboard (Deleting post).php');
                        $stmt->close();
                        $conn->close();
?>