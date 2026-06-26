<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\CorporateServiceSeeder;
use Database\Seeders\DisputeServiceSeeder;
use Database\Seeders\ArticleSeeder;
use Database\Seeders\PageContentSeeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => env('ADMIN_EMAIL', 'admin@example.com')],
            [
                'name' => env('ADMIN_NAME', 'Administrator'),
                'password' => Hash::make(env('ADMIN_PASSWORD', 'password')),
                'is_admin' => true,
            ]
        );

        $this->call([
            CorporateServiceSeeder::class,
            DisputeServiceSeeder::class,
            ArticleSeeder::class,
            PageContentSeeder::class,
        ]);
    }
}
