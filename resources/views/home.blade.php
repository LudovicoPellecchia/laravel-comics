@extends("layouts.mainLayout")

@section("title", "Laravel-Comics - Homepage")

@section("content")
<div class="container">
    <h1 class="text-center">Laravel-Comics</h1>

    @foreach ($comics as $singleComic )
    <ul>
        <li>@dump($singleComic)</li>
    </ul>

    @endforeach

</div>
@endsection