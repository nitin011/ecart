@section('header_styles')
    <script src="//code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <link href="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
<div class="row row-sm mg-b-20">
    <div class="col-lg-6">
        <label class="control-label">Title</label>
        {!! Form::text('title', isset($email_template) ? $email_template->title : '', ['class' => 'form-control', 'placeholder' => 'Title',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Title is required'] ) !!}
    </div>
    <div class="col-lg-6">
        <label class="control-label">Subject</label>
        {!! Form::text('subject', isset($email_template) ? $email_template->subject : '', ['class' => 'form-control', 'placeholder' => 'Subject',
                    'data-validation' => 'required', 'data-validation-error-msg' => 'Subject is required'] ) !!}
    </div>
</div>
<div class="row row-sm mg-b-20">
    <div class="col-lg-6">
        <label class="control-label">Action</label>
        <select name="action" id="action" class='form-control'
                data-validation='required'
                data-validation-error-msg='Action is required'>
            <option> Select Action</option>
            @foreach(\App\Models\EmailTemplates::EMAIL_ACTION as $key=> $title)
                <option value="{{ $key }}"
                    {{ ($formMode == 'Edit' && $email_template->action == $key) ?'selected':'' }}>
                    {{ $title }}
                </option>
            @endforeach
        </select>
    </div>
    <div class="col-lg-6">
        @foreach(config('emailVariables') as $eKey=> $emailVariablesGroup)
            <div class="row">
                <div class="col-md-12">
                    @if($loop->first)
                        <dl class="bg-black-1 mb-0 mx-0 row">
                            <dt class="col-md-5"><label>Key</label></dt>
                            <dd class="col-md-7"><label>Value</label></dd>
                        </dl>
                    @endif
                    @foreach($emailVariablesGroup as $key=> $description)
                        <dl class="row mb-0 {{ $eKey }} actionKeysGroups {{ ($formMode == 'Edit' && $email_template->action == $key) ?'selected':'d-none' }}">
                            <dt class="col-md-5">{{ $key }}</dt>
                            <dd class="col-md-7">{{ $description }}</dd>
                        </dl>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
<div class="row row-sm mg-b-20">
    <div class="col-lg-12 ">
        <label class="control-label">Template Content</label>
        <textarea class="form-control wysiwyg_editor" rows="5"
                  name="content">{!! isset($email_template) ? $email_template['content'] : '' !!}</textarea>
    </div>
</div>
<div class="form-group mb-0 text-right">
    <button type="submit" class="btn btn-primary px-5">{{ $formMode }}</button>
</div>
@section('scripts')
    <script src="//stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.wysiwyg_editor').summernote();
            $(document).on('change', '#action', function () {
                $('.actionKeysGroups').addClass('d-none');
                var action = $(this).val();
                $('.' + action).removeClass('d-none');
            });
        });
    </script>
@endsection
