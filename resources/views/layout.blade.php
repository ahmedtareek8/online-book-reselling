
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
  border: 1px solid #888;
  padding: 16px;   
  text-align: center;
  background-color: #fefefe;
  margin: 5% auto 15% auto; 
  width: 80%; 
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
input[type=text] {
  width: 50%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
input[type=submit]{
  background-color:dodgerblue;
  color: white;
  padding: 14px 50px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 50%;
}  
	</style>
	<title></title>
</head>
<body style="background-color: gainsboro">
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
