@extends ('layouts.app')


@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">IDno</th>
      <th scope="col">Name</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $counter = 0;
   
    ?>
    @foreach ($students as $student)
    <tr>
      <th scope="row">{{++$counter}}</th>
      <td>{{ $student->id }}</td>
      <td>{{ $student->name }}</td>
      <td>{{ $student->age }}</td>
      <td> <a class="btn btn-primary" href="{{ route('students.edit', $student->id) }}">Update</a></td>
      <td> 
        <form action="{{ route('students.delete', $student)}}" method="post" >
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
      </td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection