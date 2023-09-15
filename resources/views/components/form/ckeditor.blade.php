@props([
    'id',
    'value' => null
])

<x-form.holder class="mt-4">
    <x-form.label for="{{ $id }}" value="توضیحات پادکست"/>
    <div class="h-2"></div>
    <textarea id="{{ $id }}" name="{{ $id }}">{{ old($id, $value) }}</textarea>
</x-form.holder>

<script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
<script src="https://cdn.ckeditor.com/4.17.1/standard-all/ckeditor.js"></script>

<script type="text/javascript">
    var config = {
        height: 356,
        removeButtons: 'PasteFromWord',
        contentsLangDirection: 'rtl',
        filebrowserUploadUrl: "{{route('ckeditor.image-upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    };
    CKEDITOR.addCss("pre{direction: ltr;}");
    CKEDITOR.addCss(".cke_editable {font-family: 'Vazir';}");

    CKEDITOR.replace('{{ $id }}', config);
</script>
