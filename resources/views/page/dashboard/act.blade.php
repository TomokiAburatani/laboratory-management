@section('dashboard-act')
  <table class="table table-striped table-hover">
    <thead>
      <tr>
	<th>活動内容</th>
        <th>実施日時</th>
      </tr>

      @foreach($acts as $act)
      <tr>
	<td>{{{ $act->act_content }}}</td>
	<td>{{{ $act->act_date }}}</td>
      </tr>
      @endforeach
      
    </thead>
  </table>
@endsection