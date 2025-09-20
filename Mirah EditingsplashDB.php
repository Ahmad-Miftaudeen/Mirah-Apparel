<?php
                        $pagenumber=filter_input(INPUT_POST,'page');
                        $title=filter_input(INPUT_POST, 'title');
                        $imagelink=filter_input(INPUT_POST, 'Imagelink');
                        $splashpara=filter_input(INPUT_POST, 'splashparagraph');

                        $dbservername='localhost';
                        $dbusername='Ahmad';
                        $dbpassword='champion18414';
                        $dbname='mirahadmindb';

                        $conn=new mysqli($dbservername, $dbusername, $dbpassword, $dbname);

                        if($conn->connect_error){
                            die('Connection failed'. $conn->connect_error);
                        }
                        $stmt=$conn->prepare('update splash_details set title="'.$title.'", paragraph="'.$splashpara.'",imglink="'.$imagelink.'" where pageno="'.$pagenumber.'"');
                        $stmt->execute();
                        echo 'Finished';
                        header('location:Mirah Admin Dashboard(Editing splash).php');
                        $stmt->close();
                        $conn->close();
?>