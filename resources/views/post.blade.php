<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>
  <script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('fcfccd3f5c8d7651a0d7', {
      cluster: 'ap2'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
      alert(JSON.stringify(data));
    });
  </script>
</head>
<body>
    <form action="{{route("posts.store")}}" method="POST">
        @csrf
        <label for="">Author</label>
        <br>
        <input type="text" name="author" id="">

        <br>
        <br>
        <label for="">Title</label>
        <br>
        <input type="text" name="title" id="">
        <br>
        <button>Submit</button>
    </form>
</body>
