<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Garkamla extends Model
{
    use HasFactory;
    protected $table = 'garkamlas';
    protected $guarded = ['id'];

    public function getKategori()
    {
        return $this->hasOne(MasterKategori::class, 'id', 'JenisGarkamla');
    }
}
