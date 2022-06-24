@props(['name'])

@error($name)
<p class="text-red-500 text-ms">{{ $message }}</p>
@enderror