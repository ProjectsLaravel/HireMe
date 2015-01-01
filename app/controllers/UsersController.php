<?php
use HireMe\Entities\User;
use HireMe\Managers\RegisterManager;
use HireMe\Repositories\CandidateRepo;
use HireMe\Repositories\CategoryRepo;
use HireMe\Managers\AccountManager;
use HireMe\Managers\ProfileManager;	

class UsersController extends BaseController {

	protected $candidateRepo;

	public function __construct(CandidateRepo $candidateRepo)
	{
		$this->candidateRepo = $candidateRepo;
	}

	public function signUp()
	{

		return View::make('users/sign-up');
	}

	public function register()
	{
		
		$user = $this->candidateRepo->newCandidate();

		$manager = new RegisterManager($user, Input::all());

		if ($manager->save()) 
		{
			return Redirect::route('home');
		}
		return Redirect::back()->withInput()->withErrors($manager->getErrors());

	}
	
	public function account()
	{
		$user = Auth::user();
		return View::make('users/account',compact('user'));
	}

	public function update_profile()
	{

	}

	public function update_account()
	{
		
	}

}















