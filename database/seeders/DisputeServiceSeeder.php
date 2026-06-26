<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisputeServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('dispute_services')->insert([
            [
                'name' => 'Civil & Commercial',
                'description' => 'Representation in civil lawsuits and commercial disputes across various industries.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bankruptcy & Restructuring',
                'description' => 'Legal assistance for bankruptcy proceedings, debt restructuring, and liquidation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Criminal Defense',
                'description' => 'Defense representation for white-collar crimes and corporate criminal liability.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Anti-Monopoly',
                'description' => 'Advisory and representation in cases related to unfair competition and anti-trust laws.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tax',
                'description' => 'Handling tax disputes, objections, and appeals in the Tax Court.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Constitutional Court',
                'description' => 'Representation for judicial reviews and other matters in the Constitutional Court.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Arbitration & Mediation',
                'description' => 'Alternative dispute resolution services for efficient and confidential settlement.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
