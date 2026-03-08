<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 15; $i++) {
            $supplier_id = ($i <= 5) ? 1 : (($i <= 10) ? 2 : 3);
            $data[] = [
                'stok_id' => $i,
                'supplier_id' => $supplier_id,
                'barang_id' => $i,
                'user_id' => 1, // Diinput oleh Admin
                'stok_tanggal' => now(),
                'stok_jumlah' => 100, // Misal stok masing-masing barang 100
            ];
        }
        \Illuminate\Support\Facades\DB::table('t_stok')->insert($data);
    }
}
