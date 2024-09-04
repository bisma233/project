@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.about_css')
@endsection
 @section('content')
        <header>
    <div class="header-content">
        <h1>Green Innovation for Clean Energy</h1>

    </header> 
    <section> 
        <div class="About">
            <br>
            <div class="icon">
                <div style="display: flex; align-items: flex-start;">
                    <i style="margin-right: 10px; margin-left:40px;" class="fa-regular fa-sun fa-2x"></i>
                    <div>
                        <h1 style="color: #000000;">Our Mission</h1>
                        <p>To make clean energy universally available by building a distributed and intelligent solar and energy storage grid, managed via the internet, across the world. Advancing this business by satisfying our customers and generating measurable value for them. Progressing with the large-scale utilization of green energy with our entrepreneurial push, engaging our own expertise and joining hands, as well as providing information to local stakeholders for the implementation of PV initiatives in selected emerging markets.</p> 
                    </div>
                </div>
            </div>
        </div>
    
        <div class="About">
            <div class="icon2">
                <div style="display: flex; align-items: flex-start;">
                    <i style="margin-right: 10px; margin-left:40px;" class="fa-solid fa-bolt-lightning fa-2x"></i>
                    <div>
                        <h1 style="color:#000000">Our Vision</h1>
                        <p>To make clean, reliable, and affordable energy available to the developing world through energy innovation. Over the last few decades, sustainable energy has evolved out of the incubation process and has emerged as an economically competitive, environmentally superior, efficient, clean, and stable energy source. We understand that solar energy is evolving as a key source of energy supply technologies and can make a major contribution to the potential energy mix around the world.</p>
                    </div>
                </div>
            </div>
        </div>
    
        <br>
    
        <div class="container1">
            <div class="box">
                <h3>Why Choose Sun Source Solutions</h3>
                <p>Choosing Sun Source Solutions as your solar panel solutions provider should offer several benefits. Here are some potential reasons: They might have a proven track record in the solar industry with a team of experts who can ensure efficient and effective installation of solar panels. A solar panel calculator is a critical feature for potential customers to estimate their solar energy needs and savings. Sun Source Solutions, being a specialized provider, may offer accurate algorithms and data for the calculator, ensuring that users get reliable estimates. <span id="dots">...</span> <span id="invisible-text"> Partnering with Sun Source Solutions aligns with the environmentally friendly ethos of solar energy. By promoting sustainable energy solutions on your website, you contribute to raising awareness about environmental issues and encourage the adoption of renewable energy technologies. They likely offer end-to-end services, from initial consultation and design to installing, monitoring, and maintenance, ensuring a seamless experience for customers.</span></p>
                <button id="btn" onclick="MoreLess()">Read More</button>
            </div>
        </div>
    </section> 
     {{-- <section> 
        <div class="About">
            <br>
        <div class="icon">
            <div style="display: flex; align-items: up;">
  <i style="margin-right: 40px;" class="fa-regular fa-sun fa-2x"></i>
         
          <grid-container {
  gap: 1000px;
}
          <h1 style="color: #000000;">Our Mission</h1>
             <p> To take clean energy universally avaliable by a abuilding distributed and integent solar and energy storage grid, <br> managed  via the internet, across the world. Advancing this bussiness by satisfying our customers and generating<br> measureable value for them. Progressing with the large-scale utilization with green energy with our entrepreneurial<br> push, engaging our own expertise and joining hands, as well as providing information to local stakeholder for the<br> implementation of PV initiatives in selected emerging markets.</p> 
             <br>
             <br>

             
     </div>
          </div>
       
        <div class="About">
        <div align="icon"class="icon2">
            <div style="display: flex; align-items: up;">
  <i style="margin-right: 40px;" class="fa-solid fa-bolt-lightning fa-2x"></i>
        
         <grid-container {
  gap: 200px;
}

          <h1 style="color:#000000">Our Vision</h1>
             <p>To make clean, reliable, and affordable energy available to the developing world through energy <br>innovation. Over the last few decades, sustainable energy has evolved out of the encubation<br> process and has emerged as an economically competitive, enviromently superior, effecient, clean<br>and stable energy source. We understand that solar energy is evolving as a key source of energy<br> supply technologies and can make a major contribution to the potential energy mix around the world.</p> 
     </div>
             
   </div>
  <br>
    <div class="container1">
        <div class="box">
            <h3>Why Choose Sun Source Solutions</h3>
            <p>Choosing Sun Source Solution as your solar panel solutions provider should offer several benefits, which mighht be highlighted on their website.Here are some potential reasons:
                They might have a proven track record in solar industry with a team of experts who can ensure efficient and effective installation of solar panel.
          A solar panel calculator is a critical feature for potential customers to estimate their solar energy needs and savings. Sun Source Solutions, being a specialized provider, may offer accurate algorithms and data for the calculator, ensuring that users get reliable estimates.
          <span id="dots">...</span> <span id="invisible-text"> Partnering with Sun Source Solutions aligns with the environmentally friendly ethos of solar energy. By promoting sustainable energy solutions on your website, you contribute to raising awareness about environmental issues and encourage the adoption of renewable energy technologies.
        They likely offer end-to-end services, from initial consultation and design to installing, monitoring, and maintenance, ensuring a seamless experience for customer. </span></p>
            <button id="btn" onclick="MoreLess()">Read More</button>
        </div>
    </div> --}}
    {{-- <script>
        function MoreLess(){
            var dots=document.getElementById("dots");
            var invisibleText=document.getElementById("invisible-text");
            var btnText=document.getElementById("btn");
            if(dots.style.display!="none"){
                dots.style.display="none";
                invisibleText.style.display="inline";
                btnText.innerHTML="Read Less";
            }
            else{
                dots.style.display="inline";
                invisibleText.style.display="none";
                btnText.innerHTML="Read More";
            }
        }
    </script> --}}


</section>
@endsection
@section('js')
@include('js.js')
@endsection