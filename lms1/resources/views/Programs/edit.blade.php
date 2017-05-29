<form action="{{route('programs.store')}}" method="post">
	{{ csrf_field() }}
	{{$errors->first('name')}}
	<p>
	Name:
	<input type="text" name="name" value="{{ old('name') }}">
	</p>
	
	<p>
	Faculty:
	<select name="faculti_id">
	@foreach($faculties as $faculty)
	<option value="{{$faculty->id}}">{{$faculty->name}}</option> 
	@endforeach
	</select>
	</p>
	<p>
	<!-- {{$errors->first('mandatory credits')}} -->
	mandatory credits:
	<input type="number" name="mandatory_credits" value="{{($Program->mandatory_credits)}}">
	</p>
	<p>
	<!-- {{$errors->first('optional credits')}} -->
    optional credits:
	<input type="number" name="optional_credits" value="">
	</p>
	<button type="submit">save</button>
</form>