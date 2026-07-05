@extends('layouts.app')

@section('title', 'Events & Appearances · Alexander Reed')
@section('description', 'Join Alexander Reed at upcoming events, workshops, and book signings. Live appearances and virtual events worldwide.')
@section('keywords', 'Alexander Reed events, appearances, workshops, book signings, speaking engagements, author events, virtual events')
@section('canonical', url('/events'))
@section('og-type', 'website')
@section('og-title', 'Events & Appearances · Alexander Reed')
@section('og-description', 'Join Alexander Reed at upcoming events, workshops, and book signings. Live appearances and virtual events worldwide.')
@section('og-image', asset('images/alexander-reed-events.jpg'))
@section('twitter-title', 'Events & Appearances')
@section('twitter-description', 'Join Alexander Reed at upcoming events, workshops, and book signings. Live appearances worldwide.')
@section('twitter-image', asset('images/alexander-reed-events.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** EVENTS PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-purple-50 via-white to-pink-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-purple-600 font-semibold tracking-wide uppercase">Live Events & Appearances</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Join <span class="text-purple-600">Alexander</span> Live</h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Experience inspiring talks, workshops, and book signings around the world.</p>
    </div>

    <!-- Upcoming Events -->
    <div class="mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Upcoming <span class="text-purple-600">Events</span></h2>
      
      <div class="space-y-6">
        <!-- Event 1 -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
          <div class="md:flex">
            <div class="md:w-1/3">
              <img src="https://picsum.photos/id/100/400/300" alt="Event" class="w-full h-48 md:h-full object-cover">
            </div>
            <div class="md:w-2/3 p-8">
              <div class="flex flex-wrap gap-3 mb-4">
                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Book Talk</span>
                <span class="bg-pink-100 text-pink-800 px-3 py-1 rounded-full text-sm font-semibold">Signing</span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">In-Person</span>
              </div>
              <h3 class="text-2xl font-bold mb-3">The Future of Creativity in AI Age</h3>
              <p class="text-gray-600 mb-4">Join Alexander for an insightful discussion on how artificial intelligence is reshaping creativity and what it means for writers, artists, and thinkers.</p>
              <div class="grid md:grid-cols-3 gap-4 mb-6">
                <div class="flex items-center gap-2">
                  <i class="fas fa-calendar text-purple-600"></i>
                  <span class="text-sm"><strong>March 25, 2025</strong></span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-clock text-purple-600"></i>
                  <span class="text-sm"><strong>7:00 PM EST</strong></span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-map-marker-alt text-purple-600"></i>
                  <span class="text-sm"><strong>New York, NY</strong></span>
                </div>
              </div>
              <div class="flex flex-col sm:flex-row gap-3">
                <button class="bg-purple-600 hover:bg-purple-700 text-white px-6 py-3 rounded-full font-semibold transition">
                  Register Now
                </button>
                <button class="border border-purple-600 text-purple-600 hover:bg-purple-50 px-6 py-3 rounded-full font-semibold transition">
                  Learn More
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Event 2 -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
          <div class="md:flex">
            <div class="md:w-1/3">
              <img src="https://picsum.photos/id/101/400/300" alt="Event" class="w-full h-48 md:h-full object-cover">
            </div>
            <div class="md:w-2/3 p-8">
              <div class="flex flex-wrap gap-3 mb-4">
                <span class="bg-blue-100 text-blue-800 px-3 py-1 rounded-full text-sm font-semibold">Workshop</span>
                <span class="bg-green-100 text-green-800 px-3 py-1 rounded-full text-sm font-semibold">Virtual</span>
              </div>
              <h3 class="text-2xl font-bold mb-3">Master Your Morning: Writer's Productivity Workshop</h3>
              <p class="text-gray-600 mb-4">A hands-on workshop designed to help writers establish powerful morning routines that boost creativity and productivity throughout the day.</p>
              <div class="grid md:grid-cols-3 gap-4 mb-6">
                <div class="flex items-center gap-2">
                  <i class="fas fa-calendar text-blue-600"></i>
                  <span class="text-sm"><strong>April 8, 2025</strong></span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-clock text-blue-600"></i>
                  <span class="text-sm"><strong>2:00 PM EST</strong></span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-video text-blue-600"></i>
                  <span class="text-sm"><strong>Online Event</strong></span>
                </div>
              </div>
              <div class="flex flex-col sm:flex-row gap-3">
                <button class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-full font-semibold transition">
                  Register Now
                </button>
                <button class="border border-blue-600 text-blue-600 hover:bg-blue-50 px-6 py-3 rounded-full font-semibold transition">
                  Learn More
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Event 3 -->
        <div class="bg-white rounded-3xl shadow-xl overflow-hidden">
          <div class="md:flex">
            <div class="md:w-1/3">
              <img src="https://picsum.photos/id/102/400/300" alt="Event" class="w-full h-48 md:h-full object-cover">
            </div>
            <div class="md:w-2/3 p-8">
              <div class="flex flex-wrap gap-3 mb-4">
                <span class="bg-orange-100 text-orange-800 px-3 py-1 rounded-full text-sm font-semibold">Conference</span>
                <span class="bg-purple-100 text-purple-800 px-3 py-1 rounded-full text-sm font-semibold">Keynote</span>
              </div>
              <h3 class="text-2xl font-bold mb-3">Global Thinkers Forum 2025</h3>
              <p class="text-gray-600 mb-4">Alexander delivers the opening keynote on "The Mind Revolution" at this prestigious gathering of thought leaders and innovators.</p>
              <div class="grid md:grid-cols-3 gap-4 mb-6">
                <div class="flex items-center gap-2">
                  <i class="fas fa-calendar text-orange-600"></i>
                  <span class="text-sm"><strong>May 15-17, 2025</strong></span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-clock text-orange-600"></i>
                  <span class="text-sm"><strong>9:00 AM PST</strong></span>
                </div>
                <div class="flex items-center gap-2">
                  <i class="fas fa-map-marker-alt text-orange-600"></i>
                  <span class="text-sm"><strong>San Francisco, CA</strong></span>
                </div>
              </div>
              <div class="flex flex-col sm:flex-row gap-3">
                <button class="bg-orange-600 hover:bg-orange-700 text-white px-6 py-3 rounded-full font-semibold transition">
                  Register Now
                </button>
                <button class="border border-orange-600 text-orange-600 hover:bg-orange-50 px-6 py-3 rounded-full font-semibold transition">
                  Learn More
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Past Events -->
    <div class="mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Recent <span class="text-gray-600">Appearances</span></h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="bg-white rounded-2xl shadow-lg p-6">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
              <i class="fas fa-microphone text-gray-600"></i>
            </div>
            <div>
              <h3 class="font-bold">TED Talk 2024</h3>
              <p class="text-sm text-gray-500">December 2024</p>
            </div>
          </div>
          <p class="text-gray-600 mb-3">"The Power of Daily Writing" - 2M+ views</p>
          <a href="#" class="text-purple-600 font-medium hover:underline">Watch Recording →</a>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
              <i class="fas fa-users text-gray-600"></i>
            </div>
            <div>
              <h3 class="font-bold">London Book Fair</h3>
              <p class="text-sm text-gray-500">April 2024</p>
            </div>
          </div>
          <p class="text-gray-600 mb-3">Panel discussion on modern publishing</p>
          <a href="#" class="text-purple-600 font-medium hover:underline">View Photos →</a>
        </div>

        <div class="bg-white rounded-2xl shadow-lg p-6">
          <div class="flex items-center gap-3 mb-4">
            <div class="w-12 h-12 bg-gray-100 rounded-full flex items-center justify-center">
              <i class="fas fa-chalkboard-teacher text-gray-600"></i>
            </div>
            <div>
              <h3 class="font-bold">Writer's Workshop</h3>
              <p class="text-sm text-gray-500">February 2024</p>
            </div>
          </div>
          <p class="text-gray-600 mb-3">Creative writing masterclass</p>
          <a href="#" class="text-purple-600 font-medium hover:underline">See Materials →</a>
        </div>
      </div>
    </div>

    <!-- Event Types -->
    <div class="mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Event <span class="text-purple-600">Types</span></h2>
      <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-gradient-to-br from-purple-100 to-purple-200 rounded-2xl p-6 text-center">
          <div class="w-16 h-16 bg-purple-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-microphone text-white text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Keynote Speeches</h3>
          <p class="text-sm text-gray-600">Inspirational talks on creativity, productivity, and mindset</p>
        </div>
        <div class="bg-gradient-to-br from-blue-100 to-blue-200 rounded-2xl p-6 text-center">
          <div class="w-16 h-16 bg-blue-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-chalkboard-teacher text-white text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Workshops</h3>
          <p class="text-sm text-gray-600">Hands-on learning experiences for writers and thinkers</p>
        </div>
        <div class="bg-gradient-to-br from-green-100 to-green-200 rounded-2xl p-6 text-center">
          <div class="w-16 h-16 bg-green-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-book text-white text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Book Signings</h3>
          <p class="text-sm text-gray-600">Meet the author and get signed copies</p>
        </div>
        <div class="bg-gradient-to-br from-orange-100 to-orange-200 rounded-2xl p-6 text-center">
          <div class="w-16 h-16 bg-orange-600 rounded-full flex items-center justify-center mx-auto mb-4">
            <i class="fas fa-video text-white text-xl"></i>
          </div>
          <h3 class="font-bold mb-2">Virtual Events</h3>
          <p class="text-sm text-gray-600">Online sessions accessible worldwide</p>
        </div>
      </div>
    </div>

    <!-- Newsletter Signup -->
    <div class="bg-gradient-to-r from-purple-600 to-pink-600 rounded-3xl p-8 text-white text-center">
      <h2 class="text-3xl font-bold mb-4">Stay Updated on <span class="text-yellow-300">Events</span></h2>
      <p class="text-xl mb-6 opacity-90">Get early access to event registrations and exclusive content</p>
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
