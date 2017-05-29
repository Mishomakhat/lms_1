<a href="{{route('programs.create')}}">create</a>

@foreach($programs as $prog)
	<ul>
		<li><a href="{{route('programs.show',$prog->id)}}">{{$prog->name}}({{$prog->faculty->name}})</a></li>
	</ul>

@endforeach