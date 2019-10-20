@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Item</div>
                <div class="card-body">
                    <form method="POST" action="{{ route('item.update', $item) }}">    
                        @csrf
                        @method('PATCH')
                        @include('item.form')
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
