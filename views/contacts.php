	<form action="contacts/store" method="POST">
		<div class="form-group">
			<label for="">Название</label>
			<input type="text" name="name" class="form-control" />
		</div>
		<div class="form-group">
			<button class="btn btn-default">Добавить</button>
		</div>
	</form>
	<table class="table table-stripped">
		<thead>
			<tr>
				<th>Название</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($contact_lists as $contact_list){ ?>
				<tr>
					<td><?= $contact_list->name?></td>
					<td><a href="contacts/show/<?= $contact_list->id?>">Перейти</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>