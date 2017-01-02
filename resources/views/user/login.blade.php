@section('login-form')
  <div id='container' class='col-md-12 container'>
    <div id='login-modal' tabindex='1' role='dialog' aria-lebelledby='myModalLabel' aria-hidden='false'>
      <div class='modal-dialog'>
        <div class='loginmodal-container'>
          <h1>ログインしてください</h1>
          <br>
          <form method='post' action='/index.php/login-operate'>
            <input type='text' name='userid' placeholder='UserID'>

            <input type='password' name='password' placeholder='Password'>
            <input type='submit' name='login' class='login loginmodal-submit' value='login'>
	    <input type="hidden"  name="_token" value="{{ csrf_token() }}">
	    <br>
            <div style='text-align: right;'>
              <a href='/'>TOPへ戻る</a>
            </div>
          </form>
	  <div align="center">
	  <h2><a href='/index.php/signup-form'>ユーザー登録</a></h2>
	  </div>
        </div>
      </div>
    </div>
  </div>
@endsection
