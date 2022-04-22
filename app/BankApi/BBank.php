<?php


namespace App\BankApi;


class BBank extends JsonApiBanks
{
    protected $balance_key = 'total';
    protected $api_url = 'http://hediehsara.ir/b.php';
}
