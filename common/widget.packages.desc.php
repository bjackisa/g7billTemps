{* ROTARY — vehicle spec sheet (compact on cards, full on product page) *}
{if $smarty.request.dad eq 'index' and $smarty.request.a neq 'open'}
<span class="rt-specs">
  <span class="rt-spec"><i class="far fa-calendar"></i>{$R._vehicle_.year|default:'N/A'}</span>
  <span class="rt-spec"><i class="fas fa-cogs"></i>{$R._vehicle_.transmission|ucwords|default:'N/A'}</span>
  <span class="rt-spec"><i class="fas fa-tachometer-alt"></i>{$R._vehicle_.distance|number_format|default:'N/A'} km</span>
  <span class="rt-spec"><i class="fas fa-gas-pump"></i>{$R._vehicle_.fuel|ucwords|default:'N/A'}</span>
</span>
{else}
<div class="rt-spec-sheet">
  <h3 class="rt-card-label"><i class="fas fa-car"></i> Specifications</h3>
  <dl class="rt-kv rt-kv-lines rt-spec-grid">
    <div><dt>Vehicle Year</dt><dd>{$R._vehicle_.year|default:'N/A'}</dd></div>
    <div><dt>Transmission</dt><dd>{$R._vehicle_.transmission|ucwords|default:'N/A'}</dd></div>
    <div><dt>Distance</dt><dd>{$R._vehicle_.distance|number_format|default:'N/A'} km</dd></div>
    <div><dt>Fuel</dt><dd>{$R._vehicle_.fuel|ucwords|default:'N/A'}</dd></div>
    <div><dt>Seatbelts Year</dt><dd>{$R._vehicle_.seatbelts_year|default:'N/A'}</dd></div>
    <div><dt>Doors</dt><dd>{$R._vehicle_.doors|default:'N/A'}</dd></div>
    <div><dt>Vehicle Color</dt><dd>{$R._vehicle_.vehicle_color|default:'N/A'}</dd></div>
    <div><dt>Steering</dt><dd>{$R._vehicle_.steering|default:'N/A'}</dd></div>
    <div><dt>Size</dt><dd>{$R._vehicle_.size|default:'N/A'}</dd></div>
    <div><dt>Grade</dt><dd>{$R._vehicle_.grade|default:'N/A'}</dd></div>
    <div><dt>Model Code</dt><dd>{$R._vehicle_.model_code|default:'N/A'}</dd></div>
  </dl>
  <h3 class="rt-card-label"><i class="fas fa-check-circle"></i> Features</h3>
  <dl class="rt-kv rt-kv-lines rt-spec-grid">
    <div><dt>HD Headlights</dt><dd>{RR::Status($R._vehicle_.hid_headlights)}</dd></div>
    <div><dt>Power Steering</dt><dd>{RR::Status($R._vehicle_.power_steering)}</dd></div>
    <div><dt>AntiLock Brakes</dt><dd>{RR::Status($R._vehicle_.antilock_brakes)}</dd></div>
    <div><dt>SRS Airbag</dt><dd>{RR::Status($R._vehicle_.srs_airbag)}</dd></div>
    <div><dt>Cruise Control</dt><dd>{RR::Status($R._vehicle_.cruise_control)}</dd></div>
    <div><dt>Power Windows</dt><dd>{RR::Status($R._vehicle_.power_windows)}</dd></div>
    <div><dt>Power Mirrors</dt><dd>{RR::Status($R._vehicle_.power_mirrors)}</dd></div>
    <div><dt>Spare Key</dt><dd>{RR::Status($R._vehicle_.spare_key)}</dd></div>
    <div><dt>Central Locking</dt><dd>{RR::Status($R._vehicle_.central_locking)}</dd></div>
    <div><dt>Air Conditioning</dt><dd>{RR::Status($R._vehicle_.air_conditioning)}</dd></div>
    <div><dt>Leather Seats</dt><dd>{RR::Status($R._vehicle_.leather_seats)}</dd></div>
    <div><dt>Alloy Wheels</dt><dd>{RR::Status($R._vehicle_.alloy_wheels)}</dd></div>
    <div><dt>Sun Roof</dt><dd>{RR::Status($R._vehicle_.sun_roof)}</dd></div>
    <div><dt>Back Camera</dt><dd>{RR::Status($R._vehicle_.back_camera)}</dd></div>
    <div><dt>Sliding Door</dt><dd>{RR::Status($R._vehicle_.sliding_door)}</dd></div>
  </dl>
</div>
{/if}
