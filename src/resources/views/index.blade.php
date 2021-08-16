<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!--==================== UNICONS ====================-->
    <link
      rel="stylesheet"
      href="https://unicons.iconscout.com/release/v4.0.0/css/thinline.css"
    />
    <link rel="stylesheet" href="{{ asset('assets/css/swiper-bundle.min.css')}}" />
    <script
      src="https://kit.fontawesome.com/be7f2f553a.js"
      crossorigin="anonymous"
    ></script>

    <!--==================== CSS ====================-->
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css')}}" />

    <title>Bassil Ali portfolio</title>
  </head>
  <body>
     @include('sweetalert::alert')

    <!--==================== HEADER ====================-->
    <header class="header" id="header">
      <nav class="nav">
        <a href="#" class="nav__logo">Bassil Ali</a>

        <div class="nav__menu" id="nav-menu">
          <ul class="nav__list grid">
            <li class="nav__item">
              <a href="#home" class="nav__link active-link">
                <i class="uit uit-house-user nav__icon"></i> Home
              </a>
            </li>

            <li class="nav__item">
              <a href="#about" class="nav__link">
                <i class="uit uit-house-user nav__icon"></i> About
              </a>
            </li>
            <li class="nav__item">
              <a href="#skills" class="nav__link">
                <i class="uit uit-line-spacing nav__icon"></i> Skills
              </a>
            </li>
            <li class="nav__item">
              <a href="#qual" class="nav__link">
                <i class="uit uit-bag nav__icon"></i> Qualification
              </a>
            </li>
            <li class="nav__item">
              <a href="#partfolio" class="nav__link">
                <i class="uit uit-scenery nav__icon"></i> portfolio
              </a>
            </li>
            <li class="nav__item">
              <a href="#contact" class="nav__link">
                <i class="uit uit-comment-dots nav__icon"></i> ContactMe
              </a>
            </li>
          </ul>

          <i class="uit uit-times-circle nav__close" id="nav-close"></i>
        </div>

        <div class="nav__btns">
          <i class="fas fa-moon change-theme" id="theme-button"></i>
          <div class="nav__toggle" id="nav-toggle">
            <i class="uit uit-ellipsis-v"></i>
          </div>
        </div>
      </nav>
    </header>

    <!--==================== MAIN ====================-->
    <main class="main">
      <!--==================== HOME ====================-->
      <section class="home section" id="home">
        <div class="home__container container grid" id="home">
          <div class="home__content grid">
            <div class="home__social">
              <a
                href="https://www.linkedin.com/in/bassil-ali-998b06195/"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uit uit-linkedin-alt"></i>
              </a>
              <a
                href="https://web.facebook.com/profile.php?id=100006280327379"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uit uit-facebook-f"></i>
              </a>
              <a
                href="https://github.com/Bassil-ali"
                target="_blank"
                class="home__social-icon"
              >
                <i class="uit uit-github-alt"></i>
              </a>
            </div>
            <div class="home__img">
              <svg
                class="home__blob"
                viewBox="0 0 200 187"
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
              >
                <mask id="mask0" mask-type="alpha">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 165.547 
                                        130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 129.362C2.45775 
                                        97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 -0.149132 97.9666 
                                        0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                </mask>
                <g mask="url(#mask0)">
                  <path
                    d="M190.312 36.4879C206.582 62.1187 201.309 102.826 182.328 134.186C163.346 
                                        165.547 130.807 187.559 100.226 186.353C69.6454 185.297 41.0228 161.023 21.7403 
                                        129.362C2.45775 97.8511 -7.48481 59.1033 6.67581 34.5279C20.9871 10.1032 59.7028 
                                        -0.149132 97.9666 0.00163737C136.23 0.303176 174.193 10.857 190.312 36.4879Z"
                  />
                  <image
                    class="home__blob-img"
                    x="12"
                    href="assets/img/perfil1.png"
                  />
                </g>
              </svg>
            </div>

            <div class="home__data">
              <h1 class="home__title">Hi, i'm Bassil</h1>
              <h3 class="home_subtitle">Full stack developer</h3>
              <p class="home__description">
                Experience in frontend and backend , producing quality work!
              </p>
              <a href="#contact" class="button button--flex">
                Contact Me <i class="uit uit-comment-dots button__icon"></i>
              </a>
            </div>
          </div>

          <div class="home__scroll">
            <a href="#about" class="home__scroll-button button--flex">
              <i class="uit uit-mouse-alt-2 home__scroll-mouse"></i>
              <span class="home__scroll-name">Scroll down</span>
              <i class="uit uit-angle-double-down home__scroll-arrow"></i>
            </a>
          </div>
        </div>
      </section>

      <!--==================== ABOUT ====================-->
      <section class="about section" id="about">
        <h2 class="section_title">About me</h2>
        <span class="section_subtitle">my introduction</span>

        <div class="about__container container grid">
          <img src="assets/img/about.png" alt="about" class="about__img" />

          <div class="about__data">
            <p class="about__description">
              full stack developer , Extensive knowledge and years of experience
              ,workig in web progammer , delivering quality work.
            </p>
            <div class="about__info">
              <div>
                <span class="about__info-title">02+</span>
                <span class="about__info-name"
                  >Years <br />
                  Experience</span
                >
              </div>
              <div>
                <span class="about__info-title">09+</span>
                <span class="about__info-name"
                  >complete <br />
                  Project</span
                >
              </div>
              <div>
                <span class="about__info-title">02+</span>
                <span class="about__info-name"
                  >Years <br />
                  Freelancer</span
                >
              </div>
            </div>

            <div class="about__buttons">
              <a
                download=""
                href="assets/pdf/Alexa-Cv.pdf"
                class="button button--flex"
              >
                Download CV<i class="uit uit-download-alt button__icon"></i>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!--==================== SKILLS ====================-->
      <section class="skills section" id="skills">
        <h3 class="section_title">Skills</h3>
        <span class="section_subtitle">My technical level </span>

        <div class="skills__container container grid">
          <!--==================== SKILLS 1====================-->

          <div>
            <div class="skills__content skills__close">
              <div class="skills__header">
                <i class="fab fa-css3 skills__icon"></i>
                <div>
                  <h1 class="skills__title">frontend developer</h1>
                  <span class="skills__subtitle">More than 2 years</span>
                </div>
                <i class="uit uit-angle-double-down skills__arrow"></i>
              </div>

              <div class="skills__list grid">
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">HTML</h3>
                    <span class="skills__number">90%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills_html"></span>
                  </div>
                </div>
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">CSS</h3>
                    <span class="skills__number">70%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills_css"></span>
                  </div>
                </div>
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">JavaScript</h3>
                    <span class="skills__number">60%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills_js"></span>
                  </div>
                </div>
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Bootstrap</h3>
                    <span class="skills__number">70%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills_bootstrap"></span>
                  </div>
                </div>
                <div class="skills__data">
                  <div class="skills__titles">
                    <h3 class="skills__name">Vue.js</h3>
                    <span class="skills__number">70%</span>
                  </div>
                  <div class="skills__bar">
                    <span class="skills__percentage skills_vue"></span>
                  </div>
                </div>
              </div>
            </div>

            <!--==================== SKILLS 2====================-->

            <div>
              <div class="skills__content skills__open">
                <div class="skills__header">
                  <i class="fas fa-laptop-code skills__icon"></i>
                  <div>
                    <h1 class="skills__title">Backend developer</h1>
                    <span class="skills__subtitle">More than 2 years</span>
                  </div>
                  <i class="uit uit-angle-double-down skills__arrow"></i>
                </div>

                <div class="skills__list grid">
                  <div class="skills__data">
                    <div class="skills__titles">
                      <h3 class="skills__name">php</h3>
                      <span class="skills__number">80%</span>
                    </div>
                    <div class="skills__bar">
                      <span class="skills__percentage skills_php"></span>
                    </div>
                  </div>
                  <div class="skills__data">
                    <div class="skills__titles">
                      <h3 class="skills__name">Laravel</h3>
                      <span class="skills__number">70%</span>
                    </div>
                    <div class="skills__bar">
                      <span class="skills__percentage skills_laravel"></span>
                    </div>
                  </div>
                  <div class="skills__data">
                    <div class="skills__titles">
                      <h3 class="skills__name">Laravel-vue.js</h3>
                      <span class="skills__number">70%</span>
                    </div>
                    <div class="skills__bar">
                      <span class="skills__percentage skills_la-vu"></span>
                    </div>
                  </div>
                  <div class="skills__data">
                    <div class="skills__titles">
                      <h3 class="skills__name">mysql</h3>
                      <span class="skills__number">80%</span>
                    </div>
                    <div class="skills__bar">
                      <span class="skills__percentage skills_mysql"></span>
                    </div>
                  </div>
                  <div class="skills__data">
                    <div class="skills__titles">
                      <h3 class="skills__name">design pattern</h3>
                      <span class="skills__number">80%</span>
                    </div>
                    <div class="skills__bar">
                      <span class="skills__percentage skills_design"></span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== QUALIFICATION ====================-->
      <section class="qualification section" id="qual">
        <h1 class="section_title">Qualification</h1>
        <span class="section_subtitle">My personal information</span>

        <div class="qual__container container">
          <div class="qual__tabs">
            <div
              class="qual__button button--flex qual__active"
              data-target="#education">
              <i class="uit uit-signal-alt-3 qual__icon"></i>
              Education
            </div>
            <div class="qual__button button--flex" data-target="#work">
              <i class="uit uit-bag qual__icon"></i>
              Work
            </div>
          </div>

          <div class="qual__sections">
            <div class="qual__content qual__active" data-content id="education">
              <div class="qual__data" style="margin-top: 25px">
                <div></div>
                <div>
                  <span class="qual__rounder"></span>
                  <span class="qual__line"></span>
                </div>
                <div>
                  <h1 class="qual__title">computer science</h1>
                  <span class="qual__subtitle"
                    >University of Science and Technology-sudan</span
                  >
                  <div class="qual__calendar">
                    <i class="uit uit-calender"></i>2019-2024
                  </div>
                </div>
              </div>

              <div class="qual__data">
                <div>
                  <h1 class="qual__title">Backend developer</h1>
                  <span class="qual__subtitle">Courses</span>
                  <div class="qual__calendar">
                    <i class="uit uit-calender"></i>2019-open
                  </div>
                </div>
                <div>
                  <span class="qual__rounder"></span>
                  <span class="qual__line"></span>
                </div>
              </div>

              <div class="qual__data">
                <div></div>
                <div>
                  <span class="qual__rounder"></span>
                  <span class="qual__line"></span>
                </div>
                <div>
                  <h1 class="qual__title">frontend developer</h1>
                  <span class="qual__subtitle">Courses</span>
                  <div class="qual__calendar">
                    <i class="uit uit-calender"></i>2019-open
                  </div>
                </div>
              </div>
            </div>

            <div class="qual__content" data-content id="work">
              <div class="qual__data" style="margin-top: 25px">
                <div></div>
                <div>
                  <span class="qual__rounder"></span>
                  <span class="qual__line"></span>
                </div>
                <div>
                  <h1 class="qual__title">Freelancer</h1>
                  <span class="qual__subtitle">remotly</span>
                  <div class="qual__calendar">
                    <i class="uit uit-calender"></i>start 2019
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <!--==================== SERVICES ====================-->
      <!-- <section class="services section" id="services">
                <h1 class="section_title">Services</h1>
                <span class="section_subtitle">What is offer</span>

                <div class="sev__container container grid">
                    <div class="serv__content">
                        <div>
                            <i class="uit uit-web-grid serv__icon"></i>
                            <h3 class="serv__title">Backend <br> Developer</h3>
                        </div>
                        spa
                    </div>
                </div>
            </section> -->

      <!--==================== PORTFOLIO ====================-->
      <section class="portfolio section" id="partfolio">
        <h1 class="section_title">Portfolio</h1>
        <span class="section_subtitle">Most recet work</span>

        <div class="port__container container swiper-container">
          <div class="swiper-wrapper">
            <div class="port__content grid swiper-slide">
              <img src="assets/img/p2.png" alt="" class="port__img" />

              <div class="port__data">
                <h3 class="port__title">invioces app</h3>
                <p class="port__description">
                  manage commerecal invioces,system management
                </p>
              </div>
            </div>

            <div class="port__content grid swiper-slide">
              <img src="assets/img/p1.png" alt="" class="port__img" />

              <div class="port__data">
                <h3 class="port__title">pos system</h3>
                <p class="port__description">point of sale for products.</p>
              </div>
            </div>

            <div class="port__content grid swiper-slide">
              <img src="assets/img/portfolio2.png" alt="" class="port__img" />

              <div class="port__data">
                <h3 class="port__title">online store</h3>
                <p class="port__description">
                  An online store that seeks to be the easiest solution to buy
                  all digital recharge cards.
                </p>
              </div>
            </div>
          </div>
          <div class="swiper-button-next">
            <i class="uit uit-angle-double-right swiper__icon"></i>
          </div>
          <div class="swiper-button-prev">
            <i class="uit uit-angle-double-left swiper__icon"></i>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </section>

      <!--==================== PROJECT IN MIND ====================-->
      <section class="project section">
        <div class="proj__bg">
          <div class="porj__container container grid">
            <div class="ptoj__data">
              <h2 class="proj__title">you have a new project</h2>
              <p class="proj__description">
                Contact me for building amazing project.
              </p>
              <a href="#contact" class="button button--flex button--white">
                Contact Me
                <i
                  class="
                    uit uit-comment-dots
                    button__icon
                    project__icon
                    button__icon
                  "
                ></i>
              </a>
              <br /><br />
            </div>
          </div>
        </div>
      </section>

      <!--==================== TESTIMONIAL ====================-->
      <!-- <section class="testimonial section">
                

            </section> -->

      <!--==================== CONTACT ME ====================-->
      <section class="contact section" id="contact">
        <h2 class="section_title">Contact Me</h2>
        <span class="section_subtitle">Get in touch</span>

        <div class="contact__container container grid">
          <div class="contact__info">
            <i class="fas fa-phone-volume contact__icon"></i>

            <div>
              <h3 class="contact__title">Call Me</h3>
              <span class="contact__subtitle"
                >+2499963455384-<br /><a
                  style="color: green"
                  href="https://wa.me/+249996813485"
                  target="_blank"
                  >Whatsapp link</a
                ></span
              >
            </div>
          </div>

          <div class="contact__info">
            <i class="fas fa-envelope-open-text contact__icon"></i>
            <div>
              <h3 class="contact__title">Email</h3>
              <span class="contact__subtitle">baselali337@gmail.com</span>
            </div>
          </div>

          <div class="contact__info">
            <i class="far fa-compass contact__icon"></i>
            <div>
              <h3 class="contact__title">Location</h3>
              <span class="contact__subtitle">sudan .khartom-bahry</span>
            </div>
          </div>

          <form action="{{route('sendmail')}}" method="get" class="contact__form grid">
            {{ csrf_field() }}
            {{ method_field('post') }}
            <div class="contact__inputs grid">
              <div class="contact__content">
                <label for="" class="contact__label">Name</label>
                <input value="{{ old('name') }}" name="name" type="text" class="contact__input" required />
              </div>

              <div class="contact__content">
                <label for="" class="contact__label">Email</label>
                <input value="{{ old('email') }}" name="email" type="email" class="contact__input" required />
              </div>
            </div>
            <div class="contact__content">
              <label for="" class="contact__label">Project</label>
              <input value="{{ old('project') }}" name="project" type="text" class="contact__input" required />
            </div>

            <div class="contact__content">
              <label for="" class="contact__label">Message</label>
              <textarea 
                name="message" value="{{ old('message') }}"
                id=""
                cols="0"
                rows="7"
                class="contact__input" required
              ></textarea>
            </div>

            <div>
              <button href="#" class="button button--flex">
                Send Message
                <i class="fas fa-share-square"></i>
              </button>
            </div>
          </form>
        </div>
      </section>
    </main>

    <!--==================== FOOTER ====================-->
    <footer class="footer">
      <div class="footer__bg">
        <div class="footer__container container grid">
          <div>
            <h1 class="footer__title">Bassil Ali</h1>
            <span class="footer__subtitle"> Fullstack Developer </span>
          </div>

          <ul class="footer__links">
            <li>
              <a href="#skills" class="footer__link">Skills</a>
            </li>
            <li>
              <a href="#partfolio" class="footer__link">Portfolio</a>
            </li>
            <li>
              <a href="#contact" class="footer__link">ContactMe</a>
            </li>
          </ul>

          <div class="footer__socials">
            <a
              href="https://web.facebook.com/profile.php?id=100006280327379"
              target="_blank"
              class="footer__social"
            >
              <i class="uit uit-facebook-f"></i>
            </a>
            <a
              href="https://twitter.com/bassilali15"
              target="_blank"
              class="footer__social"
            >
              <i class="uit uit-twitter-alt"></i>
            </a>

            <a
              href="https://www.instagram.com/bassil334/"
              target="_blank"
              class="footer__social"
            >
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
        <p class="footer__copy">&#169; Bassil-ali - All right reserved</p>
      </div>
    </footer>

    <!--==================== SCROLL TOP ====================-->
    <a href="#" class="scrollup" id="scroll-up">
      <i class="uit uit-arrow-circle-up scrollup__icon"></i>
    </a>

    <!--==================== SWIPER JS ====================-->
    <script src="{{ asset('assets/js/swiper-bundle.min.js')}}"></script>

    <!--==================== MAIN JS ====================-->
    <script src="{{ asset('assets/js/main.js')}}"></script>
  </body>
</html>
