<?php

use Illuminate\Database\Seeder;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customers')->insert([
            'first_name' => luc,
            'last_name' => LEBLOND,
            'email' => luc . '@gmail.com',
        ]);

        DB::table('product')->insert([
            'last_name' => LEBLOND,
            'quantity_stock' => 20,
            'price' => 5.90,
        ]);

        DB::table('product_group')->insert([
            'last_name' => LEBLOND,
        ]);
    }
}
