<?php

namespace App\Models;

use CodeIgniter\Model;

class PrediksiModel extends Model
{
    protected $table          = 'prediksi';
    protected $primaryKey     = 'id_prediksi';
    protected $allowedFields  = [
        'tahun',
        'kecamatan',
        'jumlah',
        'probabilitas',
        'cdf',
        'batas',
        'angka_acak',
        'hasil_prediksi',
        'total_keseluruhan'
    ];

    protected $useTimestamps = false; // <-- UBAH INI MENJADI false
    // protected $createdField  = 'created_at'; // Baris ini dan di bawahnya tidak akan berpengaruh jika useTimestamps false
    // protected $updatedField  = 'updated_at';
    // protected $deletedField  = 'deleted_at';
}
