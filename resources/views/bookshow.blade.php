@extends("layout")
@section("content")
<div class = "back_ground">
	<div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Book_ID</th>
                <th>Book_name</th>
                <th>Book_auther</th>
                <th>book_image</th>
            </tr>
            </thead>
            @foreach($Books as $book)
                <tr>
                    <td>{{$book->bookId}}</td>
                    <td>{{$book->bookname}}</td>
                    <td>{{$book->bookauther}}</td>
                    <td>{{$book->image}} </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection