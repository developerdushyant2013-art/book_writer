@extends('layouts.app')

@section('title', 'FAQ · Frequently Asked Questions · Alexander Reed')
@section('description', 'Frequently asked questions about Alexander Reed, books, events, writing, and more. Get answers to common inquiries.')
@section('keywords', 'FAQ, frequently asked questions, Alexander Reed FAQ, author questions, book questions, writing tips, help center')
@section('canonical', url('/faq'))
@section('og-type', 'website')
@section('og-title', 'FAQ · Frequently Asked Questions · Alexander Reed')
@section('og-description', 'Frequently asked questions about Alexander Reed, books, events, writing, and more. Get answers to common inquiries.')
@section('og-image', asset('images/alexander-reed-faq.jpg'))
@section('twitter-title', 'FAQ · Frequently Asked Questions')
@section('twitter-description', 'Frequently asked questions about Alexander Reed, books, events, and writing. Get answers to common inquiries.')
@section('twitter-image', asset('images/alexander-reed-faq.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** FAQ PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-blue-50 via-white to-green-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-blue-600 font-semibold tracking-wide uppercase">Help Center</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Frequently Asked <span class="text-blue-600">Questions</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Everything you need to know about Alexander Reed's books, events, and more.</p>
    </div>

    <!-- Search Bar -->
    <div class="max-w-2xl mx-auto mb-16">
      <div class="relative">
        <input type="text" id="faqSearch" placeholder="Search for answers..." 
               class="w-full px-6 py-4 rounded-full border border-gray-300 text-lg focus:ring-2 focus:ring-blue-300 focus:border-blue-500 outline-none">
        <button class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-blue-600 text-white w-10 h-10 rounded-full flex items-center justify-center hover:bg-blue-700 transition">
          <i class="fas fa-search"></i>
        </button>
      </div>
    </div>

    <!-- FAQ Categories -->
    <div class="flex flex-wrap justify-center gap-3 mb-12">
      <button onclick="filterFAQ('all')" class="faq-filter px-6 py-2 bg-blue-600 text-white rounded-full font-medium hover:bg-blue-700 transition">All Questions</button>
      <button onclick="filterFAQ('books')" class="faq-filter px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Books</button>
      <button onclick="filterFAQ('events')" class="faq-filter px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Events</button>
      <button onclick="filterFAQ('writing')" class="faq-filter px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Writing</button>
      <button onclick="filterFAQ('contact')" class="faq-filter px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Contact</button>
      <button onclick="filterFAQ('orders')" class="faq-filter px-6 py-2 bg-white text-gray-700 rounded-full font-medium hover:bg-gray-100 transition border">Orders</button>
    </div>

    <!-- FAQ Items -->
    <div class="max-w-4xl mx-auto space-y-4 mb-20">
      <!-- Books Category -->
      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="books">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-book text-blue-600"></i>
            <span>How many books has Alexander Reed written?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          Alexander Reed has written 20 books spanning topics from productivity and creativity to philosophy and personal development. His first book was published in 2008, and he continues to release new works regularly.
        </div>
      </div>

      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="books">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-book text-blue-600"></i>
            <span>Which book should I read first?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          For beginners, I recommend starting with "Mastering Success" as it provides a great foundation. If you're interested in creativity, "The Mind Revolution" is an excellent choice. Each book is designed to stand alone, so you can start with any topic that interests you most.
        </div>
      </div>

      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="books">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-globe text-blue-600"></i>
            <span>Are books available in other languages?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          Yes! Alexander's books have been translated into 12 languages including Spanish, French, German, Italian, Portuguese, Japanese, Chinese, Korean, Arabic, Russian, Hindi, and Dutch. Check your local bookstore or online retailers for availability.
        </div>
      </div>

      <!-- Events Category -->
      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="events">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-calendar text-purple-600"></i>
            <span>How can I attend Alexander's events?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          Check the Events page for upcoming appearances. You can register online for virtual events or purchase tickets for in-person appearances. Sign up for the newsletter to get early access to event registrations.
        </div>
      </div>

      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="events">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-microphone text-purple-600"></i>
            <span>Does Alexander do speaking engagements?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          Yes! Alexander is available for speaking engagements at conferences, corporate events, and educational institutions. Please use the contact form with "Speaking Engagement" as the subject, and include details about your event, dates, and audience.
        </div>
      </div>

      <!-- Writing Category -->
      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="writing">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-pen text-green-600"></i>
            <span>How can I request a book topic?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          I love hearing from readers! Use the contact form to suggest topics for future books. I personally review every request and many ideas become future projects. Popular topics this year include AI & Writing, Remote Work, and Mental Health.
        </div>
      </div>

      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="writing">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-users text-green-600"></i>
            <span>Do you offer writing coaching?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          I mentor a limited number of emerging writers through the Future Thinker platform. Applications open quarterly. You can also find writing tips and resources in my blog posts and newsletter.
        </div>
      </div>

      <!-- Contact Category -->
      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="contact">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-envelope text-orange-600"></i>
            <span>How long does it take to get a response?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          I personally read every message and respond within 48 hours. For urgent media inquiries, please mark your message as high priority. Book topic requests are reviewed monthly.
        </div>
      </div>

      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="contact">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-feather text-orange-600"></i>
            <span>Can I get a signed copy?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          Absolutely! Signed copies are available through my website. Just mention it in your order notes, and I'll personally sign your book before shipping. Signed copies make great gifts!
        </div>
      </div>

      <!-- Orders Category -->
      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="orders">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-shopping-cart text-red-600"></i>
            <span>Where can I buy the books?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          Books are available worldwide through major retailers including Amazon, Barnes & Noble, and independent bookstores. You can also order signed copies directly from this website. E-book and audiobook versions are available on most platforms.
        </div>
      </div>

      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="orders">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-truck text-red-600"></i>
            <span>Do you ship internationally?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          Yes! We ship worldwide. International shipping typically takes 7-14 business days. Shipping costs vary by location. You can check rates at checkout before placing your order.
        </div>
      </div>

      <div class="faq-item bg-white rounded-2xl shadow-lg overflow-hidden" data-category="orders">
        <button onclick="toggleFAQ(this)" class="w-full text-left p-6 flex justify-between items-center font-semibold text-gray-800 hover:text-blue-600 transition">
          <div class="flex items-center gap-3">
            <i class="fas fa-undo text-red-600"></i>
            <span>What is your return policy?</span>
          </div>
          <i class="fas fa-chevron-down transition-transform"></i>
        </button>
        <div class="hidden px-6 pb-6 text-gray-600">
          We offer a 30-day return policy for books in new condition. If you're not satisfied with your purchase, please contact us within 30 days for a full refund or exchange. E-books and audiobolds have different return policies based on the platform.
        </div>
      </div>
    </div>

    <!-- Still Need Help -->
    <div class="bg-gradient-to-r from-blue-600 to-purple-600 rounded-3xl p-8 text-white text-center">
      <h2 class="text-3xl font-bold mb-4">Still Have <span class="text-yellow-300">Questions?</span></h2>
      <p class="text-xl mb-6 opacity-90">Can't find what you're looking for? Reach out directly!</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center">
        <a href="/contact" class="bg-white text-blue-600 px-8 py-3 rounded-full font-bold hover:bg-gray-100 transition">
          Contact Support
        </a>
        <a href="/contact" class="border-2 border-white text-white px-8 py-3 rounded-full font-bold hover:bg-white hover:text-blue-600 transition">
          Request Book Topic
        </a>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('.fa-chevron-down');
    
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
  }

  function filterFAQ(category) {
    const items = document.querySelectorAll('.faq-item');
    const buttons = document.querySelectorAll('.faq-filter');
    
    // Update button styles
    buttons.forEach(btn => {
      btn.classList.remove('bg-blue-600', 'text-white');
      btn.classList.add('bg-white', 'text-gray-700', 'border');
    });
    
    event.target.classList.remove('bg-white', 'text-gray-700', 'border');
    event.target.classList.add('bg-blue-600', 'text-white');
    
    // Filter items
    items.forEach(item => {
      if (category === 'all' || item.dataset.category === category) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  }

  // Search functionality
  document.getElementById('faqSearch')?.addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const items = document.querySelectorAll('.faq-item');
    
    items.forEach(item => {
      const text = item.textContent.toLowerCase();
      if (text.includes(searchTerm)) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  });
</script>
@endsection
