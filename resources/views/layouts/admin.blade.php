<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <!-- Font Awesome -->
        <link rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
            integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
            crossorigin="anonymous">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Candal|Lora"
            rel="stylesheet">
        <!-- Admin Styling -->
   <link href="{{ asset('css/admin.css') }}" rel="stylesheet">

        <!-- Custom Styling -->
   <link href="{{ asset('css/admin2.css') }}" rel="stylesheet">



    <title>Espace d'asministrateur</title>
    <script>
                    $(document).ready(function() {
          $(".menu-toggle").on("click", function() {
            $(".nav").toggleClass("showing");
            $(".nav ul").toggleClass("showing");
          });

          $(".post-wrapper").slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            nextArrow: $(".next"),
            prevArrow: $(".prev"),
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1
                }
              }
              // You can unslick at a given breakpoint now by adding:
                     @yield('content')
              // settings: "unslick"
              // instead of a settings object
            ]
          });
        });

        ClassicEditor.create(document.querySelector("#body"), {
          toolbar: [
            "heading",
            "|",
            "bold",
            "italic",
            "link",
            "bulletedList",
            "numberedList",
            "blockQuote"
          ],
          heading: {
            options: [
              { model: "paragraph", title: "Paragraph", class: "ck-heading_paragraph" },
              {
                model: "heading1",
                view: "h1",
                title: "Heading 1",
                class: "ck-heading_heading1"
              },
              {
                model: "heading2",
                view: "h2",
                title: "Heading 2",
                class: "ck-heading_heading2"
              }
            ]
          }
        }).catch(error => {
          console.log(error);
        });
    </script>
    </head>

    <body>
        <header>
            <div class="logo">
                <h1 class="logo-text"><span>Dreams</span>Hotel</h1>
            </div>  
                 <i class="fa fa-bars menu-toggle"></i>
            <ul class="nav">
                <li>
                    <a href="#">
                        <i class="fa fa-user"></i>
                          {{ Auth::user()->name }}
                        <i class="fa fa-chevron-down" style="font-size: .8em;"></i>
                    </a>
                    <ul>
                        <li><a href="{{ route('logout') }}" class="logout">{{ __('SE DÉCONNECTER') }}</a></li>
                    </ul>
                </li>
            </ul>
    
        </header>
    <!-- Admin Page Wrapper -->
        <div class="admin-wrapper">

            <!-- Left Sidebar -->
            <div class="left-sidebar">
                <ul>
                    <li><a href="{{Route('admin')}}">Gestion de réservations</a></li>
                    <li><a href="{{Route('g_hotels')}}">Gestion d'hotels</a></li>
                    <li><a href="{{Route('g_chambres')}}">Gestion de chambres</a></li>
                    <li><a href="{{Route('g_utilisateurs')}}">Gestion d'utilisateurs</a></li>
                </ul>
            </div>
            <!-- // Left Sidebar -->
            @yield('content')
        </div><!-- // Page Wrapper -->
        <!-- JQuery -->
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <!-- Ckeditor -->
        <script
            src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>
        <!-- Custom Script -->

    </body>

</html>
     