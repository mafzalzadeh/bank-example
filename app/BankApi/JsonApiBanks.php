<?php


namespace App\BankApi;


use App\Contracts\BankInterface;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Psr\Http\Message\ResponseInterface;

abstract class JsonApiBanks implements BankInterface
{

    protected $api_url;

    protected $balance_key;

    /**
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function fetchData()
    {
        $client = new Client();
        return $client->get($this->api_url);
    }

    /**
     *
     * @return mixed
     * @throws GuzzleException
     */
    public function parseData()
    {
        return json_decode($this->fetchData()->getBody());
    }

    /**
     * @return integer|string
     * @throws GuzzleException
     */
    public function getBalance()
    {
        try {
            $balance_key = $this->balance_key;
            return $this->parseData()->$balance_key;
        }catch (\Exception $exception){
            return 'Error';
        }
    }
}
