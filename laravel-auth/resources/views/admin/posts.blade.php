@extends('layouts.app')

@section('content')
<section>

    

    <div class="container-card row justify-content-around">
        @forelse($posts as $post)
        <div class="card col-3">
            <div class="card-header ">
                <h2>{{ $post->nome }} {{ $post->cognome }}</h2>
            </div>

            <div class="card-body">
                <h5>{{ $post->nazionalita }}</h5>
            </div>
        </div>
        @empty
        @endforelse
    </div>

</section>
@endsection