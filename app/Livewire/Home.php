<?php

namespace App\Livewire;

use App\Data\AuctionData;
use App\Models\Auction;
use Livewire\Component;

class Home extends Component
{
    public function render()
    {

        $auctions = AuctionData::collect(
            Auction::all()
        );

        return view('livewire.home', compact('auctions'));
    }
}
