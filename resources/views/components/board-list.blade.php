<div {{ $attributes->merge(['class' => 'text-white text-xl flex flex-col']) }}>
    @foreach ($boards as $board)
        <a href="/board/{{ $board->slug }}">{{ $board->name }}</a>
    @endforeach
</div>
