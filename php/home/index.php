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
        <div class="attacks">
            <div class="sel">
            Select your option: <select id="attack">
                <option value="0"></option>
            <option value="1">sql injection</option>
                <option value="2">command injection</option>
                <option value="3">file injection</option>
            </select>
                <br>
                <br>
                <input submit="act" type="submit" value="enter">
            </div>
            
        </div>
    </body>
    
</html>