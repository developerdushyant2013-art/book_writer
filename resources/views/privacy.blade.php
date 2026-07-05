@extends('layouts.app')

@section('title', 'Privacy Policy · Alexander Reed')
@section('description', 'Privacy policy for Alexander Reed website. How we collect, use, and protect your personal information.')
@section('keywords', 'Privacy policy, data protection, personal information, GDPR, privacy, Alexander Reed, website privacy')
@section('canonical', url('/privacy'))
@section('og-type', 'website')
@section('og-title', 'Privacy Policy · Alexander Reed')
@section('og-description', 'Privacy policy for Alexander Reed website. How we collect, use, and protect your personal information.')
@section('og-image', asset('images/alexander-reed-legal.jpg'))
@section('twitter-title', 'Privacy Policy')
@section('twitter-description', 'Privacy policy for Alexander Reed website. How we collect, use, and protect your personal information.')
@section('twitter-image', asset('images/alexander-reed-legal.jpg'))
@section('robots', 'index, follow')

@section('content')
<!-- ***** PRIVACY POLICY PAGE ***** -->
<section class="py-20 bg-gradient-to-br from-gray-50 via-white to-blue-50 min-h-screen">
  <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
    
    <!-- Page Header -->
    <div class="text-center mb-16">
      <span class="text-gray-600 font-semibold tracking-wide uppercase">Legal Information</span>
      <h1 class="text-5xl font-bold mt-4 mb-6">Privacy <span class="text-blue-600">Policy</span></h1>
      <p class="text-xl text-gray-600 max-w-3xl mx-auto">Your privacy is important to us. This policy explains how we collect, use, and protect your information.</p>
    </div>

    <!-- Last Updated -->
    <div class="bg-blue-50 border border-blue-200 rounded-xl p-4 mb-8">
      <p class="text-sm text-blue-800"><strong>Last Updated:</strong> March 15, 2025</p>
    </div>

    <!-- Privacy Content -->
    <div class="bg-white rounded-3xl shadow-xl p-8 space-y-8">
      
      <!-- Introduction -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">1. Information We Collect</h2>
        <p class="text-gray-700 mb-4">We collect information to provide better services to our readers. This includes:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Email Address:</strong> When you subscribe to our newsletter or contact us</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Name:</strong> When you register for events or download resources</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Payment Information:</strong> Processed securely through third-party providers</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Usage Data:</strong> How you interact with our website and content</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Cookies:</strong> To improve your browsing experience</span>
          </li>
        </ul>
      </div>

      <!-- How We Use Information -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">2. How We Use Your Information</h2>
        <p class="text-gray-700 mb-4">We use your information to:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Send newsletters and updates about new books and events</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Respond to your questions and requests</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Process book orders and event registrations</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Improve our website and services</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Send you requested resources and materials</span>
          </li>
        </ul>
      </div>

      <!-- Information Sharing -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">3. Information Sharing</h2>
        <p class="text-gray-700 mb-4">We do not sell your personal information. We may share information only with:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Payment Processors:</strong> To handle transactions securely</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Email Service Providers:</strong> To send newsletters</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Event Platforms:</strong> To manage registrations</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Analytics Services:</strong> To improve website performance</span>
          </li>
        </ul>
      </div>

      <!-- Data Security -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">4. Data Security</h2>
        <p class="text-gray-700 mb-4">We protect your information with:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>SSL encryption for all data transmissions</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Secure payment processing through PCI-compliant providers</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Regular security updates and monitoring</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Limited access to personal information</span>
          </li>
        </ul>
      </div>

      <!-- Cookies -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">5. Cookies</h2>
        <p class="text-gray-700 mb-4">Our website uses cookies to:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Remember your preferences and settings</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Analyze website traffic and usage patterns</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Personalize your experience</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span>Provide security features</span>
          </li>
        </ul>
        <p class="text-gray-700 mt-4">You can control cookies through your browser settings.</p>
      </div>

      <!-- Your Rights -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">6. Your Rights</h2>
        <p class="text-gray-700 mb-4">You have the right to:</p>
        <ul class="space-y-2 text-gray-600 ml-6">
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Access:</strong> Request a copy of your personal information</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Correct:</strong> Update inaccurate information</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Delete:</strong> Request removal of your personal information</span>
          </li>
          <li class="flex items-start gap-2">
            <i class="fas fa-chevron-right text-blue-600 mt-1"></i>
            <span><strong>Opt-out:</strong> Unsubscribe from marketing communications</span>
          </li>
        </ul>
      </div>

      <!-- Children's Privacy -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">7. Children's Privacy</h2>
        <p class="text-gray-700">Our services are not intended for children under 13. We do not knowingly collect personal information from children under 13. If we become aware that we have collected such information, we will delete it promptly.</p>
      </div>

      <!-- International Users -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">8. International Users</h2>
        <p class="text-gray-700">If you are outside the United States, please be aware that your information may be transferred to and processed in the United States. We take appropriate safeguards to protect your information in accordance with this privacy policy.</p>
      </div>

      <!-- Changes to Policy -->
      <div>
        <h2 class="text-2xl font-bold mb-4 text-blue-800">9. Changes to This Policy</h2>
        <p class="text-gray-700">We may update this privacy policy from time to time. We will notify you of any changes by posting the new policy on this page and updating the "Last Updated" date.</p>
      </div>

      <!-- Contact Information -->
      <div class="bg-blue-50 rounded-xl p-6">
        <h2 class="text-2xl font-bold mb-4 text-blue-800">10. Contact Us</h2>
        <p class="text-gray-700 mb-4">If you have questions about this privacy policy or want to exercise your rights, please contact us:</p>
        <div class="space-y-2 text-gray-600">
          <p><strong>Email:</strong> privacy@alexanderreed.com</p>
          <p><strong>Website:</strong> alexanderreed.com/privacy</p>
          <p><strong>Response Time:</strong> Within 5 business days</p>
        </div>
      </div>

    </div>

    <!-- Quick Links -->
    <div class="mt-12 text-center">
      <p class="text-gray-600 mb-4">Related legal documents:</p>
      <div class="flex flex-wrap justify-center gap-4">
        <a href="/terms" class="text-blue-600 hover:text-blue-700 font-medium">Terms of Service</a>
        <a href="/contact" class="text-blue-600 hover:text-blue-700 font-medium">Contact Us</a>
        <a href="/faq" class="text-blue-600 hover:text-blue-700 font-medium">FAQ</a>
      </div>
    </div>
  </div>
</section>
@endsection
