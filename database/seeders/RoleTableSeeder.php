<?php

namespace Database\Seeders;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
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
            $role = new Role();
            $role->name = $role_id;
            $role->save();

        }

    }
    }
