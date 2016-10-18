<div class="container">
    <div class="row">
        <div class="col-md-offset-5 col-md-3">
        	<?php include_once('views/layouts/errors.php');?>
            <form class="form-login" action="login/login" method="POST">
	            <h4>Login form</h4>
	            <input type="text" id="userName" name="name" class="form-control input-sm chat-input" placeholder="username" />
	            </br>
	            <input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="password" />
	            </br>
	            <div class="wrapper">
		            <span class="group-btn">     
		                <button href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></button>
		            </span>
	            </div>
            </form>
        
        </div>
    </div>
</div>