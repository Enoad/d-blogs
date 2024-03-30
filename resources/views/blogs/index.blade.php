@extends('layouts.app')

@section('content')

 {{-- 日記作成ページへのリンク --}}                                                  
    <a class="btn btn-primary" href="{{ route('blogs.create') }}">新しい日記</a> 

    @if (isset($blogs))
        <table class="table table-zebra w-full my-4">
            <thead>
                <tr>
                    <th>作成日時</th>
                    <th>タイトル</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($blogs as $blog)
                <tr>
                    <td>{{ $blog->created_at }}</td>
                    <td><a class="link link-hover text-info" href="{{ route('blogs.show', $blog->id) }}">{{ $blog->title }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif

@endsection