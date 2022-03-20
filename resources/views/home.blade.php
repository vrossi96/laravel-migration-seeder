<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Home Treni</title>
</head>

<body>
   <header>Treni</header>
   <main>
      @forelse ($trains as $train)
         <ul>
            <li>{{ $train->company }}</li>
            <li>{{ $train->departure_station }}</li>
            <li>{{ $train->arrival_station }}</li>
            <li>{{ $train->departure_time }}</li>
            <li>{{ $train->arrival_time }}</li>
            <li>{{ $train->carriages }}</li>
         </ul>
      @empty
         <h2>
            Nessun Treno
         </h2>
      @endforelse
   </main>
</body>

</html>
