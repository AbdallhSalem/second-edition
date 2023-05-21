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
        
   
    <h1>
        <a href="{{route ('subjects.create') }}">
            Add a new Subject 
        </a>

        

    </h1>
    @foreach ($subjects as $subject)
        <div class="d-flex justify-content-between ">
            <div>
            <a href="{{route ('subjects.show', $subject->id) }}">

                {{ $subject->name}}

            </a>
            </div>

            <div>
            <a href="{{route ('subjects.edit', $subject->id) }}">
                 Edit
             </a>
            </div>

        </div>

        {{-- <div>
            {{ $subject->code}}
         </div> --}}
    @endforeach
    @endsection
    
</body>
</html>