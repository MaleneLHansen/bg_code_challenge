<!DOCTYPE html>
<html>
	<head>
		<title>Film Database</title>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>

        <div id="container" class="col-md-12">
        	@include('layout.menu.top')
            <div class="row">
                <div id='page-header' class="col-md-12">
                    <h1 class="page-header">@yield('title', '')</h1>
                </div>
                <div id="content" class="col-md-12">
                    @yield('content')
                </div>
           </div>
            <!-- /.row -->
        </div>




	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    @yield('script')

	</body>
</html>
