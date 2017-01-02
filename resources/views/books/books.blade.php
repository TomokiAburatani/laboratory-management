@section('books')
  <h2 class="page-header">図書一覧</h2>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>ID</th>
	<th>タイトル</th>
        <th>ISBN</th>
        <th>冊数</th>
        <th>更新日時</th>
      </tr>
      @foreach($booking as $book)
      <tr>
	<td>{{{ $book->id }}}</td>
	<td>{{{ $book->title }}}</td>
	<td>{{{ $book->isbn }}}</td>
	<td>{{{ $book->number }}}</td>
	<td>{{{ $book->created_at }}}</td>
      </tr>
      @endforeach
      


      
    </thead>
    <tbody>
    </tbody>
  </table>
@endsection
