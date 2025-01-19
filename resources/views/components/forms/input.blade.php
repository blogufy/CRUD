@props([
    'type' => 'text',
    'id' => '#',
    'label' => '$label',
    'column' => '$column',
    'action' => '',
])

<div class="form-element-wrapper">
    <label for="{{$id}}">{{$label}}</label>
    <input type="{{$type}}"
        id="{{$id}}"
        name="{{$column}}"
        {{$action}}
    />
    @error($column)<p class="error">{{$message}}</p>@enderror
</div>

