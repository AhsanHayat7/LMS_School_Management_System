<?php

namespace Database\Seeders;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_ids = ["Admin","Student","Teacher"];

        foreach($role_ids as $role_id){
            $role = new Permission();
            $role->name = $role_id;
            $role->save();

        }

    }
}
