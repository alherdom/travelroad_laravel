<html>
  <head>
    <title>Travel List</title>
  </head>

  <body>
    <h1>Places I'd Like to Visit</h1>
    <ul>
      @foreach ($wished as $place)
      <li>{{ $place->name }}</li>
      @endforeach
    </ul>
    <p><a href="/">← Back Home</a></p>
  </body>
</html>
