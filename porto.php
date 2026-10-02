<?php
// Data Profil
$profil = [
    'nama' => 'Ammar Amin Alfaruq',
    'nim' => '2505090030',
    'prodi' => 'Pendidikan Teknik Informatika dan Komputer',
    'angkatan' => '2025',
    'deskripsi' => 'Mahasiswa Pendidikan Teknik Informatika dan Komputer. Yang selalu berusaha jadi lebih baik dari sebelumnnya, mencoba mencari jalan yang sesuai terhadap pribadi di dunia tech dan sangat tertarik di dunia Cyber Security, IoT, dan Web development.',
    'tahun_copyright' => '2026'
];

// Data Sosial Media
$sosmed = [
    'instagram' => 'https://instagram.com/4min.4l/',
    'github'    => 'https://github.com/mamenzzz25-web',
    'whatsapp'  => 'https://wa.me/6287854865668',
    'linkedin'  => 'https://www.linkedin.com/in/ammar-amin-alfaruq-40001b379/',
];

// Data Cita-cita & Fokus Keahlian
$tujuan = [
    [
        'judul' => 'Cyber Security',
        'warna' => 'var(--a)',
        'deskripsi' => 'Di era digital yang serba terhubung, perlindungan dan privasi data menjadi prioritas utama setiap perusahaan. Saya bertujuan menjadi pakar keamanan siber yang kompeten dalam menganalisis kerentanan sistem, melakukan <i>penetration testing</i>, dan merancang arsitektur keamanan yang tangguh terhadap ancaman global. Fokus saya adalah memastikan integritas, kerahasiaan, dan ketersediaan data selalu terjaga sesuai dengan standar industri.'
    ],
    [
        'judul' => 'DevOps & Web Developer',
        'warna' => 'var(--b)',
        'deskripsi' => 'Industri TI saat ini membutuhkan siklus rilis perangkat lunak yang sangat cepat tanpa mengorbankan stabilitas sistem. Oleh karena itu, saya mendalami ilmu DevOps untuk mengotomatisasi alur kerja (CI/CD), mengelola infrastruktur <i>cloud</i>, dan mengorkestrasi layanan <i>container</i>. Dikombinasikan dengan kemampuan di bidang Web Development, saya bertujuan untuk merancang, membangun, dan mendistribusikan aplikasi yang <i>scalable</i>, efisien, dan andal.'
    ]
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $profil['nama'] ?> | Profil Mahasiswa</title>
    <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;600&family=Unbounded:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg: #0a0e1f; --bg2: #121835; --ink: #eef1ff; --mute: #9aa3c7;
            --line: #262e57; --a: #8c9bff; --b: #ff7a6b; --c: #ffd9a0;
        }
        * { box-sizing: border-box; margin: 0; }
        [hidden] { display: none !important; }
        html { scroll-behavior: smooth; }
        body { font-family: 'Figtree', sans-serif; background: radial-gradient(900px 600px at 78% 8%, #1b2352, transparent 70%), var(--bg); color: var(--ink); line-height: 1.65; overflow-x: hidden; }
        canvas { position: fixed; inset: 0; width: 100%; height: 100%; z-index: 0; pointer-events: none; }
        header, main, footer { position: relative; z-index: 1; }
        nav { display: flex; justify-content: space-between; align-items: center; padding: 22px clamp(20px, 5vw, 64px); }
        nav b { font-family: 'Unbounded', sans-serif; font-size: 1rem; }
        nav a { color: var(--mute); text-decoration: none; margin-left: 24px; font-size: .95rem; }
        nav a:hover, nav a:focus-visible { color: var(--c); outline: none; }
        .hero { max-width: 1120px; margin: 0 auto; padding: 40px 24px 90px; display: grid; gap: 56px; grid-template-columns: 1.1fr .9fr; align-items: center; }
        .hi { color: var(--c); font-size: 1.05rem; margin-bottom: 10px; }
        h1 { font-family: 'Unbounded', sans-serif; font-weight: 700; font-size: clamp(2.2rem, 5.4vw, 4.2rem); line-height: 1.08; letter-spacing: -.03em; }
        .sub { color: var(--mute); margin-top: 22px; max-width: 44ch; font-size: 1.08rem; }
        
        /* Style untuk tombol Sosial Media */
        .sosmed { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px; }
        .sosmed a {
            display: inline-flex; align-items: center; justify-content: center;
            padding: 8px 20px; background: var(--bg2); border: 1px solid var(--line);
            border-radius: 99px; color: var(--mute); text-decoration: none; font-size: 0.9rem;
            transition: all 0.2s;
        }
        .sosmed a:hover, .sosmed a:focus-visible {
            color: var(--bg); background: var(--c); border-color: var(--c); outline: none;
        }

        .id { perspective: 900px; justify-self: center; width: min(100%, 380px); }
        .card { background: linear-gradient(150deg, #1d2552, #131938 60%); border: 1px solid var(--line); border-radius: 26px; padding: 26px; box-shadow: 0 40px 80px -30px #000; transform-style: preserve-3d; animation: lev 5s ease-in-out infinite; transition: transform .3s ease-out; }
        @keyframes lev { 50% { translate: 0 -14px; } }
        .top { display: flex; gap: 16px; align-items: center; margin-bottom: 22px; }
        .top h3 { font-family: 'Unbounded', sans-serif; font-size: .8rem; color: var(--a); font-weight: 500; }
        .top small { color: var(--mute); font-size: .8rem; }
        .card dl { display: grid; gap: 14px; }
        .card dt { color: var(--mute); font-size: .8rem; }
        .card dd { font-size: 1.05rem; font-weight: 600; }
        .nim { font-family: 'Unbounded', sans-serif; font-size: 1.3rem; letter-spacing: .08em; color: var(--c); }
        .slot { position: relative; overflow: hidden; background: #0d1230; border: 1.5px dashed var(--line); border-radius: 18px; cursor: pointer; display: grid; place-items: center; color: var(--mute); font-size: .85rem; transition: border-color .2s; }
        .slot:hover, .slot:focus-visible { border-color: var(--c); outline: none; }
        .slot img { position: absolute; inset: 0; width: 100%; height: 100%; object-fit: cover; }
        .chg, .del { position: absolute; z-index: 2; background: #0a0e1fd9; color: var(--ink); cursor: pointer; font-size: .74rem; }
        .chg { left: 8px; bottom: 8px; padding: 4px 12px; border-radius: 99px; }
        .del { right: 8px; top: 8px; width: 28px; height: 28px; border-radius: 50%; border: 0; font-size: 1rem; }
        .av { width: 92px; height: 92px; flex: none; border-radius: 24px; }
        section { max-width: 1120px; margin: 0 auto; padding: 70px 24px; }
        h2 { font-family: 'Unbounded', sans-serif; font-size: clamp(1.5rem, 3.4vw, 2.2rem); font-weight: 600; letter-spacing: -.02em; margin-bottom: 12px; }
        .lead { color: var(--mute); max-width: 56ch; margin-bottom: 30px; }
        .rob { display: flex; gap: 18px; align-items: center; background: var(--bg2); border: 1px solid var(--line); border-radius: 22px; padding: 22px 26px; margin-bottom: 22px; }
        .rob i { flex: none; width: 46px; height: 46px; border-radius: 14px; background: var(--b); display: grid; place-items: center; font-style: normal; font-size: 1.4rem; color: #0a0e1f; overflow: hidden; }
        .rob span { color: var(--mute); }

        /* --- GALERI ROBOTIKA --- */
        .gal { 
            display: flex; 
            gap: 16px; 
            overflow-x: auto; 
            padding: 15px 5px 25px; 
            scroll-behavior: auto; 
            scrollbar-width: none; 
        }
        .gal::-webkit-scrollbar { display: none; }

        .gal .slot { 
            flex: 0 0 220px; 
            aspect-ratio: 4/5; 
            border-radius: 18px; 
            transition: transform 0.3s ease, box-shadow 0.3s ease, border-color 0.3s ease; 
        }

        .gal .slot:hover, .gal .slot:focus-visible {
            transform: translateY(-8px) scale(1.25);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.6);
            border-color: var(--c);
            z-index: 2;
        }

        .hint { color: var(--mute); font-size: .88rem; margin-top: 14px; }
        .two { display: grid; gap: 22px; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); }
        .goal { background: var(--bg2); border: 1px solid var(--line); border-radius: 26px; padding: 30px; height: 100%; }
        .goal h3 { font-family: 'Unbounded', sans-serif; font-size: 1.35rem; font-weight: 600; margin-bottom: 14px; color: var(--k); }
        .goal p { color: var(--mute); line-height: 1.7; font-size: 0.95rem; }
        #lb { position: fixed; inset: 0; z-index: 9; background: #050814ee; display: grid; place-items: center; padding: 20px; cursor: zoom-out; }
        #lb img { max-width: 100%; max-height: 92vh; border-radius: 16px; }
        footer { text-align: center; color: var(--mute); padding: 30px 20px 56px; font-size: .9rem; }
        
        @media(max-width: 800px) {
            .hero { grid-template-columns: 1fr; gap: 40px; }
            nav a { margin-left: 14px; }
        }

        @media(prefers-reduced-motion: reduce) { .card { animation: none; } }
        
        #intro { position: fixed; inset: 0; z-index: 20; background: #05070f; display: grid; place-items: center; transition: opacity .6s, filter .6s; cursor: pointer; }
        #intro.out { opacity: 0; filter: blur(10px); }
        #rain { position: absolute; inset: 0; width: 100%; height: 100%; opacity: .5; }
        .term { position: relative; background: #070a18eb; border: 1px solid var(--line); border-radius: 16px; padding: 22px 26px; width: min(92vw, 560px); min-height: 230px; font: .88rem/1.7 ui-monospace, Menlo, Consolas, monospace; color: #cfd6ff; box-shadow: 0 0 70px #8c9bff33; }
        .term pre { font: inherit; white-space: pre-wrap; }
        .term .ok { color: var(--c); }
        .term .dim { color: var(--mute); }
        .grant { margin-top: 16px; font-family: 'Unbounded', sans-serif; font-size: clamp(1.1rem, 4.6vw, 1.6rem); font-weight: 700; letter-spacing: .1em; color: var(--c); animation: gl .45s steps(2) 3; }
        @keyframes gl { 25% { text-shadow: 3px 0 var(--b), -3px 0 var(--a); transform: translateX(3px); } 75% { text-shadow: -3px 0 var(--b), 3px 0 var(--a); transform: translateX(-3px); } }
        #skip { position: absolute; right: 18px; bottom: 18px; z-index: 2; background: #0a0e1fd9; color: var(--ink); border: 1px solid var(--line); border-radius: 99px; padding: 8px 18px; font: inherit; font-size: .85rem; cursor: pointer; }
        #skip:hover, #skip:focus-visible { border-color: var(--c); outline: none; }
        .rp { background: none; border: 0; color: var(--a); font: inherit; text-decoration: underline; cursor: pointer; margin-top: 6px; }
        
        /* Posisi Foto Profil */
        .slot.av img {
            object-position: center 10% !important;
        }

        /* Class Font Latin */
        .font-latin {
            font-family: 'Dancing Script', cursive !important;
            font-size: 4.4rem;
            letter-spacing: 1px;
            color: #38dff8;
            display: block;
            margin-bottom: -4px;
        }
    </style>
</head>
<body>

    <canvas id="bg" aria-hidden="true"></canvas>
    
    <div id="intro" role="dialog" aria-label="Intro">
        <canvas id="rain" aria-hidden="true"></canvas>
        <div class="term">
            <pre id="log"></pre>
        </div>
        <button id="skip" type="button">Lewati</button>
    </div>

    <header>
        <nav>
            <b><?= strtok($profil['nama'], " ") ?></b>
            <div>
                <a href="#kesibukan">Tim Riset</a>
                <a href="#tujuan">Cita-cita</a>
            </div>
        </nav>
        
        <div class="hero">
            <div>
                <span class="font-latin">Portofolio</span>
                <h1><?= $profil['nama'] ?></h1>
                <p class="sub"><?= $profil['deskripsi'] ?></p>
                
                <!-- TOMBOL SOSIAL MEDIA -->
                <div class="sosmed">
                    <?php if(!empty($sosmed['instagram'])): ?>
                        <a href="<?= $sosmed['instagram'] ?>" target="_blank" rel="noopener noreferrer">Instagram</a>
                    <?php endif; ?>
                    
                    <?php if(!empty($sosmed['github'])): ?>
                        <a href="<?= $sosmed['github'] ?>" target="_blank" rel="noopener noreferrer">GitHub</a>
                    <?php endif; ?>
                    
                    <?php if(!empty($sosmed['whatsapp'])): ?>
                        <a href="<?= $sosmed['whatsapp'] ?>" target="_blank" rel="noopener noreferrer">WhatsApp</a>
                    <?php endif; ?>

                    <?php if(!empty($sosmed['linkedin'])): ?>
                        <a href="<?= $sosmed['linkedin'] ?>" target="_blank" rel="noopener noreferrer">linkedin</a>
                    <?php endif; ?>
                </div>
            </div>
            
            <div class="id">
                <div class="card">
                    <div class="top">
                        <div class="slot av" data-key="profil" data-src="foto/profil2.jpeg" aria-label="Foto profil"></div>
                        <div>
                            <h3>KARTU PROFIL</h3>
                            <small>Ketuk foto untuk mengganti</small>
                        </div>
                    </div>
                    <dl>
                        <div>
                            <dt>Nama</dt>
                            <dd><?= $profil['nama'] ?></dd>
                        </div>
                        <div>
                            <dt>NIM</dt>
                            <dd class="nim"><?= $profil['nim'] ?></dd>
                        </div>
                        <div>
                            <dt>Program studi</dt>
                            <dd><?= $profil['prodi'] ?></dd>
                        </div>
                        <div>
                            <dt>Angkatan</dt>
                            <dd><?= $profil['angkatan'] ?></dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </header>

    <main>
        <section id="kesibukan">
            <h2>Di Luar Jadwal Perkuliahan</h2>
            <p class="lead">Waktu yang tersisa saya gunakan untuk bergabung di tim riset SUVIFOR sebagai pemantau GCS, Perancangan misi, dan konfigurasi UAV.</p>
            
            <div class="rob">
                <i aria-hidden="true">
                 <img src="foto/logo.jpg" alt="Logo" style="width: 50px; height: 50px; object-fit: contain;">
                </i>
                <div>
                    <b>Tim Riset SUVIFOR (Robotika)</b><br>
                    <span>Konfigurasi UAV, perencanaan misi, pemetaan, monitoring dan menguji proyek robotika bersama tim.</span>
                </div>
            </div>
            
            <div class="gal">
                <div class="slot" data-key="riset1" data-src="foto/Robotik1.jpeg" aria-label="Foto tim riset 1"></div>
                <div class="slot" data-key="riset2" data-src="foto/Robotik2.jpeg" aria-label="Foto tim riset 2"></div>
                <div class="slot" data-key="riset3" data-src="foto/Robotik3.jpeg" aria-label="Foto tim riset 3"></div>
                <div class="slot" data-key="riset4" data-src="foto/Robotik4.jpeg" aria-label="Foto tim riset 4"></div>
                <div class="slot" data-key="riset5" data-src="foto/Robotik5.jpeg" aria-label="Foto tim riset 5"></div>
                <div class="slot" data-key="riset6" data-src="foto/Robotik66.jpeg" aria-label="Foto tim riset 6"></div>
            </div>
            <p class="hint">Suvifor UNNES adalah tim riset dan unit robotika mahasiswa dari Universitas Negeri Semarang yang berfokus pada pengembangan dan kompetisi robot terbang .</p>
        </section>

        <section id="tujuan">
            <h2>Cita-cita & Fokus Keahlian</h2>
            <p class="lead">Menjawab kebutuhan industri teknologi modern, saya memfokuskan diri pada tigs pilar utama: IoT Keamanan dan Efisiensi Infrastruktur.</p>
            
            <div class="two">
                <?php foreach ($tujuan as$item): ?>
                <article class="goal" style="--k:<?= $item['warna'] ?>">
                    <h3><?= $item['judul'] ?></h3>
                    <p><?= $item['deskripsi'] ?></p>
                </article>
                <?php endforeach; ?>
            </div>
        </section>
    </main>

    <footer>
        &copy; <?= $profil['tahun_copyright'] . ' ' .$profil['nama'] ?><br>
        <button id="replay" class="rp" type="button">Putar ulang intro</button>
    </footer>
    
    <div id="lb" hidden>
        <img alt="Foto diperbesar">
    </div>

    <script>
        const cv = document.getElementById('bg');
        const cx = cv.getContext('2d');
        const m = { x: -999, y: -999, k: 0 };
        const cols = ['#8c9bff', '#ff7a6b', '#ffd9a0', '#ffffff'];
        const still = matchMedia('(prefers-reduced-motion:reduce)').matches;
        let W, H, P = [];

        function size() {
            const d = devicePixelRatio || 1;
            W = innerWidth; H = innerHeight;
            cv.width = W * d; cv.height = H * d;
            cx.setTransform(d, 0, 0, d, 0, 0);
        }
        
        size(); addEventListener('resize', size);
        
        const N = innerWidth < 800 ? 70 : 130;
        for (let i = 0; i < N; i++) {
            const x = Math.random() * innerWidth, y = Math.random() * innerHeight;
            P.push({ x, y, hx: x, hy: y, r: 1 + Math.random() * 2.2, c: cols[i % 4], s: .15 + Math.random() * .35, o: Math.random() * 6 });
        }
        
        const mv = e => { m.x = e.clientX; m.y = e.clientY };
        addEventListener('pointermove', mv);
        addEventListener('pointerdown', e => { mv(e); m.k = 1 });
        addEventListener('pointerup', e => { if (e.pointerType === 'touch') setTimeout(() => { m.x = m.y = -999 }, 600); });
        addEventListener('touchmove', e => { const t = e.touches[0]; m.x = t.clientX; m.y = t.clientY; }, { passive: true });

        function draw(t) {
            cx.clearRect(0, 0, W, H);
            m.k *= .94;
            const R = 160 + m.k * 150, F = 110 + m.k * 160;
            
            for (const p of P) {
                p.hy -= p.s;
                if (p.hy < -10) { p.hy = H + 10; p.hx = Math.random() * W; }
                const bx = p.hx + Math.sin(t * .0006 + p.o) * 12;
                const dx = p.x - m.x, dy = p.y - m.y, d = Math.hypot(dx, dy) || 1;
                let fx = bx, fy = p.hy;
                
                if (d < R) { const f = (R - d) / R; fx += dx / d * f * F; fy += dy / d * f * F; }
                
                p.x += (fx - p.x) * .08; p.y += (fy - p.y) * .08;
                
                cx.globalAlpha = .7; cx.fillStyle = p.c;
                cx.beginPath(); cx.arc(p.x, p.y, p.r, 0, 6.283); cx.fill();
            }
            if (!still) requestAnimationFrame(draw);
        }
        requestAnimationFrame(draw);

        const card = document.querySelector('.card');
        const tilt = (x, y) => card.style.transform = `rotateY(${x}deg) rotateX(${y}deg)`;
        const cl = v => Math.max(-15, Math.min(15, v));
        
        if (!still) {
            card.addEventListener('pointermove', e => {
                if (e.pointerType !== 'mouse') return;
                const r = card.getBoundingClientRect();
                tilt(((e.clientX - r.left) / r.width - .5) * 14, -((e.clientY - r.top) / r.height - .5) * 14);
            });
            
            card.addEventListener('pointerleave', e => {
                if (e.pointerType !== 'mouse') return;
                card.style.transform = '';
            });

            const ori = e => { if (e.gamma != null) tilt(cl(e.gamma / 3), cl(-(e.beta - 50) / 3)); };
            const DO = window.DeviceOrientationEvent;
            if (DO) {
                if (DO.requestPermission) {
                    card.addEventListener('click', async () => { try { if (await DO.requestPermission() === 'granted') addEventListener('deviceorientation', ori); } catch (_) {} }, { once: true });
                } else { addEventListener('deviceorientation', ori); }
            }
        }

        const lb = document.getElementById('lb');
        const openLb = s => { lb.querySelector('img').src = s; lb.hidden = false };
        lb.onclick = () => lb.hidden = true;
        addEventListener('keydown', e => { if (e.key === 'Escape') lb.hidden = true });
        
        const fit = f => new Promise(r => {
            const i = new Image(), u = URL.createObjectURL(f);
            i.onload = () => {
                const s = Math.min(1, 900 / Math.max(i.width, i.height));
                const c = document.createElement('canvas');
                c.width = i.width * s; c.height = i.height * s;
                c.getContext('2d').drawImage(i, 0, 0, c.width, c.height);
                URL.revokeObjectURL(u); r(c.toDataURL('image/jpeg', .8));
            };
            i.src = u;
        });

        document.querySelectorAll('.slot').forEach(s => {
            s.tabIndex = 0; s.setAttribute('role', 'button');
            s.innerHTML = '<img alt="" hidden><span class="ph">+ Foto</span><label class="chg" hidden>Ganti<input type="file" accept="image/*" hidden></label><button class="del" hidden aria-label="Hapus foto">&times;</button>';
            
            const img = s.querySelector('img'), ph = s.querySelector('.ph'), chg = s.querySelector('.chg'), del = s.querySelector('.del'), inp = s.querySelector('input'), k = 'foto:' + s.dataset.key;
            
            const show = (src, own) => {
                if (src) { img.src = src; img.hidden = false; ph.hidden = true; chg.hidden = false; del.hidden = !own; } 
                else { img.hidden = true; img.removeAttribute('src'); ph.hidden = false; chg.hidden = true; del.hidden = true; }
            };
            
            const base = () => { const d = s.dataset.src; if (!d) return show(''); const t = new Image(); t.onload = () => show(d, false); t.onerror = () => show(''); t.src = d; };
            
            let sv = null; try { sv = localStorage.getItem(k); } catch (_) {}
            sv ? show(sv, true) : base();
            
            inp.onchange = async () => { const f = inp.files[0]; inp.value = ''; if (!f) return; const u = await fit(f); show(u, true); try { localStorage.setItem(k, u); } catch (_) { alert('Foto tidak bisa disimpan di browser.'); } };
            del.onclick = () => { try { localStorage.removeItem(k); } catch (_) {} base(); };
            s.onclick = e => { if (e.target.closest('.chg,.del')) return; img.hidden ? inp.click() : openLb(img.src); };
            s.onkeydown = e => { if (e.key === 'Enter' && e.target === s) s.click(); };
        });

        document.getElementById('replay').onclick = () => { try { sessionStorage.removeItem('intro'); } catch (_) {} location.reload(); };

        (() => {
            const it = document.getElementById('intro');
            let seen = null; try { seen = sessionStorage.getItem('intro'); } catch (_) {}
            if (still || seen) { it.remove(); return; }
            
            document.body.style.overflow = 'hidden';
            const rc = document.getElementById('rain'); const rx = rc.getContext('2d');
            const ch = '01アイウエオカキクケコサシスセソ{}<>/#$%&*+=;:'.split('');
            let cw, chh, dr, rid, dead = false;
            
            const rs = () => { cw = rc.width = innerWidth; chh = rc.height = innerHeight; dr = Array.from({ length: Math.ceil(cw / 16) }, () => Math.random() * -60); };
            rs(); addEventListener('resize', rs);
            
            const rain = () => {
                rx.fillStyle = 'rgba(5,7,15,.13)'; rx.fillRect(0, 0, cw, chh); rx.font = '15px monospace';
                dr.forEach((y, i) => {
                    rx.fillStyle = Math.random() > .97 ? '#ffd9a0' : '#8c9bff';
                    rx.fillText(ch[Math.random() * ch.length | 0], i * 16, y * 16);
                    if (y * 16 > chh && Math.random() > .975) dr[i] = 0;
                    dr[i] += .55;
                });
                rid = requestAnimationFrame(rain);
            };
            rain();
            
            const log = document.getElementById('log');
            const sl = ms => new Promise(r => setTimeout(r, ms));
            
            async function type(t, c) { const s = document.createElement('span'); if (c) s.className = c; log.append(s, '\n'); for (const x of t) { if (dead) return; s.textContent += x; await sl(24); } }
            async function bar() { const s = document.createElement('span'); log.append(s, '\n'); for (let i = 0; i <= 20; i++) { if (dead) return; s.textContent = 'menembus firewall [' + '#'.repeat(i) + '.'.repeat(20 - i) + '] ' + i * 5 + '%'; await sl(55); } }
            
            function decrypt() {
                const h = document.querySelector('h1'); const t = h.textContent; const g = '!<>-_/[]{}=+*^?#01'; let f = 0; h.setAttribute('aria-label', t);
                const id = setInterval(() => { f++; h.textContent = [...t].map((c, i) => c === ' ' || i < f / 2 ? c : g[Math.random() * g.length | 0]).join(''); if (f > t.length * 2) { clearInterval(id); h.textContent = t; } }, 35);
            }
            
            function finish() { if (dead) return; dead = true; cancelAnimationFrame(rid); try { sessionStorage.setItem('intro', '1'); } catch (_) {} it.classList.add('out'); document.body.style.overflow = ''; setTimeout(() => { it.remove(); decrypt(); }, 650); }
            
            it.onclick = finish; addEventListener('keydown', e => { if (e.key === 'Escape' || e.key === 'Enter') finish(); });
            
            (async () => {
                await type('$ ssh ammar@portfolio'); await sl(250);
                await type('menghubungkan ke server...', 'dim'); await sl(250);
                await bar(); await type('[ OK ] kunci enkripsi diterima', 'ok'); await type('[ OK ] memuat profil mahasiswa', 'ok'); await sl(300);
                if (dead) return;
                const g = document.createElement('div'); g.className = 'grant'; g.textContent = 'AKSES DIBERIKAN'; log.append(g);
                await sl(1100); finish();
            })();
        })();

        /* --- SCRIPT SCROLL OTOMATIS GALERI --- */
        const gal = document.querySelector('.gal');
        let galHovered = false;
        let scrollDir = 1;

        if (gal) {
            gal.addEventListener('pointerenter', () => galHovered = true);
            gal.addEventListener('pointerleave', () => galHovered = false);
            
            setInterval(() => {
                if (!galHovered) {
                    gal.scrollLeft += scrollDir;
                    if (gal.scrollLeft >= (gal.scrollWidth - gal.clientWidth - 1)) {
                        scrollDir = -1;
                    } else if (gal.scrollLeft <= 0) {
                        scrollDir = 1;
                    }
                }
            }, 25);
        }
    </script>
</body>
</html>