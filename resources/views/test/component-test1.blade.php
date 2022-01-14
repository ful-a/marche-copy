<!-- コンポーネントの指定 -->
<!-- resorce/views/componentsから見たパス -->

<!-- x- tests/app.blade.php -->
<x-tests.app>
  <x-slot name="header">
    header 1
  </x-slot>
  <!-- {{ $slot ?? '' }}の中に値が入る -->
  コンポーネントテスト１
<x-tests.card title="タイトル" content="本文" :message="$controllMessage" />
</x-tests.app>
