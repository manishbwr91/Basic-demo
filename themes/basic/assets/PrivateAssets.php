<?php
namespace themes\basic\assets;

/**
 * PrivateAssets registers the assets specific to private pages.
 *
 * @since 1.0.0
 */
class PrivateAssets extends AssetBundle {

	// Variables ---------------------------------------------------

	// Globals -------------------------------

	// Constants --------------

	// Public -----------------

	// Protected --------------

	// Variables -----------------------------

	// Public -----------------

	/**
	 * @inheritdoc
	 */
    public $css = [
		'styles/private.css',
		'styles/breeze-icons-core.min.css',
		'fonts/fontawesome/css/all.min.css',
//		'fullcalendar-4.3.1/packages/core/main.css',
//		'fullcalendar-4.3.1/packages/daygrid/main.css',
//		'fullcalendar-4.3.1/packages/timegrid/main.css',
//		'fullcalendar-4.3.1/packages/list/main.css',
    ];

    // Protected --------------

    // Private ----------------

    // Traits ------------------------------------------------------

    // Constructor and Initialisation ------------------------------

	public function init() {

		parent::init();
		
		$this->js[] = 'scripts/templates/private.js';

		$this->js[] = 'scripts/apix/private.js';

		$this->js[] = 'scripts/apps/private.js';

		$this->js[] = 'scripts/apps/core/services/user.js';
		$this->js[] = 'scripts/apps/core/controllers/main.js';
		$this->js[] = 'scripts/apps/core/controllers/user.js';

		$this->js[] = 'scripts/main.js';
		$this->js[] = 'scripts/search.js';
		$this->js[] = 'scripts/sliders.js';
		$this->js[] = 'scripts/popups.js';
//		$this->js[] = 'scripts/fullcalender.js';
//		$this->js[] = 'scripts/vendor/jquery.min.js';
//		$this->js[] = 'scripts/vendor/jquery-ui.min.js';
//		$this->js[] = 'scripts/vendor/foxslider-core.js';
		$this->js[] = 'scripts/vendor/imagesloaded.pkgd.min.js';
		$this->js[] = 'scripts/vendor/handlebars.min.js';
		$this->js[] = 'scripts/vendor/jquery.mCustomScrollbar.concat.min.js';
		$this->js[] = 'scripts/vendor/jquery.mCustomScrollbar.concat.min.js';
		$this->js[] = 'scripts/vendor/nouislider.min.js';
		$this->js[] = 'scripts/vendor/Chart.min.js';
		$this->js[] = 'scripts/vendor/Chart.min.js';
		$this->js[] = 'scripts/vendor/velocity.js';
		$this->js[] = 'fullcalendar-4.3.1/packages/core/main.js';
		$this->js[] = 'fullcalendar-4.3.1/packages/daygrid/main.js';
		$this->js[] = 'fullcalendar-4.3.1/packages/timegrid/main.js';
		$this->js[] = 'fullcalendar-4.3.1/packages/interaction/main.js';
		$this->js[] = 'fullcalendar-4.3.1/packages/list/main.js';
		$this->js[] = 'fullcalendar-4.3.1/packages/rrule/main.js';
		$this->js[] = 'fullcalendar-4.3.1/vendor/rrule.js';
		$this->js[] = 'aos-master/dist/aos.js';

		$this->depends[] = 'cmsgears\assets\components\DateTimeAssets';
		$this->depends[] = 'cmsgears\assets\components\FullCalendarAssets';

		$this->depends[] = 'cmsgears\assets\vapps\CoreAssets';
	}

    // Instance methods --------------------------------------------

    // Yii interfaces ------------------------

    // Yii parent classes --------------------

    // CMG interfaces ------------------------

    // CMG parent classes --------------------

    // PrivateAssets -------------------------

}
