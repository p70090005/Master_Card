<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kontrak_M extends Model
{
    use HasFactory;

    protected $table = 'kontrak_m';
    protected $fillable = [
        'kode',
        'mc_id',
        'tglKontrak',
        'customer_name',
        'poCustomer',
        'top',
        'caraKirim',
        'alamatKirim',
        'alamatKantor',
        'alamatTagihan',
        'alamatKirim_id',
        'alamatKantor_id',
        'alamatTagihan_id',
        'pcsKontrak',
        'pctToleransiLebihKontrak',
        'pctToleransiKurangKontrak',
        'kgLebihToleransiKontrak',
        'pctKurangToleransiKontrak',
        'pcsLebihToleransiKontrak',
        'pcsKurangToleransiKontrak',
        'kgKurangToleransiKontrak',
        'kgKontrak',
        'amountBeforeTax',
        'tax',
        'amountTotal',
        'rpKg',
        'sisaPlafon',
        'pcsSisaKontrak',
        'kgSisaKontrak',
        'status',
        'lock',
        'sales',
        'harga',
        'createdBy'

    ];
}
