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

                    {{ __('Bienvenido admin!') }}
                </div>
            </div>
            <a href="{{ url('/cosas') }}" class="text-sm text-gray-700 underline">Instagram</a>
        </div>
    </div>
</div>
@endsection
