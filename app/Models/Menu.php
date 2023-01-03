<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $fillable = ['idJenis', 'kategori', 'namaMenu', 'harga'];
    // protected $guarded = ['idJenis'];

    public function jenis()
    {
        return $this->belongsTo('App\Models\Jenis', 'idJenis');
    }
}
