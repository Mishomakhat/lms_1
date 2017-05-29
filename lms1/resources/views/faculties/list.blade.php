
<a href="{{route('faculties.create')}}">create</a>

@foreach($faculties as $fac)
	<ul>
		<li><a href="{{route('faculties.show',$fac->id)}}">{{$fac->name}}</a></li>
	</ul>

@endforeach