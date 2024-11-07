@extends('layout.app')

@section('content')
    <main>
        <div class="container p-5">
            <div class="row">
                @foreach ($writers as $writer)
                    <div class="col-md-4 mb-4">
                        <div class="card">
                            <img src="{{ asset($writer->WriterImage) }}" class="card-img-top" style="height: 300px; object-fit: cover;">
                            <div class="card-body">
                                <h5 class="card-title">{{ $writer->WriterName }}</h5>
                                <p class="card-text">{{ $writer->WriterSpesialis }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>
@endsection