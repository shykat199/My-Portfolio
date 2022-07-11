<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyResume extends Model
{
    use HasFactory;
    protected $table="my_resumes";

    protected $fillable=['type','title','time','organization','about_exp'];
}
