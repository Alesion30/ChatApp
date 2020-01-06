<?php

use Illuminate\Database\Seeder;

use App\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete(); //最初に全件削除

        User::create([
            'name' => 'Alesion', 'email' => 'alesion@example.com', 'password' => bcrypt('0000')
        ]);

        User::create([
            'name' => 'Alegura', 'email' => 'alegura@example.com', 'password' => bcrypt('0000')
        ]);
    }
}
