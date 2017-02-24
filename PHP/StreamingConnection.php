<?php
    //Your api token is found at: http://keyhole.co/my_token
    $client_id = 'your_api_token';

    //The tracker unique hash is found in the tracker's url. ie http://keyhole.co/realtime/ABCDEF/ 
    $hash = 'abcdef'; 

    $this->curl = curl_init();
    $curl_params = array(
        CURLOPT_URL => 'https://stream.keyhole.co',
        CURLOPT_VERBOSE => true,
        CURLOPT_POSTFIELDS => http_build_query(array(
            'client_id' => $client_id,
            'hash' => $hash,
        )),
    );

    curl_setopt_array($this->curl, $curl_params);
    $result = curl_exec($this->curl);
?>
