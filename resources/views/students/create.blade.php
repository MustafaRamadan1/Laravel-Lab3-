@extends ('layouts.app')

@section('content')

{!! Form::open(['url' => 'students', 'method'=>'post']) !!}
<div class="container">
  <div class="row">
    <div class="col-md-6 mx-auto">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Age</label>
    {!! Form::number('age', null, ['class'=>'form-control']) !!}
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  {!! Form::submit('ADD', ['class'=> 'btn btn-primary']) !!}
    </div>
  </div>
</div>
 
 
{!! Form::close() !!}

@endsection 