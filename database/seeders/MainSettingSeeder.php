<?php

namespace Database\Seeders;

use App\Models\MainSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MainSettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            [
                'key' => 'logo',
                'value' => 'logo.png',
                'type' => 'file',
            ],
            [
                'key' => 'favicon',
                'value' => 'favicon.png',
                'type' => 'file',
            ],
            [
                'key' => 'facebook',
                'value' => '#',
                'type' => 'text',
            ],
            [
                'key' => 'twitter',
                'value' => '#',
                'type' => 'text',
            ],
            [
                'key' => 'instagram',
                'value' => '#',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_title_1',
                'value' => 'Kesim',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_description_1',
                'value' => 'Profesyonel Kesim',
                'type' => 'text',
            ],

            [
                'key' => 'home_hero_image_1',
                'value' => 'icon icon icon-icon-1-6',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_title_2',
                'value' => 'Yüz Bakımı',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_description_2',
                'value' => 'Profesyonel Yüz Bakımı',
                'type' => 'text',
            ],

            [
                'key' => 'home_hero_image_2',
                'value' => 'icon icon-icon-1-3',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_title_3',
                'value' => 'Profesyonel Sakal Kesim',
                'type' => 'text',
            ],
            [
                'key' => 'home_hero_description_3',
                'value' => 'Profesyonel Sakal Kesim',
                'type' => 'text',
            ],

            [
                'key' => 'home_hero_image_3',
                'value' => 'icon icon-icon-1-1',
                'type' => 'text',
            ],

        ];

        foreach($settings as $setting){
            MainSetting::create($setting);
        }
    }
}
