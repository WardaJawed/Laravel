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
    <div class="container">
    <form action="{{route('r_photos.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <h1>Working With File handling</h1>
        <label class="text-info">Choose File</label>
        <input type="file" name="pic_upload" class="form-control"><br>
        <input type="submit" class="btn btn-primary" value="Upload">
        <a href="{{route('r_photos.index')}}" class="btn btn-dark">View All</a>
    </form>


    </div>
</body>
</html>