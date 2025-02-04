<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
	use HasFactory;

	protected $table = 'produk';

	protected $fillable = 
    [
        'kode_produk', 
        'nama_produk', 
        'foto_produk',
        'id_kategori', 
        'harga', 
        'jumlah'
    ];

	public function kategori()
	{
		return $this->belongsTo(Kategori::class, 'id_kategori');
	}
}
