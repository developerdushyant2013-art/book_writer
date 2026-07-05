@extends('layouts.app')

@section('title', 'All 20 Books by Alexander Reed · Complete Collection')
@section('description', 'Explore all 20 books by bestselling author Alexander Reed. Topics include thinking, productivity, creativity, mindset, and personal development. Find your next life-changing book.')
@section('keywords', 'Alexander Reed books, 20 books, complete collection, thinking, productivity, creativity, mindset, self-help, personal development, bestselling books')
@section('canonical', url('/books'))
@section('og-type', 'website')
@section('og-title', 'All 20 Books by Alexander Reed · Complete Collection')
@section('og-description', 'Explore all 20 books by bestselling author Alexander Reed. Topics include thinking, productivity, creativity, mindset, and personal development.')
@section('og-image', asset('images/alexander-reed-books.jpg'))
@section('twitter-title', 'All 20 Books by Alexander Reed')
@section('twitter-description', 'Explore all 20 books by bestselling author Alexander Reed. Topics include thinking, productivity, creativity, mindset, and personal development.')
@section('twitter-image', asset('images/alexander-reed-books.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** BOOKS PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-blue-600 font-semibold tracking-wide uppercase">Complete Collection</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">All <span class="text-blue-600">20 Books</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Two decades of writing, thinking, and sharing wisdom. Each book holds a key to unlocking your potential.</p>
      
      <!-- Stats Bar -->
      <div class="flex justify-center gap-8 mt-8">
        <div class="text-center">
          <div class="text-3xl font-bold text-blue-600">20</div>
          <div class="text-sm text-gray-500">Books Published</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-purple-600">1M+</div>
          <div class="text-sm text-gray-500">Copies Sold</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-green-600">12</div>
          <div class="text-sm text-gray-500">Languages</div>
        </div>
        <div class="text-center">
          <div class="text-3xl font-bold text-orange-600">15</div>
          <div class="text-sm text-gray-500">Awards</div>
        </div>
      </div>
    </div>

    <!-- Filter Section -->
    <div class="mb-12">
      <div class="flex flex-wrap justify-center gap-3">
        <button class="px-6 py-2 bg-blue-600 text-white rounded-full font-medium hover:bg-blue-700 transition">All Books</button>
        <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Self-help</button>
        <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Business</button>
        <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Psychology</button>
        <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Philosophy</button>
        <button class="px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Creativity</button>
      </div>
    </div>

    <!-- Books Grid -->
    <div id="booksGrid" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6 mb-16">
      <!-- Books will be populated by JavaScript -->
    </div>

    <!-- Featured Books Section -->
    <div class="bg-white rounded-3xl shadow-xl p-8 mb-16">
      <h2 class="text-3xl font-bold mb-6 text-center">Featured <span class="text-blue-600">Bestsellers</span></h2>
      <div class="grid md:grid-cols-3 gap-8">
        <div class="text-center">
          <img src="https://picsum.photos/id/26/200/300" alt="Mastering Success" class="w-32 h-48 mx-auto rounded-lg shadow-lg mb-4 object-cover">
          <h3 class="font-bold text-lg mb-2">Mastering Success</h3>
          <p class="text-gray-600 text-sm mb-3">Habits of high achievers</p>
          <div class="flex justify-center gap-1 mb-3">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition">Learn More</button>
        </div>
        <div class="text-center">
          <img src="https://picsum.photos/id/30/200/300" alt="The Mind Revolution" class="w-32 h-48 mx-auto rounded-lg shadow-lg mb-4 object-cover">
          <h3 class="font-bold text-lg mb-2">The Mind Revolution</h3>
          <p class="text-gray-600 text-sm mb-3">Change your thinking</p>
          <div class="flex justify-center gap-1 mb-3">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
          </div>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition">Learn More</button>
        </div>
        <div class="text-center">
          <img src="https://picsum.photos/id/62/200/300" alt="The Author's Mind" class="w-32 h-48 mx-auto rounded-lg shadow-lg mb-4 object-cover">
          <h3 class="font-bold text-lg mb-2">The Author's Mind</h3>
          <p class="text-gray-600 text-sm mb-3">A life of writing</p>
          <div class="flex justify-center gap-1 mb-3">
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star text-yellow-400"></i>
            <i class="fas fa-star-half-alt text-yellow-400"></i>
          </div>
          <button class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-700 transition">Learn More</button>
        </div>
      </div>
    </div>

    <!-- Reading Guide -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-8 text-white text-center">
      <h2 class="text-3xl font-bold mb-4">Not sure where to start?</h2>
      <p class="text-xl mb-6 opacity-90">Take our 2-minute quiz to find the perfect book for your journey</p>
      <button class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition transform hover:scale-105">
        Take the Quiz
      </button>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  (function() {
    const books = [
      { title: "The Power of Knowledge", desc: "Unlock the secrets of learning.", category: "Philosophy", year: 2008, img: "https://picsum.photos/id/24/200/300", rating: 4.5 },
      { title: "Mastering Success", desc: "Habits of high achievers.", category: "Self-help", year: 2010, img: "https://picsum.photos/id/26/200/300", rating: 5.0 },
      { title: "Journey of a Thinker", desc: "Reflections on a curious life.", category: "Memoir", year: 2012, img: "https://picsum.photos/id/28/200/300", rating: 4.3 },
      { title: "The Mind Revolution", desc: "Change your thinking, change everything.", category: "Neuroscience", year: 2013, img: "https://picsum.photos/id/30/200/300", rating: 5.0 },
      { title: "Secrets of Productivity", desc: "Do more with less stress.", category: "Productivity", year: 2014, img: "https://picsum.photos/id/32/200/300", rating: 4.7 },
      { title: "The Digital Age Author", desc: "Writing in a connected world.", category: "Publishing", year: 2015, img: "https://picsum.photos/id/34/200/300", rating: 4.2 },
      { title: "Creative Intelligence", desc: "Unleash your innovative self.", category: "Creativity", year: 2016, img: "https://picsum.photos/id/36/200/300", rating: 4.6 },
      { title: "The Art of Thinking", desc: "Clearer decisions, better life.", category: "Psychology", year: 2017, img: "https://picsum.photos/id/38/200/300", rating: 4.8 },
      { title: "Visionary Leadership", desc: "Lead with purpose.", category: "Business", year: 2018, img: "https://picsum.photos/id/40/200/300", rating: 4.4 },
      { title: "Modern Wisdom", desc: "Ancient truths for today.", category: "Philosophy", year: 2019, img: "https://picsum.photos/id/42/200/300", rating: 4.5 },
      { title: "The Growth Formula", desc: "Continuous improvement.", category: "Self-help", year: 2019, img: "https://picsum.photos/id/44/200/300", rating: 4.3 },
      { title: "Unlock Your Potential", desc: "Break through limits.", category: "Motivation", year: 2020, img: "https://picsum.photos/id/46/200/300", rating: 4.6 },
      { title: "Knowledge Economy", desc: "Thrive in the new world.", category: "Economics", year: 2020, img: "https://picsum.photos/id/48/200/300", rating: 4.1 },
      { title: "The Future Thinker", desc: "Anticipate tomorrow.", category: "Futurism", year: 2021, img: "https://picsum.photos/id/50/200/300", rating: 4.4 },
      { title: "The Inspired Mind", desc: "Daily creativity.", category: "Art", year: 2021, img: "https://picsum.photos/id/52/200/300", rating: 4.2 },
      { title: "The Power of Learning", desc: "Learn faster, remember more.", category: "Education", year: 2022, img: "https://picsum.photos/id/54/200/300", rating: 4.7 },
      { title: "Smart Decision Making", desc: "Avoid biases.", category: "Psychology", year: 2022, img: "https://picsum.photos/id/56/200/300", rating: 4.5 },
      { title: "The Innovation Code", desc: "Build breakthrough ideas.", category: "Business", year: 2023, img: "https://picsum.photos/id/58/200/300", rating: 4.6 },
      { title: "Rise of Creativity", desc: "Why creativity matters now.", category: "Culture", year: 2023, img: "https://picsum.photos/id/60/200/300", rating: 4.3 },
      { title: "The Author's Mind", desc: "A life of writing.", category: "Memoir", year: 2024, img: "https://picsum.photos/id/62/200/300", rating: 4.8 }
    ];

    const booksGrid = document.getElementById('booksGrid');
    if (booksGrid) {
      booksGrid.innerHTML = books.map(book => `
        <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover hover:shadow-xl flex flex-col h-full border border-gray-100">
          <div class="relative">
            <img src="${book.img}" alt="${book.title}" class="w-full h-48 object-cover">
            <div class="absolute top-2 right-2 bg-white/90 backdrop-blur px-2 py-1 rounded-full text-xs font-semibold">
              ${book.year}
            </div>
          </div>
          <div class="p-4 flex-1 flex flex-col">
            <h3 class="font-bold text-lg mb-1 line-clamp-2">${book.title}</h3>
            <div class="flex items-center gap-1 mb-2">
              ${generateStars(book.rating)}
              <span class="text-xs text-gray-500">(${book.rating})</span>
            </div>
            <p class="text-sm text-gray-500 mb-2">${book.category}</p>
            <p class="text-sm text-gray-600 mb-4 line-clamp-2">${book.desc}</p>
            <div class="mt-auto">
              <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg text-sm font-semibold transition">
                View Details
              </button>
            </div>
          </div>
        </div>
      `).join('');
    }

    function generateStars(rating) {
      const fullStars = Math.floor(rating);
      const hasHalfStar = rating % 1 !== 0;
      let stars = '';
      
      for (let i = 0; i < fullStars; i++) {
        stars += '<i class="fas fa-star text-yellow-400 text-xs"></i>';
      }
      if (hasHalfStar) {
        stars += '<i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>';
      }
      const emptyStars = 5 - Math.ceil(rating);
      for (let i = 0; i < emptyStars; i++) {
        stars += '<i class="far fa-star text-yellow-400 text-xs"></i>';
      }
      return stars;
    }
  })();
</script>
@endsection
