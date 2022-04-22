<?php


namespace App\Contracts;


interface BankInterface
{
    /*
     * It just fetch data from API
     */
    public function fetchData();

    /*
     * Any Process on fetched data should be in this method
     */
    public function parseData();

    /*
     *
     */
    public function getBalance();
}
