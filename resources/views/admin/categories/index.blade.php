<h1>Categories {{$linguagens[0]}}</h1>

<ul>
    @foreach($linguagens as $linguagem)
        <li>{{$linguagem}}</li>
     @endforeach
</ul>