@extends('index.index')

@section('content')
<div class="container">
    <h1 class="m-5">{{ $kit->area }}</h1>

        <div class="d-flex justify-content-center mt-20">
            <div class="mb-5 w-100">      
                <div class="tab-vertical d-flex justify-content-center">
                    <div class="tabs-div">
                        <ul class="nav nav-tabs overflow-y-scroll" id="myTab3" role="tablist">
                        @foreach ($kit->set as $set)
                            <li class="nav-item">
                                <a class="nav-link text-center" id="home-vertical-tab" data-toggle="tab" href="#{{ $set['item'] }}-tab" role="tab" aria-controls="home" aria-selected="true">
                                   {{ $set['item'] }}
                                </a>
                            </li>
                        @endforeach
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent3">
                        <div class="tab-pane show active tab-pane-placeholder" role="tabpanel" aria-labelledby="home-vertical-tab">
                            <p>Selecione um kit para a edição</p>
                        </div>
                    @foreach ($kit->set as $index => $set)
                        <div class="tab-pane show" id="{{ $set['item'] }}-tab" role="tabpanel" aria-labelledby="home-vertical-tab">
                            @include("partials.{$kit->name}-form", [
                                'kit' => $kit, 
                                'set' => $set, 
                                'index' => $index
                            ])
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection