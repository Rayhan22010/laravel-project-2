@extends('backend.layout.backend_master')

@section('page-css')
@endsection

@section('content')

<main id="main" class="main">
    <div class="container">
        <div class="align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Contact</h1>
        </div>
        <div class="row mt-5 table-responsive small">
            <table class="table table-striped table-sm">
                <thead class="thead-light">
                    <tr>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Message</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($value as $data)
                    <tr>
                        <td>{{$data->name}}</td>
                        <td>{{$data->email}}</td>
                        <td>{{$data->subject}}</td>
                        <td style="width: 12rem">{{$data->message}}</td>
                        <td>
                            <a href="{{route('backend_contact.delete',$data->id)}}" class="btn btn-danger btn-sm"><i class="bi bi-trash3"></i></a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>

            </table>
        </div>
    </div>
</main>
@endsection

@section('page-js')

@endsection
