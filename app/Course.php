<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
	protected $fillable = ['name'];
    public function departements(){
    	return $this->belongsToMany(Departement::class, 'category_departement_course', 'course_id', 'departement_id');
    }
}
