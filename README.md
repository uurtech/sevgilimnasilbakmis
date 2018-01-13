# sevgilimnasilbakmis

ilgili yazı https://phpanaliz.com/yazi/php-microsoft-yapay-zeka-ornegi-resim-duygu-analizi/

index.php deki 399. satırdaki     

$.get("analysis.php?resim=https://sevgilimnasilbakmis.com/"+resim,function(data){
 adresini dinamikleştirin veya kendi sitenizi yazın.

 analysis.php dosyasındaki 

 $client = new GuzzleHttp\Client(['headers' => ['Content-Type' =>  'application/json' , 'Ocp-Apim-Subscription-Key' => 'BURAYA_API_KEY']]);

kısma https://azure.microsoft.com/tr-tr/services/cognitive-services/emotion/ adresinden edineceğiniz ücretsiz API KEY'i girin.
