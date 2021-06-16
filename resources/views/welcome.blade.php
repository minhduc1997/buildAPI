{{-- @extends('news.layout.index')

@section('title', 'Page Title')

@section('header1')
    <h1>menu</h1>
@endsection
@section('banner')
<h1>banner</h1>
@endsection
@section('content1')
<h1>content1</h1>
@endsection
@section('footer')
<h1>content2</h1>
@endsection --}}
{{-- <h1>hello</h1> --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Pusher Test</h1>
    <p>
      Publish an event to channel <code>my-channel</code>
      with event name <code>my-event</code>; it will appear below:
    </p>
    <div id="app">
        <h1>hello</h1>
      <ul>
        <li v-for="message in messages">
          {{message}}
        </li>
      </ul>
    </div>
  
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
    <script>
      // Enable pusher logging - don't include this in production
      Pusher.logToConsole = true;
  
      var pusher = new Pusher('a76c527cf65877c62cfb', {
        cluster: 'ap1'
      });
  
      var channel = pusher.subscribe('my-channel');
      channel.bind('my-event', function(data) {
          console.log(data);
        app.messages.push(JSON.stringify(data));
      });
  
      // Vue application
      const app = new Vue({
        el: '#app',
        data: {
          messages: [],
        },
      });
    </script>
  </body>
</html>

