<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<style>
  footer {
    background-color: #232c3b;
    min-height: 350px;
    font-family: 'Open Sans', sans-serif;
    padding-top: 30px
  }

  .footerleft {
    margin-top: 20px;
    padding: 0 36px;
  }

  .logofooter {
    margin-bottom: 10px;
    font-size: 25px;
    color: white;
    font-weight: 700;
  }

  .footerleft p {
    color: white;
    font-size: 12px !important;
    font-family: 'Open Sans', sans-serif;
    margin-bottom: 15px;
  }

  .footerleft p i {
    width: 20px;
    color: #fff;
  }

  .paddingtop-bottom {
    margin-top: 20px;
  }

  .footer-ul {
    list-style-type: none;
    padding-left: 0px;
    margin-left: 2px;
  }

  .footer-ul li {
    line-height: 29px;
    font-size: 12px;
    margin-top: 5px;
  }

  .footer-ul li a {
    font-size: 17px;
    text-decoration: none;
    font-weight: 200;
    color: #fff;
    transition: color 0.2s linear 0s, background 0.2s linear 0s;
    display: block;
    padding-bottom: 5px;
    border-bottom: 1px dotted #fff;
  }

  .footer-ul i {
    margin-right: 10px;
  }

  .footer-ul li a:hover {
    transition: color 0.2s linear 0s, background 0.2s linear 0s;
    color: #73b0f4;
  }

  /* .social:hover {
    -webkit-transform: scale(1.1);
    -moz-transform: scale(1.1);
    -o-transform: scale(1.1);
  } */

  .icon-ul {
    list-style-type: none !important;
    margin: 0px;
    padding: 0px;
  }

  .icon-ul li {
    line-height: 75px;
    width: 100%;
    float: left;
  }

  .icon {
    float: left;
    margin-right: 5px;
  }

  .copyright {
    min-height: 40px;
    background-color: #141d29;
  }

  .copyright p {
    text-align: center;
    color: white;
    padding: 10px 0;
    margin-bottom: 0px;
  }

  .heading7 {
    position: relative;
    margin: 0 0 25px;
    color: #fff;
    padding-bottom: 5px;
    font-weight: 900;
    font-size: 24px;
    line-height: 28px;
  }

  .heading7:before {
    content: " ";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 60px;
    height: 1px;
    background-color: #fff;
  }

  .post p a {
    font-size: 12px;
    color: white !important;
    line-height: 20px;
  }

  .post p a span {
    display: block;
    color: #8f8f8f !important;
  }

  .bottom_ul {
    list-style-type: none;
    float: right;
    margin-bottom: 0px;
  }

  .bottom_ul li {
    float: left;
    line-height: 40px;
  }

  .bottom_ul li:after {
    content: "/";
    color: white;
    margin-right: 8px;
    margin-left: 8px;
  }

  .bottom_ul li a {
    color: white;
    font-size: 12px;
  }

  .post a:hover {

    text-decoration: none;
  }

  .btn-insta {
    color: white !important;
    background: transparent;
  }

  .fields {
    color: white;
    font-size: 15px;
    text-decoration: none;
  }
</style>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-6 footerleft ">
        <h6 class="heading7">About Us</h6>
        <p><a href="https://www.facebook.com/ARGAutosignShop">ARG AutoSign Shop</a> is a Website development company from Bangalore. ARG AutoSign Shop builds
          interactive, astonishing,
          responsive
          and feature rich responsive website solution.</p>
        <p itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"><i class="fa fa-map-pin"></i>
          <span itemprop="streetAddress">Mahadevi Nilaya, 10th cross, Raghavendra matha Road, Chikkabanavara</span>,

          <span itemprop="addressLocality">Bangalore</span>
          <span itemprop="addressRegion">, Karnataka</span>,
          <span itemprop="addressCountry">India</span><br />
          <span itemprop="postalCode">KA - 560090</span>
        </p>
        <p><i class="fa fa-phone"></i> Phone (India) :
          <span itemprop="telephone"><a href="tel:+91 8861031253" class="fields" title="Contact Madgeek Pvt Ltd"> +91
              8861031253</a></span>
        </p>
        <p><i class="fa fa-envelope"></i> E-mail :
          <span itemprop="email"><a href="geraldvalderamos13@gmail.com" class="fields"
              title="Gmail">geraldvalderamos13@gmail.com</a></span>
        </p>

        <span itemprop="openingHoursSpecification" itemscope itemtype="http://schema.org/OpeningHoursSpecification">
          <p><i class="fa fa-calendar" aria-hidden="true"></i> Work Days:
            <span itemprop="dayOfWeek" itemscope itemtype="http://schema.org/DayOfWeek">
              <span itemprop="name">MON, TUE, WED, THUR, FRI, SAT</span></span>
          </p>
          <p><i class="fa fa-clock-o" aria-hidden="true"></i> Opening time:
            <span itemprop="opens"
              content="Please insert valid ISO 8601 date/time here. Examples: 2015-07-27 or 2015-07-27T15:30">09:00
              AM</span> <i class="fa fa-clock-o" aria-hidden="true"></i>
            Closing time:
            <span itemprop="closes"
              content="Please insert valid ISO 8601 date/time here. Examples: 2015-07-27 or 2015-07-27T15:30">06:00
              PM</span>
          </p>
        </span>
      </div>
      <div class="col-md-2 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Useful Links</h6>
        <ul class="footer-ul">
          <li><a href="//madgeek.in" title="MadGeek About Us"> <i class="fa fm fa-angle-double-right"></i> About Us</a>
          </li>
          <li><a href="//madgeek.in" title="MadGeek Privacy Policy"> <i class="fa fm fa-angle-double-right"></i> Privacy
              Policy</a></li>
          <li><a href="//madgeek.in" title="madGeek Terms & Conditions"> <i class="fa fm fa-angle-double-right"></i>
              T & Conditions</a></li>
          <li><a href="//madgeek.in" title="MadGeek Contact us"> <i class="fa fm fa-angle-double-right"></i> Contact
              Us</a></li>
          <li><a href="//madgeek.in" title="MadGeek SiteMap"> <i class="fa fm fa-angle-double-right"></i> Sitemap</a>
          </li>
          <li><a href="//madgeek.in" title="MadGeek Web Store"><i class="fa fm fa-angle-double-right"></i> Madgeek
              Store</a></li>
        </ul>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Facebook</h6>
        <div class="fb-page" data-href="https://www.facebook.com/ARGAutosignShop" data-tabs="timeline"
          data-small-header="true" data-width="270px" data-hide-cover="true" data-height="260px"
          data-show-facepile="true">
          <blockquote cite="https://www.facebook.com/ARGAutosignShop" class="fb-xfbml-parse-ignore"><a
              href="https://www.facebook.com/ARGAutosignShop">ARG AutoSign Shop</a></blockquote>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 paddingtop-bottom">
        <h6 class="heading7">Contact</h6>
        <ul class="footer-ul">
          <li>
            <div class="fb-like" data-href="https://www.facebook.com/madgeek.in" data-layout="standard"
              data-width="250px" data-action="recommend" data-size="small" data-show-faces="true" data-share="true">
            </div>
          </li>
          <li>
            <a href="https://twitter.com/madgeek_in" class="twitter-follow-button" data-show-count="false">Follow
              @madgeek_in</a>
            <script defer async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
          </li>
          <li>
            <div class="g-follow" data-href="https://plus.google.com/107750645446351770147" data-rel="relationshipType">
            </div>
            <script src="https://apis.google.com/js/platform.js" async defer></script>
          </li>
          <li>
            <script defer src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
            <script defer type="IN/FollowCompany" data-id="7599317" data-counter="right" async></script>
          </li>
          <li>
            <a class="btn btn-default btn-insta" href="https://www.instagram.com/madgeek.in/" rel="external"
              target="_blank"><i class="fa fa-lg fa-instagram"></i> Follow madgeek.in</a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<div class="copyright">
  <div class="container">
    <div class="col-md-12 col-sm-12">
      <p>© 2022 - All Rights with <a href="https://www.facebook.com/ARGAutosignShop">ARG AutoSign Shop</a> | CIN : *INSERT CIN NUMBER HERE*</p>
    </div>
  </div>
</div>