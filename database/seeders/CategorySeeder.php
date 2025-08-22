<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Erkek',
                'slug' => 'erkek',
                'content' => 'Erkek Kategorisi',
                'image' => 'img/barber.jpg',
                'status' => 1,
                'childrens' => [
                    [
                        'name' => 'Erkek Saç Kesimi',
                        'slug' => 'erkek-sac-kesimi',
                        'content' => 'Erkek Saç Kesimi',
                        'image' => 'erkek.jpg',
                        'status' => 1,
                    ],
                    [
                        'name' => 'Erkek Sakal Kesimi',
                        'slug' => 'erkek-sakal-kesimi',
                        'content' => 'Erkek Sakal Kesimi',
                        'image' => 'erkek.jpg',
                        'status' => 1,
                    ],
                ],
            ],
            [
                'name' => 'Çocuk',
                'slug' => 'cocuk',
                'content' => 'Çocuk Kategorisi',
                'image' => 'img/kids.jpg',
                'status' => 1,
                'childrens' => [
                    [
                        'name' => 'Çocuk Saç Kesimi',
                        'slug' => 'cocuk-sac-kesimi',
                        'content' => 'Çocuk Saç Kesimi',
                        'image' => 'cocuk.jpg',
                        'status' => 1,
                    ],
                ],
            ],
            [
                'name' => 'Bakım',
                'slug' => 'bakim',
                'content' => 'Bakım Kategorisi',
                'image' => 'img/team/b3.jpg',
                'status' => 1,
                'childrens' => []
            ],

        ];

        foreach ($categories as $key => $category) {
            unset($category['childrens']);
            $category = Category::create($category);

            if(!empty($categories[$key]['childrens'])){
                foreach ($categories[$key]['childrens'] as $children){
                    $children = Category::create($children);
                    $children->parent_id = $category->id;
                    $children->save();
                }
            }
        }
    }
}
