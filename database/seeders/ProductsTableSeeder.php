<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use DateTime;
use DB;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $products = [
            [
                'name' => "Solderless LED joint",
                'description' => 'Bright LED lighting for RGB striplight',
                'quantity' => 50,
                'price' => 2,
                'image' => 'images/products/pr1.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Aluminiom Profile",
                'description' => 'Aluminium Profile with diffuser for LED striplights',
                'quantity' => 20,
                'price' => 20,
                'image' => 'images/products/pr2.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Aluminium Profile",
                'description' => 'Aluminum profile with acrylic diffuser for LED strip lights',
                'quantity' => 20,
                'price' => 25,
                'image' => 'images/products/pr3.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Corner Profile",
                'description' => 'Corner profile for LED striplights',
                'quantity' => 10,
                'price' => 10,
                'image' => 'images/products/pr4.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Underground Aluminium Profile",
                'description' => 'Underground aluminum profile fixture for LED Striplights',
                'quantity' => 20,
                'price' => 10,
                'image' => 'images/products/pr5.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Linear/hanging aluminium profile",
                'description' => 'Linear/hanging aluminium profile fixture for LED stirplight',
                'quantity' => 37,
                'price' => 15,
                'image' => 'images/products/pr6.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Aluminium profile",
                'description' => 'Aluminium profile fixtures for LED Striplights lights',
                'quantity' => 30,
                'price' => 20,
                'image' => 'images/products/pr7.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "LED candle lamp",
                'description' => 'LED candle lamp with amber fire-like flame effect
                This Christmas gift your loved ones these amazing lights!🔥
                - LED light with a warm soothing glow. Perfect brightness for a bedside table light or a coffee table.',
                'quantity' => 37,
                'price' => 5,
                'image' => 'images/products/pr9.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Moon&Star light ",
                'description' => 'Amazing Moon&Star light now available!!!!!!!',
                'quantity' => 37,
                'price' => 3,
                'image' => 'images/products/pr10.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Square LED Panel",
                'description' => 'For above and below placements these panels are perfectly suited for any situation',
                'quantity' => 37,
                'price' => 5,
                'image' => 'images/products/pr11.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Copper Ring Light",
                'description' => 'Focus light',
                'quantity' => 37,
                'price' => 3,
                'image' => 'images/products/pr12.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "LEDs packs",
                'description' => 'Used for designing personal projects',
                'quantity' => 37,
                'price' => 3,
                'image' => 'images/products/pr13.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "In wall LED Square",
                'description' => 'Can be fit into walls or into showcases as well',
                'quantity' => 37,
                'price' => 8,
                'image' => 'images/products/pr14.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "Circle LED Panel",
                'description' => 'Circular LED panel',
                'quantity' => 37,
                'price' => 378,
                'image' => 'images/products/pr15.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "LED strips",
                'description' => '12v and 24v led strips available',
                'quantity' => 37,
                'price' => 7,
                'image' => 'images/products/pr18.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "LED Bulbs",
                'description' => 'R80 and R63 lamps available',
                'quantity' => 37,
                'price' => 378,
                'image' => 'images/products/pr17.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],[
                'name' => "RGB Strips",
                'description' => '12v LED RGB STRIPS',
                'quantity' => 37,
                'price' => 378,
                'image' => 'images/products/pr16.JPG',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('products')->insert($products);
    }
}