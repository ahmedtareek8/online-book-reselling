@extends("layout")
@section("content")		
<div class="ourdiv">
	<div class="myDiv">
		<form action="/insertbook" method="post">
			@csrf
			<label for="Id">bookId:</label><br>
            <input type="text" id="Id" name="Id" ><br>
            <label for="name">bookName:</label><br>
            <input type="text" id="name" name="name"><br>
            <label for="auther">bookAuther:</label><br>
            <input type="text" id="auther" name="auther"><br>
            <input type="file" name="fileToUpload" id="fileToUpload"><br>
            <input type="submit" value="Submit">

        </form>
    </div> 
    </div>  
    @endsection
