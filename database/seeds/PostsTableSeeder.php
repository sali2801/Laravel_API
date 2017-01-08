<?php

use Illuminate\Database\Seeder;
use App\Post;

use Laracasts\TestDummy\Factory as TestDummy;

class PostsTableSeeder extends Seeder
{
    public function run()
    {
		//create new posts (Insert Dummy Data)
		$faker = Faker\Factory::create(); 
 
        foreach(range(1,20) as $index)
        {
			$firstName = $faker->firstName;
            $lastName = $faker->lastName;
            Post::create([                
                'title' => $faker->sentence($nbWords = 2, $variableNbWords = true),
				'body' => $faker->paragraph($nbSentences = 5, $variableNbSentences = true),
				'author' => $firstName." ".$lastName,                
            ]);
        }
    }
}
