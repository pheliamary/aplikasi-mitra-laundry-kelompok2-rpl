<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Aplikasi Laundry</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('assets/img/bglaundry.png') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            position: relative;
        }

        body::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(30, 60, 114, 0.3);
            z-index: 0;
        }

        .login-container {
            background: white;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            overflow: hidden;
            max-width: 900px;
            width: 100%;
            display: flex;
            min-height: 500px;
            position: relative;
            z-index: 1;
        }

        .login-left {
            flex: 1;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            padding: 60px 40px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            color: white;
            position: relative;
            overflow: hidden;
        }

        .login-left::before {
            content: '';
            position: absolute;
            width: 200px;
            height: 200px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            top: -50px;
            right: -50px;
        }

        .login-left::after {
            content: '';
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            bottom: -30px;
            left: -30px;
        }

        .logo-container {
            position: relative;
            z-index: 1;
            text-align: center;
        }

        .logo {
            width: 120px;
            height: 120px;
            background: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 30px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
        }

        .logo svg {
            width: 70px;
            height: 70px;
        }

        .welcome-text h1 {
            font-size: 32px;
            margin-bottom: 15px;
            font-weight: 700;
        }

        .welcome-text p {
            font-size: 16px;
            opacity: 0.9;
            line-height: 1.6;
        }

        .login-right {
            flex: 1;
            padding: 60px 50px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-header {
            margin-bottom: 40px;
        }

        .login-header h2 {
            color: #1e3c72;
            font-size: 28px;
            margin-bottom: 10px;
        }

        .login-header p {
            color: #666;
            font-size: 14px;
        }

        .alert {
            background: #fee;
            border: 1px solid #fcc;
            color: #c33;
            padding: 12px;
            border-radius: 8px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        .input-group {
            margin-bottom: 25px;
            position: relative;
        }

        .input-group label {
            display: block;
            color: #333;
            font-size: 14px;
            font-weight: 600;
            margin-bottom: 8px;
        }

        .input-wrapper {
            position: relative;
        }

        .input-wrapper i {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #2a5298;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .input-wrapper svg {
            width: 16px;
            height: 16px;
            fill: #2a5298;
        }

        .input-group input {
            width: 100%;
            padding: 14px 15px 14px 45px;
            border: 2px solid #e0e0e0;
            border-radius: 10px;
            font-size: 15px;
            transition: all 0.3s;
            outline: none;
        }

        .input-group input:focus {
            border-color: #2a5298;
            box-shadow: 0 0 0 3px rgba(42, 82, 152, 0.1);
        }

        .login-btn {
            width: 100%;
            padding: 15px;
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s;
            box-shadow: 0 4px 15px rgba(42, 82, 152, 0.3);
        }

        .login-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(42, 82, 152, 0.4);
        }

        .login-btn:active {
            transform: translateY(0);
        }

        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }

            .login-left {
                padding: 40px 30px;
            }

            .login-right {
                padding: 40px 30px;
            }

            .logo {
                width: 100px;
                height: 100px;
            }

            .logo svg {
                width: 60px;
                height: 60px;
            }

            .welcome-text h1 {
                font-size: 24px;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-left">
            <div class="logo-container">
                <div class="logo">
                    <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M32 8C24.268 8 18 14.268 18 22v4H14c-2.21 0-4 1.79-4 4v24c0 2.21 1.79 4 4 4h36c2.21 0 4-1.79 4-4V30c0-2.21-1.79-4-4-4h-4v-4c0-7.732-6.268-14-14-14z" fill="#2a5298"/>
                        <path d="M26 26v-4c0-3.314 2.686-6 6-6s6 2.686 6 6v4H26z" fill="#1e3c72"/>
                        <circle cx="32" cy="42" r="3" fill="white"/>
                        <path d="M32 45v6" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        <path d="M20 35c0-1 2-2 4-2h16c2 0 4 1 4 2" stroke="white" stroke-width="1.5" stroke-linecap="round"/>
                        <path d="M22 40h4M38 40h4M22 46h3M39 46h3" stroke="#e3f2fd" stroke-width="1.5" stroke-linecap="round"/>
                    </svg>
                </div>
                <div class="welcome-text">
                    <h1>Aplikasi Laundry</h1>
                    <p>Sistem Manajemen Laundry Modern<br>untuk Bisnis Anda</p>
                </div>
            </div>
        </div>

        <div class="login-right">
            <div class="login-header">
                <h2>Selamat Datang!</h2>
                <p>Silakan login untuk mengakses dashboard</p>
            </div>

            <form action="cek_login.php" method="post">
                <!-- Alert message jika ada error -->
                <div class="alert" id="errorAlert" style="display: none;">
                    <span id="errorMessage"></span>
                </div>

                <div class="input-group">
                    <label for="username">Username</label>
                    <div class="input-wrapper">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm-45.7 48C79.8 304 0 383.8 0 482.3 0 498.7 13.3 512 29.7 512h388.6c16.4 0 29.7-13.3 29.7-29.7 0-98.5-79.8-178.3-178.3-178.3h-91.4z"/>
                            </svg>
                        </i>
                        <input type="text" id="username" name="username" placeholder="Masukkan username" required>
                    </div>
                </div>

                <div class="input-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <i>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                <path d="M144 144v48h160v-48c0-44.2-35.8-80-80-80s-80 35.8-80 80zm-64 48v-48C80 64.5 144.5 0 224 0s144 64.5 144 144v48h16c35.3 0 64 28.7 64 64v192c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V256c0-35.3 28.7-64 64-64h16z"/>
                            </svg>
                        </i>
                        <input type="password" id="password" name="password" placeholder="Masukkan password" required>
                    </div>
                </div>

                <button type="submit" class="login-btn">Login</button>
            </form>
        </div>
    </div>

    <script>
        // Cek jika ada error message di URL
        const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get('message');
        
        if (message) {
            const errorAlert = document.getElementById('errorAlert');
            const errorMessage = document.getElementById('errorMessage');
            errorMessage.textContent = decodeURIComponent(message);
            errorAlert.style.display = 'block';
        }
    </script>
</body>
</html>