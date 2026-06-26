<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorporateServiceSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('corporate_services')->insert([
            [
                'name' => 'Corporate Action',
                'description' => 'Strategic legal guidance for mergers, acquisitions, takeovers, and other major corporate actions.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Infrastructure',
                'description' => 'Advisory on regulatory frameworks and contracts for large-scale infrastructure projects.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Banking & Finance',
                'description' => 'Legal support for loan agreements, structured finance, and regulatory compliance in banking.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Capital Market',
                'description' => 'Assistance with IPOs, bond issuances, and compliance with capital market regulations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Commercial Transaction',
                'description' => 'Drafting and reviewing commercial contracts to protect your business interests.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Natural Resources & Mines',
                'description' => 'Specialized legal services for mining, oil, gas, and renewable energy sectors.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Construction & Building',
                'description' => 'Legal solutions for construction contracts, permits, and dispute avoidance.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Commercial Dispute',
                'description' => 'Resolving business conflicts through negotiation, mediation, or litigation.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Legal Opinion',
                'description' => 'Formal legal analysis and options on specific legal issues affecting your business.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Legal Memorandum',
                'description' => 'Detailed legal research and insights to support your internal decision-making.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
