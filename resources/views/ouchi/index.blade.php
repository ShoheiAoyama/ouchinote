@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Archive</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="GET" action="{{ route('ouchi.create') }}">
                            <button type="submit" class="btn btn-outline-primary mb-3">
                                新規登録
                            </button>
                        </form>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;">COMPANY</th>
                                <th scope="col" style="text-align: center;">WEB</th>
                                <th scope="col" style="text-align: center;">FIN</th>
                                {{--                                <th scope="col">EMAIL</th>--}}
                                <th scope="col" style="text-align: center;">SNS</th>
                                <th scope="col" style="text-align: center;">INFO</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <th>{{$contact->company_name }}</th>
                                    <td><a href="{{$contact->url}}">web</a></td>
                                    <td>{{$contact->financing_plan}}万円</td>
                                    {{--                                    <td><a href="{{$contact->company_email}}">email</a></td>--}}
                                    <td><a href="{{$contact->sns}}">sns</a></td>
                                    <td><a href="{{ route('ouchi.show',['id'=>$contact->id])}}">info</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
