<h1>{{$user->name}}</h1>
<h3>is admin:{{$user->is_admin}}</h3>
<a href="{{route('users.edit',$user->id)}}">change status </a>