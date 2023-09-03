<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class University extends Model
{
    use HasFactory;
    protected $fillable =
    [
        "university_name",
        "institution_type", 
        "campus",
        "moi",
        "last_percentage",
        "fees",
        "ielts",
        "deadline",
        "admission_document",
        "accreditation",
        "ranking"
    ];
}
