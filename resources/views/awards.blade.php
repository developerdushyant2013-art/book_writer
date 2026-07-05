@extends('layouts.app')

@section('title', 'Awards & Achievements · Alexander Reed')
@section('description', 'Awards and achievements of bestselling author Alexander Reed. 15 major awards, 8 bestsellers, and international recognition.')
@section('keywords', 'Alexander Reed awards, achievements, bestselling author, literary awards, book awards, recognition, honors')
@section('canonical', url('/awards'))
@section('og-type', 'website')
@section('og-title', 'Awards & Achievements · Alexander Reed')
@section('og-description', 'Awards and achievements of bestselling author Alexander Reed. 15 major awards, 8 bestsellers, and international recognition.')
@section('og-image', asset('images/alexander-reed-awards.jpg'))
@section('twitter-title', 'Awards & Achievements')
@section('twitter-description', 'Awards and achievements of bestselling author Alexander Reed. 15 major awards and international recognition.')
@section('twitter-image', asset('images/alexander-reed-awards.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** AWARDS PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-yellow-50 via-white to-amber-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-yellow-600 font-semibold tracking-wide uppercase">Recognition & Honors</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Awards & <span class="text-yellow-600">Achievements</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Celebrating excellence in writing, thought leadership, and impact on readers worldwide.</p>
    </div>

    <!-- Stats Overview -->
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mb-20">
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
        <div class="text-4xl font-bold text-yellow-600 mb-2">15</div>
        <div class="text-gray-600">Major Awards</div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
        <div class="text-4xl font-bold text-amber-600 mb-2">8</div>
        <div class="text-gray-600">Bestsellers</div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
        <div class="text-4xl font-bold text-orange-600 mb-2">3</div>
        <div class="text-gray-600">Literary Prizes</div>
      </div>
      <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
        <div class="text-4xl font-bold text-red-600 mb-2">12</div>
        <div class="text-gray-600">Countries</div>
      </div>
    </div>

    <!-- Major Awards -->
    <div class="mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Major <span class="text-yellow-600">Awards</span></h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
          <div class="bg-gradient-to-r from-yellow-400 to-amber-500 p-4">
            <div class="flex items-center gap-3">
              <i class="fas fa-trophy text-white text-2xl"></i>
              <h3 class="text-white font-bold">International Book Award</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-3">Best Non-Fiction Book</p>
            <p class="text-sm text-gray-500 mb-4">Awarded for "Mastering Success" - 2013</p>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              <i class="fas fa-globe"></i>
              <span>Global Recognition</span>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
          <div class="bg-gradient-to-r from-amber-400 to-orange-500 p-4">
            <div class="flex items-center gap-3">
              <i class="fas fa-medal text-white text-2xl"></i>
              <h3 class="text-white font-bold">NY Times Bestseller</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-3">#1 Business Mindset</p>
            <p class="text-sm text-gray-500 mb-4">Wall Street Journal List - 2013</p>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              <i class="fas fa-chart-line"></i>
              <span>52 weeks on list</span>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
          <div class="bg-gradient-to-r from-orange-400 to-red-500 p-4">
            <div class="flex items-center gap-3">
              <i class="fas fa-award text-white text-2xl"></i>
              <h3 class="text-white font-bold">Literary Excellence Prize</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-3">Outstanding Non-Fiction</p>
            <p class="text-sm text-gray-500 mb-4">National Book Foundation - 2018</p>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              <i class="fas fa-star"></i>
              <span>Prestigious Honor</span>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
          <div class="bg-gradient-to-r from-purple-400 to-pink-500 p-4">
            <div class="flex items-center gap-3">
              <i class="fas fa-crown text-white text-2xl"></i>
              <h3 class="text-white font-bold">Thought Leader Award</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-3">Innovation in Thinking</p>
            <p class="text-sm text-gray-500 mb-4">Global Thinkers Forum - 2019</p>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              <i class="fas fa-brain"></i>
              <span>Industry Impact</span>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
          <div class="bg-gradient-to-r from-blue-400 to-indigo-500 p-4">
            <div class="flex items-center gap-3">
              <i class="fas fa-ribbon text-white text-2xl"></i>
              <h3 class="text-white font-bold">Readers' Choice Award</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-3">Most Influential Author</p>
            <p class="text-sm text-gray-500 mb-4">Goodreads Selection - 2020</p>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              <i class="fas fa-heart"></i>
              <span>Reader Favorite</span>
            </div>
          </div>
        </div>

        <div class="bg-white rounded-2xl shadow-xl overflow-hidden card-hover">
          <div class="bg-gradient-to-r from-green-400 to-teal-500 p-4">
            <div class="flex items-center gap-3">
              <i class="fas fa-certificate text-white text-2xl"></i>
              <h3 class="text-white font-bold">Lifetime Achievement</h3>
            </div>
          </div>
          <div class="p-6">
            <p class="text-gray-600 mb-3">20 Years of Excellence</p>
            <p class="text-sm text-gray-500 mb-4">Writers Guild Honor - 2024</p>
            <div class="flex items-center gap-2 text-sm text-gray-500">
              <i class="fas fa-history"></i>
              <span>Career Recognition</span>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bestselling Books -->
    <div class="mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Bestselling <span class="text-amber-600">Books</span></h2>
      <div class="bg-white rounded-3xl shadow-xl p-8">
        <div class="space-y-6">
          <div class="flex items-center gap-6 p-4 bg-amber-50 rounded-xl">
            <div class="text-3xl font-bold text-amber-600">#1</div>
            <img src="https://picsum.photos/id/26/80/120" alt="Mastering Success" class="w-16 h-24 rounded object-cover">
            <div class="flex-1">
              <h3 class="font-bold text-lg">Mastering Success</h3>
              <p class="text-gray-600 text-sm">8 weeks on NYT Bestseller List</p>
              <div class="flex items-center gap-4 mt-2">
                <span class="text-sm text-gray-500"><i class="fas fa-book"></i> 500K+ copies</span>
                <span class="text-sm text-gray-500"><i class="fas fa-globe"></i> 15 countries</span>
              </div>
            </div>
          </div>

          <div class="flex items-center gap-6 p-4 bg-gray-50 rounded-xl">
            <div class="text-3xl font-bold text-gray-600">#2</div>
            <img src="https://picsum.photos/id/30/80/120" alt="The Mind Revolution" class="w-16 h-24 rounded object-cover">
            <div class="flex-1">
              <h3 class="font-bold text-lg">The Mind Revolution</h3>
              <p class="text-gray-600 text-sm">Amazon #1 in Psychology</p>
              <div class="flex items-center gap-4 mt-2">
                <span class="text-sm text-gray-500"><i class="fas fa-book"></i> 350K+ copies</span>
                <span class="text-sm text-gray-500"><i class="fas fa-globe"></i> 12 countries</span>
              </div>
            </div>
          </div>

          <div class="flex items-center gap-6 p-4 bg-gray-50 rounded-xl">
            <div class="text-3xl font-bold text-gray-600">#3</div>
            <img src="https://picsum.photos/id/62/80/120" alt="The Author's Mind" class="w-16 h-24 rounded object-cover">
            <div class="flex-1">
              <h3 class="font-bold text-lg">The Author's Mind</h3>
              <p class="text-gray-600 text-sm">Publishers Weekly Top 10</p>
              <div class="flex items-center gap-4 mt-2">
                <span class="text-sm text-gray-500"><i class="fas fa-book"></i> 200K+ copies</span>
                <span class="text-sm text-gray-500"><i class="fas fa-globe"></i> 8 countries</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- International Recognition -->
    <div class="mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Global <span class="text-orange-600">Recognition</span></h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-flag-usa text-blue-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">United States</h3>
          <p class="text-sm text-gray-600">NY Times Bestseller</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
          <div class="w-16 h-16 bg-red-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-crown text-red-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">United Kingdom</h3>
          <p class="text-sm text-gray-600">British Book Award</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
          <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-trophy text-green-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Germany</h3>
          <p class="text-sm text-gray-600">German Book Prize</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center">
          <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-star text-purple-600 text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Japan</h3>
          <p class="text-sm text-gray-600">Readers' Choice</p>
        </div>
      </div>
    </div>

    <!-- Media Features -->
    <div class="bg-gradient-to-r from-amber-600 to-orange-600 rounded-3xl p-8 text-white text-center">
      <h2 class="text-3xl font-bold mb-6">Featured in <span class="text-yellow-300">Leading Media</span></h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
        <div class="bg-white/20 backdrop-blur rounded-xl p-4">
          <i class="fas fa-newspaper text-3xl mb-2"></i>
          <p class="font-semibold">Forbes</p>
        </div>
        <div class="bg-white/20 backdrop-blur rounded-xl p-4">
          <i class="fas fa-chart-line text-3xl mb-2"></i>
          <p class="font-semibold">Wall Street Journal</p>
        </div>
        <div class="bg-white/20 backdrop-blur rounded-xl p-4">
          <i class="fas fa-tv text-3xl mb-2"></i>
          <p class="font-semibold">BBC</p>
        </div>
        <div class="bg-white/20 backdrop-blur rounded-xl p-4">
          <i class="fas fa-microphone text-3xl mb-2"></i>
          <p class="font-semibold">TED Talks</p>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
