@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Category</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('category.store') }}">    
                        @csrf
                        @method('POST')
                        @include('category.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
