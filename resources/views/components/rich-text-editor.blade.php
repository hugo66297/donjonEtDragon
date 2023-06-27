<label for="{{ $id }}" class="block text-lg font-medium text-red-800 font-titleMiddleAge">
    {{ $label }}@if($required)<sup>*</sup>@endif
</label>
<div class="w-full mb-4 border border-gray-200 rounded-lg bg-gray-50">
    <div class="flex items-center justify-between p-2 border-b">
        <div class="flex flex-wrap items-center divide-gray-200 sm:divide-x">
            <div class="flex items-center space-x-1 sm:pr-4">
                <button
                    type="button"
                    id="paragraph"
                    class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100"
                    onclick="paragraphe('{{ $id }}')"
                >
                    <i class="fa-solid fa-paragraph"></i>
                    <span class="sr-only">Upload image</span>
                </button>
                <button
                    type="button"
                    class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100"
                    onclick="bold('{{ $id }}')"
                >
                    <i class="fa-solid fa-bold"></i>
                    <span class="sr-only">Upload image</span>
                </button>
                <button
                    type="button"
                    class="p-2 text-gray-500 rounded cursor-pointer hover:text-gray-900 hover:bg-gray-100"
                    onclick="list('{{ $id }}')"
                >
                    <i class="fa-solid fa-list-ul"></i>
                    <span class="sr-only">Upload image</span>
                </button>
            </div>
        </div>
    </div>
    <x-input
        id="{{ $id }}"
        name="{{ $name }}"
        type="textarea"
        placeholder="{{ $placeholder }}"
    />
</div>

<script>
    function paragraphe(id) {
        let content = '<p></p>'
        let textarea = document.querySelector('#' + id)

        textarea.value = textarea.value.slice(0, textarea.selectionStart) + content + textarea.value.slice(textarea.selectionStart)
    }

    function bold(id) {
        let content = '<strong></strong>'
        let textarea = document.querySelector('#' + id)

        textarea.value = textarea.value.slice(0, textarea.selectionStart) + content + textarea.value.slice(textarea.selectionStart)
    }

    function list(id) {
        let content = '<ul>\n<li></li>\n</ul>'
        let textarea = document.querySelector('#' + id)

        textarea.value = textarea.value.slice(0, textarea.selectionStart) + content + textarea.value.slice(textarea.selectionStart)
    }
</script>
