<?php
    //Your api token is found at: http://keyhole.co/my_token
    $client_id = 'your_api_token';

    //The tracker unique hash is found in the tracker's url. ie http://keyhole.co/realtime/ABCDEF/ 
    $hash = 'abcdef'; 

    // (Optional) The number of minutes to backfill/hold tweets. This is useful if you accidentally disconnect and want to
    // backfill missing tweets. Note: tweets already received by the client will not be sent again upon re-connection. 
    $buffer_minutes = 10;


    $this->curl = curl_init();
    $curl_params = array(
        CURLOPT_URL => 'https://stream.keyhole.co',
        CURLOPT_VERBOSE => true,
        CURLOPT_POSTFIELDS => http_build_query(array(
            'client_id' => $client_id,
            'hash' => $hash,
            'buffer_minutes' => $buffer_minutes,
        )),
    );

    curl_setopt_array($this->curl, $curl_params);
    $result = curl_exec($this->curl);
?>
