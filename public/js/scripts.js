	var i = 0; // Start point
	var imagesSlideshow = [];
	var time = 3000;

	// Image List
	imagesSlideshow[0] = 'public/img/home/homeScroll1.png';
	imagesSlideshow[1] = 'public/img/home/homeScroll2.png';
	imagesSlideshow[2] = 'public/img/home/homeScroll3.png';

	// Change Image
	function slideshowImg(){
		document.slide.src = imagesSlideshow[i];

		if(i < imagesSlideshow.length - 1){
			i++;
		} else {
			i = 0;
		}

		setTimeout("slideshowImg()", time);
	}
  
  
	window.onload = slideshowImg;