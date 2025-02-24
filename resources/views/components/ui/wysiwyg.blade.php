@props(['value' => '', 'name', 'height' => 400])

<div>
    <textarea id="ckeditor-{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'textarea']) }} >{!! $value !!}</textarea>
</div>

@push('scripts')
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create(document.querySelector('#ckeditor-{{ $name }}'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush

@push('styles')
    <style>
        .ck-editor__editable_inline {
            min-height: {{ $height }}px;
        }
    </style>
@endpush
