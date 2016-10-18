
    <div class="row">
        <div class="col-md-offset-5 col-md-3 col-sm-5">
            <form class="form-login" action="profile/update" method="POST">
	            <h4>Change profile</h4>
	            <div class="form-group">
	            	<label for="userName">Имя</label>
	            	<input type="text" id="userName" name="name" class="form-control input-sm chat-input" placeholder="username" value="<?= $user->username?>"/>
	            </div>
	            <div class="form-group">
	            	<label for="userPassword">Пароль</label>
	            	<input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="new password"/>
	            </div>
	            <div class="wrapper">
		            <span class="group-btn">     
		                <button href="#" class="btn btn-primary btn-md">login <i class="fa fa-sign-in"></i></button>
		            </span>
	            </div>
            </form>
        
        </div>
    </div>