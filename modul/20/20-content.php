<div class="type-20">
    <div class="container">
        <h4 class="clear">
            <span>About our stores. Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</span>
        </h4>
        <div class="row">
            <div class="col-md-4 hello">
                    <ul>
                        <li class="has-icon"><a href="#"><span>New York</span></a></li>
                        <li class="has-icon"><a href="#"><span>London</span></a></li>
                        <li class="has-icon"><a href="#"><span>Oslo</span></a></li>
                        <li class="has-icon" ><a href="#"><span>Stockholm</span></a></li>
                        <li id=" " class="has-icon"><a href="#"><span>Add as many as you want</span></a></li>
                    </ul>
            </div>
            <div class="col-md-8 map-styles">
                    <div id="map" style="width:100%;height:400px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4433.385225151109!2d106.75497423641464!3d10.8518641338324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752797e321f8e9%3A0xb3ff69197b10ec4f!2zVHLGsOG7nW5nIENhbyDEkOG6s25nIEPDtG5nIG5naOG7hyBUaOG7pyDEkOG7qWM!5e1!3m2!1svi!2s!4v1571848929733!5m2!1svi!2s" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                    </div>
            </div>
        </div>
    </div>
</div>
<script>
    function initMap() {
        var mapDiv = document.getElementById('map');
        var map = new google.maps.Map(mapDiv, {
            center: {lat: 44.540, lng: -78.546},
            zoom: 8
        });
    }
</script>