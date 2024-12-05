<?php

namespace App\Http\Controllers\Facturis\Track;

use App\Http\Controllers\Controller;
use AshAllenDesign\ShortURL\Facades\ShortURL;
use Illuminate\Http\Request;

class TrackerController extends Controller
{


    public function index()
    {
        $shortURLObject = ShortURL::destinationUrl('https://www.linode.com/lp/refer/?r=151b354e5dec82b451c77585df5ac0c6dcbf3f66')->make();

        dd($shortURLObject);
    }
}
