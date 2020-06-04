@extends("layout")
@section("content")
<div class = "back_ground">
	<div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Book_name</th>
                <th>Book_auther</th>
                <th>book_count</th>
            </tr>
            </thead>
            @foreach($Books as $book)
                <tr>
                    <td>{{$book->Bname}}</td>
                    <td>{{$book->Bauther}}</td>
                    <td>{{$book->Bcount}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

<div class = "back_ground">
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Booksold_name</th>
                <th>Booksold_id</th>
            </tr>
            </thead>
            @foreach($Bookssold as $book)
                <tr>
                    <td>{{$book->Bname}}</td>
                    <td>{{$book->Bid}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</div>

@endsection