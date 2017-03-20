<!DOCTYPE html>
<html lang="ru">
<head>
  <title>Веб-приложение учёта</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="container">
    <div class="row">
      <div class="col-md-4">

        @if (session('success'))
          <div class="alert alert-success">
            {{ session('success') }}
          </div>
        @endif
        <h2>Add Member</h2>


        <form action='{{ URL::to("/update/member") }}' method="post">

          <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

          @foreach($data as $result)
          <div class="form-group">
            <label for="usr1">Витрати:</label>
            <input type="hidden" class="form-control" value="{{ $result->id }}" name="id">
          </div>

         <!--  <div class="form-group">
            <label for="usr2">Опис:</label>
            <input type="text" class="form-control" id="usr2" name="discription">
          </div>
 -->
          <div class="form-group">
            <label for="usr3">Опис:</label>
            <input type="text" class="form-control" value="{{ $result->telp }}" id="usr3" name="telp">
          </div>

          <div class="form-group">
            <button type='submit'>Add</button>
          </div>
          @endforeach
        </form>
      </div>
    </div>
  </div>


</body>
</html>
