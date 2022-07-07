<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Customer;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{

    private $productData = [];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker::create();

        // PRODUCT
        // for ($i=0; $i < 20000; $i++) {
        //     $productData[] = [
        //         'name' => $faker->city,
        //         'detail' => $faker->sentence,
        //         'added_by' => '9',
        //         'created_at' => now()->toDateTimeString(),
        //         'updated_at' => now()->toDateTimeString(),
        //     ];
        // }

        //SUPPLIER
        // for ($i=0; $i < 20000; $i++) {
        //     $productData[] = [
        //         'name' => $faker->company,
        //         'address' => $faker->address,
        //         'contact' => $faker->phoneNumber,
        //         'created_at' => now()->toDateTimeString(),
        //         'updated_at' => now()->toDateTimeString(),
        //     ];
        // }

        //SUPPLIER
        for ($i=0; $i < 20000; $i++) {
            $productData[] = [
                'name' => $faker->lastName,
                'address' => $faker->address,
                'contact' => $faker->phoneNumber,
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];
        }


        $chunks = array_chunk($productData, 5000);

        foreach ($chunks as $chunk) {
            Customer::insert($chunk);
        }
    }
}
