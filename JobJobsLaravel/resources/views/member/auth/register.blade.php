@extends('layout')

@section('content')
<div class="container-fluid"> 
      <div class="container" style="margin-top: 50px;margin-bottom: 30px;"> 
          <div class="row"> 
              <div class="col-md-12"> 
                  <h1><strong>Register</strong></h1>
                  <p>You could register or <a href="{{url('/login')}}">login here</a> to be able to use this website!</p>
              </div>
          </div>  
      </div>
    </div> 
   
   <div class="container">
   	<div class="row">
   		<div class="col-md-2"></div>
   		<div class="col-md-8">
   			<div class="panel panel-default panel-login">
   				<div class="panel-heading">
   					Register
   				</div>
			  	<div class="panel-body">
					<div class="row">
						<form class="form-horizontal">
							<div class="col-md-8">
								
								<form action="dashboard.html">
									<div class="form-group">
										<label for="nama" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="nama" placeholder="">
										</div>
									</div>

									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">E-mail Address</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" placeholder="">
										</div>
									</div>

									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="password" placeholder="">
										</div>
									</div>

									<div class="form-group">
										<label for="confirm" class="col-sm-2 control-label">Confirm Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="confirm" placeholder="">
										</div>
									</div>

									<div class="form-group">
										<label for="phone" class="col-sm-2 control-label">Phone</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="phone" placeholder="">
										</div>
									</div>

									<div class="form-group">
										<label for="gender" class="col-sm-2 control-label">Gender</label>
										<div class="col-sm-10">
											<select class="form-control" id="gender">
												<option value="0">Gender</option>
												<option value="m">M</option>
												<option value="f">F</option>
											</select> 	
										</div>
									</div>

									<div class="form-group">
										<label for="location" class="col-sm-2 control-label">Area Location</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="location" placeholder="">
										</div>
									</div>

									<div class="form-group">
										<label for="address" class="col-sm-2 control-label">Address</label>
										<div class="col-sm-10">
											<textarea class="form-control" rows="3"></textarea>	
										</div>
									</div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-primary">Register</button>
									</div>
								  </div>
								</form>

							</div>
							<div class="col-md-4">
								<div class="form-group">
									<div class="text-center">
										<img src="{{asset('img/No-image-found.jpg')}}" alt="" class="img-responsive img-thumbnail" id="prev" style="width: 210px; height: 210px;">
									</div>
									<div class="text-center" style="margin-top: 5px">
										<label for="file" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
									</div>
									<input id="file" type="file" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);" style="visibility: hidden">
								</div>
							</div>
						</form>
					</div>
			  	</div>
			</div>
   		</div>
   		<div class="col-md-2"></div>
   	</div>
   </div>
@endsection