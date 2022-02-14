<?php
namespace App\Services;

class CrawlerService
{
    public static function crawler($client)
    {
        $content = $client->filter('.jflPgo')->each(function ($row) {

            //NAME
            $name = $row->filter('.iNpuEh')->each(function ($field) {
                return $field->filter('div')->each(function ($div) {
                   return $div->filter('h2.jyXVpA')->each(function ($h2) {
                       $text = $h2->text();
                        if(!empty($text)){
                             return $h2->text();
                        }
                        });
                });
            });

            // // PRICE
                $price = $row->filter('span.eoKYee')->each(function ($span) {
                        $text = $span->text();
                        if(!empty($text)){
                            return  $span->text();
                        }
                    });
            //DATE
                $date = $row->filter('.hWBHAm')->each(function ($div) {
                   return $div->filter('span.eLPYJb')->each(function ($span) {
                        return  $span->text();
                    });
                });

            $data['name'] = $name[0][0];
            $data['price'] = $price;
            $data['date'] = $date;

            return $data;
        });
    return $content;
    }

}
