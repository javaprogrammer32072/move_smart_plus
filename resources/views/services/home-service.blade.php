@extends('layouts.app')

@section('content')

    <x-services.page-title title="Home Shifting Service" crumb="Home Shifting" />
 <section class="services-details pt-120 pb-120">
    <div class="container">
      <div class="row">
        <!--Start Services Details Sidebar-->
        <div class="col-xl-4 col-lg-4">
          <div class="service-sidebar">
            <!--Start Services Details Sidebar Single-->
            <div class="sidebar-widget service-sidebar-single">
 
              <div class="sidebar-service-list">
                <ul>
                  <li class="current"><a href="#" class="current"><i class="fas fa-angle-right"></i><span>Residential Relocation</span></a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i><span>Office Moving</span></a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i><span>Corporate Moving</span></a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i><span>Furniture Disassembly</span></a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i><span>Furniture Assembly</span></a></li>
                  <li><a href="#"><i class="fas fa-angle-right"></i><span>Vehicle Transportation</span></a></li>
                </ul>
              </div>
 
              <div class="service-details-help">
                <div class="help-shape-1"></div>
                <div class="help-shape-2"></div>
                <div class="h2 help-title">Planning a move? <br> Talk to our <br> shifting experts</div>
                <div class="help-icon">
                  <span class=" lnr-icon-phone-handset"></span>
                </div>
                <div class="help-contact">
                  <p>Need help? Talk to an expert</p>
                  <a href="tel:+917070784447">+91 7070 784 447</a>
                </div>
              </div>
 
              <!--Start Services Details Sidebar Single-->
              <div class="sidebar-widget service-sidebar-single mt-4">
                <div class="service-sidebar-single-btn wow fadeInUp animated" data-wow-delay="0.5s" data-wow-duration="1200m" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
                  <a href="#" class="theme-btn btn-style-three w-100 justify-content-center"><span class="btn-title"><span class="fas fa-file-pdf"></span> Download Rate Card (PDF)</span></a>
                </div>
              </div>
            </div>
            <!--End Services Details Sidebar-->
          </div>
        </div>
 
        <!--Start Services Details Content-->
        <div class="col-xl-8 col-lg-8">
          <div class="services-details__content">
            <img class="w-100" src="{{ public_url('images/services/page/home-shift.png') }}" alt="MoveSmartPlus crew loading a family's belongings for home shifting">
            
            <div class="h3 mt-4">Service Overview</div>
            <p>Moving house means handing over everything you own to someone else's hands, for a few hours, on a truck. MoveSmartPlus exists to make that handover feel safe rather than stressful. Our home shifting service covers the full journey — packing, loading, transport, unloading and placement — whether you're moving two streets away in Bhagalpur or relocating across state lines. Every item that leaves your old home is logged against a written inventory, and the same list is checked off again at your new address, so nothing gets left behind or lost in transit.</p>
            <p>We run local shifts on the same day and intercity relocations on scheduled routes, using trained, background-verified crews rather than day-labour hired at the last minute. You get one move coordinator as a single point of contact from the day you book to the day the last box is unpacked, a fixed quote agreed before moving day, and transit insurance included as standard on every shift.</p>
            <div class="content mt-40">
              <div class="text">
                <div class="h3">Why Families Choose MoveSmartPlus</div>
                <p>House shifting is judged on the details most companies skip — how carefully the crockery is wrapped, whether the almirah reaches your new bedroom without a scratch, whether the truck actually arrives on the day it was promised. We built our process around those details rather than around them.</p>
            <blockquote class="blockquote-one">Every box is labelled by room and contents before it leaves your home, so unpacking at the new address takes hours, not days.</blockquote>
              </div>
              <div class="feature-list mt-4">
                <div class="row clearfix">
                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <img class="mb-3" src="{{ public_url('images/services/page/loading.png') }}" alt="Packer wrapping fragile household items in bubble wrap">
                    <p>Room-by-room packing with grade-appropriate materials — bubble wrap and edge protection for fragile items, waterproof covers for mattresses and upholstery, and sturdy cartons sealed and labelled for each room.</p>
                  </div>
                  <div class="col-lg-6 col-md-6 col-sm-12 column">
                    <img class="mb-3" src="{{ public_url('images/services/page/unloading.png') }}" alt="Movers carefully loading furniture into a moving truck">
                    <p>Careful loading and unloading with trolleys and ramps for heavy furniture and appliances, secured placement inside the truck, and unpacking at your new home on request so you can settle in the same day.</p>
                  </div>
                </div>
              </div>
            </div>
            <div class=" mt-25">
              <div class="h3">Frequently Asked Questions</div>
              <p>Here are answers to the most common questions about our home shifting services. If you have any additional questions, our relocation experts are always ready to assist you.</p>
              <ul class="accordion-box">
                <!--Block-->
                <li class="accordion block active-block">
                  <div class="acc-btn active">How much does home shifting cost?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content" style="display: block;">
                    <div class="content">
                      <div class="text">The cost depends on the distance, size of your home, quantity of household items, packing requirements, floor accessibility, and any additional services such as unpacking or storage. Contact MoveSmartPlus for a free personalized quotation.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block ">
                  <div class="acc-btn">Do you provide packing materials?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content" >
                    <div class="content">
                      <div class="text">Yes. We use premium-quality packing materials including bubble wrap, carton boxes, foam sheets, stretch film, packing paper, and waterproof covers to ensure maximum protection for your belongings.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block ">
                  <div class="acc-btn">Why should I choose MoveSmartPlus?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content" >
                    <div class="content">
                      <div class="text">MoveSmartPlus offers professional packing, experienced movers, transparent pricing, timely delivery, reliable customer support, and safe transportation, making your relocation simple and stress-free.</div>
                    </div>
                  </div>
                </li>
                
                <li class="accordion block ">
                  <div class="acc-btn">Can you transport fragile and valuable household items?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content" >
                    <div class="content">
                      <div class="text">Absolutely. Our experienced packing team uses specialized packing techniques for televisions, mirrors, glass furniture, artwork, antiques, computers, and other delicate items to minimize the risk of damage.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">How early should I book my home shifting date?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">For local shifts within the same city, 3–5 days' notice is usually enough. For intercity moves, or shifting during peak season such as month-ends and weekends, we recommend booking 2–3 weeks ahead so we can lock in your preferred date and the right size of truck.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">Do you provide a free survey and estimate for home shifting?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">Yes. A move coordinator visits your home or does a video walkthrough, lists everything that needs to move, and shares a fixed, itemised quote before you book — with no hidden charges added on moving day.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">Can you move heavy or oversized items like almirahs, sofas and appliances?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">Yes, our crew is trained and equipped to handle heavy and oversized household items, including wardrobes, sofa sets, refrigerators and washing machines, using trolleys, ramps and proper lifting technique to move them safely.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">Should I pack my belongings myself or let MoveSmartPlus handle it?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">Most customers let our trained packers handle it, since our packing is covered under transit insurance and comes with material-grade wrapping for fragile items. If you prefer, you can pack personal or sentimental items yourself and we'll handle the rest.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">Is my household shipment insured during transit?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">Every home shift includes basic transit insurance as standard. You can also opt for full-value protection on high-value items such as electronics, appliances and furniture at the time of booking.</div>
                    </div>
                  </div>
                </li>
                <!--Block-->
                <li class="accordion block">
                  <div class="acc-btn">How is the home shifting cost calculated?
                    <i class="fa-solid fa-plus"></i>
                  </div>
                  <div class="acc-content">
                    <div class="content">
                      <div class="text">Cost depends on the volume and weight of your household goods, the distance between cities or localities, floor level and lift access, and any additional services like packing materials or storage. You'll receive a fixed quote after our survey, before you book.</div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--End Services Details Content-->
      </div>
    </div>
  </section>

@endsection