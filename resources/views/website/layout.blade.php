<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>
<body>

<nav>
    <ul>
        <li><a href="{{route('website.index')}}" @if ($page == 'index')
            style="opacity: 70%"
        @endif
        >Home</a></li>

        <li><a style="color: #7ed679;font-weight: bolder" href="{{route('website.4K')}}" 
            @if ($page == 'fourkMovies')
                style="opacity: 70%"
            @endif
            >4K</a></li>

        <li><a href="{{route('website.trending')}}"
            @if ($page == 'trending')
                style="opacity: 70%"
            @endif
            >Trending</a></li>

        <li><a href="{{route('website.browse')}}"
            @if ($page == 'browse')
                style="opacity: 70%"
            @endif
            >Browse</a></li>

        <li><a href="{{route('website.suggestion')}}"
            @if ($page == 'suggestion')
                style="opacity: 70%"
            @endif
            >Suggestions</a></li>

        <li><a href="{{route('website.bookmarks')}}"
            @if ($page == 'bookmarks')
                style="opacity: 70%"
            @endif
            >Bookmarks</a></li>

        <li><a href="{{route('website.register')}}"
            @if ($page == 'register')
                style="opacity: 70%"
            @endif
            >Register</a></li>
    </ul>
</nav>



@yield('content')



<footer>
    <div class="footer-left">&#9886;MoviesLand&#9887;</div>
    <div class="footer-center">MoviesLand Created By: &#x2133;ohamed Ennara</div>
    <div class="footer-right">
        <a href="#">Facebook</a>
        <a href="#">Twitter</a>
        <a href="#">Instagram</a>
        <a href="#">YouTube</a>
    </div>
</footer>

</body>
</html>
