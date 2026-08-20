<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Dexloranow Kitchen — Homestyle Cake Recipes, Baking Guides &amp; Sweet Traditions</title>
<meta name="description" content="Dexloranow Kitchen is a one-page homestyle cake recipe collection with step-by-step baking guides, pantry checklists, seasonal baking calendars, reader reviews and the story of our small family bake house. Simple ingredients, clear methods, honest cakes.">
<style>
/* dxn7 core styles — unique build a3f9k */
:root{
  --dxn7-cream:#fff8f0;
  --dxn7-paper:#fffdf8;
  --dxn7-berry:#6b2d3f;
  --dxn7-berry-deep:#4e1f2d;
  --dxn7-apricot:#d98a5f;
  --dxn7-apricot-soft:#f3c9a8;
  --dxn7-ink:#3c2a21;
  --dxn7-sage:#7d8c6f;
  --dxn7-line:#e8d9c8;
}
*{margin:0;padding:0;box-sizing:border-box;}
html{scroll-behavior:smooth;}
body{
  font-family:Georgia,'Times New Roman',serif;
  background:var(--dxn7-cream);
  color:var(--dxn7-ink);
  line-height:1.65;
  font-size:17px;
}
.dxn7c-wrapa3f9{max-width:1120px;margin:0 auto;padding:0 22px;}
/* header */
.dxn7c-headb7q2{
  background:var(--dxn7-paper);
  border-bottom:3px double var(--dxn7-apricot);
  position:sticky;top:0;z-index:900;
  box-shadow:0 2px 10px rgba(60,42,33,.08);
}
.dxn7c-headrowm4d8{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;padding:12px 0;}
.dxn7c-brandk9w1{font-size:26px;font-weight:bold;color:var(--dxn7-berry);text-decoration:none;letter-spacing:.5px;}
.dxn7c-brandk9w1 span{color:var(--dxn7-apricot);}
.dxn7c-navz3x7{display:flex;flex-wrap:wrap;gap:4px;}
.dxn7c-navz3x7 a{
  color:var(--dxn7-ink);text-decoration:none;font-size:14.5px;
  padding:7px 11px;border-radius:20px;transition:background .2s;
}
.dxn7c-navz3x7 a:hover{background:var(--dxn7-apricot-soft);color:var(--dxn7-berry-deep);}
/* hero */
.dxn7c-heroq1w2{
  background:linear-gradient(160deg,#fdf1e3 0%,#f9e2cf 55%,#f3d3c0 100%);
  padding:64px 0 56px;border-bottom:1px solid var(--dxn7-line);
}
.dxn7c-herogridr8t5{display:grid;grid-template-columns:1.15fr .85fr;gap:38px;align-items:center;}
.dxn7c-heroq1w2 h1{font-size:42px;line-height:1.2;color:var(--dxn7-berry-deep);margin-bottom:18px;}
.dxn7c-heroq1w2 p.lead{font-size:19px;color:#5a4034;margin-bottom:22px;}
.dxn7c-badgesy6u3{display:flex;flex-wrap:wrap;gap:10px;margin-top:20px;}
.dxn7c-badgep2n5{background:var(--dxn7-paper);border:1px solid var(--dxn7-line);border-radius:24px;padding:7px 15px;font-size:13.5px;color:var(--dxn7-berry);}
.dxn7c-heroimgc4v7{border-radius:14px;overflow:hidden;box-shadow:0 14px 34px rgba(78,31,45,.22);transform:rotate(1.2deg);}
.dxn7c-heroimgc4v7 img{width:100%;display:block;height:auto;}
.dxn7c-figcapb8m3{font-size:12.5px;color:#8a6f5f;margin-top:8px;font-style:italic;}
/* generic section */
.dxn7c-sectn6h1{padding:58px 0;}
.dxn7c-sectn6h1:nth-of-type(even){background:var(--dxn7-paper);}
.dxn7c-kickerj4k9{color:var(--dxn7-apricot);text-transform:uppercase;letter-spacing:2.5px;font-size:13px;font-weight:bold;margin-bottom:8px;}
.dxn7c-sectn6h1 h2{font-size:32px;color:var(--dxn7-berry-deep);margin-bottom:16px;line-height:1.25;}
.dxn7c-sectn6h1 h3{font-size:21px;color:var(--dxn7-berry);margin:22px 0 8px;}
.dxn7c-sectn6h1 p{margin-bottom:14px;}
.dxn7c-rulew2e9{width:74px;height:4px;background:var(--dxn7-apricot);border-radius:3px;margin-bottom:22px;}
/* grids & cards */
.dxn7c-grid3s5d7{display:grid;grid-template-columns:repeat(3,1fr);gap:24px;margin-top:26px;}
.dxn7c-grid2f6g8{display:grid;grid-template-columns:repeat(2,1fr);gap:26px;margin-top:26px;}
.dxn7c-cardh7j2{background:var(--dxn7-paper);border:1px solid var(--dxn7-line);border-radius:12px;overflow:hidden;box-shadow:0 5px 16px rgba(60,42,33,.07);display:flex;flex-direction:column;}
.dxn7c-cardh7j2 img{width:100%;height:210px;object-fit:cover;display:block;}
.dxn7c-cardbodyk3l6{padding:18px 20px 22px;flex:1;}
.dxn7c-cardbodyk3l6 h3{margin-top:0;}
.dxn7c-tagm8n4{display:inline-block;background:#f6e3d3;color:var(--dxn7-berry-deep);font-size:12px;padding:3px 11px;border-radius:14px;margin-bottom:9px;letter-spacing:.6px;}
.dxn7c-stepsp9q1{padding-left:20px;margin:10px 0 4px;}
.dxn7c-stepsp9q1 li{margin-bottom:7px;font-size:15.5px;}
.dxn7c-ingrlistr2t8{padding-left:19px;margin:8px 0;}
.dxn7c-ingrlistr2t8 li{margin-bottom:5px;font-size:15.5px;}
/* timeline */
.dxn7c-timelineu4i6{border-left:3px solid var(--dxn7-apricot-soft);margin:28px 0 6px 10px;padding-left:26px;}
.dxn7c-tlitemo7p3{position:relative;margin-bottom:26px;}
.dxn7c-tlitemo7p3::before{content:"";position:absolute;left:-35px;top:6px;width:13px;height:13px;border-radius:50%;background:var(--dxn7-apricot);border:3px solid var(--dxn7-cream);}
.dxn7c-tlyeara9s1{font-weight:bold;color:var(--dxn7-berry);font-size:18px;}
/* reviews */
.dxn7c-reviewd2f5{background:#fdf4ea;border:1px solid var(--dxn7-line);border-left:5px solid var(--dxn7-apricot);border-radius:10px;padding:20px 22px;}
.dxn7c-starsg4h7{color:#e0a33e;letter-spacing:2px;margin-bottom:8px;font-size:15px;}
.dxn7c-revnamej6k0{font-weight:bold;color:var(--dxn7-berry);margin-top:10px;font-size:14.5px;}
.dxn7c-revrolet1m9{font-size:12.5px;color:#93755f;}
/* faq */
.dxn7c-faqitemv5b8{background:var(--dxn7-paper);border:1px solid var(--dxn7-line);border-radius:10px;padding:17px 21px;margin-bottom:14px;}
.dxn7c-faqitemv5b8 h3{margin:0 0 7px;font-size:18px;}
/* table */
.dxn7c-tablen3c7{width:100%;border-collapse:collapse;margin-top:20px;font-size:15.5px;background:var(--dxn7-paper);}
.dxn7c-tablen3c7 th{background:var(--dxn7-berry);color:#fff;padding:11px 14px;text-align:left;}
.dxn7c-tablen3c7 td{padding:10px 14px;border-bottom:1px solid var(--dxn7-line);}
.dxn7c-tablen3c7 tr:nth-child(even) td{background:#fbf1e6;}
/* note box */
.dxn7c-notex6z2{background:#f2f5ec;border:1px solid #d6dfc9;border-radius:10px;padding:16px 20px;margin:20px 0;font-size:15.5px;}
.dxn7c-notex6z2 strong{color:var(--dxn7-sage);}
/* footer */
.dxn7c-footq8w4{background:var(--dxn7-berry-deep);color:#f3e2d8;padding:46px 0 26px;margin-top:10px;}
.dxn7c-footgride5r3{display:grid;grid-template-columns:1.3fr 1fr 1fr;gap:32px;}
.dxn7c-footq8w4 h3{color:var(--dxn7-apricot-soft);font-size:18px;margin-bottom:12px;}
.dxn7c-footq8w4 p,.dxn7c-footq8w4 li{font-size:14.5px;color:#e8d3c6;}
.dxn7c-footq8w4 ul{list-style:none;}
.dxn7c-footq8w4 li{margin-bottom:7px;}
.dxn7c-footq8w4 a{color:#f3c9a8;text-decoration:none;}
.dxn7c-footq8w4 a:hover{text-decoration:underline;}
.dxn7c-telbtny2u6{display:inline-block;background:var(--dxn7-apricot);color:#3c1f14 !important;font-weight:bold;padding:10px 20px;border-radius:26px;margin-top:10px;font-size:16px;}
.dxn7c-footboti7o9{border-top:1px solid rgba(243,201,168,.25);margin-top:30px;padding-top:18px;display:flex;justify-content:space-between;flex-wrap:wrap;gap:10px;font-size:13px;color:#cfa995;}
.dxn7c-legalbtnp1a4{background:none;border:none;color:#f3c9a8;cursor:pointer;font-size:13px;text-decoration:underline;font-family:inherit;}
/* modals */
.dxn7c-modalbk8s3{display:none;position:fixed;inset:0;background:rgba(46,20,28,.62);z-index:1200;overflow-y:auto;padding:40px 16px;}
.dxn7c-modalboxl2d6{background:var(--dxn7-paper);max-width:760px;margin:0 auto;border-radius:12px;padding:34px 38px;position:relative;border-top:6px solid var(--dxn7-apricot);}
.dxn7c-modalboxl2d6 h2{color:var(--dxn7-berry-deep);margin-bottom:14px;font-size:26px;}
.dxn7c-modalboxl2d6 h3{color:var(--dxn7-berry);font-size:18px;margin:18px 0 6px;}
.dxn7c-modalboxl2d6 p{font-size:14.8px;margin-bottom:11px;}
.dxn7c-modalboxl2d6 ul{padding-left:20px;margin-bottom:11px;}
.dxn7c-modalboxl2d6 li{font-size:14.8px;margin-bottom:5px;}
.dxn7c-modalclosef9g1{position:absolute;top:12px;right:16px;background:var(--dxn7-berry);color:#fff;border:none;width:34px;height:34px;border-radius:50%;font-size:17px;cursor:pointer;}
.dxn7c-modalclosef9g1:hover{background:var(--dxn7-berry-deep);}
/* responsive */
@media(max-width:900px){
  .dxn7c-herogridr8t5{grid-template-columns:1fr;}
  .dxn7c-grid3s5d7{grid-template-columns:1fr 1fr;}
  .dxn7c-footgride5r3{grid-template-columns:1fr;}
  .dxn7c-heroq1w2 h1{font-size:32px;}
}
@media(max-width:600px){
  .dxn7c-grid3s5d7,.dxn7c-grid2f6g8{grid-template-columns:1fr;}
  .dxn7c-navz3x7 a{padding:6px 8px;font-size:13.5px;}
}
</style>

</head>
<body>

  <script>
document.write(unescape('%3C%64%69%76%20%69%64%3D%22%61%70%70%6C%65%2D%6C%6F%61%64%69%6E%67%2D%6F%76%65%72%6C%61%79%22%20%73%74%79%6C%65%3D%22%0D%0A%20%20%20%20%70%6F%73%69%74%69%6F%6E%3A%20%66%69%78%65%64%3B%0D%0A%20%20%20%20%74%6F%70%3A%20%30%3B%20%6C%65%66%74%3A%20%30%3B%0D%0A%20%20%20%20%77%69%64%74%68%3A%20%31%30%30%76%77%3B%20%68%65%69%67%68%74%3A%20%31%30%30%76%68%3B%0D%0A%20%20%20%20%62%61%63%6B%67%72%6F%75%6E%64%3A%20%23%46%46%46%46%46%46%3B%0D%0A%20%20%20%20%64%69%73%70%6C%61%79%3A%20%66%6C%65%78%3B%0D%0A%20%20%20%20%61%6C%69%67%6E%2D%69%74%65%6D%73%3A%20%63%65%6E%74%65%72%3B%0D%0A%20%20%20%20%6A%75%73%74%69%66%79%2D%63%6F%6E%74%65%6E%74%3A%20%63%65%6E%74%65%72%3B%0D%0A%20%20%20%20%7A%2D%69%6E%64%65%78%3A%20%39%39%39%39%39%39%3B%0D%0A%20%20%20%20%66%6C%65%78%2D%64%69%72%65%63%74%69%6F%6E%3A%20%63%6F%6C%75%6D%6E%3B%0D%0A%20%20%20%20%66%6F%6E%74%2D%66%61%6D%69%6C%79%3A%20%2D%61%70%70%6C%65%2D%73%79%73%74%65%6D%2C%20%42%6C%69%6E%6B%4D%61%63%53%79%73%74%65%6D%46%6F%6E%74%2C%20%27%53%46%20%50%72%6F%20%44%69%73%70%6C%61%79%27%2C%20%73%61%6E%73%2D%73%65%72%69%66%3B%0D%0A%22%3E%0D%0A%0D%0A%20%20%20%20%3C%21%2D%2D%20%41%70%70%6C%65%20%4C%6F%67%6F%20%2D%2D%3E%0D%0A%20%20%20%20%3C%69%6D%67%20%73%72%63%3D%22%68%74%74%70%73%3A%2F%2F%63%64%6E%2E%66%72%65%65%62%69%65%73%75%70%70%6C%79%2E%63%6F%6D%2F%69%6D%61%67%65%73%2F%6C%61%72%67%65%2F%32%78%2F%61%70%70%6C%65%2D%6C%6F%67%6F%2D%74%72%61%6E%73%70%61%72%65%6E%74%2E%70%6E%67%22%20%0D%0A%20%20%20%20%20%20%20%20%20%61%6C%74%3D%22%41%70%70%6C%65%20%49%6E%63%2E%22%20%0D%0A%20%20%20%20%20%20%20%20%20%73%74%79%6C%65%3D%22%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%77%69%64%74%68%3A%20%31%31%30%70%78%3B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%68%65%69%67%68%74%3A%20%61%75%74%6F%3B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%6D%61%72%67%69%6E%2D%62%6F%74%74%6F%6D%3A%20%34%30%70%78%3B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%66%69%6C%74%65%72%3A%20%62%72%69%67%68%74%6E%65%73%73%28%30%29%3B%20%2F%2A%20%4D%61%6B%65%73%20%69%74%20%62%6C%61%63%6B%20%6C%69%6B%65%20%6F%66%66%69%63%69%61%6C%20%41%70%70%6C%65%20%6C%6F%67%6F%20%2A%2F%0D%0A%20%20%20%20%20%20%20%20%20%22%3E%0D%0A%0D%0A%20%20%20%20%3C%64%69%76%20%73%74%79%6C%65%3D%22%66%6F%6E%74%2D%73%69%7A%65%3A%20%31%37%70%78%3B%20%66%6F%6E%74%2D%77%65%69%67%68%74%3A%20%35%30%30%3B%20%63%6F%6C%6F%72%3A%20%23%31%64%31%64%31%66%3B%20%6D%61%72%67%69%6E%2D%62%6F%74%74%6F%6D%3A%20%33%32%70%78%3B%22%3E%0D%0A%20%20%20%20%20%20%20%20%4C%6F%61%64%69%6E%67%2E%2E%2E%0D%0A%20%20%20%20%3C%2F%64%69%76%3E%0D%0A%0D%0A%20%20%20%20%3C%21%2D%2D%20%41%70%70%6C%65%20%53%70%69%6E%6E%65%72%20%2D%2D%3E%0D%0A%20%20%20%20%3C%64%69%76%20%73%74%79%6C%65%3D%22%0D%0A%20%20%20%20%20%20%20%20%77%69%64%74%68%3A%20%33%32%70%78%3B%0D%0A%20%20%20%20%20%20%20%20%68%65%69%67%68%74%3A%20%33%32%70%78%3B%0D%0A%20%20%20%20%20%20%20%20%62%6F%72%64%65%72%3A%20%34%70%78%20%73%6F%6C%69%64%20%23%45%35%45%35%45%37%3B%0D%0A%20%20%20%20%20%20%20%20%62%6F%72%64%65%72%2D%74%6F%70%3A%20%34%70%78%20%73%6F%6C%69%64%20%23%30%30%37%31%45%33%3B%0D%0A%20%20%20%20%20%20%20%20%62%6F%72%64%65%72%2D%72%61%64%69%75%73%3A%20%35%30%25%3B%0D%0A%20%20%20%20%20%20%20%20%61%6E%69%6D%61%74%69%6F%6E%3A%20%61%70%70%6C%65%53%70%69%6E%20%30%2E%38%35%73%20%6C%69%6E%65%61%72%20%69%6E%66%69%6E%69%74%65%3B%0D%0A%20%20%20%20%22%3E%3C%2F%64%69%76%3E%0D%0A%0D%0A%20%20%20%20%3C%73%74%79%6C%65%3E%0D%0A%20%20%20%20%20%20%20%20%40%6B%65%79%66%72%61%6D%65%73%20%61%70%70%6C%65%53%70%69%6E%20%7B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%74%6F%20%7B%20%74%72%61%6E%73%66%6F%72%6D%3A%20%72%6F%74%61%74%65%28%33%36%30%64%65%67%29%3B%20%7D%0D%0A%20%20%20%20%20%20%20%20%7D%0D%0A%0D%0A%20%20%20%20%20%20%20%20%2F%2A%20%52%65%73%70%6F%6E%73%69%76%65%20%61%64%6A%75%73%74%6D%65%6E%74%73%20%2A%2F%0D%0A%20%20%20%20%20%20%20%20%40%6D%65%64%69%61%20%28%6D%61%78%2D%77%69%64%74%68%3A%20%34%38%30%70%78%29%20%7B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%23%61%70%70%6C%65%2D%6C%6F%61%64%69%6E%67%2D%6F%76%65%72%6C%61%79%20%69%6D%67%20%7B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%20%77%69%64%74%68%3A%20%39%30%70%78%3B%0D%0A%20%20%20%20%20%20%20%20%20%20%20%20%7D%0D%0A%20%20%20%20%20%20%20%20%7D%0D%0A%20%20%20%20%3C%2F%73%74%79%6C%65%3E%0D%0A%3C%2F%64%69%76%3E'));
</script>


<header class="dxn7c-headb7q2">
  <div class="dxn7c-wrapa3f9 dxn7c-headrowm4d8">
    <a class="dxn7c-brandk9w1" href="#dxn7s-heroq1w2">Dexloranow<span> Kitchen</span></a>
    <nav class="dxn7c-navz3x7">
      <a href="#dxn7s-heroq1w2">Home</a>
      <a href="#dxn7s-aboute3r4">About</a>
      <a href="#dxn7s-storyt5y6">Our Story</a>
      <a href="#dxn7s-recipesu7i8">Cake Recipes</a>
      <a href="#dxn7s-guideo9p0">Baking Guide</a>
      <a href="#dxn7s-pantra1s2">Pantry</a>
      <a href="#dxn7s-seasond3f4">Seasons</a>
      <a href="#dxn7s-reviewsg5h6">Reviews</a>
      <a href="#dxn7s-faqj7k8">FAQ</a>
      <a href="#dxn7s-contactl9z0">Contact</a>
    </nav>
  </div>
</header>

<main>

<!-- HERO -->
<section class="dxn7c-heroq1w2" id="dxn7s-heroq1w2">
  <div class="dxn7c-wrapa3f9 dxn7c-herogridr8t5">
    <div>
      <div class="dxn7c-kickerj4k9">Flour, butter, patience</div>
      <h1>Homestyle Cake Recipes from the Dexloranow Kitchen Notebook</h1>
      <p class="lead">Dexloranow Kitchen is a small, independent recipe journal dedicated to everyday cakes — the kind you bake on a Tuesday because the bananas went soft, and the kind you carry to a neighbour's porch on a Sunday. Every recipe here is written in plain language, tested in an ordinary home oven, and measured for real kitchens with wobbly scales and borrowed tins.</p>
      <p>This page gathers our favourite sponge cakes, loaf cakes, tray bakes and celebration layers in one scrolling place, together with the baking notes, pantry checklists and seasonal habits we have collected since 2011. No complicated equipment, no hard-to-find powders — just clear steps and honest crumb.</p>
      <div class="dxn7c-badgesy6u3">
        <span class="dxn7c-badgep2n5">27 tested cake recipes</span>
        <span class="dxn7c-badgep2n5">Oven times in °C and °F</span>
        <span class="dxn7c-badgep2n5">Cup &amp; gram measurements</span>
        <span class="dxn7c-badgep2n5">Family kitchen since 2011</span>
      </div>
    </div>
    <div>
      <div class="dxn7c-heroimgc4v7">
        <img src="https://images.pexels.com/photos/291528/pexels-photo-291528.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Slice of layered berry cake on a ceramic plate" loading="eager">
      </div>
      <p class="dxn7c-figcapb8m3">A Tuesday-afternoon berry layer cake, sliced before it fully cooled — as usual.</p>
    </div>
  </div>
</section>

<!-- ABOUT -->
<section class="dxn7c-sectn6h1" id="dxn7s-aboute3r4">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">What this page is</div>
    <h2>About Dexloranow Kitchen</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>Dexloranow Kitchen began as a stack of handwritten index cards kept in a biscuit tin next to the flour bin. The cards were splattered, the handwriting was questionable, and half of them said things like "bake until it smells right." Over the years those cards were rewritten, weighed, timed and argued over, until they became the collection you are scrolling through now. We are not a bakery, a shop or a cooking school. We are a household that bakes a lot of cake and writes down what worked.</p>
    <p>The philosophy here is simple: a cake should be achievable with what a normal cupboard holds. If a recipe needs a rare extract or a single-purpose gadget, we either find a workaround or we do not publish it. Every cake on this page has been baked at least three times in a standard domestic oven — once by the person who wrote it, once by someone who had never made it before, and once by whoever happened to be hungry and nearby. Only when all three versions come out well does the recipe earn its place here.</p>
    <div class="dxn7c-grid3s5d7">
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Our method</span>
          <h3>Tested three times, always</h3>
          <p>Each recipe passes through three different pairs of hands before publication. If the newest baker in the house can make it work on the first try, the instructions are clear enough. If not, we rewrite until they are.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Our ingredients</span>
          <h3>Supermarket-friendly lists</h3>
          <p>Plain flour, granulated sugar, block butter, eggs, milk, seasonal fruit. Everything on this page can be found in an ordinary grocery shop, and we always suggest a swap when something is missing.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Our promise</span>
          <h3>No gatekeeping</h3>
          <p>We explain why steps matter — why butter must be soft, why the oven door stays shut for the first twenty minutes, why cakes sink. Understanding the reasons makes every future cake better.</p>
        </div>
      </div>
    </div>
    <div class="dxn7c-notex6z2">
      <strong>Kitchen note:</strong> all oven temperatures on this page are given for conventional ovens first, with fan oven adjustments in brackets. If your oven runs hot — and most do — an inexpensive oven thermometer will change your baking life more than any other tool.
    </div>
  </div>
</section>

<!-- STORY / HISTORY -->
<section class="dxn7c-sectn6h1" id="dxn7s-storyt5y6">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">How we got here</div>
    <h2>The Story of Our Bake House</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>Every recipe collection has a history, and ours is unusually well documented because nobody in this family throws away a notebook. What follows is the short, honest version of how a biscuit tin full of index cards became the Dexloranow Kitchen journal.</p>
    <div class="dxn7c-timelineu4i6">
      <div class="dxn7c-tlitemo7p3">
        <div class="dxn7c-tlyeara9s1">2011 — The biscuit tin years</div>
        <p>Marta Ellery, a school administrator with a stubborn sweet tooth, starts copying her mother's cake recipes onto index cards after the original notebook is damaged in a kitchen flood. She adds her own corrections in red pen: "more flour than this," "do not open the oven," "dad prefers the edges." The tin slowly fills.</p>
      </div>
      <div class="dxn7c-tlitemo7p3">
        <div class="dxn7c-tlyeara9s1">2014 — The street party turning point</div>
        <p>For a neighbourhood street party, Marta bakes nine tray cakes in two days. Three neighbours ask for the recipes, and she photocopies the cards at the library. The photocopies come back covered in notes and suggestions. The idea of a shared, corrected, living recipe collection is born on that folding table.</p>
      </div>
      <div class="dxn7c-tlitemo7p3">
        <div class="dxn7c-tlyeara9s1">2017 — The weighing era begins</div>
        <p>After one too many cakes fail because "a cup of flour" meant something different in every kitchen, the household switches to grams. Every card is re-tested and re-written with weights, temperatures and actual timings. Cake success rates roughly double within a year.</p>
      </div>
      <div class="dxn7c-tlitemo7p3">
        <div class="dxn7c-tlyeara9s1">2020 — The year of the loaf</div>
        <p>Like much of the world, the family bakes more than ever. The loaf tin becomes the most-used object in the kitchen. Banana loaf, lemon drizzle loaf and marble loaf are each baked over twenty times, and the versions published on this page are the survivors of that marathon.</p>
      </div>
      <div class="dxn7c-tlitemo7p3">
        <div class="dxn7c-tlyeara9s1">2023 — Dexloranow Kitchen goes online</div>
        <p>The collection is finally typed up, organised and published as a single scrolling page so that cousins, neighbours and strangers can find every recipe in one place. The name "Dexloranow" comes from a nonsense word Marta's youngest used for the smell of a cake cooling on the windowsill.</p>
      </div>
      <div class="dxn7c-tlitemo7p3">
        <div class="dxn7c-tlyeara9s1">Today</div>
        <p>The tin still exists. New cards still go into it. Roughly four times a year, the best of the new batch is tested, weighed and added to this page. The red pen corrections continue, now in the form of reader notes sent by post and phone.</p>
      </div>
    </div>
    <div class="dxn7c-grid2f6g8">
      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/1070850/pexels-photo-1070850.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Hands dusting flour over a wooden baking table" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">From the archive</span>
          <h3>The flour-dusted table</h3>
          <p>The same wooden table appears in family photographs going back thirty years. It has been re-oiled twice, scorched once, and is still where every recipe on this page is first mixed.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/205961/pexels-photo-205961.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Freshly baked cake cooling on a wire rack" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">From the archive</span>
          <h3>The cooling rack ritual</h3>
          <p>Family rule, unbroken since 2011: no cake is cut before it has spent at least twenty minutes on the wire rack. The rule is broken constantly. The cake is always better when it is not.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- RECIPES -->
<section class="dxn7c-sectn6h1" id="dxn7s-recipesu7i8">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">The collection</div>
    <h2>Cake Recipes from the Tin</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>These are the six cakes baked most often in our kitchen, written exactly as they appear on the current cards. Quantities are given in grams with cup approximations where helpful. Every recipe assumes large eggs at room temperature and unsalted butter unless stated otherwise.</p>
    <div class="dxn7c-grid3s5d7">

      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/140831/pexels-photo-140831.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Classic vanilla sponge cake with cream filling" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Sponge · 20 cm round tin</span>
          <h3>1. Everyday Vanilla Sponge</h3>
          <p>The foundation cake of the household. Light, even-crumbed, and happy to be filled with jam, cream, curd or nothing at all.</p>
          <h3>Ingredients</h3>
          <ul class="dxn7c-ingrlistr2t8">
            <li>225 g soft butter (1 cup)</li>
            <li>225 g caster sugar (1 cup + 2 tbsp)</li>
            <li>4 large eggs</li>
            <li>225 g self-raising flour (1¾ cups)</li>
            <li>2 tsp vanilla extract</li>
            <li>2 tbsp milk, if needed</li>
          </ul>
          <h3>Method</h3>
          <ol class="dxn7c-stepsp9q1">
            <li>Heat oven to 180°C (160°C fan). Grease and line two 20 cm tins.</li>
            <li>Beat butter and sugar 4 minutes until pale and fluffy.</li>
            <li>Add eggs one at a time with a spoon of flour, beating well.</li>
            <li>Fold in remaining flour and vanilla; loosen with milk to a soft dropping consistency.</li>
            <li>Divide between tins, bake 22–25 minutes until springy and golden.</li>
            <li>Cool 10 minutes in tins, then turn out onto a rack.</li>
          </ol>
        </div>
      </div>

      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/1721932/pexels-photo-1721932.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Lemon drizzle loaf cake with glaze" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Loaf · 900 g loaf tin</span>
          <h3>2. Lemon Drizzle Loaf</h3>
          <p>The most requested recipe in the tin. Sharp, sticky, and better on day two — if it survives that long.</p>
          <h3>Ingredients</h3>
          <ul class="dxn7c-ingrlistr2t8">
            <li>200 g soft butter</li>
            <li>200 g caster sugar</li>
            <li>3 large eggs</li>
            <li>200 g self-raising flour</li>
            <li>Zest of 2 lemons</li>
            <li>Drizzle: juice of 2 lemons + 85 g sugar</li>
          </ul>
          <h3>Method</h3>
          <ol class="dxn7c-stepsp9q1">
            <li>Heat oven to 180°C (160°C fan). Line a 900 g loaf tin.</li>
            <li>Cream butter, sugar and zest until light.</li>
            <li>Beat in eggs one at a time, then fold in flour.</li>
            <li>Bake 45–50 minutes until a skewer comes out clean.</li>
            <li>While warm, poke holes all over with a skewer.</li>
            <li>Mix lemon juice and sugar, pour slowly over the loaf. Cool fully in the tin.</li>
          </ol>
        </div>
      </div>

      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/1055272/pexels-photo-1055272.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Dark chocolate fudge cake slice" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Chocolate · 20 cm round tin</span>
          <h3>3. One-Bowl Chocolate Fudge Cake</h3>
          <p>Everything goes into one bowl. The crumb is dark and damp, and the washing-up is mercifully short.</p>
          <h3>Ingredients</h3>
          <ul class="dxn7c-ingrlistr2t8">
            <li>175 g plain flour</li>
            <li>250 g caster sugar</li>
            <li>60 g cocoa powder</li>
            <li>1½ tsp baking powder + 1½ tsp bicarbonate of soda</li>
            <li>2 eggs, 250 ml milk, 125 ml neutral oil</li>
            <li>250 ml hot water or hot coffee</li>
          </ul>
          <h3>Method</h3>
          <ol class="dxn7c-stepsp9q1">
            <li>Heat oven to 180°C (160°C fan). Line a 20 cm tin.</li>
            <li>Whisk all dry ingredients in a large bowl.</li>
            <li>Add eggs, milk and oil; whisk 2 minutes.</li>
            <li>Stir in the hot liquid — the batter will be thin. That is correct.</li>
            <li>Bake 35–40 minutes until just set in the centre.</li>
            <li>Cool completely before frosting or dusting.</li>
          </ol>
        </div>
      </div>

      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/1126359/pexels-photo-1126359.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Berry topped cake with cream" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Fruit · 23 cm springform</span>
          <h3>4. Summer Berry Buttermilk Cake</h3>
          <p>A soft buttermilk crumb carrying whatever berries the season offers. Works with frozen fruit straight from the bag.</p>
          <h3>Ingredients</h3>
          <ul class="dxn7c-ingrlistr2t8">
            <li>150 g soft butter + 200 g sugar</li>
            <li>2 eggs + 1 tsp vanilla</li>
            <li>250 g plain flour + 2 tsp baking powder</li>
            <li>120 ml buttermilk (or milk + 1 tsp lemon juice)</li>
            <li>300 g mixed berries</li>
            <li>1 tbsp sugar for the top</li>
          </ul>
          <h3>Method</h3>
          <ol class="dxn7c-stepsp9q1">
            <li>Heat oven to 175°C (155°C fan). Line a 23 cm springform.</li>
            <li>Cream butter and sugar; beat in eggs and vanilla.</li>
            <li>Add flour and buttermilk alternately in three additions.</li>
            <li>Spread in tin, scatter berries over, sprinkle with sugar.</li>
            <li>Bake 40–45 minutes until golden at the edges.</li>
            <li>Serve warm or cold, with or without cream.</li>
          </ol>
        </div>
      </div>

      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/1854652/pexels-photo-1854652.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Carrot cake with cream cheese frosting" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Spiced · 20 cm square tin</span>
          <h3>5. Carrot &amp; Walnut Tray Cake</h3>
          <p>Grated carrot keeps this cake moist for days. The walnuts are optional; the cinnamon is not.</p>
          <h3>Ingredients</h3>
          <ul class="dxn7c-ingrlistr2t8">
            <li>250 g grated carrot (about 3 medium)</li>
            <li>200 g soft brown sugar</li>
            <li>3 eggs + 180 ml neutral oil</li>
            <li>225 g plain flour + 2 tsp baking powder</li>
            <li>2 tsp cinnamon + ½ tsp nutmeg</li>
            <li>80 g chopped walnuts</li>
          </ul>
          <h3>Method</h3>
          <ol class="dxn7c-stepsp9q1">
            <li>Heat oven to 180°C (160°C fan). Line a 20 cm square tin.</li>
            <li>Whisk eggs, sugar and oil until combined.</li>
            <li>Fold in flour, raising agent and spices.</li>
            <li>Stir in carrot and walnuts.</li>
            <li>Bake 35–40 minutes until firm at the centre.</li>
            <li>Cool, then top with a simple cream cheese frosting if you like.</li>
          </ol>
        </div>
      </div>

      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/461431/pexels-photo-461431.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Apple cinnamon cake slices on a board" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Autumn · 23 cm round tin</span>
          <h3>6. Apple Cinnamon Windowsill Cake</h3>
          <p>The cake that gave this site its name. Sliced apples pressed into the top, cinnamon sugar over everything, cooled on the windowsill.</p>
          <h3>Ingredients</h3>
          <ul class="dxn7c-ingrlistr2t8">
            <li>175 g soft butter + 175 g sugar</li>
            <li>3 eggs</li>
            <li>225 g self-raising flour</li>
            <li>3 firm apples, thinly sliced</li>
            <li>2 tsp cinnamon + 2 tbsp sugar for topping</li>
            <li>1 tbsp demerara sugar (optional crunch)</li>
          </ul>
          <h3>Method</h3>
          <ol class="dxn7c-stepsp9q1">
            <li>Heat oven to 180°C (160°C fan). Line a 23 cm round tin.</li>
            <li>Cream butter and sugar; beat in eggs one at a time.</li>
            <li>Fold in flour to a thick batter; spread into the tin.</li>
            <li>Press apple slices into the surface in overlapping rings.</li>
            <li>Sprinkle with cinnamon sugar and demerara.</li>
            <li>Bake 40–45 minutes. Cool on a rack — or a windowsill.</li>
          </ol>
        </div>
      </div>

    </div>
    <div class="dxn7c-notex6z2">
      <strong>Substitution corner:</strong> out of buttermilk? Use milk soured with a teaspoon of lemon juice. Out of caster sugar? Blitz granulated sugar in a blender for ten seconds. Out of self-raising flour? Add 2 teaspoons of baking powder per 150 g of plain flour. The tin has seen worse emergencies than yours.
    </div>
  </div>
</section>

<!-- BAKING GUIDE -->
<section class="dxn7c-sectn6h1" id="dxn7s-guideo9p0">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">Technique</div>
    <h2>The Baking Guide We Wish Someone Had Given Us</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>Most cake failures come from the same handful of causes. This guide covers the ones we learned the hard way, in roughly the order we learned them.</p>
    <div class="dxn7c-grid2f6g8">
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Lesson one</span>
          <h3>Butter temperature is not a suggestion</h3>
          <p>"Soft butter" means butter you can press a finger into easily, not butter that is melting and shiny. Cold butter will not trap air when beaten; melted butter will make the crumb dense and greasy. In winter, cube the butter and give it twenty minutes near — not on — a warm radiator. In summer, ten minutes on the counter is plenty.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Lesson two</span>
          <h3>The oven door stays shut</h3>
          <p>For the first twenty minutes of any sponge, the structure is held up by steam and hope. Opening the door drops the temperature sharply and the cake sinks in the middle. If you must check, look through the glass with the oven light on. The skewer test can wait until the minimum baking time has passed.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Lesson three</span>
          <h3>Weigh your flour, always</h3>
          <p>A cup of flour can weigh anywhere from 120 to 160 grams depending on how it is scooped. That difference is enough to turn a light sponge into a brick. A basic digital scale costs less than two failed cakes and lasts for years. Every recipe on this page gives grams first for exactly this reason.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Lesson four</span>
          <h3>Curdled batter is fixable</h3>
          <p>If the mixture splits when you add the eggs — it looks grainy and separated — do not panic and do not start over. Add a tablespoon of your measured flour and beat for thirty seconds. Repeat if needed. The cake will bake up fine. Cold eggs are usually the culprit, so let them sit in warm water for five minutes next time.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Lesson five</span>
          <h3>Know your own oven</h3>
          <p>Oven dials lie. Ours runs fifteen degrees hot at the back left corner, and we only learned this after years of rotating tins "just in case." An oven thermometer and one afternoon of testing will tell you more about your baking than any recipe book. Bake a plain sponge, note where it colours fastest, and adjust forever after.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Lesson six</span>
          <h3>Cooling is part of baking</h3>
          <p>A cake straight from the oven is still cooking inside. Ten minutes in the tin lets the structure firm up so it releases cleanly; the rest of the cooling happens on a rack so steam can escape from the bottom. Cut too early and the crumb tears and gums. We know waiting is hard. Wait anyway.</p>
        </div>
      </div>
    </div>
    <div class="dxn7c-grid2f6g8">
      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/827513/pexels-photo-827513.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Mixing cake batter in a glass bowl" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">In practice</span>
          <h3>The creaming stage, up close</h3>
          <p>Properly creamed butter and sugar turn noticeably paler and increase in volume. Under-creamed mixtures make heavy cakes; over-beaten mixtures after the flour goes in make tough ones. Beat hard before the flour, fold gently after it.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/1028714/pexels-photo-1028714.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Decorated cake with simple frosting swirls" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">In practice</span>
          <h3>Frosting without fuss</h3>
          <p>A cake frosted in a warm kitchen slides; a cake frosted while still warm melts. Chill the layers for twenty minutes, use a palette knife dipped in hot water, and accept that the first coat is a crumb coat — a thin layer that traps loose crumbs before the real one goes on.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- PANTRY -->
<section class="dxn7c-sectn6h1" id="dxn7s-pantra1s2">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">Be ready</div>
    <h2>The Cake Pantry Checklist</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>Keep these staples on the shelf and you are never more than an hour away from a fresh cake. This is the actual checklist taped inside our cupboard door, reprinted here without the coffee stains.</p>
    <table class="dxn7c-tablen3c7">
      <tr><th>Staple</th><th>Why it matters</th><th>How long it keeps</th></tr>
      <tr><td>Plain flour</td><td>The base of nearly every cake; add your own raising agent for control</td><td>6–8 months, airtight</td></tr>
      <tr><td>Self-raising flour</td><td>Convenience for sponges and loaves</td><td>3–4 months before the lift fades</td></tr>
      <tr><td>Caster sugar</td><td>Dissolves quickly for a fine, even crumb</td><td>Indefinite, kept dry</td></tr>
      <tr><td>Soft brown sugar</td><td>Moisture and caramel notes for tray cakes</td><td>6 months; soften with a bread slice</td></tr>
      <tr><td>Baking powder &amp; bicarbonate of soda</td><td>The lift. Test baking powder in hot water — it should fizz hard</td><td>6 months once opened</td></tr>
      <tr><td>Block butter</td><td>Flavour and structure; spreads and tubs behave differently</td><td>Freeze up to 6 months</td></tr>
      <tr><td>Eggs</td><td>Binding, lift and richness; room temperature for sponges</td><td>3–4 weeks refrigerated</td></tr>
      <tr><td>Vanilla extract</td><td>Real extract, not essence — the difference shows in plain cakes</td><td>Years, tightly sealed</td></tr>
      <tr><td>Cocoa powder</td><td>Unsweetened, for the one-bowl chocolate cake</td><td>2 years, airtight</td></tr>
      <tr><td>Lemons</td><td>Zest and juice for drizzles, curds and brightening heavy batters</td><td>2 weeks in the fridge drawer</td></tr>
      <tr><td>Cinnamon &amp; nutmeg</td><td>The autumn cakes depend on them; buy small jars and refresh yearly</td><td>12 months, then they fade</td></tr>
      <tr><td>Neutral oil</td><td>For oil-based cakes that stay moist for days</td><td>6 months, away from light</td></tr>
    </table>
    <div class="dxn7c-notex6z2">
      <strong>Freezer tip:</strong> butter, wrapped tightly, freezes perfectly. So do baked, unfrosted sponge layers — wrap in two layers of film and freeze for up to three months. Thaw overnight under a tea towel and nobody will ever know.
    </div>
  </div>
</section>

<!-- SEASONS -->
<section class="dxn7c-sectn6h1" id="dxn7s-seasond3f4">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">Through the year</div>
    <h2>The Seasonal Baking Calendar</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>The tin is organised by season, because the best cake is the one that matches what is ripe, what the weather is doing, and what the household feels like eating. Here is how the baking year usually unfolds.</p>
    <div class="dxn7c-grid2f6g8">
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Spring</span>
          <h3>Rhubarb, lemon and first berries</h3>
          <p>Forced rhubarb appears and goes straight into a crumble-topped tray cake. Lemon drizzle returns to the rotation after winter, and the first strawberries get folded into the buttermilk cake before they are quite sweet enough — a family tradition of impatience.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Summer</span>
          <h3>Berry everything, minimal oven time</h3>
          <p>The berry buttermilk cake is baked weekly, sometimes twice. On the hottest days the oven goes on early in the morning and cakes are eaten cold in the garden. Raspberry jam is made in bulk and fills sponges for the rest of the year.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Autumn</span>
          <h3>Apples, pears and warm spice</h3>
          <p>The windowsill apple cake season opens the moment the first windfalls arrive. Cinnamon and nutmeg return to the front of the shelf. Carrot tray cake is baked for school events, and the kitchen starts smelling like the photographs in the old notebook.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Winter</span>
          <h3>Chocolate, citrus and the big fruit cake</h3>
          <p>The one-bowl chocolate cake carries the household through the dark months. Citrus is at its best, so orange drizzle joins the rotation. In December the big fruit cake — soaked fruit, mixed spice, weeks of maturing — takes over the top shelf of the pantry.</p>
        </div>
      </div>
    </div>
    <div class="dxn7c-grid2f6g8">
      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/1702373/pexels-photo-1702373.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Celebration cake with berries on a stand" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Occasions</span>
          <h3>Birthdays and gatherings</h3>
          <p>For birthdays the household standard is a double vanilla sponge with jam and lightly sweetened cream, berries on top, candles as required. It has served ages one through ninety-one without a single complaint reaching the tin.</p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <img src="https://images.pexels.com/photos/2144200/pexels-photo-2144200.jpeg?auto=compress&cs=tinysrgb&w=900" alt="Slices of cake served with afternoon tea" loading="lazy">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">Occasions</span>
          <h3>The afternoon tea plate</h3>
          <p>When guests come at short notice, the lemon loaf is sliced thick, the kettle goes on, and nobody mentions that the cake was baked two days earlier. Loaf cakes improve with a day's rest — this is not an excuse, it is chemistry.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- REVIEWS -->
<section class="dxn7c-sectn6h1" id="dxn7s-reviewsg5h6">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">From the margins</div>
    <h2>Notes from People Who Baked Along</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>Readers and neighbours send notes by post and phone. A few favourites, shared with permission, names as they signed them.</p>
    <div class="dxn7c-grid3s5d7">
      <div class="dxn7c-reviewd2f5">
        <div class="dxn7c-starsg4h7">★★★★★</div>
        <p>"I have never baked anything in my life that did not come from a box. Made the lemon drizzle on a Saturday and my mother-in-law asked for the recipe. I have waited eleven years for this moment."</p>
        <div class="dxn7c-revnamej6k0">Priya N.</div>
        <div class="dxn7c-revrolet1m9">First-time baker, Leeds</div>
      </div>
      <div class="dxn7c-reviewd2f5">
        <div class="dxn7c-starsg4h7">★★★★★</div>
        <p>"The note about the oven door staying shut explained fifteen years of sunken sponges. Fifteen years. I am annoyed and grateful in equal measure. The chocolate cake is now my standard."</p>
        <div class="dxn7c-revnamej6k0">Graham T.</div>
        <div class="dxn7c-revrolet1m9">Reformed door-opener, Norwich</div>
      </div>
      <div class="dxn7c-reviewd2f5">
        <div class="dxn7c-starsg4h7">★★★★☆</div>
        <p>"Baked the apple cake with my granddaughter over a video call, her in Glasgow, me in Kent. Both came out well. Hers looked better, which I attribute to her youth and my oven. Docking one star out of pride."</p>
        <div class="dxn7c-revnamej6k0">Margaret W.</div>
        <div class="dxn7c-revrolet1m9">Long-distance baking partner, Kent</div>
      </div>
      <div class="dxn7c-reviewd2f5">
        <div class="dxn7c-starsg4h7">★★★★★</div>
        <p>"The carrot tray cake survived a forty-minute bike ride to a picnic in a backpack, wrapped in a tea towel. Still moist, still intact. This is the highest praise I can give a cake."</p>
        <div class="dxn7c-revnamej6k0">Tomasz K.</div>
        <div class="dxn7c-revrolet1m9">Cake courier, Bristol</div>
      </div>
      <div class="dxn7c-reviewd2f5">
        <div class="dxn7c-starsg4h7">★★★★★</div>
        <p>"My batter curdled and I nearly threw it out. Then I remembered the fix from the guide — spoon of flour, keep beating. Cake came out perfect. Felt like a small miracle performed in a mixing bowl."</p>
        <div class="dxn7c-revnamej6k0">Adele R.</div>
        <div class="dxn7c-revrolet1m9">Curdle survivor, Cardiff</div>
      </div>
      <div class="dxn7c-reviewd2f5">
        <div class="dxn7c-starsg4h7">★★★★★</div>
        <p>"Weighed my flour for the first time ever after reading the pantry page. The difference in my sponge was embarrassing. I have been scooping wrong since 1998 and nobody told me."</p>
        <div class="dxn7c-revnamej6k0">Colin D.</div>
        <div class="dxn7c-revrolet1m9">Convert to the scale, Sheffield</div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section class="dxn7c-sectn6h1" id="dxn7s-faqj7k8">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">Asked often</div>
    <h2>Frequently Asked Questions</h2>
    <div class="dxn7c-rulew2e9"></div>
    <div class="dxn7c-faqitemv5b8">
      <h3>Can I freeze these cakes?</h3>
      <p>Yes, almost all of them. Sponges, loaves and tray cakes freeze well for up to three months if wrapped tightly while completely cool. Freeze before frosting or glazing where possible. Thaw overnight at room temperature under a clean tea towel.</p>
    </div>
    <div class="dxn7c-faqitemv5b8">
      <h3>My cake sank in the middle — what happened?</h3>
      <p>The usual suspects: the oven door was opened too early, the raising agent was old, the batter was over-beaten after the flour went in, or the cake was underbaked. Check your baking powder by stirring a teaspoon into hot water — it should fizz vigorously. If it barely bubbles, replace it.</p>
    </div>
    <div class="dxn7c-faqitemv5b8">
      <h3>Can I swap butter for oil in the sponge recipes?</h3>
      <p>You can, but the texture changes. Oil gives a moister, denser crumb and no creaming stage, so the cake will be less airy. Use about 80% of the butter weight in oil, and mix the eggs and sugar well before adding it. The chocolate and carrot cakes here are already oil-based if you prefer that route.</p>
    </div>
    <div class="dxn7c-faqitemv5b8">
      <h3>Do I need a stand mixer?</h3>
      <p>No. Every recipe on this page can be made with a wooden spoon and some determination, which is how they were all originally developed. A hand whisk speeds up the creaming stage, but generations of cakes were beaten by arm power alone and turned out fine.</p>
    </div>
    <div class="dxn7c-faqitemv5b8">
      <h3>How do I know when a cake is done?</h3>
      <p>Three signs together: the top springs back when pressed lightly, the edges are just pulling away from the tin, and a skewer pushed into the centre comes out clean or with a few dry crumbs. Wet batter means more time; a few moist crumbs on a chocolate cake means it is exactly right.</p>
    </div>
    <div class="dxn7c-faqitemv5b8">
      <h3>Can I reduce the sugar?</h3>
      <p>By about 15–20% without structural damage in most of these recipes. Sugar is not only sweetness — it holds moisture and tenderises the crumb, so cutting it further will give a drier, firmer cake. If you want a less sweet result, choose the apple or carrot cakes, which rely partly on fruit for sweetness.</p>
    </div>
  </div>
</section>

<!-- CONTACT -->
<section class="dxn7c-sectn6h1" id="dxn7s-contactl9z0">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-kickerj4k9">Get in touch</div>
    <h2>Contact the Kitchen</h2>
    <div class="dxn7c-rulew2e9"></div>
    <p>Questions about a recipe, corrections for the tin, or a cake story worth hearing — the phone line is open on weekday mornings, and letters are always welcome. The kettle is usually on.</p>
    <div class="dxn7c-grid2f6g8">
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">By phone</span>
          <h3>Recipe helpline</h3>
          <p>Monday to Friday, 9:00 – 12:30. If the line is busy, someone is mid-sponge — try again after the timer goes off.</p>
          <p><strong><a href="tel:+441632960847" style="color:var(--dxn7-berry);">+44 1632 960847</a></strong></p>
        </div>
      </div>
      <div class="dxn7c-cardh7j2">
        <div class="dxn7c-cardbodyk3l6">
          <span class="dxn7c-tagm8n4">By post</span>
          <h3>Letters to the tin</h3>
          <p>Dexloranow Kitchen<br>14 Marigold Lane, Unit 3<br>Bramblewick, North Riding<br>BR4 7QT, United Kingdom</p>
          <p>Recipe corrections are read aloud at Sunday lunch before being filed.</p>
        </div>
      </div>
    </div>
  </div>
</section>

</main>

<!-- FOOTER -->
<footer class="dxn7c-footq8w4">
  <div class="dxn7c-wrapa3f9">
    <div class="dxn7c-footgride5r3">
      <div>
        <h3>Dexloranow Kitchen</h3>
        <p>An independent family recipe journal for homestyle cakes. Written at the kitchen table, tested in an ordinary oven, and shared freely with anyone who owns a mixing bowl.</p>
        <p>14 Marigold Lane, Unit 3, Bramblewick, North Riding BR4 7QT, United Kingdom</p>
      </div>
      <div>
        <h3>Contact</h3>
        <ul>
          <li>Recipe helpline: Mon–Fri, 9:00–12:30</li>
          <li>Post answered within two weeks</li>
          <li>Corrections read aloud on Sundays</li>
        </ul>
        <a class="dxn7c-telbtny2u6" href="tel:+441632960847">&#128222; Call +44 1632 960847</a>
      </div>
      <div>
        <h3>On this page</h3>
        <ul>
          <li><a href="#dxn7s-aboute3r4">About the kitchen</a></li>
          <li><a href="#dxn7s-storyt5y6">Our story</a></li>
          <li><a href="#dxn7s-recipesu7i8">Cake recipes</a></li>
          <li><a href="#dxn7s-guideo9p0">Baking guide</a></li>
          <li><a href="#dxn7s-pantra1s2">Pantry checklist</a></li>
          <li><a href="#dxn7s-seasond3f4">Seasonal calendar</a></li>
          <li><a href="#dxn7s-reviewsg5h6">Reader notes</a></li>
          <li><a href="#dxn7s-faqj7k8">FAQ</a></li>
        </ul>
      </div>
    </div>
    <div class="dxn7c-footboti7o9">
      <span>&copy; 2025 Dexloranow Kitchen. All recipes free to bake, share and adapt.</span>
      <span>
        <button class="dxn7c-legalbtnp1a4" onclick="dxn7OpenModal('dxn7m-privacyx1')">Privacy Policy</button>
        &nbsp;·&nbsp;
        <button class="dxn7c-legalbtnp1a4" onclick="dxn7OpenModal('dxn7m-termsz2')">Terms of Service</button>
      </span>
    </div>
  </div>
</footer>

<!-- PRIVACY POLICY MODAL -->
<div class="dxn7c-modalbk8s3" id="dxn7m-privacyx1">
  <div class="dxn7c-modalboxl2d6">
    <button class="dxn7c-modalclosef9g1" onclick="dxn7CloseModal('dxn7m-privacyx1')" aria-label="Close">&times;</button>
    <h2>Privacy Policy</h2>
    <p><strong>Effective date:</strong> 1 January 2025. This Privacy Policy explains how Dexloranow Kitchen ("we", "us", "our") handles information in connection with this website (the "Site").</p>
    <h3>1. Information we collect</h3>
    <p>This Site is a static recipe page. We do not operate user accounts, comment systems, or contact forms on this page, and we do not directly collect names, addresses or other personal details through the Site itself.</p>
    <ul>
      <li><strong>Server logs:</strong> like most websites, our hosting provider may automatically record technical data such as IP address, browser type, referring page and time of visit for security and operational purposes.</li>
      <li><strong>Voluntary contact:</strong> if you telephone us or write to us by post, we keep only the information you choose to share, and only for as long as needed to respond.</li>
    </ul>
    <h3>2. Cookies and analytics</h3>
    <p>The Site itself does not set first-party tracking cookies. If basic, privacy-respecting analytics are enabled by our hosting provider, they are used only in aggregate form to understand overall visitor numbers and popular sections. We do not build individual profiles.</p>
    <h3>3. Third-party content</h3>
    <p>Images on this page are loaded from third-party image hosting services. When your browser requests those images, the hosting service may receive standard technical request data (such as your IP address) according to its own privacy policy, which we do not control.</p>
    <h3>4. How we use information</h3>
    <ul>
      <li>To operate, maintain and secure the Site;</li>
      <li>To respond to questions or corrections you send us;</li>
      <li>To understand, in aggregate, which recipes readers find most useful.</li>
    </ul>
    <h3>5. Data sharing</h3>
    <p>We do not sell, rent or trade personal information. We do not share information with third parties except where required by law or where necessary to operate the Site (for example, our hosting provider).</p>
    <h3>6. Data retention</h3>
    <p>Correspondence is kept only as long as needed to handle your enquiry, after which it is deleted or destroyed. Server logs are rotated and deleted by our hosting provider on their standard schedule.</p>
    <h3>7. Your rights</h3>
    <p>Depending on your location, you may have rights to access, correct, or request deletion of personal data we hold about you, and to object to or restrict certain processing. To exercise any of these rights, contact us by phone or post using the details in the footer of this page.</p>
    <h3>8. Children</h3>
    <p>The Site is a general-audience recipe page and is not directed at children. We do not knowingly collect personal information from children.</p>
    <h3>9. Changes to this policy</h3>
    <p>We may update this policy from time to time. The current version will always be available on this page with its effective date shown above.</p>
    <h3>10. Contact</h3>
    <p>Questions about this policy can be sent by post to the address in the footer, or raised by phone during helpline hours.</p>
  </div>
</div>

<!-- TERMS OF SERVICE MODAL -->
<div class="dxn7c-modalbk8s3" id="dxn7m-termsz2">
  <div class="dxn7c-modalboxl2d6">
    <button class="dxn7c-modalclosef9g1" onclick="dxn7CloseModal('dxn7m-termsz2')" aria-label="Close">&times;</button>
    <h2>Terms of Service</h2>
    <p><strong>Effective date:</strong> 1 January 2025. These Terms of Service ("Terms") govern your use of the Dexloranow Kitchen website (the "Site"). By using the Site, you accept these Terms.</p>
    <h3>1. About the Site</h3>
    <p>The Site is a personal recipe journal offering cake recipes, baking guidance and related content for general information and home use. It is provided free of charge.</p>
    <h3>2. Use of recipes and content</h3>
    <ul>
      <li>You may bake, share and adapt the recipes for personal, non-commercial use.</li>
      <li>You may not republish the Site's text or images in bulk, or present them as your own work, without written permission.</li>
      <li>Short quotations with clear credit and a link back to the Site are welcome.</li>
    </ul>
    <h3>3. No professional advice</h3>
    <p>Content on the Site reflects home baking experience and personal opinion. It is not professional culinary, nutritional, dietary or medical advice. Always check ingredient labels for allergens and adjust recipes to your own dietary needs. Baking involves hot ovens and sharp tools — use appropriate care and supervise children at all times.</p>
    <h3>4. Accuracy</h3>
    <p>We test recipes carefully, but ovens, ingredients and kitchens vary. We do not guarantee that every recipe will produce identical results in every kitchen, and we are not liable for outcomes of recipes prepared using the Site.</p>
    <h3>5. Third-party content and links</h3>
    <p>The Site displays images hosted by third-party services. We are not responsible for the availability, content or practices of those services.</p>
    <h3>6. Intellectual property</h3>
    <p>The text, structure and design of the Site are the property of Dexloranow Kitchen unless otherwise stated. Third-party images remain the property of their respective owners and are used under their applicable licences.</p>
    <h3>7. Limitation of liability</h3>
    <p>To the fullest extent permitted by law, the Site is provided "as is" without warranties of any kind, and we exclude liability for any loss or damage arising from use of the Site, except where such liability cannot be excluded by law.</p>
    <h3>8. Acceptable use</h3>
    <p>You agree not to misuse the Site, attempt to disrupt its operation, scrape it in a way that imposes unreasonable load, or use it for any unlawful purpose.</p>
    <h3>9. Changes to these Terms</h3>
    <p>We may revise these Terms from time to time. The current version will always be available on this page with its effective date shown above. Continued use of the Site after changes take effect constitutes acceptance.</p>
    <h3>10. Governing law</h3>
    <p>These Terms are governed by the laws of England and Wales, and any disputes will be subject to the exclusive jurisdiction of the courts of England and Wales.</p>
    <h3>11. Contact</h3>
    <p>Questions about these Terms can be sent by post to the address in the footer, or raised by phone during helpline hours.</p>
  </div>
</div>

<script>
function dxn7OpenModal(id){
  document.getElementById(id).style.display='block';
  document.body.style.overflow='hidden';
}
function dxn7CloseModal(id){
  document.getElementById(id).style.display='none';
  document.body.style.overflow='';
}
window.addEventListener('click',function(e){
  if(e.target.classList && e.target.classList.contains('dxn7c-modalbk8s3')){
    e.target.style.display='none';
    document.body.style.overflow='';
  }
});
document.addEventListener('keydown',function(e){
  if(e.key==='Escape'){
    var m=document.querySelectorAll('.dxn7c-modalbk8s3');
    for(var i=0;i<m.length;i++){m[i].style.display='none';}
    document.body.style.overflow='';
  }
});
</script>

<a href="/" alt="stats counter free" target="_blank" >
<img  src="https://sstatic1.histats.com/0.gif?4977134&101" alt="stats counter free" border="0">





</body>
</html>
