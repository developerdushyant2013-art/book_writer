@extends('layouts.app')

@section('title', 'Free Resources · Alexander Reed')
@section('description', 'Download free guides, templates, and tools by Alexander Reed. Writing prompts, habit trackers, productivity planners, and more.')
@section('keywords', 'Free resources, writing guides, templates, productivity tools, Alexander Reed free downloads, writing prompts, habit tracker')
@section('canonical', url('/resources'))
@section('og-type', 'website')
@section('og-title', 'Free Resources · Alexander Reed')
@section('og-description', 'Download free guides, templates, and tools by Alexander Reed. Writing prompts, habit trackers, productivity planners, and more.')
@section('og-image', asset('images/alexander-reed-resources.jpg'))
@section('twitter-title', 'Free Resources')
@section('twitter-description', 'Download free guides, templates, and tools by Alexander Reed. Writing prompts, habit trackers, and productivity planners.')
@section('twitter-image', asset('images/alexander-reed-resources.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** FREE RESOURCES PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-green-50 via-white to-blue-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-green-600 font-semibold tracking-wide uppercase">Free Learning Materials</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Free <span class="text-green-600">Resources</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Download free guides, templates, and tools to accelerate your personal and professional growth.</p>
    </div>

    <!-- Featured Resource -->
    <div class="bg-gradient-to-r from-green-600 to-blue-600 rounded-3xl p-8 text-white mb-20">
      <div class="md:flex items-center gap-8">
        <div class="md:w-2/3">
          <div class="flex items-center gap-3 mb-4">
            <i class="fas fa-star text-yellow-300 text-2xl"></i>
            <span class="bg-yellow-400 text-green-800 px-3 py-1 rounded-full text-sm font-bold">Featured</span>
          </div>
          <h2 class="text-3xl font-bold mb-4">The Writer's Starter Kit</h2>
          <p class="text-lg mb-6 opacity-90">Everything you need to start your writing journey: daily prompts, habit tracker, productivity templates, and more.</p>
          <div class="flex flex-wrap gap-4 mb-6">
            <div class="flex items-center gap-2">
              <i class="fas fa-file-alt"></i>
              <span>25 Writing Prompts</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fas fa-calendar-check"></i>
              <span>30-Day Tracker</span>
            </div>
            <div class="flex items-center gap-2">
              <i class="fas fa-lightbulb"></i>
              <span>Creativity Exercises</span>
            </div>
          </div>
          <button class="bg-white text-green-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition transform hover:scale-105">
            Download Free Kit
          </button>
        </div>
        <div class="md:w-1/3">
          <div class="bg-white/20 backdrop-blur rounded-2xl p-6 text-center">
            <i class="fas fa-download text-6xl mb-4"></i>
            <p class="text-2xl font-bold">10,000+</p>
            <p class="opacity-90">Downloads</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Resource Categories -->
    <div class="mb-16">
      <h2 class="text-3xl font-bold mb-8 text-center">Browse by <span class="text-green-600">Category</span></h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <button onclick="filterResources('writing')" class="resource-filter bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition">
          <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-pen text-green-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Writing</h3>
          <p class="text-sm text-gray-600">Templates, prompts, guides</p>
        </button>
        
        <button onclick="filterResources('productivity')" class="resource-filter bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-rocket text-blue-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Productivity</h3>
          <p class="text-sm text-gray-600">Planners, trackers, tools</p>
        </button>
        
        <button onclick="filterResources('mindset')" class="resource-filter bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition">
          <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-brain text-purple-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Mindset</h3>
          <p class="text-sm text-gray-600">Meditation, reflection, growth</p>
        </button>
        
        <button onclick="filterResources('business')" class="resource-filter bg-white rounded-2xl shadow-lg p-6 text-center hover:shadow-xl transition">
          <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-briefcase text-orange-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Business</h3>
          <p class="text-sm text-gray-600">Strategy, leadership, skills</p>
        </button>
      </div>
    </div>

    <!-- Resources Grid -->
    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 mb-20" id="resourcesGrid">
      <!-- Writing Resources -->
      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="writing">
        <div class="bg-gradient-to-r from-green-400 to-green-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-file-alt text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">PDF</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Daily Writing Prompts</h3>
          <p class="text-gray-600 mb-4">365 creative writing prompts to spark your imagination and build consistent writing habits.</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 5,234 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-file"></i> 15 pages</span>
          </div>
          <button class="w-full bg-green-600 hover:bg-green-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>

      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="writing">
        <div class="bg-gradient-to-r from-blue-400 to-blue-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-book text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">PDF</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Book Outline Template</h3>
          <p class="text-gray-600 mb-4">Professional template to structure your book from idea to finished manuscript.</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 3,892 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-file"></i> 8 pages</span>
          </div>
          <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>

      <!-- Productivity Resources -->
      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="productivity">
        <div class="bg-gradient-to-r from-purple-400 to-purple-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-calendar text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">Excel</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Habit Tracker Spreadsheet</h3>
          <p class="text-gray-600 mb-4">Track daily habits and build consistency with this automated spreadsheet template.</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 4,567 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-table"></i> Interactive</span>
          </div>
          <button class="w-full bg-purple-600 hover:bg-purple-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>

      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="productivity">
        <div class="bg-gradient-to-r from-orange-400 to-orange-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-clock text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">PDF</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Morning Routine Checklist</h3>
          <p class="text-gray-600 mb-4">Optimize your mornings with this proven routine checklist for maximum productivity.</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 6,234 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-file"></i> 5 pages</span>
          </div>
          <button class="w-full bg-orange-600 hover:bg-orange-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>

      <!-- Mindset Resources -->
      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="mindset">
        <div class="bg-gradient-to-r from-pink-400 to-pink-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-heart text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">PDF</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Gratitude Journal</h3>
          <p class="text-gray-600 mb-4">30-day guided gratitude journal to cultivate positivity and mindfulness.</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 7,890 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-file"></i> 12 pages</span>
          </div>
          <button class="w-full bg-pink-600 hover:bg-pink-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>

      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="mindset">
        <div class="bg-gradient-to-r from-indigo-400 to-indigo-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-spa text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">Audio</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Meditation Guide</h3>
          <p class="text-gray-600 mb-4">10-minute guided meditation for focus and stress relief (MP3 format).</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 9,123 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-headphones"></i> 10 min</span>
          </div>
          <button class="w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>

      <!-- Business Resources -->
      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="business">
        <div class="bg-gradient-to-r from-red-400 to-red-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-chart-line text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">PPT</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Business Plan Template</h3>
          <p class="text-gray-600 mb-4">Comprehensive business plan template for startups and entrepreneurs.</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 2,456 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-file-powerpoint"></i> 25 slides</span>
          </div>
          <button class="w-full bg-red-600 hover:bg-red-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>

      <div class="resource-item bg-white rounded-2xl shadow-lg overflow-hidden card-hover" data-category="business">
        <div class="bg-gradient-to-r from-teal-400 to-teal-600 p-4">
          <div class="flex items-center justify-between">
            <i class="fas fa-users text-white text-2xl"></i>
            <span class="bg-white/20 backdrop-blur px-3 py-1 rounded-full text-xs text-white">PDF</span>
          </div>
        </div>
        <div class="p-6">
          <h3 class="font-bold text-xl mb-2">Leadership Skills Guide</h3>
          <p class="text-gray-600 mb-4">Essential leadership skills and development exercises for managers.</p>
          <div class="flex items-center justify-between mb-4">
            <span class="text-sm text-gray-500"><i class="fas fa-download"></i> 3,789 downloads</span>
            <span class="text-sm text-gray-500"><i class="fas fa-file"></i> 18 pages</span>
          </div>
          <button class="w-full bg-teal-600 hover:bg-teal-700 text-white py-2 rounded-lg font-semibold transition">
            Download Free
          </button>
        </div>
      </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="bg-gradient-to-r from-green-600 to-blue-600 rounded-3xl p-8 text-white text-center">
      <h2 class="text-3xl font-bold mb-4">Get More <span class="text-yellow-300">Exclusive Resources</span></h2>
      <p class="text-xl mb-6 opacity-90">Subscribe to receive new free resources monthly, plus exclusive content not available anywhere else.</p>
      <div class="flex flex-col sm:flex-row max-w-md mx-auto gap-3">
        <input type="email" placeholder="Enter your email" 
               class="flex-1 px-5 py-3 rounded-full bg-white/20 backdrop-blur border border-white/30 text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white/50">
        <button class="px-8 py-3 bg-white text-green-600 rounded-full font-bold hover:bg-gray-100 transition">
          Subscribe
        </button>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  function filterResources(category) {
    const items = document.querySelectorAll('.resource-item');
    
    items.forEach(item => {
      if (category === 'all' || item.dataset.category === category) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
    
    // Scroll to resources section
    document.getElementById('resourcesGrid').scrollIntoView({ behavior: 'smooth' });
  }
</script>
@endsection
