<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    public static $data= [
        [
        'id' => 1,
        'nama' => 'Udin',
        'alamat' => 'Bandung',
        'jenis_kelamin' => 'laki-laki',
        'agama' => 'Islam',
        'umur' => 17,
    ],
    [
        'id' => 2,
        'nama' => 'Ucup',
        'alamat' => 'Jakarta',
        'jenis_kelamin' => 'laki-laki',
        'agama' => 'Islam',
        'umur' => 16,

    ]
    ];
}
