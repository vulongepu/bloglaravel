<?php

namespace App\Http\Controllers;
use App\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function update()
    {
    	$settings = Settings::first();
    }
}
