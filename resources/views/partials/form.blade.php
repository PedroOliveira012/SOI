<div>
    @if (is_array($kit->category))
        @php
            $categories = implode(' - ', $kit->category);
        @endphp
        <h4 class=" text-center">{{ $categories }}</h4><br>
    @else
        <h4 class=" text-center">{{ $kit->category }}</h4><br>
    @endif
</div>
<hr>
{{-- <form action="{{ url('kits/update/'.$kit->_id.'/'.$index) }}" method="POST"> --}}
<form method="POST" action="{{ route('kits-update', ['kit' => $kit->_id, 'index' => $index]) }}">
    @csrf
    @method('PUT')
    {{-- Quantity --}}
    <div class="set-row">
        <p class="set-p">Qntd</p>
        {{-- If the content of $set['qntd'] is an array, "transform" into a string --}}
        @if (is_array($set['qntd']))
            @php
                $itemQty = $set['qntd'];
                $strQty = implode("\n", $itemQty);
            @endphp
            <textarea name="qty" class="qty-textarea focus-ring focus-ring-info" rows="{{count($kit->set[$index]['qntd'])}}">{{ $strQty }}</textarea>
        @else
        {{-- Otherwise, the value is kept --}}
            <input class="qty-input text-center" value="{{ $set['qntd'] }}" name="qty">
        @endif
    </div>

    <hr>
    {{-- Unit --}}
    <div class="set-row">  
        <p class="set-p">Un.</p>
        <select class="un-select form-select" name="un">
            <option selected hidden value="{{ $set['un'] }}">{{ $set['un'] }}</option>
            <option value="PÇ">PÇ</option>
            <option value="m">m</option>
            <option value="VB">VB</option>
            <option value="%">%</option>
            <option value="BR">BR</option>
            <option value="kg">kg</option>
            <option value="CJ">CJ</option>
        </select>
    </div>

    <hr>
    {{-- Description --}}
    <div class="set-row">
        <p class="set-p">Descrição</p>
        {{-- If the content of $set['desc'] is an array, "transform" into a string --}}
        @if(is_array($set['desc']))
            @php
                $itemDesc = $set['desc']; 
                $strDesc = implode("\n", $itemDesc);
            @endphp
            <textarea name="desc" class="desc-textarea" rows="{{count($kit->set[$index]['desc'])}}">{{ $strDesc }}</textarea>
        @else
        {{-- Otherwise, the value is kept --}}
            <input class="desc-input" value="{{ $set['desc'] }}" name="desc">
        @endif
    </div>

    <hr>
    {{-- Code --}}
    <div class="set-row">
        <p class="set-p">Código</p>
        {{-- If the content of $set['code'] is an array, "transform" into a string --}}
        @if ($set['code'] && is_array($set['code']))
            @php
                $itemCode = $set['code'];
                $strCode = implode("\n", $itemCode);
            @endphp
            <textarea name="code" class="code-textarea" rows="{{count($kit->set[$index]['code'])}}">{{ $strCode }}</textarea>
        @else
        {{-- Otherwise, the value is kept --}}
            <input class="code-input" value="{{ $set['code'] }}" name="code">
        @endif
    </div>

    <hr>
    {{-- Manufacturer --}}
    <div class="set-row">
        <p class="set-p">Fabricante</p>
        <input type="text" value="{{ $set['manufacturer'] }}" class="manufacturer-input" name="manufacturer">
    </div>

    <hr>
    {{-- Save button --}}
    <div class="d-flex justify-content-center w-100">
        <button type="submit" class="btn btn-success save-button">
            <i class="fa-solid fa-floppy-disk"></i>
            Salvar
        </button>
    </div>
</form>
