@foreach ($movies as $movie)
    <div>
        <img src="{{ $movie->cover_image }}" alt="{{ $movie->title }}">
        <p>{{ $movie->title }}</p>
    </div>
@endforeach
