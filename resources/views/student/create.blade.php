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
        <div class="h4">Student</div>
        <div>
            <a href="{{route('students.index')}}" class="btn btn-primary">Back</a>
</div>
</div>
<form action="{{route('students.store')}}" method="post" enctype="multipart/form-data">
    @csrf
            <div class="card border-0 shadow-lg">
                <div class="card-body">
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Name</lable>
                        <input type="text" name="name" id="name" placeholder="enter name" class="form-control
                        @error('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

                
                    <div class="mb-3">
                        <lable for="Image" class="form-lable">Image</lable>
                        <input type="file" name="image" id="image" placeholder="imput image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

               
                    <div class="mb-3">
                        <lable for="age" class="form-lable">age</lable>
                        <input type="text" name="age" id="age" placeholder="enter age" class="form-control @error('age') is-invalid @enderror">
                        @error('age')
                        <p class="invalid-feedback">{{ $message }}</p>
                        @enderror
</div>

               
                    <div class="mb-3">
                        <lable for="name" class="form-lable">Status</lable>
                        <br>
                                <input type="radio" name="state" value="Active"  class="form-check-input">Active
                                <input type="radio" name="state" value="Inactive" class="form-check-input">Inactive
</div>

                    

                    
            </div>
            </div>  
            
            <button class="btn btn-primary mt-3">Save Student</button>
</form>   
</body>
</html>