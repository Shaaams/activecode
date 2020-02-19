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
                <a href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></a>
            </span>
            </div>
            </div>
        
        </div>
    </div>
</div>

<?= include TEMP . 'footer.php';?>