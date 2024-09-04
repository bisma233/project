@extends('frontend.app')
@section('css')
@include('css.common_css')
  @include('css.contact_css')
@endsection

@section('content')
    <header>
        <div class="header-content">
         <h2 class="lg-heading text-light ">We are here to help</h2>
         <p class="text-light">Get in touch with us</p>
         <a href="#Req-more-info" class="btn btn-primary">Request More Information </a>
     </div>
    </header>  
    <section>
    <div class="contact-box">
    
        <i class="fa-solid fa-circle-question fa-2x"></i>
        <div class="text">
        <p>To order now or for more Information,<br>Please contact us at</p>
        <div class="contact-info">
            <a href="tel:+1234567890">Call us at +1 (234) 567-890</a>
            <a href="mailto:info@example.com">Email us at info@example.com</a>
        </div>
        </div>
     </div>
    </section>
    <section>
        <div class="container">
            <h2>Request More Information</h2>
            <p>Complete the below form and our team will contact you shortly</p>
            <form action="#" method="post">
                <div>
                    <label for="fname">First Name:</label>
                    <input type="text" id="fname" name="fname" required>
                </div>
                <div>
                    <label for="lname">Last Name:</label>
                    <input type="text" id="lname" name="lname" required>
                </div>
                <div>
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="contactno">Contact Number:</label>
                    <input type="text" id="contactno" name="contactno" required>
                </div>
                <div>
                    <label for="city">City:</label>
                    <input type="text" id="city" name="city" required>
                </div>
                <div>
                    <label for="hear-about">How did you hear about us:</label>
                    <select id="hear-about" name="hear-about" required>
                        <option value="">--None--</option>
                        <option value="facebook">Facebook</option>
                        <option value="TV-Commercial">TV Commercial</option>
                        <option value="Youtube">Youtube</option>
                        <option value="Linkedin">Linkedin</option>
                        <option value="Twitter">Twitter</option>
                        <option value="Advertisement">Website Advertisement</option>
                    </select>
                </div>
                <div>
                    <label for="customer-type">Customer Type:*</label>
                    <!-- <input type="text" id="customer-type" name="customer-type" required> -->
                    <select id="customer-type" name="customer-type" required>
                        <option value="">--None--</option>
                        <option value="Resedential">Resedential</option>
                        <option value="Commercial">Commercial</option>
                    </select>
                </div>
                <div>
                    <label for="electricity-bill">Maximum Summer Electricity Bill:</label>
                    <input type="text" id="electricity-bill" name="electricity-bill" required>
                </div>
                <div>
                    <label for="ac-units">How many inverter AC do you wants to run? </label>
                    <input type="text" id="ac-units" name="ac-units" required>
                </div>
                <div>
                    <label for="property-size">Property Size:</label>
                    <input type="text" id="property-size" name="property-size" required>
                </div>
                <div>
                    <label for="property-type">Property Type:</label>
                    <!-- <input type="text" id="property-type" name="property-type" required> -->
                    <select id="hear-about" name="hear-about" required>
                        <option value="">--None--</option>
                        <option value="House">House</option>
                        <option value="Apartment">Apartment</option>
                        <option value="Factory-roof">Factory-roof</option>
                        <option value="Commercial">Commercial</option>
                        <option value="farm">farm</option>
                        <option value="Office/shop">Office/shop</option>
                    </select>
                </div>
            </form>
            <a href="#Request-a-meeting"class="btn btn-secondary">REQUEST A MEETING</a>
        </div>
    </section>
@endsection
