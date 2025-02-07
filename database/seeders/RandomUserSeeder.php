<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class RandomUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::factory(10)->create(); // ✅ Fixed syntax error
        echo 'Users creaed successfully';
    }
}
