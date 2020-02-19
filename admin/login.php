<?php
//$noSideBar = '';
$pageTitle = 'Login';

include 'config/configlogin.php';
?>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-offset-5 col-md-3">
                <div class="form-login">
                <h4>Welcome back.</h4>
                <input type="text" id="userName" class="form-control input-sm chat-input" placeholder="username" require autocomplete="off" />
                </br>
                <input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="password" require autocomplete="new-password"/>
                </br>
                <div class="wrapper">
                <span class="group-btn">     
                    <a href="#"class="btn btn-primary btn-md" onclick="login">login <i class="fa fa-sign-in"></i></a>
                </span>
                </div>
                </div>
            
            </div>
        </div>
    </div>
    <script>
        //Ajax Method 
        function login()    
            {
                        
                var xhr = new XMLHttpRequest();
                
                xhr.onreadystatechange = function(){
                    if(this.readyState === 4 && this.status === 200)
                        {
                                
                               // code ...
                        }
                        }
                        xhr.open('POST',url, true);
                        //the method in the same send data from Form
                        xhr.setRequestHeader(
                            "Content-Type",
                            "application/x-www-from-urlencoded"
                        );
                        xhr.send();
                    
            }
    </script>
<?= include TEMP . 'footer.php';?>