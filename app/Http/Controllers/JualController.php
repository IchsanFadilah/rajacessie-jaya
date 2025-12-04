<?php

namespace App\Http\Controllers;

use App\Data\SaleData;
use App\Models\Sale;
use Illuminate\Http\Request;

class JualController extends Controller
{
    public function show(Sale $sale )
    {
        $sale = SaleData::fromModel($sale, true);

        return view('jual.show', compact('sale'));
    }
}
