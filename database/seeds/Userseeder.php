<?php
use App\User;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->delete();
        User::create([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=> Hash::make('secret')
            ]);
    }
}
