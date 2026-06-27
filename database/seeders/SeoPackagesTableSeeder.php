<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeoPackagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $packages = [
            [
                'name' => 'Basic',
                'monthly_price' => 48424.26,
                'yearly_price' => 581091.11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Standard',
                'monthly_price' => 62951.54,
                'yearly_price' => 755418.45,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Gold',
                'monthly_price' => 87163.67,
                'yearly_price' => 1045964.01,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Premium',
                'monthly_price' => 154957.63,
                'yearly_price' => 1673542.41,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($packages as $pkg) {
            DB::table('seo_packages')->updateOrInsert(
                ['name' => $pkg['name']],
                $pkg
            );
        }
    }
}
