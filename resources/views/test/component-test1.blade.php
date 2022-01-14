<!-- コンポーネントの指定 -->
<!-- resorce/views/componentsから見たパス -->

<!-- x- tests/app.blade.php -->
<x-tests.app>
  <x-slot name="header">
    header 1
  </x-slot>
  コンポーネントテスト１
<x-tests.card title="タイトル" content="本文" :message="$controllMessage" />

<!-- propsで初期値を設定したコンポーネント -->
<x-tests.card title="タイトル2" />
<x-tests.card title="タイトル3:cssの変更" class="bg-red-300" />
</x-tests.app>
