@extends('layout.master')
@section('title', 'Detail Page')
@section('content')
    <div class="container mx-auto">
        <h2 class="text-5xl font-bold py-12">
            {{$book->title}}
        </h2>
        <h2>
            {{$book->Detail->description}}
        </h2>
        <div class="inline-flex gap-5">
            <h2>
                By {{ $book->Detail->author }} | {{ $book->created_at->format('d M, Y')}}
            </h2>
            <p class="bg-yellow-200">{{ $book->reading_time }}</p>
        </div>

        <img src="{{ $book->image }}" alt="" class="w-full">
        <p>
            {{$book->Detail->description}}
        </p>
        <br>
        <p>
            {{$book->Detail->description}}
        </p>
    </div>
@endsection
