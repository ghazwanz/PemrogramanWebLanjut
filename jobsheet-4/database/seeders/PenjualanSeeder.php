<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'penjualan_id' => $i,
                'user_id' => 3, // Dilakukan oleh Kasir (STF)
                'pembeli' => 'Pembeli ' . $i,
                'penjualan_kode' => 'PJN' . str_pad($i, 3, '0', STR_PAD_LEFT),
                'penjualan_tanggal' => now(),
            ];
        }
        \Illuminate\Support\Facades\DB::table('t_penjualan')->insert($data);
    }
}
