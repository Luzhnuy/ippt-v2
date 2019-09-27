
<!DOCTYPE html>
<html lang="uk">
@include('partials.head.head')
<body>
    <div class="particle-network-animation-bg"></div>

    <!-- Preloader -->
		@include('components.static-components.preloader')

    <!-- Header -->
    @include('partials.head.header')

    <!-- News page -->
    <div class="news-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <div class="container">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Головна</a></li>
                        <li class="breadcrumb-item"><a href="news-archive.php">Новини</a></li>
                        <li class="breadcrumb-item active">{{ $news->title }}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- News article -->
        <div class="news-article">
            <div class="container">
                <div class="news-content">
                    <article>
                        <h4>
                            {{ $news->title }}
                            <span class="news-date">{{ $news->data_add}}</span>
                        </h4>
                        <img src="{{ asset('/img/'.$news->img) }}" alt="{{ $news->title }}">

                        <p>{{ $news->text }}</p>
                    </article>
                    <div class="last-news">
                        <h3>Останні новини</h3>
                        <ul>
                            @foreach($lastNews as $new)
                            <li><a href="{{ route('newsDetails', ['id'=> $new->id ]) }}">{{ $new->title }}</a></li>
                            @endforeach
                        </ul>
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
