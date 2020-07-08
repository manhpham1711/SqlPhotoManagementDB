<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<table class="table table-striped" border = 1 >
		<thead>
			<tr>
				<th scope="col">Name</th>
				<th scope="col">Image</th>
				<th scope="col">Category</th>
				<th scope="col">Description</th>
				<th scope="col">Tags</th>
				<th colspan="2" scope="col">Function</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($data as $infomation)
			<tr>
				<th scope="row"> {{$infomation->title}} </th>
				<td> {{$infomation->image}} </td>
				<td> {{$infomation->category->name}} </td>
				<td> {{$infomation->description->content}} </td>
				<td> {{$infomation->getTags()}} </td>

				<td> <form action="" method="get" accept-charset="utf-8">
					<button type="submit"> edit </button>
				</form></td>

				<td> <form action="" method="POST" accept-charset="utf-8">
					@csrf
					@method("DELETE")
					<button type="submit"> delete</button>
				</form></td>
			</tr>
			@endforeach

		</tbody>
	</table>

<a href="/book/create"><h1>add</h1></a>

</body>
</html>
