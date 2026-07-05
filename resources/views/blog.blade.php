@extends('layouts.app')

@section('title', 'Blog & Articles · Alexander Reed')
@section('description', 'Read articles and insights by bestselling author Alexander Reed. Thoughts on writing, creativity, productivity, and habits of mind.')
@section('keywords', 'Alexander Reed blog, articles, writing tips, creativity, productivity, mindset, personal development, author insights')
@section('canonical', url('/blog'))
@section('og-type', 'website')
@section('og-title', 'Blog & Articles · Alexander Reed')
@section('og-description', 'Read articles and insights by bestselling author Alexander Reed. Thoughts on writing, creativity, productivity, and habits of mind.')
@section('og-image', asset('images/alexander-reed-blog.jpg'))
@section('twitter-title', 'Blog & Articles')
@section('twitter-description', 'Read articles and insights by bestselling author Alexander Reed. Thoughts on writing, creativity, and productivity.')
@section('twitter-image', asset('images/alexander-reed-blog.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** BLOG PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-purple-50 via-white to-pink-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-purple-600 font-semibold tracking-wide uppercase">Insights & Articles</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Thoughts on <span class="text-purple-600">Writing</span> & Life</h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Deep dives into creativity, productivity, and the habits of mind that shape our world.</p>
    </div>

    <!-- Featured Article -->
    <div class="bg-white rounded-3xl shadow-xl overflow-hidden mb-16">
      <div class="md:flex">
        <div class="md:w-1/2">
          <img src="https://picsum.photos/id/20/600/400" alt="Featured Article" class="w-full h-64 md:h-full object-cover">
        </div>
        <div class="md:w-1/2 p-8">
          <div class="flex items-center gap-4 mb-4">
            <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Featured</span>
            <span class="text-gray-500 text-sm">Mar 2, 2025</span>
          </div>
          <h2 class="text-3xl font-bold mb-4">Why I wrote 20 books: A journey of persistence and passion</h2>
          <p class="text-gray-600 mb-6 leading-relaxed">
            Two decades ago, I sat down to write my first book. Today, I'm reflecting on the journey that led to 20 published works, countless lessons learned, and the readers who made it all possible.
          </p>
          <div class="flex items-center gap-4 mb-6">
            <div class="flex items-center gap-2">
              <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=40&q=80" alt="Author" class="w-10 h-10 rounded-full">
              <span class="font-medium">Alexander Reed</span>
            </div>
            <div class="flex items-center gap-1 text-gray-500">
              <i class="far fa-clock"></i>
              <span class="text-sm">8 min read</span>
            </div>
          </div>
          <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-full font-semibold transition">
            Read Full Article
          </button>
        </div>
      </div>
    </div>

    <!-- Category Filters -->
    <div class="flex flex-wrap justify-center gap-3 mb-12">
      <button class="px-6 py-2 bg-purple-600 text-white rounded-full font-medium hover:bg-purple-700 transition">All Articles</button>
      <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Writing</button>
      <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Creativity</button>
      <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Productivity</button>
      <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Mindset</button>
      <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Books</button>
    </div>

    <!-- Articles Grid -->
    <div id="blogGrid" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-16">
      <!-- Articles will be populated by JavaScript -->
    </div>

    <!-- Newsletter Signup -->
    <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl p-8 text-white text-center">
      <h2 class="text-3xl font-bold mb-4">Get Writing Tips Delivered</h2>
      <p class="text-xl mb-6 opacity-90">Join 50,000+ readers receiving weekly insights on creativity and productivity</p>
      <div class="flex flex-col sm:flex-row max-w-md mx-auto gap-3">
        <input type="email" placeholder="Enter your email" 
               class="flex-1 px-5 py-3 rounded-full bg-white/20 backdrop-blur border border-white/30 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50">
        <button class="px-8 py-3 bg-white text-purple-600 rounded-full font-bold hover:bg-gray-100 transition">
          Subscribe
        </button>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  (function() {
    const blogPosts = [
      { 
        title: "Why I wrote 20 books", 
        summary: "Reflections on persistence and passion.", 
        image: "https://picsum.photos/id/20/400/250", 
        date: "Mar 2, 2025",
        category: "Writing",
        readTime: "8 min",
        author: "Alexander Reed",
        featured: true
      },
      { 
        title: "The one habit every writer needs", 
        summary: "Daily routines that unlock creativity.", 
        image: "https://picsum.photos/id/21/400/250", 
        date: "Feb 18, 2025",
        category: "Writing",
        readTime: "5 min",
        author: "Alexander Reed"
      },
      { 
        title: "How to request a book topic (and I listen)", 
        summary: "Your ideas shape my next project.", 
        image: "https://picsum.photos/id/22/400/250", 
        date: "Feb 1, 2025",
        category: "Books",
        readTime: "3 min",
        author: "Alexander Reed"
      },
      { 
        title: "Reading list for 2025", 
        summary: "Books that changed my perspective.", 
        image: "https://picsum.photos/id/23/400/250", 
        date: "Jan 15, 2025",
        category: "Books",
        readTime: "6 min",
        author: "Alexander Reed"
      },
      { 
        title: "Silence and the creative mind", 
        summary: "Why solitude fuels great writing.", 
        image: "https://picsum.photos/id/25/400/250", 
        date: "Dec 28, 2024",
        category: "Creativity",
        readTime: "7 min",
        author: "Alexander Reed"
      },
      { 
        title: "From idea to 20 books", 
        summary: "A short retrospective.", 
        image: "https://picsum.photos/id/27/400/250", 
        date: "Dec 5, 2024",
        category: "Writing",
        readTime: "4 min",
        author: "Alexander Reed"
      },
      { 
        title: "The morning routine of successful writers", 
        summary: "Start your day like the pros.", 
        image: "https://picsum.photos/id/29/400/250", 
        date: "Nov 20, 2024",
        category: "Productivity",
        readTime: "5 min",
        author: "Alexander Reed"
      },
      { 
        title: "Overcoming writer's block permanently", 
        summary: "Strategies that actually work.", 
        image: "https://picsum.photos/id/31/400/250", 
        date: "Nov 10, 2024",
        category: "Writing",
        readTime: "9 min",
        author: "Alexander Reed"
      },
      { 
        title: "The future of books in AI age", 
        summary: "Will technology replace authors?", 
        image: "https://picsum.photos/id/33/400/250", 
        date: "Oct 25, 2024",
        category: "Mindset",
        readTime: "10 min",
        author: "Alexander Reed"
      }
    ];

    const blogGrid = document.getElementById('blogGrid');
    if (blogGrid) {
      // Skip the first one since it's featured
      const regularPosts = blogPosts.slice(1);
      blogGrid.innerHTML = regularPosts.map(post => `
        <article class="bg-white rounded-2xl shadow-md overflow-hidden card-hover hover:shadow-xl border border-gray-100">
          <div class="relative">
            <img src="${post.image}" alt="${post.title}" class="w-full h-48 object-cover">
            <div class="absolute top-4 left-4">
              <span class="bg-white/90 backdrop-blur px-3 py-1 rounded-full text-xs font-semibold text-purple-600">
                ${post.category}
              </span>
            </div>
          </div>
          <div class="p-6">
            <div class="flex items-center gap-3 text-sm text-gray-500 mb-3">
              <span>${post.date}</span>
              <span>•</span>
              <span>${post.readTime} read</span>
            </div>
            <h3 class="font-bold text-xl mb-3 line-clamp-2">${post.title}</h3>
            <p class="text-gray-600 mb-4 line-clamp-3">${post.summary}</p>
            <div class="flex items-center justify-between">
              <div class="flex items-center gap-2">
                <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=30&q=80" alt="${post.author}" class="w-8 h-8 rounded-full">
                <span class="text-sm font-medium text-gray-700">${post.author}</span>
              </div>
              <a href="#" class="text-purple-600 font-medium hover:text-purple-700 transition flex items-center gap-1">
                Read more <i class="fas fa-arrow-right text-xs"></i>
              </a>
            </div>
          </div>
        </article>
      `).join('');
    }
  })();
</script>
@endsection
