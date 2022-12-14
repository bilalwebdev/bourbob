<?php

namespace Database\Seeders;

use App\Models\Aroma;
use App\Models\Brand;
use App\Models\Distillery;
use App\Models\Flavor;
use App\Models\MashBill;
use App\Models\Producer;
use App\Models\State;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AromaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('aromas')->truncate();

        Aroma::create([
            'title' => 'Vanilla',
        ]);
        Aroma::create([
            'title' => 'Wood',
        ]);
        Aroma::create([
            'title' => 'Smoke',
        ]);
        Aroma::create([
            'title' => 'Caramel',
        ]);
        Aroma::create([
            'title' => 'Oak',
        ]);
        Aroma::create([
            'title' => 'Dark Sugar',
        ]);
        Aroma::create([
            'title' => 'Fruit',
        ]);
        Aroma::create([
            'title' => 'Nut',
        ]);

        // Flavors
        DB::table('flavors')->truncate();

        Flavor::create([
            'title' => 'Oak',
        ]);
        Flavor::create([
            'title' => 'Red Apple',
        ]);
        Flavor::create([
            'title' => 'Vanilla',
        ]);
        Flavor::create([
            'title' => 'Sour Oak',
        ]);
        Flavor::create([
            'title' => 'Burnt Caramel',
        ]);
        Flavor::create([
            'title' => 'Chocolate',
        ]);
        Flavor::create([
            'title' => 'Spiced Honey',
        ]);

        // Mashbills
        DB::table('mash_bills')->truncate();

        MashBill::create([
            'title' => 'Corn',
        ]);
        MashBill::create([
            'title' => 'Rye',
        ]);
        MashBill::create([
            'title' => 'Barley',
        ]);
        MashBill::create([
            'title' => 'Wheat',
        ]);
        MashBill::create([
            'title' => 'Malted Barley',
        ]);

        // Brands
        DB::table('brands')->truncate();

        Brand::create([
            'title' => 'Wild Turkey',
        ]);
        Brand::create([
            'title' => 'Elijah Craig',
        ]);
        Brand::create([
            'title' => 'Four Roses',
        ]);
        Brand::create([
            'title' => "Michter's",
        ]);
        Brand::create([
            'title' => 'Old Forester',
        ]);

        // Producers
        DB::table('producers')->truncate();

        Producer::create([
            'title' => 'Wigle',
        ]);
        Producer::create([
            'title' => 'Brown Forman',
        ]);
        Producer::create([
            'title' => 'CMBeverage',
        ]);
        Producer::create([
            'title' => 'MB Roland',
        ]);

        // Distilleries
        DB::table('distilleries')->truncate();

        Distillery::create([
            'title' => 'Chattanooga Whiskey Co.',
        ]);
        Distillery::create([
            'title' => 'Pittsburgh Distilling Co. ',
        ]);
        Distillery::create([
            'title' => 'Early Times Distillery',
        ]);
        Distillery::create([
            'title' => 'Holy Water Distillery',
        ]);

        // State
        DB::table('states')->truncate();

        State::create([
            'title' => 'State 1',
        ]);

        State::create([
            'title' => 'State 2',
        ]);

        State::create([
            'title' => 'State 3',
        ]);

    }
}
