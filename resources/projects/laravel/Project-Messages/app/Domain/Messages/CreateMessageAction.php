<?php

namespace App\Domain\Messages;

use App\Models\Message;

class CreateMessageAction{

	public function handle($data): Message
	{
		$message = Message::create([
			'author' => $data['author'],
			'content' => $data['content'],
			'project_id' => $data['project_id']
		]);

		return $message;
	}
}



?>