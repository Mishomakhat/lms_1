<form action="{{route('users.update',$user->id)}}" method="post">
	{{ csrf_field() }}
	<input type="hidden" name="_method" value="PUT">
	<button type="submit">სტატუსის შეცვლა</button>
</form>