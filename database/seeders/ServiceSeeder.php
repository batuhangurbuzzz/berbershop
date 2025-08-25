<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'category_id' => 1,
                'name' => 'Erkek Amerikan Saç Kesimi',
                'slug' => 'erkek-amerikan-sac-kesimi',
                'content' => 'Erkek amerikan saç kesimi için hizmeti',
                'price' => 100,
                'image' => 'erkek-amerikan-sac-kesimi.jpg',
                'status' => 1,
            ],
            [
                'category_id' => 1,
                'name' => 'Erkek Asker Saç Kesimi',
                'slug' => 'erkek-asker-sac-kesimi',
                'content' => 'Erkek asker saç kesimi için hizmeti',
                'price' => 750,
                'image' => 'erkek-sac-kesimi.jpg',
                'status' => 1,
            ],
            [
                'category_id' => 2,
                'name' => 'Çocuk Amerikan Saç Kesimi',
                'slug' => 'cocuk-amerikan-sac-kesimi',
                'content' => 'Çocuk amerikan saç kesimi için hizmeti',
                'price' => 50,
                'image' => 'cocuk-amerikan-sac-kesimi.jpg',
                'status' => 1,
            ],
            [
                'category_id' => 2,
                'name' => 'Çocuk Asker Saç Kesimi',
                'slug' => 'cocuk-asker-sac-kesimi',
                'content' => 'Çocuk asker saç kesimi için hizmeti',
                'price' => 500,
                'image' => 'cocuk-sac-kesimi.jpg',
                'status' => 1,
            ],
        ];

        foreach ($services as $service){
            Service::create($service);
        }
    }
}
