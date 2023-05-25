<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'judul', 'isi', 'foto'];
    protected $nullable = ['foto'];

    protected $table = 'news_model';
}
