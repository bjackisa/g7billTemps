{* ROTARY — cart configuration (motor insurance) *}
{literal}<style>.hide {visibility: hidden;}</style>{/literal}
<div class="rt-page-title">
  <div><span class="rt-eyebrow">Configure item</span><h1>{$cart.item_name}</h1></div>
  <ol class="rt-steps" aria-label="Checkout progress">
    <li class="is-active"><span>1</span> Cart</li>
    <li><span>2</span> Details</li>
    <li><span>3</span> Payment</li>
  </ol>
</div>
<section class="portlet box rt-panel rt-formcard">
  <div class="portlet-title rt-panel-head">
    <div class="caption"> <i class="fas fa-car"></i> {$cart.item_name} Configurations</div>
    <div class="tools"><a href="javascript:;" class="collapse" aria-label="Toggle"></a></div>
  </div>
  <div class="portlet-body form rt-panel-body">
    <div class="note note-info">Please ensure you have the documents below before placing an order. You can provide them after completing payment.<br /><br />
      <ul>
        <li><strong>Log Book</strong></li>
        <li><strong>Proof of installation of Alarm & Car Track</strong></li>
        <li><strong>Current Pictures</strong></li>
        <li>Valuation Report (if any)</li>
      </ul>
    </div>
    <form action="index.php" method="post" class="horizontal-form rt-form">
      <input type="hidden" name="dad" value="index" />
      <input type="hidden" name="jc" value="cart" />
      <input type="hidden" name="a" value="save" />
      <input type="hidden" name="id" value="{$cart.id|default:'0'}" />
      <input type="hidden" name="G7BILL_SECURITY" value="TRUE" />
      <input type="hidden" name="vid" value="{$cart.item_configs.vid|default:''}" />
      <div class="form-body">
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-money-bill-wave"></i> Value</label><div class="rt-input-split">
               <div class="rt-input-split-a">{FF::Select(['name'=>'cur','value'=>$cart.cur|default:$config.default_currency,'required'=>1,'table'=>'currencies','column'=>'code','key'=>'code','where'=>"`status`='1'",'_min_'=>1])}</div>
               <div class="rt-input-split-b"><input class="form-control money" type="text" name="value" value="{$cart.item_configs.value|default:'5000000'}"></div>
              </div>
              <span class="help-block rt-ff-help"><em>Enter the market value of your motor</em> </span>
              </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-map-marker-alt"></i> Geographical Area</label>{FF::Select(['name'=>'geographical_area_discount_','value'=>$cart.item_configs.geographical_area_discount_|default:'UG0','options'=>['UG0'=>'Uganda','EA-0.2'=>'East Africa (Including South Sudan)','OT-0.3'=>'Other'],'_min_'=>1,'assoc'=>1])} <span class="help-block rt-ff-help"><em>The geographical area of your motor (s)</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label"><i class="fas fa-car"></i> Registration Number</label>{FF::Text(['name'=>'motor_registration_number','value'=>$cart.item_configs.motor_registration_number|default:'','required'=>1,'_min_'=>1])} <span class="help-block rt-ff-help"><em>Enter the motor registration number Eg UAL123P</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Alarm System</label>
              {FF::Select(['name'=>'alarm_system_discount_','value'=>$cart.item_configs.alarm_system_discount_|default:'','options'=>['0'=>'No','0.05'=>'Yes'],'_min_'=>1,'assoc'=>1])} <span class="help-block rt-ff-help"><em>"Yes" if you have an alarm installed to earn a 5% discount</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Tracking System</label>
              {FF::Select(['name'=>'tracking_system_discount_','value'=>$cart.item_configs.tracking_system_discount_|default:'','options'=>['0'=>'No','0.15'=>'Yes'],'_min_'=>1,'assoc'=>1])} <span class="help-block rt-ff-help"><em>"Yes" if you have a tracking installed to earn a 15% discount</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Political Violence</label>
              {FF::Select(['name'=>'political_violence_discount_','value'=>$cart.item_configs.political_violence_discount_|default:'','options'=>['0'=>'No','-0.10'=>'Yes'],'_min_'=>1,'assoc'=>1])} <span class="help-block rt-ff-help"><em>Please select "Yes" if you would like cover against political Violence</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Minimum Excess</label>{FF::Select(['name'=>'excess_discount_','value'=>$cart.item_configs.excess_discount_|default:'','options'=>['0.10'=>'UGX1.5M @ 10% Discount','0.15'=>'UGX3.5M @ 15% Discount','0.2'=>'UGX4.5M @ 20% Discount'],'_min_'=>1,'assoc'=>1])} <span class="help-block rt-ff-help"><em>Excess is an contribution made by the insured towards the claim</em> </span> </div>
          </div>
          <div class="rt-field">
           <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None TIN</label>{FF::Text(['name'=>'tin','value'=>$cart.item_configs.tin|default:'','_min_'=>1,'icon'=>'fas fa-flag'])} <span class="help-block rt-ff-help"><em>Enter Tax Identification Number</em> </span>
           </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Intermediary</label>{if !empty($smarty.session.adminuser)}
              {FF::Select(['name'=>'agentid','value'=>$cart.agentid|default:'','options'=>Agent::Get(['d2'=>1,'key'=>'code']),'_min_'=>1,'assoc'=>1])}{else}
              {FF::Text(['name'=>'agentid','value'=>$cart.agentid|default:'','_min_'=>1,'icon'=>'fas fa-user-secret'])}{/if}
              <span class="help-block rt-ff-help"><em>If you have an agent code or email, please provide it here</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Financier</label>{FF::Select(['name'=>'joint','value'=>$cart.joint|default:'','options'=>Users::Get(['_group_'=>'financers','d2'=>1]),'_min_'=>1,'assoc'=>1])}
              <span class="help-block rt-ff-help"><em>Choose the associated insurance financier</em></span> </div>
          </div>
        </div>
        {FF::Box(['_BOX_'=>'open','title'=>'[Optional] Motor Details','icon'=>'fas fa-cogs','class'=>"blue {if !empty($cart.item_configs.vid)}hide{/if}"])}
        <div class="rt-field-grid">
        <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Make</label>{FF::Select(['name'=>'motor_make','value'=>$cart.item_configs.motor_make,'table'=>'vehicle_makes','column'=>'name','where'=>"`status`='on'",'_min_'=>1])} <span class="help-block rt-ff-help"><em>Choose the make of the motor</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Chassis Number</label>{FF::Text(['name'=>'motor_chassis_number','value'=>$cart.item_configs.motor_chassis_number|default:'','_min_'=>1])} <span class="help-block rt-ff-help"><em>Enter the motor chassis number here</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Engine Number</label>{FF::Text(['name'=>'motor_engine_number','value'=>$cart.item_configs.motor_engine_number|default:'','_min_'=>1])} <span class="help-block rt-ff-help"><em>Enter the motor engine number here</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Engine Size</label>{FF::Text(['name'=>'motor_cc','value'=>$cart.item_configs.motor_cc|default:'','_min_'=>1])} <span class="help-block rt-ff-help"><em>Enter the motor engine size here</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Weight</label>{FF::Text(['name'=>'motor_weight','value'=>$cart.item_configs.motor_weight|default:'','_min_'=>1])} <span class="help-block rt-ff-help"><em>Enter the motor weight here in KGs</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Body</label>{FF::Select(['name'=>'motor_body','value'=>$cart.item_configs.motor_body,'table'=>'vehicle_body','column'=>'name','where'=>"`status`='on'",'_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Enter the motor body here</em> </span>
            </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Year of Manufacture</label>{assign var='year' value=$smarty.now|date_format:"%Y"}
              {FF::Select(['name'=>'year','value'=>$cart.year|default:'','options'=>U::Counter(['from'=>$year-50,'to'=>$year]),'_min_'=>1,'assoc'=>1])}
              <span class="help-block rt-ff-help"><em>Enter the motor year of manufacture here</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Seating Capacity</label>{FF::Text(['name'=>'motor_seats','value'=>$cart.item_configs.motor_seats|default:'','_min_'=>1])} <span class="help-block rt-ff-help"><em>Enter the motor seating capacity here</em> </span> </div>
          </div>
        </div>
        {FF::Box(['_BOX_'=>'close'])}

        {FF::Box(['_BOX_'=>'open','title'=>'[Optional] Policy Extras','icon'=>'fas fa-list','class'=>"yellow {if empty($smarty.session.adminuser)}hide{/if}"])}
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Policy Number</label>{FF::Text(['name'=>'number','value'=>$cart.item_configs.number|default:'','_min_'=>1,'id'=>'mask_policy'])} <span class="help-block rt-ff-help"><em>Overwrite the default generated policy number</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Authorised Repair Limit</label>{FF::Text(['name'=>'repair_limit','value'=>$cart.item_configs.repair_limit|default:'1,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Authorised Repair Limit</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Windscreen Repair Limit</label>{FF::Text(['name'=>'windscreen_repair_limit','value'=>$cart.item_configs.windscreen_repair_limit|default:'500,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Windscreen Repair Limit</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Third Party Property Damage Limit</label>{FF::Text(['name'=>'third_party_property_damage_limit','value'=>$cart.item_configs.third_party_property_damage_limit|default:'UGX50M per occurrence and in aggregate anyone period of Insurance','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Third Party Property Damage Limit</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Third Party Bodily Injury Per Person Limit</label>{FF::Text(['name'=>'third_party_bodily_injury_per_person_limit','value'=>$cart.item_configs.third_party_bodily_injury_per_person_limit|default:'UGX10M per person','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Third Party Bodily Injury Per Person Limit</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Third Party Bodily Injury Per Accident Limit</label>{FF::Text(['name'=>'third_party_bodily_injury_per_accident_limit','value'=>$cart.item_configs.third_party_bodily_injury_per_accident_limit|default:'UGX50M per occurrence and in aggregate anyone period of Insurance','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Third Party Bodily Injury Per Accident Limit</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Excess for Accident & Fire Claim Limit</label>{FF::Text(['name'=>'excess_for_accident_fire_claim_limit','value'=>$cart.item_configs.excess_for_accident_fire_claim_limit|default:'100,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Accident & Fire Claim Limit</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Theft and Total Loss Limit</label>{FF::Text(['name'=>'excess_for_theft_total_loss_limit','value'=>$cart.item_configs.excess_for_theft_total_loss_limit|default:'100,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Theft and Total Loss Limit</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Radio Cassette/CD/TV Limit</label>{FF::Text(['name'=>'radio_cassette_limit','value'=>$cart.item_configs.radio_cassette_limit|default:'500,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Radio Cassette/CD/TV Limit</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Towing and  Recovery Limit</label>{FF::Text(['name'=>'towing_recovery_limit','value'=>$cart.item_configs.towing_recovery_limit|default:'1,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default Towing and  Recovery Limit</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Vanderism Of Vehicle</label>{FF::Text(['name'=>'vanderism_of_vehicle','value'=>$cart.item_configs.vanderism_of_vehicle|default:'Up to actual cost incured','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Wrong Fuel</label>{FF::Text(['name'=>'wrong_fuel','value'=>$cart.item_configs.wrong_fuel|default:'1,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Replacement Of Parts Clause</label>{FF::Text(['name'=>'replacement_of_parts_clause','value'=>$cart.item_configs.replacement_of_parts_clause|default:'Covered','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Suspension Of Cover Clause</label>{FF::Text(['name'=>'suspension_of_cover_clause','value'=>$cart.item_configs.suspension_of_cover_clause|default:'Covered','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Intoxication Clause</label>{FF::Text(['name'=>'intoxication_clause','value'=>$cart.item_configs.intoxication_clause|default:'Covered','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None average_clause</label>{FF::Text(['name'=>'average_clause','value'=>$cart.item_configs.average_clause|default:'Covered','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Loss Due to Damages Caused by Floods Hurricane Storms Earthquakes and Other Related Occurrences</label>{FF::Text(['name'=>'loss_due_to_damages_caused_by_floods_hurricane_storms_earthquakes_and_other_related_occurrences','value'=>$cart.item_configs.loss_due_to_damages_caused_by_floods_hurricane_storms_earthquakes_and_other_related_occurrences|default:'Covered','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Parking Facility and Movement of Vehicles</label>{FF::Text(['name'=>'parking_facility_and_movement_of_vehicles','value'=>$cart.item_configs.parking_facility_and_movement_of_vehicles|default:'Covered','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Loss Through Riots Civil Commotion and Malicious Damage</label>{FF::Text(['name'=>'loss_through_riots_civil_commotion_and_malicious_damage','value'=>$cart.item_configs.loss_through_riots_civil_commotion_and_malicious_damage|default:'Covered','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Medical Expenses to The Insured Driver Following a Motor Accident in the Insured Vehicle for the Driver</label>{FF::Text(['name'=>'medical_expenses_to_the_insured_driver_following_a_motor_accident_in_the_insured_vehicle_for_the_driver','value'=>$cart.item_configs.medical_expenses_to_the_insured_driver_following_a_motor_accident_in_the_insured_vehicle_for_the_driver|default:'2,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Claims Preparation Costs</label>{FF::Text(['name'=>'claims_preparation_costs','value'=>$cart.item_configs.claims_preparation_costs|default:'2,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Fire Extinguishing Charges Extension</label>{FF::Text(['name'=>'fire_extinguishing_charges_extension','value'=>$cart.item_configs.fire_extinguishing_charges_extension|default:'2,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Locks and Keys Extension</label>{FF::Text(['name'=>'locks_and_keys_extension','value'=>$cart.item_configs.locks_and_keys_extension|default:'1,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Vehicle Protection Following an Accident</label>{FF::Text(['name'=>'vehicle_protection_following_an_accident','value'=>$cart.item_configs.vehicle_protection_following_an_accident|default:'2,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Rescue Operations and Completion of Journey</label>{FF::Text(['name'=>'rescue_operations_and_completion_of_journey','value'=>$cart.item_configs.rescue_operations_and_completion_of_journey|default:'2,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Loss of Personal Effects Excluding Money and Electronic Gadgets Like Cell Phones and Laptops</label>{FF::Text(['name'=>'loss_of_personal_effects_excluding_money_and_electronic_gadgets_like_cell_phones_and_laptops','value'=>$cart.item_configs.loss_of_personal_effects_excluding_money_and_electronic_gadgets_like_cell_phones_and_laptops|default:'500,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Court Legal Liability</label>{FF::Text(['name'=>'court_legal_liability','value'=>$cart.item_configs.court_legal_liability|default:'6,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
          <div class="rt-field">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Contingent Of The Carriers Liability</label>{FF::Text(['name'=>'contingent_of_the_carriers_liability','value'=>$cart.item_configs.contingent_of_the_carriers_liability|default:'5,000,000','_min_'=>1])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        <div class="rt-field-grid">
          <div class="rt-field is-wide">
            <div class="form-group rt-ff-stack">
              <label class="control-label rt-ff-label">None Others</label>{FF::Textarea(['name'=>'others','value'=>$cart.item_configs.others|default:'<p><strong>MAJOR EXCLUSIONS:</strong> </p>
			<p>The following is a short-form listing of major policy </p><ol><li>War and related perils</li><li>Damage to Tyres by braking, punctures, cuts, or bursts.</li>
			<li>Depreciation, wear, and tear</li><li>Mechanical or electrical failures or breakages</li></ol>','_min_'=>1,'class'=>'summernote'])}
              <span class="help-block rt-ff-help"><em>Overwrite the default</em> </span> </div>
          </div>
        </div>
        {FF::Box(['_BOX_'=>'close'])}
        <!-- Admin Configurations-->
        {include file="index.cart.configs.admin.php"}
        <!-- Admin Configurations/-->
      </div>
      <div class="form-actions rt-form-actions">
        <button type="reset" class="btn rt-btn-text is-danger" onclick="location.href='?dad=index&jc=cart&a=trash';"><i class="far fa-trash-alt"></i> Empty cart</button>
        <button type="reset" class="btn btn-default" onclick="location.href='?dad=index&jc=cart&a=del&id={$cart.id|default:'0'}';"><i class="fas fa-forward"></i> Skip</button>
        <button type="reset" class="btn btn-default"><i class="fas fa-redo"></i> Reset</button>
        <button type="submit" name="submit" value="Save Configuration" class="btn rt-btn-primary">Save &amp; continue <i class="fas fa-arrow-right"></i></button>
      </div>
    </form>
    <!-- END FORM-->
  </div>
</section>
