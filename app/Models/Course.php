<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    //những trường mà mình có thể fillale
    //$guarded, nguoc lai vs fillable, la nhung cai ma minh co the bao ve
    protected $fillable = [
        'name',
    ];

    public function getYearCreatedAtAttribute()
    {
        return $this->created_at->format('Y');
        //return date_format(date_create($this->created_at), 'Y');
    }
}
