@extends('admin.layouts.master')

@section('content')

    <div class="container-fluid px-4">
        <h1 class="mt-4">Title</h1>
    </div>

    

    <div>
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
@endsection