<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'code'              => 'MB001',
            'name'              => 'Ban',
            'selling_price'     => 200000,
            'purchase_price'    => 100000,
            'unit'              => 'pcs',
            'category'          => 'Mobil',
            'stock'             => 1,
            'created_at'        => now(),
            'updated_at'        => now()
        ]);

        Item::create([
            'code'              => 'MT001',
            'name'              => 'Lampu',
            'selling_price'     => 50000,
            'purchase_price'    => 10000,
            'unit'              => 'pcs',
            'category'          => 'Motor',
            'stock'             => 10,
            'created_at'        => now(),
            'updated_at'        => now()
        ]);
    }
}
