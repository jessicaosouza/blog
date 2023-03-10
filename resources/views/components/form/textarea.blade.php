@props(['name'])
<x-form.field>
    <x-form.label name="{{$name}}" />
    <textarea class="border border-gray-200 p-2 w-full focus:outline-none focus:ring rounded"
        type="text"
        name="{{$name}}"
        id=""
        required
    >{{ $slot ?? old($name) }}</textarea>

    <x-form.error name="{{$name}}" />
</x-form.field>