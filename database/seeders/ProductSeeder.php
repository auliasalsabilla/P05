<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['nama' => 'Smart TV Samsung 55"', 'deskripsi' => 'TV LED 4K UHD dengan fitur Smart TV dan HDR', 'foto' => 'tv_samsung.jpg', 'harga' => 7500000],
            ['nama' => 'Kulkas LG 2 Pintu', 'deskripsi' => 'Kulkas inverter 2 pintu kapasitas 312 liter', 'foto' => 'kulkas_lg.jpg', 'harga' => 5200000],
            ['nama' => 'AC Daikin 1 PK', 'deskripsi' => 'AC split inverter hemat energi 1 PK', 'foto' => 'ac_daikin.jpg', 'harga' => 4800000],
            ['nama' => 'Mesin Cuci Panasonic', 'deskripsi' => 'Mesin cuci front loading 8kg', 'foto' => 'mc_panasonic.jpg', 'harga' => 3900000],
            ['nama' => 'Laptop ASUS VivoBook', 'deskripsi' => 'Laptop 14 inch Intel Core i5 RAM 8GB SSD 512GB', 'foto' => 'laptop_asus.jpg', 'harga' => 8500000],
            ['nama' => 'Smartphone iPhone 15', 'deskripsi' => 'iPhone 15 128GB layar 6.1 inch', 'foto' => 'iphone15.jpg', 'harga' => 14000000],
            ['nama' => 'Vacuum Cleaner Dyson', 'deskripsi' => 'Vacuum cleaner nirkabel dengan daya hisap kuat', 'foto' => 'dyson.jpg', 'harga' => 6200000],
            ['nama' => 'Rice Cooker Zojirushi', 'deskripsi' => 'Rice cooker digital 1.8 liter dengan timer', 'foto' => 'rice_cooker.jpg', 'harga' => 1800000],
            ['nama' => 'Speaker Bluetooth JBL', 'deskripsi' => 'Speaker portable waterproof dengan bass kuat', 'foto' => 'jbl.jpg', 'harga' => 1200000],
            ['nama' => 'Microwave Sharp', 'deskripsi' => 'Microwave 23 liter dengan fitur grill', 'foto' => 'microwave_sharp.jpg', 'harga' => 900000],
        ];

        DB::table('tblproducts')->insert($products);
    }
}