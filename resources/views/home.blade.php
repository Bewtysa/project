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

                    {{ __('ยินดีต้องรับเข้าสู่ระบบ')

                     }}
                    <div>
                    <h1>
                    <a href="{{ url('/student' ) }}" <button type="button" class="btn btn-primary">viwe student </button></a>
                     </h1></div>
                      
                </div>
            </div>
            
        </div>
    </div>
</div>
@endsection
