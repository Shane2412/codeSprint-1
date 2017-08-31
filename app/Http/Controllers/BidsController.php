<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bids;
use App\Buyers;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BuyersController;

class BidsController extends Controller
{

    public function createBid(Buyers $buyers)
    {
      $bid = new Bids;
      $bid->quantity = 10;
      $bid->user_id = auth()->id();
      $bid->demands_id = $buyers->id;
      $bid->save();
       alert()->success('Congrats!', 'You successfully Bid');
       return back();
    }
}