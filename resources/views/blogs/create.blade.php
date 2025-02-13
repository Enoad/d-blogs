@extends('layouts.app')

@section('content')


    <div class="flex justify-center">
        
        
        <form method="POST" action="{{ route('blogs.store') }}" class="w-1/2">
            @csrf
                <div class="form-control my-4">
                    <label for="title" class="label">
                        <span class="label-text">タイトル:</span>
                    </label>
                    <input type="text" name="title" class="input input-bordered w-full">
                </div>
                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">内容:</span>
                    </label>
                    <textarea name="content" class="input input-bordered w-full" rows="10"></textarea>
                </div>

            <button type="submit" class="btn btn-primary btn-outline">投稿</button>
        </form>
    </div>
@endsection

