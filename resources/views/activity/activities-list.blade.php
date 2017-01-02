@section('main')
  <h2 class="page-header">活動一覧</h2>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
	<th>活動内容</th>
        <th>実施日時</th>
        <th>ユーザー名</th>
      </tr>

      @foreach($acts as $act)
      <tr>
	<td>{{{ $act->act_content }}}</td>
	<td>{{{ $act->act_date }}}</td>
	<td>{{{ $act->act_uid }}}</td>
      </tr>
      @endforeach
      
    </thead>
  </table>
@endsection
