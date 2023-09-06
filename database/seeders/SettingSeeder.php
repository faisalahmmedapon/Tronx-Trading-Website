<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = array(
            ['key' => 'logo', 'value' => 'https://1000logos.net/wp-content/uploads/2016/10/Apple-Logo.png','type' => 'file'],
            ['key' => 'fav_icon', 'value' => 'https://1000logos.net/wp-content/uploads/2016/10/Apple-Logo.png','type' => 'file'],
            ['key' => 'preloader', 'value' => 'https://1000logos.net/wp-content/uploads/2016/10/Apple-Logo.png','type' => 'file'],
            ['key' => 'banner', 'value' => 'https://1000logos.net/wp-content/uploads/2016/10/Apple-Logo.png','type' => 'file'],
            ['key' => 'name', 'value' => 'Novena','type' => 'text'],
            ['key' => 'slogan', 'value' => 'stay with novena','type' => 'text'],
            ['key' => 'title', 'value' => 'Novena- Health & Care Medical','type' => 'text'],
            ['key' => 'address', 'value' => 'Address Ta-134/A, New York, USA ','type' => 'text'],
            ['key' => 'email', 'value' => 'support@novena.com','type' => 'text'],
            ['key' => 'phone', 'value' => '823-4565-13456','type' => 'text'],
            ['key' => 'schedule', 'value' => 'Mon to Fri : 08:30 - 18:00','type' => 'text'],
            ['key' => 'facebook', 'value' => 'https://www.facebook.com/novena','type' => 'socials'],
            ['key' => 'linkdin', 'value' => 'https://www.linkdin.com/novena','type' => 'socials'],
            ['key' => 'twitter', 'value' => 'https://www.twitter.com/novena','type' => 'socials'],
        );


        foreach ($settings as $setting) {
            Setting::updateOrCreate($setting);
        }

    }
}
