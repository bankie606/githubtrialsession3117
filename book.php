<?php include './includes/config.php' ?>
<?php include './includes/header.php' ?>
 
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script src="http://frcrescioni.net/js/lib/turn.js"></script>            
<link rel=stylesheet href="/css/flipstyle.css"/>
</head>


<div id="flipbook">
	<div style="background-color:red" class="hard"> Turn.js </div>
	<div style="background-color:red" class="hard"></div>
	<div style="background-image: url(https://68.media.tumblr.com/d9bac11d2e8fd4f0d4533c6d3c3f890b/tumblr_ok3eivJxeS1r3uv06o1_500.gif)"> Page 1 </div>
	<div style="background-image: url(https://68.media.tumblr.com/d4acd8dacce2ebd540d8e01ee3660bf1/tumblr_o8darh6Xfu1qj7u8ao1_500.gif)"> Page 2 </div>
	<div style="background-image: url(https://68.media.tumblr.com/4cf454a1ef3265a2bc60db08b364670a/tumblr_o47pjjolFD1r777meo1_500.gif)"> Page 3 </div>
	<div style="background-image: url(https://68.media.tumblr.com/44d970046c73120b8470ce479a8ab588/tumblr_okkt1iDIwC1uvuzqko1_500.gif)"> Page 4 </div>
    <div style="background-image:url(https://68.media.tumblr.com/9d5a78b44c7847d644e5bb8c7a5a6838/tumblr_mn62ypd1VM1s7elebo1_r1_500.gif)"> Page 5
    </div>
        <div style="background-image:url(https://68.media.tumblr.com/575d0979192e8b7df78a785c1abccc80/tumblr_oj38c75d8g1rvzrvzo1_1280.gif)"> Page 6
    </div>
        <div style="background-image:url(https://68.media.tumblr.com/6e547e85448b2b823cd49a4906055d07/tumblr_o9jtg6ogBu1rccpkso1_500.gif)"> Page 7
    </div>
        <div style="background-image:url(https://68.media.tumblr.com/97d146b0b4952c2eff74284a1279c237/tumblr_ois3u6sb9z1qbjwp2o1_1280.gif)"> Page 8
    </div>
        <div style="background-image:url(https://68.media.tumblr.com/55522bc9b71079069ec62ed8ec35606f/tumblr_oituf2WTBv1qbjwp2o1_1280.png)"> Page 9
    </div>
        <div style="background-image:url(https://68.media.tumblr.com/4f41696505b362a359982476990b32a6/tumblr_oh7yrv8SZd1qb9pa3o1_500.gif)"> Page 10
    </div>
     <div style="background-image:url(https://68.media.tumblr.com/4c32f48714e3be78edf406d46bfa6831/tumblr_oh2epnWaGE1qm3rsfo3_500.gif)"> Page 11
    </div>
     <div style="background-image:url(https://68.media.tumblr.com/79222e3f67bc37408e9a6825f5eb2188/tumblr_og1958CBjr1smiv11o1_500.gif)"> Page 12
    </div>
     <div style="background-image:url(https://68.media.tumblr.com/926a9559c6bf01d60542226c40bfbd7b/tumblr_ohbc4gGfG61qbipv3o1_500.gif)"> Page 13
    </div>
     <div style="background-image:url(https://68.media.tumblr.com/a9ffd00684a31fc57cbf290c4e5b45a1/tumblr_oglnlcnSCT1uo5tbio1_1280.gif)"> Page 14
    </div>
     <div style="background-image:url(https://68.media.tumblr.com/66aaca2c70e3e70764041e47a88a6716/tumblr_nfkym94rfb1s6mbrfo1_250.gif)"> Page 15
    </div>
     <div style="background-image:url(https://68.media.tumblr.com/ae12cabede1fcac89a2f6a8b0492184f/tumblr_oe72erNdkc1rg3vrmo1_1280.jpg)"> Page 16
    </div>
    
	<div style="background-color:red" class="hard">THE END</div>
	<div style="background-image:url(https://68.media.tumblr.com/3c29c8132a728bfabb03e0faa871732c/tumblr_ofgarmY4fe1u0stk1o1_400.jpg)" class="hard"></div>
</div>
<script type="text/javascript">
	$("#flipbook").turn({
		width: 800,
		height: 600,
		autoCenter: true
	});
</script>

<script type="text/javascript">

    $(document).keydown(function(e) {
switch (e.keyCode) {
    case 37:

    $('#flipbook').turn('previous');

    break;
    case 39:

      $('#flipbook').turn('next');

    break;
  }
    });
</script>
 
        
   <?php include './includes/footer.php' ?>