@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('あなたの体重') }}</div>
                <div class="card-body mx-auto" style="height: 300px;">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    
                    ここに1ヶ月の体重増減遷移グラフを表示
                    
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center mt-3">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('新しい記録を作成') }}</div>
                <div class="card-body mx-auto">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
    
                    <button class="btn btn-primary" style="margin-right: 5px">食事を記録</button>
                    <button class="btn btn-primary" style="margin-right: 5px" @click="openModal">今日の体重を記録</button>
                    <button class="btn btn-primary">過去の記録を確認</button>
                </div>
            </div>
        </div>
        
    </div>
    <Modal ref="modal"></Modal>

</div>

@endsection