<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

         $user = User::create([
            'name'      => 'Kepala Sekolah',
            'username'  => 'kepsek',
            'email'     => 'kepsek@sch.id',
            'role'      => 'Admin',
            'status'    => 'Aktif',
            'password'  => bcrypt('Bismillah')
        ]);

        $user->assignRole('Admin');

        $this->command->info('Data User '.$user->name.' has been saved.');


        $user = User::create([
            'name'      => 'Murid',
            'username'  => 'SELET',
            'email'     => 'murid@sch.id',
            'role'      => 'Murid',
            'status'    => 'Aktif',
            'password'  => bcrypt('MEMEK')
        ]);

        $user->assignRole('Murid');

        $this->command->info('Data User '.$user->name.' has been saved.');

    }
}
