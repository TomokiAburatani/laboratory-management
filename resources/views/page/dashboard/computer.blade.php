@section('dashboard-computer')
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>OS名</th>
        <th>Macアドレス</th>
        <th>利用中/空き</th>
          <th>最終更新日時</th>
      </tr>

      @foreach($comps as $comp)
      <tr>
	<td>{{{ $comp->com_os }}}</td>
	<td>{{{ $comp->com_mac_address }}}</td>
	<td>{{{ $comp->updated_at }}}</td>
      </tr>
      @endforeach
      
    </thead>
  </table>
@endsection