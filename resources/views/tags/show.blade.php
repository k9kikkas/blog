@extends('partials.layout')
@section('content')
    <div class="container mx-auto">
        <a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
        <div class="card bg-base-300 shadow-sm">
            <table class="table table-zebra">
                <tbody>
                    <tr>
                        <th>Name</th>
                        <td>{{ $tag->name }}</td>
                    </tr>
                </tbody>
                
            </table>
        </div>
    </div>
@endsection
