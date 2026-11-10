{* ROTARY — contact *}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Contact</span><h1>Get in touch with [[CN]]</h1></div>
</div>

{if E::V(['name'=>'longitude'])&&E::V(['name'=>'latitude'])&&empty($smarty.request.mini)}
<section class="rt-contact-map">
  <div id="gmapbg" class="rt-map rt-map-lg"></div>
  <div class="rt-contact-card">
    <h2>[[CN]]</h2>
    <ul class="rt-contact-list rt-contact-list-dark">
      <li><i class="fas fa-map-marker-alt"></i><span>{if !empty($config.companyaddress1)}[[CA1]],{/if}<br/>{if !empty($config.companyaddress2)}[[CA2]],{/if} {if !empty($config.companycity)}[[CAC]]{/if}{if !empty($config.companystate)}, [[CAS]] [[CAZ]]{/if}</span></li>
      <li><i class="fas fa-phone-alt"></i><span>{U::RP('/','<br />',$config.companyphone)}</span></li>
      <li><i class="far fa-envelope"></i><span>[[CE]]</span></li>
    </ul>
    {if E::V(['name'=>'facebook_page']) or E::V(['name'=>'twitter_page']) or E::V(['name'=>'youtube_page'])}
    <ul class="rt-socials">
      {if E::V(['name'=>'twitter_page'])}<li><a href="{E::V(['name'=>'twitter_page'])}" aria-label="X / Twitter"><i class="fab fa-twitter"></i></a></li>{/if}
      {if E::V(['name'=>'facebook_page'])}<li><a href="{E::V(['name'=>'facebook_page'])}" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>{/if}
      {if E::V(['name'=>'youtube_page'])}<li><a href="{E::V(['name'=>'youtube_page'])}" aria-label="YouTube"><i class="fab fa-youtube"></i></a></li>{/if}
    </ul>
    {/if}
  </div>
</section>
{if !empty($rows)}
<section class="rt-section-tight">
  <div class="rt-section-head rt-left"><span class="rt-eyebrow">Locations</span><h2>Our branches</h2></div>
  {include file="widget.branches.php"}
  <p><a href="?dad=co&jc=branches" class="btn rt-btn-soft">Full list of branches <i class="fas fa-arrow-right"></i></a></p>
</section>
{/if}
{/if}

{if E::V(['name'=>'support:contact:form'])}
<section class="rt-contact-grid">
  <div class="rt-contact-aside">
    <div class="rt-side-card rt-side-card-royal">
      <span class="rt-card-icon"><i class="far fa-lightbulb"></i></span>
      <h3>Need to know more?</h3>
      <p>Visit our knowledge base to learn more about our ever-expanding services.</p>
      <a href="/?dad=index&jc=kb" class="btn rt-btn-gold">Browse answers <i class="fas fa-arrow-right"></i></a>
    </div>
    <div class="rt-side-card">
      <h3><i class="far fa-question-circle"></i> Have a question?</h3>
      <form action="/" method="post" class="rt-searchbox rt-searchbox-sm" role="search">
        <input type="hidden" name="dad" value="index" />
        <input type="hidden" name="jc" value="kb" />
        <i class="fas fa-search" aria-hidden="true"></i>
        <input type="text" class="form-control" name="term" placeholder="Ask a question" aria-label="Ask a question" />
        <button class="btn rt-btn-primary" type="submit">Go</button>
      </form>
      <p class="rt-muted">Our team will help you look through our FAQs to get your questions answered.</p>
    </div>
  </div>
  <div class="rt-prose-card">
    <span class="rt-eyebrow">Keep in touch</span>
    <h2>Send us a message</h2>
    <p class="rt-muted">Our helpline is always open to receive any inquiry or feedback. Drop us a message and we will get back to you as soon as we can.</p>
    <form action="/" method="post" name="contact" class="rt-form">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="contact" />
      <input type="hidden" name="a" value="feedback" />
      <input type="hidden" name="recaptcha_response" id="recaptchaResponse">
      <div class="rt-field-grid">
        <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-c-name">Your name</label><input id="rt-c-name" type="text" placeholder="Jane Doe" class="form-control" name="name" value="{$smarty.request.name|default:''}" autocomplete="name"></div>
        <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-c-email">Email</label><input id="rt-c-email" type="email" placeholder="you@example.com" class="form-control" name="email" value="{$smarty.request.email|default:''}" autocomplete="email"></div>
        <div class="form-group rt-ff-stack"><label class="control-label rt-ff-label" for="rt-c-phone">Phone</label><input id="rt-c-phone" type="text" placeholder="+256 …" class="form-control" name="phone" value="{$smarty.request.phone|default:''}" autocomplete="tel"></div>
        <div class="form-group rt-ff-stack is-wide"><label class="control-label rt-ff-label" for="rt-c-msg">Message</label><textarea id="rt-c-msg" rows="6" name="message" placeholder="How can we help?" class="form-control">{$smarty.request.message|default:''}</textarea></div>
        <div class="form-group rt-ff-stack is-wide rt-captcha">
          <img src="{$securebase}/plugins/captcha/index.php" alt="captcha" />
          <div class="input-icon rt-input"><i class="fas fa-shield-alt"></i><input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Enter the captcha shown" name="CAPTCHA" required aria-label="Captcha" /></div>
        </div>
      </div>
      <button type="submit" class="btn btn-lg rt-btn-primary"><i class="far fa-paper-plane"></i> Send message</button>
    </form>
  </div>
</section>
{/if}
