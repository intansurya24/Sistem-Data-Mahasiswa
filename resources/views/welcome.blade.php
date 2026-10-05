<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Data Mahasiswa</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
        body{background:linear-gradient(135deg,#1f0c1a 0%,#3b132f 30%,#5c1a4a 60%,#250d20 100%);min-height:100vh;display:flex;flex-direction:column;align-items:center;justify-content:center;position:relative;overflow:hidden;}
        .bintang{position:absolute;width:100%;height:100%;pointer-events:none;}
        .bintang span{position:absolute;width:5px;height:5px;background:#fbcfe8;border-radius:50%;box-shadow:0 0 10px #f472b6,0 0 20px #ec4899,0 0 30px #be185d;animation:kedip 2.5s infinite ease-in-out;}
        @keyframes kedip{0%,100%{opacity:.3;transform:scale(1);}50%{opacity:1;transform:scale(1.6);}}
        .kotak{background:rgba(255,255,255,.12);border:2px solid rgba(248,113,113,.35);border-radius:24px;padding:50px 45px;text-align:center;backdrop-filter:blur(12px);box-shadow:0 0 50px rgba(236,72,153,.25);animation:muncul .8s ease-out forwards;transform:translateY(20px);opacity:0;}
        @keyframes muncul{to{transform:translateY(0);opacity:1;}}
        h1{background:linear-gradient(90deg,#fbcfe8,#f9a8d4,#f472b6,#ec4899,#f472b6,#f9a8d4,#fbcfe8);background-size:400% 100%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:jalurWarna 3.5s linear infinite;margin-bottom:15px;font-size:30px;}
        @keyframes jalurWarna{0%{background-position:0% 50%;}100%{background-position:400% 50%;}}
        p{color:rgba(255,255,255,.7);margin-bottom:30px;}
        .masuk{display:inline-block;padding:15px 40px;border-radius:12px;background:linear-gradient(90deg,#be185d,#ec4899,#f472b6,#f9a8d4,#f472b6,#ec4899,#be185d);background-size:300% 100%;color:white;text-decoration:none;font-weight:bold;font-size:16px;animation:gerakWarna 3s linear infinite;transition:transform .3s ease;}
        @keyframes gerakWarna{0%{background-position:0% 50%;}100%{background-position:300% 50%;}}
        .masuk:hover{transform:scale(1.05);box-shadow:0 0 20px rgba(236,72,153,.6);}
    </style>
</head>
<body>
    <div class="bintang">
        <span style="top:15%;left:20%;"></span>
        <span style="top:25%;left:75%;animation-delay:.5s;"></span>
        <span style="top:50%;left:10%;animation-delay:1s;"></span>
        <span style="top:65%;left:85%;animation-delay:1.5s;"></span>
        <span style="top:80%;left:40%;animation-delay:2s;"></span>
    </div>
    <div class="kotak">
        <h1>👋 Selamat Datang</h1>
        <p>Sistem Pengelolaan Data Mahasiswa — Laravel 12</p>
        <a href="{{ route('mahasiswa.index') }}" class="masuk">Kelola Data</a>
    </div>
</body>
</html>