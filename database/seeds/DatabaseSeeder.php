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
         $this->call(AdvSeeder::class);
         $this->call(CategoryNewSeeder::class);
         $this->call(CategoryProductSeeder::class);
         $this->call(ContactSeeder::class);
         $this->call(CustomerSeeder::class);
         $this->call(CustomerAccountSeeder::class);
         $this->call(CustomerOrderSeeder::class);
         $this->call(GroupProductSeeder::class);
         $this->call(InformationUserSeeder::class);
         $this->call(NewsSeeder::class);
         $this->call(OrderDetailSeeder::class);
         $this->call(OrderProductSeeder::class);
         $this->call(ProductSeeder::class);
         $this->call(SlideSeeder::class);
         $this->call(UserSeeder::class);
    }
}
