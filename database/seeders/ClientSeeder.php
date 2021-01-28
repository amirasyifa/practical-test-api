<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name'  => 'Amira',
                'address'   => 'Cilebut',
                'created_at' => now(),
                'updated_at' => now(),
            ],    
            [
                'name'  => 'Syifa',
                'address'   => 'Ciheuleut',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \App\Models\Client::insert($data);
    }
}
