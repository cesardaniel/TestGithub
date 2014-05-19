<?php

	use Illuminate\Auth\UserInterface;
	use Illuminate\Auth\Reminders\RemindableInterface;

	class Person extends Eloquent  
	{
		public function set_password($string)
		{
			$this->set_attribute('password',Hash::make($string));
		}

	}

	

?>