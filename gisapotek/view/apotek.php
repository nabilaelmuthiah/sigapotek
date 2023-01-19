        <div class="container-fluid">
                    <h2 class="subheading" align="center">Sistem Informasi Geografis</h2>
                    <h4 align="center">Pemetaan Lokasi Apotek di Wilayah DKI Jakarta</h4>
        </div> <br>
            
            <div class="container">
            <div class="row col-md-12" align="align-items-center">
            <div id="map" style="height: 550px; margin-top: 5px"></div>
            <?php
            $scriptFile = "leaflet-apotek";
            ?>



        <script> 
                var jakarta = [-6.175165788537049, 106.82718124163314];
                var mapOptions = {
                center: jakarta,
                zoom: 15
                }
                var map = L.map('map', mapOptions);

                var tileLayer = new L.tileLayer('https://tile.openstreetmap.org/{z}/{x}/{y}.png', {
                maxZoom: 19,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
                });
                tileLayer.addTo(map);

                
                    
        </script>  

        <div class="container">
                <div class="row col-md-12" align="align-items-center">
                <h3 align="center">Jangkauan Peta</h3><br>
                <p align="center">Sistem Informasi Geografis ini memberikan informasi tentang lokasi Apotek di wilayah DKI Jakarta</p>
                    </div> 
        </div>   


        <div class="container-fluid">
            <footer class="footer-area section-gap"> <br><br>
                        <p class="col-lg-12 col-sm-12" align="center">
                        Copyright &copy All rights reserved | Sistem Informasi Geografis Apotek by Aisyah, Andrean Bagus, Dessy Fitriyani, Nabila ElMuthi'ah | Sekolah Tinggi Terpadu Teknologi Nurul Fikri</p>
                    </div>
                </div>
            </div>
            </footer>