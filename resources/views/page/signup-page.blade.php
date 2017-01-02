@extends('base')

@include('head')
@include('header')
@section('main')


  @if (!($check_frag === "up"))
<h1>会員登録</h1>
<br /><br />

  <form action="/index.php/signup-check" method="post" class="form-horizontal">

    <div class="form-group">
    <label for="input_id" class="col-md-2 control-label">ID：</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="uid" placeholder="ID (e.g. yamada)" value="{{ $uid or '' }}" @if($check_frag === "check") readonly @endif/><br />
    </div>
  </div>

  
  <div class="form-group">
    <label for="input_last_name_ja" class="col-md-2 control-label">名字：</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="ulast_name_ja" placeholder="Last Name (例：山田)" value="{{ $ulast_name_ja or '' }}" @if($check_frag === "check") readonly @endif /><br />
    </div>
  </div>


  <div class="form-group">
    <label for="input_first_name_ja" class="col-md-2 control-label">名前：</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="ufirst_name_ja" placeholder="First Name (例：太郎)" value="{{ $ufirst_name_ja or '' }}" @if($check_frag === "check") readonly @endif /><br />
    </div>
  </div>

  <div class="form-group">
    <label for="input_last_name" class="col-md-2 control-label">Last Name：</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="ulast_name" placeholder="Last Name (e.g. yamada)" value="{{ $ulast_name or '' }}" @if($check_frag === "check") readonly @endif /><br />
    </div>
  </div>

  <div class="form-group">
    <label for="input_first_name" class="col-md-2 control-label">First Name：</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="ufirst_name" placeholder="First Name (e.g. tarou)" value="{{ $ufirst_name or '' }}" @if($check_frag === "check") readonly @endif /><br />
    </div>
  </div>  

  <div class="form-group">
    <label for="input_mail_address" class="col-md-2 control-label">Email：</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="uemail" placeholder="Email Address (e.g. yamada@ksm.kis.osakafu-u.ac.jp)" value="{{ $uemail or '' }}" @if($check_frag === "check") readonly @endif /><br />
    </div>
  </div>
  
  <div class="form-group">
    <label for="input_password" class="col-md-2 control-label">パスワード：</label>
    <div class="col-md-4">
      <input type="password" class="form-control" name="upassword" placeholder="Password" value="{{ $upassword or '' }}" @if($check_frag === "check") readonly @endif /></label><br />
    </div>
 </div>
 
 <div class="form-group">
   <label for="input_password" class="col-md-2 control-label">パスワード(確認用)：</label>
   <div class="col-md-4">
     <input type="password" class="form-control" name="upassword2" placeholder="Password" value="{{ $upassword2 or '' }}" @if($check_frag === "check") readonly @endif /></label><br />
   </div>
 </div>
 
 <div class="form-group">
   <input type="hidden"  name="_token" value="{{ csrf_token() }}">
 </div>

 @if( $check_frag === "check" )
 <form action="/index.php/signup" method="post" class="form-horizontal">
 <div class="form-group">
   <div class="col-md-offset-2 col-md-2">
     <div style="float:left; display:inline;">
     <button type="submit" class="btn btn-primary" name="check_frag" value="1">登録</button>
     <button type="submit" class="btn btn-danger" name="check_frag" value="2">修正</button>
     </div>
     <div style="clear:both;"></div>
   </div>
 </div>

 @elseif( $check_frag === "rewrite" )
 <div class="form-group">
   <div class="col-md-offset-2 col-md-2">
     <button type="submit" class="btn btn-primary btn-block" name="check_frag" value="0">確認</button>
   </div>
 </div>
 @endif
 </form>
 @else
 <h1>以下の内容でユーザーを登録しました</h1>
 <table class="table">
   <tr>
     <th>ユーザーID</th>
     <th>名前</th>
     <th>Name</th>
     <th>Email Address</th>
   </tr>
   <tr>
     <td class="success">{{{$uid}}}</td>
     <td class="success">{{{$ufirst_name_ja}}} {{{$ulast_name_ja}}}</td>
     <td class="success">{{{$ulast_name}}} {{{$ufirst_name}}}</td>
     <td class="success">{{{$uemail}}}</td>
   </tr>
 </table>
<h2><a href="/index.php/signup-form">続けてユーザー登録する</a></h2>
@endif

@endsection
@include('footer')
