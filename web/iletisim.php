<!DOCTYPE html>
<html>
	 <head>
		 <title>Klinika</title>
     <?php require('inc/common_head.php'); ?>
	 </head>
<body>
  <div id="page">

    
    <?php require('inc/header.php'); ?>

    

    <div class="content">

      <h1 class="main-header">ILETISIM</h1>

    </div>
    
     <div class="mapContainer">   
        <div class="map" id="map1">
        </div>
     </div>
      
      <div class="content">

      <h3 class="iletisim-header">Merkez Sancaktepe</h3>

      <div class="iletisim-info">
        <div class="iletisim-info-box">
          <img src="img/icon_pin.png" class="iletisim-icon">
          <h3>ADRES</h3>
          <p>Meclis Mah. Alemdag Cad. Askin Sok.<br>27/A Sancaktepe, Istanbul</p>
        </div>

        <div class="iletisim-info-box">
          <img src="img/icon_phone_small.png" class="iletisim-icon">
          <h3>TELEFON</h3>
          <p>+90 216 365 0204 - 62</p>
        </div>

        <div class="iletisim-info-box">
          <img src="img/icon_fax.png" class="iletisim-icon">
          <h3>FAKS</h3>
          <p>+90 216 312 7737</p>
        </div>
      </div>

      </div>


      <div class="mapContainer">   
        <div class="map" id="map2">
        </div>
     </div>
      
      <div class="content">
       
      <h3 class="iletisim-header">Tasdelen Sube</h3>


      <div class="iletisim-info">
        <div class="iletisim-info-box">
          <img src="img/icon_pin.png" class="iletisim-icon">
          <h3>ADRES</h3>
          <p>Turgut Ozal Bulvari 149 / A<br>Tasdelen / Cekmekoy / ISTANBUL</p>
        </div>

        <div class="iletisim-info-box">
          <img src="img/icon_phone_small.png" class="iletisim-icon">
          <h3>TELEFON</h3>
          <p>+90 312 77 70 - 71</p>
        </div>

        <div class="iletisim-info-box">
          <img src="img/icon_fax.png" class="iletisim-icon">
          <h3>FAKS</h3>
          <p>+90 216 312 7737</p>
        </div>
      </div>

    </div>

    <?php require('inc/footer.php'); ?>

  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="js/doktorlar-sayfasi.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
	<script>
		var mapPos = new google.maps.LatLng(41.1186061, 29.0235112);
		var markerPos = new google.maps.LatLng(41.1186061, 29.0235112);
		
		
		var mapStyles = [
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#76aee3"
            },
            {
                "saturation": 38
            },
            {
                "lightness": -11
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.highway",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#8dc749"
            },
            {
                "saturation": -47
            },
            {
                "lightness": -17
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "poi.park",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#c6e3a4"
            },
            {
                "saturation": 17
            },
            {
                "lightness": -2
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.arterial",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#cccccc"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 13
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "administrative.land_parcel",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#5f5855"
            },
            {
                "saturation": 6
            },
            {
                "lightness": -31
            },
            {
                "visibility": "on"
            }
        ]
    },
    {
        "featureType": "road.local",
        "elementType": "all",
        "stylers": [
            {
                "hue": "#ffffff"
            },
            {
                "saturation": -100
            },
            {
                "lightness": 100
            },
            {
                "visibility": "simplified"
            }
        ]
    },
    {
        "featureType": "water",
        "elementType": "all",
        "stylers": []
    }
];
		
        var mapOptions = {
			mapTypeId: google.maps.MapTypeId.ROADMAP
            ,zoom: 15
			,center: mapPos
			,zoomControl: true
			,panControl: false
			,streetViewControl: false
			,zoomControlOptions: {
				style: google.maps.ZoomControlStyle.SMALL
				,position: google.maps.ControlPosition.RIGHT
			}
			,styles: mapStyles
			,scrollwheel: false
        };
	
		var map = new google.maps.Map(document.getElementById("map1"), mapOptions);
		var map2 = new google.maps.Map(document.getElementById("map2"), mapOptions);
	
		var marker = new google.maps.Marker({
            position: markerPos
            ,map: map
            ,title:"Telli Grup"
        
        });

     var marker2 = new google.maps.Marker({
            position: markerPos
            ,map: map2
            ,title:"Telli Grup"
        
        });
	</script>
</body>
</html> 


