<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Slider::create([
            'lang' => 'tr',
            'name' => 'Slider 1',
            'content' => 'Slider 1 İçerik',
            'button_text' => 'Button Text',
            'button_link' => 'Button Link',
            'image' => 'img/slider/1.jpg',
            'status' => 1,
        ]);


        Slider::create([
            'lang' => 'en',
            'name' => 'Slider 1 EN',
            'content' => 'Slider 1 English',
            'button_text' => 'Button Text',
            'button_link' => 'Button Link',
            'image' => 'img/slider/2.jpg',
            'status' => 1,
        ]);
    }
}
