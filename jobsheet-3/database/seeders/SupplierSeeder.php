<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'SUP01', 'supplier_nama' => 'PT Elektronik Jaya', 'supplier_alamat' => 'Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'SUP02', 'supplier_nama' => 'CV Pakaian Indah', 'supplier_alamat' => 'Bandung'],
            ['supplier_id' => 3, 'supplier_kode' => 'SUP03', 'supplier_nama' => 'UD Makanan Sehat', 'supplier_alamat' => 'Surabaya'],
        ];
        \Illuminate\Support\Facades\DB::table('m_supplier')->insert($data);
    }
}
