<!DOCTYPE html>
<html lang="en">
<head>
  <title>New Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h2>Post New</h2>
        <form action="{{ route('post.store') }}" method="post">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title Post</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Title Post">
            </div>
            <div class="form-group">
            <label for="exampleInputPassword1">Content</label>
            <input type="text" class="form-control" id="content" name="content" placeholder="Enter Content">
            </div>
        
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
  
</div>
</body>
</html>
