<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Goutte\Client as Goutte;
use Symfony\Component\HttpClient\HttpClient as HttpClient;
use App\Services\CrawlerService;

class CrawlerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function listProduts()
    {
        $url = 'https://df.olx.com.br/distrito-federal-e-regiao/brasilia/computadores-e-acessorios/notebook-e-netbook';

        $client = new Goutte(HttpClient::create(['timeout' => 60]));

        $crawler = $client->request('GET', $url);
        $ResultCrawler = CrawlerService::crawler($crawler);

        if(count($ResultCrawler) > 0) {
            $result = response()->json(["retcode" => "SUCCESS", "data" => $ResultCrawler, "msg" => "done"], 200);
        }else{
            $result = response()->json(["retcode" => "failed", "data" => $ResultCrawler, "msg" => "done"], 99);
        }
        return $result;

    }
}
