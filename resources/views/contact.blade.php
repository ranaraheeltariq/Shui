@extends('layouts.app')
@section('description','contact us descrpition')
@section('keywords','water delivery')
@section('title','contact us Page')
@section('breadcrumb')
@parent

@endsection
@section('content')
<!-- ========================================= MAIN ========================================= -->
<main id="contact-us" class="inner-bottom-md">
	<section class="google-map map-holder">
		<div id="map" class="map center"></div>
	</section>

	<div class="container">
		<div class="row">
			
			<div class="col-md-8">
				<section class="section leave-a-message">
					<h2 class="bordered">Leave a Message</h2>
					<p>Maecenas dolor elit, semper a sem sed, pulvinar molestie lacus. Aliquam dignissim, elit non mattis ultrices, neque odio ultricies tellus, eu porttitor nisl ipsum eu massa.</p>
					<form id="contact-form" class="contact-form cf-style-1 inner-top-xs" method="post" >
                        <div class="row field-row">
                            <div class="col-xs-12 col-sm-6">
                                <label>Your Name*</label>
                                <input class="le-input" >
                            </div>
                            <div class="col-xs-12 col-sm-6">
                                <label>Your Email*</label>
                                <input class="le-input" >
                            </div>
                        </div><!-- /.field-row -->
                        
                        <div class="field-row">
                            <label>Subject</label>
                            <input type="text" class="le-input">
                        </div><!-- /.field-row -->

                        <div class="field-row">
                            <label>Your Message</label>
                            <textarea rows="8" class="le-input"></textarea>
                        </div><!-- /.field-row -->

                        <div class="buttons-holder">
                            <button type="submit" class="le-button huge">Send Message</button>
                        </div><!-- /.buttons-holder -->
                    </form><!-- /.contact-form -->
				</section><!-- /.leave-a-message -->
			</div><!-- /.col -->

			<div class="col-md-4">
				<section class="our-store section inner-left-xs">
					<h2 class="bordered">Our Store</h2>
					<address>
						17 Princess Road <br/>
						London, Greater London <br/>
						NW1 8JR, UK
					</address>
					<h3>Hours of Operation</h3>
					<ul class="list-unstyled operation-hours">
						<li class="clearfix">
							<span class="day">Monday:</span>
							<span class="pull-right hours">12-6 PM</span>
						</li>
						<li class="clearfix">
							<span class="day">Tuesday:</span>
							<span class="pull-right hours">12-6 PM</span>
						</li>
						<li class="clearfix">
							<span class="day">Wednesday:</span>
							<span class="pull-right hours">12-6 PM</span>
						</li>
						<li class="clearfix">
							<span class="day">Thursday:</span>
							<span class="pull-right hours">12-6 PM</span>
						</li>
						<li class="clearfix">
							<span class="day">Friday:</span>
							<span class="pull-right hours">12-6 PM</span>
						</li>
						<li class="clearfix">
							<span class="day">Saturday:</span>
							<span class="pull-right hours">12-6 PM</span>
						</li>
						<li class="clearfix">
							<span class="day">Sunday</span>
							<span class="pull-right hours">Closed</span>
						</li>
					</ul>
					<h3>Career</h3>
					<p>If you're interested in employment opportunities at MediaCenter, please email us: <a href="mailto:contact@yourstore.com">contact@yourstore.com</a></p>
				</section><!-- /.our-store -->
			</div><!-- /.col -->

		</div><!-- /.row -->
	</div><!-- /.container -->
</main>
<!-- ========================================= MAIN : END ========================================= -->
@endsection