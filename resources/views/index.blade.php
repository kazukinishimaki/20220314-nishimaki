<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>お問い合わせ</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-2 mb-5">お問い合わせ</h1>
    <div class="container">
      {!! Form::open(['route' => 'confirm', 'method' => 'POST']) !!}
      {{ csrf_field() }}
      <div class="form-group row">
        <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">※</span></p>
        <div class="col-sm-8">
          {{ Form::text('name', null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">※</span></p>
        <div class="col-sm-8">
          <label>{{ Form::radio('gender', "男性") }}男性</label>
          <label>{{ Form::radio('gender', "女性") }}女性</label>
        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">メールアドレス<span class="badge badge-danger ml-1">※</span></p>
        <div class="col-sm-8">
          {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">郵便番号<span class="badge badge-danger ml-1">※</span></p>
        <div class="col-sm-8">
          {{ Form::text('postcode', null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">住所<span class="badge badge-danger ml-1">※</span></p>
        <div class="col-sm-8">
          {{ Form::text('postcode', null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">建物名</p>
        <div class="col-sm-8">
          {{ Form::text('building_name', null, ['class' => 'form-control']) }}
        </div>
      </div>



      <div class="form-group row">
        <p class="col-sm-4 col-form-label">ご意見<span class="badge badge-danger ml-1">※</span></p>
        <div class="col-sm-8">
          {{ Form::textarea('contents', null, ['class' => 'form-control']) }}
        </div>
      </div>

      <div class="text-center">
        {{ Form::submit('確認', ['class' => 'btn btn-dark']) }}
      </div>
      {!! Form::close() !!}
    </div>
  </div>
</body>

</html>