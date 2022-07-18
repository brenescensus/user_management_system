<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>user-list</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>user-list</h2>
                <div class ="btn btn-primary"><a href="{{url(add-user)}}">ADD</a></div>
                <table class="table">
                    <thead>
                        <tr>
                            <th >#</th>
                            <th >name</th>
                            <th >email</th>
                            <th >phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $i=1;
                        @endphp
                        @foreach ($data as $userd)
                        <tr>
                        <td>{{$i++}}</td>
                            <td>{{$userd->name}}</td>
                            <td>{{$userd->email}}</td>
                            <td>{{$userd->phone}}</td>
                            <td> <div><a class ="btn btn-primary" href="{{url('edit-user/'.$userd->id)}}">EDIT</a>  <a class ="btn btn-danger" href="{{url('delete-user/'.$userd->id)}}">DELETE</a></div></td>
                            
                        </tr>
                        @endforeach
                    </tbody>
            </div>
        </div>

    </div>

</body>

</html>