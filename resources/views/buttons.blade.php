@extends('partials.layout')
@section('content')
    <button type="button" class="border-2 text-white bg-blue-400">Hello</button>
    
    <button class="btn btn-primary">Click me!</button>
    
    
    <button type="button"
        class="bg-blue-500 hover:bg-blue-600 active:bg-blue-700 w-22 h-9 text-white rounded-md">Primary</button>
    <button type="button"
        class="bg-red-600 hover:bg-red-700 active:bg-red-800 w-22 h-9 text-white rounded-md">Danger</button>
    <button type="button"
        class="bg-yellow-300 hover:bg-yellow-400 active:bg-yellow-500 w-22 h-9 rounded-md">Warning</button>
@endsection
