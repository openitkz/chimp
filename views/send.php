	<form action="send.php" method="POST">
		<div class="row">
			<div class="col-sm-8 col-md-8">
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
			</div>
			<div class="col-sm-8 col-md-8">
				<div class="form-group">
					<label for="title">Название</label>
					<input type="text" name="title" id="title" class="form-control" />
				</div>
				<div class="form-group">
					<label for="desc">Описание</label>
					<textarea name="desc" id="desc" class="form-control" /></textarea>
				</div>
			</div>
		</div>
		<button class="btn btn-default right">Отправить</button>
	</form>