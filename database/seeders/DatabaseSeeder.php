<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    public function run()
    {
        $comics = config('comics');

        foreach ($comics as $comic) {
            Comic::create($comic);
        }
    }
}
