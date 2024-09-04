@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.projects_css')
@endsection

@section('content')
    <header>
        <div class="header-content">
            <h1>Sun Source Solutions Projects</h1>
           </div>
        </header> 
        <br>
        <br>
        <section>
            <div class="Overview">
                <h1>Overview</h1>
                <p>Sun Source Solutions is the Smartest Solar System with  Battery management software and 24/7 customer care services. Sun Source Solutions is the fastest-growing company in Pakistan and has been successful in creating a footprint all over Pakistan with clients from residential and commercial segments.</p>
            </div>
            </section>
           <section>
            <div class="project">
             <h2>Our Project Gallery</h2>
            </div>
            <div class="row">
                <div class="column">
                    <img src="{{ asset('images/proj4.webp') }}">
                    <div class="overlay">
                        <p class="image-text">1KW</p>
                    </div>
                </div>

                <div class="column">
                    <img src="{{ asset('images/proj12 - Copy.jpg') }}">
                    <div class="overlay">
                        <p class="image-text">3KW</p>
                    </div>
                </div>

                <div class="column">
                    <img src="{{ asset('images/proj6 - Copy.jpg') }}">
                    <div class="overlay">
                        <p class="image-text">6KW</p>
                    </div>
                </div>

                    <div class="column">
                        <img src="{{ asset('images/proj7.jpg') }}">
                        <div class="overlay">
                            <p class="image-text">2KW</p>
                        </div>
                    </div>

                    <div class="column">
                        <img src="{{ asset('images/blog6.png') }}">
                        <div class="overlay">
                            <p class="image-text">4KW</p>
                        </div>
                    </div>
                    <div class="column">
                        <img src="{{ asset('images/proj15.webp') }}">
                        <div class="overlay">
                            <p class="image-text">5KW</p>
                        </div>
                    </div>
            </div>
           </section>
           {{-- <section>
            <div class="box">
            <h3>Speak To An Expert</h3>
            <p>Not sure what's best for you? Get a free consultation from our experts.</p>
            <p>Contact: 1234-567890<br>
            Email: sales@sunsourcesolutions.com.pk</p>
             <button>REQUEST A CALL</button>
              </div>
              </section> --}}
@endsection