<h1>this is view file</h1>
<h1>{{$name}}</h1>
<!-- <h1>{{rand()}}</h1> -->
<!-- <h1>{{$user[1]}}</h1> -->

@if($name=='Anil')
<h1>This is {{$name}}</h1>
@elseif($name=='abc')
<h1>this is {{$name}}</h1>
@else
<h1>This is other user</h1>
@endif

@foreach($user as $use)
<h1>{{$use}}</h1>
@endforeach

<ul>
@for($i=0;$i<11;$i++)
<li><h1>{{$i}}</h1></li>
@endfor
</ul>