@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-18">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="GET" action="{{ route('ouchi.create') }}">
                            <button type="submit" class="btn btn-primary">
                                新規登録
                            </button>
                        </form>

                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">COMPANY</th>
                                <th scope="col">WEB</th>
                                <th scope="col">FINANCE</th>
                                <th scope="col">NUMBER</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">SNS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <th>{{$contact->company_name }}</th>
                                    <td><a href="{{$contact->url}}">web</a></td>
                                    <td>{{$contact->financing_plan}}</td>
                                    <td>{{$contact->company_number}}</td>
                                    <td>{{$contact->company_email}}</td>
                                    <td><a href="{{$contact->sns}}">sns</a></td>
                                    <td><a href="{{ route('ouchi.show',['id'=>$contact->id])}}">INFOMATION</a></td>
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
