@extends('layouts.app')

@section('title', 'Terms of Service · Alexander Reed')
@section('description', 'Terms of service for Alexander Reed website. Legal information about using our services, books, and content.')
@section('keywords', 'Terms of service, legal, terms and conditions, Alexander Reed, website terms, usage terms')
@section('canonical', url('/terms'))
@section('og-type', 'website')
@section('og-title', 'Terms of Service · Alexander Reed')
@section('og-description', 'Terms of service for Alexander Reed website. Legal information about using our services, books, and content.')
@section('og-image', asset('images/alexander-reed-legal.jpg'))
@section('twitter-title', 'Terms of Service')
@section('twitter-description', 'Terms of service for Alexander Reed website. Legal information about using our services.')
@section('twitter-image', asset('images/alexander-reed-legal.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** TERMS OF SERVICE PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-indigo-50 min-h-screen">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-gray-600 font-semibold tracking-wide uppercase">Legal Information</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Terms of <span class="text-indigo-600">Service</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">By using our website and services, you agree to these terms and conditions.</p>
    </div>

    <!-- Last Updated -->
    <div class="bg-indigo-50 border border-indigo-200 rounded-xl p-4 mb-8">
      <p class="text-sm text-indigo-800"><strong>Last Updated:</strong> March 15, 2025</p>
    </div>

    <!-- Terms Content -->
    <div class="bg-white rounded-3xl shadow-xl p-8 space-y-8">
      
      <!-- Agreement -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">1. Agreement to Terms</h2>
        <p class="text-gray-700">By accessing and using Alexander Reed's website (alexanderreed.com), you accept and agree to be bound by the terms and provision of this agreement. If you do not agree to abide by the above, please do not use this service.</p>
      </div>

      <!-- Description of Service -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">2. Description of Service</h2>
        <p class="text-gray-700 mb-4">Alexander Reed provides:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-indigo-600 mt-1"></i>
            <span>Information about books and publications</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-indigo-600 mt-1"></i>
            <span>Blog articles and writing resources</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-indigo-600 mt-1"></i>
            <span>Event registration and management</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-indigo-600 mt-1"></i>
            <span>Newsletter subscription services</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-indigo-600 mt-1"></i>
            <span>Book sales and distribution</span>
          </li>
        </ul>
      </div>

      <!-- User Conduct -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">3. User Conduct</h2>
        <p class="text-gray-700 mb-4">You agree not to:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-times text-red-600 mt-1"></i>
            <span>Use the service for any illegal or unauthorized purpose</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-times text-red-600 mt-1"></i>
            <span>Spam, harass, or abuse other users</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-times text-red-600 mt-1"></i>
            <span>Violate any applicable laws or regulations</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-times text-red-600 mt-1"></i>
            <span>Infringe on intellectual property rights</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-times text-red-600 mt-1"></i>
            <span>Attempt to gain unauthorized access to our systems</span>
          </li>
        </ul>
      </div>

      <!-- Intellectual Property -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">4. Intellectual Property</h2>
        <p class="text-gray-700 mb-4">All content on this website, including but not limited to:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-book text-indigo-600 mt-1"></i>
            <span>Books and written materials</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-pen text-indigo-600 mt-1"></i>
            <span>Blog posts and articles</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-image text-indigo-600 mt-1"></i>
            <span>Images and graphics</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-code text-indigo-600 mt-1"></i>
            <span>Website design and code</span>
          </li>
        </ul>
        <p class="text-gray-700 mt-4">are owned by Alexander Reed and protected by copyright, trademark, and other intellectual property laws. You may not use, reproduce, or distribute any content without explicit permission.</p>
      </div>

      <!-- Products and Services -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">5. Products and Services</h2>
        <div class="space-y-4">
          <div>
            <h3 class="font-bold text-lg mb-2">Books and Digital Products</h3>
            <p class="text-gray-600">All sales are final. Digital products cannot be returned once downloaded. Physical books may be returned within 30 days in new condition.</p>
          </div>
          <div>
            <h3 class="font-bold text-lg mb-2">Events and Workshops</h3>
            <p class="text-gray-600">Registration fees are non-refundable unless the event is cancelled. Transfers may be available with advance notice.</p>
          </div>
          <div>
            <h3 class="font-bold text-lg mb-2">Free Resources</h3>
            <p class="text-gray-600">Free resources are provided for personal use only. Commercial use requires explicit permission.</p>
          </div>
        </div>
      </div>

      <!-- Payment Terms -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">6. Payment Terms</h2>
        <p class="text-gray-700 mb-4">Payment processing is handled through secure third-party providers. By making a purchase, you agree to:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-check text-green-600 mt-1"></i>
            <span>Provide accurate payment information</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-check text-green-600 mt-1"></i>
            <span>Pay all applicable fees and taxes</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-check text-green-600 mt-1"></i>
            <span>Authorize payment for selected services</span>
          </li>
        </ul>
      </div>

      <!-- Privacy -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">7. Privacy</h2>
        <p class="text-gray-700">Your privacy is important to us. Please review our Privacy Policy, which also governs your use of our service, to understand our practices.</p>
      </div>

      <!-- Disclaimer of Warranties -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">8. Disclaimer of Warranties</h2>
        <p class="text-gray-700">The information on this website is provided on an "as is" basis. We disclaim all warranties, express or implied, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.</p>
      </div>

      <!-- Limitation of Liability -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">9. Limitation of Liability</h2>
        <p class="text-gray-700">In no event shall Alexander Reed, our directors, employees, partners, agents, suppliers, or affiliates be liable for any indirect, incidental, special, consequential, or punitive damages, including without limitation, loss of profits, data, use, goodwill, or other intangible losses.</p>
      </div>

      <!-- Indemnification -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">10. Indemnification</h2>
        <p class="text-gray-700">You agree to defend, indemnify, and hold harmless Alexander Reed and our licensee and licensors, and their employees, contractors, agents, officers and directors, from and against any and all claims, damages, obligations, losses, liabilities, costs or debt, and expenses (including but not limited to attorney's fees).</p>
      </div>

      <!-- Termination -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">11. Termination</h2>
        <p class="text-gray-700">We may terminate or suspend your access immediately, without prior notice or liability, for any reason whatsoever, including without limitation if you breach the Terms.</p>
      </div>

      <!-- Governing Law -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">12. Governing Law</h2>
        <p class="text-gray-700">These Terms shall be interpreted and governed by the laws of the State of New York, United States, without regard to its conflict of law provisions.</p>
      </div>

      <!-- Changes to Terms -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">13. Changes to Terms</h2>
        <p class="text-gray-700">We reserve the right, at our sole discretion, to modify or replace these Terms at any time. If a revision is material, we will try to provide at least 30 days notice prior to any new terms taking effect.</p>
      </div>

      <!-- Contact Information -->
      <div class="bg-indigo-50 rounded-xl p-6">
        <h2 class="text-2xl font-bold mb-4 text-indigo-800">14. Contact Information</h2>
        <p class="text-gray-700 mb-4">If you have any questions about these Terms of Service, please contact us:</p>
        <div class="space-y-2 text-gray-600">
          <p><strong>Email:</strong> legal@alexanderreed.com</p>
          <p><strong>Website:</strong> alexanderreed.com/terms</p>
          <p><strong>Response Time:</strong> Within 5 business days</p>
        </div>
      </div>

    </div>

    <!-- Quick Links -->
    <div class="mt-12 text-center">
      <p class="text-gray-600 mb-4">Related legal documents:</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="/privacy" class="text-indigo-600 hover:text-indigo-700 font-medium">Privacy Policy</a>
        <a href="/contact" class="text-indigo-600 hover:text-indigo-700 font-medium">Contact Us</a>
        <a href="/faq" class="text-indigo-600 hover:text-indigo-700 font-medium">FAQ</a>
      </div>
    </div>
  </div>
</section>
@endsection
