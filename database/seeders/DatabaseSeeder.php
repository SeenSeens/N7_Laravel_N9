<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RoleSeeder::class,
//            UserSeeder::class,
            StatusSeeder::class,
            CategorySeeder::class,
            StockSeeder::class,
            SupplierSeeder::class,
            TrademarkSeeder::class,
            ProducerSeeder::class,
            GallerySeeder::class,
            TypeSeeder::class,
            ProductSeeder::class,
//            OrderSeeder::class,
        ]);
    }
}
