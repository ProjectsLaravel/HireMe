<?php

use HireMe\Repositories\CategoryRepo;
use HireMe\Repositories\CandidateRepo;

class CandidatesController extends Controller {

	protected $categoryRepo;
	protected $candidateRepo;
	/* Instanciamos nuestro CategoryRepo*/
	public function __construct(CategoryRepo $categoryRepo,
								CandidateRepo $candidateRepo)
	{
		$this->categoryRepo = $categoryRepo;
		$this->candidateRepo = $candidateRepo;
	}

	public function category( $slug, $id )
	{
		$category = $this->categoryRepo->find($id);
		//dd($category);
		return View::make('candidates/category',compact('category'));
	}

	public function show( $slug, $id)
	{
		$candidate = $this->candidateRepo->find($id);
		//dd($candidate);
		return View::make('candidates/show',compact('candidate'));
	}

}
