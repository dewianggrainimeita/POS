<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void {
    $data = [
        ['supplier_id' => 1, 'supplier_kode' => 'SJP', 'supplier_nama' => 'Sinar Jaya Perkasa', 'supplier_alamat' => 'Jakarta'],
        ['supplier_id' => 2, 'supplier_kode' => 'MTR', 'supplier_nama' => 'Mitra Utama', 'supplier_alamat' => 'Surabaya'],
        ['supplier_id' => 3, 'supplier_kode' => 'BKS', 'supplier_nama' => 'Berkah Sentosa', 'supplier_alamat' => 'Malang'],
    ];
    DB::table('m_supplier')->insert($data);
    }
}
