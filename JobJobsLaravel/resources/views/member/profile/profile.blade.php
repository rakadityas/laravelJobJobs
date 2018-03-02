@extends('layout')

@section('content')
<div class="container-fluid"> 
      <div class="container" style="margin-top: 50px;margin-bottom: 30px;"> 
          <div class="row"> 
              <div class="col-md-12"> 
                  <h1><strong>Profile</strong></h1>
                  <p>Change and manage your user account profiles.</p>
              </div>
          </div>  
      </div>
    </div>
   
   <div class="container" style="background-color: #E0E0E0;">
   	<div class="row">
   		<div class="col-md-2"></div>
   		<div class="col-md-8">
   			<div class="panel panel-default panel-login">
			  	<div class="panel-body">
					<div class="row">
						<form class="form-horizontal">
							<div class="col-md-8">
									<div class="form-group">
										<label for="bio" class="col-sm-2 control-label">About me</label>
										<div class="col-sm-10">
											<textarea class="form-control" rows="3" placeholder="Hello! My name is User1! I'm a professional web developer with total 200 projects completed! I work with a clean and manageable code."></textarea>	
										</div>
									</div>

									<div class="form-group">
										<label for="nama" class="col-sm-2 control-label">Name</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="nama" placeholder="User1">
										</div>
									</div>

									<div class="form-group">
										<label for="email" class="col-sm-2 control-label">E-mail Address</label>
										<div class="col-sm-10">
											<input type="email" class="form-control" id="email" placeholder="User1@gmail.com">
										</div>
									</div>

									<div class="form-group">
										<label for="password" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="password">
										</div>
									</div>

									<div class="form-group">
										<label for="confirm" class="col-sm-2 control-label">Confirm Password</label>
										<div class="col-sm-10">
											<input type="password" class="form-control" id="confirm">
										</div>
									</div>

									<div class="form-group">
										<label for="phone" class="col-sm-2 control-label">Phone</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="phone" placeholder="08574839853">
										</div>
									</div>

									<div class="form-group">
										<label for="gender" class="col-sm-2 control-label">Gender</label>
										<div class="col-sm-10">
											<select class="form-control" id="gender" default="f">
												<option value="0">Gender</option>
												<option value="m" selected="selected">M</option>
												<option value="f">F</option>
											</select> 	
										</div>
									</div>

									<div class="form-group">
										<label for="location" class="col-sm-2 control-label">Area Location</label>
										<div class="col-sm-10">
											<input type="text" class="form-control" id="location" placeholder="South Jakarta">
										</div>
									</div>

									<div class="form-group">
										<label for="address" class="col-sm-2 control-label">Address</label>
										<div class="col-sm-10">
											<textarea class="form-control" rows="3" placeholder="Jalan Kebon Jeruk Raya No.27, RT.1/RW.9, Kebon Jeruk, RT.3/RW.6, Sukabumi Utara, Kb. Jeruk, Kota Jakarta Barat, Daerah Khusus Ibukota Jakarta 11530"></textarea>	
										</div>
									</div>
								  <div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
									  <button type="submit" class="btn btn-primary" style="align-items: center;">Submit</button>
									</div>
								  </div>

							</div>
							<div class="col-md-4">

								<div class="row">
									<div class="form-group">
										<div class="text-center">
											<img src="{{asset('img/admin-icon.png')}}" alt="" class="img-responsive img-thumbnail" id="prev" style="width: 210px; height: 210px;">
										</div>
										<div class="text-center" style="margin-top: 5px">
											<label for="file" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></label>
										</div>
										<input id="file" type="file" accept="image/gif, image/jpeg, image/png" onchange="readURL(this);" style="visibility: hidden">
									</div>
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