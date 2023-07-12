<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $administrator = new \App\Models\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "administrator@bookquest.test";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = Hash::make("bookquest");
        $administrator->avatar = "saat-ini-tidak-ada-file.png";
        $administrator->address = "Depok, Jawa Barat";
        $administrator->address = "087645457878";

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
