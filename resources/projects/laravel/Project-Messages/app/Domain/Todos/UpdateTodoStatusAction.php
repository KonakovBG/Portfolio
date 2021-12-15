<?php

namespace App\Domain\Todos;

use App\Models\Todo;

class UpdateTodoStatusAction{

	public function handle($todo): Todo
	{
		$todo->update([
			'status' => 'finished'
		]);

		return $todo;
	}
}


?>