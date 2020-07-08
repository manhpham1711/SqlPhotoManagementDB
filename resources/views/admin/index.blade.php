
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <table border = 1 >


      @foreach ($data as $infomation)

       <tr>
            <td>{{ $infomation->title}}</td>
            <td>{{ $infomation->category_id}}</td>
            <td>{{ $infomation->image}}</td>
            <td>
            	<form action="" method="post" accept-charset="utf-8">
            		@csrf
            		@method('DELETE')
					<button type="submit"> delete </button>
            	</form>
            </td>
            <td>
            	<a href="">edit</a>
            </td>
       </tr>
       @endforeach
       </table>
    </body>

    <a href="/book/create"><h1>add</h1></a>
</html>
