<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5.1</div>
            </div>
				<form action="/test" method="post">
				{{ csrf_field() }}
					<input type="submit" value="post提交" />
				</form>
				<form action="/test" method="get">
					<input type="submit" value="get提交" />
				</form>
				<form action="/test" method="post">
				{{ method_field('PUT') }}
				{{ csrf_field() }}
					<input type="submit" value="put提交" />
				</form> 
				<form action="/test" method="post">
				{{ method_field('DELETE') }}
				{{ csrf_field() }}
					<input type="submit" value="delete提交">
				</form>
				
        </div>
    </body>
</html>
