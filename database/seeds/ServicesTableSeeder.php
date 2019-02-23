<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'name' => 'UI/UX and Web design',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, reiciendis unde dolorum illo magni, esse officiis nam error quaerat sequi exercitationem Aperiam, atque nesciunt incidunt ad natus magni amet earum.',
                'image' => 'images/service.png',
            ],
            [
                'name' => 'Branding and identity',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, reiciendis unde dolorum illo magni, esse officiis nam error quaerat sequi exercitationem. Aperiam, atque nesciunt incidunt ad natus magni amet earum.',
                'image' => 'images/service.png',
            ],
            [
                'name' => 'Graphic and illustration',
                'description' => 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nulla, reiciendis unde dolorum illo magni, esse officiis nam error quaerat sequi exercitationem. Aperiam, atque nesciunt incidunt ad natus magni amet earum.',
                'image' => 'images/service.png',
            ],
        ]);
    }
}
