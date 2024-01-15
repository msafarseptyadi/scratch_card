<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="og:url"           content="http://game.promolbs.com/" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="POPGame Scracth & Win" />
  <meta property="og:description"   content="Yuk Berlangganan POPGame sekarang! Jawab pertanyaannya, Kumpulkan POIN dan tukar dengan Hadiah PULSA atau Kupon Misteri POPGame! Promo ini hanya berlaku untuk kamu pengguna XL-AXIS (INFO: *500*5456#)" />
  <meta property="og:image"         content="<?=base_url("assets/images/popgame-scratchwin.svg")?>" />
	<title>Scratch</title>

	<style type="text/css">
	body {
    margin:0;
    padding:0;
		font-family:'Arial';
    width:100%;
    height:100%;
    overflow-x: hidden;
    background: linear-gradient(90deg, rgba(238,58,70,1) 0%, rgba(162,33,113,1) 100%) fixed;
	}

	.container {
	border: 3px solid yellow;
	background-color:white;
	border-radius:20px;
	width: 355px;
	height: 225px;
	margin: auto;
	/* display: inline-block;
    position: fixed;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0; */
	-webkit-user-select: none;
	-moz-user-select: none;
	-ms-user-select: none; 
	-o-user-select: none;
	user-select: none;
	}

	.canvas {
	position: absolute;
	/* top: 0; */
	border-radius:20px;
  cursor: url('http://127.0.0.1/scratch/assets/images/coin.png'), pointer;  
	}

	.notif {
	padding: 0px;
	text-align:center;
	}

	.title{
		text-align:center;
    font-size:50px;
    padding-top:62px;
    padding-bottom:10px;
	}
  .share-popgame{
    text-align:center;
    color:white;
    margin:0 auto;
	  display: table;
    margin-bottom:50px;
}
  .divTable{
    text-align:center;
    color:white;
    margin:0 auto;
	  display: table;
    margin-bottom:50px;
}
.divTableRow {
	display: table-row;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
}
.divTableCell, .divTableHead {
	border: 1px solid #FFFFFF;
	display: table-cell;
	padding: 3px 10px;
}
.divTableHeading {
	background-color: #EEE;
	display: table-header-group;
	font-weight: bold;
}
.divTableFoot {
	background-color: #EEE;
	display: table-footer-group;
	font-weight: bold;
}
.divTableBody {
	display: table-row-group;
}
.winner{
  margin-top:50px;
  color:white;
  text-align:center;
}

.modal {
    position: fixed;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    opacity: 0;
    visibility: hidden;
    transform: scale(1.1);
    transition: visibility 0s linear 0.25s, opacity 0.25s 0s, transform 0.25s;
}
.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 1rem 1.5rem;
    width: 24rem;
    border-radius: 0.5rem;
}
.close-button {
    float: right;
    width: 1.5rem;
    line-height: 1.5rem;
    text-align: center;
    cursor: pointer;
    border-radius: 0.25rem;
    background-color: lightgray;
}
.close-button:hover {
    background-color: darkgray;
}
.show-modal {
    opacity: 1;
    visibility: visible;
    transform: scale(1.0);
    transition: visibility 0s linear 0s, opacity 0.25s 0s, transform 0.25s;
}

a{
  text-decoration:none;
}

	/* @media (max-width: 670px) {
		.title{
			text-align:center;
			font-size:26px;
			
		}
	} */
	</style>
</head>
<body>
<script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/js-confetti@0.9.0/dist/js-confetti.browser.js"></script>
<div class="title"><img src="<?=base_url("assets/images/popgame-scratchwin.svg")?>" width="200px" alt=""></div>
<div id="container">
	<div class="container" id="js-container">
	<canvas class="canvas" id="js-canvas" width="355" height="225"></canvas>
	<div class="notif">
		<h2>Selamat</h2>
    <h1>Kamu Menang!!</h1>
    <h1>Mobil</h1>
		<h3>Pin kamu: 232323</h3>
		</div>
	</div>  
	</div>
</div>
<h3 class="winner">5 Pemenang Terakhir<br> POPGame Scratch & Win</h3>
<div class="divTable" style="width: 90%; border: 1px solid #FFFFFF;">
  <div class="divTableBody">
    <div class="divTableRow">
    <div class="divTableCell">No Pemenang</div>
    <div class="divTableCell">Hadiah</div>
    </div>
    <?php
    // foreach($winner as $w)
    // {
    //   $xxx		= substr($w['msisdn'],strlen($w['msisdn'])-3,3);
		// 	$msisdnxxx	= str_replace($xxx, "xxx", $w['msisdn']);
      ?>
        <div class="divTableRow">
        <div class="divTableCell">08237823723</div>
        <div class="divTableCell">Mobil</div>
        </div>
      <?php
    // }
    ?>
</div>
</div>
<h3 class="winner">Share ke teman-temanmu</h3>
<div class="share-popgame">
  <a href="https://www.facebook.com/dialog/feed?app_id=140586622674265&display=popup&link=http://game.promolbs.com/VG1wSk5FNTZaelZPYW1Nd1RXcE5NVTlSUFQwPQ==/VGxWYVExRnFUVFJSZWtsNlQxVlNSVTEzUFQwPQ==&name=Scracth and Win POPGame&caption=halo-halo bandung&description=test&redirect_uri=http%3A%2F%2Fs7.addthis.com%2Fstatic%2Fpostshare%2Fc00.html" target="_blank"><span>
      <img width="50" height="50" src="<?=base_url("assets/images/facebook.png")?>" alt="Facebook" />
    </span>
  </a>
  <a href="https://twitter.com/intent/tweet?text=Yuk Berlangganan POPGame sekarang! Jawab pertanyaannya, Kumpulkan POIN dan tukar dengan Hadiah PULSA atau Kupon Misteri POPGame! Promo ini hanya berlaku untuk kamu pengguna XL-AXIS (INFO: *500*5456#)" target="_blank"><span>
      <img width="50" height="50" src="<?=base_url("assets/images/twitter.png")?>" alt="Twitter" />
    </span>
  </a>
</div>
<script>

(function() {
  
  'use strict';

  var base_url = window.location.origin;
  var isDrawing, lastPoint;
  var container    = document.getElementById('js-container'),
      canvas       = document.getElementById('js-canvas'),
      canvasWidth  = canvas.width,
      canvasHeight = canvas.height,
      ctx          = canvas.getContext('2d'),
      image        = new Image(),
      brush        = new Image();
      
  // base64 Workaround because Same-Origin-Policy
  image.src = '<?=base_url("assets/images/card.png")?>';
  image.onload = function() {
    ctx.drawImage(image, 0, 0);
    // Show the form when Image is loaded.
    document.querySelectorAll('.notif')[0].style.visibility = 'visible';
  };
  brush.src = '<?=base_url("assets/images/brush.png")?>';
  // brush.src = 'http://game.promolbs.com/assets/images/brush.png';
  
  canvas.addEventListener('mousedown', handleMouseDown, false);
  canvas.addEventListener('touchstart', handleMouseDown, false);
  canvas.addEventListener('mousemove', handleMouseMove, false);
  canvas.addEventListener('touchmove', handleMouseMove, false);
  canvas.addEventListener('mouseup', handleMouseUp, false);
  canvas.addEventListener('touchend', handleMouseUp, false);
  
  function distanceBetween(point1, point2) {
    return Math.sqrt(Math.pow(point2.x - point1.x, 2) + Math.pow(point2.y - point1.y, 2));
  }
  
  function angleBetween(point1, point2) {
    return Math.atan2( point2.x - point1.x, point2.y - point1.y );
  }
  
  // Only test every `stride` pixel. `stride`x faster,
  // but might lead to inaccuracy
  function getFilledInPixels(stride) {
    if (!stride || stride < 1) { stride = 1; }
    
    var pixels   = ctx.getImageData(0, 0, canvasWidth, canvasHeight),
        pdata    = pixels.data,
        l        = pdata.length,
        total    = (l / stride),
        count    = 0;
    
    // Iterate over all pixels
    for(var i = count = 0; i < l; i += stride) {
      if (parseInt(pdata[i]) === 0) {
        count++;
      }
    }
    
    return Math.round((count / total) * 100);
  }
  
  function getMouse(e, canvas) {
    var offsetX = 0, offsetY = 0, mx, my;

    if (canvas.offsetParent !== undefined) {
      do {
        offsetX += canvas.offsetLeft;
        offsetY += canvas.offsetTop;
      } while ((canvas = canvas.offsetParent));
    }

    mx = (e.pageX || e.touches[0].clientX) - offsetX;
    my = (e.pageY || e.touches[0].clientY) - offsetY;

    return {x: mx, y: my};
  }
  
  function handlePercentage(filledInPixels) {
    filledInPixels = filledInPixels || 0;
    console.log(filledInPixels + '%');
    if (filledInPixels > 60) {
      canvas.parentNode.removeChild(canvas);
      // confetti.start();
      const canvasa = document.getElementById('js-canvas')
      const jsConfetti = new JSConfetti({ canvasa })
      setTimeout(() => {
        jsConfetti.addConfetti()
      }, 0)
      setTimeout(() => {
        jsConfetti.addConfetti()
      }, 2000)
      setTimeout(() => {
        jsConfetti.addConfetti()
      }, 4000)

      // alert("success");
    }
  }
  
  function handleMouseDown(e) {
    isDrawing = true;
    lastPoint = getMouse(e, canvas);
  }

  function handleMouseMove(e) {
    if (!isDrawing) { return; }
    
    e.preventDefault();

    var currentPoint = getMouse(e, canvas),
        dist = distanceBetween(lastPoint, currentPoint),
        angle = angleBetween(lastPoint, currentPoint),
        x, y;
    
    for (var i = 0; i < dist; i++) {
      x = lastPoint.x + (Math.sin(angle) * i) - 25;
      y = lastPoint.y + (Math.cos(angle) * i) - 25;
      ctx.globalCompositeOperation = 'destination-out';
      ctx.drawImage(brush, x, y);
    }
    
    lastPoint = currentPoint;
    handlePercentage(getFilledInPixels(10));
  }

  function handleMouseUp(e) {
    isDrawing = false;
  }
  
})();
</script>
</body>
</html>