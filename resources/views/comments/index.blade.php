@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Comentários</div>

                    <div class="card-body">
                        <form action="{{ route('comments.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <textarea name="comment" class="form-control" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">Lista de Comentários</div>

                    <div class="card-body">
                        @foreach($comments as $comment)
                            <div class="mb-3">
                                <strong>{{ $comment->user->name }}</strong> <br>
                                {{ $comment->comment }} <br>
                                <small>{{ $comment->created_at->diffForHumans() }}</small>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
