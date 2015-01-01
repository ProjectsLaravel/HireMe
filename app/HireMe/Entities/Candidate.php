<?php namespace HireMe\Entities;

class Candidate extends \Eloquent {
	protected $fillable = [];
	protected $perPage = 10;
	public function user()
	{
		return $this->hasOne( 'HireMe\Entities\User', 'id', 'id' );//el candidato con id=3 esta relacionado con el usuario id=3
	}

	public function category()
	{
		return $this->belongsTo( 'HireMe\Entities\Category');//un candidato pertenece a una categoria
	}

	public function getJobTypeTitleAttribute()
    {
        return \Lang::get('utils.job_types.' . $this->job_type);
    }
}