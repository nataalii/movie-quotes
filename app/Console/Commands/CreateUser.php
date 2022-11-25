<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'user:create';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'This command creates a new user';

	public function handle()
	{
		$user = new User();

		$user->name = $this->ask('Enter your name: ');
		$user->email = $this->ask('Enter your email:');
		$user->password = bcrypt($this->secret('Enter your password: '));

		$user->save();

		$this->info('Successfylly created. Name: ' . $user->name . '; Email: ' . $user->email . '; password: ' . $user->password);
	}
}
