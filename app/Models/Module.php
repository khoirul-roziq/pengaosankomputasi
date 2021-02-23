<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Module extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['title', 'author', 'kelas_id', 'date', 'metades', 'content', 'slug', 'user_id', 'nomor_module'];

    public function classes()
    {
        return $this->belongsTo('App\Models\Kelas');
    }
}
