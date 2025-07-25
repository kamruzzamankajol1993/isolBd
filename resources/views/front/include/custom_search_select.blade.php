<div class="custom-select-wrapper">
    <div class="custom-select-display">{!! $prompt !!}</div>
    <div class="custom-select-options">
        <input type="text" class="custom-select-search" placeholder="Search...">
        <ul class="custom-select-list">
            @foreach($list as $item)
                <li data-value="{{ $item->id }}">{{ $item->name }}</li>
            @endforeach
        </ul>
    </div>
    <select class="d-none" id="{{ $id }}" name="{{ $name }}">
        <option value="" disabled selected hidden></option>
        @foreach($list as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
</div>