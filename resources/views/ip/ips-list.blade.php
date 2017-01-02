@section('main')
  <h2 class="page-header">IPアドレス一覧</h2>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>IPアドレス</th>
        <th>MACアドレス</th>
        <th>計算機利用目的</th>
        <th>最終更新日時</th>
      </tr>
      @foreach($ip_list as $ip)
      <tr>
	<td>{{{ $ip->ip_address }}}</td>
	<td>{{{ $ip->mac_address }}}</td>
	<td>{{{ $ip->purpose }}}</td>
	<td>{{{ $ip->updated_at }}}</td>
      </tr>
      @endforeach
      
    </thead>
  </table>
@endsection
