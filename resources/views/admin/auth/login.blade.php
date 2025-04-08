<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quản trị viên - Đăng nhập</title>
    <link rel="stylesheet" href="/assets/admin/css/styles.min.css" />
    <style>
        /* Toàn bộ nền trang */
        html, body {
            height: 100%;
            margin: 0;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background: url('/assets/frontend/img/home/backgroundLogin.png') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Overlay lớp phủ */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: -1;
        }

        /* Container chính */
        .login-container {
            position: relative;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            padding: 2rem;
            text-align: center;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Tiêu đề */
        h2 {
            font-family: 'Dancing Script', cursive;
            font-size: 2.5rem;
            color: #ff6f61;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
            margin-bottom: 0.5rem;
        }

        p {
            color: #555;
            margin-bottom: 1.5rem;
        }

        /* Input và Button */
        label {
            font-weight: bold;
            color: #333;
            text-align: left;
            display: block;
        }

        input {
            border: 1px solid #ddd;
            border-radius: 10px;
            padding: 0.75rem;
            width: 100%;
            margin-bottom: 1rem;
        }

        input:focus {
            outline: none;
            border-color: #ff6f61;
            box-shadow: 0 0 5px rgba(255, 111, 97, 0.5);
        }

        button {
            background-color: #ff6f61;
            color: #fff;
            border: none;
            border-radius: 10px;
            padding: 0.75rem;
            font-size: 1.25rem;
            font-weight: bold;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s, transform 0.2s;
        }

        button:hover {
            background-color: #fa5c50;
            transform: scale(1.05);
        }

        button:active {
            transform: scale(0.95);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                padding: 1.5rem;
            }

            h2 {
                font-size: 2rem;
            }

            button {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <div class="overlay"></div>
    <div class="login-container">
        <h2>Đăng nhập</h2>
        <p>Quản lý mỹ phẩm của bạn một cách dễ dàng</p>
        <form action="{{route('admin.loginPost')}}" method="POST">
            @csrf
            <div>
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" required>
                @error('email')
                    <p class="text-danger">{{$message}}</p>
                @enderror
            </div>
            <div>
                <label for="password" class="form-label">Mật khẩu</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Đăng nhập</button>
        </form>
    </div>
    <script src="/assets/admin/libs/jquery/dist/jquery.min.js"></script>
    <script src="/assets/admin/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
