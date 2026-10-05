<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
        body{background:linear-gradient(135deg,#1f0c1a 0%,#3b132f 30%,#5c1a4a 60%,#250d20 100%);min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;padding:20px;position:relative;overflow:hidden;}
        .bintang{position:absolute;width:100%;height:100%;pointer-events:none;}
        .bintang span{position:absolute;width:5px;height:5px;background:#fbcfe8;border-radius:50%;box-shadow:0 0 10px #f472b6,0 0 20px #ec4899,0 0 30px #be185d;animation:kedip 2.5s infinite ease-in-out;}
        @keyframes kedip{0%,100%{opacity:.3;transform:scale(1);}50%{opacity:1;transform:scale(1.6);}}
        h1{background:linear-gradient(90deg,#fbcfe8,#f9a8d4,#f472b6,#ec4899,#f472b6,#f9a8d4,#fbcfe8);background-size:400% 100%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:jalurWarna 3.5s linear infinite;margin-bottom:35px;font-size:28px;font-weight:bold;}
        @keyframes jalurWarna{0%{background-position:0% 50%;}100%{background-position:400% 50%;}}
        .kotak-form{background:rgba(255,255,255,.12);border:2px solid rgba(248,113,113,.35);border-radius:24px;padding:40px;width:100%;max-width:520px;backdrop-filter:blur(12px);box-shadow:0 0 50px rgba(236,72,153,.25);animation:muncul .8s ease-out forwards;transform:translateY(20px);opacity:0;}
        @keyframes muncul{to{transform:translateY(0);opacity:1;}}
        .form-group{margin-bottom:22px;animation:masuk .6s ease-out forwards;opacity:0;transform:translateX(-10px);}
        .form-group:nth-child(2){animation-delay:.1s;}
        .form-group:nth-child(3){animation-delay:.2s;}
        .form-group:nth-child(4){animation-delay:.3s;}
        .form-group:nth-child(5){animation-delay:.4s;}
        @keyframes masuk{to{opacity:1;transform:translateX(0);}}
        label{display:flex;align-items:center;gap:8px;margin-bottom:8px;font-size:14px;font-weight:500;}
        .nim-label{color:#f87171;text-shadow:0 0 8px rgba(248,113,113,.5);}
        .nama-label{color:#fbbf24;text-shadow:0 0 8px rgba(251,191,36,.5);}
        .jurusan-label{color:#86efac;text-shadow:0 0 8px rgba(134,239,172,.5);}
        .email-label{color:#fef08a;text-shadow:0 0 8px rgba(254,240,138,.5);}
        input{width:100%;padding:14px 18px;border:1px solid rgba(248,113,113,.25);border-radius:12px;background:rgba(0,0,0,.3);color:#fff;font-size:15px;outline:none;transition:all .3s ease;}
        input::placeholder{color:rgba(255,255,255,.45);}
        input:focus{border-color:#f472b6;box-shadow:0 0 15px rgba(244,114,182,.4);background:rgba(0,0,0,.4);}
        .tombol-group{display:flex;gap:15px;margin-top:15px;}
        .batal{flex:1;padding:14px;border:1px solid rgba(248,113,113,.35);border-radius:12px;background:rgba(255,255,255,.08);color:#fecdd3;font-size:15px;cursor:pointer;transition:all .3s ease;text-decoration:none;text-align:center;}
        .batal:hover{background:rgba(255,255,255,.18);transform:translateY(-3px);}
        .simpan{flex:1;padding:14px;border:none;border-radius:12px;background:linear-gradient(90deg,#be185d,#ec4899,#f472b6,#f9a8d4,#f472b6,#ec4899,#be185d);background-size:300% 100%;color:#fff;font-size:15px;font-weight:bold;cursor:pointer;animation:gerakWarna 3s linear infinite;transition:transform .3s ease;}
        @keyframes gerakWarna{0%{background-position:0% 50%;}100%{background-position:300% 50%;}}
        .simpan:hover{transform:scale(1.05);box-shadow:0 0 20px rgba(236,72,153,.6);}
        .footer{margin-top:35px;color:rgba(255,255,255,.5);font-size:13px;}
        .error{color:#fef08a;font-size:12px;margin-top:5px;}
    </style>
</head>
<body>
    <div class="bintang">
        <span style="top:10%;left:15%;"></span>
        <span style="top:20%;left:80%;animation-delay:.5s;"></span>
        <span style="top:40%;left:10%;animation-delay:1s;"></span>
        <span style="top:60%;left:85%;animation-delay:1.5s;"></span>
        <span style="top:75%;left:30%;animation-delay:2s;"></span>
        <span style="top:85%;left:70%;animation-delay:2.5s;"></span>
    </div>
    <h1>Tambah Data Mahasiswa</h1>
    <div class="kotak-form">
        <form action="{{ route('mahasiswa.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label class="nim-label">🆔 NIM</label>
                <input type="text" name="nim" placeholder="Masukkan NIM" required>
                @error('nim')<div class="error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label class="nama-label">👤 Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan Nama Lengkap" required>
                @error('nama')<div class="error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label class="jurusan-label">🏫 Jurusan</label>
                <input type="text" name="jurusan" placeholder="Masukkan Jurusan" required>
                @error('jurusan')<div class="error">{{ $message }}</div>@enderror
            </div>
            <div class="form-group">
                <label class="email-label">📧 Email</label>
                <input type="email" name="email" placeholder="Masukkan Email" required>
                @error('email')<div class="error">{{ $message }}</div>@enderror
            </div>
            <div class="tombol-group">
                <a href="{{ route('mahasiswa.index') }}" class="batal">❌ Batal</a>
                <button type="submit" class="simpan">💾 Simpan Data</button>
            </div>
        </form>
    </div>
    <div class="footer">© 2026 Sistem Data Mahasiswa — Laravel 12</div>
</body>
</html>