<?php

use Faker\Generator as Faker;
use App\Holidays;
use Illuminate\Database\Seeder;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<100; $i++){

            $new_holiday = new Holidays();
            $new_holiday->title= $faker->sentence(8);
            $new_holiday->description= $faker->paragraphs(3);
            $new_holiday->address= $faker->streetAddress();
            $new_holiday->city= $faker->city();
            $new_holiday->state= $faker->state();
            $new_holiday->overnight_stays= $faker->numberBetween(1,10);
            $new_holiday->price= $faker->numberBetween(300,8000);
            $new_holiday->vote= $faker->numberBetween(1,10);
            $new_holiday->flight_included= $faker->numberBetween(0,1);
            $new_holiday->insurance= $faker->numberBetween(0,1);
            $new_holiday->save();


            // $new_holiday = new Holidays();
            // $new_holiday->title= 'Vacanza in Islanda';
            // $new_holiday->description= 'lorem';
            // $new_holiday->address= 'Via delgli Ubaldi 56';
            // $new_holiday->city= 'Milano';
            // $new_holiday->state= 'Islanda';
            // $new_holiday->overnight_stays= 7;
            // $new_holiday->departure_date= 12-04-2022;
            // $new_holiday->price= 5450.00;
            // $new_holiday->vote= 8;
            // $new_holiday->flight_included= 1;
            // $new_holiday->insurance= 1;
            // $new_holiday->save();

        }

    }
}
