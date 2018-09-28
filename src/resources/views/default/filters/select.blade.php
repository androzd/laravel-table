<div class="form__element form__element_filter_select @if($error) form__element_error @endif">
    <label>{{$label}}</label>
    <div class="form__element-container">
        <select name="f_{{$name}}" class="form-control">
            <option></option>
            @foreach ($options as $key => $option)
                <option value="{{$key}}" @if ($value == $key) selected @endif>{{$option}}</option>
            @endforeach
        </select>
        <div class="form__feedback">{{$error}}</div>
    </div>
</div>
