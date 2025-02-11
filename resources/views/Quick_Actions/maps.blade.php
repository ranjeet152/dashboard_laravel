@extends('layout.simple-hero')

@section('main-simple-page')

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    } 

    #map-container {
        font-family: Arial, sans-serif;
        display: flex; 
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 80px;
        padding: 20px;
        gap: 15px;
        width: 100%;
        max-width: 1200px;
    }

    .map {
        flex: 1 1 calc(50% - 10px); 
        height: 300px;
        border: 2px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0px 4px 10px rgba(78, 69, 69, 0.2);
    }

    iframe {
        width: 100%;
        height: 100%;
        border: 0;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .map {
            flex: 1 1 100%; 
        }
    }
</style>

<div id="map-container"> 
    <div class="map"> 
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d30766738.48171446!2d60.96917638629971!3d19.72516357822192!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30635ff06b92b791%3A0xd78c4fa1854213a6!2sIndia!5e0!3m2!1sen!2sin!4v1738410945396!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>
    
    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3636595.8127053194!2d78.21226528956407!3d27.11337118355843!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39994e9f7b4a09d3%3A0xf6a5476d3617249d!2sUttar%20Pradesh!5e0!3m2!1sen!2sin!4v1737791323350!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d227821.98710305034!2d80.77769789898672!3d26.84890283018601!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399bfd991f32b16b%3A0x93ccba8909978be7!2sLucknow%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1738411046418!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.451890140739!2d80.99155821066854!3d26.889150076563894!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x399959c6fc66a017%3A0xc4fe6d0216cd445d!2sEkana%20Technologies%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1737786865502!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241316.2289699221!2d72.71412525687607!3d19.08280670615086!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c6306644edc1%3A0x5da4ed8f8d648c69!2sMumbai%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1738411192959!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d448193.951046296!2d76.76356261822156!3d28.644287349748506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd5b347eb62d%3A0x37205b715389640!2sDelhi!5e0!3m2!1sen!2sin!4v1738411311681!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224356.85923192592!2d77.23701088488971!3d28.522404036526275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce5a43173357b%3A0x37ffce30c87cc03f!2sNoida%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1738411420399!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317723.7363593278!2d-0.6924219283484365!3d51.52758529822163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1738411502350!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d56806.44417342062!2d81.91213928125079!3d27.143615266388352!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999ee0495e5b7a9%3A0xc927d6261ff536ca!2sGonda%2C%20Uttar%20Pradesh!5e0!3m2!1sen!2sin!4v1738411660222!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

    <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28383.933823503674!2d82.12766527555988!3d27.219409507300472!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3999e3dfd0a70f77%3A0x660de272c2b0a7a9!2sDhaneypur%2C%20Uttar%20Pradesh%20271602!5e0!3m2!1sen!2sin!4v1738411736153!5m2!1sen!2sin" allowfullscreen="" loading="lazy"></iframe>
    </div>

</div>

@endsection
