@section('content') 
	<h1>I am here</h1>
	<a href="{{ action('TestController@two')}}">Two</a>
	<br>
	<a href="{{ action('TestController@post', array('id'=>1))}}">Post</a>
@stop
