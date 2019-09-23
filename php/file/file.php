<?php
    require '../dconfig/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Homepage</title>
    <style>
        .h2{
            text-align: center;
            font-family: sans-serif;
           
        }
        .menu{
            border: solid 2px black;
            padding: 10px;
            
            
        }
        a{
            color: black;
            text-decoration: none;
        }
        
        li{
           list-style: none;
            display: inline-block;
            margin-left: 200px;
        }
        a:hover{
            background-color: black;
            color: white;
            padding-left: 5px;
            padding-right: 5px;
        }
        li:hover{
            background-color: black;
            color: white;
            padding-left: 5px;
            padding-right: 5px;
        }
        .attacks
        {
            position: relative;
            height: 100%;
            width: 100%;
            
        }
        .sel{
            margin-top: 15%;
            margin-left: 30%;
        }
        
    </style>
    <script>
        
    </script>
    
    </head>
    <body>
        <div class="head"> 
            <h2 class="h2">T3ST HUB</h2>
            
        </div>
        <div class="menu">
            <li ><a href="../login/login.php">Login</a> </li>
            <li><a href="../register/register.php">Register</a></li>
            <li>Scripts</li>
            <li>Injections</li>
           <li> About</li>
        </div>
        <feildset>
        <form action="file.php" method="post" enctype="multipart/form-data">
        <div class="attacks">
            <div class="sel">
            Upload your file here: <input type="file" name="file" id="fileSelect">
                <br>
                <br>
                <input name="up" type="submit" value="Upload">
                <?php
                 $target_dir="../uploads/";
                $tar= $file_name = $_FILES["file"]["name"];
                $target_file=$target_dir.$tar;
                $uploadOk=1;
                if(isset($_POST["up"])){
                if(is_uploaded_file($_FILES["file"]["tmp_name"])){
                 $fileData=file_get_contents($_FILES["file"]["tmp_name"]);
                    echo strtoupper($fileData);
                            if(preg_match("/^[<]+[>]$/",$fileData)){
                                $uploadOk=1;
                                
                            }
                            else{

                                $uploadOk=0;
                                echo"file ahs specila charcters";
                            }
                            
                        }
                        if($uploadOk == 0){
                            echo "file not uploaded!";
                        }
                        else{
                            if(move_uploaded_file($_FILES["file"]["tmp_name"],$target_file)){
                                echo "file uploaded";
                                
                            }
                            else{
                                echo("no,lol");
                            }
                        }
                        
                    }
                
                
                ?>
            </div>
            
        </div>
        </form>
        </feildset>
    </body>
    
</html>