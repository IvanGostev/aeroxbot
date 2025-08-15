<?php

namespace Database\Seeders;

use App\Models\Plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $plans = [
            ['name' => 'Base', 'stripe_plan_id' => 'prod_Sp8I7oGqzEhz00', 'stripe_price_id' => 'price_1RtU28PdC3ct7d1dIeRtf7JG'],
            ['name' => 'Premium', 'stripe_plan_id' => 'prod_Sp8Iod72rv6Wmp', 'stripe_price_id' => 'price_1RtU2OPdC3ct7d1drZ3roxM4']
        ];
        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
