<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCandidatesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('candidates', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('website_url');//string 255 en mysql
			$table->text('description');//text mas caracteres
			$table->enum('job_type',['full','partial','freelance']);
			$table->integer('category_id')->unsigned();
			$table->boolean('available');
			$table->string('slug');
			/* clave foranea */
			$table->foreign('category_id')->references('id')->on('categories');

			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('candidates');
	}

}
