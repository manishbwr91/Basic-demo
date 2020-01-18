<?php
namespace themes\basic\assets;

/**
 * PublicAssets registers the assets specific to public pages.
 *
 * @since 1.0.0
 */
class PublicAssets extends AssetBundle {

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
		'styles/public.css',
		'styles/breeze-icons-core.min.css',
		'styles/breeze-icons-core.min.css',
		'fonts/fontawesome/css/all.min.css'
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
		$this->js[] = 'scripts/vendor/jquery.min.js';
		$this->js[] = 'scripts/vendor/jquery-ui.min.js';
		$this->js[] = 'scripts/vendor/foxslider-core.js';
		$this->js[] = 'scripts/vendor/imagesloaded.pkgd.min.js';
		$this->js[] = 'scripts/vendor/handlebars.min.js';
		$this->js[] = 'scripts/vendor/jquery.mCustomScrollbar.concat.min.js';
		$this->js[] = 'scripts/vendor/nouislider.min.js';
		$this->js[] = 'scripts/vendor/Chart.min.js';
		$this->js[] = 'scripts/vendor/velocity.js';

		$this->depends[] = 'cmsgears\assets\components\DateTimeAssets';
	}

    // Instance methods --------------------------------------------

    // Yii interfaces ------------------------

    // Yii parent classes --------------------

    // CMG interfaces ------------------------

    // CMG parent classes --------------------

    // PublicAssets --------------------------

}
