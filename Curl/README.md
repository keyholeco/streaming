<h1>Keyhole Stream Connection</h1>
<h2>Curl Example</h2>
<p>The following curl command demonstrates how to establish a streaming connection to Keyhole:</p>
<p>Your api token is found at: http://keyhole.co/my_token<br />The tracker unique hash is found in the tracker's url. ie http://keyhole.co/realtime/ABCDEF/ </p>
<p>curl -i -X POST -H "Content-Type: application/x-www-form-urlencoded" -d "client_id=your_api_token&hash=abcdef" http://stream.keyhole.co
</p>

