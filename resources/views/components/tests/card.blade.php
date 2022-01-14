@props([
  'title',
  'content' => 'コンテンツの初期値',
  'message' => 'メッセージの初期値',
])
<div {{ $attributes->merge([
  'class' => 'border-2 shadow-md p-2 w-1/4'
  ]) }}>
  <div>{{ $title }}</div>
  <div>画像</div>
  <div>{{ $content }}</div>
  <div>{{ $message }}</div>
</div>
