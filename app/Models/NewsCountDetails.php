<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsCountDetails extends Model
{
    use HasFactory;
    protected $table = "count_news";
    public $timestamps = false;
}
