
@if(!empty($setting->field))
@switch($setting->field['type'])
    @case('text')
    <input type="text" name="settings[{{ $setting->key }}]" class="{{ $setting->field['classes']??null }}"
           value="{{ $setting->value }}">
    @break
    @case('file')
    <input type="file" name="settings[{{ $setting->key }}]" class="{{ $setting->field['classes']??null }}"
           value="{{ $setting->value }}">
    <a href="{{ public_path().$setting->value }}"><i class="fa fa-external-link"></i></a>
    @break
    @case('image')
    <input type="file" name="settings[{{ $setting->key }}]" value="{{ $setting->value }}">
    <a href="{{ $setting->file_url }}" target="_blank">
        <i class="fa fa-external-link"></i>
    </a>
    <img src="{{ $setting->file_url }}" alt="{{ $setting->title }}" height="100">
    @break
    @case('number')
    <input type="number" name="settings[{{ $setting->key }}]" class="{{ $setting->field['classes']??null }}"
           value="{{ $setting->value }}">
    @break
    {{--@case('radio')
    @foreach(json_decode($setting->value) as $value)
        <label for="{{ $value->key }}">{{ $value->name }}</label>
        <input type="radio" id="{{ $value->key }}"
               name="{{ $value->key }}" {{ !$value->active??'checked' }}>
    @endforeach
    @break
    @case('checkbox')
    @foreach(json_decode($setting->value) as $value)
        <label for="{{ $value->key }}">{{ $value->name }}</label>
        <input type="checkbox" id="{{ $value->key }}"
               name="{{ $value->key }}" {{ !$value->active??'checked' }}>
    @endforeach
    @break
    @case('select')
    <select name="{{ $value->input->name }}" id="{{ $value->input->key }}">
        @foreach($value->input->options as $option)
            <option
                value="{{ $option->value }}">{{ $option->title??$option->value }}</option>
        @endforeach
    </select>
    @break--}}
    @case('textArea')
    <a href="#modal-{{ $setting['key'] }}" class="modal-effect btn btn-dark btn-block" data-toggle="modal"
       data-effect="effect-scale"><i class="fa fa-edit"></i> Edit</a>

    <!-- MODAL EFFECTS -->
    <div id="modal-{{ $setting['key'] }}" class="modal">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content modal-content-demo">
                <div class="modal-header">
                    <h6 class="modal-title">{{ $setting->title }}</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <label for="{{ $setting->key }}">{{ $setting->title }}</label>
                    <textarea class="{{ $setting->field['classes'] }}" id="{{ $setting->key }}"
                              row="{{ $setting->field['rows'] }}"
                              name="settings[{{ $setting->key }}]">{!! $setting->value !!}</textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-indigo">Save changes</button>
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div><!-- modal-dialog -->
    </div><!-- modal -->
    @break
    @case('textEditor')
    {!! 'TextEditor' !!}
    @break
@endswitch
@endif