<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('base')
    @section('content')
        
   

    <form action="{{route('subjects.update', $subject->id) }}" method="POST">
        @csrf
        @method("PUT")

        <div>
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="{{$subject->name}}">    
        </div>
        
        
        <div>
            <label>Code</label>
            <input class="form-control" type="text" name="code" value="{{$subject->code}}">    
            </div>
        
            <div>
                <label>Department Id</label>
                <input class="form-control" type="text" name="department_id" value="{{$subject->department_id}}">    
                </div>
        
                <button type="submit" class="btn btn-success">
                    Save
                </button>
        
        </form>

        @endsection
    
</body>
</html>