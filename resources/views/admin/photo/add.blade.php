<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form Add</title>
	<link rel="stylesheet" href="">
	<script src="js/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	<style type="text/css" media="screen">
		body {
			padding-top: 0px;
			width: 100%;
			height: 100%;
		}
		.form-control {
			margin-bottom: 10px;
		}
		.login-screen-bg {
			background-color: #EFEFEF;
		}
	</style>
</head>
<body>
	<?php
if (isset($_POST['tag'])) {
	foreach ($_POST['tag'] as $value) {
		echo $value . "<br/>";
	}
}
?>
	<div class="container">
		<h1 class="text-center">Form Thêm Hình Ảnh</h1>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-4 well well-sm col-md-offset-4">
				<legend><a href="#"><i class="glyphicon glyphicon-globe"></i></a> Thông Tin Ảnh!
				</legend>
				<form action="/add" method="post" class="form" enctype="multipart/form-data">
					@csrf
					<div class="row">
						<div class="col-xs-6 col-md-6">
							<label for="">Title Photo</label>
							<input class="form-control" name="title" placeholder="Title" type="text" required>
						</div>

						<div class="col-xs-6 col-md-6">
							<label for=""> Category Photo</label>
							<select class="form-control" name="category">
								@foreach ($category as $categories)
								<option value="{{$categories->id}}">{{$categories->name}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<label for="">Choose Photo</label>
					<input class="form-control" type="file" name="image">
					<div class="form-group">
						<label for="body-field">Description</label>
						<textarea id="body-field" name="description" class="form-control" placeholder="Type your Description photo" ></textarea>
					</div>

					<label for=""> Tag</label>
					<div class="row">
						<!-- <select class="form-control" name="tag" id="tag" multiple style="margin-left: 15px;">
							@foreach ($tags as $tag)
						    <option value="{{$tag->id}}">{{$tag->name}}</option>
						    @endforeach
						</select> -->
						<input type="" name="">
						<div class="form-check form-check-inline" style="margin-left: 15px;">
							@foreach ($tags as $tag)
							<input class="form-check-input" type="checkbox" value="{{$tag->id}}">
							<label class="form-check-label" >{{$tag->name}}</label>
							@endforeach
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="checkbox" value="option3" disabled>
							<label class="form-check-label" >3 (disabled)</label>
						</div>
					</div>

					<br>
					<br>
					<button class="btn btn-lg btn-primary btn-block" type="submit"> Add </button>
				</form>
			</div>
		</div>
	</div>

</body>
</html>