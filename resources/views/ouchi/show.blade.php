@extends('layouts.app')

@section('content')

    <div class="container mb-3">
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
                        <div class="form-group">
                            <label for="formGroupExampleInput">会社名</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->company_name}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">会社住所</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->company_address}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">電話番号</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->company_number}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">メールアドレス</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->company_email}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">WEBサイト URL</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->url}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">SNS</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->sns}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">担当者情報</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">担当者名</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->person_name}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">担当者電話番号</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->person_number}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">担当者メールアドレス</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->person_email}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">住宅性能</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">断熱性能(Ua値)</label>
                            <div class="input-group">
                                <div class="form-control" id="formGroupExampleInput">{{$contact->ua}}</div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Ｗ/㎡・Ｋ</span>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">断熱材</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->insulation}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">構造</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->construct}}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">資金計画</div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="formGroupExampleInput">坪単価</label>
                            <div class="input-group">
                                <div class="form-control" id="formGroupExampleInput">{{$contact->tusbo_price}}</div>
                                <div class="input-group-append">
                                    <span class="input-group-text">万円</span>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">総資金計画</label>
                            <div class="input-group">
                                <div class="form-control" id="formGroupExampleInput">{{$contact->financing_plan}}</div>
                                <div class="input-group-append">
                                    <span class="input-group-text">万円</span>
                                </div>
                            </div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">標準仕様</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->standard}}</div>
                        </div>
                        </br>
                        <div class="form-group">
                            <label for="formGroupExampleInput">オプション</label>
                            <div class="form-control" id="formGroupExampleInput">{{$contact->option}}</div>
                        </div>
                        </br>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-3">
        <div class="row justify-content-center">
            <div class="col" style="text-align: center;">
                <form method="GET" action="{{ route('ouchi.edit', ['id' => $contact->id]) }}">
                    @csrf
                    <input class="btn btn-outline-primary mx-auto" type="submit" value="変更する">
                </form>
            </div>
            <div class="col" style="text-align: center;">
                <form method="POST" action="{{ route('ouchi.destroy', ['id' => $contact->id]) }}"
                      id="delete_{{$contact->id}}">
                    @csrf
                    <a href="#" class="btn btn-outline-dark mx-auto" data-id="{{$contact->id}}"
                       onclick="deletePost(this);">削除する</a>
                </form>
            </div>
        </div>
    </div>

    {{--    javascript--}}
    <script>
        function deletePost(e) {
            'use strict';
            if (confirm('本当に削除していいですか')) {
                document.getElementById('delete_' + e.dataset.id).submit();
            }
        }
    </script>

    {{--戻るボタン--}}
    {{--    <footer class="fixed-top">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row justify-content-center">--}}
    {{--                <div class="col-md-8">--}}
    {{--                    <div class="card">--}}
    {{--                        <div class="row">--}}
    {{--                            <div class="col-sm">--}}
    {{--                                <form method="GET" action="{{ route('ouchi.index', ['id' => $contact->id]) }}">--}}
    {{--                                    @csrf--}}
    {{--                                    <input class="btn btn-outline-info" type="submit" value="<">--}}
    {{--                                </form>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </footer>--}}

@endsection
