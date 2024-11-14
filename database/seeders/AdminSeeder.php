<?php

namespace Database\Seeders;

use App\Models\Admins;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $new = new Admins;
        $new->name = "Admin";
        $new->email = "admin@gmail.com";
        $new->password = Hash::make(123456789);
        $new->save();
    }
}
