@props([
    'type' => 'text',
    'id' => '#',
    'label' => '$label',
    'column' => '$column',
    'action' => '',
    'options' => [],
    'optionKey' => 'id',
    'optionName' => '',
    'multi' => false,
])

<div class="form-element-wrapper">
    <label for="{{$id}}">{{$label}}</label>
    
    <select name="{{$column}}" 
        id="{{$id}}"
        {{$action}}>
    
        <option>Select</option>
        @foreach ($options as $option)
            <option value="{{$option[$optionKey]}}">{{$option[$optionName]}}</option>
        @endforeach
    </select>
    @error($column)<p class="error">{{$message}}</p>@enderror
</div>

