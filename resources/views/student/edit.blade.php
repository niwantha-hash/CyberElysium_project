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
    <div class="bg-dark py-3">
        <div class="container">
        <div class="h4 text-white">Student</div>
        
</div>
</div>

<div class="container ">
    <div class="d-flex justify-content-between py-3 ">
        <div class="h4">Edit Student</div>
        <div>
            <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
</div>
</div>
<form action="{{route('students.update',$student->id)}}" method="post" enctype="multipart/form-data">
    @csrf
   @method('put')
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Name</lable>
                        <input type="text" name="name" id="name" placeholder="enter name" class="form-control
                        @error('name') is-invalid @enderror" value="{{ old('name',$student->name) }}">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

                
                    <div class="mb-3">
                        <lable for="Image" class="form-lable">Image</lable>
                        <input type="file" name="image" id="image" placeholder="imput image" class="form-control @error('image') is-invalid @enderror" >
                        @error('image')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
                        <div class="pt-3">
                        @if($student->image != '' && file_exists(public_path().'/uploads/students/'.$student->image))
                    <img src="{{ url('uploads/students/'.$student->image) }} " alt="" width="100" height="100">
</div>
                @endif
</div>

               
                    <div class="mb-3">
                        <lable for="age" class="form-lable">age</lable>
                        <input type="text" name="age" id="age" placeholder="enter age" class="form-control @error('age') is-invalid @enderror"  value="{{ old('age',$student->age) }}">
                        @error('age')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

               
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Status</lable>
                        <br>
                        <input type="radio" name="state" value="Active" value="{{ old('state',$student->state) }}">Active
                         <input type="radio" name="state" value="Inactive" value="{{ old('state',$student->state) }}">Inactive

</div>
                   

                    
            </div>
            </div>  
            
            <button class="btn btn-primary mt-3">Update Student</button>
</form>   
</body>
</html>