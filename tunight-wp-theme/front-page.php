<?php
/**
 * Original TUNIGHT homepage adapted for WordPress.
 * Migration branch only; original static site and main branch remain untouched.
 */
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo esc_html(get_bloginfo('name') ?: 'TUNIGHT — Terrace Restro & Banquet'); ?></title>
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700&family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400;1,500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri() . '/assets/global.css'); ?>">
<?php wp_head(); ?>
<style>


:root{
    --green:#09271d;
    --green-2:#103b2d;
    --green-3:#174936;

    --gold:#c7a766;
    --gold-light:#dfc98f;

    --cream:#f3eee3;
    --cream-light:#faf8f2;

    --white:#ffffff;
    --black:#07100c;

    --text:#17231e;
    --muted:#707872;

    --line:rgba(23,35,30,.14);

    --container:1280px;
}

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}

html{
    scroll-behavior:smooth;
}

body{
    background:var(--cream);
    color:var(--text);
    font-family:"DM Sans",sans-serif;
    overflow-x:hidden;
}

img{
    display:block;
    width:100%;
}

a{
    color:inherit;
    text-decoration:none;
}

button{
    font:inherit;
}

.container{
    width:min(var(--container),90%);
    margin:auto;
}

/* IMAGE */

.photo{
    position:relative;
    overflow:hidden;
    background:
        linear-gradient(
            135deg,
            #12382b,
            #071811
        );
}

.photo::before{
    content:"TUNIGHT";
    position:absolute;
    inset:0;
    display:grid;
    place-items:center;
    color:rgba(255,255,255,.18);
    font-family:"Playfair Display",serif;
    font-size:30px;
    letter-spacing:.08em;
    z-index:0;
}

.photo img{
    position:relative;
    z-index:1;
    height:100%;
    object-fit:cover;
}

.photo img[src=""]{
    display:none;
}

/* HEADER */

.header{
    position:absolute;
    top:0;
    left:0;
    width:100%;
    z-index:100;
    color:white;
    border-bottom:1px solid rgba(255,255,255,.15);
}

.nav{
    min-height:88px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    gap:30px;
}

.logo{
    font-family:"Playfair Display",serif;
    font-size:31px;
    letter-spacing:-1.5px;
    white-space:nowrap;
}

.logo span{
    color:var(--gold-light);
}

.nav-links{
    display:flex;
    align-items:center;
    gap:28px;
}

.nav-links a{
    position:relative;
    font-size:10px;
    font-weight:700;
    letter-spacing:.13em;
    text-transform:uppercase;
    color:#f7f6f0;
}

.nav-links a::after{
    content:"";
    position:absolute;
    left:0;
    bottom:-9px;
    width:0;
    height:1px;
    background:var(--gold-light);
    transition:.3s;
}

.nav-links a:hover::after,
.nav-links a.active::after{
    width:100%;
}

.nav-right{
    display:flex;
    align-items:center;
    gap:12px;
}

.cart{
    width:42px;
    height:42px;
    border:1px solid rgba(255,255,255,.28);
    border-radius:50%;
    display:grid;
    place-items:center;
    font-size:15px;
}

.header-button{
    padding:14px 21px;
    background:var(--gold);
    color:var(--green);
    font-size:10px;
    font-weight:700;
    letter-spacing:.13em;
    text-transform:uppercase;
}

.menu-button{
    display:none;
    width:42px;
    height:42px;
    border:1px solid rgba(255,255,255,.3);
    background:transparent;
    color:white;
    cursor:pointer;
}

/* MOBILE MENU */

.mobile-menu{
    position:fixed;
    inset:0;
    z-index:1000;
    background:var(--green);
    color:white;
    padding:24px;
    transform:translateX(100%);
    transition:.4s ease;
}

.mobile-menu.open{
    transform:translateX(0);
}

.mobile-menu-top{
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.mobile-close{
    width:42px;
    height:42px;
    border:1px solid rgba(255,255,255,.25);
    background:transparent;
    color:white;
    font-size:25px;
}

.mobile-links{
    margin-top:55px;
}

.mobile-links a{
    display:block;
    padding:17px 0;
    border-bottom:1px solid rgba(255,255,255,.1);
    font-family:"Playfair Display",serif;
    font-size:34px;
}

/* EYEBROW */

.eyebrow{
    display:flex;
    align-items:center;
    gap:12px;
    color:var(--gold-light);
    font-size:10px;
    font-weight:700;
    letter-spacing:.23em;
    text-transform:uppercase;
}

.eyebrow::before{
    content:"";
    width:44px;
    height:1px;
    background:var(--gold);
}

/* HERO */

.hero{
    min-height:100vh;
    position:relative;
    display:flex;
    align-items:center;
    color:white;
    background:var(--green);
    overflow:hidden;
}

.hero-photo{
    position:absolute;
    inset:0;
}

.hero-photo img{
    height:100%;
    object-fit:cover;
    object-position:center;
    animation:heroScale 12s ease-out forwards;
}

@keyframes heroScale{
    from{
        transform:scale(1.08);
    }

    to{
        transform:scale(1);
    }
}

.hero-overlay{
    position:absolute;
    inset:0;
    background:
        linear-gradient(
            90deg,
            rgba(2,17,12,.95),
            rgba(2,17,12,.62) 48%,
            rgba(2,17,12,.22)
        ),
        linear-gradient(
            0deg,
            rgba(2,17,12,.75),
            transparent 55%
        );
}

.hero-content{
    position:relative;
    z-index:2;
    padding-top:75px;
}

.hero h1{
    max-width:900px;
    margin-top:28px;
    font-family:"Playfair Display",serif;
    font-size:clamp(70px,9.8vw,140px);
    line-height:.82;
    font-weight:400;
    letter-spacing:-.075em;
}

.hero h1 em{
    color:var(--gold-light);
}

.hero-text{
    max-width:550px;
    margin-top:38px;
    color:#d1d8d3;
    font-size:17px;
    line-height:1.85;
}

.hero-buttons{
    display:flex;
    gap:12px;
    margin-top:38px;
}

.button{
    min-height:53px;
    padding:0 27px;
    display:inline-flex;
    align-items:center;
    justify-content:center;
    font-size:10px;
    font-weight:700;
    letter-spacing:.14em;
    text-transform:uppercase;
}

.button-gold{
    background:var(--gold);
    color:var(--green);
}

.button-outline{
    border:1px solid rgba(255,255,255,.45);
    color:white;
}

.hero-bottom{
    position:absolute;
    left:0;
    right:0;
    bottom:28px;
    z-index:3;
}

.hero-bottom-inner{
    display:flex;
    justify-content:space-between;
    align-items:center;
    color:#bbc5bf;
    font-size:9px;
    letter-spacing:.14em;
    text-transform:uppercase;
}

.scroll{
    display:flex;
    align-items:center;
    gap:12px;
}

.scroll span{
    width:45px;
    height:1px;
    background:var(--gold);
}

/* INTRO */

.intro{
    padding:150px 0;
    background:var(--cream-light);
}

.intro-grid{
    display:grid;
    grid-template-columns:70px 1.2fr .8fr;
    gap:65px;
}

.vertical{
    writing-mode:vertical-rl;
    transform:rotate(180deg);
    color:var(--gold);
    font-size:10px;
    font-weight:700;
    letter-spacing:.18em;
    text-transform:uppercase;
}

.intro h2{
    font-family:"Playfair Display",serif;
    font-size:clamp(58px,6.5vw,90px);
    line-height:.91;
    font-weight:400;
    letter-spacing:-.065em;
}

.intro h2 em{
    color:var(--gold);
}

.intro-copy{
    padding-top:5px;
}

.intro-copy h3{
    font-family:"Playfair Display",serif;
    font-size:29px;
    font-weight:400;
    line-height:1.35;
}

.intro-copy p{
    margin-top:22px;
    color:var(--muted);
    font-size:16px;
    line-height:1.9;
}

/* EXPERIENCE */

.experience{
    padding:145px 0 0;
    background:var(--green);
    color:white;
}

.section-heading{
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
    gap:50px;
    margin-bottom:68px;
}

.section-heading h2{
    margin-top:20px;
    font-family:"Playfair Display",serif;
    font-size:clamp(58px,6.5vw,90px);
    font-weight:400;
    line-height:.87;
    letter-spacing:-.065em;
}

.section-heading h2 em{
    color:var(--gold-light);
}

.section-heading p{
    max-width:430px;
    color:#abb8b1;
    font-size:16px;
    line-height:1.85;
}

.experience-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
}

.experience-card{
    height:650px;
    position:relative;
    overflow:hidden;
}

.experience-card .photo{
    position:absolute;
    inset:0;
}

.experience-card .photo img{
    transition:.8s;
}

.experience-card:hover .photo img{
    transform:scale(1.05);
}

.experience-card::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(
        0deg,
        rgba(2,17,12,.94),
        rgba(2,17,12,.05) 68%
    );
}

.experience-info{
    position:absolute;
    left:45px;
    right:45px;
    bottom:43px;
    z-index:2;
}

.experience-number{
    color:var(--gold-light);
    font-size:10px;
    letter-spacing:.2em;
}

.experience-info h3{
    margin-top:11px;
    font-family:"Playfair Display",serif;
    font-size:47px;
    font-weight:400;
}

.experience-info p{
    max-width:480px;
    margin-top:13px;
    color:#c3ccc7;
    font-size:15px;
    line-height:1.8;
}

.text-link{
    display:inline-block;
    margin-top:21px;
    color:var(--gold-light);
    font-size:10px;
    font-weight:700;
    letter-spacing:.14em;
    text-transform:uppercase;
}

/* FOOD */

.food{
    padding:150px 0;
    background:var(--cream);
}

.food-grid{
    display:grid;
    grid-template-columns:1fr 1fr;
    gap:90px;
    align-items:center;
}

.food-image{
    height:680px;
}

.food-image::after{
    content:"";
    position:absolute;
    inset:24px;
    border:1px solid rgba(255,255,255,.55);
    z-index:3;
    pointer-events:none;
}

.food-image img{
    transition:.7s;
}

.food-image:hover img{
    transform:scale(1.035);
}

.food-content h2{
    margin-top:20px;
    font-family:"Playfair Display",serif;
    font-size:clamp(58px,6.5vw,90px);
    line-height:.88;
    font-weight:400;
    letter-spacing:-.065em;
}

.food-content h2 em{
    color:var(--gold);
}

.food-content>p{
    max-width:530px;
    margin-top:30px;
    color:var(--muted);
    font-size:16px;
    line-height:1.9;
}

.food-list{
    margin-top:40px;
    border-top:1px solid var(--line);
}

.food-item{
    display:flex;
    justify-content:space-between;
    gap:25px;
    padding:20px 0;
    border-bottom:1px solid var(--line);
}

.food-item h4{
    font-family:"Playfair Display",serif;
    font-size:21px;
    font-weight:400;
}

.food-item small{
    display:block;
    margin-top:5px;
    color:var(--muted);
    font-size:11px;
}

.price{
    color:var(--gold);
    white-space:nowrap;
}

/* BANQUET */

.banquet{
    min-height:720px;
    position:relative;
    display:flex;
    align-items:center;
    color:white;
    overflow:hidden;
}

.banquet-photo{
    position:absolute;
    inset:0;
}

.banquet-photo img{
    height:100%;
    object-fit:cover;
}

.banquet-overlay{
    position:absolute;
    inset:0;
    background:
        linear-gradient(
            90deg,
            rgba(2,17,12,.96),
            rgba(2,17,12,.58) 58%,
            rgba(2,17,12,.18)
        );
}

.banquet-content{
    position:relative;
    z-index:2;
}

.banquet-inner{
    max-width:800px;
}

.banquet h2{
    margin-top:20px;
    font-family:"Playfair Display",serif;
    font-size:clamp(62px,7.4vw,106px);
    line-height:.84;
    font-weight:400;
    letter-spacing:-.07em;
}

.banquet h2 em{
    color:var(--gold-light);
}

.banquet p{
    max-width:570px;
    margin-top:30px;
    color:#c1cbc5;
    font-size:17px;
    line-height:1.85;
}

.stats{
    display:flex;
    gap:55px;
    margin-top:43px;
}

.stat strong{
    display:block;
    color:var(--gold-light);
    font-family:"Playfair Display",serif;
    font-size:40px;
    font-weight:400;
}

.stat span{
    display:block;
    margin-top:5px;
    color:#a9b5ae;
    font-size:10px;
    letter-spacing:.13em;
    text-transform:uppercase;
}

/* OCCASIONS */

.occasions{
    padding:150px 0;
    background:var(--cream-light);
}

.center{
    max-width:850px;
    margin:auto;
    text-align:center;
}

.center .eyebrow{
    justify-content:center;
}

.center h2{
    margin-top:20px;
    font-family:"Playfair Display",serif;
    font-size:clamp(58px,6.5vw,90px);
    line-height:.89;
    font-weight:400;
    letter-spacing:-.065em;
}

.center h2 em{
    color:var(--gold);
}

.center p{
    max-width:570px;
    margin:28px auto 0;
    color:var(--muted);
    font-size:16px;
    line-height:1.9;
}

.occasion-grid{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:16px;
    margin-top:75px;
}

.occasion{
    height:480px;
    position:relative;
    overflow:hidden;
}

.occasion .photo{
    position:absolute;
    inset:0;
}

.occasion img{
    transition:.7s;
}

.occasion:hover img{
    transform:scale(1.05);
}

.occasion::after{
    content:"";
    position:absolute;
    inset:0;
    background:linear-gradient(
        0deg,
        rgba(2,17,12,.88),
        transparent 65%
    );
}

.occasion-info{
    position:absolute;
    left:30px;
    right:30px;
    bottom:30px;
    z-index:2;
    color:white;
}

.occasion-info small{
    color:var(--gold-light);
    font-size:10px;
    letter-spacing:.2em;
}

.occasion-info h3{
    margin-top:9px;
    font-family:"Playfair Display",serif;
    font-size:32px;
    font-weight:400;
}

/* GALLERY */

.gallery{
    padding:145px 0;
    background:var(--green);
    color:white;
}

.gallery-top{
    display:flex;
    justify-content:space-between;
    align-items:flex-end;
    gap:50px;
    margin-bottom:65px;
}

.gallery-top h2{
    margin-top:20px;
    font-family:"Playfair Display",serif;
    font-size:clamp(58px,6.5vw,90px);
    line-height:.88;
    font-weight:400;
    letter-spacing:-.065em;
}

.gallery-top h2 em{
    color:var(--gold-light);
}

.gallery-top p{
    max-width:360px;
    color:#aeb9b3;
    font-size:15px;
    line-height:1.8;
}

.gallery-grid{
    display:grid;
    grid-template-columns:1.15fr .85fr .95fr;
    grid-template-rows:310px 310px;
    gap:14px;
}

.gallery-item{
    position:relative;
    overflow:hidden;
}

.gallery-item.tall{
    grid-row:span 2;
}

.gallery-item.wide{
    grid-column:span 2;
}

.gallery-item img{
    height:100%;
    object-fit:cover;
    transition:.7s;
}

.gallery-item:hover img{
    transform:scale(1.05);
}

.gallery-more{
    text-align:center;
    margin-top:45px;
}

/* TESTIMONIAL */

.testimonial{
    padding:150px 0;
    background:var(--cream);
}

.testimonial-grid{
    display:grid;
    grid-template-columns:.75fr 1.25fr;
    gap:100px;
}

.testimonial-title h2{
    margin-top:20px;
    font-family:"Playfair Display",serif;
    font-size:clamp(55px,6vw,82px);
    line-height:.88;
    font-weight:400;
    letter-spacing:-.065em;
}

.testimonial-title h2 em{
    color:var(--gold);
}

.rating{
    margin-top:42px;
}

.rating-number{
    font-family:"Playfair Display",serif;
    font-size:76px;
}

.stars{
    margin-top:3px;
    color:var(--gold);
    font-size:20px;
    letter-spacing:4px;
}

.rating-note{
    margin-top:7px;
    color:var(--muted);
    font-size:11px;
}

.reviews{
    border-top:1px solid var(--line);
}

.review{
    padding:30px 0;
    border-bottom:1px solid var(--line);
}

.review-top{
    display:flex;
    justify-content:space-between;
}

.review-name{
    font-size:13px;
    font-weight:700;
}

.review-stars{
    color:var(--gold);
}

.review p{
    max-width:700px;
    margin-top:15px;
    font-family:"Playfair Display",serif;
    font-size:23px;
    line-height:1.55;
}

/* FINAL */

.final{
    padding:135px 0;
    background:var(--green);
    color:white;
    text-align:center;
}

.final .eyebrow{
    justify-content:center;
}

.final h2{
    max-width:900px;
    margin:25px auto 0;
    font-family:"Playfair Display",serif;
    font-size:clamp(65px,8vw,112px);
    line-height:.84;
    font-weight:400;
    letter-spacing:-.07em;
}

.final h2 em{
    color:var(--gold-light);
}

.final p{
    max-width:530px;
    margin:30px auto 0;
    color:#aeb9b2;
    font-size:16px;
    line-height:1.8;
}

.final-buttons{
    display:flex;
    justify-content:center;
    gap:12px;
    margin-top:35px;
}

/* FOOTER */

.footer{
    padding:80px 0 25px;
    background:#03130e;
    color:white;
}

.footer-grid{
    display:grid;
    grid-template-columns:1.5fr .7fr .7fr .9fr;
    gap:60px;
}

.footer-logo{
    font-family:"Playfair Display",serif;
    font-size:37px;
}

.footer-logo span{
    color:var(--gold);
}

.footer-description{
    max-width:360px;
    margin-top:18px;
    color:#7d8a83;
    font-size:14px;
    line-height:1.8;
}

.footer h4{
    margin-bottom:20px;
    color:#d7d0c1;
    font-size:10px;
    letter-spacing:.17em;
    text-transform:uppercase;
}

.footer-links{
    display:grid;
    gap:12px;
}

.footer-links a{
    color:#84918b;
    font-size:13px;
}

.footer-links a:hover{
    color:var(--gold-light);
}

.footer-bottom{
    display:flex;
    justify-content:space-between;
    margin-top:60px;
    padding-top:22px;
    border-top:1px solid rgba(255,255,255,.1);
    color:#5f6d66;
    font-size:11px;
}

/* RESPONSIVE */

@media(max-width:1100px){

    .nav-links{
        gap:17px;
    }

    .nav-links a{
        font-size:8px;
    }

    .intro-grid{
        grid-template-columns:45px 1fr 1fr;
        gap:35px;
    }

    .food-grid{
        gap:50px;
    }

}

@media(max-width:850px){

    .nav-links,
    .header-button{
        display:none;
    }

    .menu-button{
        display:block;
    }

    .intro-grid,
    .food-grid,
    .testimonial-grid{
        grid-template-columns:1fr;
    }

    .vertical{
        writing-mode:initial;
        transform:none;
    }

    .experience-grid{
        grid-template-columns:1fr;
    }

    .experience-card{
        height:560px;
    }

    .occasion-grid{
        grid-template-columns:1fr;
    }

    .gallery-grid{
        grid-template-columns:1fr 1fr;
        grid-template-rows:300px 300px 300px;
    }

    .gallery-item.tall{
        grid-row:span 2;
    }

    .gallery-item.wide{
        grid-column:span 2;
    }

    .footer-grid{
        grid-template-columns:1fr 1fr;
    }

}

@media(max-width:600px){

    .container{
        width:calc(100% - 40px);
    }

    .nav{
        min-height:76px;
    }

    .logo{
        font-size:28px;
    }

    .hero{
        min-height:720px;
    }

    .hero-content{
        padding-top:45px;
    }

    .hero h1{
        font-size:62px;
    }

    .hero-text{
        font-size:15px;
    }

    .hero-buttons{
        flex-wrap:wrap;
    }

    .hero-bottom-inner>div:last-child{
        display:none;
    }

    .intro,
    .experience,
    .food,
    .occasions,
    .gallery,
    .testimonial,
    .final{
        padding:90px 0;
    }

    .section-heading,
    .gallery-top{
        display:block;
    }

    .section-heading p,
    .gallery-top p{
        margin-top:25px;
    }

    .experience-card{
        height:500px;
    }

    .experience-info{
        left:25px;
        right:25px;
        bottom:30px;
    }

    .experience-info h3{
        font-size:38px;
    }

    .food-image{
        height:430px;
    }

    .banquet{
        min-height:650px;
    }

    .stats{
        gap:25px;
        flex-wrap:wrap;
    }

    .stat strong{
        font-size:32px;
    }

    .occasion{
        height:430px;
    }

    .gallery-grid{
        grid-template-rows:220px 220px 220px;
    }

    .review p{
        font-size:20px;
    }

    .final-buttons{
        flex-wrap:wrap;
    }

    .footer-grid{
        grid-template-columns:1fr;
        gap:35px;
    }

    .footer-bottom{
        display:block;
        line-height:2;
    }

}


</style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>


<!-- TUNIGHT cinematic entry overlay: entry experience only; the original website remains underneath -->
<div id="tn-entry" aria-label="TUNIGHT opening intro">
  <div class="tn-door tn-door-l"></div><div class="tn-door tn-door-r"></div>
  <div class="tn-flare" aria-hidden="true"></div><div class="tn-seam" aria-hidden="true"></div><div class="tn-embers" id="tn-embers" aria-hidden="true"></div>
  <section id="tn-entry-content" aria-label="Tunight intro">
    <div class="tn-stage">
      <svg id="tn-svg" viewBox="0 0 900 250" role="img" aria-label="TUNIGHT">
        <defs><clipPath id="tn-clip"><text id="tn-tc" y="190" font-family="'Playfair Display',Georgia,serif" font-weight="700" font-size="170">TUN<tspan id="tn-tcl">l</tspan>GHT</text></clipPath></defs>
        <text id="tn-to" class="tn-outline" y="190" font-family="'Playfair Display',Georgia,serif" font-weight="700" font-size="170">TUN<tspan id="tn-tol">l</tspan>GHT</text>
        <g clip-path="url(#tn-clip)"><g id="tn-water" transform="translate(0,270)"><path id="tn-w2" class="tn-wave tn-wave-b" fill="#8f1810"></path><path id="tn-w1" class="tn-wave" fill="#e5281d"></path></g></g>
        <text id="tn-tu" y="190" font-family="'Playfair Display',Georgia,serif" font-weight="700" font-size="170">TU</text>
        <g id="tn-dx" style="opacity:0"><g id="tn-dy"><circle id="tn-dotc" cx="0" cy="-14" r="14" fill="#e5281d"/></g></g>
      </svg>
      <div class="tn-count"><span id="tn-pct">0%</span><i><b id="tn-bar"></b></i><span>POURING</span></div>
      <p class="tn-tag tn-fade" id="tn-tag">Where the evening <em>begins.</em></p>
      <p class="tn-sub tn-fade" id="tn-sub">Dinners, celebrations and late conversations.</p>
      <div class="tn-act tn-fade" id="tn-act"><button class="tn-enter" id="tn-enter" type="button">OPEN THE DOORS</button></div>
    </div>
  </section>
</div>


<!-- HEADER -->

<header class="header">

    <div class="container nav">

        <a href="<?php echo esc_url(home_url('/')); ?>" class="logo">
            TU<span>NIGHT</span>
        </a>

        <nav class="nav-links">

            <a href="<?php echo esc_url(home_url('/')); ?>" class="active">Home</a>

            <a href="<?php echo esc_url(home_url('/menu/')); ?>">Menu</a>

            <a href="<?php echo esc_url(home_url('/events/')); ?>">Experiences</a>

            <a href="<?php echo esc_url(home_url('/gallery/')); ?>">Gallery</a>

            <a href="<?php echo esc_url(home_url('/offers/')); ?>">Offers</a>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>

        </nav>

        <div class="nav-right">

            <a href="<?php echo esc_url(home_url('/cart/')); ?>" class="cart">
                🛒
            </a>

            <a href="<?php echo esc_url(home_url('/booking/')); ?>" class="header-button">
                Reserve
            </a>

            <button class="menu-button" id="menuOpen">
                ☰
            </button>

        </div>

    </div>

</header>


<!-- MOBILE MENU -->

<div class="mobile-menu" id="mobileMenu">

    <div class="mobile-menu-top">

        <div class="logo">
            TU<span>NIGHT</span>
        </div>

        <button class="mobile-close" id="menuClose">
            ×
        </button>

    </div>

    <nav class="mobile-links">

        <a href="<?php echo esc_url(home_url('/')); ?>">Home</a>

        <a href="<?php echo esc_url(home_url('/menu/')); ?>">Menu</a>

        <a href="<?php echo esc_url(home_url('/events/')); ?>">Experiences</a>

        <a href="<?php echo esc_url(home_url('/gallery/')); ?>">Gallery</a>

        <a href="<?php echo esc_url(home_url('/offers/')); ?>">Offers</a>

        <a href="<?php echo esc_url(home_url('/contact/')); ?>">Contact</a>

    </nav>

</div>


<!-- HERO -->

<section class="hero">

    <div class="hero-photo photo">

        <img onerror="this.style.display='none'"
            src="assets/images/hero.jpg"
            alt="TUNIGHT Terrace Restro and Banquet">

    </div>

    <div class="hero-overlay"></div>

    <div class="container hero-content">

        <div class="eyebrow">
            Terrace Dining · Raj Nagar · Ghaziabad
        </div>

        <h1>
            Tonight is<br>
            for <em>living.</em>
        </h1>

        <p class="hero-text">
            Rooftop dining, unforgettable celebrations and food
            made for long evenings. Welcome to TUNIGHT.
        </p>

        <div class="hero-buttons">

            <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="button button-gold">
                Explore Menu
            </a>

            <a href="#experience" class="button button-outline">
                Discover TUNIGHT
            </a>

        </div>

    </div>

    <div class="hero-bottom">

        <div class="container hero-bottom-inner">

            <div>
                Raj Nagar · Ghaziabad
            </div>

            <div class="scroll">
                <span></span>
                Scroll to explore
            </div>

            <div>
                Dining · Events · Banquets
            </div>

        </div>

    </div>

</section>


<!-- INTRO -->

<section class="intro">

    <div class="container intro-grid">

        <div class="vertical">
            01 — The TUNIGHT Experience
        </div>

        <div>

            <h2>
                More than dinner.<br>
                It's an <em>evening.</em>
            </h2>

        </div>

        <div class="intro-copy">

            <h3>
                A place where the city slows down after sunset.
            </h3>

            <p>
                TUNIGHT brings together rooftop dining,
                great vegetarian food, celebrations and
                a setting designed to make people stay longer.
            </p>

            <p>
                Come for dinner. Stay for the atmosphere.
                Leave with another night worth remembering.
            </p>

        </div>

    </div>

</section>


<!-- EXPERIENCE -->

<section class="experience" id="experience">

    <div class="container">

        <div class="section-heading">

            <div>

                <div class="eyebrow">
                    02 — Experience
                </div>

                <h2>
                    Choose your<br>
                    kind of <em>night.</em>
                </h2>

            </div>

            <p>
                From an intimate rooftop dinner to a full celebration,
                TUNIGHT has a space for every kind of evening.
            </p>

        </div>

    </div>


    <div class="experience-grid">

        <a href="<?php echo esc_url(home_url('/rooftop/')); ?>" class="experience-card">

            <div class="photo">

                <img onerror="this.style.display='none'"
                    src="assets/images/rooftop.jpg"
                    alt="TUNIGHT rooftop">

            </div>

            <div class="experience-info">

                <div class="experience-number">
                    01 / ROOFTOP
                </div>

                <h3>
                    Dine under<br>
                    the stars.
                </h3>

                <p>
                    A relaxed rooftop atmosphere for dinners,
                    conversations and evenings that don't need to end early.
                </p>

                <span class="text-link">
                    Explore rooftop →
                </span>

            </div>

        </a>


        <a href="<?php echo esc_url(home_url('/events/')); ?>" class="experience-card">

            <div class="photo">

                <img onerror="this.style.display='none'"
                    src="assets/images/banquet.jpg"
                    alt="TUNIGHT banquet">

            </div>

            <div class="experience-info">

                <div class="experience-number">
                    02 / CELEBRATIONS
                </div>

                <h3>
                    Make it a<br>
                    night to remember.
                </h3>

                <p>
                    Birthdays, corporate events, family gatherings
                    and special celebrations under one roof.
                </p>

                <span class="text-link">
                    Explore events →
                </span>

            </div>

        </a>

    </div>

</section>


<!-- FOOD -->

<section class="food">

    <div class="container food-grid">

        <div class="food-image photo">

            <img onerror="this.style.display='none'"
                src="assets/images/food-01.jpg"
                alt="TUNIGHT food">

        </div>


        <div class="food-content">

            <div class="eyebrow">
                03 — From The Kitchen
            </div>

            <h2>
                Made to be<br>
                <em>shared.</em>
            </h2>

            <p>
                Explore Indian favourites, Tandoor,
                Chinese, Continental dishes and vegetarian
                plates created for everything from quick
                dinners to full tables.
            </p>

            <div class="food-list">

                <div class="food-item">

                    <div>

                        <h4>Paneer Tikka</h4>

                        <small>
                            Achari · Pudina
                        </small>

                    </div>

                    <div class="price">
                        ₹349
                    </div>

                </div>


                <div class="food-item">

                    <div>

                        <h4>Tandoori Mushroom</h4>

                        <small>
                            Achari
                        </small>

                    </div>

                    <div class="price">
                        ₹299
                    </div>

                </div>


                <div class="food-item">

                    <div>

                        <h4>Malai Chaap</h4>

                        <small>
                            Chef Favourite
                        </small>

                    </div>

                    <div class="price">
                        ₹299
                    </div>

                </div>


                <div class="food-item">

                    <div>

                        <h4>Tandoori Veg Platter</h4>

                        <small>
                            Perfect for sharing
                        </small>

                    </div>

                    <div class="price">
                        ₹599
                    </div>

                </div>

            </div>

            <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="button button-gold" style="margin-top:30px;">
                View Full Menu
            </a>

        </div>

    </div>

</section>


<!-- BANQUET -->

<section class="banquet">

    <div class="banquet-photo photo">

        <img onerror="this.style.display='none'"
            src="assets/images/banquet-main.jpg"
            alt="TUNIGHT banquet hall">

    </div>

    <div class="banquet-overlay"></div>

    <div class="container banquet-content">

        <div class="banquet-inner">

            <div class="eyebrow">
                04 — Banquets & Events
            </div>

            <h2>
                Your next<br>
                big <em>moment.</em>
            </h2>

            <p>
                Birthdays, corporate evenings, family functions,
                farewell parties and celebrations — bring everyone
                together in a space designed for the occasion.
            </p>

            <div class="stats">

                <div class="stat">

                    <strong>
                        10–150
                    </strong>

                    <span>
                        Guests
                    </span>

                </div>

                <div class="stat">

                    <strong>
                        DJ
                    </strong>

                    <span>
                        Available
                    </span>

                </div>

                <div class="stat">

                    <strong>
                        Catering
                    </strong>

                    <span>
                        Available
                    </span>

                </div>

            </div>

            <div class="hero-buttons">

                <a href="<?php echo esc_url(home_url('/events/')); ?>" class="button button-gold">
                    Explore Events
                </a>

            </div>

        </div>

    </div>

</section>


<!-- OCCASIONS -->

<section class="occasions">

    <div class="container">

        <div class="center">

            <div class="eyebrow">
                05 — Made For Moments
            </div>

            <h2>
                Whatever the occasion,<br>
                make it <em>TUNIGHT.</em>
            </h2>

            <p>
                Different occasions. Different moods.
                One place that brings everyone together.
            </p>

        </div>


        <div class="occasion-grid">

            <a href="events.html#birthdays" class="occasion">

                <div class="photo">

                    <img onerror="this.style.display='none'"
                        src="assets/images/event-01.jpg"
                        alt="Birthday celebration">

                </div>

                <div class="occasion-info">

                    <small>
                        01
                    </small>

                    <h3>
                        Birthdays
                    </h3>

                </div>

            </a>


            <a href="events.html#corporate" class="occasion">

                <div class="photo">

                    <img onerror="this.style.display='none'"
                        src="assets/images/event-02.jpg"
                        alt="Corporate event">

                </div>

                <div class="occasion-info">

                    <small>
                        02
                    </small>

                    <h3>
                        Corporate Nights
                    </h3>

                </div>

            </a>


            <a href="events.html#family" class="occasion">

                <div class="photo">

                    <img onerror="this.style.display='none'"
                        src="assets/images/event-03.jpg"
                        alt="Family celebration">

                </div>

                <div class="occasion-info">

                    <small>
                        03
                    </small>

                    <h3>
                        Family Celebrations
                    </h3>

                </div>

            </a>

        </div>

    </div>

</section>


<!-- GALLERY -->

<section class="gallery">

    <div class="container">

        <div class="gallery-top">

            <div>

                <div class="eyebrow">
                    06 — Inside TUNIGHT
                </div>

                <h2>
                    See the<br>
                    <em>night.</em>
                </h2>

            </div>

            <p>
                A glimpse into the spaces, food, celebrations
                and atmosphere that make TUNIGHT what it is.
            </p>

        </div>


        <div class="gallery-grid">

            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="gallery-item tall photo">

                <img onerror="this.style.display='none'"
                    src="assets/images/gallery-01.jpg"
                    alt="TUNIGHT gallery">

            </a>


            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="gallery-item photo">

                <img onerror="this.style.display='none'"
                    src="assets/images/gallery-02.jpg"
                    alt="TUNIGHT ambience">

            </a>


            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="gallery-item photo">

                <img onerror="this.style.display='none'"
                    src="assets/images/gallery-03.jpg"
                    alt="TUNIGHT dining">

            </a>


            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="gallery-item wide photo">

                <img onerror="this.style.display='none'"
                    src="assets/images/gallery-04.jpg"
                    alt="TUNIGHT celebration">

            </a>

        </div>


        <div class="gallery-more">

            <a href="<?php echo esc_url(home_url('/gallery/')); ?>" class="button button-outline">
                View Full Gallery
            </a>

        </div>

    </div>

</section>


<!-- REVIEWS -->

<section class="testimonial">

    <div class="container testimonial-grid">

        <div class="testimonial-title">

            <div class="eyebrow">
                07 — Guest Notes
            </div>

            <h2>
                Good nights<br>
                are <em>remembered.</em>
            </h2>

            <div class="rating">

                <div class="rating-number">
                    4.3
                </div>

                <div class="stars">
                    ★★★★★
                </div>

                <div class="rating-note">
                    Google rating · 251+ reviews
                </div>

            </div>

        </div>


        <div class="reviews">

            <div class="review">

                <div class="review-top">

                    <div class="review-name">
                        Guest Review
                    </div>

                    <div class="review-stars">
                        ★★★★★
                    </div>

                </div>

                <p>
                    “Good food, excellent service, very good atmosphere
                    and a very good experience.”
                </p>

            </div>


            <div class="review">

                <div class="review-top">

                    <div class="review-name">
                        Guest Review
                    </div>

                    <div class="review-stars">
                        ★★★★★
                    </div>

                </div>

                <p>
                    “Very nice staff and food quality is also good.”
                </p>

            </div>


            <div class="review">

                <div class="review-top">

                    <div class="review-name">
                        Guest Review
                    </div>

                    <div class="review-stars">
                        ★★★★★
                    </div>

                </div>

                <p>
                    “The ambience, food and overall experience
                    made the evening memorable.”
                </p>

            </div>

        </div>

    </div>

</section>


<!-- FINAL CTA -->

<section class="final">

    <div class="container">

        <div class="eyebrow">
            08 — Your Evening Starts Here
        </div>

        <h2>
            Make tonight<br>
            <em>worth remembering.</em>
        </h2>

        <p>
            Discover the food, atmosphere and celebrations
            waiting for you at TUNIGHT.
        </p>

        <div class="final-buttons">

            <a href="<?php echo esc_url(home_url('/menu/')); ?>" class="button button-gold">
                Explore Menu
            </a>

            <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="button button-outline">
                Get In Touch
            </a>

        </div>

    </div>

</section>


<!-- FOOTER -->

<footer class="footer">

    <div class="container footer-grid">

        <div>

            <div class="footer-logo">
                TU<span>NIGHT</span>
            </div>

            <p class="footer-description">
                Terrace dining, food, celebrations and banquet
                experiences in Raj Nagar, Ghaziabad.
            </p>

        </div>


        <div>

            <h4>
                Explore
            </h4>

            <div class="footer-links">

                <a href="<?php echo esc_url(home_url('/menu/')); ?>">
                    Menu
                </a>

                <a href="<?php echo esc_url(home_url('/events/')); ?>">
                    Experiences
                </a>

                <a href="<?php echo esc_url(home_url('/gallery/')); ?>">
                    Gallery
                </a>

            </div>

        </div>


        <div>

            <h4>
                Discover
            </h4>

            <div class="footer-links">

                <a href="<?php echo esc_url(home_url('/offers/')); ?>">
                    Offers
                </a>

                <a href="<?php echo esc_url(home_url('/cart/')); ?>">
                    Order Online
                </a>

                <a href="<?php echo esc_url(home_url('/events/')); ?>">
                    Events
                </a>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                    Contact
                </a>

            </div>

        </div>


        <div>

            <h4>
                Visit
            </h4>

            <div class="footer-links">

                <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                    Raj Nagar, Ghaziabad
                </a>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                    Get Directions
                </a>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>">
                    Contact TUNIGHT
                </a>

            </div>

        </div>

    </div>


    <div class="container footer-bottom">

        <div>
            © 2026 TUNIGHT. All rights reserved.
        </div>

        <div>
            Raj Nagar · Ghaziabad
        </div>

    </div>

</footer>


<script>

const menuOpen = document.getElementById("menuOpen");
const menuClose = document.getElementById("menuClose");
const mobileMenu = document.getElementById("mobileMenu");

menuOpen.addEventListener("click", function(){

    mobileMenu.classList.add("open");

    document.body.style.overflow = "hidden";

});

menuClose.addEventListener("click", function(){

    mobileMenu.classList.remove("open");

    document.body.style.overflow = "";

});

document.querySelectorAll(".mobile-links a").forEach(function(link){

    link.addEventListener("click", function(){

        mobileMenu.classList.remove("open");

        document.body.style.overflow = "";

    });

});


document.querySelectorAll("img").forEach(function(image){

    image.addEventListener("error", function(){

        this.style.display = "none";

    });

});

</script>


<script>
(function(){
  if(document.querySelector('.tn-progress')) return;
  const progress=document.createElement('div');progress.className='tn-progress';document.body.appendChild(progress);
  const grain=document.createElement('div');grain.className='tn-grain';document.body.appendChild(grain);
  const sections=[...document.querySelectorAll('main section, body > section, section')];
  document.body.classList.add('reveal-ready');
  sections.forEach((el,i)=>{if(!el.classList.contains('hero')&&!el.classList.contains('menu-hero')&&!el.classList.contains('story-hero')){el.setAttribute('data-reveal','');}});
  const observer=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('is-visible');observer.unobserve(e.target);}}),{threshold:.12,rootMargin:'0px 0px -4% 0px'});
  document.querySelectorAll('[data-reveal]').forEach(el=>observer.observe(el));
  function update(){const max=document.documentElement.scrollHeight-innerHeight;progress.style.width=(max>0?scrollY/max*100:0)+'%';const h=document.querySelector('.header');if(h){h.style.background=scrollY>40?'rgba(5,8,6,.88)':'rgba(5,8,6,.64)';h.style.borderBottomColor=scrollY>40?'rgba(255,255,255,.16)':'rgba(255,255,255,.11)';}}
  window.addEventListener('scroll',update,{passive:true});window.addEventListener('resize',update);update();
  document.querySelectorAll('a[href^="#"]').forEach(a=>a.addEventListener('click',()=>{const mobile=document.querySelector('.mobile-menu');if(mobile){mobile.classList.remove('open');document.body.style.overflow='';}}));
})();
</script>
  

<script>
(function(){
  var reduce=window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  var $=function(id){return document.getElementById('tn-'+id)}, root=document.body, raf=0, timers=[], finished=false, dotAnims=[];
  var FROM=270, TO=45, geo;
  function wavePath(off){var d='M-300 0 q75 '+(-22-off)+' 150 0';for(var i=0;i<13;i++)d+=' t150 0';return d+' V 400 H -300 Z';}
  $('w1').setAttribute('d',wavePath(0));$('w2').setAttribute('d',wavePath(8));
  function layout(){
    var f=170,K=.88,els=['tc','to','tu'].map($),w;
    function size(){els.forEach(function(e){e.setAttribute('font-size',f)});['tcl','tol'].forEach(function(id){$(id).setAttribute('font-size',f*K)})}
    size();w=$('to').getComputedTextLength();
    if(w>840){f=Math.floor(f*840/w);size();w=$('to').getComputedTextLength()}
    var x=(900-w)/2;els.forEach(function(e){e.setAttribute('x',x)});
    var ext=function(n){var b=$('to').getExtentOfChar(n);return b.x+b.width/2};
    geo={r:.08*f,cap:190-.708*f,x3:ext(3),x4:ext(4),x5:ext(5)};
    geo.rest=190-.78*K*f-.04*f;
    $('dotc').setAttribute('r',geo.r);$('dotc').setAttribute('cy',-geo.r);
  }
  function later(fn,ms){timers.push(setTimeout(fn,ms))}
  function setLevel(p){$('water').setAttribute('transform','translate(0,'+(FROM+(TO-FROM)*p)+')');$('pct').textContent=Math.round(p*100)+'%';$('bar').style.width=(p*100)+'%'}
  function setDot(x,y){$('dx').style.transform='translate('+x+'px,0px)';$('dy').style.transform='translate(0px,'+y+'px)'}
  function dropDot(){
    var g=geo,dx=$('dx'),dy=$('dy'),c=g.cap;
    if(reduce){setDot(g.x3,g.rest);dx.style.opacity=1;return 0}
    var b=$('svg').getBoundingClientRect(),sc=(b.width/900)||1,offX=(innerWidth-b.left)/sc+40,D=2000;
    var UP='cubic-bezier(.2,.65,.4,1)',DN='cubic-bezier(.6,0,.85,.45)',LIN='linear',OUT='cubic-bezier(.2,.8,.3,1)';
    var X=[[0,offX],[850,g.x5],[930,g.x5],[1260,g.x4],[1340,g.x4],[1700,g.x3],[2000,g.x3]];
    var Y=[[0,c-60,1,1,UP],[380,c-170,1,1,DN],[850,c,1.35,.65,LIN],[930,c,.88,1.15,UP],[1090,c-85,1,1,DN],[1260,c,1.3,.7,LIN],[1340,c,.88,1.15,UP],[1500,c-60,1,1,DN],[1700,g.rest,1.4,.6,OUT],[1850,g.rest,.92,1.1,OUT],[2000,g.rest,1,1,OUT]];
    setDot(offX,c-60);dx.style.opacity=1;
    dotAnims=[
      dx.animate(X.map(function(k){return {offset:k[0]/D,transform:'translate('+k[1]+'px,0px)',easing:'linear'}}),{duration:D,fill:'forwards'}),
      dy.animate(Y.map(function(k){return {offset:k[0]/D,transform:'translate(0px,'+k[1]+'px) scale('+k[2]+','+k[3]+')',easing:k[4]}}),{duration:D,fill:'forwards'})
    ];
    return D;
  }
  function dropToButton(){
    var svg=$('svg'),dot=$('dx'),dy=$('dy'),button=$('enter');
    if(!svg||!dot||!dy||!button||finished)return;
    var rect=svg.getBoundingClientRect(),btn=button.getBoundingClientRect(),scale=(rect.width/900)||1;
    var targetX=(btn.left+btn.width/2-rect.left)/scale;
    var targetY=(btn.top+btn.height/2-rect.top)/scale;
    var currentX=geo.x3,currentY=geo.rest;
    if(reduce){leave();return}
    var xAnim=dot.animate([
      {transform:'translate('+currentX+'px,0px)'},
      {transform:'translate('+targetX+'px,0px)',offset:.72,easing:'cubic-bezier(.2,.8,.3,1)'},
      {transform:'translate('+targetX+'px,0px)'}
    ],{duration:850,fill:'forwards'});
    var yAnim=dy.animate([
      {transform:'translate(0px,'+currentY+'px) scale(1,1)'},
      {transform:'translate(0px,'+(targetY-24)+'px) scale(.85,1.2)',offset:.72,easing:'cubic-bezier(.35,0,.75,.4)'},
      {transform:'translate(0px,'+targetY+'px) scale(1.3,.7)',offset:.88,easing:'ease-out'},
      {transform:'translate(0px,'+(targetY-5)+'px) scale(.9,1.15)'},
      {transform:'translate(0px,'+targetY+'px) scale(1,1)'}
    ],{duration:850,fill:'forwards'});
    Promise.all([xAnim.finished,yAnim.finished]).then(function(){
      if(finished)return;
      button.style.transform='scale(.96)';
      button.style.boxShadow='0 0 28px rgba(229,40,29,.85)';
      setTimeout(leave,180);
    }).catch(function(){});
  }
  function finish(){
    $('tu').classList.add('tn-on');var D=dropDot();
    ['tag','sub','act'].forEach(function(id,n){later(function(){$(id).classList.add('tn-show')},D+200+n*350)});
    // After the drop lands on the I, it falls onto OPEN THE DOORS and opens the site.
    later(dropToButton,D+1450);
  }
  function play(){
    if(finished)return;
    cancelAnimationFrame(raf);timers.forEach(clearTimeout);timers=[];
    dotAnims.forEach(function(a){a.cancel()});dotAnims=[];
    var entry=$('entry');entry.classList.remove('tn-open','tn-hidden');
    $('tu').classList.remove('tn-on');$('dx').style.opacity=0;$('dx').style.transform='';$('dy').style.transform='';
    ['tag','sub','act'].forEach(function(id){$(id).classList.remove('tn-show')});
    layout();
    if(reduce){setLevel(1);finish();return}
    setLevel(0);var dur=3600,t0=null;
    function step(ts){if(t0===null)t0=ts+500;var k=Math.max(0,Math.min((ts-t0)/dur,1)),e=1-Math.pow(1-k,2.2);setLevel(e);if(k<1)raf=requestAnimationFrame(step);else finish()}
    raf=requestAnimationFrame(step);
  }
  function burst(){
    var box=$('embers'),i,e;if(reduce||!box)return;box.innerHTML='';
    for(i=0;i<46;i++){e=document.createElement('span');e.className='tn-ember';e.style.left=(Math.random()*100)+'%';e.style.setProperty('--s',(2+Math.random()*4)+'px');e.style.setProperty('--d',(2.2+Math.random()*2.2)+'s');e.style.setProperty('--dl',(0.5+Math.random()*1.4)+'s');e.style.setProperty('--x',((Math.random()-.5)*160)+'px');box.appendChild(e)}
    later(function(){box.innerHTML=''},5200);
  }
  function leave(){
    if(finished)return;finished=true;cancelAnimationFrame(raf);timers.forEach(clearTimeout);
    $('entry').classList.add('tn-open');root.classList.remove('tn-intro-lock');root.classList.add('tn-site-reveal');root.style.overflow='';
    burst();setTimeout(function(){$('entry').classList.add('tn-hidden')},reduce?60:1800);
  }
  $('enter').addEventListener('click',leave);
  root.classList.add('tn-intro-lock');root.style.overflow='hidden';
  (document.fonts&&document.fonts.ready?document.fonts.ready:Promise.resolve()).then(function(){if(!finished)play()});
  window.addEventListener('resize',function(){if(!finished)layout()});
})();
</script>


<?php wp_footer(); ?>
</body>
</html>
