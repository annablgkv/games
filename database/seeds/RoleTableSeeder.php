<?php

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
        $path = base_path() . '/database/Role.json';
        $file = File::get($path);
        $data = json_decode($file, true);
        DB::table('roles')->insert($data);
    }
}
