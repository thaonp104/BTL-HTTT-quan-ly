<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(BrandSeeder::class);
         $this->call(CategorySeeder::class);
         $this->call(BrandCategorySeeder::class);
         $this->call(VendorSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(BranchSeeder::class);
         $this->call(ProductBranchSeeder::class);
         $this->call(AccountSeeder::class);
         $this->call(EmployeeSeeder::class);
         $this->call(CustomerSeeder::class);
         $this->call(AtmSeeder::class);
         $this->call(OrderSeeder::class);
         $this->call(BillSeeder::class);
         $this->call(ItemSeeder::class);
    }
}
