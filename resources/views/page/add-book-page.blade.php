@extends('base')

@include('head')
@include('header')
@section('main')
<h1>書籍の追加</h1>



<br /><br />
  <form action="/index.php/add-book" method="post" class="form-horizontal">

    <div class="form-group">
    <label for="input_id" class="col-md-2 control-label">本のタイトル</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="title" placeholder="Book Name" value="{{ $title or '' }}" @if($check_frag === "check") readonly @endif/><br />
    </div>
  </div>

  <div class="form-group">
    <label for="input_last_name_ja" class="col-md-2 control-label">ISBN</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="isbn" placeholder="ISBN" value="{{ $isbn or '' }}" @if($check_frag === "check") readonly @endif /><br />
    </div>
  </div>

  <div class="form-group">
    <label for="input_last_name_ja" class="col-md-2 control-label">冊数</label>
    <div class="col-md-4">
      <input type="text" class="form-control" name="number" placeholder="Number" value="{{ $number or '' }}" @if($check_frag === "check") readonly @endif /><br />
    </div>
  </div>
 <div class="form-group">
   <input type="hidden"  name="_token" value="{{ csrf_token() }}">
 </div>

 <div class="form-group">
  <div class="col-md-offset-2 col-md-2">
     <button type="submit" class="btn btn-primary btn-block" name="check_frag" value="0">確認</button>
   </div>
 </div>

@endsection
@include('footer')
