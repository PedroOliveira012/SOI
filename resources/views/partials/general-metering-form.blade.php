<h4>{{$kit->category[0]}}</h4><br>

<div class="kit-row">
    {{-- CIRCUIT BREAKER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[0]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[0]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[0]['desc'] }} - {{ $kit->set[0]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[0]['desc'] }}">
    @endif

    <input type="text" value="{{ $kit->set[0]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- CURRENT TRANSFORMER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[1]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    
    <select class="un-select">
        <option selected>{{ $kit->set[1]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if ($amps == 100)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][0] }} - {{ $kit->set[1]['code'][0] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][0] }}">
        @endif
    @elseif ($amps == 160)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][1] }} - {{ $kit->set[1]['code'][0] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][1] }}">
        @endif    
    @elseif ($amps == 250)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][2] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][2] }}">
        @endif    
    @elseif ($amps == 400)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][3] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][3] }}">
        @endif  
    @elseif ($amps == 630)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][4] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][4] }}">
        @endif 
    @elseif ($amps == 800)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][5] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][5] }}">
        @endif
    @elseif ($amps == 1000)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][6] }} - {{ $kit->set[1]['code'][2] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][6] }}">
        @endif
    @elseif ($amps == 1250)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][7] }} - {{ $kit->set[1]['code'][3] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][7] }}">
        @endif    
    @else
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][8] }} - {{ $kit->set[1]['code'][3] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][8] }}">
        @endif
    @endif
    <input type="text" value="{{ $kit->set[1]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- POTENCIAL TRANSFORMER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[2]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[2]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[2]['desc'] }} - {{ $kit->set[2]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[2]['desc'] }}">
    @endif

    <input type="text" value="{{ $kit->set[2]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- TEST BLOCK --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[3]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[3]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[3]['desc'] }} - {{ $kit->set[3]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[3]['desc'] }}">
    @endif

    <input type="text" value="{{ $kit->set[3]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- MINI CIRCUIT BREAKER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[7]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[7]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[7]['desc'] }} - {{ $kit->set[7]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[7]['desc'] }}">
    @endif

    <input type="text" value="{{ $kit->set[7]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- MINI CIRCUIT BREAKER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value="{{ $kit->set[8]['qntd'] }}" readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[8]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[8]['desc'] }} - {{ $kit->set[8]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[8]['desc'] }}">
    @endif
    
    <input type="text" value="{{ $kit->set[8]['manufacturer'] }}" class="manufacturer-field">
</div>

@for ($i = 1; $i < count($kit->set[9]['qntd']); $i++)
    {{-- CABLE --}}
    <div class="kit-row">
        <div class="d-flex align-items-center">
            <button class="btn btn-subtract">
                <i class="fa-solid fa-minus"></i>
            </button>
            <input class="disabled qntd-field text-center" value="{{ $kit->set[9]['qntd'][$i] }}" readonly>
            <button class="btn btn-add">
                <i class="fa-solid fa-plus"></i>
            </button>
        </div>

        <select class="un-select">
            <option selected>{{ $kit->set[9]['un'] }}</option>
            <option>m</option>
            <option>VB</option>
            <option>%</option>
            <option>BR</option>
            <option>kg</option>
            <option>CJ</option>
        </select>

        <input type="text" class="desc-field" value="{{ $kit->set[9]['desc'][$i-1] }}">

        <input type="text" value="{{ $kit->set[9]['manufacturer'] }}" class="manufacturer-field">
    </div>
@endfor

<div class="kit-row">
    {{-- ACCESSORIES --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value="{{ $kit->set[10]['qntd'] }}" readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[10]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    <input type="text" class="desc-field" value="{{ $kit->set[10]['desc'] }}">

    <input type="text" value="{{ $kit->set[10]['manufacturer'] }}" class="manufacturer-field">
</div>

<hr>

<h4>{{$kit->category[1]}}</h4><br>

<div class="kit-row">
    {{-- CIRCUIT BREAKER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[0]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[0]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[0]['desc'] }} - {{ $kit->set[0]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[0]['desc'] }}">
    @endif

    <input type="text" value="{{ $kit->set[0]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- CURRENT TRANSFORMER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[1]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>
    
    <select class="un-select">
        <option selected>{{ $kit->set[1]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if ($amps == 100)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][0] }} - {{ $kit->set[1]['code'][0] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][0] }}">
        @endif
    @elseif ($amps == 160)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][1] }} - {{ $kit->set[1]['code'][0] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][1] }}">
        @endif    
    @elseif ($amps == 250)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][2] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][2] }}">
        @endif    
    @elseif ($amps == 400)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][3] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][3] }}">
        @endif  
    @elseif ($amps == 630)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][4] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][4] }}">
        @endif 
    @elseif ($amps == 800)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][5] }} - {{ $kit->set[1]['code'][1] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][5] }}">
        @endif
    @elseif ($amps == 1000)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][6] }} - {{ $kit->set[1]['code'][2] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][6] }}">
        @endif
    @elseif ($amps == 1250)
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][7] }} - {{ $kit->set[1]['code'][3] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][7] }}">
        @endif    
    @else
        @if (isset($kit->set[1]['code']))
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][8] }} - {{ $kit->set[1]['code'][3] }}">
        @else
            <input type="text" class="desc-field" value="{{ $kit->set[1]['desc'][8] }}">
        @endif
    @endif
    <input type="text" value="{{ $kit->set[1]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- TEST BLOCK --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[3]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[3]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[3]['desc'] }} - {{ $kit->set[3]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[3]['desc'] }}">
    @endif

    <input type="text" value="{{ $kit->set[3]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- MINI CIRCUIT BREAKER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value={{ $kit->set[7]['qntd'] }} readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[7]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[7]['desc'] }} - {{ $kit->set[7]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[7]['desc'] }}">
    @endif

    <input type="text" value="{{ $kit->set[7]['manufacturer'] }}" class="manufacturer-field">
</div>

<div class="kit-row">
    {{-- MINI CIRCUIT BREAKER --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value="{{ $kit->set[8]['qntd'] }}" readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[8]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>

    @if (isset($kit->set[0]['code']))
        <input type="text" class="desc-field" value="{{ $kit->set[8]['desc'] }} - {{ $kit->set[8]['code'] }}">
    @else
        <input type="text" class="desc-field" value="{{ $kit->set[8]['desc'] }}">
    @endif
    
    <input type="text" value="{{ $kit->set[8]['manufacturer'] }}" class="manufacturer-field">
</div>

@for ($i = 0; $i < count($kit->set[9]['qntd']); $i++)
    
        {{-- CABLE --}}
        {{-- Skips the second element --}}
        @if ($i == 1)
            @continue
        @elseif ($i > 1)
            {{-- From the second element onwards, you need to subtract 1 from the index to syncronize with the desc --}}
        <div class="kit-row">
            <div class="d-flex align-items-center">
                <button class="btn btn-subtract">
                    <i class="fa-solid fa-minus"></i>
                </button>
                <input class="disabled qntd-field text-center" value="{{ $kit->set[9]['qntd'][$i] }}" readonly>
                <button class="btn btn-add">
                    <i class="fa-solid fa-plus"></i>
                </button>
            </div>

            <select class="un-select">
                <option selected>{{ $kit->set[9]['un'] }}</option>
                <option>m</option>
                <option>VB</option>
                <option>%</option>
                <option>BR</option>
                <option>kg</option>
                <option>CJ</option>
            </select>

            <input type="text" class="desc-field" value="{{ $kit->set[9]['desc'][$i-1] }}">
        
            <input type="text" value="{{ $kit->set[9]['manufacturer'] }}" class="manufacturer-field">
        </div>
        @else
            {{-- This is the first iteraction so the qntd and desc are syncrinized --}}
            <div class="kit-row">
                <div class="d-flex align-items-center">
                    <button class="btn btn-subtract">
                        <i class="fa-solid fa-minus"></i>
                    </button>
                    <input class="qntd-field text-center" value="{{ $kit->set[9]['qntd'][$i] }}" readonly>
                    <button class="btn btn-add">
                        <i class="fa-solid fa-plus"></i>
                    </button>
                </div>

                <select class="un-select">
                    <option selected>{{ $kit->set[9]['un'] }}</option>
                    <option>m</option>
                    <option>VB</option>
                    <option>%</option>
                    <option>BR</option>
                    <option>kg</option>
                    <option>CJ</option>
                </select>

                <input type="text" class="desc-field" value="{{ $kit->set[9]['desc'][$i] }}">
            
                <input type="text" value="{{ $kit->set[9]['manufacturer'] }}" class="manufacturer-field">
            </div>
        @endif
@endfor

<div class="kit-row">
    {{-- ACCESSORIES --}}
    <div class="d-flex align-items-center">
        <button class="btn btn-subtract">
            <i class="fa-solid fa-minus"></i>
        </button>
        <input class="disabled qntd-field text-center" value="{{ $kit->set[10]['qntd'] }}" readonly>
        <button class="btn btn-add">
            <i class="fa-solid fa-plus"></i>
        </button>
    </div>

    <select class="un-select">
        <option selected>{{ $kit->set[10]['un'] }}</option>
        <option>m</option>
        <option>VB</option>
        <option>%</option>
        <option>BR</option>
        <option>kg</option>
        <option>CJ</option>
    </select>
    
    <input type="text" class="desc-field" value="{{ $kit->set[10]['desc'] }}">

    <input type="text" value="{{ $kit->set[10]['manufacturer'] }}" class="manufacturer-field">
</div>