<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
$resim = "https://snb.ugurkazdal.com/".$_SESSION['resim'];
require 'vendor/autoload.php';
$client = new GuzzleHttp\Client(['headers' => ['Content-Type' =>  'application/json' , 'Ocp-Apim-Subscription-Key' => '']]);
$res = $client->post('https://westus.api.cognitive.microsoft.com/emotion/v1.0/recognize',[
    GuzzleHttp\RequestOptions::JSON => ['url' => $resim]
]);

if($res->getStatusCode() == 200){
    $json = (array)json_decode($res->getBody());
} 

$yuzSayisi = count($json);

$emotions = array();

/*
0 = anger
1 = disgust
2 = sadness
3 = surprise
4 = neutral
5 = fear
*/
$positions = array();
for($i = 0; $i<$yuzSayisi; $i++){
    $positions[$i]['left'] = $json[$i]->faceRectangle->left;
    $positions[$i]['top'] = $json[$i]->faceRectangle->top;
    $positions[$i]['height']=$json[$i]->faceRectangle->height;
    $positions[$i]['width']=$json[$i]->faceRectangle->width;
    $emotions[$i][0] = $json[$i]->scores->anger;
    $emotions[$i][1] = $json[$i]->scores->disgust;
    $emotions[$i][2] = $json[$i]->scores->sadness;
    $emotions[$i][3] = $json[$i]->scores->surprise;
    $emotions[$i][4] = $json[$i]->scores->neutral;
    $emotions[$i][5] = $json[$i]->scores->fear;
    $emotions[$i][6] = $json[$i]->scores->happiness;
}

for($j = 0; $j<$yuzSayisi; $j++){
    for($i = 0; $i < 6; $i++){
        if(strpos($emotions[$j][$i],"-") !== false){
            $emotions[$j][$i] = 0;
        }else{
            //$emotions[$i] *= 
        }
    }
}

$data = array();
$data['emotions'] = $emotions;
$data['positions'] = $positions;
echo json_encode($data);
?>