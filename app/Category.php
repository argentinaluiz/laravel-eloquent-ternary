<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $fillable = ['name'];
    public function courses(){
    	return $this->belongsToMany(Course::class, 'category_departement_course', 'category_id', 'course_id');
    }
}
