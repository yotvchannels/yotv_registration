<?php
namespace App\Forms;

use Nette;
use Nette\Forms\Controls;
use Nette\Utils\Html;


class FormFactory extends Nette\Object
{


	/**
	 * @return CSMSForm
	 */
	public function create()
	{
		$form = new CSMSForm;
		return $form;
	}


	/**
	 * @return Nette\Application\UI\Form
	 */
	public function createPlain()
	{
		$form = new Nette\Application\UI\Form;
		return $form;
	}

	/*public function createModal()
	{
		$form = new CSMSFormModal;
		$form->setTranslator($this->translator);
		return $form;
	}*/

}


class CSMSForm extends Nette\Application\UI\Form
{

	private $dummy_counter = 0;


	public function getControls()
	{
		if ($this->dummy_counter === 0) {
			$this->getElementPrototype()->class('form-horizontal');
			$renderer = $this->getRenderer();
			$renderer->wrappers['controls']['container'] = NULL;
			$renderer->wrappers["form"]["container"] = Html::el("div")->class("content");
			$renderer->wrappers['pair']['container'] = 'div class="form-group"';
			$renderer->wrappers['pair']['.error'] = 'has-error';
			$renderer->wrappers['control']['container'] = 'div class=col-sm-5';
			$renderer->wrappers['label']['container'] = 'div class="col-sm-2 control-label"';
			$renderer->wrappers["label"]["suffix"] = ": ";
			foreach (parent::getControls() as $control) {
				if ($control instanceof Controls\Button) {
					$control->getControlPrototype()->addClass('btn btn-default');
				}
				if ($control instanceof Controls\TextBase || $control instanceof Controls\SelectBox || $control instanceof Controls\MultiSelectBox) {
					$control->getControlPrototype()->addClass('form-control');
				}
				if ($control instanceof Controls\Checkbox || $control instanceof Controls\RadioList) {
					$control->getSeparatorPrototype()->setName('div')->addClass($control->getControlPrototype()->type);//->addStyle("display", "inline");
				}
			}
			$this->setRenderer($renderer);
		}
		$this->dummy_counter += 1;
		return parent::getControls();
	}
}

