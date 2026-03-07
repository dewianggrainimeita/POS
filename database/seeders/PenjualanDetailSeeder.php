<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $id = 1;

        // Loop untuk 10 transaksi (penjualan_id 1 sampai 10)
        for ($i = 1; $i <= 10; $i++) {
            
            // Setiap transaksi membeli 3 barang berbeda (Total 30 data)
            for ($j = 1; $j <= 3; $j++) {
                $data[] = [
                    'detail_id'    => $id++,
                    'penjualan_id' => $i,           // Merujuk ke t_penjualan
                    'barang_id'    => rand(1, 15),  // Merujuk ke m_barang (acak 1-15)
                    'harga'        => 15000,        // Contoh harga flat
                    'jumlah'       => rand(1, 5),   // Jumlah barang yang dibeli
                    'created_at'   => now(),
                    'updated_at'   => now(),
                ];
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
