<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Slider;

class SlideTableSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 3; $i++) {
            Slider::create([
                'first_headingBlack'   => 'We Provide',
                'first_headingBlue'    => 'Gym',
                'second_headingBlack'  => 'Services, That You Can',
                'second_headingBlue'   => 'Trust!',
                'mini_para'            => 'At The Gyms, we believe that fitness is not just a destination; its a journey towards a healthier, happier, and stronger version of yourself.' ,
                'image_link'           => 'slides/slidedefault.jpg',
                'more_infoLink'        => 'https://www.facebook.com/profile.php?id=100063926895270',
                'more_infoLink2'       => 'https://www.facebook.com/profile.php?id=100063926895270',
            ]);
        }
    }
}
