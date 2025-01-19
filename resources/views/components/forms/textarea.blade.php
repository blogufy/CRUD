@props([
    'id' => '#',
    'label' => '$label',
    'column' => '$column',
    'action' => '',
])

<div class="form-element-wrapper">
    <label for="{{$id}}">{{$label}}</label>
    <textarea name="{{$column}}" 
        id="{{$id}}" 
        cols="30" 
        rows="10"
        {{$action}}></textarea>
    @error($column)<p class="error">{{$message}}</p>@enderror
</div>

