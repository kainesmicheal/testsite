<?php
    require '../dconfig/config.php';
?>
<!DOCTYPE html>
<html>
     <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
    <head>
         
         <style>
            .main{
                border: solid 2px black;
                height: 300px;
                width: 600px;
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
        <h2>REGISTER</h2>
        <form action="register.php" method="post" ng-app="myApp" ng-controller="validateCtrl" 
              name="myForm" novalidate>
            <p>
            <label>Username</label> <input  type=text name=user ng-model="user" required > 
            <span style="color:red" ng-show="myForm.user.$dirty && myForm.user.$invalid"><span ng-show="myForm.user.$error.required">Username is required.</span>
                </span></p> <br>
           
            <p><label>  Email</label> <input type=email name=email ng-model="email" required>
            <span style="color:red" ng-show="myForm.email.$dirty && myForm.email.$invalid">
                <span ng-show="myForm.email.$error.required">Email is required.</span>
                <span ng-show="myForm.email.$error.email">Invalid email address.</span>
                </span></p><br >
            <p>
            <label>Password</label> <input type=password name="password" ng-model="password" required pass-val="pass" id="pass" ><span style="color:red" ng-show="myForm.password.$dirty" >
            <span style="color:red" ng-show="myForm.password.$error.required">Password is required</span>
                <span style="color:green" ng-show="myForm.password.$error">
                    <span ng-show='myForm.pass.$error.pasmat'>not valid</span></span>
                </span><br>
            </p>
          <p>  
              <script>
                  var sot =angular.module('myApp',[]);
                  sot.directive('passVal',[Function(){
                           return{
                           require:'ngModel',
                           link: function(scope,element,attr,ctrl){
                                var passd='#' + attr.passVal;
                                element.add(passd).on('keyup',Function ()}{
                                           scope.$apply(function(){
                                           var v=element.val()===$)(passd).val();
                                           ctrl.$setValidity('pasmat',v);
                                           });
                                           });
                                           }
                                           }
                                           }]);
                   
                  </script>
        <input type=submit name=sub value=register ng-disabled="myForm.user.$dirty && myForm.user.$invalid ||  
myForm.email.$dirty && myForm.email.$invalid">
            </p>
            <?php
                if(isset($_POST['sub']))
                {
                    $username=$_POST['user'];
                    $email=$_POST['email'];
                    $password=$_POST['password'];
                    
                    $query="select *from register WHERE username='$username'";
                    $query_run=mysqli_query($con,$query);
                    if(mysqli_num_rows($query_run)>0)
                    {
                        echo '<script>alert("username already taken")</script>';
                    }
                    else
                    {
                        $query="insert into register values('$username','$email','$password')";
                    $query_run=mysqli_query($con,$query);
                        if($query_run)
                        {
                            echo'<script>alert("registered sucessfully")</script>';
                        }
                        else
                        {
                            echo'<script>alert("error")</script>';
                        }
                    }
                }
            ?>
        </form><script>
var app = angular.module('myApp', []);
app.controller('validateCtrl', function($scope) {
    $scope.user = 'username';
    $scope.email = 'user@*mail.com';
    $scope.password='lol';
});
</script>
                
            </div>
        </div>
    </body>
        
    
</html>