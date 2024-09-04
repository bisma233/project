@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.panels_css')
@endsection

@section('content')
<header>
    <div class="header-content">
        <h2 class="lg-heading text-light ">SOLAR PANELS</h2>
    </div> 
</header>
<section class="section1">
    <div class="text-box">
    <h2> SOLAR PANELS</h2>
    <p>
        We use top-quality solar panels from international brands for all our solar installations in Pakistan, be it for homes, businesses, farms or industries. The efficiency of these solar panels directly influences your electricity savings – the higher the efficiency, the more you save. At Sun Source Solutions, we understand how crucial it is to stay updated with the advancements in solar technology. That’s why our engineers and experts closely monitor emerging technologies and their efficiency to ensure our customers always receive the best available products.<br></p>
    </div>
    <div class="box">
        <hr>
        <h3>Speak To An Expert</h3>
    <p>Not sure what’s best for you? Get a free consultation from our experts.</p>
    <p>Contact: 1234-567890<br>
        Email: sales@sunsourcesolutions.com.pk</p>
    <button>REQUEST A CALL</button>    
    </div>
</section>
<section class="row">
  <h2 style="margin-bottom: 60px;">DIFFERENT TYPES OF HIGHLY EFFICIENT SOLAR PANELS</h2>
    <div class="imgwrapper">
        <img class="img" src="{{ asset('images/solar-panel1.webp') }}">
        <div class="text">
            <h2>BIFACIAL SOLAR PANELS</h2>
            <p>Bifacial solar panels have the ability to generate electricity from both sides of the module, making them the most popular solar panels in Pakistan at the moment. They are highly efficient and produce more electricity per watt compared to other technologies in the market. While the price of bifacial solar panels in Pakistan is a bit higher than mono panels, their high production rate makes them the top choice for many..</p>
        </div>
    </div>
    
    <div class="imgwrapper">
        <img class="img2" src="{{ asset('images/solar-panels2.png') }}">
        <div class="text2">
            <h2>MONOCRYSTALLINE SOLAR PANELS</h2>
            <p>Monocrystalline solar panels, despite generating electricity from only one side facing the sun, continue to dominate the solar landscape in Pakistan due to their exceptional electricity production. Recognized for their superior efficiency, these panels feature a single crystal structure of high-purity silicon. This technology guarantees reliable and effective energy generation, making them a popular and enduring choice in the country.</p>
        </div>
    </div>
</section>

@endsection