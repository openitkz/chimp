	<form action="contacts/store" method="POST">
		<div class="form-group">
			<label for="">Название</label>
			<input type="text" name="name" class="form-control" />
		</div>
		<div class="form-group">
			<label for="">Описание</label>
			<input type="text" name="description" class="form-control" />
		</div>
		<div class="form-group">
			<button class="btn btn-default">Добавить</button>
		</div>
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
				</tr>
			<?php } ?>
		</tbody>
	</table>