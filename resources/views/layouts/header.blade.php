<!-- sticky navigation bar (mobile responsive) -->
<nav class="bg-white/80 backdrop-blur-sm sticky top-0 z-30 border-b border-gray-200 shadow-sm">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center h-16">
      <!-- logo / name -->
      <a href="/" class="text-2xl font-bold text-blue-600 tracking-tight">A. Reed <span class="text-sm font-light text-gray-500 hidden sm:inline-block">· author</span></a>
      
      <!-- desktop menu -->
      <div class="hidden md:flex space-x-8 font-medium">
        <a href="/" class="nav-link text-gray-700 hover:text-blue-600 transition">Home</a>
        <a href="/about" class="nav-link text-gray-700 hover:text-blue-600 transition">About</a>
        <a href="/books" class="nav-link text-gray-700 hover:text-blue-600 transition">Books</a>
        <a href="/blog" class="nav-link text-gray-700 hover:text-blue-600 transition">Blog</a>
        <a href="/events" class="nav-link text-gray-700 hover:text-blue-600 transition">Events</a>
        <a href="/awards" class="nav-link text-gray-700 hover:text-blue-600 transition">Awards</a>
        <a href="/resources" class="nav-link text-gray-700 hover:text-blue-600 transition">Resources</a>
        <a href="/contact" class="nav-link text-gray-700 hover:text-blue-600 transition">Contact</a>
      </div>

      <!-- mobile hamburger + CTA (minimal js) -->
      <div class="flex items-center gap-2">
        <a href="/contact" class="hidden sm:inline-block bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition shadow-sm">Request book</a>
        <button id="menuBtn" class="md:hidden p-2 rounded-lg hover:bg-gray-100 focus:outline-none" aria-label="menu">
          <i class="fas fa-bars text-xl text-gray-600"></i>
        </button>
      </div>
    </div>
    
    <!-- mobile menu (hidden by default) -->
    <div id="mobileMenu" class="hidden md:hidden pb-4 space-y-2">
      <a href="/" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">Home</a>
      <a href="/about" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">About</a>
      <a href="/books" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">Books</a>
      <a href="/blog" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">Blog</a>
      <a href="/events" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">Events</a>
      <a href="/awards" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">Awards</a>
      <a href="/resources" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">Resources</a>
      <a href="/contact" class="block py-2 px-3 text-gray-700 hover:bg-blue-50 rounded transition">Contact</a>
      <div class="pt-2"><a href="/contact" class="block w-full bg-blue-600 text-white px-4 py-2 rounded-full text-center">Request book</a></div>
    </div>
  </div>
</nav>
