@extends ('layouts.app')

@section('content')


{!! Form::model($student, ['route'=> ['students.update' , $student], 'method'=>'put']) !!}
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Name</label>
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">age</label>
    {!! Form::number('age', null, ['class'=>'form-control']) !!}
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  {!! Form::submit('ADD', ['class'=> 'btn btn-primary']) !!}
 
{!! Form::close() !!}



@endsection