<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PantauanKapal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'pantauan_kapals';
    protected $guarded = ['id'];

    public function getKategori()
    {
        return $this->hasOne(MasterKategori::class, 'id', 'JenisGarkamla');
    }
}
