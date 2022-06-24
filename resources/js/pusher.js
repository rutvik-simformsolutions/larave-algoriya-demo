// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;

var pusher = new Pusher("f26667e5234f43bb635c", {
    cluster: "ap2",
});

var channel = pusher.subscribe("my-channel");
channel.bind("my-event", function (data) {
    alert(JSON.stringify(data));
});
