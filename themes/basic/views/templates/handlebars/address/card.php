<?php
// Yii Imports
use yii\helpers\Html;
// CMG Imports
use cmsgears\core\common\models\resources\Address;
use cmsgears\core\common\utilities\CodeGenUtil;
use cmsgears\core\common\utilities\DataUtil;

$addressTypes		= DataUtil::arrayFilterKeys( Address::$typeMap, $excludeAddressTypes );
$addressTypeOptions = CodeGenUtil::generateSelectOptionsFromArray( $addressTypes );

?>

<script id="addAddressTemplate" type="text/x-handlebars-template">
<form class="cmt-location form relative" cmt-app="core" cmt-controller="address" cmt-action="add" action="<?= $apixBase ?>/add-address?id=<?= $model->id ?>">
	<?php include $frmSpinner; ?>
	<div class="data-crud-form">
		<div class="row max-cols-50 padding padding-default">
			<div class="col col2">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="Address[title]" placeholder="Title" />
					<span class="error" cmt-error="Address[title]"></span>
				</div>
			</div>
			<div class="col col2">
				<div class="form-group">
					<label>Type</label>
					<select name="model-type" class="cmt-address-type cmt-select"><?= $addressTypeOptions ?></select>
				</div>
			</div>
			<div class="col col2">
				<div class="form-group">
					<label>Address 1*</label>
					<input type="text" name="Address[line1]" placeholder="Address 1" />
					<span class="error" cmt-error="Address[line1]"></span>
				</div>
			</div>
			<div class="col col2">
				<div class="form-group">
					<label>Address 2</label>
					<input type="text" name="Address[line2]" placeholder="Address 2" />
					<span class="error" cmt-error="Address[line2]"></span>
				</div>
			</div>
			
			<div class="cmt-location-countries col col2">
				<div class="form-group">
					<label>Country *</label>
					<?= Html::dropDownList( 'Address[countryId]', null, $countryMap, [ 'class' => 'cmt-location-country element-60 cmt-select' ] ) ?>
					<span class="error" cmt-error="Address[countryId]"></span>
				</div>
			</div>
			<div class="cmt-location-provinces col col2" cmt-app="core" cmt-controller="region" cmt-action="optionsList" action="location/region-options" cmt-keep cmt-custom>
				<div class="form-group">
					<label><?= Yii::$app->core->provinceLabel ?> *</label>
					<?= Html::dropDownList( 'Address[provinceId]', null, $provinceMap, [ 'class' => 'cmt-location-province element-60 cmt-select cmt-change' ] ) ?>
					<span class="error" cmt-error="Address[provinceId]"></span>
					<span class="hidden cmt-click"></span>
				</div>
			</div>
			
			<?php if( $searchCity ) { ?>
				<div class="cmt-location-city-fill col col2 auto-fill auto-fill-basic">
					<div class="form-group">
						<label>City *</label>
						<div class="auto-fill-source" cmt-app="core" cmt-controller="city" cmt-action="autoSearch" action="location/city-search" cmt-keep cmt-custom>
							<div class="relative">
								<div class="auto-fill-search clearfix">
									<div class="frm-icon-element icon-right">
										<span class="icon cmti cmti-search"></span>
										<input target-app="location" class="cmt-key-up auto-fill-text" type="text" name="Address[cityName]" placeholder="Search City" autocomplete="off" />
									</div>
								</div>
								<div class="auto-fill-items-wrap">
									<ul class="auto-fill-items vnav"></ul>
								</div>
							</div>
						</div>
						<div class="auto-fill-target">
							<input class="target" type="hidden" name="Address[cityId]" />
						</div>
						<span class="error" cmt-error="Address[cityName]"></span>
					</div>
				</div>
			<?php } else { ?>
				<div class="col col2">
					<div class="form-group">
						<label>City *</label>
						<input type="text" name="Address[cityName]" placeholder="City *" />
						<span class="error" cmt-error="Address[cityName]"></span>
					</div>
				</div>
			<?php } ?>
			<div class="col col2">
				<div class="form-group">
					<label>Zip Code</label>
					<input type="text" name="Address[zip]" placeholder="Postal Code" />
					<span class="error" cmt-error="Address[zip]"></span>
				</div>
			</div>
			<div class="col col2 ">
				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="Address[phone]" placeholder="Mobile Number" />
					<span class="error" cmt-error="Address[phone]"></span>
				</div>
			</div>
		</div>
		
		<div>
			<input class="cmt-location-latitude" type="hidden" name="Address[latitude]" value="0" />
			<input class="cmt-location-longitude" type="hidden" name="Address[longitude]" value="0" />
			<input class="cmt-location-zoom" type="hidden" name="Address[zoomLevel]" value="6" />
		</div>
	</div>
	<div class="row data-crud-actions">
		<div class="col col1 margin margin-top-small">
			<input class="btn btn-small rounded rounded-small right" type="submit" value="SUBMIT" />
		</div>
	</div>
	<div class="row data-crud-message">
		<div class="col col1 message success"></div>
		<div class="col col1 message warning"></div>
		<div class="col col1 message error"></div>
	</div>
</form>

</script>

<script id="updateAddressTemplate" type="text/x-handlebars-template">

<form class="cmt-location form relative" cmt-app="core" cmt-controller="address" cmt-action="update" action="<?= $apixBase ?>/update-address?id=<?= $model->id ?>&cid={{cid}}">
	<?php include $frmSpinner; ?>
	<div class="data-crud-form">
		<div class="row max-cols-50 padding padding-default">
			<div class="col col2">
				<div class="form-group">
					<label>Title</label>
					<input type="text" name="Address[title]" placeholder="Title" />
					<span class="error" cmt-error="Address[title]"></span>
				</div>
			</div>
			<div class="col col2">
				<div class="form-group">
					<label>Type</label>
					<select name="model-type" class="cmt-address-type cmt-select"><?= $addressTypeOptions ?></select>
				</div>
			</div>
			<div class="col col2">
				<div class="form-group">
					<label>Address 1*</label>
					<input type="text" name="Address[line1]" placeholder="Address 1" />
					<span class="error" cmt-error="Address[line1]"></span>
				</div>
			</div>
			<div class="col col2">
				<div class="form-group">
					<label>Address 2</label>
					<input type="text" name="Address[line2]" placeholder="Address 2" />
					<span class="error" cmt-error="Address[line2]"></span>
				</div>
			</div>
			
			<div class="cmt-location-countries col col2">
				<div class="form-group">
					<label>Country *</label>
					<?= Html::dropDownList( 'Address[countryId]', null, $countryMap, [ 'class' => 'cmt-location-country element-60 cmt-select' ] ) ?>
					<span class="error" cmt-error="Address[countryId]"></span>
				</div>
			</div>
			<div class="cmt-location-provinces col col2" cmt-app="core" cmt-controller="region" cmt-action="optionsList" action="location/region-options" cmt-keep cmt-custom>
				<div class="form-group">
					<label><?= Yii::$app->core->provinceLabel ?> *</label>
					<?= Html::dropDownList( 'Address[provinceId]', null, $provinceMap, [ 'class' => 'cmt-location-province element-60 cmt-select cmt-change' ] ) ?>
					<span class="error" cmt-error="Address[provinceId]"></span>
					<span class="hidden cmt-click"></span>
				</div>
			</div>
			
			<?php if( $searchCity ) { ?>
				<div class="cmt-location-city-fill col col2 auto-fill auto-fill-basic">
					<div class="form-group">
						<label>City *</label>
						<div class="auto-fill-source" cmt-app="core" cmt-controller="city" cmt-action="autoSearch" action="location/city-search" cmt-keep cmt-custom>
							<div class="relative">
								<div class="auto-fill-search clearfix">
									<div class="frm-icon-element icon-right">
										<span class="icon cmti cmti-search"></span>
										<input target-app="location" class="cmt-key-up auto-fill-text" type="text" name="Address[cityName]" placeholder="Search City" autocomplete="off" />
									</div>
								</div>
								<div class="auto-fill-items-wrap">
									<ul class="auto-fill-items vnav"></ul>
								</div>
							</div>
						</div>
						<div class="auto-fill-target">
							<input class="target" type="hidden" name="Address[cityId]" />
						</div>
						<span class="error" cmt-error="Address[cityName]"></span>
					</div>
				</div>
			<?php } else { ?>
				<div class="col col2">
					<div class="form-group">
						<label>City *</label>
						<input type="text" name="Address[cityName]" placeholder="City *" />
						<span class="error" cmt-error="Address[cityName]"></span>
					</div>
				</div>
			<?php } ?>
			<div class="col col2">
				<div class="form-group">
					<label>Zip Code</label>
					<input type="text" name="Address[zip]" placeholder="Postal Code" />
					<span class="error" cmt-error="Address[zip]"></span>
				</div>
			</div>
			<div class="col col2 ">
				<div class="form-group">
					<label>Phone</label>
					<input type="text" name="Address[phone]" placeholder="Mobile Number" />
					<span class="error" cmt-error="Address[phone]"></span>
				</div>
			</div>
		</div>
		
		<div>
			<input class="cmt-location-latitude" type="hidden" name="Address[latitude]" value="0" />
			<input class="cmt-location-longitude" type="hidden" name="Address[longitude]" value="0" />
			<input class="cmt-location-zoom" type="hidden" name="Address[zoomLevel]" value="6" />
		</div>
	</div>
	<div class="row data-crud-actions">
		<div class="col col1 margin margin-top-small">
			<input class="btn btn-small rounded rounded-small right" type="submit" value="Update" />
		</div>
	</div>
	<div class="row data-crud-message">
		<div class="col col1 message success"></div>
		<div class="col col1 message warning"></div>
		<div class="col col1 message error"></div>
	</div>
</form>

</script>

<script id="addressRefreshTemplate" type="text/x-handlebars-template">

<div class="cmt-address-data card-data text text-large-5">
	{{value}}
</div>

</script>
