<head>

<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">


</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
<div class="card">
  <div class="card-header">
  تغيير كلمة المرور
  </div>
  
@if (session('success'))
        <div class="alert alert-success">
        {{session('success')}}

        </div>
        @endif
        @if (session('error'))
        <div class="alert alert-danger">
        {{session('error')}}

        </div>
        @endif
  <div class="card-body">
	 
	 <form action="{{route('update_password')}}" id="change_password_form" method="post">
		@csrf
	   <div class="form-group">
		<label for="old_password">كلمة المرور القديمة</label>
		<input type="password" name="old_password" class="form-control" id="old_password" >
	
		@if($errors->any('old_password'))
		  <span class="text-danger">{{$errors->first('old_password')}}</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="password">كلمة مرور جديدة</label>
		<input type="password" name="new_password" class="form-control" id="new_password" >
		@if($errors->any('new_password'))
		  <span class="text-danger">{{$errors->first('new_password')}}</span>
		@endif
	  </div>
	  <div class="form-group">
		<label for="confirm_password">قم بتأكيد كلمة المرور الجديدة الخاصة بك </label>
		<input type="password" name="confirm_password" class="form-control" id="confirm_password" >
		@if($errors->any('confirm_password'))
		  <span class="text-danger">{{$errors->first('confirm_password')}}</span>
		@endif
	  </div>
     
	  <button type="submit" class="btn btn-primary">تغيير كلمة المرور</button> 
      &nbsp;
      &nbsp;
      <a href="{{route('profile')}}" class="btn btn-info">إستقبال</a>

	</form>
  </div>
</div>
