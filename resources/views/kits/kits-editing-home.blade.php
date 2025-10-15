@extends ('index.index')

@section('content')

<div class="container">
    <h1 class="m-5 text-center">Edição dos Kits</h1>
    @foreach ($kits as $kit)

    <a href="{{ url('/kits-editing/'.$kit->_id) }}">
        <div class="kit-card p-4 mb-4">
            <div class="kit-area ">
                <h2>{{ $kit->area }}</h2>
                @if (is_array($kit->category))     
                    @foreach ($kit->category as $category)
                        <p>{{ $category }}</p>
                    @endforeach
                @else
                    <p>{{ $kit->category }}</p>
                @endif
            </div>
            <div class="range-guide ">
                <p class="">{{ implode(', ', $kit->rangeAmperes) }}</p>
            </div>
            <div class="">
                <i class="fa-solid fa-chevron-right fa-2xl ms-4" style="color: #00aac0;"></i>
            </div>
        </div>
    </a>
    @endforeach
</div>

@endsection