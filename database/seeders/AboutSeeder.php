<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        About::create([
            'lang' => 'tr',
            'name' => 'Şirket Adı',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ",
            'vision' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
            'mission'=> "Lorem Ipsum is simply dummy text of the printing and ",
            'image' => 'img/about3.jpg'
        ]);
        About::create([
            'lang' => 'en',
            'name' => 'Company Name',
            'content' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, ",
            'vision' => "Lorem Ipsum is simply dummy text of the printing and typesetting industry",
            'mission'=> "Lorem Ipsum is simply dummy text of the printing and ",
            'image' => 'img/about3.jpg'
        ]);
    }
}
