@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <div class="group">
                        <h5>{{ $kategori->nama }}</h5>
                        <h5>{{ $kategori->dkr }}</h5>
                    </div>
                    <div class="group">
                        <a href="{{ route('kategori.index') }}" class="btn btn-success">Back</a>
                        <a href="{{ route('kategori.edit', $kategori->id) }}" class="btn btn-secondary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
