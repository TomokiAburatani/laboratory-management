@section('header')
<header class="header">
  <nav class='navbar navbar-default'>
    <div class='container-fluid'>
      <div class='navbar-header'>
	
	<a class='navbar-brand' href='/index.php'>瀬田研究室情報管理システム
	</a>
      </div>

      <div class="collapse navbar-collapse" id="nav-menu-1">
	<ul class="nav navbar-nav navbar-right">


          @if( isset($login_frag) )
	  @if( $login_frag === TRUE )
	  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Books<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/index.php/books">全ての蔵書</a></li>
              <li><a href="#">蔵書検索</a></li>
	      @if( isset($login_frag) )
	      @if( $login_frag === TRUE )
	      <li><a href="#">書籍のレンタル</a></li>
	      <li><a href="#">レンタル中の書籍一覧</a></li>
	      <li><a href="#">蔵書の追加</a></li>
	      @endif
	      @endif
            </ul>
          </li>

	  
	  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Purchace<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">研究室費マネジメント</a></li>
              <li><a href="#">物品購入履歴</a></li>
	      <li><a href="#">物品の購入記録</a></li>
            </ul>
          </li>

	  
	  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Activities<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/index.php/activities">全ての活動</a></li>
              <li><a href="#">最近の活動</a></li>
            </ul>
          </li>


	  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Computers<b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="/index.php/ips">IPアドレス検索</a></li>
              <li><a href="/index.php/computers">計算機管理</a></li>
              <li><a href="#">コンピュータのレンタル</a></li>
	      <li><a href="#">レンタル中のコンピュータ</a></li>
            </ul>
          </li>
	  @endif
	  @endif

	  
	  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Users<b class="caret"></b></a>
            <ul class="dropdown-menu">
	      @if( isset($login_frag) )
	      @if( $login_frag === TRUE )
              <li><a href="/index.php/users">全てのユーザー</a></li>
              <li><a href="#">ユーザー検索</a></li>
	      @endif
	      @endif
	      <li><a href="/index.php/signup-form">ユーザー追加</a></li>
            </ul>
          </li>

          @if( isset($login_frag) )
	  @if( $login_frag === TRUE )

	  <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ $login_name }}</a>
            <ul class="dropdown-menu">
              <li><a href="#">test</a></li>
              <li><a href="/index.php/logout">ログアウト</a></li>
            </ul>
	  @else
	  <li><a href='/index.php/login'>ログイン</a></li>

	  
	  @endif
	  @else
	  <li><a href='/index.php/login'>ログイン</a></li>
	  @endif
	</ul>
	
      </div>
    </div>
  </nav>
</header>
@endsection
