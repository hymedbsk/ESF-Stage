<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Create an Album</title>
    <!-- Latest compiled and minified CSS -->
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled and minified JavaScript -->
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <button type="button" class="navbar-toggle"data-toggle="collapse" data-target=".nav-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span lclass="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Awesome Albums</a>
        <div class="nav-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><ahref="{{url('createalbum')}}">CreateNew Album</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    <div class="container" style="text-align: center;">
      <div class="span4" style="display: inline-block;margin-top:100px;">



        {!! Form::open(['route' => 'album.add', 'enctype' => 'multipart/form-data']) !!}
        <fieldset>
            <legend>Create an Album</legend>
            <div class="form-group">
              <label for="name">Album Name</label>
              <input name="name" type="text" class="form-control"placeholder="Album Name">
            </div>
            <div class="form-group">
              <label for="description">Album Description</label>
              <textarea name="description" type="text"class="form-control" placeholder="Albumdescription"></textarea>
            </div>
            <div class="form-group">
              <label for="cover_image">Select a Cover Image</label>
              {{Form::file('cover_image')}}
            </div>
            <button type="submit" class="btnbtn-default">Create!</button>
          </fieldset>
        {{  Form::close()  }}
      </div>
    </div> <!-- /container -->
  </body>
</html>
