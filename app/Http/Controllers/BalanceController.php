<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class BalanceController extends Controller
{

    /*
     * All active banks should be in database and used for any specific user
     */
    protected $active_banks = ['\App\BankApi\ABank', '\App\BankApi\BBank'];

    public function getBalance()
    {
        $total = 0;
        $response = [];
        foreach ($this->active_banks as $bank){
            $account = (new $bank());
            $balance = $account->getBalance();

            $response[$bank] =  $balance;

            if (is_int($balance))
                $total += $balance;
        }

        $response['total'] = $total;
        return response()->json($response);
    }
}
