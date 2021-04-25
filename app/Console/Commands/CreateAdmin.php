<?php

declare(strict_types=1);

namespace App\Console\Commands;

use App\Models\Admin;
use Hash;
use Illuminate\Console\Command;

class CreateAdmin extends Command
{
    /**
     * @var string
     */
    protected $signature = 'create:admin {name} {email} {password}';

    /***
     * @var string
     */
    protected $description = 'Creates admin';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle(): int
    {
        $admin = new Admin([
            'name' => $this->argument('name'),
            'email' => $this->argument('email'),
            'password' => Hash::make($this->argument('password'))
        ]);

        $admin->save();

        $this->output->writeln('User created successfully');

        return 0;
    }
}
