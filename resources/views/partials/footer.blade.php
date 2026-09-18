<!-- Main Footer -->
<footer class="main-footer footer-style-one">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row gx-4">
                <!-- Footer Column -->
                <div class="footer-column col-lg-4 col-md-6">
                    <div class="footer-widget subscribe-widget">
                        <div class="h3 widget-title">Subscribe to Our Newsletter</div>
                        <x-newsletter-form id="footer" />
                        <div class="check-box">
                            <input type="checkbox" id="agree" name="agree" value="agree">
                            <label for="agree"> I agree to the <a href="{{ route('privacy-policy') }}">privacy policy.</a></label>
                        </div>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="footer-column col-lg-2 col-md-6">
                    <div class="footer-widget links-widget">
                        <div class="h5 widget-title">Company</div>
                        <div class="widget-content">
                            <ul class="user-links">
                                <li><a href="{{ route('about') }}">About</a></li>
                                <li><a href="{{ route('mission') }}">Our Mission</a></li>
                                <li><a href="{{ route('blogs.index') }}">Our Blogs</a></li>
                                <li><a href="{{ route('help-center') }}">Help Center</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="footer-column col-lg-3 col-md-6">
                    <div class="footer-widget links-widget style-two">
                        <div class="h5 widget-title">Service</div>
                        <div class="widget-content">
                            <ul class="user-links">
                                @foreach (service_nav_links() as $link)
                                    <li><a href="{{ route($link['route']) }}">{{ $link['label'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Column -->
                <div class="footer-column style-two col-lg-3 col-md-6">
                    <div class="footer-widget contact-widget">
                        <div class="widget-content">
                            <ul class="social-info style-one">
                                <li>+91 7070784447</li>
                                <li><a href="mailto:info@movesmartplus.com">info@movesmartplus.com</a>
                                </li>
                            </ul>
                            <ul class="social-info">
                                <li>Bhagalpur. Bihar <br>Tilkamanghi chowk</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer Bottom -->
    <div class="footer-bottom">
        <div class="auto-container">
            <div class="inner-container">
                <div class="upper-box">
                    <ul class="footer-nav">
                        <li><a href="{{ route('about') }}">About Us</a></li>
                        <li><a href="{{ route('timeline') }}">Timeline</a></li>
                        <li><a href="{{ route('mission') }}">Our Mission</a></li>
                        <li><a href="{{ route('help-center') }}">Help Center</a></li>
                        <li><a href="{{ route('newsletter') }}">Newsletter</a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="lower-box">
                    <div class="copyright-text">&copy; {{ date('Y') }} MoveSmartPlus. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!--End Main Footer -->