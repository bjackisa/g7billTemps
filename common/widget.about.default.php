{*
  ROTARY — default home content.
  Shown until the club publishes a KB article with code "index.index.header"
  (then widget.about.php renders the club's own content instead).
*}
<!-- Intro -->
<section class="rt-section rt-section-white rt-bleed">
  <div class="container">
    <div class="rt-intro">
      <div>
        <span class="rt-eyebrow">Who we are</span>
        <h2>People of action, united to create lasting change.</h2>
        <div class="rt-lead"><p>{$config.pagedesc|default:"We are neighbours, friends and leaders who come together to exchange ideas, build lasting friendships and take action to improve lives in our community and around the world."}</p></div>
        <div class="rt-hero-cta">
          {if E::V(['name'=>'user_signup','group'=>'user']) and empty($newuid)}<a href="/account/?sa=signup" class="btn btn-lg rt-btn-primary"><i class="fa fa-user-plus"></i> Become a member</a>{/if}
          <a href="/about/" class="btn btn-lg btn-default">About our club <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
      <div class="rt-intro-media">
        <div class="rt-cta" style="margin:0;padding:40px 38px">
          <span class="rt-eyebrow" style="color:#F7A81B">Our core values</span>
          <h3 style="margin:14px 0 22px">Service Above Self</h3>
          <div class="rt-values">
            <div class="rt-value"><h4><i class="fas fa-handshake"></i>Fellowship</h4></div>
            <div class="rt-value"><h4><i class="fas fa-balance-scale"></i>Integrity</h4></div>
            <div class="rt-value"><h4><i class="fas fa-globe-africa"></i>Diversity</h4></div>
            <div class="rt-value"><h4><i class="fas fa-hands-helping"></i>Service</h4></div>
            <div class="rt-value"><h4><i class="fas fa-flag"></i>Leadership</h4></div>
            <div class="rt-value rt-value-gold"><h4><a href="/?dad=index&jc=contact">Get involved <i class="fas fa-arrow-right"></i></a></h4></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Areas of focus -->
<section class="rt-section rt-section-tint rt-bleed">
  <div class="container">
    <div class="rt-section-head">
      <span class="rt-eyebrow">Areas of focus</span>
      <h2>Where we take action</h2>
      <p>Our service projects concentrate on the causes where we can make the greatest and most lasting difference.</p>
    </div>
    <div class="rt-focus">
      <div class="rt-focus-item" style="--c:#17458F"><span class="rt-focus-ico"><i class="fas fa-dove"></i></span><h4>Promoting peace</h4><p>Building understanding and resolving conflict in our communities.</p></div>
      <div class="rt-focus-item" style="--c:#E02927"><span class="rt-focus-ico"><i class="fas fa-shield-virus"></i></span><h4>Fighting disease</h4><p>Preventing and treating disease, including the push to end polio.</p></div>
      <div class="rt-focus-item" style="--c:#00A2E0"><span class="rt-focus-ico"><i class="fas fa-tint"></i></span><h4>Clean water &amp; sanitation</h4><p>Safe water, sanitation and hygiene for healthier families.</p></div>
      <div class="rt-focus-item" style="--c:#D41367"><span class="rt-focus-ico"><i class="fas fa-baby"></i></span><h4>Mothers &amp; children</h4><p>Improving care so mothers and children survive and thrive.</p></div>
      <div class="rt-focus-item" style="--c:#FF7600"><span class="rt-focus-ico"><i class="fas fa-book-open"></i></span><h4>Supporting education</h4><p>Literacy, schools and learning opportunities for all ages.</p></div>
      <div class="rt-focus-item" style="--c:#009739"><span class="rt-focus-ico"><i class="fas fa-seedling"></i></span><h4>Growing local economies</h4><p>Skills, enterprise and opportunity that strengthen livelihoods.</p></div>
      <div class="rt-focus-item" style="--c:#00ADBB"><span class="rt-focus-ico"><i class="fas fa-leaf"></i></span><h4>Protecting the environment</h4><p>Conservation and sustainable action for our shared planet.</p></div>
      <div class="rt-focus-item rt-focus-cta"><h4>Have a project in mind?</h4><p>Partner with us to bring it to life.</p><a href="/?dad=index&jc=contact" class="btn rt-btn-gold">Talk to us <i class="fas fa-arrow-right"></i></a></div>
    </div>
  </div>
</section>

<!-- The Four-Way Test -->
<section class="rt-section rt-section-royal rt-bleed">
  <div class="container">
    <div class="rt-section-head">
      <span class="rt-eyebrow" style="color:#F7A81B">The Four-Way Test</span>
      <h2>Of the things we think, say or do</h2>
      <p>A simple ethical guide Rotarians use in their personal and professional lives.</p>
    </div>
    <div class="rt-test">
      <div class="rt-test-item"><h4>Is it the <strong>TRUTH</strong>?</h4></div>
      <div class="rt-test-item"><h4>Is it <strong>FAIR</strong> to all concerned?</h4></div>
      <div class="rt-test-item"><h4>Will it build <strong>GOODWILL</strong> and better friendships?</h4></div>
      <div class="rt-test-item"><h4>Will it be <strong>BENEFICIAL</strong> to all concerned?</h4></div>
    </div>
  </div>
</section>

<!-- Join CTA -->
<section class="rt-section rt-section-white rt-bleed">
  <div class="container">
    <div class="rt-cta rt-cta-gold">
      <div class="rt-cta-inner">
        <div>
          <h2>Ready to make a difference?</h2>
          <p style="color:#3A2A05;margin:10px 0 0;font-size:16px">Join a global network of neighbours, friends and leaders who take action.</p>
        </div>
        <div class="rt-hero-cta" style="margin:0">
          {if E::V(['name'=>'user_signup','group'=>'user']) and empty($newuid)}<a href="/account/?sa=signup" class="btn btn-lg rt-btn-primary"><i class="fa fa-user-plus"></i> Join us</a>{/if}
          <a href="/?dad=index&jc=contact" class="btn btn-lg btn-default">Contact the club</a>
        </div>
      </div>
    </div>
  </div>
</section>
