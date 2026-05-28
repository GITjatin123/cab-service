@extends('layouts.frontend')
@section('content')
<div class="map-wrapper pt-90">
    <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d20828.255373036824!2d75.81854044803887!3d30.8916177!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sjai%20singh%20complex%20model%20town%20link%20road%20near%20children%20traffic%20park%20Ludhiana!5e1!3m2!1sen!2sin!4v1779957730828!5m2!1sen!2sin" width="100%" height="400" frameborder="0" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div><!-- /#google-map -->
<section class="contact-section bd-bottom padding">
    <div class="map"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-details-wrap">
                    <div class="contact-title">
                        <h2>Have Any <span>Questions?</span></h2>
                        <p>Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form.</p>
                    </div>
                    <ul class="contact-details">
                        <li><i class="fas fa-map-marker-alt"></i>Shop no 23, jai singh complex model town <br> link road near children traffic park - Ludhiana, punjab</li>
                        <li><i class="fas fa-envelope"></i><a href="javascript:void(0);" class="__cf_email__">test@ludhianataxiservices.in</a></li>
                        <li><i class="fas fa-phone"></i>(+123) 456 789 0) <br>1234-5678-09</li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <form action="#" method="post" id="ajax_contact" class="form-horizontal">
                        <div class="contact-title">
                            <h2>Contact With Us! <span></span></h2>
                        </div>
                        <div class="contact-form-group">
                            <div class="form-field">
                                <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" required>
                            </div>
                            <div class="form-field">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
                            </div>
                            <div class="form-field">
                                <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" required>
                            </div>
                            <div class="form-field message">
                                <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message" required></textarea>
                            </div>
                            <div class="form-field">
                                <button id="submit" class="default-btn" type="submit">Send Massage</button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/.contact-section-->
@endsection
