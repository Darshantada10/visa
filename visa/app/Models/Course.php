<?php

namespace App\Models;

use App\Models\University;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Course extends Model
{
    use HasFactory;
    protected $fillable = [
            "university_id",
            "course_title",
            "fee",
            "other_fee",
            "duration",
            "campus",
    ];
    public function universities()
    {
        return $this->belongsTo(University::class,'university_id','id');
    }
}
