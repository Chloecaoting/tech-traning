@extends('layouts.app_original')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <form action="{{ route('reservations.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Topic</label>
                    <input type="text" class="form-control" placeholder="Topic" name="topic">
                </div>
                <div class="form-group">
                    <label>Content</label>
                    <textarea class="form-control" placeholder="Content" rows="5" name="content"></textarea>
                </div>
                <div class="form-group">
                    <label>Metting</label>
                    <input type="text" class="form-control" placeholder="Metting" rows="5" name="metting">
                </div>
                <button type="submit" class="btn btn-primary">作成</button>
            </form>
        </div>
    </div>
</div>
@endsection
