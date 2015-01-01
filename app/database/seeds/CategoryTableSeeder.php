<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;
use HireMe\Entities\Category;

class CategoryTableSeeder extends Seeder {

	public function run()
	{
		Category::create([
			'id'	=>	1,
			'name'	=>	'Backend developers',
			'slug'	=>	'backend_developers'
		]);

		Category::create([
			'id'	=>	2,
			'name'	=>	'Frontend developers',
			'slug'	=>	'frontend_developers'
		]);

		Category::create([
			'id'	=>	3,
			'name'	=>	'Designers',
			'slug'	=>	'designers'
		]);
	}

}