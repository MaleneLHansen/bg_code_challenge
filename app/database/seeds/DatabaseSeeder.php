<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$cat1 = new Category();
		$cat1->title = "Adventure";
		$cat1->save();

		$cat2 = new Category(); 
		$cat2->title = "Thriller";
		$cat2->save();

		$movie1 = new Movie(); 
		$movie1->title = "The Hunger Games";
		$movie1->description = "Katniss Everdeen voluntarily takes her younger sister's place in the Hunger Games: a televised competition in which two teenagers from each of the twelve Districts of Panem are chosen at random to fight to the death.";
		$movie1->rating = 7;
		$movie1->category_id = $cat1->id;
		$movie1->save();

		$movie1 = new Movie(); 
		$movie1->title = "As above, so below";
		$movie1->description = "When a team of explorers ventures into the catacombs that lie beneath the streets of Paris, they uncover the dark secret that lies within this city of the dead.";
		$movie1->rating = 6;
		$movie1->category_id = $cat2->id;
		$movie1->save();
	}

}
