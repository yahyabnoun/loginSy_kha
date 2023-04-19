@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <div class="d-flex  flex-wrap justify-content-between">
                            @foreach ($users as $user)
                                <div class="card  col-5 m-3 ">
                                    <div class="card-body d-flex  align-items-center">
                                        <div class="col-9 ms-lg-3 mx-1">
                                            <figure>

                                                <blockquote class="blockquote mb-4">
                                                    <p> title : {{ $user->title }} </p>
                                                </blockquote>
                                                <blockquote class="blockquote mb-4">
                                                    <p>description : {{ $user->description }} </p>
                                                </blockquote>
                                                <blockquote class="blockquote mb-4">
                                                    <p>durée : {{ $user->durée }} </p>
                                                </blockquote>

                                            </figure>
                                            {{-- <a href="{{route('employe_detail',$employe->id)}}" class="btn btn-secondary">Détails</a> --}}
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
