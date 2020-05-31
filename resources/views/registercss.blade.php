<!DOCTYPE html><!--this bage for registration design-->
<html>
<head>
  <style>
    * {box-sizing: border-box}


.container {
  padding: 16px;
}


input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

select{
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}


hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}


.registerbtn {
  background-color: dodgerblue;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity:1;
}


a {
  color: dodgerblue;
}

.signin {
  background-color: #f1f1f1;
  text-align: center;
}
  </style>
  <title></title>
</head>
<body>
   @if (Session::has('error'))
       <div class="alert alert-warning" role="alert">
           {{Session::get('error')}}
       </div>
  @endif
   <form action="{{ url('/insertregisterationdata')}}" method="POST">
    @csrf
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="name"><b>name</b></label>
    <input type="text" placeholder="name" name="name" id="name" required>

    <label for="username"><b>username</b></label>
    <input type="text" placeholder="username" name="username" id="username" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" id="psw" required>

    <label for="type"><b>type</b></label>
    <select class="form-control" name="usertype">
          <option value="buyer">Buyer</option>
          <option value="seller">Seller</option>
    </select>
    <hr>
    <button type="submit" class="registerbtn">Register</button>
  </div>


</form>

</body>
</html>