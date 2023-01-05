<h1> {{$heading}} </h1>

@if (count($listings)) 
    @foreach ($listings as $item)
        <h2>{{$item['title']}}</h2>
        <p>{{$item['description']}}</p>
    @endforeach
@else 
    <h1>Not found</h1>
@endif
