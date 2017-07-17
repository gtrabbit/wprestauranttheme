window.onload = function(){
	document.getElementById('menu').style.backgroundImage = 'url(' + document.getElementById("menu").dataset.url + '), linear-gradient(to bottom, black, white)';
	console.log(document.getElementById('landing').dataset.url)
	document.getElementById('landing').style.backgroundImage = 'url(' + document.getElementById('landing').dataset.url + '), radial-gradient(ellipse farthest-corner at 45% 45%, rgba(80,60,40,0.8), rgba(0,0,0,1))';
	console.log(document.getElementById('landing').style.background)
	let paraEls = Array.from(document.querySelectorAll('section[data-type="background"]'))
	let header = document.getElementsByClassName('nav-menu')[0];
	makeScrolly(paraEls, header);
	animateTitle();
	gallery();

}
const makeScrolly = function(paraEls, header){
	let height = window.innerHeight;
	window.onscroll = () => {
		paraEls.forEach( (el) => {
			let yPos = -(document.body.scrollTop / el.dataset.speed ) + Number(el.dataset.offset);
			let coords = '50% ' + yPos + 'px';
			el.style.backgroundPosition = coords;
		})	
		if (document.body.scrollTop > height){
			header.style.opacity = 1
		} else {
			header.style.opacity = 0
		}
	}
}

const animateTitle = function(){
	let landing = document.getElementById('landingTitleHolder');
	let line = document.getElementById('landingLine');
	let tinies = Array.from(document.getElementsByClassName('tinies'));

	for (let key in tinies){
		window.setTimeout(function(a){
			tinies[key].style.color = "white";
		}, 200*(5-key))	
	}
	landing.style.color = "white";
	landingLine.style.width = "60%";
}



const gallery = function(){

	let circles = Array.from(document.getElementsByClassName('tinyCircle'));
	let urls = [];
	circles.forEach((a, i)=>{
		urls.push(a.dataset.url);
		a.addEventListener('click', ()=>{
			circles.forEach(a=>{
				a.className = "tinyCircle";
			})
			a.className += " active";
			document.getElementById('theImage').setAttribute('src', urls[i]);
		})
	});
	circles[0].className += " active";
	document.getElementById('theImage').setAttribute('src', urls[0]);
	let pointless = document.getElementById('pointLessPhoto')
	pointless.style.backgroundImage = 'url(' + pointless.dataset.image + ')';
}