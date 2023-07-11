<?php
	session_start();
	if(@$_SESSION["autoriser"]!="oui"){
		header("location:login.php");
		exit();
	}
?>
<!DOCYTPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/style1.css" />
	</head>
	<body>
		<header>
			Espace privé 
			<a href="deconnexion.php">Quitter la session</a>
		</header>
<div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div> 
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
</div>

<!-- <style>*{color:#FFFFFF;}ul#nx {position:absolute;height:100%;top:8;left:22;  writing-mode:horizontal-rl;
text-align:left;font-size:3.2rem;}ul#nx>li {display:inline-block;padding:2 rem;}</style><ul id="nx"><li>svg particles !!! *** 6 kb</li></ul> 
<style>body{position:relative; background:url("  https://i.postimg.cc/3xj5MhJ7/ff4.jpg ");         
background-size:cover;width:100%;height:100vh;}</style>
<style>svg {position: absolute;  top: 0;bottom: 0;  left: 0; right: 0;  margin: auto;}
body { background-color: #000000;overflow: hidden;}</style><script>
  window.console = window.console || function(t) {};</script><script>
  if (document.location.search.match(/type=embed/gi)) {  window.parent.postMessage("resize", "*"); }</script></head><body translate="no">
  <script>;(function (global) {  let Goo = class {   constructor(width, height, other) {    this.currentFilter = '';
      let svgElement;     if (width === undefined) {     svgElement = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        document.body.appendChild(svgElement);     } else if (typeof width != typeof {}) {
        svgElement = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svgElement.setAttribute("width", width);   svgElement.setAttribute("height", height);
        document.body.appendChild(svgElement);     } else {    }
      this.element = svgElement;   this.addFilter("goojs-default", this.currentFilter);  this.differentFilters = 0;   }

    get filterID() {  return this.differentFilters++;  }
   deleteFilter(name) {   let filter = this.element.getElementById(name);  if (filter) {  filter.parentNode.removeChild(filter);  }}

    addFilter(name, filterData) { }

    get filter() {   return this.currentFilter; }

    set filter(newFilter) {  this.currentFilter = newFilter;  this.addFilter("goojs-default", this.currentFilter); }

    layer() {   return new GooLayer(this); }

    get width() {  return this.element.getAttribute("width"); }

    set width(val) { this.element.setAttributeNS(null, "width", val); }

    get height() {    return this.element.getAttribute("height"); }

    set height(val) { this.element.setAttributeNS(null, "height", val); }};

 let GooLayer = class { constructor(goo) {  this.currentFilter = "goojs-default";
      this.goo = goo;  let svgns = "http://www.w3.org/2000/svg";     this.group = document.createElementNS(svgns, "g");
      this.group.setAttribute("filter", "url(#" + this.currentFilter + ")");     this.goo.element.appendChild(this.group);   this.circles = []; }

    color(color) {    for (let circle of this.circles) {   circle.color(color);  } }

    circle() { let circle = new GooCircle(this);   this.circles.push(circle);  return circle; } };

let GooCircle = class {  constructor(layer) {  this.layer = layer;  let svgns = "http://www.w3.org/2000/svg";
      this.circle = document.createElementNS(svgns, "circle"); this.data = {};  this.update();
      this.layer.group.appendChild(this.circle); }

    update() {  this.circle.setAttributeNS(null, "cx", this.data.xpos); this.circle.setAttributeNS(null, "cy", this.data.ypos);
      this.circle.setAttributeNS(null, "r", this.data.radius);   this.circle.setAttributeNS(null, "fill", this.data.color); }

    pos(x, y) {   this.data.xpos = x;  this.data.ypos = y;  this.update();  return this;  }
color(color) {    if (color) { this.data.color = color;   this.update();   return this;
      } else {    return this.data.color;  }}

    size(size) { if (size) {   this.data.radius = size / 2; this.update();   return this;
      } else {   return this.data.radius * 2;  }  }

    radius(size) {    }

    detatch() {       }

    remove() {      }

    delete() {  this.circle.parentNode.removeChild(this.circle);   }};
 global.Goo = Goo;})(window);</script>   <script id="rendered-js">
let goo = new Goo(1600,1000);

class RotatingFlame { constructor(colors, sizes, times, start) {  this.colors = colors;   this.sizes = sizes;
    this.times = times;    this.layers = [];  for (let i = 0; i < this.colors.length; i++) {    this.layers.push(goo.layer()); }
    this.particles = [];   this.timer = 0;   this.speed = 0.4; this.start = start;
    let move = () => {   this.timer++;
      if (this.timer % 1 < 1) {   let x = 620;   let y =  420;   for (let i = 0; i < this.colors.length; i++) {      let dir = Math.random() *33.5;  let speed = 6;
          this.particles.push(new Particle(this.layers[i], x, y, Math.sin(dir) * speed, Math.cos(dir) * speed, this.colors[i], this.sizes[i], this.times[i], this));    }   }
      requestAnimationFrame(move); };  move();}}
class Particle {  constructor(layer, x, y, xv, yv, color, size, time, flame) {
    this.layer = layer;  this.pos = { x: x, y: y };    this.vel = { x: xv, y: yv };
    this.size = size;   this.time = time;   this.initTime = time;
    this.flame = flame;   this.circle = layer.circle().pos(x, y).color(color).size(size);
    let move = () => {    this.pos.x += this.vel.x;  this.pos.y += this.vel.y;   this.time -= 1;
      this.circle.pos(this.pos.x, this.pos.y).size(this.size * this.time / this.initTime);
      if (this.time <= 0) {       this.circle.delete();    this.flame.particles.splice(this.flame.particles.indexOf(this), 1);
      } else {        requestAnimationFrame(move);    } };   requestAnimationFrame(move); }}

let sizes = [120, 50, 40, 30, 20];let times = [100, 25, 20, 15, 10];

new RotatingFlame(["#ff0000", "#ff0000", "#FF9800"], sizes, times, 0);
new RotatingFlame(["#ff0000", "#ff0000", "#4FC3F7"], sizes, times,1);
new RotatingFlame(["#01579B", "#1976D2", "#4FC3F7"], sizes, times,2);
new RotatingFlame(["#ffffff", "#F4511E", "#FF9800"], sizes, times, 3);
new RotatingFlame(["#01579B", "#1976D2", "#4FC3F7"], sizes, times,4);
new RotatingFlame(["#ffffff", "#ffffff", "#4FC3F7"], sizes, times,5);

    </script><svg width="1600" height="900"><defs><filter id="goojs-default" x="-100%" y="-100%" width="300%" height="300%"><fegaussianblur in="SourceGraphic" stdDeviation="8" result="blur"></fegaussianblur> </filter></defs><g filter="url(#goojs-default)"></g></svg> -->
		<h1>
		<?php 
			echo (date("H")<18)?("Bonjour"):("Bonsoir");
		?>
		<span>
		<?=$_SESSION["nomPrenom"]?>
		</span>
		</h1>
	</body>
</html>