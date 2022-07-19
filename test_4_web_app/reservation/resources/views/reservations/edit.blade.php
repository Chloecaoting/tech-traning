@extends('layouts.app_original')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('reservations.update', $reservation->id) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group">
                    <label>Topic</label>
                    <input type="text" class="form-control" value="{{ $reservation->topic }}" name="topic">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" rows="5" name="content">{{ $reservation->content }}</textarea>
                </div>
                <div class="form-group">
                    <label>Metting</label>
                    <input type="text" class="form-control" value="{{ $reservation->metting }}" rows="5" name="metting">
                </div>
                <button type="submit" class="btn btn-primary">更新する</button>
            </form>
        </div>
    </div>
</div>
@endsection
