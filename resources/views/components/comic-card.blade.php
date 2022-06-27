<div class="card">
    <div class="img-container">
        <img src="{{ $src }}" alt="{{ $title }}">
    </div>
    <a href="{{ route('comic', ['id' => $id]) }}">{{ $title }}</a>
</div>
