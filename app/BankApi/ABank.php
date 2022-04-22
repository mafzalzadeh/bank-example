<?php


namespace App\BankApi;


class ABank extends JsonApiBanks
{
    /*
     * @Todo These parameters should be on database
     */
    protected $balance_key = 'amount';
    protected $api_url = 'http://hediehsara.ir/a.php';
}
