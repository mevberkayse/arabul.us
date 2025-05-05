<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Önce tüm kategorileri temizle
        Category::truncate();

        $categories = [
            // Ana Kategoriler
            ['name' => 'Kitap', 'parent_id' => 0],
            ['name' => 'Sanat & Koleksiyon', 'parent_id' => 0],
            ['name' => 'Ders Kitapları', 'parent_id' => 0],

            // Kitap Alt Kategorileri
            ['name' => 'Bilim ve Teknik', 'parent_id' => 1],
            ['name' => 'Çizgi Roman / Manga', 'parent_id' => 1],
            ['name' => 'Çocuk Kitapları', 'parent_id' => 1],
            ['name' => 'Edebiyat', 'parent_id' => 1],
            ['name' => 'Felsefe & Düşünce', 'parent_id' => 1],
            ['name' => 'Tarih', 'parent_id' => 1],
            ['name' => 'Toplum & Siyaset', 'parent_id' => 1],
            ['name' => 'Diğer', 'parent_id' => 1],

            // Sanat ve Koleksiyon Alt Kategorileri
            ['name' => 'Afiş & Poster', 'parent_id' => 2],
            ['name' => 'Belge, Evrak', 'parent_id' => 2],
            ['name' => 'Film & Müzik', 'parent_id' => 2],
            ['name' => 'Fotoğraf & Kartpostal', 'parent_id' => 2],
            ['name' => 'Gazete Arşivi', 'parent_id' => 2],
            ['name' => 'Hat & Resim', 'parent_id' => 2],
            ['name' => 'Obje', 'parent_id' => 2],
            ['name' => 'Para & Madalya', 'parent_id' => 2],
            ['name' => 'Plak', 'parent_id' => 2],
            ['name' => 'Pul & Filateli', 'parent_id' => 2],
            ['name' => 'Takvim', 'parent_id' => 2],
            ['name' => 'Diğer', 'parent_id' => 2],

            // Ders Kitapları Alt Kategorileri
            ['name' => 'Üniversite Hazırlık (YKS)', 'parent_id' => 3],
            ['name' => 'MEB Sınavları', 'parent_id' => 3],
            ['name' => 'ÖSYM Sınavları', 'parent_id' => 3],
            ['name' => 'LGS', 'parent_id' => 3],
            ['name' => 'Kurum Sınavları', 'parent_id' => 3],
            ['name' => 'Diğer', 'parent_id' => 3],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
} 