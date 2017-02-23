<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BukuTamu extends Model
{
    protected $table = 'buku_tamus';

    protected $fillable = [
    	'nama',
		'email',
		'subject',
		'pesan',
    ];
}
