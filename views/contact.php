	<form action="contacts/storecontact" method="POST"  class="well form-horizontal">
		<fieldset>
			<div class="form-group">
				<label for=""  class="col-md-4 control-label">Имя</label>
				<div class="col-md-4 inputGroupContainer">
					<input type="text" name="name" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-4 control-label">Фамилия</label>
				<div class="col-md-4 inputGroupContainer">
					<input type="text" name="surname" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label for="" class="col-md-4 control-label">Email</label>
				<div class="col-md-4 inputGroupContainer">
					<input type="text" name="email" class="form-control" />
				</div>
			</div>
			<div class="form-group">
				<label class="col-md-4 control-label"></label>
				<div class="col-md-4 inputGroupContainer">
					<button class="btn btn-default">Добавить</button>
				</div>
			</div>
		</fieldset>
	</form>


	<table class="table table-stripped">
		<thead>
			<tr>
				<th>Имя</th>
				<th>Фамилия</th>
				<th>email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($contacts as $contact){ ?>
				<tr>
					<td><?= $contact->name?></td>
					<td><?= $contact->surname?></td>
					<td><?= $contact->email?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
