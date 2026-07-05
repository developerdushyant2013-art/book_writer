<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">
  
  <!-- Dynamic Page Title -->
    <title>@yield('title', 'Alexander Reed · Author of 20 books on thinking, productivity, and creativity')</title>

<!-- Dynamic Meta Description -->
<meta name="description" content="@yield('description', 'Official website of bestselling author Alexander Reed — 20 books on thinking, productivity, and creativity. Read articles, explore books, and request new topics.')">

<!-- Dynamic Meta Keywords -->
<meta name="keywords" content="@yield('keywords', 'Alexander Reed, author, books, writing, creativity, productivity, mindset, self-help, personal development, thinking, success')">

<!-- Dynamic Canonical URL -->
<link rel="canonical" href="@yield('canonical', url('/'))">
  
  <!-- Author -->
  <meta name="author" content="Alexander Reed">
  
  <!-- Open Graph / Facebook -->
  <meta property="og:type" content="@yield('og-type', 'website')">
  <meta property="og:url" content="@yield('og-url', url('/'))">
  <meta property="og:title" content="@yield('og-title', 'Alexander Reed · Author of 20 books')">
  <meta property="og:description" content="@yield('og-description', 'Official website of bestselling author Alexander Reed — 20 books on thinking, productivity, and creativity.')">
  <meta property="og:image" content="@yield('og-image', asset('images/alexander-reed-author.jpg'))">
  <meta property="og:site_name" content="Alexander Reed">
  
  <!-- Twitter -->
  <meta property="twitter:card" content="summary_large_image">
  <meta property="twitter:url" content="@yield('twitter-url', url('/'))">
  <meta property="twitter:title" content="@yield('twitter-title', 'Alexander Reed · Author of 20 books')">
  <meta property="twitter:description" content="@yield('twitter-description', 'Official website of bestselling author Alexander Reed — 20 books on thinking, productivity, and creativity.')">
  <meta property="twitter:image" content="@yield('twitter-image', asset('images/alexander-reed-author.jpg'))">
  
  <!-- Additional SEO Meta -->
  <meta name="robots" content="@yield('robots', 'index, follow')">
  <meta name="googlebot" content="@yield('googlebot', 'index, follow')">
  <meta name="language" content="English">
  <meta name="revisit-after" content="7 days">
  <meta name="distribution" content="global">
  <meta name="rating" content="general">
  
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon" href="@asset('favicon.ico')">
  <link rel="apple-touch-icon" sizes="180x180" href="@asset('apple-touch-icon.png')">
  
  <!-- Tailwind + Font Awesome + smooth hover & scroll -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    // Tailwind config
    tailwind.config = {
      theme: {
        extend: {}
      }
    }
  </script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    html { scroll-behavior: smooth; }
    /* subtle hover transitions (Tailwind handles most, but extra glow) */
    .card-hover { transition: transform 0.25s ease, box-shadow 0.3s ease; }
    .card-hover:hover { transform: translateY(-6px); box-shadow: 0 25px 30px -12px rgba(0,0,0,0.15); }
    .nav-link::after { content: ''; display: block; width: 0; height: 2px; background: #3b82f6; transition: width 0.2s; }
    .nav-link:hover::after { width: 100%; }
    /* timeline dot */
    .timeline-dot { box-shadow: 0 0 0 4px rgba(59,130,246,0.2); }
    
    /* Base styles for debugging */
    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    }
    .bg-gradient-to-br {
      background: linear-gradient(135deg, var(--tw-gradient-stops));
    }
  </style>
  
  <!-- Schema.org Structured Data -->
  @yield('structured-data')
</head>
<body class="bg-gray-50 text-gray-800 font-sans antialiased">

  @include('layouts.header')

  <main class="overflow-hidden">
    @yield('content')
  </main>

  @include('layouts.footer')

  <!-- minimal JavaScript: mobile menu + data injection for books, blog, preview -->
  <script>
    (function() {
      // Mobile menu toggle
      const menuBtn = document.getElementById('menuBtn');
      const mobileMenu = document.getElementById('mobileMenu');
      if (menuBtn && mobileMenu) {
        menuBtn.addEventListener('click', () => {
          mobileMenu.classList.toggle('hidden');
        });
      }

      // optional: close mobile menu on anchor click
      document.querySelectorAll('#mobileMenu a').forEach(link => {
        link.addEventListener('click', () => {
          mobileMenu?.classList.add('hidden');
        });
      });
    })();
  </script>

  @yield('scripts')
</body>
</html>
