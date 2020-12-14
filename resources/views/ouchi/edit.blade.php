@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">会社情報</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="POST" action="{{ route('ouchi.update', ['id' => $contact->id]) }}">
                            @csrf
                            <div class="form-group">
                                <label for="formGroupExampleInput">会社名</label>
                            <input class="form-control" id="formGroupExampleInput" type="text" name="company_name" value="{{$contact->company_name}}">
                            </div>
                            </br>
                                <div class="form-group">
                                    <label for="formGroupExampleInput">会社住所</label>
                            <input class="form-control" id="formGroupExampleInput" type="text" name="company_address" value="{{$contact->company_address}}">
                                </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">電話番号</label>
                            <input class="form-control" id="formGroupExampleInput" type="text" name="company_number" value="{{$contact->company_number}}">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">メールアドレス</label>
                            <input class="form-control" id="formGroupExampleInput" type="email" name="company_email" value="{{$contact->company_email}}">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput"> WEBサイト URL</label>
                            <input class="form-control" id="formGroupExampleInput" type="url" name="url" value="{{$contact->url}}">
                            </div>
                            </br>
                                    <div class="form-group">
                                        <label for="formGroupExampleInput">SNS</label>
                            <input class="form-control" id="formGroupExampleInput" type="url" name="sns" value="{{$contact->sns}}">
                                    </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">担当者名</label>
                            <input class="form-control" id="formGroupExampleInput" type="text" name="person_name" value="{{$contact->person_name}}">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">担当者電話番号</label>
                            <input class="form-control" id="formGroupExampleInput" type="text" name="person_number" value="{{$contact->person_number}}">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">担当者メールアドレス</label>
                            <input class="form-control" id="formGroupExampleInput" type="email" name="person_email" value="{{$contact->person_email}}">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">断熱性能(Ua値)</label>
                                <div class="input-group">
                            <input class="form-control" id="formGroupExampleInput" type="text" name="ua" value="{{$contact->ua}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">Ｗ/㎡・Ｋ</span>
                                    </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">断熱材</label>
                            <input class="form-control" id="formGroupExampleInput" type="text" name="insulation" value="{{$contact->insulation}}">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">構造</label>
                                <input class="form-control" id="formGroupExampleInput" type="text" name="construct" value="{{$contact->construct}}">
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">坪単価</label>
                                <div class="input-group">
                                <input class="form-control" id="formGroupExampleInput" type="text" name="tsubo_price" value="{{$contact->tsubo_price}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">万円</span>
                                    </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">総資金計画</label>
                                <div class="input-group">
                                <input class="form-control" id="formGroupExampleInput" type="text" name="financing_plan" value="{{$contact->financing_plan}}">
                                    <div class="input-group-append">
                                        <span class="input-group-text">万円</span>
                                    </div>
                            </div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">標準仕様</label>
                                <input class="form-control" id="formGroupExampleInput" type="text" name="standard" value="{{$contact->standard}}"></div>
                            </br>
                            <div class="form-group">
                                <label for="formGroupExampleInput">オプション</label>
                            <input class="form-control" id="formGroupExampleInput" type="text" name="option" value="{{$contact->option}}">
                            </div>
                            </br>

                            <input class="btn btn-info" type="submit" value="更新する">
                            </br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
