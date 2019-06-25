<?php

use Illuminate\Database\Seeder;

class AdministratorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $administrator = new \App\User;
        $administrator->username = "administrator";
        $administrator->name = "Site Administrator";
        $administrator->email = "admin@example.com";
        $administrator->roles = json_encode(["ADMIN"]);
        $administrator->password = \Hash::make("admin123");
        $administrator->address = "Bintaro, Tangerang Selatan";
        $administrator->phone = '0123456789';

        $administrator->save();

        $administrator = new \App\User;
        $administrator->username = "teacher";
        $administrator->name = "Site Teacher";
        $administrator->email = "teacher@example.test";
        $administrator->roles = json_encode(["TEACHER"]);
        $administrator->password = \Hash::make("teacher123");
        $administrator->address = "Bekasi, Bekasi Selatan";
        $administrator->phone = '0123456799';

        $administrator->save();

        $this->command->info("User Admin berhasil diinsert");
    }
}
