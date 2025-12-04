<?php

namespace App\Http\Controllers;

use App\Data\CessieData;
use App\Models\Cessie;
use Illuminate\Http\Request;

class CessieController extends Controller
{
    public function show(Cessie $cessie)
    {
        $cessie = CessieData::fromModel($cessie, true);

        return view('cessie.show', compact('cessie'));
    }
}
