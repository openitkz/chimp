	<form action="contacts/store" method="POST" class="well form-horizontal">
		<fieldset>
			<div class="form-group">
				<label for="" class="col-md-4 control-label">Название</label>
				<div class="col-md-4 inputGroupContainer">
					<input type="text" name="name" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-4 control-label">Описание</label>
				<div class="col-md-4 inputGroupContainer">
					<input type="text" name="description" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label"></label>
  				<div class="col-md-4">
					<button class="btn btn-default">Добавить</button>
				</div>
			</div>
		</fieldset>
	</form>
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>Название</th>
				<th>Описание</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($contact_lists as $contact_list){ ?>
				<tr>
					<td><?= $contact_list->name?></td>
					<td><?= $contact_list->description?></td>
					<td><a href="contacts/show/<?= $contact_list->contact_lists_id?>">Перейти</a></td>
					<td><a href="contacts/delete/<?=$contact_list->contact_lists_id?>">Удалить</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>