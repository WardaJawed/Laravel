<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" />
</head>
<body>
    <table class="table table-bordered">
    <tr>
        <th><a href="{{route('r_photos.create')}}" class="btn btn-dark">Create Data</a></th>
    </tr>    
    <tr>
            
            <th>Id</th>
            <th>Image</th>
        </tr>
        @foreach($photo as $item)
       
        <tr>
            <td>{{$item->id}}</td>
            <td><img src="uploads/{{$item->image}}"/> </td>
        </tr>
       
    @endforeach
    </table>
</body>
</html>