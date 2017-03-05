import requests 

s = requests.Session()

def streaming():
    
    data = {
        # Your api token is found at: http://keyhole.co/my_token
        "client_id":"your_api_token",
        # The tracker unique hash is found in the tracker's url. ie http://keyhole.co/realtime/ABCDEF/ 
        "hash":"abcdef",
	# (Optional) The number of minutes to backfill/hold tweets. This is useful if you accidentally disconnect and want to
	# backfill missing tweets. Note: tweets already received by the client will not be sent again upon re-connection. 
	"buffer_minutes":"10"
    }

    req = requests.Request('POST', 'https://stream.keyhole.co',data=data).prepare()
    resp = s.send(req, stream=True)

    for line in resp.iter_lines():
        if line:
            yield line

def read_stream():
    for line in streaming():
        print line

read_stream()
