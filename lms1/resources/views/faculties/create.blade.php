<form action="{{route('faculties.store')}}" method="post">
	{{ csrf_field() }}
	{{$errors->first('name')}}
	<p>
	Name:
	<input type="text" name="name" value="{{ old('name') }}">
	</p>
	<button type="submit">save</button>
</form>