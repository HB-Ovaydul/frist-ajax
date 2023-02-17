<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="public/assets/css/style.css">
	<link rel="stylesheet" href="public/assets/css/responsive.css">
	<!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Main Page</title>
</head>
<body>

<div class="menu-content my-5">
    <div class="container d-center">
        <div class="row">
            <div class="col-12-md">
                <a id="user" class="btn btn-info" href="users.php">All Users</a>
                <a id="create" class="btn btn-primary" href="create.php">Create Account</a>
                <a id="profile" class="btn btn-success" href="profile.php">Profile</a>
            </div>
        </div>
    </div>
</div>

<div class="app">
<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All Data Main</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody id="users-data">

				
					</tbody>
				</table>
			</div>
		</div>
</div> 
</div>

    <!-- JS FILES  -->
	<script src="public/assets/js/jquery-3.4.1.min.js"></script>
	<script src="public/assets/js/popper.min.js"></script>
	<script src="public/assets/js/bootstrap.min.js"></script>
	<script src="public/assets/js/custom.js"></script>
	<script src="public/assets/js/script.js"></script>

	<!-- <script>
		$().
	</script>
	 -->
</body>
</html>