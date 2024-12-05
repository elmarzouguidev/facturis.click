<?php

namespace Database\Seeders;

use AshAllenDesign\ShortURL\Facades\ShortURL;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShortURLSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $urls = [
            ['https://www.linode.com/lp/refer/?r=151b354e5dec82b451c77585df5ac0c6dcbf3f66'],
        ];

        foreach ($urls as $url) {
            ShortURL::destinationUrl($url[0])->trackVisits()->trackBrowser()->trackDeviceType()->make();
        }
    }
}
