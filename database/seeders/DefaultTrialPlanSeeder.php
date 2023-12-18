<?php

namespace Database\Seeders;

use App\Models\Plan;
use App\Models\SalaryCurrency;
use Illuminate\Database\Seeder;

class DefaultTrialPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     *
     * @throws Exception
     */
    public function run()
    {
        $plan = [
            'name' => 'Trial Plan',
            'allowed_jobs' => 1,
            'amount' => 0,
            'is_trial_plan' => 1,
            'salary_currency_id' => SalaryCurrency::first()->id,
        ];

        Plan::firstOrCreate($plan);
    }
}
