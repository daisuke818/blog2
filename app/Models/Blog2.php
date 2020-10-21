<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog2 extends Model
{
    // テーブル名
    protected $table = 'blogs2';

    //可変項目
    protected $fillable =
    [
        'title',
        'content'
    ];
}
