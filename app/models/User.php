<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableTrait;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	use UserTrait, RemindableTrait;

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';

    /**
     * Rules
     */
    public static $rules = array(
        'email'    => 'required|email|unique:users,email',
        'username' => 'required|unique:users,username',
        'password' => 'required|min:6'
    );

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password', 'remember_token');

    /**
     * Force username to lowercase.
     *
     * @return lowercase username
     */
	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

    /**
     * Save hashed password.
     *
     * @return hashed string
     */
	public function setPasswordAttribute($value)
	{
	    $this->attributes['password'] = Hash::make($value);
	}

    /**
     * Link to Post model.
     */
    public function posts()
    {
        return $this->hasMany('Post');
    }

}
