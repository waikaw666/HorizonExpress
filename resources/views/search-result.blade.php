<html>


<div>
    Hello
     
    @foreach($results as $result)
     <li> BUS: {{$result->bus_type}} - {{$result->plate_number}} - {{$result->description}}</li>
    @endforeach
</div>
</html>
