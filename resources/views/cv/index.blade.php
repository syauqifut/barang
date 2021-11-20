<!DOCTYPE html>
<html lang="en-US">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Syauqi CV</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700,200" rel="stylesheet">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <link href="{{ asset('cv/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('cv/css/main.css') }}" rel="stylesheet">
  <noscript>

  </noscript>
</head>

<body id="top">
  <header>
    <div class="profile-page sidebar-collapse">
      <nav class="navbar navbar-expand-lg fixed-top navbar-transparent bg-primary" color-on-scroll="400">
        <div class="container">
          <div class="navbar-translate"><a class="navbar-brand" href="#" rel="tooltip">Syauqi</a>
            <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
              aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation"><span
                class="navbar-toggler-bar bar1"></span><span class="navbar-toggler-bar bar2"></span><span
                class="navbar-toggler-bar bar3"></span></button>
          </div>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <ul class="navbar-nav">
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#about">About</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#skill">Skills</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#portfolio">Portfolio</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#experience">Experience</a></li>
              <li class="nav-item"><a class="nav-link smooth-scroll" href="#contact">Contact</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <div class="page-content">
    <div>
      <div class="profile-page">
        <div class="wrapper">
          <div class="page-header page-header-small" filter-color="green">
            <!-- <div class="page-header-image" data-parallax="true"> -->
            <div class="page-header-image" data-parallax="true" style='background-image: url("{{ asset('cv/images/bggreen.jpg') }}")'>
            </div>
            <div class="container">
              <div class="content-center">
                <div class="cc-profile-image"><a href="#"><img src="{{ asset('cv/images/me.jpeg') }}" alt="Image" /></a></div>
                <div class="h2 title">Ahmad Syauqi Futtaqi</div>
                <p class="category text-white">Junior Web Developer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="about">
        <div class="container">
          <div class="card">
            <div class="row">
              <div class="col-lg-12 col-md-12">
                <div class="card-body">
                  <div class="h4 mt-0 title">About Me</div>
                  <p>I'm a web developer which has about one year experience and I'm take a bachelor's degree
                    Information System at Binus University online classes. Me very interested in the field programming
                    and always wanted learn new skills and can work well</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="skill">
        <div class="container">
          <div class="h4 text-center mb-4 title">Professional Skills</div>
          <!-- <div class="card"> -->
            <!-- <div class="card-body"> -->
              <div class="row">
                <div class="col-md-2">
                  <img src="{{ asset('cv/images/skill/html.png') }}" alt="" rel="tooltip" title="HTML">
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('cv/images/skill/css.png') }}" alt="" rel="tooltip" title="CSS">
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('cv/images/skill/php.png') }}" alt="" rel="tooltip" title="PHP">
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('cv/images/skill/sql.png') }}" alt="" rel="tooltip" title="SQL">
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('cv/images/skill/js.png') }}" alt="" rel="tooltip" title="JavaScript">
                </div>
                <div class="col-md-2">
                  <img src="{{ asset('cv/images/skill/api.png') }}" alt="" rel="tooltip" title="API">
                </div>
              </div>
            <!-- </div> -->
          <!-- </div> -->
        </div>
      </div>
      <div class="section" id="portfolio">
        <div class="container">
          <div class="row">
            <div class="col-md-6 ml-auto mr-auto">
              <div class="h4 text-center mb-4 title">Portfolio</div>
            </div>
          </div>
          <div class="tab-content gallery mt-5">
            <div id="web-development">
              <div class="ml-auto mr-auto">
                <div class="row">
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised">
                      <figure class="cc-effect"><img src="{{ asset('cv/images/portfolio/bonjurfarm.jpg') }}" alt="Image" />
                        <figcaption>
                          <div class="h4">Bonjur Farm</div>
                          <p>Marketplace</p>
                        </figcaption>
                      </figure></a>
                    </div>
                    <div class="cc-porfolio-image img-raised">
                      <figure class="cc-effect"><img src="{{ asset('cv/images/portfolio/laundryuk.jpg') }}" alt="Image" />
                        <figcaption>
                          <div class="h4">Laundryuk</div>
                          <p>Management</p>
                        </figcaption>
                      </figure></a>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="cc-porfolio-image img-raised">
                      <figure class="cc-effect"><img src="{{ asset('cv/images/portfolio/lmsalfitrah.jpg') }}" alt="Image" />
                        <figcaption>
                          <div class="h4">LMS Alfitrah</div>
                          <p>LMS</p>
                        </figcaption>
                      </figure></a>
                    </div>
                    <div class="cc-porfolio-image img-raised">
                      <figure class="cc-effect"><img src="{{ asset('cv/images/portfolio/BeHealthy.jpeg') }}" alt="Image" />
                        <figcaption>
                          <div class="h4">Be Healthy</div>
                          <p>Registration Form</p>
                        </figcaption>
                      </figure></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="experience">
        <div class="container cc-experience">
          <div class="h4 text-center mb-4 title">Work Experience</div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary">
                <div class="card-body cc-experience-header">
                  <p>Oct 2020 - Present</p>
                  <div class="h5">Danaprospera</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <div class="h5">Web Developer</div>
                    <p>
                      - Made some additional features for an app website <br>
                      - Create several applications in the form of web <br>
                      - Learn to make android apps <br>
                      - Maintain website <br>
                    </p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary">
                <div class="card-body cc-experience-header">
                  <p>Jul 2019 - Sept 2019</p>
                  <div class="h5">PT Jendela Digital Indonesia</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <div class="h5">Web Developer (Inter)</div>
                  <p>
                    - Made some additional features for an app website <br>
                    - Maintain a website <br>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section">
        <div class="container cc-education">
          <div class="h4 text-center mb-4 title">Education History</div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary">
                <div class="card-body cc-education-header">
                  <p>2021 - 2025</p>
                  <div class="h5">Binus Online University</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <div class="h5">Management Information System</div>
                  <p class="category"> </p>
                  <p><br> study computer science combined with business</p>
                </div>
              </div>
            </div>
          </div>
          <div class="card">
            <div class="row">
              <div class="col-md-3 bg-primary">
                <div class="card-body cc-education-header">
                  <p>2017 - 2020</p>
                  <div class="h5">SMK Telkom Malang</div>
                </div>
              </div>
              <div class="col-md-9">
                <div class="card-body">
                  <div class="h5">Computer Software Engineering</div>
                  <p class="category"> </p>
                  <p><br> learn basic computer science and programming</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section" id="contact">
        <div class="container cc-contact">
          <div class="h4 text-center mb-4 title">Contact me</div>
          <div class="card">
            <div class="row">
              <div class="col-md-12">
                <div class="card mb-0">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card-body">
                        <p class="mb-0"><strong>Address </strong></p>
                        <p class="pb-2">Jalan Jojoran I nomor 63M, Mojo, Gubeng, Surabaya</p>
                        <p class="mb-0"><strong>Phone</strong></p>
                        <p class="pb-2">+62 822 4274 8530</p>
                        <p class="mb-0"><strong>Email</strong></p>
                        <p>syauqifut@gmail.com</p>  
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card-body">
                        <p class="mb-0"><strong>Instagram </strong></p>
                        <p class="pb-2">@syauqf</p>
                        <p class="mb-0"><strong>LinkedIn</strong></p>
                        <p class="pb-2">Ahmad Syauqi Futtaqi</p>
                        <p class="mb-0"><strong>Github</strong></p>
                        <p>syauqifut</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer">
    <div class="text-center text-muted">
      <p>&copy; 2021</p>
    </div>
  </footer>
  <script src="{{ asset('cv/js/core/jquery.3.2.1.min.js?') }}"></script>
  <script src="{{ asset('cv/js/core/popper.min.js') }}"></script>
  <script src="{{ asset('cv/js/core/bootstrap.min.js') }}"></script>
  <script src="{{ asset('cv/js/now-ui-kit.js') }}"></script>
  <script src="{{ asset('cv/scripts/main.js') }}"></script>
</body>

</html>