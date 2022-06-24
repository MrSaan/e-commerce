<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Basic Tee',
            'slug' => 'basic-tee',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);

        Product::create([
            'name' => 'Basic White',
            'slug' => 'basic-white',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);

        Product::create([
            'name' => 'Basic Gray',
            'slug' => 'basic-gray',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);

        Product::create([
            'name' => 'T-Shirt tail',
            'slug' => 'tshirt-tail',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);

        Product::create([
            'name' => 'Basic Rose',
            'slug' => 'basic-rose',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);

        Product::create([
            'name' => 'Basic Pink',
            'slug' => 'basic-pink',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);

        Product::create([
            'name' => 'Basic Blue',
            'slug' => 'basic-blue',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);

        Product::create([
            'name' => 'T-Shirt Brown',
            'slug' => 'tshirt-brown',
            'details' => 'The 6-Pack includes two black, two white, and two heather gray Basic Tees. Sign up for our subscription service and be the first to get new, exciting colors, like our upcoming "Charcoal Gray" limited release.',
            'price' => 20,
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, doloribus vero aspernatur, numquam voluptates tempora cupiditate inventore laborum aut maiores ut aliquid. Nulla illo magnam dolor cupiditate quam, neque aspernatur.'
        ]);
    }
}
