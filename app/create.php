
<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Sign Up</h2>
				<form id="create_student" action="" method="POST" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Name</label>
								<input name="name" class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Age</label>
								<input name="age" class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="">Location</label>
								<input name="location" class="form-control" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Cell</label>
								<input name="cell" class="form-control" type="text">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label for="">Eamil</label>
								<input name="email" class="form-control" type="text">
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="form-group">
								<img style="max-width:100%; max-height:auto" id="pre" src="" alt=""><br>
								<label for="photos"><img style="width: 50px; height:auto;" src="public/assets/media/img/gallery.png" alt="">
							</label>
							<input id="photos" style="display:none;" name="photo" type="file">
							</div>
						</div>
					</div>

					<div class="form-group">
						<input class="btn btn-primary" type="submit" value="Sign Up">
					</div>
				</form>
			</div>
		</div>
	</div>
	