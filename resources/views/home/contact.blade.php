<div>
     @include('home.include.user-base')
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="contact-text">
                        <h2>Contact Info</h2>
                        <p>We are combining traditional marketing, e-commerce and affiliate Parts for promoting products
                            and services.
                            We help you to spread potential information worldwide.
                        </p>
                        <table>
                            <tbody>
                                <tr>
                                   
                                    <style>
                                        img{
                                            height:50px;
                                            width:50px;
                                            margin-left:10px;
                                            margin-top:-10px;
                                        } 
                                        #img{
                                            height:60px;
                                         
                                            margin-top:-20px;
                                        }
                                    </style>
                                    
                                </tr>
                                <tr>
                                    <td class="c-o">
                                        <img src="{{asset('assets/front/img/phone.png')}}" id="img" alt="">
                                    </td>
                                    <td>
                                        Marketing :(+250)786080119
                                        <br>Our-Service : (+250)737909986
                                    </td>
                                </tr><br><br>
                                <tr>
                                    <td class="c-o">
                                        <img src="{{asset('assets/front/img/email.jpg')}}" alt="">
                                    </td>
                                    <i class="fa fa-phone"></i>
                                    <td><a href="mailto:socialafonete@gmail.com" style="color:black;font-size:20px;">socialafonete@gmail.com</a></td>
                                </tr>
                                <tr>
                                    <td class="c-o">
                                        <img src="{{asset('assets/front/img/log1.png')}}" alt="">
                                    </td>
                                    <td>https://www.afonete.com/</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                   @if($message=="error")
                   <span class="bg-danger">failed to send message, try again</span>
                   @endif
                    @if($message=="success")
                   <span class="bg-primary">Your message have been sent</span>
                   @endif
                   <!--    @if($message=="email")-->
                   <!--<span class="bg-primary"> Email not sent</span>-->
                   <!--@endif-->
                    <form action="{{route('contact.us')}}" method="post" class="contact-form">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your First-Name" name="name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="YourLast-Name" name="sur">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your Phone example(+250)" name="phone">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" placeholder="Your Email" name="email" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Your Message" name="message" required></textarea>
                                <button type="submit">Submit Now</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="map">


                <!-- maplandia.com search-box 1.0 end -->
                <iframe
                    src="https://www.google.com/maps/embed?pb="
                    height="470" style="border:0;" allowfullscreen="">
                </iframe>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

@include('home.include.footer')
</div>