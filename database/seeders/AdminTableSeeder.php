<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();
        $adminRecords = [
           [
               'id'=>1,
               'name'=>'Tutul',
               'type'=>'super_admin',
               'mobile'=>'01881053602',
               'email'=>'admin@izzetech.com',
               'password'=>Hash::make('@izzetech'),
               'image'=>'user.png',
               'status'=>1

           ],
           
        ];

        foreach($adminRecords as $key => $records){
            \App\Models\Admin::create($records);
        }
    }
}
