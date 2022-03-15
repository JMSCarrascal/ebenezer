<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->createUsers();
    }
    private function printLine($message)
    {
        echo "=== {$message}".PHP_EOL;
    }

    private function createUsers()
    {
        $this->printLine('Creating Users');
        User::factory(50)->create();
    }
}
