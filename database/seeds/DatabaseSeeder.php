<?php

use Illuminate\Database\Seeder;
use Database\Seeders\SettingDatabaseSeeder;
use Database\Seeders\CategoryDatabaseSeeder;
use Database\Seeders\SubCategoryDatabaseSeeder;
use Database\Seeders\ProductDatabaseSeeder;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(SettingDatabaseSeeder::class);
        $this->call(SubCategoryDatabaseSeeder::class);
        $this->call(CategoryDatabaseSeeder::class);
        $this->call(ProductDatabaseSeeder::class);
    }
}