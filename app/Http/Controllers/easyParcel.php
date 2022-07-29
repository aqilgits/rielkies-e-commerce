<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class easyParcel extends Controller
{
    public function rateCheck()
    {
        $domain = "https://demo.connect.easyparcel.my/?ac=";

        $action = "EPRateCheckingBulk";
        $postparam = array(
            'api'    => config('easyParcel.key'),
            'bulk'    => array(
                array(
                    'pick_code'    => '86200',
                    'pick_state'    => 'jhr',
                    'pick_country'    => 'MY',
                    'send_code'    => '11950',
                    'send_state'    => 'png',
                    'send_country'    => 'MY',
                    'weight'    => '5',
                    'width'    => '0',
                    'length'    => '0',
                    'height'    => '0',
                    'date_coll'    => '2021-09-08',
                ),
            ),
            'exclude_fields'    => array(
                'rates.*.pickup_point',
            )
        );
        $url = $domain . $action;
        $response = Http::asForm()->post($url, $postparam);
        $json = json_decode($response);

        // return view('livewire.order',['listCourier'=>$json]);
        echo '<pre>';
        print_r($json);
        echo '</pre>';
    }

    public function makeOrder()
    {
        $domain = "https://demo.connect.easyparcel.my/?ac=";

        $action = "EPSubmitOrderBulk";
        $postparam = array(
            'api'    => config('easyParcel.key'),
            'bulk'    => array(
                array(
                    'weight'    => '0.1',
                    'content'    => 'Riel Rice',
                    'value'    => '2',
                    'service_id'    => 'EP-CS09Z',
                    'pick_point'    => 'EP-CB0AAW',
                    'pick_name'    => 'Lukman Aqil',
                    'pick_company'    => 'Rielkies Batu Pahat',
                    'pick_contact'    => '0197364858',
                    'pick_addr1'    => 'No 14, Jalan Orked, Kampung Seri Machap',
                    'pick_city'    => 'Simpang Renggam',
                    'pick_state'    => 'jhr',
                    'pick_code'    => '86200',
                    'pick_country'    => 'MY',
                    'send_name'    => 'wafi',
                    'send_contact'    => '0122134567',
                    'send_addr1'    => 'bayan baru',
                    'send_city'    => 'bayan lepas',
                    'send_state'    => 'png',
                    'send_code'    => '11950',
                    'send_country'    => 'MY',
                    'collect_date'    => '',
                    'sms'    => '1',
                    'send_email'    => 'aqilsky@gmail.com',
                ),
            ),
        );

        $url = $domain . $action;
        $response = Http::asForm()->post($url, $postparam);

        $json = json_decode($response);
        echo "<pre>";
        print_r($json);
        echo "</pre>";
    }

    public function payment()
    {
        $domain = "https://demo.connect.easyparcel.my/?ac=";

        $action = "EPPayOrderBulk";
        $postparam = array(
            'api'    => config('easyParcel.key'),
            'bulk'    => array(
                array(
                    'order_no'    => 'EI-5UU56',
                ),
            ),
        );

        $url = $domain . $action;
        $response = Http::asForm()->post($url, $postparam);

        $json = json_decode($response);
        echo "<pre>";
        print_r($json);
        echo "</pre>";
    }
}
