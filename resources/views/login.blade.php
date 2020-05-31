<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}


input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color:dodgerblue;
  color: white;
  padding: 14px 50px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}



.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}


.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}



.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  border: 1px solid #888;
  width: 80%; 
}

.register{
  margin: -15% auto 20% auto; 
  width: 80%; 
}


</style>
</head>
<body style="background-color: gainsboro">
  <form class="modal-content" action="{{ url('/loginvalidate')}}" method="POST">
  	 @csrf
     @if (Session::has('message'))
     <div class="alert alert-error>">{{Session::get('message')}}</div>
     @endif
    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="uname" required>
      <label for="password"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>

   </div>
  </form>

   <form action="{{ url('/registeration')}}" method="POST" class="register" >
      	@csrf
     <button type="submit" class="cancelbtn">Register</button>
   </form>

</body>
</html>