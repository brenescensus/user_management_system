<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
    rel="stylesheet"integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
    crossorigin="anonymous">
    <title>add user</title>
</head>
<body>
    <h2>add student</h2>
    if(session::has('success'))
    <div class= "alert alert-success" role="alert" >
        {{session::get('success')}}
    </div>
    @endif
    <div class="container" my-5>
    <form  action="{{url('save-user')}}" method= "POST">
        @crsf
      <div class="form-group">
        <label>Name</label>
        <input type="text" class="form-control" placeholder="enter name"  name="name" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Email</label>
        <input type="email" class="form-control" placeholder="enter email " name="email" autocomplete="off">
        </div>
        <div class="form-group">
        <label>Phone</label>
        <input type="mobile" class="form-control" placeholder="enter mobile number"  name="mobile" autocomplete="off">
        </div>
        
       
         <button type="submit" class="btn btn-primary" name="submit">Submit</button>
         <button type="submit" class="btn btn-danger" name="submit"><a href="{{url('users')}}">Back</a></button>
    </form>
</div>
</body>
</html>