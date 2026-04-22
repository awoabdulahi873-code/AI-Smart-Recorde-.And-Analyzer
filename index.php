<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Smart Recorder and Analyzer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link a href="http://10.183.226.5/AI%20Smart%20Recorde%20%26.Analyzer/index.php">
    <link a href="POST https://juictgirls.org/api/video-to-text" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .glass {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.1);
        }
        .glass-dark {
            background: rgba(0,0,0,0.4);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.08);
        }
        .gradient-bg {
            background: linear-gradient(180deg, #000000 0%, #1a1a1a 50%, #000000 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #ffffff, #cccccc, #ffffff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .gradient-border {
            border-image: linear-gradient(135deg, #e94560, #ff6b6b) 1;
        }
        .pulse-ring {
            animation: pulse-ring 1.5s cubic-bezier(0.455, 0.03, 0.515, 0.955) infinite;
        }
        @keyframes pulse-ring {
            0% { transform: scale(1); opacity: 1; }
            100% { transform: scale(1.4); opacity: 0; }
        }
        .wave-bar {
            animation: wave-bar 1s ease-in-out infinite;
        }
        @keyframes wave-bar {
            0%, 100% { height: 20%; opacity: 0.5; }
            50% { height: 100%; opacity: 1; }
        }
        .float { animation: float 3s ease-in-out infinite; }
        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .glow {
            box-shadow: 0 0 40px rgba(233,69,96,0.3), 0 0 80px rgba(233,69,96,0.1);
        }
        .glow-sm {
            box-shadow: 0 0 20px rgba(233,69,96,0.2);
        }
        .btn-gradient {
            background: linear-gradient(135deg, #e94560 0%, #ff6b6b 100%);
            transition: all 0.3s ease;
        }
        .btn-gradient:hover {
            background: linear-gradient(135deg, #ff6b6b 0%, #e94560 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(233,69,96,0.4);
        }
        
        /* White Button */
        .btn-white {
            background: linear-gradient(135deg, #ffffff 0%, #e0e0e0 100%);
            color: #000000;
            transition: all 0.3s ease;
        }
        .btn-white:hover {
            background: linear-gradient(135deg, #e0e0e0 0%, #ffffff 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(255,255,255,0.3);
        }
        
        /* Blue Button */
        .btn-blue {
            background: linear-gradient(135deg, #3b82f6 0%, #60a5fa 100%);
            transition: all 0.3s ease;
        }
        .btn-blue:hover {
            background: linear-gradient(135deg, #60a5fa 0%, #3b82f6 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(59,130,246,0.4);
        }
        
        /* Green Button */
        .btn-green {
            background: linear-gradient(135deg, #22c55e 0%, #4ade80 100%);
            transition: all 0.3s ease;
        }
        .btn-green:hover {
            background: linear-gradient(135deg, #4ade80 0%, #22c55e 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(34,197,94,0.4);
        }
        
        /* Yellow Button */
        .btn-yellow {
            background: linear-gradient(135deg, #eab308 0%, #facc15 100%);
            color: #000000;
            transition: all 0.3s ease;
        }
        .btn-yellow:hover {
            background: linear-gradient(135deg, #facc15 0%, #eab308 100%);
            transform: translateY(-2px);
            box-shadow: 0 10px 30px rgba(234,179,8,0.4);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.3);
        }
        .nav-active {
            background: linear-gradient(90deg, rgba(233,69,96,0.2), rgba(233,69,96,0.1));
            border-left: 3px solid #e94560;
        }
        .scrollbar::-webkit-scrollbar { width: 6px; }
        .scrollbar::-webkit-scrollbar-track { background: rgba(255,255,255,0.05); }
        .scrollbar::-webkit-scrollbar-thumb { background: rgba(233,69,96,0.5); border-radius: 3px; }
    </style>
</head>
<<body class="gradient-bg text-gray-200 min-h-screen overflow-x-hidden">
    
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-72 glass-dark fixed h-screen flex flex-col overflow-y-auto scrollbar">
            <!-- Logo -->
            <div class="p-8 border-b border-white/10">
                <div class="flex items-center gap-3">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-pink-500 to-rose-500 flex items-center justify-center glow-sm">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                        </svg>
                    </div>
                    <div>
                        <h1 class="text-2xl font-bold gradient-text">AI Smart Recorder</h1>
                        <p class="text-xs text-white/50">Smart Recorder</p>
                    </div>
                </div>
            </div>
            
            <!-- Navigation -->
            <nav class="flex-1 p-4 space-y-2">
                <p class="text-xs text-white/30 uppercase tracking-wider px-4 mb-2">Menu</p>
                
                <button onclick="showTab('home')" id="nav-home" class="nav-btn w-full flex items-center gap-4 px-5 py-4 rounded-xl text-left text-white/70 hover:bg-white/5 hover:text-white transition">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <span class="font-medium">Home</span>
                </button>
                
                <button onclick="showTab('record')" id="nav-record" class="nav-btn w-full flex items-center gap-4 px-5 py-4 rounded-xl text-left nav-active">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                    </div>
                    <span class="font-medium">Voice to Text</span>
                </button>
                
                <button onclick="showTab('profile')" id="nav-profile" class="nav-btn w-full flex items-center gap-4 px-5 py-4 rounded-xl text-left text-white/70 hover:bg-white/5 hover:text-white transition">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                    </div>
                    <span class="font-medium">My Profile</span>
                </button>
                
                <button onclick="showTab('gallery')" id="nav-gallery" class="nav-btn w-full flex items-center gap-4 px-5 py-4 rounded-xl text-left text-white/70 hover:bg-white/5 hover:text-white transition">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                    <span class="font-medium">Gallery</span>
                </button>
                
                <button onclick="showTab('history')" id="nav-history" class="nav-btn w-full flex items-center gap-4 px-5 py-4 rounded-xl text-left text-white/70 hover:bg-white/5 hover:text-white transition">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="font-medium">History</span>
                </button>
                
                <button onclick="showTab('about')" id="nav-about" class="nav-btn w-full flex items-center gap-4 px-5 py-4 rounded-xl text-left text-white/70 hover:bg-white/5 hover:text-white transition">
                    <div class="w-10 h-10 rounded-lg bg-gradient-to-br from-amber-500/20 to-orange-500/20 flex items-center justify-center">
                        <svg class="w-5 h-5 text-amber-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <span class="font-medium">About Us</span>
                </button>
            </nav>
            
            <!-- User -->
            <div class="p-4 border-t border-white/10">
                <div class="flex items-center gap-3">
                    <div id="user-avatar" class="w-12 h-12 rounded-full bg-gradient-to-br from-pink-500 to-rose-500 flex items-center justify-center text-sm font-bold overflow-hidden">
                        A
                    </div>
                    <div class="flex-1">
                        <p id="user-name" class="text-sm font-medium truncate">AI Smart Recorder</p>
                        <p id="user-id" class="text-xs text-pink-400">Smart Recorder</p>
                    </div>
                </div>
                <button onclick="logout()" class="w-full mt-4 bg-gradient-to-r from-pink-500 to-rose-500 py-3 rounded-xl font-medium hover:opacity-90 transition">
                    Logout
                </button>
            </div>
        </aside>
        
        <!-- Main Content -->
        <main class="flex-1 ml-72 p-8">
            
            <!-- HOME SECTION -->
            <section id="section-home" class="space-y-8">
                <!-- Welcome -->
                <div class="glass rounded-3xl p-8 relative overflow-hidden">
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-pink-500/20 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-20 -left-20 w-48 h-48 bg-rose-500/20 rounded-full blur-3xl"></div>
                    
                    <div class="relative flex flex-col md:flex-row items-center gap-8">
                        <div class="flex-1">
                            <div class="flex items-center gap-2 mb-2">
                                <p id="home-welcome" class="text-pink-400 font-medium cursor-pointer hover:text-pink-300" onclick="editHomeText('welcome')">Welcome to Ailap</p>
                                <button onclick="editHomeText('welcome')" class="text-white/30 hover:text-white text-xs">✏️</button>
                            </div>
                            <div class="mb-4 p-3 bg-white/10 rounded-xl inline-block">
                                <p class="text-xs text-white/50 mb-1">Server IP Address</p>
                                <p id="server-ip" class="text-lg font-mono text-green-400">10.183.226.5</p>
                            </div>
                            <div class="flex items-center gap-2 mb-4">
                                <h1 id="home-title" class="text-4xl md:text-5xl font-bold cursor-pointer hover:opacity-80" onclick="editHomeText('title')">
                                    <span class="gradient-text">Voice to Text</span><br>made easy
                                </h1>
                                <button onclick="editHomeText('title')" class="text-white/30 hover:text-white text-xs">✏️</button>
                            </div>
                            <div class="flex items-center gap-2 mb-6">
                                <p id="home-desc" class="text-white/60 max-w-md cursor-pointer hover:text-white" onclick="editHomeText('desc')">Convert your voice to text instantly. Supports English, Somali, and Arabic languages. Free and easy to use!</p>
                                <button onclick="editHomeText('desc')" class="text-white/30 hover:text-white text-xs">✏️</button>
                            </div>
                            <button onclick="showTab('record')" class="btn-green px-8 py-4 rounded-xl font-medium inline-flex items-center gap-2">
                                🎤 Start Recording
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                            </button>
                        </div>
                        <div class="relative">
                            <div class="w-56 h-56 rounded-3xl bg-gradient-to-br from-pink-500 to-rose-500 p-1 glow relative overflow-hidden">
                                <div id="home-image-container" class="w-full h-full rounded-3xl bg-gray-900 flex items-center justify-center">
                                    <svg class="w-24 h-24 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
                                    </svg>
                                </div>
                                <input type="file" id="home-image-input" accept="image/*" class="hidden" onchange="uploadHomeImage(this)">
                                <label for="home-image-input" class="absolute bottom-2 right-2 bg-pink-500 hover:bg-pink-600 px-3 py-2 rounded-xl font-medium text-sm cursor-pointer shadow-lg">
                                    📷 Upload Photo
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Features -->
                <div class="grid md:grid-cols-4 gap-6">
                    <div class="glass rounded-2xl p-6 card-hover cursor-pointer" onclick="editFeature(0)">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 feature-title">Voice to Text</h3>
                        <p class="text-white/50 text-sm feature-desc">Convert speech to text automatically in seconds</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover cursor-pointer" onclick="editFeature(1)">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3l2 2-2 2M5 19a2 2 0 100-4 2 2 0 000 4zm0 0l2 2m-2-2l-2 2"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 feature-title">Multi Language</h3>
                        <p class="text-white/50 text-sm feature-desc">Supports English, Somali, and Arabic</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover cursor-pointer" onclick="editFeature(2)">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2 feature-title">Copy & Share</h3>
                        <p class="text-white/50 text-sm feature-desc">Copy text or share with others</p>
                    </div>
                    <div class="glass rounded-2xl p-6 card-hover cursor-pointer" onclick="generateQR()">
                        <div class="w-14 h-14 rounded-2xl bg-gradient-to-br from-pink-500/20 to-rose-500/20 flex items-center justify-center mb-4">
                            <svg class="w-7 h-7 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z"></path></svg>
                        </div>
                        <h3 class="text-xl font-bold mb-2">QR Code</h3>
                        <p class="text-white/50 text-sm">Generate QR from text</p>
                    </div>
                </div>
            </section>

            <!-- VOICE TO TEXT SECTION -->
            <section id="section-record" class="hidden space-y-8">
                <!-- Voice Recording -->
                <div class="glass rounded-3xl p-8 relative overflow-hidden">
                    <div class="absolute top-0 left-0 w-full h-full bg-gradient-to-br from-pink-500/5 to-rose-500/5"></div>
                    
                    <div class="relative">
                        <!-- Header -->
                        <div class="text-center mb-8">
                            <h1 class="text-3xl font-bold mb-2">
                                <span class="gradient-text">Voice to Text</span>
                            </h1>
                            <p class="text-white/60">Speak and watch your voice convert to text instantly</p>
                        </div>
                        
<!-- Language Selector -->
                        <div class="glass rounded-2xl p-2 flex items-center gap-2">
                            <span class="text-sm text-white/70">🗣️ Language:</span>
                            <svg class="w-5 h-5 text-pink-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3l2 2-2 2M5 19a2 2 0 100-4 2 2 0 000 4zm0 0l2 2m-2-2l-2 2"></path></svg>
                                <select id="lang-select" onchange="changeLang()" class="bg-transparent px-4 py-2 focus:outline-none cursor-pointer">
                                    <option value="so-SO" class="bg-gray-900" selected>🇸🇴 Somali</option>
                                    <option value="ar-SA" class="bg-gray-900">🇸🇦 Arabic</option>
                                    <option value="en-US" class="bg-gray-900">🇺🇸 English</option>
                                </select>
                            </div>
                        </div>
                        <p class="text-xs text-center text-white/30 mb-4">💡 Speak clearly for best results</p>
                        
                        <!-- Display Area -->
                        <div id="display-area" class="bg-gray-900/80 rounded-3xl p-8 mb-8 min-h-40 border-2 border-pink-500/20 relative overflow-hidden">
                            <div id="display-text" class="text-xl md:text-2xl text-center">
<span class="text-white/50">Click the microphone and speak...</span>
                            </div>
                            
                            <!-- Wave Animation -->
                            <div id="wave-anim" class="absolute inset-0 flex items-center justify-center gap-1 hidden">
                                <div class="bar w-1 bg-gradient-to-t from-pink-500 to-rose-500 rounded-full"></div>
                                <div class="bar w-1 bg-gradient-to-t from-pink-500 to-rose-500 rounded-full"></div>
                                <div class="bar w-1 bg-gradient-to-t from-pink-500 to-rose-500 rounded-full"></div>
                                <div class="bar w-1 bg-gradient-to-t from-pink-500 to-rose-500 rounded-full"></div>
                                <div class="bar w-1 bg-gradient-to-t from-pink-500 to-rose-500 rounded-full"></div>
                                <div class="bar w-1 bg-gradient-to-t from-pink-500 to-rose-500 rounded-full"></div>
                                <div class="bar w-1 bg-gradient-to-t from-pink-500 to-rose-500 rounded-full"></div>
                            </div>
                        </div>
                        
                        <!-- Record Button -->
                        <div class="flex justify-center mb-8">
                            <div class="relative">
                                <button onclick="startRec()" id="btn-start" class="w-28 h-28 rounded-full btn-white flex items-center justify-center glow relative z-10">
                                    <svg class="w-14 h-14" fill="white" viewBox="0 0 24 24"><circle cx="12" cy="12" r="6"></circle></svg>
                                </button>
                                <button onclick="stopRec()" id="btn-stop" class="w-28 h-28 rounded-full bg-red-500 hover:bg-red-600 flex items-center justify-center transition hidden relative z-10">
                                    <svg class="w-12 h-12" fill="white" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="2"></rect></svg>
                                </button>
                                <div id="pulse-ring" class="absolute inset-0 rounded-full bg-pink-500 hidden pulse-ring"></div>
                            </div>
                        </div>
                        
                        <!-- Tips -->
                        <div class="text-center text-sm text-white/40">
                            <p>Tips: Make sure to use Chrome browser for best experience</p>
                        </div>
                    </div>
                </div>
                
                <!-- VIDEO RECORDING -->
                <div class="glass rounded-3xl p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h2 class="text-xl font-bold">
                            <span class="gradient-text">Video Recorder</span>
                        </h2>
                        <button onclick="initCamera()" class="bg-pink-500/20 hover:bg-pink-500/30 px-4 py-2 rounded-lg text-sm flex items-center gap-2 transition">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            Open Camera
                        </button>
                    </div>
                    
                    <!-- Camera Preview -->
                    <div class="relative rounded-2xl overflow-hidden bg-black mb-6" style="aspect-ratio: 16/9;">
                        <video id="video-preview" autoplay playsinline class="w-full h-full object-cover"></video>
                        <div id="video-placeholder" class="absolute inset-0 flex items-center justify-center bg-gray-900">
                            <div class="text-center text-white/50">
                                <svg class="w-16 h-16 mx-auto mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                <p>Click "Open Camera" to start</p>
                            </div>
                        </div>
                        <div id="video-rec-indicator" class="absolute top-4 left-4 hidden">
                            <span class="flex items-center gap-2 bg-red-500 px-3 py-1 rounded-full text-sm">
                                <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                                REC
                            </span>
                        </div>
                    </div>
                    
                    <!-- Controls -->
                    <div class="flex justify-center gap-4">
                        <button onclick="initCamera()" id="btn-open-cam" class="bg-white/10 hover:bg-white/20 p-4 rounded-full transition">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                        </button>
                        <button onclick="startVideoRec()" id="btn-start-video" class="bg-red-500 hover:bg-red-600 p-4 rounded-full transition hidden">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><circle cx="12" cy="12" r="6"></circle></svg>
                        </button>
                        <button onclick="stopVideoRec()" id="btn-stop-video" class="bg-red-600 hover:bg-red-700 p-4 rounded-full transition hidden">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="2"></rect></svg>
                        </button>
                        <button onclick="closeCamera()" id="btn-close-cam" class="bg-white/10 hover:bg-white/20 p-4 rounded-full transition hidden">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path></svg>
                        </button>
                    </div>
                    
                    <!-- Voice Call / Video Call to Text -->
                    <div class="mt-6 p-4 bg-gradient-to-r from-purple-500/20 to-pink-500/20 rounded-xl space-y-4">
                        <div class="flex items-center justify-between">
                            <span class="text-sm text-white/70">🎙️ Voice Call → Text</span>
                            <span id="call-status" class="hidden text-sm text-green-400 animate-pulse">Listening...</span>
                        </div>
                        
                        <!-- Voice Call Button -->
                        <div class="flex gap-3">
                            <button onclick="startVoiceCall()" id="btn-start-call" class="flex-1 bg-green-500 hover:bg-green-600 py-4 rounded-xl font-medium flex items-center justify-center gap-2">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M20.01 15.44c-1.38.03-2.75.54-3.49 1.21l-1.23-1.23a10.94 10.94 0 01-5.87-4.98V6.18c0-.96-.56-1.84-1.38-2.17A1.58 1.58 0 007 3.5c-1.27 0-2.37.67-3 1.71A10.88 10.88 0 001 6.23 16c0 3.11 1.29 5.9 3.35 7.92.81.79 1.9 1.41 3.09 1.71.84.21 1.71-.05 2.35-.67l1.52 1.52c-.79 1.02-1.27 2.23-1.27 3.54 0 3.28 2.66 5.94 5.94 5.94s5.94-2.66 5.94-5.94c0-2.65-1.74-4.87-4.13-5.77l1.08-1.08c1.01.41 2.14.61 3.26.56z"/></svg>
                                🎙️ Bilow Wicdi
                            </button>
                            <button onclick="stopVoiceCall()" id="btn-stop-call" class="flex-1 bg-red-500 hover:bg-red-600 py-4 rounded-xl font-medium flex items-center justify-center gap-2 hidden">
                                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><rect x="6" y="6" width="12" height="12" rx="2"/></svg>
                                ⏹️ Stop
                            </button>
                        </div>
                        
                        <!-- Live Result -->
                        <div id="call-result" class="hidden">
                            <textarea id="call-text" class="w-full bg-gray-900/50 text-white p-3 rounded-xl border border-white/10" rows="3" placeholder="Waxa aad hadashaan halkan ayuu ku muuqdaa..."></textarea>
                            <div class="flex gap-2 mt-2 flex-wrap">
                                <button onclick="nadiifCallText()" class="text-xs bg-amber-500 px-3 py-2 rounded-lg">Clean</button>
                                <button onclick="copyCallText()" class="text-xs bg-white/10 px-3 py-2 rounded-lg">Copy</button>
                                <button onclick="saveCallText()" class="text-xs bg-pink-500 px-3 py-2 rounded-lg">Save</button>
                            </div>
                        </div>
                        
                        <!-- Divider -->
                        <div class="border-t border-white/10 pt-4">
                            <span class="text-sm text-white/70">📹 Video URL → Text</span>
                        </div>
                        
                        <input type="text" id="video-url" placeholder="Paste video URL here..." class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-purple-500/50">
                        <button onclick="videoToTextAPI()" class="w-full bg-gradient-to-r from-purple-500 to-pink-500 hover:opacity-90 py-3 rounded-xl font-medium">
                            📹 Bedel Video
                        </button>
                        <div id="video-result" class="hidden mt-4 bg-gray-900/50 rounded-xl p-4 text-sm">
                            
                        </div>
                    </div>
                </div>
                
                <!-- Result -->
                <div id="result-box" class="glass rounded-3xl p-8 hidden">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-xl font-bold">Your Text</h3>
                        <button onclick="clearResult()" class="text-white/50 hover:text-white text-sm">Clear</button>
                    </div>
                    <div id="result-text" class="bg-gray-900/50 rounded-2xl p-6 mb-6 text-lg leading-relaxed whitespace-pre-wrap"></div>
                    <div class="flex gap-3 flex-wrap">
                        <button onclick="editResult()" class="btn-yellow px-6 py-3 rounded-xl font-medium flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a3.5 3.5 0 114.95 4.95l-1.5 1.5a1.5 1.5 0 01-2.121 0L.636 12.87a1.5 1.5 0 010-2.121l1.5-1.5a1.5 1.5 0 012.121 0z"></path></svg>
                            Edit Text
                        </button>
                        <button onclick="saveResult()" class="btn-green px-6 py-3 rounded-xl font-medium flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-3m-1 4l-3 3m0 0l-3-3m3 3V4"></path></svg>
                            Save to History
                        </button>
                        <button onclick="copyResult()" class="btn-white px-6 py-3 rounded-xl font-medium flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                            Copy
                        </button>
                        <button onclick="speakResult()" class="btn-blue px-6 py-3 rounded-xl font-medium flex items-center gap-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15H4a1 1 0 01-1-1v-4a1 1 0 011-1h1.586l4.707-4.707C10.923 3.663 12 4.109 12 5v14c0 .891-1.077 1.337-1.707.707L5.586 15z"></path></svg>
                            Speak
                        </button>
                    </div>
                </div>
                
                <!-- Uploads from server -->
                <div id="server-uploads" class="glass rounded-3xl p-8 hidden">
                    <h2 class="text-xl font-bold mb-4">Media from Server</h2>
                    <div id="server-gallery" class="grid grid-cols-2 md:grid-cols-4 gap-4"></div>
                </div>
            </section>

            <!-- PROFILE SECTION -->
            <section id="section-profile" class="hidden space-y-8">
                <div class="glass rounded-3xl p-8">
                    <h1 class="text-2xl font-bold mb-6">My Profile</h1>
                    <div class="flex flex-col md:flex-row gap-8">
<div class="flex flex-col items-center">
                            <div id="profile-avatar" class="w-40 h-40 rounded-full bg-gradient-to-br from-pink-500 to-rose-500 flex items-center justify-center text-4xl font-bold glow-sm mb-4 overflow-hidden">
                                U
                            </div>
                            <input type="file" id="profile-img" accept="image/*" class="hidden" onchange="updateProfileImg(this)">
                            <label for="profile-img" class="btn-blue px-6 py-3 rounded-xl cursor-pointer text-sm font-medium">📷 Upload Photo</label>
                        </div>
                        </div>
                        <div class="flex-1 space-y-4">
                            <div>
                                <label class="text-sm text-white/50 mb-1 block">Name</label>
                                <input type="text" id="profile-name" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500/50 transition">
                            </div>
                            <div>
                                <label class="text-sm text-white/50 mb-1 block">Member ID</label>
                                <input type="text" id="profile-id" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500/50 uppercase transition">
                            </div>
                            <div>
                                <label class="text-sm text-white/50 mb-1 block">Skills</label>
                                <input type="text" id="profile-skills" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-3 focus:outline-none focus:border-pink-500/50 transition">
                            </div>
                            <button onclick="saveProfile()" class="btn-blue px-6 py-3 rounded-xl font-medium">Save Profile</button>
                        </div>
                    </div>
                </div>
                
                <!-- Team Members -->
                <div class="glass rounded-3xl p-8">
                    <h2 class="text-xl font-bold mb-6">Team Members</h2>
                    <div id="team-grid" class="grid md:grid-cols-3 gap-4"></div>
                </div>
            </section>

<!-- GALLERY SECTION -->
            <section id="section-gallery" class="hidden space-y-8">
                <div class="glass rounded-3xl p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl font-bold">
                            <span class="gradient-text">Gallery</span>
                        </h1>
<button onclick="loadGallery()" class="bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg text-sm flex items-center gap-2">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3v0a3 3 0 003-3v-1m-4-8l-4-4m0 0L8 8m4-4v12"></path></svg>
                                Load from Server
                            </button>
                    </div>
                    
                    <!-- Upload area -->
                    <div class="border-2 border-dashed border-white/20 rounded-2xl p-8 text-center mb-6">
                        <input type="file" id="gallery-input" accept="image/*,video/*" multiple class="hidden" onchange="uploadGallery(this)">
                        <label for="gallery-input" class="cursor-pointer block">
                            <svg class="w-16 h-16 mx-auto text-white/30 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            <p class="text-white/50 mb-2">Click to upload images or videos</p>
                            <p class="text-xs text-white/30">JPEG, PNG, GIF, WEBP, WEBM, MP4</p>
                        </label>
                    </div>
                    
                    <!-- Upload progress -->
                    <div id="upload-progress" class="hidden mb-6">
                        <div class="flex items-center gap-3 bg-blue-500/20 rounded-xl p-4">
                            <div class="animate-spin w-6 h-6 border-2 border-blue-500 border-t-transparent rounded-full"></div>
                            <span class="text-blue-400">Uploading...</span>
                        </div>
                    </div>
                    
                    <!-- Gallery grid -->
                    <div id="gallery-grid" class="grid grid-cols-2 md:grid-cols-4 gap-4">
                        <p class="text-white/50 text-center col-span-4 py-8" id="gallery-empty">No uploads yet</p>
                    </div>
                </div>
            </section>

            <!-- HISTORY SECTION -->
            <section id="section-history" class="hidden space-y-8">
                <div class="glass rounded-3xl p-8">
                    <div class="flex items-center justify-between mb-6">
                        <h1 class="text-2xl font-bold">
                            <span class="gradient-text">Recording History</span>
                        </h1>
                        <button onclick="loadHistory()" class="bg-white/10 hover:bg-white/20 px-4 py-2 rounded-lg text-sm flex items-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m0 0a8.001 8.001 0 0115.356 2M4.582 8H4a2 2 0 012-2h8.838a2 2 0 012 2h4a2 2 0 012 2v8.838a2 2 0 01-2 2H4.582"></path></svg>
                            Refresh
                        </button>
                    </div>
                    <div id="history-list" class="space-y-3 max-h-96 overflow-y-auto scrollbar">
                        <p class="text-white/50 text-center py-8" id="history-empty">Loading...</p>
                    </div>
                </div>
            </section>

            <!-- ABOUT US SECTION -->
            <section id="section-about" class="hidden space-y-8">
                <!-- Header -->
                <div class="glass rounded-3xl p-8 text-center relative overflow-hidden">
                    <div class="absolute -top-20 -right-20 w-64 h-64 bg-amber-500/10 rounded-full blur-3xl"></div>
                    <div class="absolute -bottom-20 -left-20 w-48 h-48 bg-orange-500/10 rounded-full blur-3xl"></div>
                    <div class="relative">
                        <h1 class="text-4xl font-bold mb-4">
                            <span class="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent">About Us</span>
                        </h1>
                        <p class="text-white/60 max-w-xl mx-auto">We are a team of 3 students working together to build smart applications using AI technology.</p>
                    </div>
                </div>
                
                <!-- Team Members -->
                <div class="grid md:grid-cols-3 gap-6" id="about-team-container">
                    <!-- Member 1: Qamar -->
                    <div class="glass rounded-3xl p-6 relative overflow-hidden card-hover" data-member="CS1500983">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-amber-500/10 rounded-full blur-2xl"></div>
                        <div class="relative text-center">
                            <div class="w-28 h-28 rounded-full bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center mx-auto mb-4 shadow-lg relative overflow-hidden">
                                <span class="text-3xl font-bold about-initial">Q</span>
                                <input type="file" accept="image/*" class="hidden" onchange="uploadAboutPhoto('CS1500983', this)" id="photo-CS1500983">
                                <label for="photo-CS1500983" class="absolute bottom-0 right-0 bg-amber-500 hover:bg-amber-600 p-2 rounded-full cursor-pointer shadow-lg">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </label>
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-1">
                                <h3 class="text-xl font-bold text-white about-name">Qamar Abdullahi Adam</h3>
                                <button onclick="editAboutField('CS1500983', 'name')" class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-4">
                                <p class="text-amber-400 text-sm font-mono">ID: <span about-id>CS1500983</span></p>
                                <button onclick="editAboutField('CS1500983', 'id')" class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('CS1500983', 'skills')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Skills</p>
                                    <p class="text-sm text-white/70 about-skills">Web Development, Python, Database</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('CS1500983', 'university')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">University</p>
                                    <p class="text-sm text-white/70 about-university">Somali National University</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('CS1500983', 'level')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Level</p>
                                    <p class="text-sm text-white/70 about-level">Bachelor</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left flex justify-between items-center" onclick="editAboutField('CS1500983', 'faculty')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Faculty</p>
                                    <p class="text-sm text-white/70 about-faculty">Computer Science</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Member 2: Mandeq -->
                    <div class="glass rounded-3xl p-6 relative overflow-hidden card-hover" data-member="CS1500952">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-amber-500/10 rounded-full blur-2xl"></div>
                        <div class="relative text-center">
                            <div class="w-28 h-28 rounded-full bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center mx-auto mb-4 shadow-lg relative overflow-hidden">
                                <span class="text-3xl font-bold about-initial">M</span>
                                <input type="file" accept="image/*" class="hidden" onchange="uploadAboutPhoto('CS1500952', this)" id="photo-CS1500952">
                                <label for="photo-CS1500952" class="absolute bottom-0 right-0 bg-amber-500 hover:bg-amber-600 p-2 rounded-full cursor-pointer shadow-lg">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </label>
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-1">
                                <h3 class="text-xl font-bold text-white about-name">Mandeq Ibrahim Abdulle</h3>
                                <button onclick="editAboutField('CS1500952', 'name')" class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-4">
                                <p class="text-amber-400 text-sm font-mono">ID: <span about-id>CS1500952</span></p>
                                <button onclick="editAboutField('CS1500952', 'id')" class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('CS1500952', 'skills')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Skills</p>
                                    <p class="text-sm text-white/70 about-skills">Mobile Development, Java, UI/UX</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('CS1500952', 'university')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">University</p>
                                    <p class="text-sm text-white/70 about-university">Somali National University</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('CS1500952', 'level')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Level</p>
                                    <p class="text-sm text-white/70 about-level">Bachelor</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left flex justify-between items-center" onclick="editAboutField('CS1500952', 'faculty')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Faculty</p>
                                    <p class="text-sm text-white/70 about-faculty">Computer Science</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Member 3: Sabirin -->
                    <div class="glass rounded-3xl p-6 relative overflow-hidden card-hover" data-member="PH1202205">
                        <div class="absolute top-0 right-0 w-32 h-32 bg-amber-500/10 rounded-full blur-2xl"></div>
                        <div class="relative text-center">
                            <div class="w-28 h-28 rounded-full bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center mx-auto mb-4 shadow-lg relative overflow-hidden">
                                <span class="text-3xl font-bold about-initial">S</span>
                                <input type="file" accept="image/*" class="hidden" onchange="uploadAboutPhoto('PH1202205', this)" id="photo-PH1202205">
                                <label for="photo-PH1202205" class="absolute bottom-0 right-0 bg-amber-500 hover:bg-amber-600 p-2 rounded-full cursor-pointer shadow-lg">
                                    <svg class="w-4 h-4 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 13a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                                </label>
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-1">
                                <h3 class="text-xl font-bold text-white about-name">Sabirin Abdullahi Hussein</h3>
                                <button onclick="editAboutField('PH1202205', 'name')" class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="flex items-center justify-center gap-2 mb-4">
                                <p class="text-amber-400 text-sm font-mono">ID: <span about-id>PH1202205</span></p>
                                <button onclick="editAboutField('PH1202205', 'id')" class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('PH1202205', 'skills')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Skills</p>
                                    <p class="text-sm text-white/70 about-skills">Photography, Photo Editing, Design</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('PH1202205', 'university')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">University</p>
                                    <p class="text-sm text-white/70 about-university">Somali National University</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left mb-3 flex justify-between items-center" onclick="editAboutField('PH1202205', 'level')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Level</p>
                                    <p class="text-sm text-white/70 about-level">Diploma</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                            <div class="bg-white/5 rounded-xl p-4 text-left flex justify-between items-center" onclick="editAboutField('PH1202205', 'faculty')">
                                <div>
                                    <p class="text-xs text-amber-400 mb-1">Faculty</p>
                                    <p class="text-sm text-white/70 about-faculty">Photography</p>
                                </div>
                                <button class="text-white/30 hover:text-white">✏️</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Project Info -->
                <div class="glass rounded-3xl p-8">
                    <h2 class="text-xl font-bold mb-6 text-center">
                        <span class="bg-gradient-to-r from-amber-400 to-orange-500 bg-clip-text text-transparent">Project Information</span>
                    </h2>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="bg-gradient-to-br from-amber-500/10 to-orange-500/10 rounded-2xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold">Voice to Text</h3>
                                    <p class="text-xs text-white/50">AI Speech Recognition</p>
                                </div>
                            </div>
                            <p class="text-sm text-white/70">Convert spoken words to text automatically using browser's built-in Speech API. Supports English, Somali, and Arabic.</p>
                        </div>
                        <div class="bg-gradient-to-br from-amber-500/10 to-orange-500/10 rounded-2xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold">Video Recording</h3>
                                    <p class="text-xs text-white/50">Capture Video</p>
                                </div>
                            </div>
                            <p class="text-sm text-white/70">Record video directly from your camera and save to gallery. Perfect for creating content.</p>
                        </div>
                        <div class="bg-gradient-to-br from-amber-500/10 to-orange-500/10 rounded-2xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold">Gallery</h3>
                                    <p class="text-xs text-white/50">Media Storage</p>
                                </div>
                            </div>
                            <p class="text-sm text-white/70">Upload and organize images and videos. All media is saved securely to the server.</p>
                        </div>
                        <div class="bg-gradient-to-br from-amber-500/10 to-orange-500/10 rounded-2xl p-6">
                            <div class="flex items-center gap-3 mb-4">
                                <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-amber-600 to-orange-700 flex items-center justify-center">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                </div>
                                <div>
                                    <h3 class="font-bold">History</h3>
                                    <p class="text-xs text-white/50">Recording History</p>
                                </div>
                            </div>
                            <p class="text-sm text-white/70">All your voice recordings are saved and can be viewed anytime. Search and replay your history.</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </div>

    

    <script>
// ===================== API CONFIGURATION =====================
var API_URL = 'api/';
var VIDEO_API_URL = 'https://juictgirls.org/api/';

// ===================== VARIABLES =====================
var recognition, isRecording = false;
var transcript = '';
var currentLang = 'en-US';
var currentUser = null;
var team = [
    {id:'CS1500983', name:'Qamar Abdullahi Adam', skills:'Web Development, Python, Database', university:'Somali National University', level:'Bachelor', faculty:'Computer Science', img:''},
    {id:'CS1500952', name:'Mandeq Ibrahim Abdulle', skills:'Mobile Development, Java, UI/UX', university:'Somali National University', level:'Bachelor', faculty:'Computer Science', img:''},
    {id:'PH1202205', name:'Sabirin Abdullahi Hussein', skills:'Photography, Photo Editing, Design', university:'Somali National University', level:'Diploma', faculty:'Photography', img:''}
];

// Video Recording
var videoStream = null;
var mediaRecorder = null;
var videoChunks = [];
var isVideoRecording = false;

// ===================== API FUNCTIONS =====================
function apiCall(action, data = null, method = 'POST') {
    return new Promise(function(resolve, reject) {
        var url = API_URL + '?action=' + action;
        var options = {
            method: method,
            headers: {}
        };
        
        if (data && method === 'POST') {
            options.headers['Content-Type'] = 'application/json';
            options.body = JSON.stringify(data);
        }
        
        fetch(url, options)
            .then(function(response) { return response.json(); })
            .then(resolve)
            .catch(reject);
    });
}

function initAPI() {
    return new Promise(function(resolve, reject) {
        apiCall('init_users').then(resolve).catch(reject);
    });
}

function getUsers() {
    return new Promise(function(resolve, reject) {
        apiCall('users', null, 'GET').then(resolve).catch(reject);
    });
}

function login(id) {
    return apiCall('login', { id: id });
}

function saveUser(user) {
    return apiCall('save_user', user);
}

function saveRecording(userId, text, language) {
    return apiCall('save_recording', {
        user_id: userId,
        text: text,
        language: language
    });
}

function uploadFile(file, userId, type) {
    return new Promise(function(resolve, reject) {
        var formData = new FormData();
        formData.append('file', file);
        formData.append('user_id', userId || '');
        formData.append('type', type || 'image');
        
        fetch(API_URL + '?action=upload', {
            method: 'POST',
            body: formData
        })
        .then(function(response) { return response.json(); })
        .then(resolve)
        .catch(reject);
    });
}

// ===================== INIT =====================
document.addEventListener('DOMContentLoaded', function() {
    // Check if user is logged in
    var saved = localStorage.getItem('ailap_user');
    if (saved) {
        currentUser = JSON.parse(saved);
        document.getElementById('user-name').textContent = currentUser.name;
        document.getElementById('user-id').textContent = 'ID: ' + currentUser.id;
        if (currentUser.img) {
            document.getElementById('user-avatar').innerHTML = '<img src="' + currentUser.img + '" class="w-full h-full object-cover">';
        } else {
            document.getElementById('user-avatar').textContent = currentUser.name.charAt(0);
        }
        // Welcome notification
        var welcomeDiv = document.createElement('div');
        welcomeDiv.id = 'welcome-toast';
        welcomeDiv.className = 'fixed top-4 right-4 bg-gradient-to-r from-pink-500 to-rose-500 text-white px-6 py-3 rounded-xl shadow-lg z-50 animate-pulse';
        welcomeDiv.innerHTML = '👋 Welcome back, <strong>' + currentUser.name + '</strong>!';
        document.body.appendChild(welcomeDiv);
        setTimeout(function() {
            welcomeDiv.style.opacity = '0';
            welcomeDiv.style.transition = 'opacity 0.5s';
            setTimeout(function() { welcomeDiv.remove(); }, 500);
        }, 3000);
    }
    
    // Load team from localStorage
    var savedTeam = localStorage.getItem('ailap_team');
    if (savedTeam) {
        team = JSON.parse(savedTeam);
    }
    
    // Load everything
    loadHomeImage();
    loadHomeText();
    loadFeatures();
    loadAbout();
    loadHistory();
    showTeam();
});

function logout() {
    localStorage.removeItem('ailap_user');
    currentUser = null;
    window.location.href = 'login.php';
}

function loadProfile() {
    if (!currentUser) return;
    
    var name = currentUser.name || 'User';
    var id = currentUser.id || '-';
    
    // Check About Us photo first
    var aboutPhotos = JSON.parse(localStorage.getItem('about_photos') || '{}');
    var photo = aboutPhotos[id] || currentUser.photo || currentUser.img || '';
    
    // Update sidebar user
    document.getElementById('user-name').textContent = name;
    document.getElementById('user-id').textContent = 'ID: ' + id;
    
    var sidebarAvatar = document.getElementById('user-avatar');
    if (photo) {
        sidebarAvatar.innerHTML = '<img src="' + photo + '" class="w-full h-full object-cover rounded-full">';
    } else {
        sidebarAvatar.textContent = name.charAt(0);
    }
    
    // Update profile fields
    document.getElementById('profile-name').value = name;
    document.getElementById('profile-id').value = id;
    document.getElementById('profile-skills').value = currentUser.skills || '';
    
    // Update profile avatar
    var profileAvatar = document.getElementById('profile-avatar');
    if (photo) {
        profileAvatar.innerHTML = '<img src="' + photo + '" class="w-full h-full object-cover rounded-full">';
    } else {
        profileAvatar.textContent = name.charAt(0);
    }
}

function updateProfileImg(input) {
    var file = input.files[0];
    if (file) {
        var r = new FileReader();
        r.onload = function(e) {
            document.getElementById('profile-avatar').innerHTML = '<img src="' + e.target.result + '" class="w-full h-full object-cover rounded-full">';
            if (currentUser) {
                currentUser.img = e.target.result;
                // Also save to About Us
                var aboutPhotos = JSON.parse(localStorage.getItem('about_photos') || '{}');
                aboutPhotos[currentUser.id] = e.target.result;
                localStorage.setItem('about_photos', JSON.stringify(aboutPhotos));
            }
        };
        r.readAsDataURL(file);
    }
}

function updatePhoto(input) {
    var file = input.files[0];
    if (file) {
        var r = new FileReader();
        r.onload = function(e) {
            document.getElementById('profile-avatar').innerHTML = '<img src="' + e.target.result + '" class="w-full h-full object-cover rounded-full">';
            if (currentUser) {
                currentUser.img = e.target.result;
                // Also save to About Us
                var aboutPhotos = JSON.parse(localStorage.getItem('about_photos') || '{}');
                aboutPhotos[currentUser.id] = e.target.result;
                localStorage.setItem('about_photos', JSON.stringify(aboutPhotos));
            }
        };
        r.readAsDataURL(file);
    }
}

function saveProfile() {
    if (!currentUser) return;
    
    var name = document.getElementById('profile-name').value;
    var id = document.getElementById('profile-id').value;
    var skills = document.getElementById('profile-skills').value;
    var photo = currentUser.photo || '';
    
    // Get photo from avatar if changed
    var avatarImg = document.querySelector('#profile-avatar img');
    if (avatarImg && avatarImg.src && avatarImg.src.startsWith('data:')) {
        photo = avatarImg.src;
        // Also save to About Us
        var aboutPhotos = JSON.parse(localStorage.getItem('about_photos') || '{}');
        aboutPhotos[currentUser.id] = photo;
        localStorage.setItem('about_photos', JSON.stringify(aboutPhotos));
    }
    
    var userData = {
        id: id,
        name: name,
        skills: skills,
        photo: photo
    };
    
    saveUser(userData).then(function(response) {
        if (response.success) {
            currentUser = response.user || userData;
            localStorage.setItem('ailap_user', JSON.stringify(currentUser));
            
            // Update team
            for (var i = 0; i < team.length; i++) {
                if (team[i].id === currentUser.id) {
                    team[i] = currentUser;
                    break;
                }
            }
            loadProfile();
            showTeam();
            alert('Saved to server!');
        } else {
            alert('Error: ' + response.error);
        }
    }).catch(function(err) {
        // Fallback to localStorage
        currentUser.name = name;
        currentUser.id = id;
        currentUser.skills = skills;
        localStorage.setItem('ailap_user', JSON.stringify(currentUser));
        
        for (var i = 0; i < team.length; i++) {
            if (team[i].id === currentUser.id) {
                team[i] = currentUser;
                break;
            }
        }
        loadProfile();
        showTeam();
        alert('Saved locally!');
    });
}

function showTeam() {
    var grid = document.getElementById('team-grid');
    grid.innerHTML = '';
    for (var i = 0; i < team.length; i++) {
        var u = team[i];
        var isMe = currentUser && u.id === currentUser.id;
        var imgContent = u.img ? '<img src="' + u.img + '" class="w-full h-full object-cover rounded-full">' : 
            '<span class="text-2xl font-bold">' + u.name.charAt(0) + '</span>';
        
        // All members can add photo - show edit button for everyone
        grid.innerHTML += '<div class="glass rounded-2xl p-4 relative' + (isMe ? ' border-2 border-pink-500/50' : '') + '">' +
            '<div class="relative inline-block mx-auto mb-3">' +
            '<div class="w-24 h-24 rounded-full bg-gradient-to-br from-pink-500 to-rose-500 flex items-center justify-center">' + imgContent + '</div>' +
            '<input type="file" id="team-img-' + u.id + '" accept="image/*" class="hidden" onchange="uploadTeamPhoto(this, \'' + u.id + '\')">' +
            '<label for="team-img-' + u.id + '" class="absolute -bottom-1 -right-1 bg-pink-500 p-2 rounded-full cursor-pointer hover:bg-pink-600 shadow-lg">' +
            '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 9a2 2 0 012-2h.93a2 2 0 001.664-.89l.812-1.22A2 2 0 0110.07 4h3.86a2 2 0 011.664.89l.812 1.22A2 2 0 0018.07 7H19a2 2 0 012 2v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"></path></svg>' +
            '</label>' +
            '</div>' +
            '<h4 class="text-center font-medium' + (isMe ? ' text-pink-400' : '') + '">' + u.name + '</h4>' +
            '<p class="text-center text-xs text-pink-400 font-mono">' + u.id + '</p>' +
            '<p class="text-center text-xs text-white/50 mb-2">' + (u.skills || 'No skills') + '</p>' +
            '<button onclick="editMember(\'' + u.id + '\')" class="w-full bg-white/10 hover:bg-white/20 py-1.5 rounded-lg text-xs transition">Edit Info</button></div>';
    }
}

function editMember(userId) {
    var u = team.find(function(x) { return x.id === userId; });
    if (!u) return;
    
    var newName = prompt('Enter name for ' + u.name + ':', u.name);
    if (newName !== null && newName.trim()) {
        u.name = newName.trim();
    }
    
    var newSkills = prompt('Enter skills for ' + u.name + ':', u.skills || '');
    if (newSkills !== null) {
        u.skills = newSkills.trim();
    }
    
    // Save
    localStorage.setItem('ailap_team', JSON.stringify(team));
    
    if (currentUser && currentUser.id === userId) {
        currentUser = u;
        localStorage.setItem('ailap_user', JSON.stringify(currentUser));
    }
    
    showTeam();
    alert('Saved: ' + u.name + ' - ' + u.skills);
}

function uploadTeamPhoto(input, userId) {
    var file = input.files[0];
    if (file) {
        // Upload to server
        uploadFile(file, userId, 'image').then(function(response) {
            if (response.success) {
                // Update local with server URL
                for (var i = 0; i < team.length; i++) {
                    if (team[i].id === userId) {
                        team[i].photo = response.filepath;
                        team[i].img = response.filepath;
                        break;
                    }
                }
                localStorage.setItem('ailap_team', JSON.stringify(team));
                if (currentUser && currentUser.id === userId) {
                    currentUser.photo = response.filepath;
                    currentUser.img = response.filepath;
                    localStorage.setItem('ailap_user', JSON.stringify(currentUser));
                }
                showTeam();
                loadProfile();
                alert('Photo uploaded!');
            }
        }).catch(function(err) {
            // Fallback to base64
            var r = new FileReader();
            r.onload = function(e) {
                for (var i = 0; i < team.length; i++) {
                    if (team[i].id === userId) {
                        team[i].photo = e.target.result;
                        team[i].img = e.target.result;
                        break;
                    }
                }
                localStorage.setItem('ailap_team', JSON.stringify(team));
                if (currentUser && currentUser.id === userId) {
                    currentUser.photo = e.target.result;
                    currentUser.img = e.target.result;
                    localStorage.setItem('ailap_user', JSON.stringify(currentUser));
                }
                showTeam();
                loadProfile();
            };
            r.readAsDataURL(file);
        });
    }
}

function showTab(tab) {
    ['home', 'record', 'profile', 'gallery', 'history', 'about'].forEach(function(t) {
        document.getElementById('section-' + t).classList.add('hidden');
        document.getElementById('nav-' + t).classList.remove('nav-active');
        document.getElementById('nav-' + t).classList.add('text-white/70');
    });
    document.getElementById('section-' + tab).classList.remove('hidden');
    document.getElementById('nav-' + tab).classList.add('nav-active');
    document.getElementById('nav-' + tab).classList.remove('text-white/70');
    
    // Load data when switching tabs
    if (tab === 'gallery') {
        loadGallery();
    } else if (tab === 'history') {
        loadHistory();
    } else if (tab === 'about') {
        loadAbout();
    } else if (tab === 'profile') {
        loadProfile();
        showTeam();
    } else if (tab === 'home') {
        loadHomeImage();
        loadHomeText();
        loadFeatures();
    }
}

function loadAbout() {
    loadAboutData();
}

function changeLang() {
    currentLang = document.getElementById('lang-select').value;
}

function startRec() {
    if (isRecording) return;
    
    if (!/Chrome/.test(navigator.userAgent)) {
        document.getElementById('display-text').innerHTML = '<span class="text-red-400">Please use Chrome browser!</span>';
        return;
    }
    
    var SR = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!SR) {
        document.getElementById('display-text').innerHTML = '<span class="text-red-400">Voice API not supported!</span>';
        return;
    }
    
    recognition = new SR();
    recognition.lang = currentLang;
    recognition.continuous = false;
    recognition.interimResults = false;
    
    transcript = '';
    isRecording = true;
    
    document.getElementById('btn-start').classList.add('hidden');
    document.getElementById('btn-stop').classList.remove('hidden');
    document.getElementById('pulse-ring').classList.remove('hidden');
    document.getElementById('wave-anim').classList.remove('hidden');
    document.getElementById('display-text').innerHTML = '<span class="text-green-400 animate-pulse">Listening... Speak now!</span>';
    
    recognition.onresult = function(event) {
        if (event.results.length > 0) {
            transcript = event.results[0][0].transcript;
            document.getElementById('display-text').innerHTML = '<span class="text-pink-400 font-bold">' + transcript + '</span>';
        }
    };
    
    recognition.onerror = function(event) {
        document.getElementById('display-text').innerHTML = '<span class="text-yellow-400">Error: ' + event.error + '</span>';
        isRecording = false;
    };
    
    recognition.onend = function() {
        isRecording = false;
        document.getElementById('btn-start').classList.remove('hidden');
        document.getElementById('btn-stop').classList.add('hidden');
        document.getElementById('pulse-ring').classList.add('hidden');
        document.getElementById('wave-anim').classList.add('hidden');
        
        if (transcript) {
            document.getElementById('result-text').textContent = transcript;
            document.getElementById('result-box').classList.remove('hidden');
            
            // Save to server
            if (currentUser) {
                saveRecording(currentUser.id, transcript, currentLang).then(function(response) {
                    console.log('Recording saved to server');
                }).catch(function(err) {
                    console.log('Save error:', err);
                });
            }
            
            // Also save to local history
            var history = JSON.parse(localStorage.getItem('ailap_history') || '[]');
            history.unshift({ text: transcript, time: new Date().toLocaleString() });
            history = history.slice(0, 50);
            localStorage.setItem('ailap_history', JSON.stringify(history));
        } else {
            document.getElementById('display-text').innerHTML = '<span class="text-yellow-400">No speech detected. Try again!</span>';
        }
    };
    
    try {
        recognition.start();
    } catch(e) {
        document.getElementById('display-text').innerHTML = '<span class="text-red-400">Error: ' + e + '</span>';
        isRecording = false;
    }
}

function stopRec() {
    if (recognition) recognition.stop();
}

function copyResult() {
    navigator.clipboard.writeText(document.getElementById('result-text').textContent);
    alert('Copied to clipboard!');
}

function speakResult() {
    var t = document.getElementById('result-text').textContent;
    if (t) speechSynthesis.speak(new SpeechSynthesisUtterance(t));
}

function clearResult() {
    document.getElementById('result-box').classList.add('hidden');
    document.getElementById('display-text').innerHTML = '<span class="text-white/50">Click the microphone and speak...</span>';
    transcript = '';
}

function editResult() {
    var textEl = document.getElementById('result-text');
    var currentText = textEl.textContent;
    var newText = prompt('Edit your text:', currentText);
    if (newText !== null && newText.trim() !== '') {
        textEl.textContent = newText.trim();
        transcript = newText.trim();
        alert('Text updated!');
    }
}

function saveResult() {
    var textEl = document.getElementById('result-text');
    var text = textEl.textContent;
    if (!text) {
        alert('No text to save!');
        return;
    }
    var history = JSON.parse(localStorage.getItem('ailap_history') || '[]');
    history.unshift({ text: text, time: new Date().toLocaleString(), lang: currentLang });
    history = history.slice(0, 50);
    localStorage.setItem('ailap_history', JSON.stringify(history));
    alert('Saved to history!');
}

// ===================== HISTORY =====================
function loadHistory() {
    var list = document.getElementById('history-list');
    var empty = document.getElementById('history-empty');
    
    if (currentUser) {
        apiCall('recordings', { user_id: currentUser.id }, 'GET').then(function(response) {
            if (response.success && response.recordings && response.recordings.length > 0) {
                list.innerHTML = '';
                response.recordings.forEach(function(rec) {
                    var date = new Date(rec.created_at).toLocaleString();
                    list.innerHTML += '<div class="glass rounded-xl p-4 hover:bg-white/5 cursor-pointer" onclick="showRecording(\'' + rec.text.replace(/'/g, "\\'") + '\')">' +
                        '<div class="flex items-start justify-between">' +
                        '<p class="text-sm text-white/70 line-clamp-2 flex-1">' + rec.text + '</p>' +
                        '<button onclick="event.stopPropagation(); deleteRecording(' + rec.id + ')" class="text-red-400 hover:text-red-300 ml-2">×</button>' +
                        '</div>' +
                        '<div class="flex items-center gap-2 mt-2 text-xs text-white/40">' +
                        '<span>' + rec.language + '</span>' +
                        '<span>•</span>' +
                        '<span>' + date + '</span>' +
                        '</div>' +
                        '</div>';
                });
            } else {
                list.innerHTML = '<p class="text-white/50 text-center py-8">No recordings yet. Start recording!</p>';
            }
        }).catch(function() {
            loadLocalHistory();
        });
    } else {
        loadLocalHistory();
    }
}

function loadLocalHistory() {
    var list = document.getElementById('history-list');
    var history = JSON.parse(localStorage.getItem('ailap_history') || '[]');
    
    if (history.length > 0) {
        list.innerHTML = '';
        history.forEach(function(item, index) {
            list.innerHTML += '<div class="glass rounded-xl p-4 hover:bg-white/5 group">' +
                '<div class="flex items-start justify-between">' +
                '<p class="text-sm text-white/70 line-clamp-2 flex-1 cursor-pointer" onclick="editHistory(' + index + ')">' + item.text + '</p>' +
                '<div class="flex gap-2 ml-2">' +
                '<button onclick="editHistory(' + index + ')" class="text-blue-400 hover:text-blue-300">Edit</button>' +
                '<button onclick="deleteHistory(' + index + ')" class="text-red-400 hover:text-red-300">×</button>' +
                '</div>' +
                '</div>' +
                '<p class="text-xs text-white/40 mt-2">' + item.time + '</p>' +
                '</div>';
        });
    } else {
        list.innerHTML = '<p class="text-white/50 text-center py-8">No recordings yet. Start recording!</p>';
    }
}

function editHistory(index) {
    var history = JSON.parse(localStorage.getItem('ailap_history') || '[]');
    var item = history[index];
    if (!item) return;
    
    var newText = prompt('Edit text:', item.text);
    if (newText !== null && newText.trim() !== '') {
        history[index].text = newText.trim();
        localStorage.setItem('ailap_history', JSON.stringify(history));
        loadHistory();
        alert('Done!');
    }
}

function deleteHistory(index) {
    if (confirm('Tirtir?')) {
        var history = JSON.parse(localStorage.getItem('ailap_history') || '[]');
        history.splice(index, 1);
        localStorage.setItem('ailap_history', JSON.stringify(history));
        loadHistory();
    }
}

function showRecording(text) {
    document.getElementById('result-text').textContent = text;
    document.getElementById('result-box').classList.remove('hidden');
    showTab('record');
}

function deleteRecording(id) {
    if (confirm('Delete this recording?')) {
        // Delete from local (server delete not implemented)
        var history = JSON.parse(localStorage.getItem('ailap_history') || '[]');
        history = history.slice(1);
        localStorage.setItem('ailap_history', JSON.stringify(history));
        loadHistory();
    }
}

// ===================== UPLOADS =====================
function loadServerUploads() {
    if (!currentUser) return;
    
    apiCall('uploads', { user_id: currentUser.id }, 'GET').then(function(response) {
        if (response.success && response.uploads && response.uploads.length > 0) {
            document.getElementById('server-uploads').classList.remove('hidden');
            var gallery = document.getElementById('server-gallery');
            gallery.innerHTML = '';
            
            response.uploads.forEach(function(up) {
                if (up.type === 'image' || !up.type) {
                    gallery.innerHTML += '<div class="relative group rounded-xl overflow-hidden">' +
                        '<img src="' + up.filepath + '" class="w-full aspect-square object-cover">' +
                        '<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center">' +
                        '<button onclick="deleteUpload(\'' + up.filename + '\')" class="p-2 bg-red-500 rounded-full">×</button>' +
                        '</div></div>';
                } else if (up.type === 'video') {
                    gallery.innerHTML += '<div class="relative group rounded-xl overflow-hidden">' +
                        '<video src="' + up.filepath + '" class="w-full aspect-square object-cover"></video>' +
                        '<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 flex items-center justify-center">' +
                        '<button onclick="deleteUpload(\'' + up.filename + '\')" class="p-2 bg-red-500 rounded-full">×</button>' +
                        '</div></div>';
                }
            });
        }
    }).catch(function() {
        document.getElementById('server-uploads').classList.add('hidden');
    });
}

function deleteUpload(filename) {
    // Would need server endpoint - just hide for now
    if (confirm('Delete this file?')) {
        loadServerUploads();
    }
}

function uploadAboutPhoto(memberId, input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var memberDiv = document.querySelector('[data-member="' + memberId + '"]');
            if (memberDiv) {
                var imgContainer = memberDiv.querySelector('.rounded-full');
                imgContainer.innerHTML = '<img src="' + e.target.result + '" class="w-full h-full object-cover rounded-full">';
                
                var aboutPhotos = JSON.parse(localStorage.getItem('about_photos') || '{}');
                aboutPhotos[memberId] = e.target.result;
                localStorage.setItem('about_photos', JSON.stringify(aboutPhotos));
                
                // Also update current user if this is the logged in user
                if (currentUser && currentUser.id === memberId) {
                    currentUser.img = e.target.result;
                    currentUser.photo = e.target.result;
                    localStorage.setItem('ailap_user', JSON.stringify(currentUser));
                    loadProfile();
                }
                
                // Update sidebar
                if (currentUser && currentUser.id === memberId) {
                    document.getElementById('user-avatar').innerHTML = '<img src="' + e.target.result + '" class="w-full h-full object-cover rounded-full">';
                }
                
                alert('Photo saved!');
            }
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function editAboutField(memberId, field) {
    var memberDiv = document.querySelector('[data-member="' + memberId + '"]');
    if (!memberDiv) return;
    
    var currentValue = '';
    if (field === 'name') {
        currentValue = memberDiv.querySelector('.about-name').textContent;
    } else if (field === 'id') {
        currentValue = memberDiv.querySelector('[about-id]').textContent;
    } else if (field === 'skills') {
        currentValue = memberDiv.querySelector('.about-skills').textContent;
    } else if (field === 'university') {
        currentValue = memberDiv.querySelector('.about-university').textContent;
    } else if (field === 'level') {
        currentValue = memberDiv.querySelector('.about-level').textContent;
    } else if (field === 'faculty') {
        currentValue = memberDiv.querySelector('.about-faculty').textContent;
    }
    
    var newValue = prompt('Enter ' + field + ':', currentValue);
    if (newValue !== null && newValue.trim() !== '') {
        if (field === 'name') {
            memberDiv.querySelector('.about-name').textContent = newValue.trim();
            memberDiv.querySelector('.about-initial').textContent = newValue.trim().charAt(0).toUpperCase();
        } else if (field === 'id') {
            memberDiv.querySelector('[about-id]').textContent = newValue.trim();
        } else if (field === 'skills') {
            memberDiv.querySelector('.about-skills').textContent = newValue.trim();
        } else if (field === 'university') {
            memberDiv.querySelector('.about-university').textContent = newValue.trim();
        } else if (field === 'level') {
            memberDiv.querySelector('.about-level').textContent = newValue.trim();
        } else if (field === 'faculty') {
            memberDiv.querySelector('.about-faculty').textContent = newValue.trim();
        }
        
        var aboutData = JSON.parse(localStorage.getItem('about_data') || '{}');
        if (!aboutData[memberId]) aboutData[memberId] = {};
        aboutData[memberId][field] = newValue.trim();
        localStorage.setItem('about_data', JSON.stringify(aboutData));
        alert('Saved!');
    }
}

function loadAboutData() {
    var aboutData = JSON.parse(localStorage.getItem('about_data') || '{}');
    var aboutPhotos = JSON.parse(localStorage.getItem('about_photos') || '{}');
    var container = document.querySelector('#about-team-container');
    if (!container) return;
    
    var members = container.querySelectorAll('[data-member]');
    members.forEach(function(memberDiv) {
        var memberId = memberDiv.getAttribute('data-member');
        var data = aboutData[memberId] || {};
        
        if (data.name) {
            memberDiv.querySelector('.about-name').textContent = data.name;
            memberDiv.querySelector('.about-initial').textContent = data.name.charAt(0).toUpperCase();
        }
        if (data.id) {
            memberDiv.querySelector('[about-id]').textContent = data.id;
        }
        if (data.skills) {
            memberDiv.querySelector('.about-skills').textContent = data.skills;
        }
        if (data.university) {
            memberDiv.querySelector('.about-university').textContent = data.university;
        }
        if (data.level) {
            memberDiv.querySelector('.about-level').textContent = data.level;
        }
        if (data.faculty) {
            memberDiv.querySelector('.about-faculty').textContent = data.faculty;
        }
        
        if (aboutPhotos[memberId]) {
            memberDiv.querySelector('.rounded-full').innerHTML = '<img src="' + aboutPhotos[memberId] + '" class="w-full h-full object-cover rounded-full">';
        }
});
}

function editHomeText(field) {
    var el = document.getElementById('home-' + field);
    if (!el) return;
    
    var currentText = el.textContent;
    var newText = prompt('Enter new text:', currentText);
    if (newText !== null && newText.trim() !== '') {
        if (field === 'title') {
            el.innerHTML = '<span class="gradient-text">' + newText.trim() + '</span><br>made easy';
        } else {
            el.textContent = newText.trim();
        }
        localStorage.setItem('home_' + field, newText.trim());
        alert('Done!');
    }
}

function loadHomeText() {
    var welcome = localStorage.getItem('home_welcome');
    var title = localStorage.getItem('home_title');
    var desc = localStorage.getItem('home_desc');
    
    if (welcome) document.getElementById('home-welcome').textContent = welcome;
    if (title) document.getElementById('home-title').innerHTML = '<span class="gradient-text">' + title + '</span><br>made easy';
    if (desc) document.getElementById('home-desc').textContent = desc;
}

function uploadHomeImage(input) {
    var file = input.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(e) {
            var container = document.getElementById('home-image-container');
            container.innerHTML = '<img src="' + e.target.result + '" class="w-full h-full object-cover rounded-3xl">';
            localStorage.setItem('home_image', e.target.result);
            alert('Photo uploaded!');
        };
        reader.readAsDataURL(file);
    }
}

function loadHomeImage() {
    var img = localStorage.getItem('home_image');
    if (img) {
        var container = document.getElementById('home-image-container');
        if (container) {
            container.innerHTML = '<img src="' + img + '" class="w-full h-full object-cover rounded-3xl">';
        }
    }
}

function editFeature(index) {
    var container = document.querySelectorAll('#section-home .grid > div')[index];
    if (!container) return;
    
    var currentTitle = container.querySelector('.feature-title').textContent;
    var currentDesc = container.querySelector('.feature-desc').textContent;
    
    var newTitle = prompt('Title:', currentTitle);
    if (newTitle === null) return;
    
    var newDesc = prompt('Description:', currentDesc);
    if (newDesc === null) return;
    
    container.querySelector('.feature-title').textContent = newTitle.trim();
    container.querySelector('.feature-desc').textContent = newDesc.trim();
    
    var features = JSON.parse(localStorage.getItem('home_features') || '[]');
    features[index] = { title: newTitle.trim(), desc: newDesc.trim() };
    localStorage.setItem('home_features', JSON.stringify(features));
    alert('Saved!');
}

function loadFeatures() {
    var features = JSON.parse(localStorage.getItem('home_features') || '[]');
    var containers = document.querySelectorAll('#section-home .grid > div');
    features.forEach(function(f, i) {
        if (containers[i] && f) {
            containers[i].querySelector('.feature-title').textContent = f.title;
            containers[i].querySelector('.feature-desc').textContent = f.desc;
        }
    });
}

function generateQR() {
    var text = prompt('Enter text for QR Code:');
    if (text && text.trim()) {
        var qrUrl = 'https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=' + encodeURIComponent(text.trim());
        var win = window.open('', '_blank');
        win.document.write('<html><head><title>QR Code</title></head><body style="background:#1a1a2e;display:flex;justify-content:center;align-items:center;height:100vh;margin:0"><img src="' + qrUrl + '" style="border-radius:20px"></body></html>');
    }
}

function loadGallery() {
    var grid = document.getElementById('gallery-grid');
    var empty = document.getElementById('gallery-empty');
    
    if (!grid || !empty) {
        alert('Gallery error - refresh page');
        return;
    }
    
    // Load local first
    var localImages = JSON.parse(localStorage.getItem('ailap_gallery') || '[]');
    
    if (localImages.length > 0) {
        grid.innerHTML = '';
        empty.classList.add('hidden');
        for (var i = 0; i < localImages.length; i++) {
            var item = localImages[i];
            if (item && item.startsWith('data:video')) {
                grid.innerHTML += '<div class="relative group rounded-xl overflow-hidden aspect-square bg-gray-800">' +
                    '<video src="' + item + '" class="w-full h-full" controls></video>' +
                    '<button onclick="this.parentElement.remove()" class="absolute top-2 right-2 p-2 bg-red-500 rounded-full text-white">×</button></div>';
            } else if (item) {
                grid.innerHTML += '<div class="relative group rounded-xl overflow-hidden aspect-square">' +
                    '<img src="' + item + '" class="w-full h-full object-cover">' +
                    '<button onclick="this.parentElement.remove()" class="absolute top-2 right-2 p-2 bg-red-500 rounded-full text-white opacity-0 group-hover:opacity-100 transition">×</button></div>';
            }
        }
    } else {
        empty.textContent = 'No uploads yet - click upload box above!';
    }
}

function loadLocalGallery() {
    var grid = document.getElementById('gallery-grid');
    var empty = document.getElementById('gallery-empty');
    var images = JSON.parse(localStorage.getItem('ailap_gallery') || '[]');
    
    if (images.length > 0) {
        grid.innerHTML = '';
        images.forEach(function(img) {
            grid.innerHTML += '<div class="relative group rounded-xl overflow-hidden aspect-square">' +
                '<img src="' + img + '" class="w-full h-full object-cover">' +
                '<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">' +
                '<button onclick="this.parentElement.remove()" class="p-2 bg-red-500 rounded-full">×</button>' +
                '</div></div>';
        });
        empty.textContent = '';
    } else {
        empty.textContent = 'No uploads yet - click above to upload!';
    }
}

function uploadGallery(input) {
    var grid = document.getElementById('gallery-grid');
    var empty = document.getElementById('gallery-empty');
    var progress = document.getElementById('upload-progress');
    var uploadCount = 0;
    var totalFiles = input.files.length;
    
    empty.textContent = '';
    progress.classList.remove('hidden');
    
    for (var i = 0; i < input.files.length; i++) {
        var file = input.files[i];
        var isVideo = file.type.startsWith('video/');
        
        // Upload to server
        if (currentUser) {
            var formData = new FormData();
            formData.append('file', file);
            formData.append('user_id', currentUser.id);
            formData.append('type', isVideo ? 'video' : 'image');
            
            fetch(API_URL + '?action=upload', {
                method: 'POST',
                body: formData
            }).then(function(response) { return response.json(); })
            .then(function(data) {
                uploadCount++;
                if (data.success) {
                    addToGallery(data.filepath, isVideo ? 'video' : 'image');
                }
                if (uploadCount >= totalFiles) {
                    progress.classList.add('hidden');
                    loadGallery();
                }
            }).catch(function(err) {
                uploadCount++;
                // Fallback to base64
                addLocalToGallery(file);
                if (uploadCount >= totalFiles) {
                    progress.classList.add('hidden');
                    loadGallery();
                }
            });
        } else {
            // Local only
            addLocalToGallery(file);
            uploadCount++;
            if (uploadCount >= totalFiles) {
                progress.classList.add('hidden');
                loadGallery();
            }
        }
    }
}

function addLocalToGallery(file) {
    var r = new FileReader();
    r.onload = function(e) {
        var grid = document.getElementById('gallery-grid');
        var empty = document.getElementById('gallery-empty');
        empty.textContent = '';
        
        if (file.type.startsWith('video/')) {
            grid.innerHTML = '<div class="relative group rounded-xl overflow-hidden aspect-square bg-gray-800">' +
                '<video src="' + e.target.result + '" class="w-full h-full" controls></video>' +
                '<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">' +
                '<button onclick="this.parentElement.parentElement.remove()" class="p-2 bg-red-500 rounded-full">×</button>' +
                '</div></div>' + grid.innerHTML;
        } else {
            grid.innerHTML = '<div class="relative group rounded-xl overflow-hidden aspect-square">' +
                '<img src="' + e.target.result + '" class="w-full h-full object-cover">' +
                '<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">' +
                '<button onclick="this.parentElement.remove()" class="p-2 bg-red-500 rounded-full">×</button>' +
                '</div></div>' + grid.innerHTML;
        }
        
        // Save to localStorage
        var images = JSON.parse(localStorage.getItem('ailap_gallery') || '[]');
        images.unshift(e.target.result);
        images = images.slice(0, 50);
        localStorage.setItem('ailap_gallery', JSON.stringify(images));
    };
    r.readAsDataURL(file);
}

function addToGallery(filepath, type) {
    var grid = document.getElementById('gallery-grid');
    var empty = document.getElementById('gallery-empty');
    empty.textContent = '';
    
    if (type === 'video') {
        grid.innerHTML = '<div class="relative group rounded-xl overflow-hidden aspect-square bg-gray-800">' +
            '<video src="' + filepath + '" class="w-full h-full" controls></video>' +
            '<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">' +
            '<button onclick="this.parentElement.parentElement.remove()" class="p-2 bg-red-500 rounded-full">×</button>' +
            '</div></div>' + grid.innerHTML;
    } else {
        grid.innerHTML = '<div class="relative group rounded-xl overflow-hidden aspect-square">' +
            '<img src="' + filepath + '" class="w-full h-full object-cover">' +
            '<div class="absolute inset-0 bg-black/50 opacity-0 group-hover:opacity-100 transition flex items-center justify-center">' +
            '<button onclick="this.parentElement.remove()" class="p-2 bg-red-500 rounded-full">×</button>' +
            '</div></div>' + grid.innerHTML;
    }
}

// ===================== VIDEO RECORDING =====================
function initCamera() {
    navigator.mediaDevices.getUserMedia({ video: true, audio: true })
        .then(function(stream) {
            videoStream = stream;
            var video = document.getElementById('video-preview');
            video.srcObject = stream;
            document.getElementById('video-placeholder').classList.add('hidden');
            document.getElementById('btn-open-cam').classList.add('hidden');
            document.getElementById('btn-start-video').classList.remove('hidden');
            document.getElementById('btn-close-cam').classList.remove('hidden');
        })
        .catch(function(err) {
            alert('Camera not accessible: ' + err.message + '\n\nPlease allow camera access in browser settings.');
        });
}

function startVideoRec() {
    if (!videoStream) return;
    
    videoChunks = [];
    mediaRecorder = new MediaRecorder(videoStream);
    
    mediaRecorder.ondataavailable = function(e) {
        videoChunks.push(e.data);
    };
    
    mediaRecorder.onstop = function() {
        var blob = new Blob(videoChunks, { type: 'video/webm' });
        var url = URL.createObjectURL(blob);
        
        // Upload to server
        if (currentUser) {
            var formData = new FormData();
            formData.append('file', blob, 'video.webm');
            formData.append('user_id', currentUser.id);
            formData.append('type', 'video');
            
            fetch(API_URL + '?action=upload', {
                method: 'POST',
                body: formData
            }).then(function(response) { return response.json(); })
            .then(function(data) {
                console.log('Video uploaded:', data);
            }).catch(function(err) {
                console.log('Upload error:', err);
            });
        }
        
        // Add to gallery
        var grid = document.getElementById('gallery-grid');
        grid.innerHTML = '<div class="col-span-2 relative group">' +
            '<video src="' + url + '" class="w-full aspect-video object-cover rounded-xl" controls></video>' +
            '<button onclick="this.parentElement.remove()" class="absolute top-2 right-2 p-2 bg-red-500 rounded-full opacity-0 group-hover:opacity-100">X</button></div>' + grid.innerHTML;
    };
    
    mediaRecorder.start();
    isVideoRecording = true;
    document.getElementById('video-rec-indicator').classList.remove('hidden');
    document.getElementById('btn-start-video').classList.add('hidden');
    document.getElementById('btn-stop-video').classList.remove('hidden');
}

function stopVideoRec() {
    if (mediaRecorder && isVideoRecording) {
        mediaRecorder.stop();
        isVideoRecording = false;
        document.getElementById('video-rec-indicator').classList.add('hidden');
        document.getElementById('btn-start-video').classList.remove('hidden');
        document.getElementById('btn-stop-video').classList.add('hidden');
    }
}

function closeCamera() {
    if (videoStream) {
        videoStream.getTracks().forEach(function(track) { track.stop(); });
        videoStream = null;
    }
    var video = document.getElementById('video-preview');
    video.srcObject = null;
    document.getElementById('video-placeholder').classList.remove('hidden');
    document.getElementById('btn-open-cam').classList.remove('hidden');
    document.getElementById('btn-start-video').classList.add('hidden');
    document.getElementById('btn-close-cam').classList.add('hidden');
    document.getElementById('btn-stop-video').classList.add('hidden');
}

// ===================== VOICE CALL =====================
var callRecognition, isCallRecording = false;

function startVoiceCall() {
    if (isCallRecording) return;
    if (!/Chrome/.test(navigator.userAgent)) {
        alert('Please use Chrome browser!');
        return;
    }
    var SR = window.SpeechRecognition || window.webkitSpeechRecognition;
    if (!SR) {
        alert('Voice API not supported!');
        return;
    }
    callRecognition = new SR();
    callRecognition.continuous = true;
    callRecognition.interimResults = true;
    callRecognition.lang = currentLang;
    isCallRecording = true;
    document.getElementById('btn-start-call').classList.add('hidden');
    document.getElementById('btn-stop-call').classList.remove('hidden');
    document.getElementById('call-status').classList.remove('hidden');
    document.getElementById('call-result').classList.remove('hidden');
    var callText = '';
    callRecognition.onresult = function(e) {
        var result = e.results[e.results.length - 1];
        if (result.isFinal) {
            callText += result[0].transcript + ' ';
            document.getElementById('call-text').value = callText;
        }
    };
    callRecognition.onerror = function(e) {
        alert('Error: ' + e.error);
    };
    callRecognition.onend = function() {
        isCallRecording = false;
    };
    callRecognition.start();
}

function stopVoiceCall() {
    if (callRecognition) {
        callRecognition.stop();
        isCallRecording = false;
        document.getElementById('btn-start-call').classList.remove('hidden');
        document.getElementById('btn-stop-call').classList.add('hidden');
        document.getElementById('call-status').classList.add('hidden');
    }
}

function nadiifCallText() {
    var t = document.getElementById('call-text').value;
    t = t.trim().replace(/  +/g, ' ').replace(/\n\n+/g, '\n');
    document.getElementById('call-text').value = t;
    alert('Cleaned!');
}

function copyCallText() {
    navigator.clipboard.writeText(document.getElementById('call-text').value);
    alert('Copied!');
}

function saveCallText() {
    var t = document.getElementById('call-text').value;
    if (!t) return;
    var h = JSON.parse(localStorage.getItem('ailap_history') || '[]');
    h.unshift({ text: t, time: new Date().toLocaleString(), from: 'voice_call', ip: '10.183.226.5' });
    localStorage.setItem('ailap_history', JSON.stringify(h.slice(0, 50)));
    alert('Saved!');
}

function videoToTextAPI() {
    var videoUrl = document.getElementById('video-url').value.trim();
    if (!videoUrl) {
        alert('Please enter a video URL!');
        return;
    }
    
    var localIP = '10.183.226.5';
    var apiUrl = 'https://juictgirls.org/api/video-to-text';
    
    document.getElementById('video-to-text-loading').classList.remove('hidden');
    document.getElementById('video-result').classList.add('hidden');
    
    fetch(apiUrl, {
        method: 'POST',
        headers: { 
            'Content-Type': 'application/json',
            'Accept': 'application/json'
        },
        body: JSON.stringify({ video_url: videoUrl })
    })
    .then(function(response) { return response.json(); })
    .then(function(data) {
        document.getElementById('video-to-text-loading').classList.add('hidden');
        var resultDiv = document.getElementById('video-result');
        resultDiv.classList.remove('hidden');
        if (data.text || data.transcript) {
            var rawText = data.text || data.transcript;
            var cleanText = cleanTextFunction(rawText);
            resultDiv.innerHTML = '<div class="border-b border-white/10 pb-2 mb-2"><span class="text-xs text-white/50">IP: 10.183.226.5</span></div>' +
                '<textarea id="video-text-result" class="w-full bg-transparent text-white mb-2 p-2 border border-white/10 rounded" rows="4">' + cleanText + '</textarea>' +
                '<div class="flex gap-2 flex-wrap">' +
                '<button onclick="fixAndClean()" class="text-xs bg-amber-500 px-3 py-1 rounded">Clean</button>' +
                '<button onclick="copyVideoText()" class="text-xs bg-white/10 px-3 py-1 rounded">Copy</button>' +
                '<button onclick="saveVideoText()" class="text-xs bg-pink-500 px-3 py-1 rounded">💾 Save</button></div>';
            // Save to history
            var h = JSON.parse(localStorage.getItem('ailap_history') || '[]');
            h.unshift({ text: cleanText, time: new Date().toLocaleString(), from: 'video', ip: '10.183.226.5' });
            localStorage.setItem('ailap_history', JSON.stringify(h.slice(0, 50)));
        } else if (data.error) {
            resultDiv.innerHTML = '<p class="text-red-400">' + data.error + '</p>';
        } else {
            resultDiv.innerHTML = '<p class="text-white/50">No text found in video</p>';
        }
    })
    .catch(function(err) {
        document.getElementById('video-to-text-loading').classList.add('hidden');
        var resultDiv = document.getElementById('video-result');
        resultDiv.classList.remove('hidden');
        resultDiv.innerHTML = '<p class="text-red-400">Error: ' + err.message + '</p>';
    });
}

function cleanTextFunction(text) {
    text = text.trim();
    text = text.replace(/  +/g, ' ');
    text = text.replace(/\n\n+/g, '\n');
    text = text.replace(/\n /g, '\n');
    text = text.replace(/ \n/g, '\n');
    return text.trim();
}

function fixAndClean() {
    var textarea = document.getElementById('video-text-result');
    var current = textarea.value;
    var fixed = cleanTextFunction(current);
    textarea.value = fixed;
    alert('Text cleaned!');
}

function copyVideoText() {
    var textarea = document.getElementById('video-text-result');
    navigator.clipboard.writeText(textarea.value);
    alert('Copied!');
}

function saveVideoText() {
    var textarea = document.getElementById('video-text-result');
    var text = textarea.value;
    var h = JSON.parse(localStorage.getItem('ailap_history') || '[]');
    h.unshift({ text: text, time: new Date().toLocaleString(), from: 'video', ip: '10.183.226.5' });
    localStorage.setItem('ailap_history', JSON.stringify(h.slice(0, 50)));
    alert('Saved to history!');
}
</script>
</body>
</html>