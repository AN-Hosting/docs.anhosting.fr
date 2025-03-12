<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" 
      x-data="{ 
          darkMode: localStorage.getItem('darkMode') === 'true',
          mobileMenu: false
      }" 
      x-init="$watch('darkMode', val => {
          localStorage.setItem('darkMode', val)
          if (val) {
              document.documentElement.classList.add('dark')
          } else {
              document.documentElement.classList.remove('dark')
          }
      })" 
      :class="{ 'dark': darkMode }">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
        <!-- SEO Meta Tags -->
        <title>{{ $title ?? '🎮 ARMA Reforger Servers | Liste & Classement des Meilleurs Serveurs' }}</title>
        <meta name="title" content="{{ $title ?? 'ARMA Reforger - Server List' }}">
        <meta name="description" content="{{ $description ?? '⭐ Trouvez les meilleurs serveurs ARMA Reforger ! ✓ Classement en temps réel ✓ Statistiques détaillées ✓ Votes communautaires ✓ Liste complète des serveurs FR/EN ➤ Rejoignez la communauté !' }}">
        <meta name="keywords" content="arma reforger, arma reforger france, communauté française arma, milsim france, simulation militaire, 
            jeu vidéo militaire, guides arma reforger, tutoriels arma, serveur arma reforger, clan militaire arma, 
            unité militaire virtuelle, team arma france, arma 4, bohemia interactive, enfusion engine, everon map, 
            combat militaire simulation, tactical shooter, fps militaire, mods arma reforger, modding arma, 
            game master arma, scénarios militaires, mission editor, warfare mode, conflit mode, 
            communauté gaming française, jeu tactique, combat réaliste, simulation combat, 
            recrutement clan militaire, formation militaire virtuelle, opérations militaires, 
            team francophone, serveur français, discord arma, forum arma, actualités arma, 
            bénévolat gaming, développement communautaire, support technique arma, 
            modérateur discord, rédacteur guide, créateur contenu arma, 
            administrateur serveur jeu, community manager gaming, développeur php laravel, 
            développeur frontend, programmeur discord bot, tutoriels youtube arma,arma reforger, serveur arma reforger, liste serveurs arma, 
            top serveurs arma, classement serveurs, meilleurs serveurs arma, serveur milsim, serveur roleplay,
            serveur warfare, serveur training, serveur pvp, serveur pve, serveur hardcore,
            statistiques serveurs, votes serveurs, population serveurs, ping serveurs, performance serveurs,
            mods serveurs, addons serveurs, configuration serveurs, hébergement serveur arma,
            serveur français arma, serveur international arma, serveur communautaire arma,
            gameplay arma reforger, modes de jeu arma, missions arma, scénarios arma,
            everon map, warfare mode, game master, conflit mode, combat réaliste,
            serveur militaire, serveur tactique, serveur simulation, serveur combat,
            classement communautaire, votes communauté, avis serveurs, review serveurs,
            liste serveurs actifs, nouveaux serveurs, serveurs populaires, serveurs recommandés,
            gestion serveur arma, administration serveur, modération serveur, configuration serveur,
            serveur discord arma, communauté serveur, team serveur, clan serveur,
            unité militaire virtuelle, team arma france, arma 4, bohemia interactive, enfusion engine">
        <meta name="author" content="ARMA Reforger">

        <!-- Rich Snippets pour Google -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "name": "ARMA Reforger Servers",
            "alternateName": "Top Serveurs ARMA Reforger",
            "url": "{{ url('/') }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('logo.png') }}",
                "width": "112",
                "height": "112"
            },
            "image": {
                "@type": "ImageObject",
                "url": "{{ asset('logo.png') }}",
                "width": "1200",
                "height": "630"
            },
            "brand": {
                "@type": "Brand",
                "name": "ARMA Reforger",
                "logo": "{{ asset('logo.png') }}"
            },
            "description": "Classement et liste des meilleurs serveurs ARMA Reforger",
            "inLanguage": ["fr-FR", "en-GB"],
            "datePublished": "2024-03-20",
            "dateModified": "{{ now()->toISOString() }}",
            "offers": {
                "@type": "AggregateOffer",
                "name": "Serveurs ARMA Reforger",
                "description": "Liste des serveurs disponibles",
                "availability": "https://schema.org/InStock",
                "priceCurrency": "EUR",
                "price": "0"
            },
            "aggregateRating": {
                "@type": "AggregateRating",
                "ratingValue": "4.8",
                "bestRating": "5",
                "worstRating": "1",
                "ratingCount": "256"
            }
        }
        </script>

        <!-- Meta Tags supplémentaires -->
        <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
        <meta name="coverage" content="Worldwide">
        <meta name="rating" content="General">
        <meta name="revisit-after" content="1 day">
        <meta name="target" content="all">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <meta name="apple-mobile-web-app-title" content="ARMA Servers">
        <meta name="application-name" content="ARMA Servers">

        <!-- Open Graph / Facebook -->
        <meta property="og:type" content="website">
        <meta property="og:url" content="{{ url()->current() }}">
        <meta property="og:title" content="{{ $title ?? '🎮 ARMA Reforger Servers | Top Serveurs & Classement' }}">
        <meta property="og:description" content="{{ $description ?? '⭐ Découvrez notre classement des meilleurs serveurs ARMA Reforger ! Statistiques en direct, votes de la communauté, et informations détaillées sur chaque serveur. Trouvez le serveur parfait pour votre style de jeu !' }}">
        <meta property="og:image" content="{{ asset('logo.png') }}">
        <meta property="og:image:width" content="1200">
        <meta property="og:image:height" content="630">
        <meta property="og:image:type" content="image/png">
        <meta property="og:locale" content="fr_FR">
        <meta property="og:locale:alternate" content="en_GB">
        <meta property="og:site_name" content="ARMA Reforger Servers">
        <meta property="fb:app_id" content="votre_app_id">
        <meta property="article:publisher" content="votre_page_facebook">

        <!-- Twitter -->
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:url" content="{{ url()->current() }}">
        <meta name="twitter:title" content="{{ $title ?? '🎮 ARMA Reforger Servers | Classement & Liste des Serveurs' }}">
        <meta name="twitter:description" content="{{ $description ?? '⭐ Le meilleur endroit pour trouver votre serveur ARMA Reforger ! Classement en direct, statistiques détaillées et votes de la communauté. Trouvez votre serveur idéal ! 🎯' }}">
        <meta name="twitter:image" content="{{ asset('logo.png') }}">
        <meta name="twitter:image:alt" content="ARMA Reforger Servers - Liste et Classement">
        <meta name="twitter:creator" content="@armareforger_fr">
        <meta name="twitter:site" content="@armareforger_fr">
        <meta name="twitter:domain" content="{{ parse_url(config('app.url'), PHP_URL_HOST) }}">
        <meta name="twitter:label1" content="Serveurs actifs">
        <meta name="twitter:data1" content="150+">
        <meta name="twitter:label2" content="Mise à jour">
        <meta name="twitter:data2" content="Temps réel">

        <!-- Canonical URL -->
        <link rel="canonical" href="{{ url()->current() }}">

        <!-- Favicons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('logo.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('logo.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('logo.png') }}">
        <link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">
        <meta name="msapplication-TileColor" content="#0055A4">
        <meta name="theme-color" content="#0055A4">
        <link rel="icon" href="{{ asset('logo.png') }}" type="image/png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">

        <!-- Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "ARMA Reforger Servers",
            "url": "{{ url('/') }}",
            "logo": "{{ asset('logo.png') }}",
            "description": "La référence pour trouver et classer les serveurs ARMA Reforger. Statistiques en temps réel, votes communautaires et classement détaillé.",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{{ url('/search?q={search_term_string}') }}",
                "query-input": "required name=search_term_string"
            },
            "mainEntity": {
                "@type": "ItemList",
                "itemListElement": [
                    {
                        "@type": "ListItem",
                        "position": 1,
                        "name": "Classement des serveurs",
                        "description": "Top des serveurs ARMA Reforger classés par popularité"
                    },
                    {
                        "@type": "ListItem",
                        "position": 2,
                        "name": "Statistiques en direct",
                        "description": "Données en temps réel sur les serveurs"
                    },
                    {
                        "@type": "ListItem",
                        "position": 3,
                        "name": "Système de votes",
                        "description": "Évaluations communautaires des serveurs"
                    }
                ]
            },
            "sameAs": [
                "https://discord.gg/C6wJj7nZPv",
                "https://forum.arma-reforger.fr"
            ],
            "contactPoint": {
                "@type": "ContactPoint",
                "contactType": "customer support",
                "availableLanguage": ["French", "English"]
            }
        }
        </script>

        <!-- CSS & JS -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Custom Styles -->
        <style>
            [x-cloak] { display: none !important; }
        </style>

        <!-- Alpine.js Plugins -->
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.directive('scroll', (el, { value, expression, modifiers }, { evaluate }) => {
                    const observer = new IntersectionObserver(entries => {
                        entries.forEach(entry => {
                            if (entry.isIntersecting) {
                                el.classList.add('motion-safe:animate-reveal')
                                el.classList.remove('opacity-0', 'translate-y-8')
                                
                                el.addEventListener('animationend', () => {
                                    el.classList.remove('motion-safe:animate-reveal')
                                    setTimeout(() => {
                                        if (!entry.isIntersecting) {
                                            el.classList.add('opacity-0', 'translate-y-8')
                                        }
                                    }, 50)
                                }, { once: true })
                            } else {
                                el.classList.add('opacity-0', 'translate-y-8')
                                el.classList.remove('motion-safe:animate-reveal')
                            }
                        })
                    }, {
                        rootMargin: '50px',
                        threshold: 0.1
                    })

                    el.classList.add('opacity-0', 'translate-y-8', 'transition-all', 'duration-700', 'ease-out')
                    observer.observe(el)
                })
            })
        </script>

        <!-- Preload Critical Resources -->
        <link rel="preload" href="{{ asset('logo.png') }}" as="image">
        <link rel="preload" href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" as="style">
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Anton&display=swap" as="style">

        <!-- JSON-LD Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "url": "{{ url('/') }}",
            "name": "ARMA Reforger",
            "description": "La plus grande communauté francophone d'Arma Reforger",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{{ url('/search?q={search_term_string}') }}",
                "query-input": "required name=search_term_string"
            }
        }
        </script>

        <!-- DNS Prefetch -->
        <link rel="dns-prefetch" href="//fonts.bunny.net">
        <link rel="dns-prefetch" href="//fonts.googleapis.com">
        <link rel="dns-prefetch" href="//discord.gg">

        <!-- Preconnect -->
        <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>

        <!-- Resource Hints -->
        <link rel="prefetch" href="{{ asset('js/app.js') }}">
        <link rel="prefetch" href="{{ asset('css/app.css') }}">

        <!-- Rich Snippets pour Google -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "ARMA Reforger Servers",
            "url": "{{ url('/') }}",
            "potentialAction": {
                "@type": "SearchAction",
                "target": "{{ url('/search?q={search_term_string}') }}",
                "query-input": "required name=search_term_string"
            }
        }
        </script>

        <!-- Logo Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "{{ url('/') }}",
            "logo": {
                "@type": "ImageObject",
                "url": "{{ asset('logo.png') }}",
                "width": 60,
                "height": 60,
                "caption": "ARMA Reforger Servers Logo"
            }
        }
        </script>

        <!-- Site Name Structured Data -->
        <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "WebSite",
            "name": "ARMA Reforger Servers",
            "alternateName": ["Top Serveurs ARMA", "Serveurs ARMA"],
            "url": "{{ url('/') }}",
            "image": {
                "@type": "ImageObject",
                "url": "{{ asset('logo.png') }}",
                "width": 60,
                "height": 60
            }
        }
        </script>
    </head>
    <body class="font-sans antialiased bg-gray-100 dark:bg-gray-900" x-data="{ mobileMenu: false }">
        <!-- Navbar -->
        @include('home.partials.nav')

        <!-- Page Container -->
        <div class="min-h-screen flex">
            <!-- Sidebar -->
            @include('home.partials.sidebar')

            <!-- Main Content -->
            <div class="flex-1 lg:ml-64">
                <!-- Content Wrapper -->
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 mt-16">
                    <!-- Page Content -->
                    <main>
                        @yield('content')
                    </main>
                </div>
            </div>
        </div>

        @stack('modals')
        @livewireScripts
    </body>
</html>
