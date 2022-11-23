<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plan = Plan::first();

        $plan->tenants()->create([
            'uuid' => Str::uuid(),
            'cnpj' => '09623421494',
            'name' => 'The Soft',
            'url' => 'thesoft',
            'email' => 'matthaus@email.com',
        ]);
    }
}
