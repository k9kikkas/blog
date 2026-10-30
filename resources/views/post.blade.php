@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        @include('partials.post-card')
        @auth

            <form action="{{ route('comments.store', $post) }}" method="POST" enctype="multipart/form-data"
                class="card bg-base-300 shadow-sm w-2/3 mx-auto p-3">
                @csrf
                <fieldset class="fieldset">
                    <legend class="fieldset-legend font-bold text-lg">Add comment</legend>

                    <textarea name="body" class="textarea h-20 w-full @error('body') input-error @enderror" placeholder="Body">{{ old('body') }}</textarea>

                    @error('body')
                        <p class="label text-error">{{ $message }}</p>
                    @enderror
                </fieldset>

                <button type="submit" class="btn btn-primary">
                    Comment
                </button>
            </form>
        @endauth

        <h1>Comments:</h1>

        @foreach ($post->comments as $comment)
            <div class="card bg-base-100 shadow-sm mt-2">
                <div class="card-body">
                    <p>{{ $comment->body }}</p>
                    <span class="text-base-content/70">{{ $comment->user->name }}</span>
                    <span class="text-base-content/70">{{ $comment->created_at->diffForHumans() }}</span>
                </div>
            </div>
        @endforeach
    </div>
@endsection
