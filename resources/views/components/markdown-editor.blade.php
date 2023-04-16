@props(['id', 'title', 'name'])

<label for="{{$id}}" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
    {{ $title }}
</label>
<textarea id="{{$id}}" name="{{$name}}" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800" placeholder="Je suis convaincu...">{{ old($name) ?? "" }}</textarea>

<script>
    new EasyMDE({
        hideIcons: ['fullscreen', 'side-by-side', 'guide', 'image', 'link', 'ordered-list', 'quote'],
        spellChecker: false,
        maxHeight: '200px',
        showIcons: ['table', 'heading-1', 'heading-2', 'heading-3'],
        element: document.getElementById({!! json_encode($id) !!})});
</script>
