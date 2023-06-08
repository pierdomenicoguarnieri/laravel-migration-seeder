<?php

namespace Database\Seeders;

use App\Models\Train;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class TrainsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker){
    for($i = 0; $i < 50; $i++){
      $new_train = new Train();
      $new_train->company = $faker->randomElement(['Italo', 'Trenitalia', 'Frecciarossa', 'FlixTrain', 'SNCF', 'OUIGO', 'Deutche Bahn', 'SBB', 'OBB', 'WestBahn', 'iryo', 'Renfe', 'DSB', 'SNCB']);
      $new_train->starting_station = $faker->city();
      $new_train->arriving_station = $faker->city();
      $new_train->starting_time = $faker->dateTimeThisMonth('+12 days');
      do{
        $new_train->arriving_time = $faker->dateTimeThisMonth('+12 days');
      }while($new_train->starting_time < $faker->dateTimeThisMonth('+12 days'));
      $new_train->train_code = $faker->isbn10();
      $new_train->number_of_carriages = rand(3,10);
      $new_train->is_in_time = rand(0,1);
      $new_train->is_cancelled = rand(0,1);

      $new_train->save();
    }
  }
}
