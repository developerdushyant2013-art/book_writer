@extends('layouts.app')




@section('title', 'Contact Alexander Reed · Book Requests & Inquiries')
@section('description', 'Contact bestselling author Alexander Reed. Request new book topics, ask questions, or send inquiries. Get in touch via WhatsApp or contact form.')
@section('keywords', 'Contact Alexander Reed, book request, author contact, WhatsApp, inquiry, question, book topic request, bestselling author')
@section('canonical', url('/contact'))
@section('og-type', 'website')
@section('og-title', 'Contact Alexander Reed · Book Requests & Inquiries')
@section('og-description', 'Contact bestselling author Alexander Reed. Request new book topics, ask questions, or send inquiries. Get in touch via WhatsApp or contact form.')
@section('og-image', asset('images/alexander-reed-contact.jpg'))
@section('twitter-title', 'Contact Alexander Reed')
@section('twitter-description', 'Contact bestselling author Alexander Reed. Request new book topics, ask questions, or send inquiries.')
@section('twitter-image', asset('images/alexander-reed-contact.jpg'))


@section('content')
<!-- ***** CONTACT PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-indigo-50 via-white to-blue-50 min-h-screen">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-indigo-600 font-semibold tracking-wide uppercase">Get In Touch</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Connect with <span class="text-indigo-600">Alexander</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Whether you have a question, feedback, or want to request a new book topic, I'd love to hear from you.</p>
    </div>

    <div class="grid md:grid-cols-2 gap-12 mb-20">
      <!-- Contact Form -->
      <div class="bg-white rounded-3xl shadow-xl p-8">
        <h2 class="text-2xl font-bold mb-6">Send a <span class="text-indigo-600">Message</span></h2>
        <form id="contactForm" onsubmit="event.preventDefault(); sendToWhatsApp();" class="space-y-6">
          <div class="grid md:grid-cols-2 gap-4">
            <div>
              <label class="block text-gray-700 font-medium mb-2">First Name</label>
              <input type="text" id="firstName" required placeholder="John" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 outline-none transition">
            </div>
            <div>
              <label class="block text-gray-700 font-medium mb-2">Last Name</label>
              <input type="text" id="lastName" required placeholder="Doe" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 outline-none transition">
            </div>
          </div>
          
          <div>
            <label class="block text-gray-700 font-medium mb-2">Email Address</label>
            <input type="email" id="email" required placeholder="john@example.com" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 outline-none transition">
          </div>
          
          <div>
            <label class="block text-gray-700 font-medium mb-2">Subject</label>
            <select id="subject" class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 outline-none transition">
              <option>Book Topic Request</option>
              <option>General Inquiry</option>
              <option>Media Request</option>
              <option>Speaking Engagement</option>
              <option>Technical Support</option>
              <option>Other</option>
            </select>
          </div>
          
          <div>
            <label class="block text-gray-700 font-medium mb-2">Message</label>
            <textarea id="message" required rows="5" placeholder="What would you like to share with Alexander..." class="w-full border border-gray-300 rounded-lg px-4 py-3 focus:ring-2 focus:ring-indigo-300 focus:border-indigo-500 outline-none transition resize-none"></textarea>
          </div>
          
          <div class="flex items-center gap-3">
            <input type="checkbox" id="newsletter" class="w-4 h-4 text-indigo-600 rounded focus:ring-indigo-500">
            <label for="newsletter" class="text-sm text-gray-600">I'd like to receive newsletter updates</label>
          </div>
          
          <button type="submit" class="w-full bg-green-500 hover:bg-green-600 text-white font-bold py-4 rounded-full transition transform hover:scale-105 shadow-lg flex items-center justify-center gap-2">
            <i class="fab fa-whatsapp"></i>
            Send via WhatsApp
          </button>
        </form>
      </div>

      <!-- Contact Info & Book Request -->
      <div class="space-y-8">
        <!-- Quick Contact -->
        <div class="bg-white rounded-3xl shadow-xl p-8">
          <h2 class="text-2xl font-bold mb-6">Quick <span class="text-indigo-600">Contact</span></h2>
          <div class="space-y-4">
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                <i class="fas fa-envelope text-indigo-600"></i>
              </div>
              <div>
                <p class="font-semibold">Email</p>
                <p class="text-gray-600">contact@alexanderreed.com</p>
              </div>
            </div>
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                <i class="fas fa-clock text-indigo-600"></i>
              </div>
              <div>
                <p class="font-semibold">Response Time</p>
                <p class="text-gray-600">Within 48 hours</p>
              </div>
            </div>
            <div class="flex items-center gap-4">
              <div class="w-12 h-12 bg-indigo-100 rounded-full flex items-center justify-center">
                <i class="fas fa-globe text-indigo-600"></i>
              </div>
              <div>
                <p class="font-semibold">Languages</p>
                <p class="text-gray-600">English, Spanish, French</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Book Topic Request -->
        <div class="bg-gradient-to-br from-indigo-600 to-purple-600 rounded-3xl p-8 text-white">
          <h2 class="text-2xl font-bold mb-4">Request a <span class="text-yellow-300">Book Topic</span></h2>
          <p class="mb-6 opacity-90">Have an idea for the next book? I read every request and many become future projects!</p>
          <div class="bg-white/20 backdrop-blur rounded-xl p-4 mb-4">
            <p class="text-sm mb-2">Popular requests this month:</p>
            <div class="flex flex-wrap gap-2">
              <span class="bg-white/30 px-3 py-1 rounded-full text-xs">AI & Writing</span>
              <span class="bg-white/30 px-3 py-1 rounded-full text-xs">Remote Work</span>
              <span class="bg-white/30 px-3 py-1 rounded-full text-xs">Mental Health</span>
              <span class="bg-white/30 px-3 py-1 rounded-full text-xs">Creativity</span>
            </div>
          </div>
          <button onclick="scrollToForm()" class="w-full bg-white text-indigo-600 font-bold py-3 rounded-full hover:bg-gray-100 transition">
            Submit Your Idea
          </button>
        </div>

        <!-- Social Media -->
        <div class="bg-white rounded-3xl shadow-xl p-8">
          <h2 class="text-2xl font-bold mb-6">Follow <span class="text-indigo-600">Alexander</span></h2>
          <div class="grid grid-cols-3 gap-4">
            <a href="#" class="text-center group">
              <div class="w-16 h-16 bg-blue-100 group-hover:bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-2 transition">
                <i class="fab fa-twitter text-blue-600 text-xl"></i>
              </div>
              <p class="text-sm font-medium">Twitter</p>
            </a>
            <a href="#" class="text-center group">
              <div class="w-16 h-16 bg-pink-100 group-hover:bg-pink-200 rounded-full flex items-center justify-center mx-auto mb-2 transition">
                <i class="fab fa-instagram text-pink-600 text-xl"></i>
              </div>
              <p class="text-sm font-medium">Instagram</p>
            </a>
            <a href="#" class="text-center group">
              <div class="w-16 h-16 bg-blue-100 group-hover:bg-blue-200 rounded-full flex items-center justify-center mx-auto mb-2 transition">
                <i class="fab fa-linkedin text-blue-700 text-xl"></i>
              </div>
              <p class="text-sm font-medium">LinkedIn</p>
            </a>
            <a href="#" class="text-center group">
              <div class="w-16 h-16 bg-red-100 group-hover:bg-red-200 rounded-full flex items-center justify-center mx-auto mb-2 transition">
                <i class="fab fa-youtube text-red-600 text-xl"></i>
              </div>
              <p class="text-sm font-medium">YouTube</p>
            </a>
            <a href="#" class="text-center group">
              <div class="w-16 h-16 bg-green-100 group-hover:bg-green-200 rounded-full flex items-center justify-center mx-auto mb-2 transition">
                <i class="fab fa-goodreads text-green-600 text-xl"></i>
              </div>
              <p class="text-sm font-medium">Goodreads</p>
            </a>
            <a href="#" class="text-center group">
              <div class="w-16 h-16 bg-purple-100 group-hover:bg-purple-200 rounded-full flex items-center justify-center mx-auto mb-2 transition">
                <i class="fab fa-facebook text-purple-600 text-xl"></i>
              </div>
              <p class="text-sm font-medium">Facebook</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-white rounded-3xl shadow-xl p-8 mb-20">
      <h2 class="text-3xl font-bold mb-8 text-center">Frequently Asked <span class="text-indigo-600">Questions</span></h2>
      <div class="max-w-3xl mx-auto space-y-4">
        <div class="border border-gray-200 rounded-xl p-4">
          <button onclick="toggleFAQ(this)" class="w-full text-left flex justify-between items-center font-semibold text-gray-800 hover:text-indigo-600 transition">
            <span>How long does it take to get a response?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="hidden mt-3 text-gray-600">
            I personally read every message and respond within 48 hours. For book topic requests, I review them monthly and feature the most popular ones.
          </div>
        </div>
        
        <div class="border border-gray-200 rounded-xl p-4">
          <button onclick="toggleFAQ(this)" class="w-full text-left flex justify-between items-center font-semibold text-gray-800 hover:text-indigo-600 transition">
            <span>Do you accept speaking engagements?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="hidden mt-3 text-gray-600">
            Yes! I speak at conferences, corporate events, and workshops. Please use the contact form with "Speaking Engagement" as the subject.
          </div>
        </div>
        
        <div class="border border-gray-200 rounded-xl p-4">
          <button onclick="toggleFAQ(this)" class="w-full text-left flex justify-between items-center font-semibold text-gray-800 hover:text-indigo-600 transition">
            <span>Can I request a signed copy of your books?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="hidden mt-3 text-gray-600">
            Absolutely! Signed copies are available through my website. Just mention it in your message, and I'll personally sign your order.
          </div>
        </div>
        
        <div class="border border-gray-200 rounded-xl p-4">
          <button onclick="toggleFAQ(this)" class="w-full text-left flex justify-between items-center font-semibold text-gray-800 hover:text-indigo-600 transition">
            <span>Do you offer writing coaching?</span>
            <i class="fas fa-chevron-down transition-transform"></i>
          </button>
          <div class="hidden mt-3 text-gray-600">
            I mentor a limited number of emerging writers through the Future Thinker platform. Applications open quarterly.
          </div>
        </div>
      </div>
    </div>

    <!-- Success Message (Hidden by default) -->
    <div id="successMessage" class="hidden fixed top-4 right-4 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg z-50">
      <div class="flex items-center gap-3">
        <i class="fas fa-check-circle"></i>
        <span>Message sent successfully! I'll get back to you soon.</span>
      </div>
    </div>
  </div>
</section>
@endsection

@section('scripts')
<script>
  function sendToWhatsApp() {
    // Get form values using IDs
    const firstName = document.getElementById('firstName').value;
    const lastName = document.getElementById('lastName').value;
    const email = document.getElementById('email').value;
    const subject = document.getElementById('subject').value;
    const message = document.getElementById('message').value;
    const newsletter = document.getElementById('newsletter').checked;
    
    // Debug: Log values to console
    console.log('Form Values:', {
      firstName, lastName, email, subject, message, newsletter
    });
    
    // Validate form
    if (!firstName || !lastName || !email || !message) {
      alert('Please fill in all required fields');
      return;
    }
    
    // Create WhatsApp message
    const whatsappMessage = `📝 *New Contact Form Submission*%0A%0A` +
      `👤 *Name:* ${firstName} ${lastName}%0A` +
      `📧 *Email:* ${email}%0A` +
      `📋 *Subject:* ${subject}%0A` +
      `💬 *Message:* ${message}%0A` +
      `📬 *Newsletter:* ${newsletter ? 'Yes' : 'No'}%0A%0A` +
      `📅 *Sent:* ${new Date().toLocaleString()}%0A` +
      `🌐 *From:* Alexander Reed Website`;
    
    // WhatsApp number
    const whatsappNumber = '6387153302';
    
    // Create WhatsApp URL and open
    const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(whatsappMessage)}`;
    
    // Debug: Log WhatsApp URL
    console.log('WhatsApp URL:', whatsappUrl);
    
    // Open in new tab
    window.open(whatsappUrl, '_blank');
    
    // Show success message
    showSuccessMessage();
    
    // Reset form
    document.getElementById('contactForm').reset();
  }

  function showSuccessMessage() {
    // Create success message element
    const successDiv = document.createElement('div');
    successDiv.className = 'fixed top-4 right-4 bg-green-500 text-white px-6 py-4 rounded-lg shadow-lg z-50 flex items-center gap-3';
    successDiv.innerHTML = `
      <i class="fab fa-whatsapp text-2xl"></i>
      <div>
        <div class="font-bold">Opening WhatsApp...</div>
        <div class="text-sm">Your message is being sent to Alexander</div>
      </div>
    `;
    
    document.body.appendChild(successDiv);
    
    // Remove after 5 seconds
    setTimeout(() => {
      successDiv.remove();
    }, 5000);
  }

  function scrollToForm() {
    document.getElementById('contactForm').scrollIntoView({ behavior: 'smooth' });
  }

  function toggleFAQ(button) {
    const content = button.nextElementSibling;
    const icon = button.querySelector('i');
    
    content.classList.toggle('hidden');
    icon.classList.toggle('rotate-180');
  }
    })();
</script>
@endsection
