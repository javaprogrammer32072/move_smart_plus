@props(['current'])

<div class="service-sidebar">
    <div class="sidebar-widget service-sidebar-single">

        <div class="sidebar-service-list">
            <ul>
                @foreach (service_nav_links() as $slug => $item)
                    <li class="{{ $slug === $current ? 'current' : '' }}">
                        <a href="{{ route($item['route']) }}" class="{{ $slug === $current ? 'current' : '' }}">
                            <i class="fas fa-angle-right"></i><span>{{ $item['label'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="service-details-help">
            <div class="help-shape-1"></div>
            <div class="help-shape-2"></div>
            <div class="h2 help-title">Planning a move? <br> Talk to our <br> shifting experts</div>
            <div class="help-icon">
                <span class="lnr-icon-phone-handset"></span>
            </div>
            <div class="help-contact">
                <p>Need help? Talk to an expert</p>
                <a href="tel:+917070784447">+91 7070 784 447</a>
            </div>
        </div>
    </div>
</div>
