<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AI Smart Recorder</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { font-family: 'Poppins', sans-serif; }
        .gradient-bg {
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
        }
        .gradient-text {
            background: linear-gradient(135deg, #e94560, #ff6b6b, #feca57);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        .glass {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.1);
        }
    </style>
</head>
<body class="gradient-bg text-white min-h-screen flex items-center justify-center">
    <div class="glass rounded-3xl p-10 max-w-md w-full mx-4 text-center">
        <div class="w-20 h-20 rounded-2xl bg-gradient-to-br from-pink-500 to-rose-500 flex items-center justify-center mx-auto mb-6" style="box-shadow: 0 0 40px rgba(233,69,96,0.3)">
            <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"></path>
            </svg>
        </div>
        <h2 class="text-3xl font-bold gradient-text mb-2">AI Smart Recorder</h2>
        <p class="text-white/50 mb-6">Enter your ID</p>
        
        <select id="login-id" onchange="showSelectedName()" class="w-full bg-white/5 border border-white/10 rounded-xl px-4 py-4 text-center text-xl focus:outline-none focus:border-pink-500/50 transition mb-4">
            <option value="">-- Select ID --</option>
            <option value="CS1500983">Qamar Abdullahi Adam (CS1500983)</option>
            <option value="CS1500952">Mandeq Ibrahim Abdulle (CS1500952)</option>
            <option value="PH1202205">Sabirin Abdullahi Hussein (PH1202205)</option>
        </select>
        
        <div id="selected-name" class="text-xl font-bold text-pink-400 mb-4 h-8"></div>
        
        <button onclick="doLogin()" class="w-full btn-white py-4 rounded-xl font-medium hover:opacity-90 transition">LOGIN</button>
        
        <p class="text-xs text-white/30 mt-6">3 team members</p>
    </div>

    <script>
        var userNames = {
            'CS1500983': 'Qamar Abdullahi Adam',
            'CS1500952': 'Mandeq Ibrahim Abdulle',
            'PH1202205': 'Sabirin Abdullahi Hussein'
        };
        
        function showSelectedName() {
            var id = document.getElementById('login-id').value;
            var display = document.getElementById('selected-name');
            if (id && userNames[id]) {
                display.textContent = '👋 Welcome ' + userNames[id];
            } else {
                display.textContent = '';
            }
        }
        
        function doLogin() {
            var id = document.getElementById('login-id').value;
            
            if (!id) {
                alert('Please select your ID!');
                return;
            }
            
            if (id === 'CS1500983') {
                currentUser = {id: 'CS1500983', name: 'Qamar Abdullahi Adam', skills: 'Web Development, Python, Database', university: 'Somali National University', level: 'Bachelor', faculty: 'Computer Science', img: ''};
            } else if (id === 'CS1500952') {
                currentUser = {id: 'CS1500952', name: 'Mandeq Ibrahim Abdulle', skills: 'Mobile Development, Java, UI/UX', university: 'Somali National University', level: 'Bachelor', faculty: 'Computer Science', img: ''};
            } else if (id === 'PH1202205') {
                currentUser = {id: 'PH1202205', name: 'Sabirin Abdullahi Hussein', skills: 'Photography, Photo Editing, Design', university: 'Somali National University', level: 'Diploma', faculty: 'Photography', img: ''};
            }
            
            localStorage.setItem('ailap_user', JSON.stringify(currentUser));
            window.location.href = 'index.php';
        }
        
        document.getElementById('login-id').addEventListener('keypress', function(e) {
            if (e.key === 'Enter') doLogin();
        });
    </script>
</body>
</html>
