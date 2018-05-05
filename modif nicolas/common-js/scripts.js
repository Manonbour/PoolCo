
(function ($) {

    "use strict";
	
	

	// LINE PROGRESS BAR
	enableLineProgress();
	
	// RADIAL PROGRESS BAR
	enableRadialProgress();
	
	// ACCORDIAN
	panelAccordian();

	$(window).on('load', function(){
		
		// ISOTOPE PORTFOLIO WITH FILTER
		if(isExists('.portfolioContainer')){
			var $container = $('.portfolioContainer');
			$container.isotope({
				filter: '*',
				animationOptions: {
					duration: 750,
					easing: 'linear',
					queue: false
				}
			});
		 
			$('.portfolioFilter a').click(function(){
				$('.portfolioFilter .current').removeClass('current');
				$(this).addClass('current');
		 
				var selector = $(this).attr('data-filter');
				$container.isotope({
					filter: selector,
					animationOptions: {
						duration: 750,
						easing: 'linear',
						queue: false
					}
				 });
				 return false;
			}); 
		}
	
	});
	
	
	$('a[href="#"]').on('click', function(event){
		return;
	});
	
	
	if ( $.isFunction($.fn.fluidbox) ) {
		$('a').fluidbox();
	}
	
	var countCounterUp = 0;
	
	var a = 0 ;
	
	countCounterUp = enableCounterUp(countCounterUp);
	
	$(window).on('scroll', function(){
		
		countCounterUp = enableCounterUp(countCounterUp);
	
	});
	
	
})(jQuery);

function panelAccordian(){
	
	var panelTitle = $('.panel-title');
	panelTitle.on('click', function(){
		$('.panel-title').removeClass('active');
		$(this).toggleClass('active');
		
	});
	
}

function enableRadialProgress(){
	
	$(".radial-progress").each(function(){
		var $this = $(this),
			progPercent = $this.data('prog-percent');
			
		var bar = new ProgressBar.Circle(this, {
			color: '#aaa',
			strokeWidth: 3,
			trailWidth: 1,
			easing: 'easeInOut',
			duration: 1400,
			text: {
				
			},
			from: { color: '#aaa', width: 1 },
			to: { color: '#FEAE01', width: 3 },
			// Set default step function for all animate calls
			step: function(state, circle) {
				circle.path.setAttribute('stroke', state.color);
				circle.path.setAttribute('stroke-width', state.width);

				var value = Math.round(circle.value() * 100);
				if (value === 0) {
					circle.setText('');
				} else {
					circle.setText(value);
				}

			}
		});
		
		$(this).waypoint(function(){
		   bar.animate(progPercent);  
		},{offset: "90%"})
		
	});
}

function enableLineProgress(){
	
	$(".line-progress").each(function(){
		var $this = $(this),
			progPercent = $this.data('prog-percent');
			
		var bar = new ProgressBar.Line(this, {
			strokeWidth: 1,
			easing: 'easeInOut',
			duration: 1400,
			color: '#FEAE01',
			trailColor: '#eee',
			trailWidth: 1,
			svgStyle: {width: '100%', height: '100%'},
			text: {
				style: {
					
				},
			},
			from: {color: '#FFEA82'},
			to: {color: '#ED6A5A'},
			step: (state, bar) => {
				bar.setText(Math.round(bar.value() * 100) + ' %');
			}
		});
		
		$(this).waypoint(function(){
		   bar.animate(progPercent);  
		},{offset: "90%"})
		
	});
}

function enableCounterUp(a){
	
	var counterElement;
	
	if(isExists('#counter')){ counterElement = $('#counter'); }
	else{ return; }
		
	var oTop = $('#counter').offset().top - window.innerHeight;
	if (a == 0 && $(window).scrollTop() > oTop) {
		$('.counter-value').each(function() {
			var $this = $(this),
				countDuration = $this.data('duration'),
				countTo = $this.attr('data-count');
			$({
				countNum: $this.text()
			}).animate({
				countNum: countTo
			},{

				duration: countDuration,
				easing: 'swing',
				step: function() {
					$this.text(Math.floor(this.countNum));
				},
				complete: function() {
					$this.text(this.countNum);
				}

			});
		});
		a = 1;
	}

	return a;
}

function isExists(elem){
	if ($(elem).length > 0) { 
		return true;
	}
	return false;
}


/* Boite de dialogue modifs intro*/

fermeBoite();
function fermeBoite()
{
  document.getElementById("monPrompt").style.display = "none";
  document.getElementById("idFond").style.display = "none";
}

function ouvreBoite()
{
  document.getElementById("monPrompt").style.display = "block";
  document.getElementById("idFond").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk()
{
  fermeBoite();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler()
{
  fermeBoite();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}

/* Boite de dialogue modifs à propos de moi*/
fermeBoite2();
function fermeBoite2()
{
  document.getElementById("monPrompt2").style.display = "none";
  document.getElementById("idFond2").style.display = "none";
}

function ouvreBoite2()
{
  document.getElementById("monPrompt2").style.display = "block";
  document.getElementById("idFond2").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk2()
{
  fermeBoite2();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler2()
{
  fermeBoite2();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}

/* Boite de dialogue modifs experience pro 1*/

fermeBoite3bis();
function fermeBoite3bis()
{
  document.getElementById("monPrompt3bis").style.display = "none";
  document.getElementById("idFond3bis").style.display = "none";
}

function ouvreBoite3bis()
{
  document.getElementById("monPrompt3bis").style.display = "block";
  document.getElementById("idFond3bis").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk3bis()
{
  fermeBoite3bis();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler3bis()
{
  fermeBoite3bis();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}

/* Boite de dialogue modifs experience pro 2*/

fermeBoite3();
function fermeBoite3()
{
  document.getElementById("monPrompt3").style.display = "none";
  document.getElementById("idFond3").style.display = "none";
}

function ouvreBoite3()
{
  document.getElementById("monPrompt3").style.display = "block";
  document.getElementById("idFond3").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk3()
{
  fermeBoite3();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler3()
{
  fermeBoite3();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}

/* Boite de dialogue modifs education 1*/

fermeBoite42();
function fermeBoite42()
{
  document.getElementById("monPrompt42").style.display = "none";
  document.getElementById("idFond42").style.display = "none";
}

function ouvreBoite42()
{
  document.getElementById("monPrompt42").style.display = "block";
  document.getElementById("idFond42").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk42()
{
  fermeBoite42();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler42()
{
  fermeBoite42();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}

/* Boite de dialogue modifs education 2*/

fermeBoite41();
function fermeBoite41()
{
  document.getElementById("monPrompt41").style.display = "none";
  document.getElementById("idFond41").style.display = "none";
}

function ouvreBoite41()
{
  document.getElementById("monPrompt41").style.display = "block";
  document.getElementById("idFond41").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk41()
{
  fermeBoite41();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler41()
{
  fermeBoite41();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}


/* Boite de dialogue modifs education3*/

fermeBoite4();
function fermeBoite4()
{
  document.getElementById("monPrompt4").style.display = "none";
  document.getElementById("idFond4").style.display = "none";
}

function ouvreBoite4()
{
  document.getElementById("monPrompt4").style.display = "block";
  document.getElementById("idFond4").style.display = "block";
}
 
 
/**************************************************************************/
/** Actions realisees par l utilisateur si clic sur Ok ou Annuler *********/
function clicOk4()
{
  fermeBoite4();
 
  /** Autres actions a realiser si clic sur Ok **/
  /** ... **/
}
 
 
function clicAnnuler()
{
  fermeBoite4();
 
  /** Autres actions a realiser si clic sur annuler **/
  /** ... **/
}