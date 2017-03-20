<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Веб-приложение учёта</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/custom.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	</head>
	<body>
		<!-- block costs -->
		<div class="container">
			<div class="row">
				<div class="col-md-4">

					@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif
					<h2>Особисті витрати</h2>


					<form action='{{ URL::to("/add/member") }}' method="post">

						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

						<div class="form-group">
							<label for="usr1">Витрати:</label>
							<input type="text" class="form-control" id="usr1" name="title">
						</div>

						<!-- <div class="form-group">
							<label for="usr2">Опис:</label>
							<input type="text" class="form-control" id="usr2" name="discription">
						</div> -->

						<div class="form-group">
							<label for="usr3">Опис:</label>
							<input type="text" class="form-control" id="usr3" name="telp">
						</div>

						<div class="form-group">
							<button type='submit'>Занести в таблицю</button>
						</div>

					</form>
				</div>

				<div class="col-md-8">
					<h2>Таблиця витрат</h2>
					<p>Всі витрати</p>
					<table class="table table-hover">
						<thead>
							<tr>
								<th>№</th>
								<th>Сума (грн.)</th>
								<th>Валюта ($)</th>
								<th>Опис</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>

							<?php $no = 1; ?>
							@foreach($data as $result)
							<tr>
								<td>{{ $no }}</td>
								<td class="sum-hrn">{{ $result->title }} </td>
								<td class="sum">{{ $result->title }}</td>
								<td>{{ $result->telp }}</td>
								<td>
									<a href='{{ URL::to("/edit/member") }}/{{ $result->id }}'>Edit</a> |
									<a href='{{ URL::to("/delete/member") }}/{{ $result->id }}'>Delete</a>
								</td>
								<?php $no++; ?>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>

			</div>
		</div>

		<div class="container">
			<div class="col-md-5">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr >
								<th>Разом (грн.)</th>
							</tr>
						</thead>
						<tbody>
							<tr id="roni">
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>

			<div class="col-md-5">
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr >
								<th>Разом ($)</th>
							</tr>
						</thead>
						<tbody>
							<tr id="roni-usd">
								<td></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
		<!-- end block costs -->


		<!-- block profit -->

		<!-- end block profit -->

		<script>

			$(function () {
				$(".sum").each(function (indx) {
					var sum = 0;
					sum += (parseInt( $(this).text(), 10 ) / 30).toFixed(2);
					$(this).text(sum);
				});
			})

			$(function () {
				$("#roni td").each(function (indx) {
					var sum = 0;
					$(".sum-hrn").each(function () {
						sum += +$(this).text()
					});
					$(this).text(sum);
				});
			})

			$(function () {
				$("#roni-usd td").each(function (indx) {
					var sum = 0;
					$(".sum").each(function () {
						sum += +$(this).text()
					});
					$(this).text(sum);
				});
			})
		</script>

	</body>
</html>
