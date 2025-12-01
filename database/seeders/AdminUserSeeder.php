<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'zunnoon2006@gmail.com'],
            [
                'name' => 'Muhammad Zunoon Ali',
                'email' => 'zunnoon2006@gmail.com',
                'password' => Hash::make('zunoon.123'), // Change this password!
                'is_admin' => 1,
            ]
        );

       User::updateOrCreate(
            ['email' => 'bscs2312405@szabist.pk'],
            [
                'name' => 'Zunoon BSCS',
                'email' => 'bscs2312405@szabist.pk',
                'password' => Hash::make('bscs.123'), // Change this password!
                'is_admin' => 1,
            ]
        );
    }
}
