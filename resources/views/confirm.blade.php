<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>内容確認</title>
</head>

<body>
  <div class="container">
    <h1 class="text-center mt-2 mb-5">内容確認</h1>
    <div class="container">
      {!! Form::open(['route' => 'process', 'method' => 'POST']) !!}
      {{ csrf_field() }}
      <div class="form-group row">
        <p class="col-sm-4 col-form-label">お名前</p>
        <div class="col-sm-8">

        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">性別</p>
        <div class="col-sm-8">

        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">メールアドレス</p>
        <div class="col-sm-8">

        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">郵便番号</p>
        <div class="col-sm-8">

        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">住所</p>
        <div class="col-sm-8">

        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">建物名</p>
        <div class="col-sm-8">

        </div>
      </div>

      <div class="form-group row">
        <p class="col-sm-4 col-form-label">ご意見</p>
        <div class="col-sm-8">

        </div>
      </div>

      <div class="text-center">
        <button name="action" type="submit" value="submit" class="btn btn-dark">送信</button>
        <button name="action" type="submit" value="return" class="btn btn-dark"></button>
        <a href="" {{ route('contact') }}" class="btn btn-dark">修正する</a>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
  </div>
</body>

</html>