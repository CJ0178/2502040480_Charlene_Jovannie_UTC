@extends('layout.master')
@section('title', 'Home Page')

@section('content')
<div class="container mx-auto">
    @foreach ($books as $book)
    <a href="/detail/{{$book->id}}" class="mt-4">
        <div class="w-full rounded overflow-hidden shadow-lg my-12 border-8 border-blue-500">
            <div class="px-16 py-4 inline-flex">
                <img src="{{ $book->image }}" alt="" class="h-80">
                <div class="px-16">
                    @include('layout.highlightHeader')
                    <h1 class="font-bold text-[2.5vw] my-5">{{ $book->title }}</h1>
                    <p class="text-gray-700 text-base">
                        {{ $book->Detail->description }}
                    </p>
                </div>
            </div>
        </div>
    </a>
    @break
    @endforeach
</div>

<div class="container mx-auto border-8 border-blue-500 p-5">
    @include('layout.latestHeader')
    <div class="grid grid-cols-4">
        @foreach ($latestBooks as $book)
        <a href="/detail/{{$book->id}}" class="mt-4">
            <div class="max-w-sm">
                <div class="px-6 py-4">
                    <img src="{{ $book->image }}" alt="" class="h-80">
                    {{-- <div class="px-16"> --}}
                        <h1 class="font-bold text-base my-5">{{ $book->title }}</h1>
                        <p class="text-gray-700 text-sm">
                            {{ $book->Detail->description }}
                        </p>
                    {{-- </div> --}}
                </div>
            </div>
        </a>
        @endforeach
    </div>
</div>

<div class="container mx-auto border-8 border-blue-500 p-5 my-16">
    @include('layout.seriesHeader')
    <div class="grid grid-cols-3">
        @php
            $count = 0;
        @endphp
        @foreach ($books as $book)
        @if ($count < 3)
        <a href="/detail/{{$book->id}}" class="mt-4">
            <div class="max-w-sm">
                <div class="px-6 py-4">
                    <img src="{{ $book->image }}" alt="" class="h-80">
                        <h1 class="font-bold text-base my-5">{{ $book->title }}</h1>
                        <p class="text-gray-700 text-sm">
                            {{ $book->Detail->description }}
                        </p>
                </div>
            </div>
        </a>
            @php
                $count++;
            @endphp
        @else
            @break
        @endif
        @endforeach
    </div>
</div>
@endsection
