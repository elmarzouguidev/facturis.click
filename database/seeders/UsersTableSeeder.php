<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use TCG\Voyager\Models\Role;
use TCG\Voyager\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (User::count() == 0) {
            $role = Role::where('name', 'admin')->firstOrFail();

            User::create([
                'name'           => 'Abdelghafour',
                'email'          => config('facturis.admin_email'),
                'password'       => bcrypt(config(('facturis.admin_password'))),
                'remember_token' => Str::random(60),
                'role_id'        => $role->id,
            ]);
        }
    }
}
