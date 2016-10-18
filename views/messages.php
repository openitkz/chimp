<table class="table table-bordered">
		<thead>
			<tr>
				<th>Получатель</th>
				<th>Статус</th>
				<th>Время отправки</th>
				<th>Название</th>
				<th>Текст сообщения</th>
				<th></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($messages as $message){ ?>
				<tr>
					<td><?= $message->email?></td>
					<td><?=$message->status?></td>
					<td>
						<?= date('Y-m-d H:i:s',$message->m_datetime)?>
					</td>
					<td><?=$message->subject?></td>
					<td><?=$message->html_message?></td>
					<td><a href="?action=delete&id=<?=$message->message_sent_id?>">delete</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
