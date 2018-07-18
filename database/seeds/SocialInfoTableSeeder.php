<?php

use Illuminate\Database\Seeder;
use App\Models\SocialInfo;

class SocialInfoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SocialInfo::insert([
            [
                'id'=>1,
                'name'=>'pinterest',
                'url'=>'#',
                'icon'=>'fa fa-pinterest'
            ],
            [
                'id'=>2,
                'name'=>'instagram',
                'url'=>'#',
                'icon'=>'fa fa-instagram'
            ],
            [
                'id'=>3,
                'name'=>'facebook',
                'url'=>'#',
                'icon'=>'fa fa-facebook'
            ],
            [
                'id'=>4,
                'name'=>'twitter',
                'url'=>'#',
                'icon'=>'fa fa-twitter'
            ],

        ]);

    }
}
