<?php

namespace Database\Seeders;

use App\Models\PageContent;
use Illuminate\Database\Seeder;

class PageContentSeeder extends Seeder
{
    public function run(): void
    {
        $pages = [
            [
                'slug' => 'home',
                'title' => 'Strategic Legal Partner for Modern Business',
                'subtitle' => 'Corporate legal assistance with a practical, fast, and precise approach to support your business decisions.',
                'body' => "WIEM is a law firm with global network in providing Legal Audit, Documents and Advisory services.\n\nWith deep understanding of local experience, we provide sophisticated advice on corporate and commercial business across a broad range of industries.",
                'button_text' => 'Schedule a Consultation',
                'button_url' => '/contact',
                'image' => 'images/law.jpg',
            ],
            [
                'slug' => 'about',
                'title' => 'About Us',
                'subtitle' => 'Excellence in legal services since establishment',
                'body' => "WIEM is a law firm with global network in providing Legal Audit, Documents and Advisory services.\n\nWe bring an indepth understanding of Indonesia's business and legal culture in providing services to multinational corporations, joint ventures and domestic companies clients to execute even the most challenging deals.",
                'image' => 'images/us.jpg',
            ],
            [
                'slug' => 'contact',
                'title' => 'Contact Us',
                'subtitle' => 'Talk with our legal team for your business needs.',
                'body' => 'Send your inquiry and our team will respond as soon as possible.',
                'email' => 'info@wiemlaw.com',
                'phone' => '+62 812 3456 7890',
                'address' => 'Jakarta, Indonesia',
                'image' => 'images/us.jpg',
            ],
        ];

        foreach ($pages as $page) {
            PageContent::updateOrCreate(['slug' => $page['slug']], $page);
        }
    }
}
