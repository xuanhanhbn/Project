<div>
    <label>{{$label}}</label>
    <input type="{{$type}}" value="{{isset($value)?$value:old($key)}}" name="{{$key}}"
           @if($required) required @endif>
    @error($key)
    <p>{{$message}}</p>
    @enderror
</div>
