<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class SkillUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'skill-up:user {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command Hello User!';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {

        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(): void
    {
        $name = $this->argument('name');
        $this->info('Hello ' . $name);

        $res = DB::select(
            'SELECT * FROM laravel.users;'
        );
        \var_export($res);
    }
}
