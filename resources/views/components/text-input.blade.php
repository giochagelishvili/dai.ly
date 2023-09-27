@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => ' border-none bg-gray-200 rounded-lg ']) !!}>
