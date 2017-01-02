@section('main')
  <h2 class="page-header">研究室員一覧</h2>
  <table class="table table-striped table-hover">
    <thead>
      <tr>
	<th>名前</th>
        <th>Name</th>
        <th>メールドレス</th>
        <th>ユーザー登録日</th>
	<th>最終更新日時</th>
      </tr>
      @foreach($user_list as $user)
      <tr>

	<td>{{{ $user->last_name_ja }}}　{{{ $user->first_name_ja }}}</td>
	<td>{{{ $user->first_name }}}　{{{ $user->last_name }}}</td>
	<td><a href="mailto:{{{ $user->email }}}">{{{ $user->email }}}</a></td>
	<td>{{{ $user->created_at }}}</td>
	<td>{{{ $user->updated_at }}}</td>
      </tr>
      @endforeach
      


      
    </thead>
    <tbody>
    </tbody>
  </table>
@endsection
