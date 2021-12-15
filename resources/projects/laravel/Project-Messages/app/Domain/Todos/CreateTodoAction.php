<?php

namespace App\Domain\Todos;

use App\Models\Todo;

class CreateTodoAction{

	public function handle($data): Todo
	{
		$todo = Todo::create([
			'author' => $data['author'],
			'title' => $data['title'],
			'content' => $data['content'],
			'status' => $data['status'],
			'project_id' => $data['project_id']
		]);

		return $todo;
	}
}



?>