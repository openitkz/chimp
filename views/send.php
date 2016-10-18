	<form action="" method="POST"  class="well form-horizontal">
		<fieldset>
		<div class="row">
				<div class="form-group">
					<label for="contact_list_id" class="col-md-4 control-label">Список контактов</label>
					<div class="col-md-4 inputGroupContainer">
						<select name="contact_lists_id" id="contact_lists_id" class="form-control">
							<?php foreach($contact_lists as $contact_list){?>
								<option value="<?= $contact_list->contact_lists_id?>"><?= $contact_list->name?></option>
							<?php } ?>
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="title" class="col-md-4 control-label">Название</label>
					<div class="col-md-4 inputGroupContainer">
						<input type="text" name="title" id="title" class="form-control" />
					</div>
				</div>
				<div class="form-group" >
					<label for="desc" class="col-md-4 control-label">Описание</label>
					<div class="col-md-4 inputGroupContainer">
						<textarea name="description" id="desc" class="form-control" /></textarea>
					</div>
				</div>
				<div class="form-group" >
					<label for="desc" class="col-md-4 control-label"></label>
					<div class="col-md-4 inputGroupContainer">
						<button class="btn btn-default right">Отправить</button>
					</div>
				</div>
		</div>
	</form>