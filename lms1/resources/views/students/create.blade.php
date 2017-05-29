<form action="{{route('students.store')}}" method="post">
	{{ csrf_field() }}
	{{$errors->first('name')}}
	<p>
	Name:
	<input type="text" name="name" value="{{ old('name') }}">
	</p>
	<p>
	{{$errors->first('surname')}}
	Surname:
	<input type="text" name="surname" value="{{ old('name') }}">
	</p>
    <button type="submit">save</button>
</form>