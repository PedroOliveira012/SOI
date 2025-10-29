<div class="d-flex justify-content-evenly">
    @if (is_array($kit->category))
        @foreach ($kit->category as $category)
            <h4>{{$category}}</h4>
        @endforeach
    @else
        <h4>{{ $kit->category }}</h4><br>
    @endif
</div>
<hr>
<form action="{{ url('kits/update', $kit->_id) }}" method="POST">
    @csrf
    @method('PUT')
    {{-- Quantity --}}
    <div class="set-row">
        <p class="set-p">Qntd</p>
        {{-- If the content of $set['qntd'] is an array, "transform" into a string --}}
        @if (is_array($set['qntd']))
            @php
                $itemQty = $set['qntd'];
                $strQty = implode(', ', $itemQty);
            @endphp
            <textarea name="desc" class="qty-textarea">{{ $strQty }}</textarea>
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
            <option selected>{{ $set['un'] }}</option>
            <option>m</option>
            <option>VB</option>
            <option>%</option>
            <option>BR</option>
            <option>kg</option>
            <option>CJ</option>
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
                $strDesc = implode(', ', $itemDesc);
            @endphp
            <textarea name="desc" class="desc-textarea">{{ $strDesc }}</textarea>
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
        @if (is_array($set['code']))
            @php
                $itemCode = $set['code'];
                $strCode = implode(', ', $itemCode);
            @endphp
            <textarea name="code" class="code-textarea">{{ $strCode }}</textarea>
        @else
        {{-- Otherwise, the value is kept --}}
            <input class="code-input" value="{{ $set['code'] }}" name="code">
        @endif
    </div>

    <hr>
    {{-- Manufacturer --}}
    <div class="set-row">
        <p class="set-p">Fabricante</p>
        <input type="text" value="{{ $set['manufacturer'] }}" class="manufacturer-field" name="manufacturer">
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
    