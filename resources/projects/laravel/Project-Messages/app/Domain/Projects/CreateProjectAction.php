<?php
/**
 * 
 */
namespace App\Domain\Projects;

use App\Models\Project;

class CreateProjectAction
{
	
	public function handle($data):Project
	{
        
		$project = Project::create([
            'title' => $data['title'],
            'description' => $data['description'],
            'author' => $data['author'],
            'status' => $data['status']
        ]);

        return $project;
	}
}

?>

