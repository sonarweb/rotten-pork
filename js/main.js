!function(e) {
    var t= {
}
;
    function o(n) {
    if(t[n])return t[n].exports;
    var r=t[n]= {
    i: n, l:!1, exports: {
}
}
;
    return e[n].call(r.exports, r, r.exports, o), r.l=!0, r.exports;
}
o.m=e, o.c=t, o.d=function(e, t, n) {
    o.o(e, t)||Object.defineProperty(e, t,  {
    enumerable: !0, get:n,
}
);
}, o.r=function(e) {
    "undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e, Symbol.toStringTag,  {
    value: "Module"}
), Object.defineProperty(e, "__esModule",  {
    value: !0,
}
);
}, o.t=function(e, t) {
    if(1&t&&(e=o(e)), 8&t)return e;
    if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;
    var n=Object.create(null);
    if(o.r(n), Object.defineProperty(n, "default",  {
    enumerable: !0, value:e,
}
), 2&t&&"string"!=typeof e)for(var r in e)o.d(n, r, function(t) {
    return e[t];
}
.bind(null, r));
    return n;
}
, o.n=function(e) {
    var t=e&&e.__esModule?function() {
    return e.default;
}
: function() {
    return e;
}
;
    return o.d(t, "a", t), t;
}
, o.o=function(e, t) {
    return Object.prototype.hasOwnProperty.call(e, t);
}
, o.p="/", o(o.s=1);
}( {
    1: function(e, t, o) {
    e.exports=o("8yrV");
}
, "8yrV": function(e, t) {
    function o() {
    $(window).scrollTop()>200?$("#navigation").addClass("colorized"): $("#navigation").removeClass("colorized");
}
function n() {
    $("#navigation .sidebar").addClass("show"), function() {
    if(!$("#backdrop").length) {
    document.body.style.overflow="hidden";
    var e=$('<div class="backdrop fade" id="backdrop"></div>');
    $("body").append(e);
    e.outerHeight();
    e.addClass("show");
}
}();
}function r() {
    $("#navigation .sidebar").removeClass("show"), function() {
    if($("#backdrop").length) {
    document.body.style.overflow="";
    var e=$("#backdrop");
    e.removeClass("show");
    var t=function(e) {
    if(!e)return 0;
    var t=$(e).css("transition-duration"), o=$(e).css("transition-delay"), n=parseFloat(t), r=parseFloat(o);
    if(!n&&!r)return 0;
    return t=t.split(", ")[0], o=o.split(", ")[0], 1e3*(parseFloat(t)+parseFloat(o));
}
(e);
    setTimeout((function() {
    e.remove();
}
), t);
}}();
}function i() {
    window.innerWidth>=992&&r();
}
$((function() {
    var e, t;
    $("#navigation").length&&(o(), $("#show-sidebar").click(n), $("#hide-sidebar").click(r), $("body").on("click", "#backdrop", r), $(window).scroll((function() {
    e&&window.clearTimeout(e), e=window.setTimeout(o, 100);
}
)), $(window).on("orientation resize", (function() {
    clearTimeout(t), t=setTimeout(i, 500);
}
)));}))}})



var slider =tns({
  container: ".members",
  items: 3,
  center: true,
  edgePadding: 30,
  gutter: 30,
  responsive: {
    "200": {
      items: 1,
	  autoplay: true,
	  center: true,
    },
    "600": {
      items: 3
    }
  },
  autoplay: true,
  autoplayButtonOutput: false,
  loop: true,
  controls: false,	
  mouseDrag: true,
  slideBy: "page",
  swipeAngle: false,
  speed: 500,
  navPosition: "bottom",
  nav: true
});


	


		var slider =tns({
  container: ".cds",
  items: 3,
  center: true,
  edgePadding: 30,
  gutter: 30,
  responsive: {
    "200": {
      items: 1,
	  autoplay: false,
	  center: true,
    },
    "600": {
      items: 1,
    },
	"900": {
		items: 2,
		fixedWidth: 400,
		gutter: 40,
		center: true
	}
  },
  autoplay: true,
  autoplayButtonOutput: false,
  loop: true,
  controls: false,	
  mouseDrag: true,
  slideBy: "page",
  swipeAngle: false,
  speed: 500,
  navPosition: "bottom",
  nav: true
});


	


