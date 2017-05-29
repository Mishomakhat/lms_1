<form action="{{route('faculties.update',$Faculty->id)}}" method="post">
	{{ csrf_field() }}
	{{$errors->first('name')}}
	<input type="hidden" name="_method" value="PUT">
	<p>
	Name:
	<input type="text" name="name" value="{{ $Faculty->name }}">
	</p>
	<button type="submit">save</button>
</form>