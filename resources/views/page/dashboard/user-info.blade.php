@section('user-info')

<div>
<table class="table table-striped table-hover">

  <tr>
  <td>Name</td>
  <td>{{{$login_name}}}</td>
  <tr>
  <td>Email Address</td>
  <td>{{{$uemail}}}</td>
  </tr>
</table>
</div>
<a href="#"><button type="button" class="btn btn-primary btn-block">コンピュータを借りる</button></a>
  <br />
<a href="#"><button type="button" class="btn btn-primary btn-block">本を借りる</button></a>


@endsection