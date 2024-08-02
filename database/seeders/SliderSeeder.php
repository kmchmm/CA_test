<?php

namespace Database\Seeders;

use App\Models\Slider;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SliderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('sliders')->insert([
        [
            'title' => 'Corporate Executive Pastry Chef',
            'description' => 'Van E. French, Jr. is the Corporate Executive Pastry Chef of Genesis Hospitality.  He brings over thirty years of professional experience in the culinary and pastry arts to this new role.  His wide-ranging experience includes award winning pastry creations, chef management, and restaurant & bakery management.',
            'image_url' => 'images/van-french.png',
            'name' => 'Van French',
        ],
        [
            'title' => 'Executive Pastry Chef',
            'description' => 'A former monk with a music and Spanish Literature degree from college, Kir decided to change gears and jump into the world of food. Raised on a farm in the countryside of Puerto Rico and with a genuine love and commitment to wholesome ingredients, this was a no brainer.',
            'image_url' => 'images/kir-rodriguez.png',
            'name' => 'Kir Rodriguez',
        ],
        [
            'title' => 'Director of Hospitality',
            'description' => "Eben Copple loves food, drawing culinary inspiration from the local Kansas farmer's markets he visited with his parents in his youth. The Kansas native honed his chef credentials at local restaurants like Lidia's Kansas City, owned by celebrity chef, television host, author, and restauranteur Lidia Bastianich, and Eleven, an innovative eatery in Pittsburgh, PA's Strip District.",
            'image_url' => 'images/photo_ecopple.png',
            'name' => 'Eben Copple',
        ],
        [
            'title' => 'Assistant Director of Hospitality',
            'description' => "Wayne Susser, a veteran hotelier, has been in the hospitality business for over thirty years. He began his career as an hourly employee with Hilton. With vast experience in both front and back of the house, he worked his way up to Management positions including New York Hilton and Towers and Pittsburgh Hilton. As a General Manager, he ran Doubletree South Park, South Carolina; Doubletree Plymouth Meeting in Pennsylvania; and Doubletree Somerset in New Jersey. Wayne eventually transitioned into the role of Sr. Brand Manager and Sr. Hotel Director of Hotel Growth and Cultural Development for Doubletree's International properties in EMEA and APAC. He held the positon of Vice President of Brand operations for Wyndham Hotels and Resorts and most recently Vice President of Franchise Sales & Development at Radisson Hotel Group., overseeing the East Coast Region.",
            'image_url' => 'images/photo_wsusser.png',
            'name' => 'Wayne Susser',
        ],
        [
            'title' => 'General Manager',
            'description' => 'Michelle Mohollen is no stranger to hospitality and food service, with over four decades of industry experience. She began her career with Disney Universityâ€™s Hospitality program and as General Manager of El Torito Mexican Cantino.  Michelle was a fixture at the Yardley Inn as General Manager for 35 years. In 2023, Michelle transitioned into a Corporate position in Genesis Hospitality, where she utilizes her seasoned leadership at other Genesis Hospitality concepts.  ',
            'image_url' => 'images/photo_mmohollen.png',
            'name' => 'Michelle Mohollen',
        ],
        ]);

    }
}
