<!DOCTYPE html>
<html lang="uk">
@include('partials.head.head')
<body>
    <div class="particle-network-animation-bg"></div>

    <!-- Preloader -->
		@include('components.static-components.preloader')

    <!-- Header -->
    @include('partials.head.header')

    <!-- Carousel Banner -->
    <section id="banner" class="banner">
        <div class="carousel-banner" id="carousel-banner">

            @foreach ($slides as $slide)
                <div class="carousel-banner-item">
                    <div class="carousel-banner-item__text">
                        <div class="vertical-align">
                            <h5>{{ $slide->heading }}</h5>
                            <a class="btn btn-trsp" href="{{ $slide->url }}">Переглянути</a>
                        </div>
                    </div>
                    <img class="carousel-banner-item__img img" src="{{ asset('/img/'.$slide->img) }}" alt="{{ $slide->heading }}">
                </div>
            @endforeach

        </div>
    </section>

    <!-- Top information -->
    <section id="top-information" class="top-information">
        <div class="info-position">
            <div class="container">
                <ul class="top-info-list">
                    <li><a href="#">Умови вступу 2019</a></li>
                    <li><a href="#">Результати вступних екзаменів</a></li>
                    <li><a href="#">Розклад</a></li>
                    <li><a href="projects.php">Проекти</a></li>
                    <li><a href="http://vns.lpnu.ua">ВНС</a></li>
                </ul>
            </div>
        </div>
    </section>

    <!-- About us -->
    <section id="about-us" class="about-us">
        <div class="container">
            <h2>Інформація про нас</h2>
            <div class="about-us-container">
                <div class="about-us-item">
                    <a href="about-us.php">
                        <div class="about-us-icon institut-icon"></div>
                        <span>Про інститут</span>
                    </a>
                </div>
                <div class="about-us-item">
                    <a href="education-science.php">
                        <div class="about-us-icon education-science-icon"></div>
                        <span>Освіта та Наука</span>
                    </a>
                </div>
                <div class="about-us-item">
                    <a href="student_college/student-college.php">
                        <div class="about-us-icon student-college-icon"></div>
                        <span>Студентська колегія</span>
                    </a>
                </div>
                <div class="about-us-item">
                    <a href="gallery.php">
                        <div class="about-us-icon gallery-icon"></div>
                        <span>Галерея</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- News -->
    <section id="news" class="news">
        <div class="container">
            <h2>Новини</h2>
            <div class="carousel-news" id="carousel-news">
										@foreach ($news as $new)
                        <div class="news-item">
                            <a href="{{ route('newsDetails', ['id'=> $new->id ]) }}">
                                <img src="{{ asset('/img/'.$new->img) }}" alt="{{ $new->title }}">
                                <h3>{{ $new->title }}</h3>
                            </a>
                        </div>
										@endforeach
            </div>
        </div>
    </section>

    <!-- Partners -->
    <section id="partners" class="partners">
        <div class="container">
            <div class="row no-gutters justify-content-between">
                <a href="http://lp.edu.ua/" target="_blank">
                    <img src="sources/img/partners/6.png" alt="LvivPolytechnic">
                </a>
                <a href="http://mon.gov.ua/" target="_blank">
                    <img src="sources/img/partners/3.png" alt="MON">
                </a>
                <a href="http://city-adm.lviv.ua/" target="_blank">
                    <img src="sources/img/partners/1.png" alt="LvivCityCouncil">
                </a>
                <a href="http://vnz.org.ua" target="_blank">
                    <img src="sources/img/partners/2.png" alt="LvivOblAdmin">
                </a>
            </div>
		</div>
    </section>

    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer-contacts">
                <a href="index.php" title="Головна">
                    <img src="{{ asset('/img/logo.png') }}" alt="logo">
                </a>
                <div>
                    <span><span>Адреса:</span> 79044, м. Львів, </span>
                    <span>вул. Горбачевського, 18, 32-й н.к.</span>
                </div>
                <div>
                    <span><span>Тел:</span> (+38032) 297-07-55, </span>
                    <span>(+38032) 258-20-27б</span>
                </div>
                <div>
                    <span><span>E-mail:</span> PPT.dept@lpnu.ua, </span>
                    <span>dir.ippt@gmail.com</span>
                </div>
            </div>
            <div class="copyright">
                &copy; 2019 Інститут підприємництва та перспективних технологій НУ "Львівська політехніка"
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <script src="{{ asset('/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>


</body>
</html>
