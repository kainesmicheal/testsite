<?php
    require '../dconfig/config.php';
?>
<!DOCTYPE html>
<html>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>  
<body>
    <head>
        <style>
            .main{
                border: solid 2px black;
                height: 300px;
                width: 400px;
                text-align: center;
                border-radius: 20px;
            }
            .ma{
                height: 100%;
                width: 100%;
               margin-left: 40%;
                margin-top:10%;
            }
            
        </style>
    </head>
    <body>
        <div class="ma">
        <div class="main">
        <h2>LOGIN</h2>
        <form action="login.php" method="post" ng-app="myApp" ng-controller="validateCtrl" 
name="myForm" novalidate >
            <p>
            Username: <input name=user type=text placeholder="username" ng-model="user" required>
                <span style="color:red" ng-show="myForm.user.$dirty">
                    <span ng-show="myForm.user.$error.required">Username is required.</span>
                </span>
            </p>
            
            <br>
            <p>
            Password :  <input name=password type="password" placeholder="password" ng-model="password" required><span style="color:red" ng-show="myForm.password.$dirty">
            <span style="color:red" ng-show="myForm.password.$error.required">Password is required</span>
                </span>
            </p>
            <br>
            <br>
          
            <input name=login type=submit value="sign in">
            <?php
            if(isset($_POST['login']))
            {
                $username=$_POST['user'];
                $password=$_POST['password'];
                $query="select * from register WHERE username='$username' AND password='$password'";
                $query_run=mysqli_query($con,$query);
                if(mysqli_num_rows($query_run)>0)
                {
                    echo '<script>alert("login sucessfull")</script>';
                }
                else
                {
                    echo '<script>alert("invalid credentials")</script>';
                }
            }
            ?>
        </form>
            <script>
                var app = angular.module('myApp', []);
                app.controller('validateCtrl', function($scope) {
                    $scope.user = 'username';
                    $scope.password = '77777';
                });
                </script>
        </div>
        </div>
    </body>
    
</html>
