<!-- Main Footer -->
<footer class="main-footer footer-style-one">
    <div class="auto-container">
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row gx-4">
                <!-- Footer Column: Brand + Newsletter -->
                <div class="footer-column col-lg-4 col-md-6">
                    <div class="footer-widget subscribe-widget">
                        <div class="h3 widget-title">Move Smart Plus</div>
                        <p>Packers and movers serving Bihar and Jharkhand — home shifting, office relocation,
                            packing and vehicle transportation, backed by a written quote before you book.</p>
                        <div class="h5 widget-title mt-4">Subscribe for Moving Tips</div>
                        <x-newsletter-form id="footer" />
                        <div class="check-box">
                            <input type="checkbox" id="agree" name="agree" value="agree">
                            <label for="agree"> I agree to the <a href="{{ route('privacy-policy') }}">privacy
                                    policy.</a></label>
                        </div>
                    </div>
                </div>
                <!-- Footer Column: Quick Links -->
                <div class="footer-column col-lg-2 col-md-6">
                    <div class="footer-widget links-widget">
                        <div class="h5 widget-title">Quick Links</div>
                        <div class="widget-content">
                            <ul class="user-links">
                                <li><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About Us</a></li>
                                <li><a href="{{ route('mission') }}">Our Mission</a></li>
                                <li><a href="{{ route('blogs.index') }}">Blogs</a></li>
                                <li><a href="{{ route('help-center') }}">Help Center</a></li>
                                <li><a href="{{ route('contact-us') }}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Column: Services -->
                <div class="footer-column col-lg-3 col-md-6">
                    <div class="footer-widget links-widget style-two">
                        <div class="h5 widget-title">Our Services</div>
                        <div class="widget-content">
                            <ul class="user-links">
                                @foreach (service_nav_links() as $link)
                                    <li><a href="{{ route($link['route']) }}">{{ $link['label'] }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Footer Column: Contact -->
                <div class="footer-column style-two col-lg-3 col-md-6">
                    <div class="footer-widget contact-widget">
                        <div class="h5 widget-title">Contact</div>
                        <div class="widget-content">
                            <ul class="social-info style-one">
                                <li><a href="tel:+917070784447">+91 7070784447</a></li>
                                <li><a href="mailto:info@movesmartplus.com">info@movesmartplus.com</a>
                                </li>
                            </ul>
                            <ul class="social-info">
                                <li>
                                    <address class="mb-0">
                                        Gaura Chowki, Nathnagar Circle,<br>
                                        Bhagalpur, Bihar, India<br>
                                        <small class="d-block">Near P.S. Kajraili (P.S. No. 189)</small>
                                    </address>
                                </li>
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
                        <li><a href="{{ route('timeline') }}">Timeline</a></li>
                        <li><a href="{{ route('newsletter') }}">Newsletter</a></li>
                        <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('terms') }}">Terms &amp; Conditions</a></li>
                    </ul>
                </div>
                <div class="lower-box">
                    <div class="copyright-text">&copy; {{ date('Y') }} Move Smart Plus. All rights reserved.</div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer Bottom -->
</footer>
<!--End Main Footer -->
