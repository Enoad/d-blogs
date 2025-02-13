@extends('layouts.app')

@section('content')

<table class="table w-full my-4">
        <tr>
            <th>title</th>
            <td>{{ $blog->title }}</td>
        </tr>

        <tr>
            <th>内容</th>
            <td>{!! nl2br(e($blog->content)) !!}</td>
        </tr>
    </table>

<div class="flex justify-end">
{{-- 日記編集ページへのリンク --}}
    <a class="btn btn-outline" href="{{ route('blogs.edit', $blog->id) }}">日記を修正する</a>
</div>

@endsection