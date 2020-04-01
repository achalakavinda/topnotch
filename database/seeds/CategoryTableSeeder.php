<?php

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert([
            [
                'id'=>1,
                'code' =>"#0001",
                'name' => 'Lip Stick',
                'url'=> "https://www.peta.org/wp-content/uploads/2015/03/nyx-concealer.jpg",
                'min_price'=> "560",
            ],
            [
                'id'=>2,
                'code' =>'#0002',
                'name' => 'Cream',
                'url'=> "https://images2.jiji.ng/3436935_jergens-7662-361262-1-product_292x365.jpg",
                'min_price'=> "560",
            ],
            [
                'id'=>3,
                'code' =>str_random(2),
                'name' => str_random(5),
                'url'=> "http://d1acy2vp0zxghs.cloudfront.net/products/images/000/018/959/original/10207816.jpeg",
                'min_price'=> "560",
            ],
            [
                'id'=>4,
                'code' =>str_random(2),
                'name' => str_random(5),
                'url'=> "http://d1acy2vp0zxghs.cloudfront.net/products/images/000/018/959/original/10207816.jpeg",
                'min_price'=> "560",
            ],
            [
                'id'=>5,
                'code' =>str_random(2),
                'name' => str_random(5),
                'url'=> "https://do6gbw1x8hs3.cloudfront.net/spree/product_images/62364/large/baby_doll.jpg",
                'min_price'=> "560",
            ],
            [
                'id'=>6,
                'code' =>str_random(2),
                'name' => str_random(5),
                'url'=> "http://d1acy2vp0zxghs.cloudfront.net/products/images/000/018/959/original/10207816.jpeg",
                'min_price'=> "560",
            ],
        ]);
    }
}
