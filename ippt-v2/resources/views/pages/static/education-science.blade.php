<!DOCTYPE html>
<html lang="uk">
@include("partials.head.head")
<body>
    <div class="particle-network-animation-bg"></div>

    <!-- Preloader -->
		@include('components.static-components.preloader')

		<!-- Header -->
		@include('partials.head.header')

    <!-- Education and Science page -->
    <div class="education-science-page">
        <!-- Breadcrumb -->
        <div class="breadcrumb-container">
            <div class="container">
                <nav>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.php">Головна</a></li>
                        <li class="breadcrumb-item active">Освіта та Наука</li>
                    </ol>
                </nav>
            </div>
        </div>

        <!-- Tabs -->
        <div class="tabs-container">
            <div class="container">
                <div class="tabs">
                    <ul class="tabs-caption">
                        <li>Освітні програми</li>
                        <li>Наукові конференції</li>
                    </ul>

                    <div class="tab-panel active">
                        <h4>Освітні програми</h4>
                        <h5>Магістр:</h5>
						<ul>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Комп’ютерний еколого-економічний моніторинг"</p>
								<p>
									другого (магістерського) рівня вищої освіти <br>
									за спеціальністю 122 «Комп’ютерні науки» <br>
									Галузь знань: 12 «Інформаційні технології» <br>
									Кваліфікація: магістр з комп’ютерних наук  за спеціалізацією <br>
									«Комп’ютерний еколого-економічний моніторинг» <br>
									<a target="_blank" href="sources/pdf/education_science_2.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Фінанси, банківська справа та страхування"</p>
								<p>
									першого (магістерського) рівня вищої освіти <br>
									за спеціальністю 072 «Фінанси, банківська справа та страхування» <br>
									Галузь знань: 07 «Управління та адміністрування» <br>
									Кваліфікація: магістра з фінансів, банківської справи та страхування <br>
									<a target="_blank" href="sources/pdf/ОПП БАКАЛАВР 072.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
						</ul>

						<h5>Бакалавр:</h5>
						<ul>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Комп’ютерні науки"</p>
								<p>
									першого (бакалаврського) рівня вищої освіти <br>
									за спеціальністю 122 «Комп’ютерні науки» <br>
									Галузь знань: 12 «Інформаційні технології» <br>
									Кваліфікація: бакалавр з комп’ютерних наук <br>
									<a target="_blank" href="sources/pdf/education_science_1.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Фінанси, банківська справа та страхування"</p>
								<p>
									першого (бакалаврського) рівня вищої освіти <br>
									за спеціальністю 072 «Фінанси, банківська справа та страхування» <br>
									Галузь знань: 07 «Управління та адміністрування» <br>
									Кваліфікація: бакалавр з фінансів, банківської справи та страхування <br>
									<a target="_blank" href="sources/pdf/ОПП БАКАЛАВР 072.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Маркетинг"</p>
								<p>
									першого (бакалаврського) рівня вищої освіти <br>
									за спеціальністю 075 «Маркетинг» <br>
									Галузь знань: 07 «Управління та адміністрування» <br>
									Кваліфікація: бакалавр з маркетингу <br>
									<a target="_blank" href="sources/pdf/ОПП_бакал_маркетинг_читати більше.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Облік і оподаткування"</p>
								<p>
									першого (бакалаврського) рівня вищої освіти <br>
									за спеціальністю 071 «Облік і оподаткування» <br>
									Галузь знань: 07 «Управління та адміністрування» <br>
									Кваліфікація: бакалавр з обліку і оподаткування <br>
									<a target="_blank" href="sources/pdf/ОП-_ОА_14.02.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
						</ul>

						<h5>Молодший спеціаліст:</h5>
						<ul>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Комп’ютерні науки"</p>
								<p>
									молодшого спеціаліста <br>
									за спеціальністю 122 «Комп’ютерні науки» <br>
									Кваліфікація: молодший спеціаліст з  комп’ютерних наук <br>
									<a target="_blank" href="sources/pdf/education_science_3.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Фінанси, банківська справа та страхування"</p>
								<p>
									молодшого спеціаліста <br>
									за спеціальністю 072 «Фінанси, банківська справа та страхування» <br>
									Кваліфікація: молодший спеціаліст з фінансів, банківської справи та страхування <br>
									<a target="_blank" href="sources/pdf/ОКХ МОЛОДШИЙ СПЕЦІАЛІСТ 072.pdf" class="text-green text-italic">Читати більше інформації</a> <br>
									<a target="_blank" href="sources/pdf/ОПП МОЛОДШИЙ СПЕЦІАЛІСТ 072.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Маркетинг"</p>
								<p>
									молодшого спеціаліста <br>
									за спеціальністю 075 «Маркетинг» <br>
									Кваліфікація: молодший спеціаліст з маркетингу <br>
									<a target="_blank" href="sources/pdf/ОПП_мол_спеціал_читати_більше.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
							<li>
								<p class="text-bold">Освітньо-професійна програма <br> "Облік і оподаткування"</p>
								<p>
									молодшого спеціаліста <br>
									за спеціальністю 071 «Облік і оподаткування» <br>
									Кваліфікація: молодший спеціаліст з  обліку і оподаткування <br>
									<a target="_blank" href="sources/pdf/#file.pdf" class="text-green text-italic">Читати більше інформації</a>
								</p>
							</li>
						</ul>
                    </div>

                    <div class="tab-panel">
                        <h4>Наукові конференції</h4>
                        <h5>Міжнародні конференції:</h5>
						<ul>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/pro-instytut/konferentsii/midnarodni/1014-miznarodna-konferencia-oc-2.php" class="text-green">Міжнародна науково-практична конференція</a>
							</li>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/pro-instytut/konferentsii/midnarodni/603-miznarodna-konferencia-oc.php" class="text-green">Міжнародна конференція «Інвестиції в збереження нерухомих об’єктів ...</a>
							</li>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/pro-instytut/konferentsii/midnarodni/451-ukrayino-polskyy-kruhlyy-stil.php" class="text-green">УКРАЇНО-ПОЛЬСЬКИЙ КРУГЛИЙ СТІЛ</a>
							</li>
						</ul>

						<h5>Міжвузівські конференції:</h5>
						<ul>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/pro-instytut/konferentsii/migvuzivski/1041-naukovo-tekhnichna-konferentsiia-naukovo-pedahohichnykh-pratsivnykiv-5.php" class="text-green">XІІI науково-практична конференція (27 - 31 березня 2017 р.)</a>
							</li>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/pro-instytut/konferentsii/migvuzivski/997-naukovo-tekhnichna-konferentsiia-naukovo-pedahohichnykh-pratsivnykiv-4.php" class="text-green">XІI науково-практична конференція (4 - 8 квітня 2016 р.)</a>
							</li>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/pro-instytut/konferentsii/migvuzivski/930-naukovo-tekhnichna-konferentsiia-naukovo-pedahohichnykh-pratsivnykiv-3.php" class="text-green">XІ науково-практична конференція (30 березня - 4 квітня 2015 р.)</a>
							</li>
						</ul>

						<h5>Студентські конференції:</h5>
						<ul>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/images/conference/stud/progr_2016.pdf" class="text-green">74-а студентська науково-технічна конференція ІППТ </a>
							</li>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/images/conference/stud/program_2014.pdf" class="text-green">72-а студентська науково-технічна конференція ІППТ </a>
							</li>
							<li>
								<a target="_blank" href="http://ippt.lp.edu.ua/images/conference/stud/prog_71_st_c.pdf" class="text-green">71-а студентська науково-технічна конференція ІППТ </a>
							</li>
						</ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer id="footer" class="footer">
        <div class="container">
            <div class="footer-contacts">
                <a href="index.php" title="Головна">
                    <img src="sources/img/logo" alt="logo">
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
		<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<script src="{{ asset('/slick/slick.min.js') }}"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
