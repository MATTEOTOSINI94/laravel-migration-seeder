<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Trip;

class TripTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
       for ($i=0; $i < 50 ; $i++) { 
          $newTrip = new trip();
          $newTrip->location_trip = $faker->city;
          $newTrip->title_hotel = $faker->state;
          $newTrip->departure_airport= $faker->city;
          $newTrip->return_airport= $faker->city;
          $newTrip->departure_date= $faker->date('Y-m-d');
          $newTrip->return_date= $faker->date('Y-m-d');
          $newTrip->days_stays= $faker->randomDigit;
          $newTrip->img_place=$faker->imageUrl;
          $newTrip->price=$faker->randomFloat(2,0,1000);
          $newTrip->description=$faker->text(200);
          $newTrip->save();
       }
    }
}
