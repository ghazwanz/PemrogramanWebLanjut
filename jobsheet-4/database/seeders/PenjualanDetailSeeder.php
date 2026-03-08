<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $detail_id = 1;
        // 10 transaksi * 3 barang = 30 detail
        for ($i = 1; $i <= 10; $i++) {
            for ($j = 1; $j <= 3; $j++) {
                // Ambil barang secara berurutan agar tiap transaksi ada 3 barang berbeda
                // Index barang_id antara 1 sampai 15
                $barang_id = (($i + $j) % 15) + 1; 

                // Menentukan harga berdasarkan barang_id secara pseudo-random
                $harga = ($barang_id * 10000) + 5000; 

                $data[] = [
                    'detail_id' => $detail_id++,
                    'penjualan_id' => $i,
                    'barang_id' => $barang_id,
                    'harga' => $harga,
                    'jumlah' => 2, // Misal tiap barang dibeli sebanyak 2 pcs
                ];
            }
        }
        \Illuminate\Support\Facades\DB::table('t_penjualan_detail')->insert($data);
    }
}
