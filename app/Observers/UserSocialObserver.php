<?php

namespace App\Observers;
use App\UserSocial;

class UserSocialObserver
{
	public function __construct()
	{
		
	}

	public function created(UserSocial $user_social)
	{
		$this->handelUserRegistration('created', $user_social);
	}

	public function handelUserRegistration($event, $user_social)
	{
		$class = config("social.events.{$user_social->service}.{$event}", null);

		if($class === null)
		{
			return;
		}

		event(new $class($user_social->user()->first()));
	}

}