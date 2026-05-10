<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Register - Dashboard Pro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            font-family: 'Inter', sans-serif;
        }

        .bg-gradient-custom {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .input-focus:focus {
            box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
            border-color: #667eea;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }

        .btn-gradient:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
        }

        .card-hover {
            transition: all 0.3s ease;
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .strength-bar {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body class="bg-gradient-custom min-h-screen">
    <div class="container mx-auto px-4 py-8 min-h-screen flex items-center justify-center">
        <div class="max-w-6xl w-full grid md:grid-cols-2 gap-8 items-center">

            <!-- Left Side - Branding -->
            <div class="hidden md:block text-white">
                <div class="mb-8">
                    <div
                        class="inline-flex items-center justify-center w-16 h-16 bg-white/20 rounded-2xl backdrop-blur-sm mb-6">
                        <i class="fas fa-rocket text-3xl"></i>
                    </div>
                    <h1 class="text-5xl font-bold mb-4">Mulai Sekarang</h1>
                    <p class="text-xl text-white/90 mb-8">Daftar akun gratis dan nikmati fitur premium kami</p>
                </div>

                <div class="space-y-6">
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                            <i class="fas fa-infinity"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Akses Tanpa Batas</h3>
                            <p class="text-white/70 text-sm">Nikmati semua fitur premium</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                            <i class="fas fa-cloud-upload-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Penyimpanan Cloud</h3>
                            <p class="text-white/70 text-sm">10GB penyimpanan gratis</p>
                        </div>
                    </div>
                    <div class="flex items-center space-x-3">
                        <div class="w-10 h-10 bg-white/20 rounded-lg flex items-center justify-center">
                            <i class="fas fa-headset"></i>
                        </div>
                        <div>
                            <h3 class="font-semibold">Support 24/7</h3>
                            <p class="text-white/70 text-sm">Tim support selalu siap membantu</p>
                        </div>
                    </div>
                </div>

                <!-- Testimonial -->
                <div class="mt-12 p-6 bg-white/10 rounded-2xl backdrop-blur-sm">
                    <div class="flex items-center space-x-2 mb-3">
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                        <i class="fas fa-star text-yellow-400"></i>
                    </div>
                    <p class="text-sm italic">"Platform terbaik yang pernah saya gunakan! Sangat direkomendasikan untuk
                        bisnis."</p>
                    <p class="text-sm font-semibold mt-2">- Ahmad Wijaya, CEO TechCorp</p>
                </div>
            </div>

            <!-- Right Side - Register Form -->
            <div class="bg-white rounded-2xl shadow-2xl overflow-hidden card-hover">
                <div class="p-8">
                    <div class="text-center mb-8">
                        <div
                            class="inline-flex items-center justify-center w-14 h-14 bg-gradient-to-br from-indigo-500 to-purple-600 rounded-xl mb-4">
                            <i class="fas fa-user-plus text-white text-xl"></i>
                        </div>
                        <h2 class="text-2xl font-bold text-gray-800">Buat Akun Baru</h2>
                        <p class="text-gray-500 mt-2">Daftar gratis dan mulai petualangan Anda</p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-6 p-4 bg-red-50 border-l-4 border-red-500 rounded-lg">
                            <div class="flex items-start">
                                <i class="fas fa-exclamation-circle text-red-500 mr-3 mt-0.5"></i>
                                <div class="flex-1">
                                    <p class="text-red-700 font-semibold mb-1">Terjadi kesalahan:</p>
                                    <ul class="text-sm text-red-600 list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endif

                    @if (session('success'))
                        <div class="mb-6 p-4 bg-green-50 border-l-4 border-green-500 rounded-lg">
                            <div class="flex items-center">
                                <i class="fas fa-check-circle text-green-500 mr-3"></i>
                                <span class="text-green-700">{{ session('success') }}</span>
                            </div>
                        </div>
                    @endif

                    <form method="POST" action="{{ route('register') }}" id="registerForm">
                        @csrf

                        <!-- Name -->
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">
                                <i class="fas fa-user mr-2 text-indigo-500"></i> Nama Lengkap
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400"></i>
                                </div>
                                <input type="text" name="name" value="{{ old('name') }}" required autofocus
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 input-focus transition"
                                    placeholder="Masukkan nama lengkap">
                            </div>
                            @error('name')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Email -->
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">
                                <i class="fas fa-envelope mr-2 text-indigo-500"></i> Alamat Email
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400"></i>
                                </div>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    class="w-full pl-10 pr-3 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 input-focus transition"
                                    placeholder="contoh@email.com">
                            </div>
                            @error('email')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Password -->
                        <div class="mb-4">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">
                                <i class="fas fa-lock mr-2 text-indigo-500"></i> Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-key text-gray-400"></i>
                                </div>
                                <input type="password" name="password" id="password" required
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 input-focus transition"
                                    placeholder="••••••••">
                                <button type="button" onclick="togglePassword('password', 'passwordToggle')"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <i id="passwordToggle" class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                                </button>
                            </div>

                            <!-- Password Strength Indicator -->
                            <div class="mt-2">
                                <div class="flex gap-1 mb-1">
                                    <div class="strength-bar h-1 flex-1 rounded-full bg-gray-200" id="strength1">
                                    </div>
                                    <div class="strength-bar h-1 flex-1 rounded-full bg-gray-200" id="strength2">
                                    </div>
                                    <div class="strength-bar h-1 flex-1 rounded-full bg-gray-200" id="strength3">
                                    </div>
                                    <div class="strength-bar h-1 flex-1 rounded-full bg-gray-200" id="strength4">
                                    </div>
                                </div>
                                <p class="text-xs text-gray-500" id="strengthText">Ketik password untuk melihat
                                    kekuatan</p>
                            </div>
                            @error('password')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Confirm Password -->
                        <div class="mb-5">
                            <label class="block text-gray-700 font-semibold mb-2 text-sm">
                                <i class="fas fa-check-circle mr-2 text-indigo-500"></i> Konfirmasi Password
                            </label>
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <i class="fas fa-check text-gray-400"></i>
                                </div>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    required
                                    class="w-full pl-10 pr-12 py-3 border border-gray-300 rounded-xl focus:outline-none focus:border-indigo-500 input-focus transition"
                                    placeholder="••••••••">
                                <button type="button"
                                    onclick="togglePassword('password_confirmation', 'confirmToggle')"
                                    class="absolute inset-y-0 right-0 pr-3 flex items-center">
                                    <i id="confirmToggle" class="fas fa-eye text-gray-400 hover:text-gray-600"></i>
                                </button>
                            </div>
                            <div id="passwordMatch" class="mt-1 text-xs hidden">
                                <i class="fas fa-check-circle text-green-500"></i> Password cocok
                            </div>
                        </div>

                        <!-- Terms & Conditions -->
                        <div class="mb-6">
                            <label class="flex items-start cursor-pointer">
                                <input type="checkbox" name="terms" required
                                    class="w-4 h-4 text-indigo-600 rounded focus:ring-indigo-500 mt-0.5">
                                <span class="ml-2 text-sm text-gray-600">
                                    Saya menyetujui
                                    <a href="#" class="text-indigo-600 hover:text-indigo-800 font-medium">Syarat
                                        & Ketentuan</a>
                                    dan
                                    <a href="#"
                                        class="text-indigo-600 hover:text-indigo-800 font-medium">Kebijakan Privasi</a>
                                </span>
                            </label>
                        </div>

                        <button type="submit"
                            class="w-full btn-gradient text-white font-bold py-3 rounded-xl transition duration-300 transform hover:scale-105 shadow-lg">
                            <i class="fas fa-user-plus mr-2"></i> Daftar Sekarang
                        </button>

                        <div class="mt-6 text-center">
                            <p class="text-gray-600 text-sm">
                                Sudah punya akun?
                                <a href="{{ route('login') }}"
                                    class="text-indigo-600 hover:text-indigo-800 font-semibold">
                                    Masuk di sini
                                </a>
                            </p>
                        </div>
                    </form>

                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="text-center mb-4">
                            <p class="text-sm text-gray-500">Atau daftar dengan</p>
                        </div>
                        <div class="flex justify-center space-x-4">
                            <a href="#"
                                class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-google text-gray-600"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-facebook-f text-gray-600"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-github text-gray-600"></i>
                            </a>
                            <a href="#"
                                class="w-10 h-10 bg-gray-100 rounded-full flex items-center justify-center hover:bg-gray-200 transition">
                                <i class="fab fa-microsoft text-gray-600"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Toggle password visibility
        function togglePassword(fieldId, toggleId) {
            const password = document.getElementById(fieldId);
            const toggle = document.getElementById(toggleId);
            if (password.type === 'password') {
                password.type = 'text';
                toggle.classList.remove('fa-eye');
                toggle.classList.add('fa-eye-slash');
            } else {
                password.type = 'password';
                toggle.classList.remove('fa-eye-slash');
                toggle.classList.add('fa-eye');
            }
        }

        // Password strength checker
        const passwordInput = document.getElementById('password');
        const confirmInput = document.getElementById('password_confirmation');
        const strength1 = document.getElementById('strength1');
        const strength2 = document.getElementById('strength2');
        const strength3 = document.getElementById('strength3');
        const strength4 = document.getElementById('strength4');
        const strengthText = document.getElementById('strengthText');

        function checkPasswordStrength(password) {
            let strength = 0;

            // Length check
            if (password.length >= 8) strength++;
            if (password.length >= 12) strength++;

            // Contains number
            if (/\d/.test(password)) strength++;

            // Contains uppercase & lowercase
            if (/[a-z]/.test(password) && /[A-Z]/.test(password)) strength++;

            // Contains special character
            if (/[!@#$%^&*(),.?":{}|<>]/.test(password)) strength++;

            return Math.min(strength, 4);
        }

        function updateStrengthIndicator() {
            const password = passwordInput.value;
            const strength = checkPasswordStrength(password);

            // Reset all bars
            const bars = [strength1, strength2, strength3, strength4];
            bars.forEach(bar => {
                bar.classList.remove('bg-red-500', 'bg-orange-500', 'bg-yellow-500', 'bg-green-500');
                bar.classList.add('bg-gray-200');
            });

            let color = '';
            let message = '';

            if (password.length === 0) {
                message = 'Ketik password untuk melihat kekuatan';
                strengthText.className = 'text-xs text-gray-500';
            } else {
                switch (strength) {
                    case 1:
                        color = 'bg-red-500';
                        message = 'Password sangat lemah';
                        strengthText.className = 'text-xs text-red-500';
                        break;
                    case 2:
                        color = 'bg-orange-500';
                        message = 'Password lemah';
                        strengthText.className = 'text-xs text-orange-500';
                        break;
                    case 3:
                        color = 'bg-yellow-500';
                        message = 'Password sedang';
                        strengthText.className = 'text-xs text-yellow-600';
                        break;
                    case 4:
                        color = 'bg-green-500';
                        message = 'Password kuat';
                        strengthText.className = 'text-xs text-green-600';
                        break;
                }

                for (let i = 0; i < strength; i++) {
                    bars[i].classList.remove('bg-gray-200');
                    bars[i].classList.add(color);
                }

                strengthText.textContent = message;
            }
        }

        // Check password match
        function checkPasswordMatch() {
            const password = passwordInput.value;
            const confirm = confirmInput.value;
            const matchDiv = document.getElementById('passwordMatch');

            if (confirm.length > 0 && password === confirm) {
                matchDiv.classList.remove('hidden');
                matchDiv.classList.add('block');
                confirmInput.classList.remove('border-red-500');
                confirmInput.classList.add('border-green-500');
            } else if (confirm.length > 0) {
                matchDiv.classList.add('hidden');
                confirmInput.classList.remove('border-green-500');
                confirmInput.classList.add('border-red-500');
            } else {
                matchDiv.classList.add('hidden');
                confirmInput.classList.remove('border-red-500', 'border-green-500');
            }
        }

        passwordInput.addEventListener('input', () => {
            updateStrengthIndicator();
            checkPasswordMatch();
        });

        confirmInput.addEventListener('input', checkPasswordMatch);

        // Form validation before submit
        document.getElementById('registerForm').addEventListener('submit', function(e) {
            const password = passwordInput.value;
            const confirm = confirmInput.value;
            const terms = document.querySelector('input[name="terms"]');

            if (password !== confirm) {
                e.preventDefault();
                alert('Password dan konfirmasi password tidak cocok!');
                return false;
            }

            if (password.length < 8) {
                e.preventDefault();
                alert('Password minimal 8 karakter!');
                return false;
            }

            if (!terms.checked) {
                e.preventDefault();
                alert('Anda harus menyetujui Syarat & Ketentuan!');
                return false;
            }

            return true;
        });
    </script>
</body>

</html>
