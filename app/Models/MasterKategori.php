<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MasterKategori extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = 'master_kategoris';
    protected $guarded = ['id'];
}
