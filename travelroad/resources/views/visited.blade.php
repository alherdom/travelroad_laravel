<html>
  <head>
    <title>Travel List</title>
  </head>

  <body>
    <h1>Places I've Already Been To</h1>
    <ul>
      @foreach ($visited as $place)
      <li>{{ $place->name }}</li>
      @endforeach
    </ul>
   <p><a href="/">← Back Home</a></p>
  </body>
</html>
