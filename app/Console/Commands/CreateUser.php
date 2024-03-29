<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:create-user';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new user to the system';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        User::create([
            'name' => $this->ask('What is your name?'),
            'email' => $this->ask('Email?'),
            'password' => bcrypt($this->secret('Type the password, please.')),
        ]);
    }
}
