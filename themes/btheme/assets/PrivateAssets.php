<?php
namespace themes\btheme\assets;

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
		'styles/private.css'
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
