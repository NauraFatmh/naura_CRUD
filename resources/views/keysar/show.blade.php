@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card p-3">
                    <div class="group">
                        <h5>{{ $keysar->nama }}</h5>
                        <h5>{{ $keysar->dkr }}</h5>
                    </div>
                    <div class="group">
                        <a href="{{ route('keysar.index') }}" class="btn btn-success">Back</a>
                        <a href="{{ route('keysar.edit', $keysar->id) }}" class="btn btn-secondary">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
