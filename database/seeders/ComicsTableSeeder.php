<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsTableSeeder extends Seeder
{
    public function run()
    {
        $comics = include('comics.php');

        foreach ($comics as $comicData) {
            Comic::create([
                'title' => $comicData['title'],
                'description' => $comicData['description'],
                'thumb' => $comicData['thumb'],
                'price' => $this->parsePrice($comicData['price']),
                'series' => $comicData['series'],
                'sale_date' => $comicData['sale_date'],
                'type' => $comicData['type'],
            ]);
        }
    }

    private function parsePrice($price)
    {
        return floatval(str_replace(['$', ','], ['', ''], $price));
    }
}
