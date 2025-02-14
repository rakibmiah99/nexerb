@php
    $mode = $attributes->get('mode') ?? 'horizontal'; //vertical,horizontal
    $name = $attributes->get('name');
    $size = $attributes->get('size');
    $title = $attributes->get('title');
    $after_label = $attributes->get('after-label');
    $value = $attributes->get('value');
    $min = $attributes->get('min');
    $max = $attributes->get('max');
    $rows = $attributes->get('rows');
    $cols = $attributes->get('cols');
    $type = $attributes->get('type') ?? "text";
    $input_size = "";
    $label_size = "";
    if ($mode == "horizontal"){
        $input_size = $attributes->get('input-size') ?? 'col-md-10';
        $label_size = $attributes->get('label-size') ?? 'col-md-2';
    }

    $required = $attributes->get('required') ?? false;
    $readonly = $attributes->get('readonly') ?? false;
    $disabled = $attributes->get('disabled') ?? false;

@endphp
<div class="mb-3 {{$mode == 'horizontal' ? 'row' : '' }}" >
    <label @if($size) style="font-size: 10px"  @endif for="{{$name}}" class="{{ $label_size  }} col-form-label">
        {{$title}}
        @php echo $after_label; @endphp
        @if($required)
            <x-required/>
            <x-input-error name="{{$name}}"/>
        @endif
    </label>
    <div class="{{$input_size}} ">
        @if($type != "text-area")
            <input
                @if($required) required @endif
                @if($readonly) readonly @endif
                @if($disabled) disabled @endif
                class="form-control {{$size}}" name="{{$name}}"
                type="{{$type}}"
                value="{{$value}}"
                id="{{$name}}"
                @if($min) min="{{$min}}" @endif
                @if($max) max="{{$max}}" @endif
            >
        @else
            <textarea
                @if($required) required @endif
                @if($readonly) readonly @endif
                @if($disabled) disabled @endif
                class="form-control {{$size}}" name="{{$name}}"
                id="{{$name}}"
                @if($rows) rows="{{$rows}}" @endif
                @if($cols) cols="{{$cols}}" @endif
            >{!! $value !!}</textarea>
        @endif
    </div>
</div>
