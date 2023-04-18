@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('ダッシュボード') }}</div>
                <div class="card-body mx-auto">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <!-- {{ __('You are logged in!') }} -->
                    <button class="btn btn-primary" style="margin-right: 5px">食事を記録</button>
                    <button class="btn btn-primary" style="margin-right: 5px">今日の体重を記録</button>
                    <button class="btn btn-primary">過去の記録を確認</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
