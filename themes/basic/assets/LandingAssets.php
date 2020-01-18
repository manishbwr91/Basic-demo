<?php
namespace themes\basic\assets;

/**
 * LandingAssets registers the assets specific to landing page.
 *
 * @since 1.0.0
 */
class LandingAssets extends AssetBundle {

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
		//'styles/main.css',
		'styles/landing.css',
		'styles/breeze-icons-core.min.css',
		'fonts/fontawesome/css/all.min.css',
		'animate/animate.css',
		'animate/animate.min.css',
		'aos-master/dist/aos.css'
    ];

    // Protected --------------

    // Private ----------------

    // Traits ------------------------------------------------------

    // Constructor and Initialisation ------------------------------

	public function init() {

		parent::init();

		$this->js[] = 'scripts/main.js';
		$this->js[] = 'scripts/search.js';
		$this->js[] = 'scripts/sliders.js';
		$this->js[] = 'scripts/popups.js';
//		$this->js[] = 'scripts/vendor/jquery.min.js';
		$this->js[] = 'scripts/vendor/jquery-ui.min.js';
		$this->js[] = 'scripts/vendor/foxslider-core.js';
		$this->js[] = 'scripts/vendor/imagesloaded.pkgd.min.js';
		$this->js[] = 'scripts/vendor/handlebars.min.js';
		$this->js[] = 'scripts/vendor/jquery.mCustomScrollbar.concat.min.js';
		$this->js[] = 'scripts/vendor/nouislider.min.js';
		$this->js[] = 'scripts/vendor/Chart.min.js';
		$this->js[] = 'scripts/vendor/velocity.js';
		$this->js[] = 'aos-master/dist/aos.js';
		$this->js[] = 'smooth-scroll/smooth.js';
	
	}

    // Instance methods --------------------------------------------

    // Yii interfaces ------------------------

    // Yii parent classes --------------------

    // CMG interfaces ------------------------

    // CMG parent classes --------------------

    // LandingAssets -------------------------

}
