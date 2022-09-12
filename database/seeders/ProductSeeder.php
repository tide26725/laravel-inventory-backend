<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->delete();

        $data = [
            [
                'name' => 'Samsung Galaxy S21',
                'slug' => 'samsung-galaxy-s21',
                'description' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.',
                'price' => 18500.00,
                'image' => 'https://via.placeholder.com/800x600.png/003232?text=asdw',
                'user_id' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ];

        Product::insert($data);

        //ทำการเรียกตัว Productfactory ที่จะทำการ Faker ข้อมูล
        Product::factory(4999)->create();
    }

    

}
