@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student crud</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
</head>
<body>  
<div class="container ">
    <div class="d-flex justify-content-between py-3 ">
        <div class="h4">Student-Registation</div>
        <div>
            <a href="{{route('students.create')}}" class="btn btn-primary">Create</a>
</div>
</div>

@if(Session::has('success'))
<div class="alert alert-success">
    {{ Session::get('success') }}
</div>
@endif

<div class="card border-0 shadow-lg">
    <div class="card-body">
        <table class="table table-striped">
            <tr>
                <th>ID</Th>
                <th>Name</Th>
                <th>Image</Th>
                <th>age</Th>
                <th>Status</Th>
                <th>Action</Th>
</tr>

@if($students->isNotEmpty())
@foreach ($students as $student)
<tr>
                <td>{{ $student->id }}</td>
                <td>{{ $student->name }}</td>
                <td>
                    @if($student->image != '' && file_exists(public_path().'/uploads/students/'.$student->image))
                    <img src="{{ url('uploads/students/'.$student->image) }} " alt="" width="60" height="60" class="rounded-circle">
                @else
                <img src="{{ url('assets/images/no-image.png') }} " alt="" width="60" height="60" class="rounded-circle">
                @endif
                </td>
                <td>{{ $student->age }}</td>
                <td>{{ $student->state }}</td>
                <td>
                    <a href="{{route('students.edit',$student->id)}}" class="btn btn-primary btn-sm">EDIT</a>
                    <a href="#" onclick="deletestudent({{ $student->id }})" class="btn btn-danger btn-sm">DELETE</a>

                    <form id="student-edit-action-{{ $student->id }}" action="{{ route('students.destory',$student->id) }}" method="post">
                    @csrf
                    @method('delete')
                </form>


                </td>
</tr>
@endforeach
@else
<tr>
    <td colspan="6">Record Not Found </td>
</tr>
@endif
</table>
</div>
</div> 
<div class="mt-3">
    {{ $students->links()}}
</div>   
    
</body>
</html>
<script>
    function deletestudent(id)
    {
        if(confirm("Are You Sure?"))
        {
            document.getElementById('student-edit-action-'+id).submit();
        }
    }
</script>
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection