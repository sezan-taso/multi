<x-tests.app>
	<x-slot name="header">ヘッダー１</x-slot>

	コンポーネント１

	<x-tests.card title="タイトル1" content="本文1" :message="$message" />
	<x-tests.card title="タイトル2" />
	<x-tests.card title="CSSを変更" class="bg-red-300"  />
</x-tests>