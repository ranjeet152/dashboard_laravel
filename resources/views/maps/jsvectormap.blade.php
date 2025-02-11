@extends('layout.simple-hero')

@section('main-simple-page')

<script>
    let isGoogleMapVisible = false;  

    function toggleMap(event) {
        event.preventDefault();  

        var mapContainer = document.getElementById("mapContainer");
        var iframe = document.getElementById("mapIframe");
        var worldMap = document.getElementById("world-map"); 
        var mapLink = document.getElementById("mapLink");

        if (isGoogleMapVisible) { 
            mapContainer.style.display = "none";
            worldMap.style.display = "block"; 
            mapLink.innerText = "Jsvectormap";  
        } else { 
            worldMap.style.display = "none";
            mapContainer.style.display = "block"; 
            iframe.src = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.451890140739!2d80.99155821066854!3d26.889150076563894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399959c6fc66a017%3A0xc4fe6d0216cd445d!2sEkana%20Technologies%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1737786865502!5m2!1sen!2sin";
            mapLink.innerText = "Welcome to My City"; 
        }

        isGoogleMapVisible = !isGoogleMapVisible;  
    }
</script>

<style>
    #mapContainer {
        display: none;  
        width: 100%;
        height: 450px;
    }

    iframe {
        width: 100%;
        height: 450px;
        border: 0;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-transparent">
                <div class="card-header">
                    <h4 class="card-title text-center">Vector Maps</h4>
                    <p class="card-category text-center">
                        We use the 
                        <a href="{{ route('Quick_Actions.maps')}}" onclick="toggleMap(event)" id="mapLink">
                            Jsvectormap
                        </a>
                        plugin to create vector maps.
                    </p>

                    <!-- Google Map iframe container -->
                    <div id="mapContainer">
                        <iframe id="mapIframe" allowfullscreen loading="lazy"></iframe>
                    </div>
                </div>

                <div class="card-body">
                    <div class="col-md-10 ms-auto me-auto">
                        <div class="mapcontainer">
                            <!-- Vector Map (Will be visible initially, will hide when Google Map appears) -->
                            <div id="world-map" class="w-100" style="height: 450px;"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
