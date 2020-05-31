@extends("layout")
@section("content")		
<div class="ourdiv">
	<div class="myDiv">
		<form action="/insertbook" method="post">
			@csrf
            <label for="name">bookName</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="price">bookprice</label><br>
            <input type="text" id="price" name="price"><br>
            <label for="count">bookcount</label><br>
            <input type="text" id="count" name="count"><br>
            <label for="auther">bookAuther</label><br>
            <input type="text" id="auther" name="auther"><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Submit">

        </form>
    </div> 
    </div>  
    @endsection
