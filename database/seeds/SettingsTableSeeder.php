<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        \App\Setting::create([
             'site_name' => 'Laravel Blog',
             'address' => 'vulong, huu hoa' ,
             'contact_number' => '0998404580',
             'contact_email' => 'vulongepu@gmail.com'
        	]);
    }
}
