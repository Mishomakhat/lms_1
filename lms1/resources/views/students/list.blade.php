<a href="{{route('students.create')}}">create</a>

@foreach($Students as $stud)
	<ul>
		<li><a href="{{route('students.show',$stud->id)}}">{{$stud->name}}  {{$stud->surname}}</a></li>
	</ul>

@endforeach