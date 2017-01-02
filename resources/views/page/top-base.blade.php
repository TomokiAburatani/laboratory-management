@extends('base')

@include('head')
@include('header')


@section('main')

@if($login_frag === TRUE)

<h1><span style="color:blue;">{{{$login_name}}}</span> さんのダッシュボード</h1>
<br />



<div class="col-xs-4">
  <br /><br />
@yield('user-info')
</div>

  
<div class="col-xs-1">
</div>

<div class="col-xs-7">  
<ul class='nav nav-tabs' id='tabs'>
  <li class='active'>
    <a href='#act' data-toggle='tab'>最近の活動
    </a>
  </li>
  <li class=''>
    <a href='#book' data-toggle='tab'>図書
    </a>
  </li>
  <li class=''>
    <a href='#computer' data-toggle='tab'>コンピュータ
    </a>
  </li>
</ul>
<div id='myTabContent' class='tab-content'>
  <div class='tab-pane fade in active' id='act'>
    <div class='col-xs-12'>
      <br>
      @yield('dashboard-act')
      <br>
  </div>
  </div>
  <div class='tab-pane fade' id='book'>
    <div class='col-xs-12'>
      <br>
      @yield('dashboard-book')
      <br>
    </div>
  </div>
  <div class='tab-pane fade' id='computer'>
    <br>
    @yield('dashboard-computer')
  </div>
</div>

@else

@include('user.login')

@endif

@endsection

@include('footer')
