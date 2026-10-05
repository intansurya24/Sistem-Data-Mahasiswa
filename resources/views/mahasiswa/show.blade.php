<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data Mahasiswa</title>
    <style>
        *{margin:0;padding:0;box-sizing:border-box;font-family:'Segoe UI',sans-serif;}
        body{background:linear-gradient(135deg,#1f0c1a 0%,#3b132f 30%,#5c1a4a 60%,#250d20 100%);min-height:100vh;padding:30px;position:relative;overflow:hidden;}
        .bintang{position:absolute;width:100%;height:100%;pointer-events:none;}
        .bintang span{position:absolute;width:5px;height:5px;background:#fbcfe8;border-radius:50%;box-shadow:0 0 10px #f472b6,0 0 20px #ec4899;animation:kedip 2.5s infinite ease-in-out;}
        @keyframes kedip{0%,100%{opacity:.3;transform:scale(1);}50%{opacity:1;transform:scale(1.6);}}
        .atas{display:flex;justify-content:space-between;align-items:center;max-width:600px;margin:0 auto 30px;}
        .judul-atas{color:#fbbf24;font-size:22px;font-weight:bold;text-shadow:0 0 10px rgba(251,191,36,.5);}
        .kembali-btn{padding:10px 20px;background:rgba(255,255,255,.1);border:1px solid rgba(248,113,113,.35);border-radius:10px;color:#fecdd3;text-decoration:none;transition:all .3s ease;}
        .kembali-btn:hover{background:rgba(255,255,255,.2);transform:translateY(-2px);}
        h1{text-align:center;background:linear-gradient(90deg,#f87171,#fbbf24,#f87171);background-size:200% 100%;-webkit-background-clip:text;-webkit-text-fill-color:transparent;background-clip:text;animation:jalurWarna 3s linear infinite;margin-bottom:35px;font-size:28px;}
        @keyframes jalurWarna{0%{background-position:0% 50%;}100%{background-position:200% 50%;}}
        .kotak-detail{max-width:550px;margin:0 auto;background:rgba(255,255,255,.1);border:2px solid rgba(248,113,113,.35);border-radius:20px;padding:35px;backdrop-filter:blur(12px);box-shadow:0 0 40px rgba(236,72,153,.2);animation:muncul .8s ease-out forwards;transform:translateY(20px);opacity:0;}
        @keyframes muncul{to{transform:translateY(0);opacity:1;}}
        .baris{display:flex;justify-content:space-between;padding:15px 0;border-bottom:1px solid rgba(255,255,255,.1);}
        .baris:last-child{border-bottom:none;}
        .label{color:#fbbf24;font-weight:500;}
        .nilai{color:#fff;}
        .lihat-semua{text-align:center;margin-top:25px;color:rgba(255,255,255,.5);}
    </style>
</head>
<body>
    <div class="bintang">
        <span style="top:10%;left:15%;"></span>
        <span style="top:20%;left:80%;animation-delay:.5s;"></span>
        <span style="top:40%;left:10%;animation-delay:1s;"></span>
        <span style="top:60%;left:85%;animation-delay:1.5s;"></span>
        <span style="top:75%;left:30%;animation-delay:2s;"></span>
    </div>
    <div class="atas">
        <div class="judul-atas">📋 DATA MAHASISWA</div>
        <a href="{{ route('mahasiswa.index') }}" class="kembali-btn">← Kembali</a>
    </div>
    <h1>Detail Data Mahasiswa</h1>
    <div class="kotak-detail">
        <div class="baris">
            <span class="label">🆔 NIM</span>
            <span class="nilai">{{ $mahasiswa->nim }}</span>
        </div>
        <div class="baris">
            <span class="label">👤 Nama Lengkap</span>
            <span class="nilai">{{ $mahasiswa->nama }}</span>
        </div>
        <div class="baris">
            <span class="label">🏫 Jurusan</span>
            <span class="nilai">{{ $mahasiswa->jurusan }}</span>
        </div>
        <div class="baris">
            <span class="label">📧 Email</span>
            <span class="nilai">{{ $mahasiswa->email }}</span>
        </div>
    </div>
    <div class="lihat-semua">Lihat semua</div>
</body>
</html>