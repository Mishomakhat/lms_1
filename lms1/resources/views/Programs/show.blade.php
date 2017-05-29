<h1>{{$Program->name}}</h1>
<p>
	{{$Program->faculty->name}}
</p>
<p>
	{{$Program->mandatory_credits}}
</p>
<a href="{{route('programs.edit',$Program->id)}}">edit</a>
