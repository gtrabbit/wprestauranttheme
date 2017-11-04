//IE polyfill

if (!Array.from) {
  Array.from = (function () {
    var toStr = Object.prototype.toString;
    var isCallable = function (fn) {
      return typeof fn === 'function' || toStr.call(fn) === '[object Function]';
    };
    var toInteger = function (value) {
      var number = Number(value);
      if (isNaN(number)) { return 0; }
      if (number === 0 || !isFinite(number)) { return number; }
      return (number > 0 ? 1 : -1) * Math.floor(Math.abs(number));
    };
    var maxSafeInteger = Math.pow(2, 53) - 1;
    var toLength = function (value) {
      var len = toInteger(value);
      return Math.min(Math.max(len, 0), maxSafeInteger);
    };

    // The length property of the from method is 1.
    return function from(arrayLike/*, mapFn, thisArg */) {
      // 1. Let C be the this value.
      var C = this;

      // 2. Let items be ToObject(arrayLike).
      var items = Object(arrayLike);

      // 3. ReturnIfAbrupt(items).
      if (arrayLike == null) {
        throw new TypeError("Array.from requires an array-like object - not null or undefined");
      }

      // 4. If mapfn is undefined, then let mapping be false.
      var mapFn = arguments.length > 1 ? arguments[1] : void undefined;
      var T;
      if (typeof mapFn !== 'undefined') {
        // 5. else
        // 5. a If IsCallable(mapfn) is false, throw a TypeError exception.
        if (!isCallable(mapFn)) {
          throw new TypeError('Array.from: when provided, the second argument must be a function');
        }

        // 5. b. If thisArg was supplied, let T be thisArg; else let T be undefined.
        if (arguments.length > 2) {
          T = arguments[2];
        }
      }

      // 10. Let lenValue be Get(items, "length").
      // 11. Let len be ToLength(lenValue).
      var len = toLength(items.length);

      // 13. If IsConstructor(C) is true, then
      // 13. a. Let A be the result of calling the [[Construct]] internal method of C with an argument list containing the single item len.
      // 14. a. Else, Let A be ArrayCreate(len).
      var A = isCallable(C) ? Object(new C(len)) : new Array(len);

      // 16. Let k be 0.
      var k = 0;
      // 17. Repeat, while k < len… (also steps a - h)
      var kValue;
      while (k < len) {
        kValue = items[k];
        if (mapFn) {
          A[k] = typeof T === 'undefined' ? mapFn(kValue, k) : mapFn.call(T, kValue, k);
        } else {
          A[k] = kValue;
        }
        k += 1;
      }
      // 18. Let putStatus be Put(A, "length", len, true).
      A.length = len;
      // 20. Return A.
      return A;
    };
  }());
}


window.onload = function(){
	document.getElementById('menu').style.backgroundImage = 'url(' + document.getElementById("menu").dataset.url + '), linear-gradient(to bottom, black, white)';
	document.getElementById('landing').style.backgroundImage = 'url(' + document.getElementById('landing').dataset.url + '), radial-gradient(ellipse farthest-corner at 45% 45%, rgba(80,60,40,0.8), rgba(0,0,0,1))';
	let paraEls = Array.from(document.querySelectorAll('section[data-type="background"]'))
	let header = document.getElementsByClassName('nav-menu')[0];
	makeScrolly(paraEls, header);
	animateTitle();
	gallery();

}
const makeScrolly = function(paraEls, header){
	let height = window.innerHeight;
	window.onscroll = function() {
		paraEls.forEach( function(el){
			value = (window.pageYOffset - el.offsetTop + window.innerHeight)
			let yPos = -(value / 8);
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
	const tinies = Array.from(document.getElementsByClassName('tinies'));

	// const changeWhite = function(key){
	// 	return function(key){
	// 		tinies[key].style.color = "white";
	// 	}
	// }
	for (let key in tinies){
		window.setTimeout(function(key){
			tinies[key].style.color = "white";
		}, 200*(5-key), key)	
	}
	landing.style.color = "white";
	landingLine.style.width = "60%";
}



const gallery = function(){

	let circles = Array.from(document.getElementsByClassName('tinyCircle'));
	let urls = [];
	circles.forEach(function(a, i){
		urls.push(a.dataset.url);
		a.addEventListener('click', function(){
			circles.forEach(function(a){
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