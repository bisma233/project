@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.calculator_css')
@endsection

@section('content')
    <div class="cal-container">
        <h2>SOLAR ENERGY LOAD CALCULATOR</h2>
        <p>Calculate your exact Solar Energy requirement by completing the below form,one of our Sales Engineer will contact you soon.Thanks in advance!</p>
    </div>
<section>
    <div class="cal-container">
        <p>Please enter valid units for all months</p>
    <form action="#" method="post">
    <div>
        <label for="month-1">Month 1:</label>
        <input type="number" id="month-1" name="month-1" oninput="validateNumberInput(event)" required>
    </div>
    <div>
        <label for="month-2">Month 2:</label>
        <input type="number" id="month-2" name="month-2" oninput="validateNumberInput(event)" required>
    </div>
    <div>
        <label for="month-3">Month 3:</label>
        <input type="number" id="month-3" name="month-3" oninput="validateNumberInput(event)" required>
    </div>
    <div>            
        <label for="month-4">Month 4:</label>
        <input type="number" id="month-4" name="month-4" oninput="validateNumberInput(event)" required>
    </div>
    <div>           
        <label for="month-5">Month 5:</label>
        <input type="number" id="month-5" name="month-5" oninput="validateNumberInput(event)" required>
    </div>
    <div>            
        <label for="month-6">Month 6:</label>
        <input type="number" id="month-6" name="month-6"oninput="validateNumberInput(event)" required>
    </div>
    <div>            
        <label for="month-7">Month 7:</label>
        <input type="number" id="month-7" name="month-7" oninput="validateNumberInput(event)" required>
    </div>
    <div>            
        <label for="month-8">Month 8:</label>
        <input type="number" id="month-8" name="month-8" oninput="validateNumberInput(event)" required>
    </div>
    <div>           
        <label for="month-9">Month 9:</label>
        <input type="number" id="month-9" name="month-9" oninput="validateNumberInput(event)" required>
    </div>
    <div>       
        <label for="month-10">Month 10:</label>
        <input type="number" id="month-10" name="month-10" oninput="validateNumberInput(event)" required>
    </div>
    <div>
        <label for="month-11">Month 11:</label>
        <input type="number" id="month-11" name="month-11" oninput="validateNumberInput(event)" required>  
    </div>     
    <div>
        <label for="month-12">Month 12:</label>
        <input type="number" id="month-12" name="month-12" oninput="validateNumberInput(event)" required>
    </div>
    <button type="button" onclick="calculateInverter()">Calculate</button><br>
</form>
<div class="res">
    <div id="result"></div><br>
    <div id="choice" style="display: none;">
        <button onclick="chooseInverter('hybrid')">Hybrid</button>
        <button onclick="chooseInverter('on-grid')">On-Grid</button>
    </div>
</div>
</div>

</section>
<div class="cal-container text">
    <p>**Discover affordable and efficient  <a href="{{ route('packages') }}"> Solar Packages </a> tailored to meet your energy needs and save on electricity bills!**</p>
</div>

@endsection
    @section('js')
    @include('js.cal_js')
@endsection