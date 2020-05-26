
<!DOCTYPE html>
<html>
<head>
	<style>

    .panel-body {
  display: block;
  margin-left:30;
  margin-right:auto;
  width:90%;
  padding: 30px;

}
.table{
  width: 100%;
}

    .table, .td, .th {
  border: 1px solid black;
  text-align: left;
  background-color: #AF4C7A;
  color: white;
}
  
  .myDiv {
  border: 5px outset red;
  background-color: lightcoral;    
  text-align: center;
}
	
		.header {
  overflow: hidden;
  background-color: #f7ebeb;
  padding: 30px 20px;
}

/* Style the header links */
.header a {
  float: left;
  color: black;
  text-align: center;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}
	</style>
	<title></title>
</head>
<body>
<div class="header">
  <a href="https://commons.wikimedia.org/wiki/File:HTTP_logo.svg" class="logo">myonline_reposetory</a>
  <div class="header-right">
    <a class="active" href="#home">home</a>
    <a href="https://www.facebook.com/?ref=tn_tnmn">Contact</a>
    <a href="#about">About</a>
  </div>
  </div>
  @yield ("content")

</body>
</html>
