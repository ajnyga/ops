<?php
/**
 * @file classes/components/form/context/MastheadForm.inc.php
 *
 * Copyright (c) 2014-2021 Simon Fraser University
 * Copyright (c) 2000-2021 John Willinsky
 * Distributed under the GNU GPL v3. For full terms see the file docs/COPYING.
 *
 * @class MastheadForm
 * @ingroup classes_controllers_form
 *
 * @brief Add OPS-specific fields to the masthead form.
 */
namespace APP\components\forms\context;
use \PKP\components\forms\context\PKPMastheadForm;
use \PKP\components\forms\FieldText;

class MastheadForm extends PKPMastheadForm {

	/**
	 * @copydoc PKPMastheadForm::__construct()
	 */
	public function __construct($action, $locales, $context, $imageUploadUrl) {
		parent::__construct($action, $locales, $context, $imageUploadUrl);

		$this->addField(new FieldText('abbreviation', [
				'label' => __('manager.setup.journalAbbreviation'),
				'isMultilingual' => true,
				'groupId' => 'identity',
				'value' => $context->getData('abbreviation'),
			]))
			->addField(new FieldText('sponsoringOrganization', [
				'label' => __('manager.setup.sponsoringOrganization'),
				'groupId' => 'identity',
				'value' => $context->getData('sponsoringOrganization'),
			]));
	}
}
