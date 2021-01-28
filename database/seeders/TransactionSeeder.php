<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Client;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $clients = Client::get()->pluck('id');
        $data = [
            [
                'client_id' => $clients[0],
                'food'      => 'Salad',
                'price'     => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => $clients[0],
                'food'      => 'Ramen',
                'price'     => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => $clients[1],
                'food'      => 'Salad',
                'price'     => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => $clients[1],
                'food'      => 'Ramen',
                'price'     => 30000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => $clients[2],
                'food'      => 'Salad',
                'price'     => 40000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => $clients[2],
                'food'      => 'Yakiniku',
                'price'     => 50000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        \App\Models\Transaction::insert($data);
    }
}
