@extends('layouts.app')

@section('content')

    <!-- ***** HOME / HERO SECTION ***** -->
    <section id="home" class="scroll-mt-16 bg-gradient-to-br from-blue-50 via-white to-indigo-50 py-12 md:py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12 items-center">
          <!-- left: intro -->
          <div class="space-y-6">
            <span class="text-blue-600 font-semibold tracking-wide">WELCOME TO THE WORLD OF IDEAS</span>
            <h1 class="text-4xl md:text-5xl font-bold leading-tight">Alexander Reed <span class="text-blue-600">· 20 books</span></h1>
            <p class="text-xl text-gray-600 max-w-lg">Bestselling author, thinker, and guide to mastering creativity, productivity, and the digital age.</p>
            <div class="flex flex-wrap gap-4">
              <a href="#books" class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-full shadow-md transition transform hover:scale-105">Explore books</a>
              <a href="#contact" class="border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white font-semibold px-8 py-3 rounded-full transition transform hover:scale-105">Contact Alex</a>
            </div>
            <div class="flex items-center gap-4 pt-4 text-sm text-gray-500">
              <span><i class="fas fa-star text-yellow-400 mr-1"></i> 50k+ copies sold</span>
              <span><i class="fas fa-globe mr-1"></i> 12 languages</span>
            </div>
          </div>
          <!-- right: author image + short bio -->
          <div class="relative flex flex-col items-center md:items-end">
            <div class="w-64 h-64 md:w-80 md:h-80 rounded-full overflow-hidden shadow-2xl border-4 border-white">
              <img src="https://images.unsplash.com/photo-1568602471122-7832951cc4c5?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="Alexander Reed" class="w-full h-full object-cover">
            </div>
            <div class="mt-6 bg-white p-5 rounded-2xl shadow-lg max-w-xs md:absolute md:bottom-0 md:left-0 md:mt-0 border border-gray-100">
              <p class="text-gray-700 italic">“I write to help people unlock their potential. 20 books later, my mission stays the same.”</p>
              <div class="flex items-center mt-3">
                <i class="fas fa-quote-right text-blue-300 text-xl"></i>
                <span class="ml-2 font-bold">— Alexander Reed</span>
              </div>
            </div>
          </div>
        </div>

        <!-- testimonials (mini) + latest articles teaser -->
        <div class="grid md:grid-cols-3 gap-6 mt-20">
          <div class="bg-white p-5 rounded-xl shadow-sm flex items-start gap-3 card-hover">
            <i class="fas fa-star text-blue-500 text-2xl"></i>
            <div><p class="font-semibold">"A modern thinker"</p><p class="text-sm text-gray-500">— Forbes</p></div>
          </div>
          <div class="bg-white p-5 rounded-xl shadow-sm flex items-start gap-3 card-hover">
            <i class="fas fa-fire text-blue-500 text-2xl"></i>
            <div><p class="font-semibold">"#1 in business mindset"</p><p class="text-sm text-gray-500">— WSJ</p></div>
          </div>
          <div class="bg-white p-5 rounded-xl shadow-sm flex items-start gap-3 card-hover">
            <i class="fas fa-pen-fancy text-blue-500 text-2xl"></i>
            <div><p class="font-semibold">"20 books, 20 insights"</p><p class="text-sm text-gray-500">— The Guardian</p></div>
          </div>
        </div>

        <!-- latest articles (home preview) -->
        <div class="mt-16">
          <h2 class="text-3xl font-bold mb-8">Latest articles <span class="text-blue-600">✎</span></h2>
          <div id="home-blog-preview" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- will be filled by JS (same as first 3 blog posts) -->
          </div>
          <div class="text-center mt-8">
            <a href="#blog" class="inline-block text-blue-600 font-semibold hover:underline">view all articles →</a>
          </div>
        </div>
      </div>
    </section>

    <!-- ***** ABOUT SECTION ***** -->
    <section id="about" class="scroll-mt-16 py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold mb-4 text-center">About <span class="text-blue-600">Alexander</span></h2>
        <p class="text-center text-gray-500 max-w-2xl mx-auto">Two decades of writing, thinking, and inspiring minds worldwide.</p>
        
        <div class="grid md:grid-cols-2 gap-12 mt-12 items-start">
          <!-- author photo + achievements -->
          <div class="space-y-6">
            <img src="https://images.unsplash.com/photo-1544717305-2782549b5136?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80" alt="author writing" class="rounded-2xl shadow-xl w-full h-80 object-cover">
            <div class="grid grid-cols-2 gap-4 text-center">
              <div class="bg-blue-50 p-4 rounded-xl"><span class="font-bold text-3xl text-blue-600">20</span><br>books</div>
              <div class="bg-blue-50 p-4 rounded-xl"><span class="font-bold text-3xl text-blue-600">12</span><br>languages</div>
              <div class="bg-blue-50 p-4 rounded-xl"><span class="font-bold text-3xl text-blue-600">1M+</span><br>readers</div>
              <div class="bg-blue-50 p-4 rounded-xl"><span class="font-bold text-3xl text-blue-600">15</span><br>awards</div>
            </div>
          </div>
          <!-- full bio + timeline -->
          <div class="space-y-6">
            <p class="text-lg text-gray-700 leading-relaxed">Alexander Reed started as a curious philosopher and became one of the most influential non-fiction authors of the decade. With 20 published works, he bridges timeless wisdom and modern challenges — from productivity to artificial intelligence.</p>
            <div class="border-l-4 border-blue-300 pl-6 space-y-6">
              <div class="relative"><span class="absolute -left-8 top-1 w-4 h-4 bg-blue-500 rounded-full timeline-dot"></span><span class="font-bold text-blue-600">2008</span><p class="text-gray-700">Debut: <i>The Power of Knowledge</i> (awarded best debut)</p></div>
              <div class="relative"><span class="absolute -left-8 top-1 w-4 h-4 bg-blue-500 rounded-full timeline-dot"></span><span class="font-bold text-blue-600">2013</span><p class="text-gray-700">Bestseller <i>Mastering Success</i> – New York Times list</p></div>
              <div class="relative"><span class="absolute -left-8 top-1 w-4 h-4 bg-blue-500 rounded-full timeline-dot"></span><span class="font-bold text-blue-600">2018</span><p class="text-gray-700">Founded 'Future Thinker' platform for young writers</p></div>
              <div class="relative"><span class="absolute -left-8 top-1 w-4 h-4 bg-blue-500 rounded-full timeline-dot"></span><span class="font-bold text-blue-600">2024</span><p class="text-gray-700">20th book: <i>The Author's Mind</i> – international tour</p></div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ***** BOOKS SECTION (20 books grid) ***** -->
    <section id="books" class="scroll-mt-16 py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center flex-wrap">
          <h2 class="text-4xl font-bold">All 20 <span class="text-blue-600">books</span></h2>
          <!-- book promotion banner -->
          <div class="bg-blue-600 text-white px-6 py-3 rounded-full font-semibold shadow-md"><i class="fas fa-gift mr-2"></i>Buy 3 books, get 1 free – limited</div>
        </div>
        <p class="text-gray-500 mt-2 mb-8">Explore the complete collection – each book holds a key to a better mindset.</p>
        
        <!-- book cards container (populated by js) -->
        <div id="booksContainer" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-6"></div>
      </div>
    </section>

    <!-- ***** BLOG SECTION ***** -->
    <section id="blog" class="scroll-mt-16 py-20 bg-white">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-4xl font-bold mb-4">Insights & <span class="text-blue-600">articles</span></h2>
        <p class="text-gray-500 mb-10">Thoughts on writing, creativity, and the habits of mind.</p>
        <div id="blogContainer" class="grid md:grid-cols-2 lg:grid-cols-3 gap-8"></div>
      </div>
    </section>

    <!-- ***** CONTACT SECTION (form + newsletter) ***** -->
    <section id="contact" class="scroll-mt-16 py-20 bg-gradient-to-br from-indigo-50 to-blue-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid md:grid-cols-2 gap-12">
          <!-- contact form -->
          <div class="bg-white p-8 rounded-3xl shadow-xl">
            <h3 class="text-3xl font-bold mb-6">Request a <span class="text-blue-600">book topic</span></h3>
            <form id="welcomeContactForm" onsubmit="event.preventDefault(); sendToWhatsApp();">
              <div class="mb-4">
                <label class="block text-gray-700 mb-1">Your name</label>
                <input type="text" id="welcomeName" placeholder="e.g., Sarah" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-300 outline-none" required>
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email address</label>
                <input type="email" id="welcomeEmail" placeholder="sarah@example.com" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-300 outline-none" required>
              </div>
              <div class="mb-4">
                <label class="block text-gray-700 mb-1">What topic should Alex write about next?</label>
                <textarea rows="4" id="welcomeMessage" placeholder="I'd love a book on ..." class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-blue-300 outline-none" required></textarea>
              </div>
              <button type="submit" class="bg-green-600 hover:bg-green-700 text-white font-bold py-3 px-8 rounded-full transition transform hover:scale-105 w-full">
                <i class="fab fa-whatsapp mr-2"></i>Send via WhatsApp
              </button>
            </form>
          </div>
          <!-- newsletter & social -->
          <div class="space-y-8">
            <div class="bg-white/70 backdrop-blur p-8 rounded-3xl shadow-lg">
              <h4 class="text-2xl font-bold mb-4"><i class="fas fa-envelope-open-text text-blue-600 mr-2"></i>Newsletter</h4>
              <p class="text-gray-600 mb-4">Get a free chapter from <i>The Author's Mind</i> when you subscribe.</p>
              <form onsubmit="event.preventDefault(); alert('Thank you for subscribing! (demo)');">
                <div class="flex">
                  <input type="email" placeholder="Your email" class="flex-1 border border-gray-300 rounded-l-full px-5 py-3 focus:ring-2 focus:ring-blue-300 outline-none">
                  <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-r-full font-semibold">Join</button>
                </div>
              </form>
            </div>
            <div class="bg-white/70 backdrop-blur p-8 rounded-3xl shadow-lg">
              <h4 class="text-2xl font-bold mb-4">Connect</h4>
              <div class="flex space-x-6 text-3xl text-gray-600">
                <a href="https://twitter.com/alexanderreed" target="_blank" class="hover:text-blue-600 transition"><i class="fab fa-twitter"></i></a>
                <a href="https://instagram.com/alexanderreed" target="_blank" class="hover:text-blue-600 transition"><i class="fab fa-instagram"></i></a>
                <a href="https://linkedin.com/in/alexanderreed" target="_blank" class="hover:text-blue-600 transition"><i class="fab fa-linkedin"></i></a>
                <a href="https://goodreads.com/author/alexanderreed" target="_blank" class="hover:text-blue-600 transition"><i class="fab fa-goodreads"></i></a>
                <a href="https://youtube.com/c/alexanderreed" target="_blank" class="hover:text-blue-600 transition"><i class="fab fa-youtube"></i></a>
                <a href="/contact" class="hover:text-blue-600 transition"><i class="fas fa-envelope"></i></a>
              </div>
              <p class="mt-4 text-gray-500"><i class="far fa-envelope mr-1"></i> contact@alexanderreed.com</p>
            </div>
          </div>
        </div>
      </div>
    </section>
  @endsection

@section('scripts')
  <!-- data injection for books, blog, preview -->
  <script>
    (function() {
      // ---------- DATA ----------
      const books = [
        { title: "The Power of Knowledge", desc: "Unlock the secrets of learning.", category: "Philosophy", year: 2008, img: "https://picsum.photos/id/24/200/300" },
        { title: "Mastering Success", desc: "Habits of high achievers.", category: "Self-help", year: 2010, img: "https://picsum.photos/id/26/200/300" },
        { title: "Journey of a Thinker", desc: "Reflections on a curious life.", category: "Memoir", year: 2012, img: "https://picsum.photos/id/28/200/300" },
        { title: "The Mind Revolution", desc: "Change your thinking, change everything.", category: "Neuroscience", year: 2013, img: "https://picsum.photos/id/30/200/300" },
        { title: "Secrets of Productivity", desc: "Do more with less stress.", category: "Productivity", year: 2014, img: "https://picsum.photos/id/32/200/300" },
        { title: "The Digital Age Author", desc: "Writing in a connected world.", category: "Publishing", year: 2015, img: "https://picsum.photos/id/34/200/300" },
        { title: "Creative Intelligence", desc: "Unleash your innovative self.", category: "Creativity", year: 2016, img: "https://picsum.photos/id/36/200/300" },
        { title: "The Art of Thinking", desc: "Clearer decisions, better life.", category: "Psychology", year: 2017, img: "https://picsum.photos/id/38/200/300" },
        { title: "Visionary Leadership", desc: "Lead with purpose.", category: "Business", year: 2018, img: "https://picsum.photos/id/40/200/300" },
        { title: "Modern Wisdom", desc: "Ancient truths for today.", category: "Philosophy", year: 2019, img: "https://picsum.photos/id/42/200/300" },
        { title: "The Growth Formula", desc: "Continuous improvement.", category: "Self-help", year: 2019, img: "https://picsum.photos/id/44/200/300" },
        { title: "Unlock Your Potential", desc: "Break through limits.", category: "Motivation", year: 2020, img: "https://picsum.photos/id/46/200/300" },
        { title: "Knowledge Economy", desc: "Thrive in the new world.", category: "Economics", year: 2020, img: "https://picsum.photos/id/48/200/300" },
        { title: "The Future Thinker", desc: "Anticipate tomorrow.", category: "Futurism", year: 2021, img: "https://picsum.photos/id/50/200/300" },
        { title: "The Inspired Mind", desc: "Daily creativity.", category: "Art", year: 2021, img: "https://picsum.photos/id/52/200/300" },
        { title: "The Power of Learning", desc: "Learn faster, remember more.", category: "Education", year: 2022, img: "https://picsum.photos/id/54/200/300" },
        { title: "Smart Decision Making", desc: "Avoid biases.", category: "Psychology", year: 2022, img: "https://picsum.photos/id/56/200/300" },
        { title: "The Innovation Code", desc: "Build breakthrough ideas.", category: "Business", year: 2023, img: "https://picsum.photos/id/58/200/300" },
        { title: "Rise of Creativity", desc: "Why creativity matters now.", category: "Culture", year: 2023, img: "https://picsum.photos/id/60/200/300" },
        { title: "The Author's Mind", desc: "A life of writing.", category: "Memoir", year: 2024, img: "https://picsum.photos/id/62/200/300" }
      ];

      const blogPosts = [
        { title: "Why I wrote 20 books", summary: "Reflections on persistence and passion.", image: "https://picsum.photos/id/20/400/250", date: "Mar 2, 2025" },
        { title: "The one habit every writer needs", summary: "Daily routines that unlock creativity.", image: "https://picsum.photos/id/21/400/250", date: "Feb 18, 2025" },
        { title: "How to request a book topic (and I listen)", summary: "Your ideas shape my next project.", image: "https://picsum.photos/id/22/400/250", date: "Feb 1, 2025" },
        { title: "Reading list for 2025", summary: "Books that changed my perspective.", image: "https://picsum.photos/id/23/400/250", date: "Jan 15, 2025" },
        { title: "Silence and the creative mind", summary: "Why solitude fuels great writing.", image: "https://picsum.photos/id/25/400/250", date: "Dec 28, 2024" },
        { title: "From idea to 20 books", summary: "A short retrospective.", image: "https://picsum.photos/id/27/400/250", date: "Dec 5, 2024" }
      ];


      // render books into booksContainer
      const booksContainer = document.getElementById('booksContainer');
      if (booksContainer) {
        booksContainer.innerHTML = books.map(book => `
          <div class="bg-white rounded-xl shadow-md overflow-hidden card-hover hover:shadow-xl flex flex-col h-full border border-gray-100">
            <img src="${book.img}" alt="${book.title}" class="w-full h-48 object-cover">
            <div class="p-4 flex-1 flex flex-col">
              <h3 class="font-bold text-lg mb-1">${book.title}</h3>
              <p class="text-sm text-gray-500 mb-2">${book.category} · ${book.year}</p>
              <p class="text-sm text-gray-600 mb-4 line-clamp-2">${book.desc}</p>
              <div class="mt-auto flex justify-between items-center">
                <span class="text-xs bg-blue-100 text-blue-800 px-2 py-1 rounded-full">${book.category}</span>
                <a href="#" class="text-blue-600 hover:text-blue-800 text-sm font-medium transition">Read more →</a>
              </div>
            </div>
          </div>
        `).join('');
      }

      // render blog into blogContainer
      const blogContainer = document.getElementById('blogContainer');
      if (blogContainer) {
        blogContainer.innerHTML = blogPosts.map(post => `
          <div class="bg-white rounded-2xl shadow-md overflow-hidden card-hover hover:shadow-xl border border-gray-100">
            <img src="${post.image}" alt="${post.title}" class="w-full h-48 object-cover">
            <div class="p-5">
              <p class="text-xs text-blue-500 font-semibold uppercase">${post.date}</p>
              <h3 class="font-bold text-xl my-2">${post.title}</h3>
              <p class="text-gray-600 mb-4">${post.summary}</p>
              <a href="#" class="text-blue-600 font-medium inline-flex items-center hover:underline">Read full article <i class="fas fa-arrow-right ml-2 text-sm"></i></a>
            </div>
          </div>
        `).join('');
      }

      // home blog preview (first 3)
      const preview = document.getElementById('home-blog-preview');
      if (preview) {
        preview.innerHTML = blogPosts.slice(0,3).map(post => `
          <div class="bg-white rounded-xl shadow-sm overflow-hidden card-hover">
            <img src="${post.image}" alt="${post.title}" class="w-full h-40 object-cover">
            <div class="p-4">
              <h4 class="font-bold">${post.title}</h4>
              <p class="text-sm text-gray-500">${post.summary.substring(0,45)}…</p>
            </div>
          </div>
        `).join('');
      }

      // WhatsApp function for welcome form
      function sendToWhatsApp() {
        console.log('sendToWhatsApp function called');
        
        const name = document.getElementById('welcomeName');
        const email = document.getElementById('welcomeEmail');
        const message = document.getElementById('welcomeMessage');
        
        console.log('Elements found:', { name, email, message });
        
        if (!name || !email || !message) {
          console.log('Validation failed');
          alert('Please fill in all fields before sending.');
          return;
        }
        
        const nameValue = name.value.trim();
        const emailValue = email.value.trim();
        const messageValue = message.value.trim();
        
        console.log('Form values:', { nameValue, emailValue, messageValue });
        
        if (!nameValue || !emailValue || !messageValue) {
          console.log('Trim validation failed');
          alert('Please fill in all fields before sending.');
          return;
        }
        
        const whatsappMessage = `*New Book Topic Request*%0A%0A*Name:* ${nameValue}%0A*Email:* ${emailValue}%0A*Topic Request:* ${messageValue}`;
        const whatsappUrl = `https://wa.me/6387153302?text=${encodeURIComponent(whatsappMessage)}`;
        
        console.log('WhatsApp URL:', whatsappUrl);
        console.log('Opening WhatsApp...');
        
        window.open(whatsappUrl, '_blank');
        
        // Clear form after sending
        name.value = '';
        email.value = '';
        message.value = '';
        
        alert('Message sent to WhatsApp successfully!');
      }
      
      // Form submit test
      document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM loaded');
        const form = document.getElementById('welcomeContactForm');
        if (form) {
          console.log('Form found, adding submit listener');
          form.addEventListener('submit', function(e) {
            console.log('Form submit event triggered');
            e.preventDefault();
            sendToWhatsApp();
          });
        }
      });
    })();
  </script>
@endsection