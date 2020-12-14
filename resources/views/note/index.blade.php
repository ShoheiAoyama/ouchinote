@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form method="GET" action="{{ route('note.create') }}">
                            <button type="submit" class="btn btn-primary">
                                新規登録
                            </button>
                        </form>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">COMPANY</th>
                                <th scope="col">WEBSITE</th>
                                <th scope="col">STAFF</th>
                                <th scope="col">EMAIL</th>
                                <th scope="col">NUMBER</th>
                                <th scope="col">SNS</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <th>{{$contact->company_name }}</th>
                                    <td>{{$contact->url}}</td>
                                    <td>{{$contact->person_name}}</td>
                                    <td>{{$contact->company_number}}</td>
                                    <td>{{$contact->company_email}}</td>
                                    <td>{{$contact->sns}}</td>
                                    <td><a href="{{ route('note.show',['id'=>$contact->id])}}">INFOMATION</a></td>
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
