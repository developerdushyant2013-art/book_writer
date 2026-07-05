@extends('layouts.app')

@section('title', 'About Alexander Reed · Bestselling Author Biography')
@section('description', 'Learn about bestselling author Alexander Reed. Two decades of writing, 20 books, and inspiring minds worldwide through the power of words.')
@section('keywords', 'About Alexander Reed, author biography, bestselling author, 20 books, writing journey, personal development author')
@section('canonical', url('/about'))
@section('og-type', 'website')
@section('og-title', 'About Alexander Reed · Bestselling Author Biography')
@section('og-description', 'Learn about bestselling author Alexander Reed. Two decades of writing, 20 books, and inspiring minds worldwide through the power of words.')
@section('og-image', asset('images/alexander-reed-about.jpg'))
@section('twitter-title', 'About Alexander Reed')
@section('twitter-description', 'Learn about bestselling author Alexander Reed. Two decades of writing, 20 books, and inspiring minds worldwide.')
@section('twitter-image', asset('images/alexander-reed-about.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** ABOUT PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-blue-600 font-semibold tracking-wide uppercase">Meet Alexander Reed</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">About <span class="text-blue-600">the Author</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Two decades of writing, thinking, and inspiring minds worldwide through the power of words.</p>
    </div>

    <!-- Hero Section -->
    <div class="grid md:grid-cols-2 gap-12 items-center mb-20">
      <div>
        <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" alt="Alexander Reed" class="rounded-3xl shadow-2xl w-full">
      </div>
      <div class="space-y-6">
        <h2 class="text-3xl font-bold text-gray-800">From philosopher to <span class="text-blue-600">bestselling author</span></h2>
        <p class="text-lg text-gray-700 leading-relaxed">
          Alexander Reed began his journey as a curious philosophy student, questioning the nature of knowledge and human potential. Today, he stands as one of the most influential non-fiction authors of our time, with 20 published works that have touched over a million readers across 12 languages.
        </p>
        <p class="text-lg text-gray-700 leading-relaxed">
          His unique ability to bridge timeless wisdom with modern challenges has made him a sought-after speaker, thought leader, and guide for those seeking to unlock their potential in an increasingly complex world.
        </p>
        
        <!-- Quick Stats -->
        <div class="grid grid-cols-2 gap-4">
          <div class="bg-blue-50 p-4 rounded-xl text-center">
            <div class="text-3xl font-bold text-blue-600">20</div>
            <div class="text-sm text-gray-600">Books Published</div>
          </div>
          <div class="bg-green-50 p-4 rounded-xl text-center">
            <div class="text-3xl font-bold text-green-600">1M+</div>
            <div class="text-sm text-gray-600">Readers Worldwide</div>
          </div>
          <div class="bg-purple-50 p-4 rounded-xl text-center">
            <div class="text-3xl font-bold text-purple-600">12</div>
            <div class="text-sm text-gray-600">Languages</div>
          </div>
          <div class="bg-orange-50 p-4 rounded-xl text-center">
            <div class="text-3xl font-bold text-orange-600">15</div>
            <div class="text-sm text-gray-600">Awards Won</div>
          </div>
        </div>
      </div>
    </div>

    <!-- Timeline Section -->
    <div class="bg-white rounded-3xl shadow-xl p-8 mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Journey <span class="text-blue-600">Timeline</span></h2>
      <div class="space-y-8">
        <div class="flex gap-6 items-start">
          <div class="flex-shrink-0 w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center">
            <span class="text-blue-600 font-bold">2008</span>
          </div>
          <div class="flex-1">
            <h3 class="text-xl font-bold mb-2">The Beginning</h3>
            <p class="text-gray-600">Published debut book "The Power of Knowledge" while completing philosophy studies. Awarded "Best Debut Author" by the International Writers Association.</p>
          </div>
        </div>
        
        <div class="flex gap-6 items-start">
          <div class="flex-shrink-0 w-16 h-16 bg-green-100 rounded-full flex items-center justify-center">
            <span class="text-green-600 font-bold">2013</span>
          </div>
          <div class="flex-1">
            <h3 class="text-xl font-bold mb-2">Breakthrough Success</h3>
            <p class="text-gray-600">"Mastering Success" hits New York Times bestseller list, establishing Alexander as a leading voice in personal development and productivity.</p>
          </div>
        </div>
        
        <div class="flex gap-6 items-start">
          <div class="flex-shrink-0 w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center">
            <span class="text-purple-600 font-bold">2018</span>
          </div>
          <div class="flex-1">
            <h3 class="text-xl font-bold mb-2">Building Community</h3>
            <p class="text-gray-600">Founded 'Future Thinker' platform to support emerging writers and thinkers. Community grows to 50,000+ members within first year.</p>
          </div>
        </div>
        
        <div class="flex gap-6 items-start">
          <div class="flex-shrink-0 w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center">
            <span class="text-orange-600 font-bold">2024</span>
          </div>
          <div class="flex-1">
            <h3 class="text-xl font-bold mb-2">Two Decades of Impact</h3>
            <p class="text-gray-600">Published 20th book "The Author's Mind" and launched international book tour, reaching readers across 25 countries.</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Philosophy Section -->
    <div class="grid md:grid-cols-2 gap-12 mb-20">
      <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-3xl p-8">
        <h3 class="text-2xl font-bold mb-4 text-blue-800">Writing Philosophy</h3>
        <p class="text-gray-700 mb-4">
          "I write to help people unlock their potential. Every book is a conversation with my readers, an exploration of what makes us human, and a guide to becoming better versions of ourselves."
        </p>
        <p class="text-gray-700">
          My approach combines rigorous research with practical wisdom, making complex ideas accessible and actionable for everyone.
        </p>
      </div>
      
      <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-3xl p-8">
        <h3 class="text-2xl font-bold mb-4 text-green-800">Core Values</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start gap-2">
            <i class="fas fa-check-circle text-green-600 mt-1"></i>
            <span><strong>Clarity:</strong> Making complex ideas simple</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-check-circle text-green-600 mt-1"></i>
            <span><strong>Authenticity:</strong> Writing from genuine experience</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-check-circle text-green-600 mt-1"></i>
            <span><strong>Impact:</strong> Creating positive change</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-check-circle text-green-600 mt-1"></i>
            <span><strong>Growth:</strong> Continuous learning and evolution</span>
          </li>
        </ul>
      </div>
    </div>

    <!-- Media & Press -->
    <div class="bg-white rounded-3xl shadow-xl p-8 mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">As Seen In</h2>
      <div class="grid grid-cols-2 md:grid-cols-4 gap-8 items-center">
        <div class="text-center">
          <div class="bg-gray-100 p-4 rounded-xl mb-2">
            <i class="fas fa-newspaper text-3xl text-gray-400"></i>
          </div>
          <p class="font-semibold">Forbes</p>
          <p class="text-sm text-gray-500">"A modern thinker"</p>
        </div>
        <div class="text-center">
          <div class="bg-gray-100 p-4 rounded-xl mb-2">
            <i class="fas fa-chart-line text-3xl text-gray-400"></i>
          </div>
          <p class="font-semibold">Wall Street Journal</p>
          <p class="text-sm text-gray-500">"#1 in business mindset"</p>
        </div>
        <div class="text-center">
          <div class="bg-gray-100 p-4 rounded-xl mb-2">
            <i class="fas fa-feather-alt text-3xl text-gray-400"></i>
          </div>
          <p class="font-semibold">The Guardian</p>
          <p class="text-sm text-gray-500">"20 books, 20 insights"</p>
        </div>
        <div class="text-center">
          <div class="bg-gray-100 p-4 rounded-xl mb-2">
            <i class="fas fa-microphone text-3xl text-gray-400"></i>
          </div>
          <p class="font-semibold">TED Talks</p>
          <p class="text-sm text-gray-500">"2M+ views"</p>
        </div>
      </div>
    </div>

    <!-- Personal Life Section -->
    <div class="text-center">
      <h2 class="text-3xl font-bold mb-8">Beyond <span class="text-blue-600">Writing</span></h2>
      <div class="grid md:grid-cols-3 gap-8 mb-12">
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-plane text-blue-600 text-xl"></i>
          </div>
          <h3 class="font-bold text-lg mb-2">Travel & Culture</h3>
          <p class="text-gray-600 text-sm">Has visited 47 countries, gathering wisdom and inspiration from diverse cultures worldwide.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-users text-green-600 text-xl"></i>
          </div>
          <h3 class="font-bold text-lg mb-2">Mentorship</h3>
          <p class="text-gray-600 text-sm">Personally mentors over 100 emerging writers through the Future Thinker platform.</p>
        </div>
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-music text-purple-600 text-xl"></i>
          </div>
          <h3 class="font-bold text-lg mb-2">Creative Pursuits</h3>
          <p class="text-gray-600 text-sm">Practices piano and photography as complementary creative outlets to writing.</p>
        </div>
      </div>
      
      <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-8 text-white">
        <h3 class="text-2xl font-bold mb-4">Connect with Alexander</h3>
        <p class="text-lg mb-6 opacity-90">Join the conversation and stay updated on new books, articles, and events</p>
        <div class="flex justify-center gap-4">
          <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition">
            <i class="fab fa-twitter"></i>
          </a>
          <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition">
            <i class="fab fa-instagram"></i>
          </a>
          <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition">
            <i class="fab fa-linkedin"></i>
          </a>
          <a href="#" class="w-12 h-12 bg-white/20 hover:bg-white/30 rounded-full flex items-center justify-center transition">
            <i class="fas fa-envelope"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
