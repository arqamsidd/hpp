<?php

namespace App\Utils;

class Helper
{
    public function addLead($data,$type=''){

        $pageUrl = \URL::current();
        $curl = curl_init();
        $a = [
            'first_name' => $data['name'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'aa' => ($type == "callback")?"callback":($data['description']??''),
            'brand_id' => '34',
            'country_code' => 'US',
            'created_from' => $data['page_url'],'web',
            'form_type'=>'web',
            'prdc'=>$data['page_url']?str_replace('-',' ',$data['page_url']):'',
            'qn1'=>($type=='sample_kit')?1:$data['q1'],
            'qn2'=>$data['quantity2']??0,
            'qn3'=>$data['quantity3']??0,
            'dimensions'=>($data['length']??0). 'x' .($data['height']??0). 'x' .($data['depth']??0) . ' '. ($data['unit']??''),
            'stock' => $data['material']??'',
            'ip2loc_ip' => $data['ip2loc_ip']??'',
            'ip2loc_isp' => $data['ip2loc_isp']??'',
            'ip2loc_org' => $data['ip2loc_org']??'',
            'ip2loc_country' => $data['ip2loc_country']??'',
            'ip2loc_region' => $data['ip2loc_region']??'' ,
            'ip2loc_city' => $data['ip2loc_city']??'',
            'return_path' => 1,
            'assigned_to'=>'10219',
            'printing'           => $data['printing']??'',
            //'card_thickness'     => $data['card_thickness']??'',
            'finish_size'     => $data['extra_finishes']??'',
            'lamination' => $data['coating_lamination']??'',
            'sample_kit'=>($type=='sample_kit')?true:'',
            'medium'=>$data['medium'],
            'campaign_name'=>$data['campaign_name']??'',
                'campaign_id'=>$data['campaign_id']??'',
            'campaign_keywords'=>$data['campaign_keywords']??'',
            'script_key'=>$data['script_key'],


        ];
        curl_setopt_array($curl, array(
            CURLOPT_URL => "https://projectcamp.io/api/add-lead-api",
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "POST",
            CURLOPT_POSTFIELDS => http_build_query($a),
            CURLOPT_HTTPHEADER => array("Cookie: projectcamp_session=VJRILVQaq3o0BB7P42w3KXhXAyMdERgF8aQr37GW"),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        return $response;
    }



}
