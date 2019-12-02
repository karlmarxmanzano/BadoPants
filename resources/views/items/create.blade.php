@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Item</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('item.store') }}">    
                        @csrf
                        @method('POST')
                        @include('item.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
