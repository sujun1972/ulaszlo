<style>
    #map {
        height: 400px;
        width: 100%;
    }
</style>
<?php include('page-header.tpl.php');?>

<div class="content-main">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="page-title"><?php print $title;?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <p>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-6">
                <!--<div id="map"></div>
				
                <script>
                    function initMap() {
                        var uluru = {lat: -25.363, lng: 131.044};
                        var map = new google.maps.Map(document.getElementById('map'), {
                            zoom: 4,
                            center: uluru
                        });
                        var marker = new google.maps.Marker({
                            position: uluru,
                            map: map
                        });
                    }
                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMsYZXFAXvlxWweb7cgFA-APDmAyobDe4&callback=initMap">
                </script>-->
				<div id="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2696.792721631707!2d19.036374772248234!3d47.47446853762326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741ddb667ee524d%3A0x989eddc2952ad57f!2zQnVkYXBlc3QsIFVsw6FzemzDsyB1LiA1MCwgMTExMw!5e0!3m2!1szh-CN!2shu!4v1519812149455" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
            </div>
            <div class="col-12 col-lg-6">
                <h3 class="pt-3 pt-lg-0 pb-3"><?php print(t("Or send us an email:"));?></h3>
                <?php print render($page['content']); ?>
            </div>
        </div>
    </div>
</div>

<?php include('page-footer.tpl.php');?>
