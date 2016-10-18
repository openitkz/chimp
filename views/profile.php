 <div class="row">
            <form class="form-login well form-horizontal" action="profile/update" method="POST" >
	            <h4>Change profile</h4>
	            <fieldset>
		            <div class="form-group">
		            	<label for="userName"  class="col-md-4 control-label">Имя</label>
		            	<div class="col-md-4 inputGroupContainer">
		            		<input type="text" id="userName" name="username" class="form-control input-sm chat-input" placeholder="username" value="<?= $user->username?>"/>
		            	</div>
		            </div>
		            <div class="form-group">
		            	<label for="userPassword"  class="col-md-4 control-label">Пароль</label>
		            	<div class="col-md-4 inputGroupContainer">
		            		<input type="password" id="userPassword" name="password" class="form-control input-sm chat-input" placeholder="new password"/>
		            	</div>
		            </div>
		            <div class="wrapper">
		            	<label for=""  class="col-md-4 control-label"></label>
		            	<div class="col-md-4 inputGroupContainer">
	
			                <button href="#" class="btn btn-primary btn-md">save updates <i class="fa fa-sign-in"></i></button>
			            </div>
		            </div>
		        </fieldset>
            </form>
    </div>