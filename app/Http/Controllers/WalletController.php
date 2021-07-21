<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Wallet;
use Auth;

class WalletController extends Controller
{
    //

    public function index()
    {
          
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();

         return view('wallet.index' , compact('wallet'));
    }

    public function create()
    {
         return view('wallet.create' );
    }

    public function withdraw()
    {
        $wallet = Wallet::where('user_id',Auth::user()->id)->get();
        $my_wallet = 0;

        foreach ($wallet as $w)
        {
            if ($w->type == null)
            {
                $my_wallet = $my_wallet += $w->amount;
            }

            if ($w->type == 1)
            {
                $my_wallet = $my_wallet -= $w->amount;
            }


        }

         return view('wallet.withdraw' ,compact('my_wallet'));
    }


    public function save(Request $request)
    {
        $wallet = new Wallet();

        $wallet->amount = $request->amount;
        $wallet->info = $request->info;
        $wallet->type = $request->type;
        $wallet->user_id  = Auth::user()->id;

        $wallet->save();

        return redirect()->back();
    }

    public function save_withdraw(Request $request)
    {
        $wallet = new Wallet();

        $wallet->amount = $request->amount;
        $wallet->info = $request->info;
        $wallet->type =  1;
        $wallet->user_id  = Auth::user()->id;

        $wallet->save();




        return redirect()->back();
    }
}
