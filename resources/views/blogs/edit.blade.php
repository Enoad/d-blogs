@extends('layouts.app')

@section('content')

 <div class="flex justify-center">
        <form method="POST" action="{{ route('blogs.update', $blog->id) }}" class="w-1/2">
            @csrf
            @method('PUT')
                
                <div class="form-control my-4">
                    <label for="title" class="label">
                        <span class="label-text">タイトル:</span>
                    </label>
                    <input type="text" name="title" value="{{ $blog->title }}" class="input input-bordered w-full">
                </div>

                <div class="form-control my-4">
                    <label for="content" class="label">
                        <span class="label-text">内容:</span>
                    </label>
                    <input type="text" name="content" value="{{ $blog->content }}" class="input input-bordered w-full">
                </div>

            <button type="submit" class="btn btn-primary btn-outline">修正</button>
            
                     {{-- 日記削除フォーム --}}
               <form method="POST" action="{{ route('blogs.destroy', $blog->id) }}" class="my-2">
                   @csrf
                   @method('DELETE')
        
                   <button type="submit" class="btn btn-error btn-outline" 
                    onclick="return confirm('この日記を削除します。よろしいですか？')">削除</button>
                </form>
            
        </form>
        
   
    </div>
@endsection