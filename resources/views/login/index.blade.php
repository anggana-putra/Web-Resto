<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cafe Bisa Ngopi</title>
    <link rel="stylesheet" type="text/css" href="{{ url('/css/login.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <script src="{{ asset('/js/uiSystem.js') }}"></script>

</head>
<body>
    @if (session('loginError'))
    <div class="alert-error">
        {{ session ('loginError') }}
        <button type="button" id="alert-btn" onclick="closeAlertEr()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></button>
    </div>
    @endif
    @if ($message = Session::get('success'))
    <div class="alert">
        {{ $message }}
        <button type="button" id="alert-btn" onclick="closeAlertSu()"><svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12 19 6.41z"/></svg></button>
    </div>
    @endif
    <div class="wrap-left">
        <div class="deco">
            <svg width="262" height="262" viewBox="0 0 262 262" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M262 131C262 203.349 203.349 262 131 262C58.6507 262 0 203.349 0 131C0 58.6507 58.6507 0 131 0C203.349 0 262 58.6507 262 131ZM44.6967 131C44.6967 178.664 83.336 217.303 131 217.303C178.664 217.303 217.303 178.664 217.303 131C217.303 83.336 178.664 44.6967 131 44.6967C83.336 44.6967 44.6967 83.336 44.6967 131Z" fill="#F1F1F1"/>
            </svg>                
        </div>
            <h4>Kelola Mudah</h4>
            <p>Mengelola semua kebutuhan <br> cafe dengan satu aplikasi</p>
        <div class="gambar">
            <img src="{{ url('/cafe.png') }}" alt="gambar-cafe">
        </div>
    </div>

    <div class="wrap-right">
        <div class="login-wrap">
            <h3>Login</h3>
            <form action="{{ route('login.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label id="username-lbl" for="username">Username</label><br>
                <input type="text" name="username" id="username" placeholder="Ketikan username anda" autofocus required autocomplete="none"><br>
                <label id="password-lbl" for="password">Password</label><br>
                <input type="password" name="password" id="password" placeholder="Ketikan password anda" required>
                <p id="lupa-pass">Lupa password? <a>Hubungi Admin</a></p>
                <button id="btn-login" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>