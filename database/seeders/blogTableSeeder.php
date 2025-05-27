<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\blogs; // Assuming you have a Posts model


class blogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 12; $i++) {
            blogs::create([
                'title' => 'Sample Post Title ' . $i,
                'slug' => Str::slug('Sample Post Title ' . $i),
                'body' => 'This is the body content of sample post ' . $i,
                'image' => 'blogs/btqK4sv6HLOhvq29o33lL6iHBerjo1e5tSshUYfe.jpg',
            ]);
        }
    }
}
