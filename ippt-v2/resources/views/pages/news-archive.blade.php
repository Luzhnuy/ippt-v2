
<!DOCTYPE html>
<html lang="uk">
@include('partials.head.head')
<body>
    <div class="particle-network-animation-bg"></div>

    <!-- Preloader -->
		@include('components.static-components.preloader')

    <!-- Header -->
    @include('partials.head.header')

    <!-- News archive page -->
    <div class="news-archive-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <div class="container">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Головна</a></li>
                        <li class="breadcrumb-item active">Новини</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Tabs -->
        <div class="tabs-container">
            <div class="container">
                <div class="tabs">
                    <ul class="tabs-caption">
                        <li class="active">Всі новини</li>
                        <li>Спорт</li>
                        <li>Наука</li>
                        <li>Зустрічі</li>
                        <li>Подорожі</li>
                        <li>"Весна та Осінь Політехніки"</li>
                    </ul>

                    <div class="tab-panel active">
                        <h4>Всі новини</h4>
                        @foreach($news as $new)
                        <div class="archive-news">
                            <a href="{{ route('newsDetails', ['id'=> $new->id ]) }}">
                                <div class="news-img">
                                  <img src="{{ asset('/img/'.$new->img) }}" alt="{{ $new->title }}">
                                </div>
                                <div class="news-info">
                                    <h3>{{ $new->title }}></h3>
                                    <p class="news-date">{{ $new->data_add }}</p>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>

                    <div class="tab-panel">
                        <h4>Спорт</h4>
                    </div>

                    <div class="tab-panel">
                        <h4>Наука</h4>
                    </div>

                    <div class="tab-panel">
                        <h4>Зустрічі</h4>
                    </div>

                    <div class="tab-panel">
                        <h4>Подорожі</h4>
                    </div>

                    <div class="tab-panel">
                        <h4>"Весна та Осінь Політехніки"</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>

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
