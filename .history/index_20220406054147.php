<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta name=”robots” content=”noindex”>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <!-- meta情報 -->
    <title>CodeUps</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!-- ogp -->
    <meta property="og:title" content="" />
    <meta property="og:type" content="" />
    <meta property="og:url" content="" />
    <meta property="og:image" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <!-- ファビコン -->
    <!-- css -->
    <link rel="stylesheet" href="./css/styles.css" />
    <link rel="stylesheet" href="//unpkg.com/swiper/swiper-bundle.min.css" />
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap"
      rel="stylesheet"
    />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Noto+Serif&family=Noto+Serif+JP&display=swap"
      rel="stylesheet"
    />
    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script defer src="./js/script.js"></script>
    <script src="//unpkg.com/swiper/swiper-bundle.min.js"></script>
  </head>

  <body>
    <!-- pagetop -->
    <div class="pagetop"></div>
    <!-- ヘッダー -->
    <header class="header">
      <div class="header__inner">
        <h1 class="header__logo">
          <a href="home.html" class="logo-link">
            <img src="./images/common/CodeUps.svg" alt="ヘッダーロゴ" />
          </a>
        </h1>
        <button class="header__drawer hamburger js-hamburger">
          <span></span>
          <span></span>
          <span></span>
        </button>

        <div class="header__sp-nav sp-nav js-drawer-menu">
          <ul class="sp-nav__items">
            <li class="sp-nav__item"><a href="home.html">トップ</a></li>
            <li class="sp-nav__item"><a href="news.html">お知らせ</a></li>
            <li class="sp-nav__item"><a href="content.html">事業内容</a></li>
            <li class="sp-nav__item"><a href="works.html">制作実績</a></li>
            <li class="sp-nav__item"><a href="overview.html">企業概要</a></li>
            <li class="sp-nav__item"><a href="blog.html">ブログ</a></li>
            <li class="sp-nav__item"><a href="contact.html">お問い合わせ</a></li>
          </ul>
        </div>

        <div class="header__pc-nav pc-nav js-drawer-menu">
          <ul class="pc-nav__items">
            <li class="pc-nav__item pc-nav__item--base"><a href="news.html">お知らせ</a></li>
            <li class="pc-nav__item pc-nav__item--base"><a href="content.html">事業内容</a></li>
            <li class="pc-nav__item pc-nav__item--base"><a href="works.html">制作実績</a></li>
            <li class="pc-nav__item pc-nav__item--base"><a href="overview.html">企業概要</a></li>
            <li class="pc-nav__item pc-nav__item--base"><a href="blog.html">ブログ</a></li>
            <li class="pc-nav__item pc-nav__item--white">
              <a href="contact.html">お問い合わせ</a>
            </li>
          </ul>
        </div>
      </div>
    </header>

    <!-- メインビュー -->
    <section class="main-view top-main-view js-header-height">
      <div class="swiper js-slider1">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="slide-img">
              <picture>
                <source media="(min-width: 768px)" srcset="./images/common/MVpc1.jpg"/>
                <img src="./images/common/MVsp1.jpg" alt="メインビュー" />
              </picture>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="slide-img">
              <picture>
                <source media="(min-width: 768px)" srcset="./images/common/MVpc2.jpg"/>
                <img src="./images/common/MVsp2.jpg" alt="メインビュー" />
              </picture>
            </div>
          </div>

          <div class="swiper-slide">
            <div class="slide-img">
              <picture>
                <source media="(min-width: 768px)" srcset="./images/common/MVpc3.jpg"/>
                <img src="./images/common/MVsp3.jpg" alt="メインビュー" />
              </picture>
            </div>
          </div>
        </div>

        <div class="main-view__title-wrapper">
          <h2 class="main-view__main-title">メインタイトルが入ります</h2>
          <p class="main-view__sub-title">サブタイトルが入ります</p>
        </div>
      </div>
    </section>

    <!-- ニュース -->
    <div class="news top-news">
      <div class="news__inner">
        <div class="news__contents">
          <div class="news__content">
            <div class="news__info">
              <time class="news__date" datetime="2020-07-20">2020.07.20</time>
              <div class="news__category">お知らせ</div>
            </div>
            <div class="news__block">
              <p class="news__text">
                <a href="#">記事タイトルが入ります。記事タイトルが入ります。記事タイトルが入ります。</a>
              </p>
            </div>
          </div><!-- /.news__content -->
          <div class="news__more">
            <a href="news.html">すべて見る</a>
          </div>
        </div><!-- /.news__contents -->
      </div>
    </div>

    <div class="bg-line--top">
      
      <!-- content -->
    <section class="content top-content">
      <div class="inner">
        <div class="content__title section-header">
          <h2 class="section-header__title section-header__title--left">Content</h2>
          <p class="section-header__sub-title">事業内容</p>
        </div>
      </div>

          <div class="content__wrapper">
              <ul class="content__items">
                <li class="content__item">
                  <a href="content.html"><img src="./images/common/content1.jpg" alt="経営理念ページへ" />
                    <p class="content__link">経営理念ページへ</p></a
                  >
                </li>
                <li class="content__item">
                  <a href="content.html#sub-content-item1"><img src="./images/common/content2.jpg" alt="理念1へ" />
                    <p class="content__link">理念1へ</p></a
                  >
                </li>
              </ul>
              <ul class="content__items">
                <li class="content__item">
                  <a href="content.html#sub-content-item2"><img src="./images/common/content3.jpg" alt="理念2へ" />
                    <p class="content__link">理念2へ</p></a
                  >
                </li>
                <li class="content__item">
                  <a href="content.html#sub-content-item3"><img src="./images/common/content4.jpg" alt="理念3へ" />
                    <p class="content__link">理念3へ</p></a
                  >
                </li>
              </ul>
          </div>
      </section>
  
      <!-- works -->
      <section class="works top-works">
        <div class="inner">
          <div class="works__title section-header">
            <h2 class="section-header__title section-header__title--right">Works</h2>
            <p class="section-header__sub-title">制作実績</p>
          </div>
        </div>
    
          <div class="works__body section__contets">
            <div class="section__inner--row">
              <div class="section__body--row">
                <div class="swiper-parent">
                  <div class="section__img swiper js-slider2">
                    <div class="swiper-wrapper">
                      <div class="swiper-slide"><img src="./images/common/works1.jpg" alt="PCの画像" /></div>
                      <div class="swiper-slide"><img src="./images/common/works2.jpg" alt="PCの画像" /></div>
                      <div class="swiper-slide"><img src="./images/common/works3.jpg" alt="PCの画像" /></div>
                    </div>
                  </div>
                  <div class="swiper-pagination"></div>
                </div>
    
                <div class="section__content--row inner">
                  <h3 class="s-header__title">メインタイトルが入ります</h3>
                  <p class="s-header__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                  <div class="s-header__link">
                    <a href="works.html" class="btn">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
    </div>

    <div class="bg-line--bottom">

      <!-- overview -->
      <section class="overview top-overview">
        <div class="inner">
          <div class="overview__title section-header">
            <h2 class="section-header__title section-header__title--left">Overview</h2>
            <p class="section-header__sub-title">企業概要</p>
          </div>
        </div>
  
          <div class="overview__body section__contets">
            <div class="section__inner--row-reverse">
              <div class="section__body--row-reverse">
                <div class="section__img">
                  <img src="./images/common/overview.jpg" alt="オフィスの画像" />
                </div>
                <div class="section__content--row-reverse inner">
                  <h3 class="s-header__title">メインタイトルが入ります</h3>
                  <p class="s-header__text">
                    テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
                  </p>
                  <div class="s-header__link">
                    <a href="overview.html" class="btn">詳しく見る</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>

      <!-- blog -->
      <section class="blog top-blog">
        <div class="blog__inner inner">
          <div class="blog__title section-header">
            <h2 class="section-header__title section-header__title--right">Blog</h2>
            <p class="section-header__sub-title">ブログ</p>
          </div>
  
          <div class="blog__items cards">
              <a class="cards__item card" href="#">
                <div class="card__tag">New</div>
                <figure class="card__img">
                  <img src="./images/common/card1.jpg" alt="PCの画像" />
                </figure>
                <div class="card__body">
                  <h3 class="card__title">
                    タイトルが入ります。タイトルが入ります。
                  </h3>
                  <p class="card__text">
                    説明文が入ります。説明文が入ります。説明文が入ります。
                  </p>
                </div>
                <div class="card__info">
                  <div class="card__category">カテゴリ</div>
                  <time class="card__date" datetime="2021-07-20">2021.07.20</time>
                </div>
              </a>
              <a class="cards__item card" href="#">
                <figure class="card__img">
                  <img src="./images/common/card2.jpg" alt="PCの画像" />
                </figure>
                <div class="card__body">
                  <h3 class="card__title">
                    タイトルが入ります。タイトルが入ります。
                  </h3>
                  <p class="card__text">
                    説明文が入ります。説明文が入ります。説明文が入ります。
                  </p>
                </div>
                <div class="card__info">
                  <div class="card__category">カテゴリ</div>
                  <time class="card__date" datetime="2021-07-20">2021.07.20</time>
                </div>
              </a>
              <a class="cards__item card" href="#">
                <figure class="card__img">
                  <img src="./images/common/card3.jpg" alt="PCの画像" />
                </figure>
                <div class="card__body">
                  <h3 class="card__title">
                    タイトルが入ります。タイトルが入ります。
                  </h3>
                  <p class="card__text">
                    説明文が入ります。説明文が入ります。説明文が入ります。
                  </p>
                </div>
                <div class="card__info">
                  <div class="card__category">カテゴリ</div>
                  <time class="card__date" datetime="2021-07-20">2021.07.20</time>
                </div>
              </a>
          </div>
  
          <div class="blog__link">
            <a href="blog.html" class="btn">詳しく見る</a>
          </div>
        </div>
      </section>
    </div>

    <!-- contact -->
    <section class="contact">
      <div class="inner">
        <div class="contact__title section-header">
          <h2 class="section-header__title section-header__title--contact">Contact</h2>
          <p class="section-header__sub-title">お問い合わせ</p>
        </div>
        <p class="contact__text">
          テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
        </p>
        <div class="contact__link">
          <a href="contact.html" class="btn">お問い合わせへ</a>
        </div>
      </div>
    </section>

    <!-- フッター -->
    <footer class="footer">
      <div class="footer__inner">
        <div class="footer__container">
          <div class="footer__logo">
            <img src="./images/common/CodeUps.svg" alt="フッターロゴ" />
          </div>
          <nav class="footer__nav">
            <ul class="fnav__items">
              <li class="fnav__item"><a href="index.html">トップ</a></li>
              <li class="fnav__item"><a href="news.html">お知らせ</a></li>
              <li class="fnav__item"><a href="content.html">事業内容</a></li>
              <li class="fnav__item"><a href="overview.html">企業概要</a></li>
              <li class="fnav__item"><a href="blog.html">ブログ</a></li>
              <li class="fnav__item"><a href="contact.html">お問い合わせ</a></li>
            </ul>
          </nav>
        </div>
        <div class="footer__copy-right">
          <small>&copy; 2021 CodeUps Inc.</small>
        </div>
      </div>
    </footer>
  </body>
</html>
