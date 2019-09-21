
<!DOCTYPE html>
<html lang="uk">
@include('partials.head.head')
<body>
<div class="particle-network-animation-bg"></div>

@include('components.static-components.preloader')

@include('partials.head.header')

@include('components.slider.slider')


@include('components.static-components.top-information')


<!-- About us -->
@include('components.static-components.about-us')



<!-- News -->
<section id="news" class="news">
    <div class="container">
        <h2>Новини</h2>
        <div class="carousel-news" id="carousel-news"></div>
    </div>
</section>

@include('components.static-components.partners')


@include('partials.footer.footer')


<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
