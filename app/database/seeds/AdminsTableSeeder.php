<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'admin',
            'email'=>'admin@admin.com',
            'password'=>bcrypt('testtest'),
            'created_at'=>Carbon::now(),
            'updated_at'=>Carbon::now(),
        ]);
        
    }
}
