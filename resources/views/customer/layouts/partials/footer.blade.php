<!-- footer -->
<section class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <img src="{{ assetUrl('theme/images/logo.png') }}" class="footer-logo">
                <p>Far far away, behind the word
                    mountains, far from the countries
                    Vokalia and Consonantia, there live .</p>
                <div class="socail-icon-box text-right">
                    <ul>
                        <li class="facebook">
                            <a href="{{ $site_configurations['facebook_profile_link'] }}" target="_blank">
                                <img src="{{ assetUrl('theme/images/icons/facebook.svg') }}"></a>
                        </li>
                        <li class="twitter">
                            <a href="{{ $site_configurations['twitter_profile_link'] }}" target="_blank">
                                <img src="{{ assetUrl('theme/images/icons/twitter.svg') }}"></a>
                        </li>
                        <li class="linkedin">
                            <a href="{{ $site_configurations['linkedin_profile_link'] }}" target="_blank">
                                <img src="{{ assetUrl('theme/images/icons/linkedin.svg') }}"></a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-3">
                <h5>Company</h5>
                <ul>
                    <li><a href="{{ route('page.view','about_us') }}">About Us</a></li>
                    <li><a href="{{ route('page.view','our_services') }}">Our Services</a></li>
                    <li><a href="{{ route('page.view','career') }}">Career</a></li>
                    <li><a href="{{ route('page.view','blog') }}">Blog</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h5>Support</h5>
                <ul>
                    <li><a href="{{ route('page.view','privacy_policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('page.view','report_abuse') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('page.view','cookies') }}">Cookies</a></li>
                </ul>
            </div>

            <div class="col-md-3">
                <h5>Get in touch</h5>
                <ul>
                    <li><a href="#">
                            {!! $site_configurations['office_address'] !!}
                        </a></li>
                    <li><a href="#">{{ $site_configurations['phone_number'] }}</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- footer bottom -->
<div class="footer-bottom mb-0">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                Copyright © {{ \Carbon\Carbon::today()->year.'-'.(\Carbon\Carbon::today()->year+1) }}
                {{ $site_configurations['company_name'] }}
            </div>
        </div>
    </div>
</div>

