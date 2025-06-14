<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PageConfig extends Model
{
    //
    use Hasfactory;
    protected $table = 'page_configs';
    protected $fillable = [
        'title', 'detail', 'image'
    ];
}
