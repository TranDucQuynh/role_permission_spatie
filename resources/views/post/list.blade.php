<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>

<div class="container">
  <h2>Post Table</h2>        
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Post Name</th>
        <th style="margin: auto; text-align: center"><a class="btn btn-outline-success btn-block" href="{{ route('post.create') }}">New</a></th>
      </tr>
    </thead>
    <tbody>
      @foreach($posts as $post)
          <tr>
            <td>{{ $post->id }}</td>
            <td>{{ $post->name }}</td>
            <td style="margin: auto; text-align: center"><a class="btn btn-outline-info" href="{{ route('post.edit', ['id'=> $post->id]) }}">Edit</a> &nbsp;
                {{--<a class="btn btn-outline-danger" href="{{ route('post.destroy', ['id'=>$post->id]) }}">Delete</a>--}}
                <form style="display: inline-block;" action="{{ route('post.destroy', ['id'=>$post->id]) }}" method="post">@csrf @method('delete')
                <button class="btn btn-outline-danger" type="submit">Delete</button>
                </form>
            </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>

