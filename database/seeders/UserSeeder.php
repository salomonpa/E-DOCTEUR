<?php

 namespace Database\Seeders;

 use Illuminate\Database\Seeder;
 use Illuminate\Support\Facades\DB;
 use Illuminate\Support\Facades\Hash;
 use Illuminate\Database\Console\Seeds\WithoutModelEvents;



class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'BEMSSE',
            'username' => 'flosisline',
            'email' =>'fsislinebemsse@gmail.com',
            'username' => 'flosisline',

            'roles_id' => 1,
            'password' => Hash::make('edocta@'),
            ]);


            DB::table('users')->insert([
                'name' => 'TOUANGAI',
                'username' => 'floscoby',
                'email' =>'ftouang16@outlook.fr',
                'username' => 'floscoby',
                
                'roles_id' => 2,
                'password' => Hash::make('flosco@'),
                ]);

                DB::table('users')->insert([
                    'name' => 'OUALI',
                    'username' => 'GBAYA',
                    'email' =>'gbaya@gmail.com',
                    'username' => 'ouali',
                    
                    'roles_id' => 3,
                    'password' => Hash::make('ouali@'),
                   ]);
}
}