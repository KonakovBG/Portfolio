<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{   
    use HasFactory;

    protected $fillable = ['title','description','status','author'];
   

    /**
     * Return the related messages.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function messages(){
        return $this->hasMany(Message::class);
    }

    /**
     * Return the related todos.
     * 
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */

    public function toDoEs(){
        return $this->hasMany(Todo::class);
    }
}
