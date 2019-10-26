<!DOCTYPE html>
<html lang="uk">
@include("partials.head.head")

<body>
    <div class="particle-network-animation-bg"></div>

		<!-- Preloader -->
		@include('components.static-components.preloader')

		<!-- Header -->
		@include('partials.head.header')

		<header id="header" class="header">
		    <div class="container">
		        <div class="row no-gutters justify-content-between align-items-center">
		            <div class="logo">
		                <a href="{{ route('main') }}" title="Головна">
		                    <img src="{{ asset("/img/logo.png")}}" alt="logo">
		                    <span>Інститут підприємництва та перспективних технологій</span>
		                </a>
		            </div>

		            <button class="navbar-toggle" id="navbar-toggle">
		                <span class="nav-line"></span>
		                <span class="nav-line"></span>
		                <span class="nav-line"></span>
		            </button>

		            <nav id="navbar">
		                <ol class="navbar-collapse" id="navbar-collapse">
		                    <li class="nav-item">
		                        <a href="{{ route('main') }}">Головна</a>
		                    </li>
		                    <li class="nav-item active">
		                        <a href="{{ route('entrant') }}">Вступнику</a>
		                    </li>
		                    <li class="nav-item ">
		                        <a href="student.php">Студенту</a>
		                    </li>
		                    <li class="nav-item">
		                        <a href="{{ route('news') }}">Новини</a>
		                    </li>
		                </ol>
		            </nav>

		        </div>
		    </div>
		</header>


    <!-- Entrant page -->
    <div class="entrant-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <div class="container">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Головна</a></li>
                        <li class="breadcrumb-item active">Вступнику</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Tabs -->
        <div class="tabs-container">
            <div class="container">
                <div class="tabs">
                    <ul class="tabs-caption">
                        <li>Загальна інформація</li>
                        <li>Спеціальності</li>
                        <li>Умови вступу</li>
                        <li>Ліцензія на надання освітніх послуг</li>
                        <li>Вартість навчання</li>
                        <li>Розклад роботи Приймальної (відбіркової) комісі</li>
                        <li>Підготовка до вступу</li>
                        <li>Запитання/Відповіді</li>
                    </ul>

                    <div class="tab-panel active">
                        <h4>Загальна інформація</h4>
                        <p class="text-bold">Інститут здійснює підготовку фахівців на денній та заочній формах навчання за освітніми рівнями:</p>
						<ul>
							<li> <span class="text-bold text-italic text-green">молодший спеціаліст</span>  (спеціальності: “Комп’ютерні науки”, “Облік і оподаткування”, "Фінанси, банківська справа та страхування" і "Маркетинг");</li>
							<li> <span class="text-bold text-italic text-green">бакалавр</span> (спеціальності: “Комп’ютерні науки”, “Облік і оподаткування”, “Маркетинг” та “Фінанси, банківська справа та страхування”);</li>
							<li> <span class="text-bold text-italic text-green">магістр</span> (спеціальності: "Комп’ютерні науки" (ОПП - ”Комп’ютерний еколого-економічний моніторинг”); “Фінанси, банківська справа та страхування” (ОПП - “Фінанси, банківська справа та                                         страхування”)).</li>
						</ul>
						<p>Запрошуємо випускників середніх загальноосвітніх навчальних закладів та вищих навчальних закладів І та ІІ рівнів акредитації здобути освіту в навчально-науковому Інституті підприємництва та перспективних технологій  Національного університету "Львівська політехніка", яка відповідає вимогам сьогодення!</p>

						<h6 class="text-slogan">ЧЕРЕЗ НАВЧАННЯ ДО УСПІХУ !</h6>
                    </div>

                    <div class="tab-panel">
                        <h4>Спеціальності</h4>
						<p>Перелік освітніх ступенів та спеціальностей, за якими оголошується прийом на навчання у 2018 році, конкурсні предмети, вступні іспити</p>

						<table class="table">
							<thead class="thead-blue">
								<tr>
									<th scope="col">Спеціальність</th>
									<th scope="col">Спеціалізація <br> (освітня програма)</th>
									<th scope="col">Конкурсні предмети <br> (вступні іспити)</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row" colspan="3">Бакалавр</th>
								</tr>
								<tr>
									<td scope="row">Комп’ютерні науки</td>
									<td>Комп’ютерні науки</td>
									<td>Українська мова та література, математика, <br> фізика (або історія України), іноземна мова</td>
								</tr>
								<tr>
									<td scope="row">Фінанси, банківська справа та страхування</td>
									<td>Фінанси, банківська справа та страхування</td>
									<td>Українська мова та література, математика, <br> географія (або історія України), іноземна мова</td>
								</tr>
								<tr>
									<td scope="row">Маркетинг</td>
									<td>Маркетинг</td>
									<td>Українська мова та література, математика, <br> географія (або фізика), іноземна мова</td>
								</tr>
									<td scope="row">Облік і оподаткування</td>
									<td>Облік і оподаткування</td>
									<td>Українська мова та література, математика, <br> географія (або фізика), іноземна мова</td>
								</tr>
                                <tr>
									<th scope="row" colspan="3">Магістр</th>
								</tr>
								<tr>
									<td scope="row">Комп’ютерні науки</td>
									<td>Комп'ютерний еколого-економічний моніторинг</td>
									<td>Фаховий іспит; іноземна мова</td>
								</tr>
								<tr>
									<td scope="row">Фінанси, банківська справа та страхування</td>
									<td>Фінанси, банківська справа та страхування</td>
									<td>Українська мова та література, математика, <br> географія (або історія України), іноземна мова</td>
                                </tr>
                                <tr>
									<th scope="row" colspan="3">Молодший спеціаліст</th>
								</tr>
								</tr>
									<td scope="row">Комп’ютерні науки</td>
									<td>Комп’ютерні науки</td>
									<td>Українська мова, математика</td>
								</tr>
								</tr>
									<td scope="row">Фінанси, банківська справа та страхування</td>
									<td>Фінанси, банківська справа та страхування</td>
									<td>Українська мова, математика</td>
								</tr>
								</tr>
									<td scope="row">Маркетинг</td>
									<td>Маркетинг</td>
									<td>Українська мова, математика</td>
								</tr>
								</tr>
									<td scope="row">Облік і оподаткування</td>
									<td>Облік і оподаткування</td>
									<td>Українська мова, математика</td>
								</tr>
							</tbody>
                        </table>

                        <p><span class="text-bold">Обов'язкова</span> наявність <span class="text-bold">сертифікатів</span>. Програми вступних випробувань із загальноосвітніх предметів відповідають програмам середніх загальноосвітніх навчальних закладів.</p>
                    </div>

                    <div class="tab-panel">
                        <h4>Умови вступу</h4>
						<ul>
							<li><a target="_blank" href="http://lp.edu.ua/pryymalna-komisiya/pravyla-pryyomu" class="text-green">Правила прийому в 2019 році (бакалавр та магістр)</a></li>
						    <li>
							    <a target="_blank" href="{{ asset('/pdf/Правила_МС_04.02.19_цілі.pdf') }}" class="text-green">Правила прийому в 2019 році (молодший спеціаліст)</a>
                                <ul>
                                    <li><a target="_blank" href="{{ asset('/pdf/programa_z_ukr_mova_na_osnovi_9_klasu_2018.pdf') }}" class="text-green">Програма вступного випробування з української мови</a></li>
                                    <li><a target="_blank" href="{{ asset('/pdf/programa_z_matematiki_na_osnovi_9_klasu__2018.pdf') }}" class="text-green">Програма вступного випробування з математики</a></li>
                                </ul>
						    </li>
							<li><a target="_blank" href="http://lp.edu.ua/magistry" class="text-green">Умови вступу для магістрів</a></li>
							<li><a target="_blank" href="http://lp.edu.ua/bakalavram" class="text-green">Умови вступу для бакалаврів</a></li>
							<li><a target="_blank" href="http://lp.edu.ua/sites/default/files/attach/2016/172/pravyla_mc_ippt18222.pdf" class="text-green">Умови вступу для молодших спеціалістів</a></li>
						</ul>

						<p class="text-bold">Додатки до Правил прийому:</p>
						<p>ОС «Бакалавр», «Магістр»</p>
						<ul>
							<li><a target="_blank" href="{{ asset('/pdf/Додаток_1н_19_ІППТ_нов.pdf') }}" class="text-green">Додаток 1. (ІППТ) Перелік освітніх ступенів та спеціальностей, за якими оголошується прийом на навчання, ліцензовані обсяги, терміни</a></li>
							<li><a target="_blank" href="{{ asset('/pdf/ДОДАТОК 3.7_ІППТ (1).pdf') }}" class="text-green">Додаток 3. (ІППТ) Перелік спеціальностей та вступних випробувань для прийому на навчання осіб, які здобули ОКР молодший  спеціаліст</a></li>
							<li><a target="_blank" href="{{ asset('/pdf/Додаток 4 2019_ІППТ.pdf') }}" class="text-green">Додаток 4. (ІППТ) Перелік спеціальностей, вступних випробувань для прийому на навчання для здобуття освітнього ступеню магістра</a></li>
							<li><a target="_blank" href="{{ asset('/pdf/Додаток_5н_19_ІППТ_нов.pdf') }}" class="text-green">Додаток 5. (ІППТ) Перелік конкурсних предметів у сертифікаті Українського центру оцінювання якості освіти</a></li>
						</ul>
						<p>ОКР «Молодший спеціаліст»</p>
						<ul>
							<li><a target="_blank" href="{{ asset('/pdf/Dodatok_1_MC_IPPT_26-06-18.pdf') }}" class="text-green">Додаток 1. (ІППТ) Перелік освітніх ступенів та спеціальностей, за якими оголошується прийом на навчання, ліцензовані обсяги, терміни</a></li>
							<li><a target="_blank" href="http://www.lp.edu.ua/sites/default/files/attach/2016/172/dodatok_5_ippt_2018.pdf" class="text-green">Додаток 5. (ІППТ) Перелік конкурсних предметів </a></li>
						</ul>

						<p class="text-bold">Для подачі заяви необхідно мати:</p>
						<ul>
							<li class="text-italic">копію документа державного зразка про раніше здобутий освітній (освітньо-кваліфікаційний) рівень, на основі якого здійснюється вступ, і додаток до нього;</li>
							<li class="text-italic">копію сертифіката відповідного рівня зовнішнього незалежного оцінювання (для вступників на основі повної загальної середньої освіти);</li>
							<li class="text-italic">копію документа, що посвідчує особу та громадянство;</li>
							<li class="text-italic">копію довідки ДПА про присвоєння ідентифікаційного номера;</li>
							<li class="text-italic">чотири кольорові фотокартки розміром 3х4 см.</li>
						</ul>
                    </div>

                    <div class="tab-panel">
                        <h4>Ліцензія на надання освітніх послуг</h4>
						<p>У приєднаних файлах:</p>
						<ul>
							<li><a target="_blank" href="http://lp.edu.ua/pryymalna-komisiya/licenziya-na-nadannya-osvitnih-poslug" class="text-green">Відомості про здійснення освітньої діяльності у сфері вищої освіти. <br> Національний університет «Львівська політехніка».</a></li>
							<li><a target="_blank" href="{{ asset('/pdf/Витяг Ліцензія на надання освітніх послуг ІППТ.pdf') }}" class="text-green">Витяг з Ліцензії на надання освітніх послуг. <br> Інститут підприємництва та перспективних технологій Національного університету «Львівська політехніка».</a></li>
						</ul>
                    </div>

                    <div class="tab-panel">
                        <h4>Вартість навчання</h4>
						<ul>
							<li><a target="_blank" href="{{ asset('/pdf/ВАРТІСТЬ НАВЧАННЯ_МС_2018_26-06-18.pdf') }}" class="text-green">Вартість підготовки фахівців ОКР «Молодший спеціаліст» для студентів, зарахованих на навчання в 2019 році.</a></li>
							<li><a target="_blank" href="{{ asset('/pdf/ІППТ_Бакалаври_магістри_денна_2018_26-06-18.pdf') }}" class="text-green">Вартість підготовки фахівців ОС «Бакалавр», «Магістр» для студентів, зарахованих на навчання в 2019 році (Денна форма навчання).</a></li>
							<li><a target="_blank" href="{{ asset('/pdf/ІППТ_Бакалаври_магістри_заочна_2018_26-06-18.pdf') }}" class="text-green">Вартість підготовки фахівців ОС «Бакалавр», «Магістр» для студентів, зарахованих на навчання в 2019 році (Заочна форма навчання).</a></li>
						</ul>
                    </div>

                    <div class="tab-panel">
                        <h4>Розклад роботи Приймальної (відбіркової) комісії</h4>
						<table class="table table-bordered table-hover"> <!--  table-responsive -->
							<thead class="thead-blue">
								<tr>
									<th scope="col">ТЕРМІН</th>
									<th scope="col">ДНІ ТИЖНЯ</th>
									<th scope="col">ГОДИНИ</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td scope="row">02 липня – 10 серпня <br> 2019 року</td>
									<td>Понеділок – п’ятниця <br> Субота <br> Неділя</td>
									<td>9:00 - 13:00; 14:00 - 18:00 <br> 9:00 - 13:00 <br> Вихідний</td>
								</tr>
								<tr>
									<td scope="row">11 серпня – 31 серпня <br> 2019 року</td>
									<td>Понеділок – п’ятниця <br> Субота <br> Неділя</td>
									<td>9:00 - 13:00; 14:00 - 17:00 <br> Вихідний <br> Вихідний</td>
								</tr>
							</tbody>
						</table>
                    </div>

                    <div class="tab-panel">
                        <h4>Підготовка до вступу</h4>
						<p>Зразки тестових завдань для вступу на ОКР «Молодший спеціаліст»:</p>
						<ul>
							<li><a target="_blank" href="{{ asset('/pdf/variant_1.pdf') }}" class="text-green">Варіант 1</a></li>
							<li><a target="_blank" href="{{ asset('/pdf/variant_2.pdf') }}" class="text-green">Варіант 2</a></li>
						</ul>
                    </div>

                    <div class="tab-panel">
                        <h4>Запитання/Відповіді</h4>
						<p><a target="_blank" href="https://mon.gov.ua/ua/osvita/visha-osvita/vstupna-kampaniya-2018/poshirenni-zapitannya-vidpovidi-pro-vstup-2018" class="text-green">Поширені запитання – відповіді про вступ 2019</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

		@include('partials.footer.footer')

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Network animation -->
    <script src="sources/js/network-animation.js"></script>

		<script src="{{ asset('/slick/slick.min.js') }}"></script>
		<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
