@foreach($users as $us)
	<ul>
		<li><a href="{{route('users.show',$us->id)}}">{{$us->name}}   isadimin={{$us->is_admin}}</a></li>
	</ul>

@endforeach