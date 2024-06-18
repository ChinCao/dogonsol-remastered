<?php
$queryValue = isset($_GET['meme']) ? $_GET['meme'] : null;

$numberOfImages = 151;

$thumbnailUrl = "https://dogonsol.online/img/thumbnail.jpg";



if ($queryValue !== null && (!is_numeric($queryValue) || intval($queryValue) > $numberOfImages || intval($queryValue) < 0)){
    $queryValue = mt_rand(1, $numberOfImages);
    $thumbnailUrl = "https://dogonsol.online/thumbnail-jpg/" . intval($queryValue) . ".jpg";
    $newUrl = "?meme=" . $queryValue;
    header("Location: $newUrl", true, 302);
    exit;
}


if ($queryValue !== null  ){
    $thumbnailUrl = "https://dogonsol.online/thumbnail-jpg/" . intval($queryValue) . ".jpg";
}
$currentUrl = $_SERVER['REQUEST_URI'];
if (strpos($currentUrl, '?') === false) {
    $thumbnailUrl = "https://dogonsol.online/img/thumbnail.jpg";
}

?>

<!doctype html>
<html lang=en>
<head>
<meta name="twitter:image" id="twitter-image-thumbnail" content="<?php echo $thumbnailUrl; ?>">
<meta property="og:image" id="og-image-thumbnail" content="<?php echo $thumbnailUrl; ?>">
<meta name="image" id="image-thumbnail" content="<?php echo $thumbnailUrl; ?>">
<meta charset=UTF-8>
<link rel=canonical id="canonical" href=https://dogonsol.online/ >
<meta property=og:url id="og-canonical" content=https://dogonsol.online/ >
<meta name=viewport content="width=device-width,initial-scale=1">
<link rel=apple-touch-icon href=img\\dog_logo_square.avif>
<meta name=twitter:card content=summary_large_image>
<meta name=twitter:creator content=@DOG_ON_SOL8888>
<meta name=twitter:site content=@DOG_ON_SOL8888>
<meta name=twitter:title content="The DOG on Solana">
<meta name=theme-color content=#d9b99b>
<meta name=twitter:description content="I'M LITERALLY JUST A DOG! Everyone loves DOG, if you don't, it's your own problem. What else can possibly go wrong? CA: vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS">
<meta name=twitter:alt content="DOG background Dubai">
<link rel=manifest href=manifest.json>
<meta name=description content="I'M LITERALLY JUST A DOG! Everyone loves DOG, if you don't, it's your own problem. What else can possibly go wrong? CA: vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS">
<meta property='article:author' content='DOG community' />
<meta property='article:publisher' content='DOG community' />
<meta property=og:type content=website>
<meta property=og:title content="The DOG on Solana">
<meta property=og:description content="I'M LITERALLY JUST A DOG! Everyone loves DOG, if you don't, it's your own problem. What else can possibly go wrong? CA: vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS">
<meta property=og:type content=website>
<meta property=og:image:width content=1200>
<meta property=og:image:height content=627>
<meta property=og:image:alt content="DOG background Dubai">
<meta property="og:site_name" content="DOG" />
<meta property="og:title" content="The DOG on Solana" />
<meta property=type content=website>
<meta property=title content="The DOG on Solana">
<meta property=description content="I'M LITERALLY JUST A DOG! DEVS LET ME STARVE TO DEATH. However, the community has rallied together to rescue the project, giving me another chance at life! Everyone loves DOG, if you don't, it's your own problem. What else can possibly go wrong?">
<meta property=url content=https://dogonsol.online/ >
<meta property=type content=website>
<meta property=image:width content=1200>
<meta property=image:height content=627>
<meta property=image:alt content="DOG background Dubai">
<meta name=author content="DOG community">
<meta name=publish_date property=og:publish_date content=2024-04-07T00:00:00-0600>

<script async src=https://cdn.ampproject.org/v0.js></script>
<link rel=preconnect href=https://fonts.googleapis.com>
<link rel=preconnect href=https://fonts.gstatic.com crossorigin>
<link rel=stylesheet href=https://unpkg.com/swiper@8/swiper-bundle.min.css>
<link href="https://fonts.googleapis.com/css2?family=Caveat:wght@400..700&family=Chakra+Petch:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel=stylesheet>
<link rel=icon type=image/x-icon href=img\icon.avif>
<script async src=https://kit.fontawesome.com/e776f08ec1.js crossorigin=anonymous></script>
<link rel=preload fetchpriority=high as=image href=dog-slider\1.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\2.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\3.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\4.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\5.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\6.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\11.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\8.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\9.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\13.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\10.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\14.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=dog-slider\31.avif type=image/avif>
<link rel=preload fetchpriority=high as=image href=img\91.avif type=image/avif>
<link rel=preload fetchpriority=low as=image href=img\8msaru.avif type=image/avif>
<link rel="stylesheet" href="loading.css?v=1.0.2">
<link rel=stylesheet href="style.css?v=1.0.0">



<title>The DOG on Solana</title>
</head>
<body>
<amp-img src=img\dog_transparent.avif height=170 width=160 id=doglol alt="annoying doggo">
<noscript>
<img src=img\dog_transparent.avif id=doglol alt="annoying doggo" height=170 width=160>
</noscript>
</amp-img>
<header>
<div class=logo-container>
<a title=Home class=logo href=#home>
<amp-img src=img\icon.avif width=50 height=50 alt=logo>
<noscript>
<img src=img\icon.avif width=50 height=50 alt=logo>
</noscript>
</amp-img>
</a>
<h1>DOG</h1>
</div>
<div class=navigation>
<a class=navigation-a href=#about>About DOG</a>
<a class=navigation-a href=#tokenomics>Tokenomics</a>
<a class=navigation-a href=#why>Why?</a>
<a class=navigation-a href=#listings>Listings</a>
<a class=navigation-a href=#games>Games</a>
<a class=navigation-a href=#roadmap>Roadmap</a>
<a class=navigation-a href=#DOXXED>DOXXED</a>
<a class=navigation-a href=#socials>Socials</a>
</div>
<div class=hamburger-container>
<a role=button class=buy-btn href=#buy>BUY $DOG</a>
<label for=navigation-hamburger-checkbox class=hamburger><h1>Hamburger menu</h1><input id=navigation-hamburger-checkbox type=checkbox>
</label>
</div>
</header>
<div id=home>
  <div class="loading-container">
    <div class="card">
      <div class="card-front">
        <img
          class="card-front-img"
          src="dog-slider\1.avif"
          width="300"
          height="300"
          alt="doggo"
        />
      </div>
      <div class="card-back">
        <img
          class="card-back-img"
          src="dog-slider\2.avif"
          width="300"
          height="300"
          alt="doggo"
        />
      </div>
    </div>
    <div class="loading-text">
      <h1>Fetching resources</h1>
      <div class="loading-dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
    </div>
    <script src="loading.js?v=1.0.0">
      </script>
  </div>

<video preload="auto" id="qjh1121" src="video\home intro.mp4" autoplay muted noaudio></video>
<script>
  window.addEventListener("load", () => {
  if (document.querySelector("#qjh1121").readyState === 4) {
    document.querySelector(".loading-container").remove();
    document.getElementsByTagName("html")[0].style.overflow = "auto";
  }
});

</script>

<a title="Scroll down" class=container href=#about>
<div class=chevron></div>
<div class=chevron></div>
<div class=chevron></div>
</a>
<div class=media-icons>
<a title=Telegram rel=noopener href=https://t.me/DOGCOMMUNITY888 target=_blank><i class="fa-brands fa-telegram"></i></a>
<a title=Twitter rel=noopener href=https://twitter.com/DOG_ON_SOL8888 target=_blank><i class="fa-brands fa-x-twitter"></i></a>
<a title=Youtube rel=noopener href=https://www.youtube.com/@DOGONSOL target=_blank><i class="fa-brands fa-youtube"></i></a>
<a title=Tiktok rel=noopener href=https://www.tiktok.com/@dog.on.solana target=_blank><i class="fa-brands fa-tiktok"></i></a>
</div>
</div>
<section class=about id=about>
<div class=max-width>
<h2 class=title>About $DOG</h2>
<div class=about-content>
<a title=Dexscreener target=_blank rel=noopener href=https://dexscreener.com/solana/jd5gxsgcmhasyir6czp81pm1zshzrki1pp3uypqwshua class="column left">
<amp-img src=img\straight_outta_solana.avif width=357 height=357 alt="straight outa Solana" title=Dexscreener↗>
<noscript>
<img src=img\straight_outta_solana.avif width=357 title=Dexscreener↗ height=357 alt="straight outa Solana">
</noscript>
</amp-img>
<amp-img src=dog-slider\10.avif width=100 height=100 class=sticker id=sticker2 alt=dog>
<noscript>
<img src=dog-slider\10.avif width=100 height=100 alt=dog class=sticker id=sticker2>
</noscript>
</amp-img>
</a>
<div class="column right">
<div class=title-container>
<div class=text>I'm literally just a <span>DOG</span></div>
<amp-img src=dog-slider\19.avif width=85 height=80 class=sticker id=sticker1 alt=dog>
<noscript>
<img src=dog-slider\19.avif width=85 height=80 alt=dog class=sticker id=sticker1>
</noscript>
</amp-img>
</div>
<p>
DEVS LET ME STARVE TO DEATH. However, the community has rallied together to rescue the project, giving me another chance at life! Everyone <span id=wjd121fj>loves</span> DOG, if you don't, it's your own problem. What else can possibly go wrong? 🐕
</p>
<div class=ca>
CA: vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS
</div>
</div>
</div>
</div>
</section>
<section id=tokenomics class=tokenomics>
<h2 class=title>Doggonomics</h2>
<div class=max-width>
<div class=wrapper>
<div class=container>
<h1>TOTAL SUPPLY 999,530,696.80</h1>
<amp-img src=dog-slider\1.avif width=80 height=80 alt=doggo>
<noscript>
<img src=dog-slider\1.avif width=80 height=80 alt=doggo>
</noscript>
</amp-img>
</div>
<div class=container>
<h1>100% LP 0% PRESALE</h1>
<amp-img src=dog-slider\14.avif width=80 height=80 alt=doggo>
<noscript>
<img src=dog-slider\14.avif width=80 height=80 alt=doggo>
</noscript>
</amp-img>
</div>
<div class=container>
<h1>LP BURNED AT LAUNCH</h1>
<amp-img src=dog-slider\2.avif width=80 height=80 alt=doggo>
<noscript>
<img src=dog-slider\2.avif width=80 height=80 alt=doggo>
</noscript>
</amp-img></div>
<div class=container>
<h1>0 BUY TAXES 0 SELL TAXES</h1>
<amp-img src=dog-slider\31.avif width=80 height=80 alt=doggo>
<noscript>
<img src=dog-slider\31.avif width=80 height=80 alt=doggo>
</noscript>
</amp-img>
</div>
<div class=container>
<h1>100% COMMUNITY OWNED<br>NO RUG NO BS</h1>
<amp-img src=dog-slider\29.avif width=80 height=80 alt=doggo>
<noscript>
<img src=dog-slider\29.avif width=80 height=80 alt=doggo>
</noscript>
</amp-img>
</div>
</div>
<a class=frame target=_blank href=https://solscan.io/token/vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS rel=noopener title=Solscan↗>
<amp-img src=img\look_behind_you.avif width=500 height=600 layout=responsive alt="dog looking for jeeters">
<noscript>
<img src=img\look_behind_you.avif width=500 height=600 alt="dog looking for jeeters">
</noscript>
</amp-img>
</a>
</div>
</section>
<section id=why class=why>
<h2 class=title>Forget about</h2>
<div class=max-width id=cutedogoo>
<div class="column left">
<video src="video\cute doggo.mp4" autoplay muted noaudio loop></video>
</div>
<div class="column right">
<div class=text-container>
<h1>DOGs are man's best friend!</h1>
<p>
According to some obscure sources from the internet, here are some statistics to prove it!
</p>
</div>
<div class=container>
<div class=bars>
<div class=information>
<span>Dog</span>
<span>90%</span>
</div>
<div class="line dog"></div>
</div>
<div class=bars>
<div class=information>
<span>Cat</span>
<span>6%</span>
</div>
<div class="line cat"></div>
</div>
<div class=bars>
<div class=information>
<span>Fish</span>
<span>3%</span>
</div>
<div class="line fish"></div>
</div>
<div class=bars>
<div class=information>
<span>Frog</span>
<span>0%</span>
</div>
<div class="line frog"></div>
</div>
<div class=bars>
<div class=information>
<span>Sloth</span>
<span>0%</span>
</div>
<div class="line sloth"></div>
</div>
<div class=bars>
<div class=information>
<span>Duck</span>
<span>1%</span>
</div>
<div class="line duck"></div>
</div>
<h1>
*Most <span id=love>beloved</span> animals on the Earth %*
</h1>
</div>
</div>
</div>
<div class=full-width>
<div class="max-width czfunny">
<amp-img src=img\cz.avif width=1300 height=731.25 layout=responsive alt=cz>
<noscript>
<img src=img\cz.avif width=1300 height=731.25 alt=cz>
</noscript>
</amp-img>
</div>
</div>
<div class="full-width indogwetrust">
<div class=max-width id=jf32332f32>
<h3 class=sub-title>IN $DOG WE TRUST</h3>
<div class=comparison>
<div class=card-comparison id=usdollar>
<div class=card-title>US DOLLAR</div>
<video src=video\\jerome-powell-powell.mp4 autoplay muted noaudio loop></video>
<div class=text-container>
<div class=text>
<p><i class="fa-solid fa-x"></i>Centralized</p>
<p><i class="fa-solid fa-x"></i>0% Community owned</p>
<p>
<i class="fa-solid fa-x"></i>Nobody knows what they are doing
</p>
<p><i class="fa-solid fa-x"></i>Inflation 💀</p>
<p><i class="fa-solid fa-x"></i>No blockchain technologies</p>
<p><i class="fa-solid fa-x"></i>Hidden Ponzi scheme</p>
<p><i class="fa-solid fa-x"></i>wtf ???</p>
</div>
<a href=#buy>BUY $DOG</a>
</div>
</div>
<div class=card-comparison id=dogcard>
<div class=card-title>DOG</div>
<video src=video\\wink-dog.mp4 autoplay muted noaudio loop></video>
<div class=text-container>
<div class=text>
<p><i class="fa-solid fa-check"></i>Fully decentralized</p>
<p><i class="fa-solid fa-check"></i>100% Community owned</p>
<p>
<i class="fa-solid fa-check"></i>DOXXED owner and admins
</p>
<p><i class="fa-solid fa-check"></i>Fixed supply</p>
<p>
<i class="fa-solid fa-check"></i>Operate on the fastest & cheapest blockchain
</p>
<p>
<i class="fa-solid fa-check"></i>Most memeable & beloved creature in existence
</p>
<p><i class="fa-solid fa-check"></i>Cheap</p>
</div>
<a href=#buy>BUY $DOG</a>
</div>
</div>
<div class=card-comparison id=bitcoincard>
<div class=card-title>Bitcoin</div>
<video src=video\\gk73irr9ckg11.mp4 autoplay muted noaudio loop></video>
<div class=text-container>
<div class=text>
<p id=fwjjfi32>
<i class="fa-solid fa-check"></i>Decentralized
</p>
<p><i class="fa-solid fa-x"></i>Not a DOG</p>
<p>
<i class="fa-solid fa-x"></i>Hedge funds and institution manipulate it
</p>
<p id=wqfiqff221>
<i class="fa-solid fa-check"></i>Fixed supply
</p>
<p><i class="fa-solid fa-x"></i>Slow af</p>
<p><i class="fa-solid fa-x"></i>Cost a kidney for fees</p>
<p><i class="fa-solid fa-x"></i>Overpriced</p>
</div>
<a href=#buy>BUY $DOG</a>
</div>
</div>
</div>
</div>
</div>

<div class="slide-container sliderbeforeelon" id="dogbruhskibidi219123">
    <div class="dog-slide dogonsolslider">
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
    </div>
    <div class="dog-slide dogonsolslider">
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
        <h3>DOG</h3>
    </div>
    </div>
<div class="slide-container sliderbeforeelon" id="onsolwqdojf20sgyat">
        <div class="dog-slide dogonsolslider2">
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
        </div>
        <div class="dog-slide dogonsolslider2">
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
            <h3>ON SOL</h3>
        </div>
    </div>

<div class=full-width id=ijijfi32r0i30r>
<h3 class=sub-title>👇 Elon Musk's honest reaction 👇</h3>
<div class=max-width id=dddf232>
<video src="video\elon-musk.mp4" controls loop></video>
</div>
</div>
</section>
<section id=listings class=listings>
<div class=max-width>
<div class=wrapper>
<div class=listing-container>
<a class=container href=https://dexscreener.com/solana/jd5gxsgcmhasyir6czp81pm1zshzrki1pp3uypqwshua target=_blank rel=noopener title=DexScreener>
<amp-img src=img\dexlogo.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\dexlogo.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://www.dextools.io/app/en/solana/pair-explorer/JD5GxSgcmHAsyir6CZP81pM1zsHZRki1pp3UYPqWshua target=_blank rel=noopener title=Dextools>
<amp-img src=img\dextool_logo.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\dextool_logo.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=# target=_blank rel=noopener title=CoinGecko>
<amp-img src=img\coingecko-logo.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coingecko-logo.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://www.geckoterminal.com/solana/pools/JD5GxSgcmHAsyir6CZP81pM1zsHZRki1pp3UYPqWshua target=_blank rel=noopener title=GeckoTerminal>
<amp-img src=img\geckoterminal.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\geckoterminal.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://cntoken.io/coin/41975 target=_blank rel=noopener title=CNToken>
<amp-img src=img\cntoken.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\cntoken.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://coinpaprika.com/coin/dog-dog-sol/ target=_blank rel=noopener title=coinpaprika>
<amp-img src=img\coinpaprika.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coinpaprika.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href="https://birdeye.so/token/vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS?chain=solana" target=_blank rel=noopener title=birdeye>
<amp-img src=img\birdeye.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\birdeye.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://moontok.io/coins/dog-5 target=_blank rel=noopener title=Moontok>
<amp-img src=img\moontok-fulllogo.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\moontok-fulllogo.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://fomospider.com/coin/DOG target=_blank rel=noopener title=FomoSpider>
<amp-img src=img\fomospider.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\fomospider.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://top100token.com/address/vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS target=_blank rel=noopener title=Top100Token>
<amp-img src=img\top100token.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\top100token.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://coinsgem.com/token/vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS target=_blank rel=noopener title=COINGEMS>
<amp-img src=img\coinsgem.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coinsgem.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://coinsniper.net/coin/61398 target=_blank rel=noopener title=CoinSniper>
<amp-img src=img\coinsniper.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coinsniper.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://coinmooner.com/coin/dog-dog target=_blank rel=noopener title=coinmooner>
<amp-img src=img\coinmooner.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coinmooner.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://www.dexview.com/solana/vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS target=_blank rel=noopener title=DEXView>
<amp-img src=img\dexview.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\dexview.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://coindiscovery.app/coin/dog target=_blank rel=noopener title=CoinDiscovery>
<amp-img src=img\coindiscovery.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coindiscovery.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://gemsradar.com/coins/dog_ target=_blank rel=noopener title=GemsRadar>
<amp-img src=img\gemsradar.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\gemsradar.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://gemfinder.cc/gem/19873 target=_blank rel=noopener title=GemFinder>
<amp-img src=img\gemfinder.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\gemfinder.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://coinalpha.app/token/vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS target=_blank rel=noopener title=CoinAlpha>
<amp-img src=img\coinalpha.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coinalpha.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://www.livecoinwatch.com/price/DOG-______________DOG target=_blank rel=noopener title=LIVECOINWATCH>
<amp-img src=img\live_coin_watch_log_.avif width=140 height=20 layout=responsive alt=logo>
<noscript>
<img src=img\live_coin_watch_log_.avif alt=logo>
</noscript>
</amp-img>
</a>
<a class=container href=https://coincatapult.com/coin/dog-dog target=_blank rel=noopener title=CoinCatapult>
<amp-img src=img\coincatapult.avif width=140 height=50 layout=responsive alt=logo>
<noscript>
<img src=img\coincatapult.avif alt=logo>
</noscript>
</amp-img>
</a>
</div>
</div>
<div class="column left">
<h2 class=title>DOG's listings</h2>
<p>Help DOGGO crush the rockets 🚀🚀🔥</p>
<a href=https://coinmarketcap.com/dexscan/solana/JD5GxSgcmHAsyir6CZP81pM1zsHZRki1pp3UYPqWshua target=_blank rel=noopener title="Vote for us on CoinMarketCap">
<amp-img src=img\coinmarketcap.avif class=livecoinwatch width=140 height=50 layout=responsive alt="wen coinmarketcap?">
<noscript>
<img src=img\coinmarketcap.avif alt="wen coinmarketcap?">
</noscript>
</amp-img>
</a>
</div>
</div>
<div class=max-width id=chart>
<style>#dexscreener-embed{position:relative;width:100%;height:550px}#dexscreener-embed iframe{position:absolute;width:100%;height:100%;top:0;left:0;border:0}</style><div id=dexscreener-embed><iframe title="Dexsceener chart" src="https://dexscreener.com/solana/JD5GxSgcmHAsyir6CZP81pM1zsHZRki1pp3UYPqWshua?embed=1&theme=dark&trades=0&info=0"></iframe></div>
</div>
</section>
<section id=lol class=lol>
<h2 class=title>You're in a cult</h2>
<div class=max-width>
<div class=slide-container>
<div class=dog-slide>
    <img src="dog-slider\1.avif" alt="dog" />
    <img src="dog-slider\2.avif" alt="dog" />
    <img src="dog-slider\3.avif" alt="dog" />
    <img src="dog-slider\4.avif" alt="dog" />
    <img src="dog-slider\5.avif" alt="dog" />
    <img src="dog-slider\6.avif" alt="dog" />
    <img src="dog-slider\8.avif" alt="dog" />
    <img src="dog-slider\9.avif" alt="dog" />
    <img src="dog-slider\11.avif" alt="dog" />
    <img src="dog-slider\12.avif" alt="dog" />
    <img src="dog-slider\13.avif" alt="dog" />
    <img src="dog-slider\14.avif" alt="dog" />
    <img src="dog-slider\15.avif" alt="dog" />
    <img src="dog-slider\16.avif" alt="dog" />
    <img src="dog-slider\17.avif" alt="dog" />
    <img src="dog-slider\18.avif" alt="dog" />
    <img src="dog-slider\20.avif" alt="dog" />
    <img src="dog-slider\21.avif" alt="dog" />
    <img src="dog-slider\22.avif" alt="dog" />
    <img src="dog-slider\23.avif" alt="dog" />
    <img src="dog-slider\24.avif" alt="dog" />
    <img src="dog-slider\25.avif" alt="dog" />
    <img src="dog-slider\26.avif" alt="dog" />
    <img src="dog-slider\27.avif" alt="dog" />
    <img src="dog-slider\28.avif" alt="dog" />
    <img src="dog-slider\29.avif" alt="dog" />
    <img src="dog-slider\30.avif" alt="dog" />
    <img src="dog-slider\31.avif" alt="dog" />
    <img src="dog-slider\32.avif" alt="dog" />
    <img src="dog-slider\33.avif" alt="dog" />
    <img src="dog-slider\34.avif" alt="dog" />
    <img src="dog-slider\35.avif" alt="dog" />
    <img src="dog-slider\36.avif" alt="dog" />
</div>
<div class=dog-slide>
    <img src="dog-slider\1.avif" alt="dog" />
    <img src="dog-slider\2.avif" alt="dog" />
    <img src="dog-slider\3.avif" alt="dog" />
    <img src="dog-slider\4.avif" alt="dog" />
    <img src="dog-slider\5.avif" alt="dog" />
    <img src="dog-slider\6.avif" alt="dog" />
    <img src="dog-slider\8.avif" alt="dog" />
    <img src="dog-slider\9.avif" alt="dog" />
    <img src="dog-slider\11.avif" alt="dog" />
    <img src="dog-slider\12.avif" alt="dog" />
    <img src="dog-slider\13.avif" alt="dog" />
    <img src="dog-slider\14.avif" alt="dog" />
    <img src="dog-slider\15.avif" alt="dog" />
    <img src="dog-slider\16.avif" alt="dog" />
    <img src="dog-slider\17.avif" alt="dog" />
    <img src="dog-slider\18.avif" alt="dog" />
    <img src="dog-slider\20.avif" alt="dog" />
    <img src="dog-slider\21.avif" alt="dog" />
    <img src="dog-slider\22.avif" alt="dog" />
    <img src="dog-slider\23.avif" alt="dog" />
    <img src="dog-slider\24.avif" alt="dog" />
    <img src="dog-slider\25.avif" alt="dog" />
    <img src="dog-slider\26.avif" alt="dog" />
    <img src="dog-slider\27.avif" alt="dog" />
    <img src="dog-slider\28.avif" alt="dog" />
    <img src="dog-slider\29.avif" alt="dog" />
    <img src="dog-slider\30.avif" alt="dog" />
    <img src="dog-slider\31.avif" alt="dog" />
    <img src="dog-slider\32.avif" alt="dog" />
    <img src="dog-slider\33.avif" alt="dog" />
    <img src="dog-slider\34.avif" alt="dog" />
    <img src="dog-slider\35.avif" alt="dog" />
    <img src="dog-slider\36.avif" alt="dog" />
</div>
</div>
<div class=center>
<div class=funny-card>
<div class=shadow style="--url:url('dog-background\\full\\1.avif')"></div>
<div class="image background" style="--url:url('dog-background\\background\\1.avif')"></div>
<div class="image cutout" style="--url:url('dog-background\\dog\\1.avif')"></div>
<div class=content>
<h2>Broke puppy</h2>
<p>&lt;100,000 DOG</p>
</div>
</div>
<div class=funny-card>
<div class=shadow style="--url:url('dog-background\\full\\2.avif')"></div>
<div class="image background" style="--url:url('dog-background\\background\\2.avif')"></div>
<div class="image cutout" style="--url:url('dog-background\\dog\\2.avif')"></div>
<div class=content>
<h2>Average Joe</h2>
<p> 100,000 - 250,000 DOG</p>
</div>
</div>
<div class=funny-card>
<div class=shadow style="--url:url('dog-background\\full\\3.avif')"></div>
<div class="image background" style="--url:url('dog-background\\background\\3.avif')"></div>
<div class="image cutout" style="--url:url('dog-background\\dog\\3.avif')"></div>
<div class=content>
<h2>Ballin</h2>
<p> 250,000 - 700,000 DOG</p>
</div>
</div>
<div class=funny-card>
<div class=shadow style="--url:url('dog-background\\full\\4.avif')"></div>
<div class="image background" style="--url:url('dog-background\\background\\4.avif')"></div>
<div class="image cutout" style="--url:url('dog-background\\dog\\4.avif')"></div>
<div class=content>
<h2>Top G</h2>
<p> 700,000 - 2,000,000 DOG</p>
</div>
</div>
<div class=funny-card>
<div class=shadow style="--url:url('dog-background\\full\\5.avif')"></div>
<div class="image background" style="--url:url('dog-background\\background\\5.avif')"></div>
<div class="image cutout" style="--url:url('dog-background\\dog\\5.avif')"></div>
<div class=content>
<h2>Filthy rich</h2>
<p>2,000,000+ DOG</p>
</div>
</div>
</div>
<script src=hover.js></script>
</div>
<h2 class=title id=meme-title>Memes</h2>
<div class=max-width> <div class="swiper gallery-slider">
<div class=swiper-wrapper>
</div>
<div class=gallery-slider-control>
<div class=button-wrapper>
<div class="swiper-button-prev slider-arrow">
Back
</div>
<div class=swiper-pagination></div>
<div class="swiper-button-next slider-arrow">
Next
</div>
</div>
<div class="random-meme slider-arrow">
Random meme
</div>
</div>
</div>
<script  src=https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js></script>
<script  src="meme-gallery.js?v=1.0.1"></script></div>
</div>
</section>
<section id=games class=games>
<div class=title-container>
<h2 class=title>PLAY THE GAMES</h2>
<a href="https://flappycreator.com/flappy.php?id=65fe167170d06" target=_blank rel=noopener title="Click me">
<amp-img src=img\flappy_dog.avif width=100 height=100 title="Flappy DOG" alt="flappy dog">
<noscript>
<img src=img\flappy_dog.avif title="Flappy DOG" width=100 height=100 alt="flappy dog">
</noscript>
</amp-img>
</a>
</div>
<div class=game-container>
<iframe title="DOG bubble game" frameborder=0 src=https://itch.io/embed/2605950 width=552 height=167><a href=https://dr3w92.itch.io/dogbubble>DOG BUBBLE by THE DOG</a></iframe>
<iframe title="DOG run game" frameborder=0 src=https://itch.io/embed/2605965 width=552 height=167><a href=https://dr3w92.itch.io/dogrun>Dog Run by THE DOG</a></iframe>
<iframe title="DOG air hocky game" width=552 height=167 frameborder=0 src=https://itch.io/embed/2619141><a href=https://dr3w92.itch.io/dogairhockey>DOG AIR HOCKEY PC by THE DOG</a></iframe>
</div>
</section>
<section id=roadmap class=roadmap>
<h2 class=title>Roadmap 🐕</h2>
<div class=max-width>
<div class=container>
<ul>
<li>
<h3 class=roadmap-title>Start of takeover</h3>
<div class=text-container>
<p>Dextools + DexScreener Updates</p>
<p>200+ Holders</p>
<p>Register on all Free Listing</p>
<p>Community Takeovers</p>
<p>Doxxed Admins</p>
<p>Released 4 Games</p>
</div>
<span class=circle></span>
<span class=marketcap>300k MC</span>
<amp-video controls width=300 height=200 src=video\meme.mp4 noaudio layout=responsive autoplay muted loop>
<div fallback>
<video src=video\meme.mp4 autoplay muted noaudio loop></video>
</div>
</amp-video>
</li>
<li>
<h3 class=roadmap-title>CMC Listing</h3>
<div class=text-container>
<p>Coingeko Listing</p>
<p>1000+ Holders</p>
<p>Hard Marketing partnerships</p>
<p>Twitter/X Contest</p>
</div>
<span class=circle></span>
<span class=marketcap>1 Million MC</span>
<amp-video controls width=300 height=200 src="video\will smith.mp4" noaudio layout=responsive autoplay muted loop>
<div fallback>
<video src="video\will smith.mp4" autoplay muted noaudio loop></video>
</div>
</amp-video>
</li>
<li>
<h3 class=roadmap-title>NFTs</h3>
<div class=text-container>
<p>New Game Release</p>
<p>Heavy Ad campaign</p>
<p>More Twitter/X contest</p>
</div>
<span class=circle></span>
<span class=marketcap>3 Million MC</span>
<amp-video controls width=300 height=200 src=video\jacksparrow.mp4 noaudio layout=responsive autoplay muted loop>
<div fallback>
<video src=video\jacksparrow.mp4 autoplay muted noaudio loop></video>
</div>
</amp-video>
</li>
<li>
<h3 class=roadmap-title>DOG Merch</h3>
<div class=text-container>
<p>Begin High Quality Game development</p>
<p>Telegram premium giveaway for active members</p>
<p>You still holding?</p>
</div>
<span class=circle></span>
<span class=marketcap>5 Million MC</span>
<amp-video controls width=300 height=200 src="video\he sold early.mp4" noaudio layout=responsive autoplay muted loop>
<div fallback>
<video src="video\he sold early.mp4" autoplay muted noaudio loop></video>
</div>
</amp-video>
</li>
<li>
<h3 class=roadmap-title>All Centralized Exchange Listing</h3>
<div class=text-container>
<p>Life Changing for all DOG holders</p>
<p>AA/AAA Game Release</p>
<p>Lambo</p>
<p>Charities and giveaways</p>
<p>Jeeters are crying</p>
</div>
<span class=circle></span>
<span class=marketcap>1 Billion MC</span>
<amp-video controls width=300 height=200 src=video\1billionlol.mp4 noaudio layout=responsive autoplay muted loop>
<div fallback>
<video src=video\1billionlol.mp4 autoplay muted noaudio loop></video>
</div>
</amp-video>
</li>
</ul>
</div>
<h4>Note : Roadmap will be continuously updated for DOG Community</h4>
<a id=whitepaper href=https://drive.google.com/file/d/1hGEUlm_v5qUGnk8RkfbsuBSO2H2WPH1s/view title=whitepaper target=_blank rel=noopener role=button>Whitepaper</a>
</div>
</section>
<section id=DOXXED class=DOXXED>
<h2 class=title>DOXXED TELEGRAM OWNER AND ADMIN</h2>
<div class=max-width>
<div class=img-container>
<article class=card-article>
<amp-img src=img\quino.avif width=300 height=300 alt=quino>
<noscript>
<img src=img\quino.avif width=300 height=300 alt=quino>
</noscript>
</amp-img>
<div class=card-data>
<span class=card-description>The Head DOG 🗣️🗣️🗣️</span>
<h2 class=card-title>Quino</h2>
<a href=https://t.me/saintquino target=_blank rel=noopener class=card-btn>Message</a>
</div>
</article>
</div>
<div class=img-container>
<article class=card-article>
<amp-img src=img\dreg0_0.avif width=300 height=300 alt="src=img\dreg0_0.avif">
<noscript>
<img src=img\dreg0_0.avif width=300 height=300 alt=dreg0_0>
</noscript>
</amp-img>
<div class=card-data>
<span class=card-description>The FATHER 👑</span>
<h2 class=card-title>dreg0_0</h2>
<a href=https://t.me/dreg0_0 target=_blank rel=noopener class=card-btn>Message</a>
</div>
</article>
</div>
</div>
</section>
<section id=socials class=socials>
<h2 class=title>Socials</h2>
<div class=max-width>
<amp-video controls width=320 height=180 src=video\gru.mp4 noaudio autoplay muted loop>
<div fallback>
<video src=video\gru.mp4 autoplay muted noaudio loop></video>
</div>
</amp-video>
<div class=social-container>
<div class="card-social content content-1">
<div class=card-front>
<div class="fa-brands fa-telegram"></div>
<h2>Telegram</h2>
<p>t.me/DOGCOMMUNITY888</p>
<a class=follow href=https://t.me/DOGCOMMUNITY888 target=_blank rel=noopener>Follow</a>
</div>
<div class=card-back>
<amp-img src=img\uno.avif width=216 height=216 alt="funny meme">
<noscript>
<img src=img\uno.avif width=216 height=216 alt="funny meme">
</noscript>
</amp-img>
</div>
</div>
<div class="card-social content content-2">
<div class=card-front>
<div class="fa-brands fa-x-twitter"></div>
<h2>Twitter</h2>
<p>@DOG_ON_SOL8888</p>
<a class=follow href=https://twitter.com/DOG_ON_SOL8888 target=_blank rel=noopener>Follow</a>
</div>
<div class=card-back>
<amp-img src=img\internal_screaming.avif width=216 height=216 alt="funny meme">
<noscript>
<img src=img\internal_screaming.avif width=216 height=216 alt="funny meme">
</noscript>
</amp-img>
</div>
</div>
<div class="card-social content content-3">
<div class=card-front>
<div class="fa-brands fa-youtube"></div>
<h2>Youtube</h2>
<p>@DOGONSOL</p>
<a class=follow href=https://www.youtube.com/@DOGONSOL target=_blank rel=noopener>Follow</a>
</div>
<div class=card-back>
<amp-img src=img\i_told_you.avif width=216 height=216 alt="funny meme">
<noscript>
<img src=img\i_told_you.avif width=216 height=216 alt="funny meme">
</noscript>
</amp-img>
</div>
</div>
<div class="card-social content content-4">
<div class=card-front>
<div class="fa-brands fa-tiktok"></div>
<h2>Tiktok</h2>
<p>@dog.on.solana</p>
<a class=follow href=https://www.tiktok.com/@dog.on.solana target=_blank rel=noopener>Follow</a>
</div>
<div class=card-back>
<amp-img src=img\princess.avif width=216 height=216 alt="funny meme">
<noscript>
<img src=img\princess.avif width=216 height=216 alt="funny meme">
</noscript>
</amp-img>
</div>
</div>
</div>
</div>
</section>
<section id=buy class=buy>

<div class=max-width>
<div class="column left" id=card >
<!-- <amp-img src=img\no_dog.avif width=500 height=500 layout=responsive id=img-placeholder alt=placeholder>
<noscript>
<img src=img\no_dog.avif width=300 id=img-placeholder height=300 alt=placeholder>
</noscript>
</amp-img>
<div class=card-front>
<amp-img src=img\no_dog.avif width=500 height=500 layout=responsive alt="no dogs? 🤣">
<noscript>
<img src=img\no_dog.avif width=300 height=300 alt="no dogs? 🤣">
</noscript>
</amp-img>
</div>
<div class=card-back>
<amp-img src=img\solana_goated.avif width=500 height=500 layout=responsive alt="ethereum sucks lol">
<noscript>
<img src=img\solana_goated.avif width=300 height=300 alt="ethereum sucks lol">
</noscript>
</amp-img>
</div> -->
<video src="video\DOG could be dream.mp4" loop controls autoplay muted></video>
</div>
<div class="column right">
<div id=integrated-terminal></div>
<div class=buy-links>
<a class=buy-website href=https://jup.ag/swap/SOL-vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS target=_blank rel=noopener id=jupiter-link>Jupiter Swap</a>
<a class=buy-website href="https://raydium.io/swap/?inputCurrency=sol&outputCurrency=vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS&inputAmount=0&fixed=in" target=_blank rel=noopener id=raydium-link>Raydium</a>
</div>
</div>
</div>

</section>
<div id=funny-wrapper></div>
<footer>
<h5>DOG @2024</h5>
<h5 class=ca>CA: vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS</h5>
</footer>
</body>
<script src="script.js?v=1.0.0"></script>
<script src=https://terminal.jup.ag/main-v2.js></script>
<script defer>window.Jupiter.init({displayMode:"integrated",integratedTargetId:"integrated-terminal",endpoint:"https://mainnet.helius-rpc.com/?api-key=a090963e-15aa-4348-b5e2-31c7aafbb457",strictTokenList:!1,formProps:{initialInputMint:"So11111111111111111111111111111111111111112",initialOutputMint:"vEerjGVUQy1AuGXtyrgj5szKrGD3rTuyo2QqhdcHZSS",fixedOutputMint:!0}})</script>
</html>