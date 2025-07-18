<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Office Ntional Tourisme RDC, portail numerique</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

       
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
   <body class="body">
          <div id="hero-sentinel" style="position:absolute; top:0; width:1px; height:1px;"></div>
  <header class="header">
    <section class="section nav-section">
        <div class="container nav-container">

            <nav class="nav">
                 <div class="line-nav"></div>
                 <div class="menu">
                    <ul class="menu-lists">
                        <li class="menu-list">
                            <a href="https://tourismerdc.cd/" class="menu-link"  target="_blank">Offre Touristique</a>  <i class="flaticon-link"></i>
                        </li>

                        <li class="menu-list">
                            <a href="https://officetourisme.cd/" class="menu-link"  target="_blank">Corporate</a>  <i class="flaticon-link"></i>
                        </li>
                    </ul>
                 </div>
           </nav>
        </div>
    </section>
    
  </header>
  <main class="main">

    <section class="section hero-section">

        <div class="hero-section-image">
            <img src="{{ asset('/images/Echangeur-Kolwezi-nuit-Groupe-Forrest-1024x682.jpg') }}" alt="" class="hero-section-img">
        </div>

         <div class="hero-section-desc "> 
            <div class="hero-section-desc-container">

                <div class="hero-section-desc-container-fix">

            <div class="hero-section-title" style="max-width:1000px;">
                 <p> Bienvenue sur le portail numérique de <br>L’Office National du Tourisme  de la République  Démocratique du Congo.</p>  
                  
            </div>
            <div class="hero-section-sub-title" style="max-width:700px; font-weight: 300;">

             Trouvez ici toutes les plateformes, réseaux sociaux et sites internet liés à l’Office National du Tourisme de la République Démocratique du Congo.
            </div>
            <div class="hero-section-cta">
                <form action="" class="cta-hero">
                    <input type="text" class="cta-input-text">
                    <input type="button" class="cta-button" value="Submit">
                </form>
            </div>

            </div>

            <div class="middle-top container">
                    <div class="middle-top-content">
                        <div>
                        <img src="{{ asset('/images/Ipad 2.png') }}" alt="" class="middle-top-img">
                        </div>
                    </div>
            </div>
           

            </div>
        </div>

         

    </section>

    <section class="section section-middle">
        <div class="container container-middle">
            <div class="content content-middle">
               
                <div class="middle-bottom">
                    <div class="middle-bottom-content">
                        <a href="https://tourismerdc.cd/" class="middle-bottom-content-card">
                            <div class="mbc-card-container">
                                <div class="mbc-card-item">
                                    <img src="{{ asset('/images/lordinateur 1.svg')}}" alt="">
                                </div>
                                <div class="mbc-card-item">
                                    <span>Offre Touristique</span>
                                </div>
                                <div class="mbc-card-item">
                                    <span>Explorez la République Démocratique du Congo : forêts, faune et cultures. Vivez aventures passionnantes, découvertes exceptionnelles.</span>
                                </div>
                            </div>
                        </a>

                        <a href="https://officetourisme.cd/" class="middle-bottom-content-card">
                            <div class="mbc-card-container">
                                <div class="mbc-card-item">
                                     <img src="{{ asset('/images/lordinateur 1.svg') }}" alt="">
                                </div>
                                <div class="mbc-card-item">
                                    <span>Corporate de l'ONT</span>
                                </div>
                                <div class="mbc-card-item">
                                    <span>Promotion et développement du tourisme en mettant en valeur ses richesses culturelles et naturelles</span>
                                </div>
                            </div>
</a>

                        <a href="https://fpt.officetourisme.cd/" class="middle-bottom-content-card">
                            <div class="mbc-card-container">
                                <div class="mbc-card-item">
                                    <img src="{{ asset('/images/lordinateur 1.svg') }}" alt="">
                                </div>
                                <div class="mbc-card-item">
                                    <span>Fonds de Promotion du Tourisme (FPT)</span>
                                </div>
                                <div class="mbc-card-item">
                                    <span>Initiative établie pour soutenir financièrement les actions de promotion et de développement touristique</span>
                                </div>
                            </div>
</a>

                        <a href="https://52-52.officetourisme.cd/" class="middle-bottom-content-card">
                            <div class="mbc-card-container">
                                <div class="mbc-card-item">
                                     <img src="{{ asset('/images/lordinateur 1.svg') }}" alt="">
                                </div>
                                <div class="mbc-card-item">
                                    <span>52-52</span>
                                </div>
                                <div class="mbc-card-item">
                                    <span>52 semaines, 52 événements : ne manquez rien en RDC – festivals, événements et soirées éclatantes.</span>
                                </div>
                            </div>
</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- <section class="section svg-anime-section">
    <div class="container svg-anim-container">
       
   <svg viewBox="0 0 200 200">
  
  <defs>
    <linearGradient id="neonGradient" x1="0%" y1="0%" x2="100%" y2="100%">
      <stop offset="0%" stop-color="#0ff"/>
      <stop offset="100%" stop-color="#f0f"/>
    </linearGradient>

   
    <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
      <feDropShadow dx="0" dy="0" stdDeviation="4" flood-color="#0ff"/>
      <feDropShadow dx="0" dy="0" stdDeviation="8" flood-color="#f0f"/>
    </filter>
  </defs>

  
  <path id="neonPath" d="M 20 100 Q 100 0 180 100 Q 100 200 20 100 Z" stroke="url(#neonGradient)"/>
</svg>


    </div>
</section> -->
   
<section class="section section-qui-sommes-nous section-separator">
        <div class="container container-qsn">
            <div class="content content-qsn">
                <div class="qsn-img">
                    <img src="{{ asset('/images/Tablet.png') }}" alt="" class="image-qsn">
                </div>
                <div class="qsn-desc">
                    <div class="qsn-text">
                        <h1 class="section_title">Qui sommes nous</h1>
                        <div>
                
                        <p> L’Office National du Tourisme est l’organe officiel chargé de promouvoir et de valoriser l’image touristique de notre pays.  </p> 
                        <p> Notre mission est de développer l’offre touristique, d’encourager les investissements dans le secteur, et de faire rayonner nos richesses culturelles, naturelles et patrimoniales à l’échelle nationale et internationale. </p> 
                        <p> Nous travaillons en collaboration avec les acteurs publics et privés du tourisme pour créer une expérience authentique, attractive et durable pour les visiteurs L’Office incarne l’engagement de notre pays à faire du tourisme un levier de croissance économique et de valorisation culturelle. </p>
                    
                    </div>
                    </div>
                </div>

                <div class="qsn-section-cover-img"></div>
            </div>
        </div>
    </section>

    <section class="section section-reseau-sociaux section-separator">
        <div class="container container-reseaux-sociaux">
            <h1 class="section-title">Découvrez nos plateformes et abonnez-vous dès maintenant</h1>

            <div class="content reseaux-sociaux-content">
                <div class="reseaux-sociaux-outer">
                    <div class="rs-items rs-items-corporate">

                        <h2 class="rs-items-sub-title">Institutionnels</h2>

                        <div class="rs-items-corporate-container">
                            <a href="https://www.facebook.com/share/15nniVBRbD/?mibextid=wwXIfr" class="rs-items-corporate-icon">
                                 <div class="rs-items-corporate-icon-left">
                                   <i class="fa-brands fa-facebook-f"></i>
                                </div>
                                <div class="rs-items-corporate-icon-right">
                                    <h2 class="sub-title">Facebook</h2>
                                    <span class="s-items-corporate-icon-right-desc">Actualités officielles, événements, sécurité touristique et acteurs d’exception. Restez connectés.</span>
                                </div>
                             </a>
                            <a href="https://www.instagram.com/info_tourisme_rdcongo1?igsh=YWsxYTc2OGdod29t" class="rs-items-corporate-icon">
                                 <div class="rs-items-corporate-icon-left">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <div class="rs-items-corporate-icon-right">
                                    <h2 class="sub-title">Instagram</h2>
                                    <span class="s-items-corporate-icon-right-desc">Actualités & événements, sécurité et talents du tourisme congolais. Restez connectés ! #TourismeRDC #VoyageSûr</span>
                                </div>
                             </a>
                            <a href="https://www.linkedin.com/in/office-national-du-tourisme-rdc-919647274?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app" class="rs-items-corporate-icon">
                                 <div class="rs-items-corporate-icon-left">
                                   <i class="fa-brands fa-linkedin-in"></i>
                                </div>
                                <div class="rs-items-corporate-icon-right">
                                    <h2 class="sub-title">Linkedin</h2>
                                    <span class="s-items-corporate-icon-right-desc">Tourisme RDC : actualités sectorielles, événements stratégiques, protocoles de sécurité et talents émergents.</span>
                                </div>
                            </a>
                            <a href="https://x.com/congordtourism?s=11" class="rs-items-corporate-icon">
                                 <div class="rs-items-corporate-icon-left">
                                   <i class="fa-brands fa-x-twitter"></i>
                                </div>
                                <div class="rs-items-corporate-icon-right">
                                    <h2 class="sub-title">X</h2>
                                    <span class="s-items-corporate-icon-right-desc">Touristes informés : Voyagez sereins, conseils sécurité, événements captivants et talents locaux. Restez connectés.</span>
                                </div>
                             </a>
                        </div>
                    </div>
                    <div class="rs-items rs-phone-img">

                        <div class="rs-phone-img-container">
                             <div class="rs-phone-img-item">
                                <img src="{{ asset('/images/Phone and hand.png') }}" alt="" class="rs-phone-image">
                            </div>
                            <!-- <div class="rs-phone-img-item">
                                <img src="" alt="" class="rs-phone-image">
                            </div>
                            <div class="rs-phone-img-item">
                                 <img src="" alt="" class="rs-phone-image">
                            </div>
                            <div class="rs-phone-img-item">
                                 <img src="" alt="" class="rs-phone-image">
                            </div>
                            <div class="rs-phone-img-item">
                                 <img src="" alt="" class="rs-phone-image">
                            </div> -->
                        </div>
                    </div>
                    <div class="rs-items rs-items-offre">

                        <h2 class="rs-items-sub-title">Offre touristique</h2>
                        <div class="rs-items-corporate-container">
                             <a  href="https://www.facebook.com/share/1CXEhbNSmi/?mibextid=wwXIfr" class="rs-items-corporate-icon">
                                 <div class="rs-items-corporate-icon-left">
                                   <i class="fa-brands fa-facebook-f"></i>
                                </div>
                                <div class="rs-items-corporate-icon-right">
                                    <h2 class="sub-title">Facebook</h2>
                                    <span class="s-items-corporate-icon-right-desc">Découvrez la RDC : nature préservée, culture riche et aventures inoubliables.</span>
                                </div>
                           </a>

                            <a href="https://www.instagram.com/officenationaltourisme_rdcongo?igsh=MXNhZW5nOGg1a3l4dA==" class="rs-items-corporate-icon">
                                 <div class="rs-items-corporate-icon-left">
                                    <i class="fa-brands fa-instagram"></i>
                                </div>
                                <div class="rs-items-corporate-icon-right">
                                    <h2 class="sub-title">Instagram</h2>
                                    <span class="s-items-corporate-icon-right-desc">Plongez au cœur de la RDC : panoramas majestueux, festivals culturels et sites historiques. #VisitRDC #BeautéCongolaise</span>
                                </div>
                            </a>


                            <a href="https://www.tiktok.com/@officetourismerdc?_t=ZM-8u2jzYBvTp1&_r=1" class="rs-items-corporate-icon">
                                 <div class="rs-items-corporate-icon-left">
                                  <i class="fa-brands fa-tiktok"></i>
                                </div>
                                <div class="rs-items-corporate-icon-right">
                                    <h2 class="sub-title">Tiktok</h2>
                                    <span class="s-items-corporate-icon-right-desc">Explorez l’essence de la RDC : nature, sites touristiques et événements culturels.</span>
                                </div>
                            </a>

                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  </main>
  <footer class="footer">


    <div class="container footer-container">
        <div class="footer-content content">
            <div class="footer-content-item">

                <div class="footer-content-item-container">
                    <div>

                        <p>16, Avenue Colonel Lukusa, Gombe-Kinshasa</p>
                        <p>Republique Democratique du Congo</p>
                    </div>
                    <div><i class="fi fi-sr-marker"></i> <i class="fa-solid fa-location-dot"></i></div>
                </div>
            </div>
            <div class="footer-content-item">

                <h1 class="section-title contacts">Contacts</h1>
            </div>
            <div class="footer-content-item">

                 <div class="footer-content-item-container">
                    <div><i class="fi fi-sr-phone-call"></i> <i class="fa-solid fa-phone-volume"></i></div>
                    <div>
                        <p>+243 973 524 123</p>
                        <p>info@tourismerdc.cd</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </footer>


  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/SplitText.min.js"></script>

  {{-- <!-- <script type="module" src="assets/script/script.js"></script> --> --}}
</body>
</html>
