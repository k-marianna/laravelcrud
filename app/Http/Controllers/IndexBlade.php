<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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
        <form action='{{ URL::to("/add/member") }}' method="post">

          <input type="hidden" name="_token" value="<?php echo carf_token(); ?>">

          <div class="form-group">
            <label for="usr">Витрати:</label>
            <input type="text" class="form-control" id="usr" name="title">
          </div>

          <div class="form-group">
            <label for="usr">Опис:</label>
            <input type="text" class="form-control" id="usr" name="title">
          </div>

          <div class="form-group">
            <label for="usr">Telp:</label>
            <input type="text" class="form-control" id="usr" name="title">
          </div>

          <div class="form-group">
            <button type='submit'>Add</button>
          </div>

        </form>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h2>Hover Rows</h2>
        <p>The .table-hover class enables a hover state on table rows:</p>
        <table class="table table-hover">
          <thead>
            <tr>
              <th>Firstname</th>
              <th>Lastname</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>John</td>
              <td>Doe</td>
              <td>john@example.com</td>
            </tr>
            <tr>
              <td>Mary</td>
              <td>Moe</td>
              <td>mary@example.com</td>
            </tr>
            <tr>
              <td>July</td>
              <td>Dooley</td>
              <td>july@example.com</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</body>
</html>
