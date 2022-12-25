@props([
	'title',
	'message' => '初期値',
	'content' => '初期値'
])

<div {{ $attributes->merge([
	'class' => 'border-2 shadow-md p-2'
]) }}>
	<div>{{ $title }}</div>
	<div>画像</div>
	<div>{{ $content }}</div>
	<div>{{ $message }}</div>
</div>
