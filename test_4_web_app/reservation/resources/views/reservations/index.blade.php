@extends('layouts.app_original')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    予約一覧
                </div>
                @foreach($reservations as $reservation)
                <div class="card-body">
                    <h5 class="card-title">Topic: {{ $reservation -> topic }}</h5>
                    <p class="card-text">
                    Content: {{ $reservation -> content }}
                    </p>
                    <p class="card-text">予約者: Tomさん</p>
                    <div style="text-align: center;">
                        <a href="{{ route('reservations.edit', $reservation->id)}}" class="btn btn-primary " style="display: inline-block;">編集</a>
                        <form action="{{ route('reservations.destroy', $reservation->id)}}" method='POST'  style="display: inline-block; padding-left: 20px;">
                            @csrf
                            @method('delete')
                            <button class="btn btn-primary" type="submit" onclick="return confirm('削除しますか？')">削除</button>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    予約日時: {{ $reservation -> created_at }}
                </div>
                @endforeach
            </div>
        </div>
        <div class="col-md-2">
            @if (Route::has('reservations.create'))
                <a class="btn btn-primary" href="{{ route('reservations.create') }}">
                    {{ __('新規予約') }}
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
