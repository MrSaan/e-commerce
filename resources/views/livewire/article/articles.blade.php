<div>
    @if ($post->count())
    <x-posts-grid :posts='$post' />

    @else
    <div class="text-center">
        Potingan belum ada coba kembali lagi nanti...
    </div>
    @endif
</div>