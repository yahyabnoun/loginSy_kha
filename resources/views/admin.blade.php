@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <form action="{{ route('ajuotertash') }}" method="get" class=" ">
                            <div class="mb-3">
                                <label for="employees" class="form-label">employees :</label>
                                <select name="employe" id="employees" class="form-select mb-3"
                                    aria-label="Default select example">
                                    {{-- <option selected>Open this select menu</option> --}}
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                                    @endforeach
                                </select>
                                <label for="exampleFormControlInput1" class="form-label">Title :</label>
                                <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                                    placeholder="ecrire">
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                                <textarea name="Description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>
                            <input class="btn btn-primary" type="submit">
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
