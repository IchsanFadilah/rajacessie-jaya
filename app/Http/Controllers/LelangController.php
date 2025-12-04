<?php

namespace App\Http\Controllers;

use App\Data\AuctionData;
use App\Models\Auction;
use Illuminate\Http\Request;

class LelangController extends Controller
{
    public function show(Auction $auction)
    {
        $auction = AuctionData::fromModel($auction, true);

        return view('lelang.show', compact('auction'));
    }
}
