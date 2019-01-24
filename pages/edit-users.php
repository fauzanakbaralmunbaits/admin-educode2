<div class="row">
    <div class="col-sm-12">
        <div class="white-box">
        	<h3 class="box-title m-b-0">Update User</h3>
            <p class="text-muted m-b-30 font-13"> Edit Otorisasi Back Office Educode </p>
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputuname">Full Name</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-user"></i></div>
                                <input type="hidden" name="id" class="form-control" id="exampleInputuname" value="" required>
                                <input type="text" name="fullname" class="form-control" id="exampleInputuname" value="" required> </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-email"></i></div>
                                <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="" required> </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd1">Password</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="ti-lock"></i></div>
                                <input type="password" name="password" class="form-control" id="exampleInputpwd1" value="" required> </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputpwd2">Otorisasi</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class="fa fa-users"></i></div>
                                <select class="form-control" name="otorisasi" required>
                                    <option>Administrator</option>
                                    <option>User</option>
                                </select>
                        </div>
                        <div class="form-group">
                            
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-inverse waves-effect waves-light  m-r-10"><a href="#" style="color:white;">Cancel</a></button>
	                        <button type="submit" class="btn btn-success waves-effect waves-light">Submit</button>
	                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>