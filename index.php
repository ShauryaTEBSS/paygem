<?php
// index.php - Paygem Enterprise Frontend Landing Page
?>
<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paygem | Enterprise Payment Infrastructure by Dynextron</title>
    
    <!-- Professional Enterprise Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Montserrat:wght@500;600;700;800&display=swap" rel="stylesheet">
    
    <!-- Tailwind CSS for Responsive, Formal Styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            50: '#f0fdf4',
                            100: '#dcfce7',
                            500: '#22c55e',
                            700: '#15803d',
                            900: '#14532d', // Deep Corporate Green
                            950: '#052e16',
                        }
                    }
                }
            }
        }
    </script>

    <!-- AOS Animation Library for Scroll Effects -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <style>
        /* Subtle grid background for the tech feel */
        .bg-grid {
            background-size: 40px 40px;
            background-image: linear-gradient(to right, rgba(0, 0, 0, 0.05) 1px, transparent 1px),
                              linear-gradient(to bottom, rgba(0, 0, 0, 0.05) 1px, transparent 1px);
        }
        .glass-nav {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(0,0,0,0.05);
        }
    </style>
</head>
<body class="font-sans text-slate-800 bg-slate-50 overflow-x-hidden selection:bg-brand-500 selection:text-white">

    <!-- Navigation -->
    <nav class="glass-nav fixed w-full z-50 top-0 transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-20 items-center">
                <div class="flex items-center gap-2">
                    <div class="w-8 h-8 bg-brand-700 rounded-lg flex items-center justify-center text-white font-bold text-xl shadow-lg">P</div>
                    <span class="font-heading font-bold text-2xl text-brand-950 tracking-tight">Paygem<span class="text-brand-500">.</span></span>
                </div>
                <div class="hidden md:flex space-x-8">
                    <a href="#solutions" class="text-slate-600 hover:text-brand-700 font-medium transition-colors">Solutions</a>
                    <a href="#compliance" class="text-slate-600 hover:text-brand-700 font-medium transition-colors">Compliance</a>
                    <a href="#developers" class="text-slate-600 hover:text-brand-700 font-medium transition-colors">Developers</a>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/login" class="hidden md:block text-slate-600 hover:text-brand-900 font-medium">Merchant Login</a>
                    <a href="/register" class="bg-brand-900 hover:bg-brand-700 text-white px-6 py-2.5 rounded-md font-medium transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">Create Account</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-48 lg:pb-32 bg-grid overflow-hidden">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-50/50 to-white/95 -z-10"></div>
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center" data-aos="fade-up" data-aos-duration="1000">
            <div class="inline-flex items-center gap-2 px-4 py-2 rounded-full bg-brand-100 text-brand-700 font-semibold text-sm mb-6 border border-brand-200">
                <span class="flex h-2 w-2 rounded-full bg-brand-500 animate-pulse"></span>
                Backed by Dynextron Services India Limited
            </div>
            <h1 class="text-5xl md:text-6xl lg:text-7xl font-heading font-extrabold text-slate-900 tracking-tight mb-8 leading-tight">
                Enterprise Payments, <br><span class="text-transparent bg-clip-text bg-gradient-to-r from-brand-700 to-brand-500">Engineered for Scale.</span>
            </h1>
            <p class="mt-4 text-xl text-slate-600 max-w-3xl mx-auto font-light leading-relaxed mb-10">
                A robust, zero-friction payment gateway featuring automated UTR deduplication, dedicated REST APIs, and strict financial compliance logic for modern Indian businesses.
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="/register" class="bg-brand-900 hover:bg-brand-800 text-white px-8 py-4 rounded-lg font-semibold text-lg transition-all shadow-xl hover:shadow-2xl flex items-center justify-center gap-2">
                    Start Processing <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
                </a>
                <a href="#developers" class="bg-white hover:bg-slate-50 text-slate-700 border border-slate-200 px-8 py-4 rounded-lg font-semibold text-lg transition-all shadow-sm flex items-center justify-center">
                    Read the API Docs
                </a>
            </div>
        </div>
    </section>

    <!-- Solutions / Pricing Section -->
    <section id="solutions" class="py-24 bg-white border-t border-slate-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-16" data-aos="fade-up">
                <h2 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-4">Flexible Settlement Architecture</h2>
                <p class="text-lg text-slate-600">Choose the routing model that fits your cash flow requirements. Transparent pricing, no hidden setup fees.</p>
            </div>

            <div class="grid md:grid-cols-2 gap-8 lg:gap-12">
                <!-- Model A -->
                <div class="bg-slate-50 rounded-2xl p-8 lg:p-12 border border-slate-200 relative overflow-hidden group hover:border-brand-500 transition-colors" data-aos="fade-right">
                    <div class="absolute top-0 right-0 w-32 h-32 bg-brand-100 rounded-bl-full -z-10 transition-transform group-hover:scale-110"></div>
                    <div class="text-brand-700 font-bold tracking-wider uppercase text-sm mb-2">Direct Routing Model</div>
                    <h3 class="text-3xl font-heading font-bold text-slate-900 mb-4">Merchant QR</h3>
                    <div class="flex items-baseline gap-2 mb-6">
                        <span class="text-5xl font-extrabold text-brand-900">0.5%</span>
                        <span class="text-slate-500 font-medium">per transaction</span>
                    </div>
                    <p class="text-slate-600 mb-8 leading-relaxed">
                        Retain full control. Customers scan your personal/business UPI QR code, routing funds directly to your bank account instantly. Paygem deducts a minimal software fee from your prepaid wallet for automated UTR verification and API ledger syncing.
                    </p>
                    <ul class="space-y-4 mb-8">
                        <li class="flex items-center text-slate-700"><svg class="w-5 h-5 text-brand-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Instant T+0 Bank Settlement</li>
                        <li class="flex items-center text-slate-700"><svg class="w-5 h-5 text-brand-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Uses your existing UPI ID</li>
                        <li class="flex items-center text-slate-700"><svg class="w-5 h-5 text-brand-500 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Ideal for low-margin, high-volume</li>
                    </ul>
                </div>

                <!-- Model B -->
                <div class="bg-brand-900 rounded-2xl p-8 lg:p-12 border border-brand-800 relative overflow-hidden shadow-2xl" data-aos="fade-left">
                    <div class="absolute inset-0 bg-[url('https://www.transparenttextures.com/patterns/cubes.png')] opacity-10"></div>
                    <div class="relative z-10">
                        <div class="text-brand-300 font-bold tracking-wider uppercase text-sm mb-2">Managed Ledger Model</div>
                        <h3 class="text-3xl font-heading font-bold text-white mb-4">Paygem Master QR</h3>
                        <div class="flex items-baseline gap-2 mb-6">
                            <span class="text-5xl font-extrabold text-white">0.9%</span>
                            <span class="text-brand-200 font-medium">per transaction</span>
                        </div>
                        <p class="text-brand-100 mb-8 leading-relaxed">
                            Let Dynextron handle the backend. Customers scan the official Paygem merchant QR. We process the collection, secure the funds, and execute an automated payout to your registered bank account on a T+7 schedule.
                        </p>
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-center text-brand-50"><svg class="w-5 h-5 text-brand-400 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Automated T+7 Ledger Payouts</li>
                            <li class="flex items-center text-brand-50"><svg class="w-5 h-5 text-brand-400 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> No prepaid wallet maintenance required</li>
                            <li class="flex items-center text-brand-50"><svg class="w-5 h-5 text-brand-400 mr-3" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg> Centralized refund management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Developers / API Section -->
    <section id="developers" class="py-24 bg-slate-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-center">
                <div data-aos="fade-right">
                    <h2 class="text-3xl md:text-4xl font-heading font-bold mb-6">Developer-First Integration</h2>
                    <p class="text-slate-400 text-lg mb-8 leading-relaxed">
                        Paygem was built by developers, for developers. Generate unique payment intents, poll transaction statuses, and receive cryptographically signed HMAC-SHA256 webhooks instantly upon UTR verification.
                    </p>
                    <div class="space-y-6">
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1"><div class="w-8 h-8 rounded-full bg-brand-500/20 flex items-center justify-center text-brand-400 font-bold border border-brand-500/30">1</div></div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Generate Intent</h4>
                                <p class="text-slate-400 mt-1">Pass order details to our `/payment/create` endpoint.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1"><div class="w-8 h-8 rounded-full bg-brand-500/20 flex items-center justify-center text-brand-400 font-bold border border-brand-500/30">2</div></div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Secure Checkout</h4>
                                <p class="text-slate-400 mt-1">Customer submits UTR against the generated Paygem session.</p>
                            </div>
                        </div>
                        <div class="flex">
                            <div class="flex-shrink-0 mt-1"><div class="w-8 h-8 rounded-full bg-brand-500/20 flex items-center justify-center text-brand-400 font-bold border border-brand-500/30">3</div></div>
                            <div class="ml-4">
                                <h4 class="text-xl font-bold">Webhook Delivery</h4>
                                <p class="text-slate-400 mt-1">Your server receives a signed JSON payload confirming the payment.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Code Block Illustration -->
                <div class="bg-[#0d1117] rounded-xl border border-slate-700 shadow-2xl overflow-hidden" data-aos="fade-left">
                    <div class="flex items-center px-4 py-3 bg-[#161b22] border-b border-slate-700">
                        <div class="flex space-x-2">
                            <div class="w-3 h-3 rounded-full bg-red-500"></div>
                            <div class="w-3 h-3 rounded-full bg-yellow-500"></div>
                            <div class="w-3 h-3 rounded-full bg-green-500"></div>
                        </div>
                        <div class="ml-4 text-xs text-slate-400 font-mono">POST /api/v1/payment/create</div>
                    </div>
                    <div class="p-6 overflow-x-auto">
<pre class="font-mono text-sm text-slate-300 leading-relaxed">
<span class="text-pink-400">curl</span> -X POST https://api.paygem.co/v1/payment/create \
  -H <span class="text-green-400">"Authorization: Bearer sk_live_dynextron123"</span> \
  -H <span class="text-green-400">"Content-Type: application/json"</span> \
  -d '{
    <span class="text-blue-400">"amount"</span>: <span class="text-orange-400">1499.00</span>,
    <span class="text-blue-400">"currency"</span>: <span class="text-green-400">"INR"</span>,
    <span class="text-blue-400">"order_id"</span>: <span class="text-green-400">"ORD_987654"</span>,
    <span class="text-blue-400">"customer_email"</span>: <span class="text-green-400">"user@example.com"</span>
  }'

<span class="text-slate-500"># Response: 200 OK</span>
{
  <span class="text-blue-400">"status"</span>: <span class="text-green-400">"success"</span>,
  <span class="text-blue-400">"txn_id"</span>: <span class="text-green-400">"pg_5f8a9b2"</span>,
  <span class="text-blue-400">"checkout_url"</span>: <span class="text-green-400">"https://paygem.co/pay/pg_5f8a9b2"</span>
}
</pre>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compliance & Security -->
    <section id="compliance" class="py-24 bg-brand-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl md:text-4xl font-heading font-bold text-slate-900 mb-16" data-aos="fade-up">Bank-Grade Security & Compliance</h2>
            
            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200" data-aos="fade-up" data-aos-delay="100">
                    <div class="w-14 h-14 bg-brand-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Database Deduplication</h3>
                    <p class="text-slate-600">Strict UNIQUE constraints on our TiDB ledgers ensure a single UTR can never be used to verify multiple orders. Zero double-spending.</p>
                </div>
                
                <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200" data-aos="fade-up" data-aos-delay="200">
                    <div class="w-14 h-14 bg-brand-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Strict KYC / AML</h3>
                    <p class="text-slate-600">Comprehensive merchant verification protocols. All businesses must submit official documentation for admin approval before API activation.</p>
                </div>

                <div class="bg-white p-8 rounded-xl shadow-sm border border-slate-200" data-aos="fade-up" data-aos-delay="300">
                    <div class="w-14 h-14 bg-brand-100 rounded-lg flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-brand-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <h3 class="text-xl font-bold text-slate-900 mb-3">HMAC Webhook Signing</h3>
                    <p class="text-slate-600">Every server-to-server webhook notification is cryptographically signed using a secure secret, preventing spoofed payment verifications.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-slate-950 pt-16 pb-8 border-t border-slate-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center md:text-left">
            <div class="grid md:grid-cols-4 gap-8 mb-12">
                <div class="col-span-1 md:col-span-2">
                    <div class="font-heading font-bold text-2xl text-white tracking-tight mb-4">Paygem<span class="text-brand-500">.</span></div>
                    <p class="text-slate-400 max-w-sm mx-auto md:mx-0">
                        The sophisticated, scalable payment gateway infrastructure operated by Dynextron Services India Limited.
                    </p>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Product</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Pricing Models</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Developer API</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">System Status</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="text-white font-semibold mb-4">Legal & Compliance</h4>
                    <ul class="space-y-2 text-slate-400">
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Terms of Service</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">Privacy Policy</a></li>
                        <li><a href="#" class="hover:text-brand-400 transition-colors">KYC Guidelines</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-slate-800 pt-8 text-center text-slate-500 text-sm">
                &copy; <?php echo date("Y"); ?> Paygem, a subsidiary of Dynextron Services OPC. All rights reserved.
            </div>
        </div>
    </footer>

    <!-- Initialize Animation on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            offset: 50,
            duration: 800,
            easing: 'ease-out-cubic',
        });
    </script>
</body>
</html>
