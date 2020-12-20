@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">新規登録</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{route('ouchi.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">会社名</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                       placeholder="Example input" name="company_name">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">会社住所</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                       placeholder="Example input" name="company_address">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">電話番号</label>
                                <input type="tel" class="form-control" id="formGroupExampleInput"
                                       placeholder="電話番号" name="company_number">
                            </div>
                            </br>
                            {{--電話番号(番号桁数指定する場合)--}}
                            {{-- <input type="tel" name="company_number" pattern="[0-9]{3}-[0-9]{4}-[0-9]{4}">--}}
                            <div class="form-group">
                                <label for="exampleInputEmail1">メールアドレス</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Enter email" name="email">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">ホームページ</label>
                                <input type="url" class="form-control" id="formGroupExampleInput"
                                       placeholder="Example input" name="url">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">SNS</label>
                                <input type="url" class="form-control" id="formGroupExampleInput"
                                       placeholder="Example input" name="sns">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">担当者名</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                       placeholder="Example input" name="person_name">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">担当者電話番号</label>
                                <input type="tel" class="form-control" id="formGroupExampleInput"
                                       placeholder="電話番号" name="person_number">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="exampleInputEmail1">担当者メールアドレス</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                       aria-describedby="emailHelp" placeholder="Enter email"
                                       name="person_email">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">断熱性能(Ua値)</label>
                                <input type="text" class="form-control" id="formGroupExampleInput"
                                       placeholder="Example input" name="ua">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">断熱材</label>
                                <input type="text" class="form-control"
                                       id="formGroupExampleInput" placeholder="Example input"
                                       name="insulation">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">構造</label>
                                <input type="text" class="form-control"
                                       id="formGroupExampleInput"
                                       placeholder="Example input" name="construct">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">坪単価</label>
                                <input type="text" class="form-control"
                                       id="formGroupExampleInput"
                                       placeholder="Example input" name="tusbo_price">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">総資金計画</label>
                                <input type="text" class="form-control"
                                       id="formGroupExampleInput"
                                       placeholder="Example input"
                                       name="financing_plan">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">標準仕様</label>
                                <input type="text" class="form-control"
                                       id="formGroupExampleInput"
                                       placeholder="Example input"
                                       name="standard">
                            </div>
                            </br>
                            <div class="form-group">
                                <label
                                    for="formGroupExampleInput">オプション</label>
                                <input type="text" class="form-control"
                                       id="formGroupExampleInput"
                                       placeholder="Example input"
                                       name="option">
                            </div>
                            </br>
                            <input class="btn btn-outline-primary" type="submit"
                                   value="新規登録する">
                            </br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
