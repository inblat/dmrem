<?php

namespace App\Http\Admin;

use SleepingOwl\Admin\Contracts\DisplayInterface;
use SleepingOwl\Admin\Contracts\FormInterface;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Facades\Display;
use SleepingOwl\Admin\Facades\Form;
use SleepingOwl\Admin\Facades\TableColumn;
use SleepingOwl\Admin\Facades\FormElement;
use Illuminate\Validation\Rule;
use App\Admin\Buttons\ShowFormButtons;


/**
 * Class Users
 *
 * @property \App\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Pages extends Section
{
    /**
     * @see http://sleepingowladmin.ru/docs/model_configuration#ограничение-прав-доступа
     *
     * @var bool
     */
    protected $checkAccess = false;

    /**
     * @var string
     */
    protected $title = 'Страницы сайта';

    protected $alias;

    public $columns=[];
    public $formElements=[];
    public $formElementsSEO=[];

    public function __construct(\Illuminate\Contracts\Foundation\Application $app, $class)
    {
        parent::__construct($app, $class);

        $this->columns=[
            TableColumn::text('name', 'Название'),
            TableColumn::text('slug', 'slug')->setWidth('150px'),
        ];

        $this->formElements=[
            FormElement::text('name', 'Название')->required(),
            FormElement::text('slug', 'slug')->required(),
        ];
        $this->formElementsSEO=[
            FormElement::text('page_title', 'page_title'),
            FormElement::text('keywords', 'keywords'),
            FormElement::textarea('description', 'description'),
            FormElement::wysiwyg('seo_text', 'seoText')->required(),
        ];
    }

    public function onDisplay()
    {
        $display= Display::table()->setHtmlAttribute('class', 'table-primary');
        $display->setColumns($this->columns)->paginate(20);
        return $display;
    }

    public function onEdit($id)
    {
        $this->formElements=[
            FormElement::text('name', 'Название')->required(),
            FormElement::text('slug', 'slug')->addValidationRule(Rule::unique('pages','slug')->ignore($id,"id")),
            FormElement::images('images', 'images'),
            FormElement::textarea('intro_text', 'introText'),
        ];

        $tabes['Основные'] = new \SleepingOwl\Admin\Form\FormElements ($this->formElements);
        $tabes['СЕО'] = new \SleepingOwl\Admin\Form\FormElements ($this->formElementsSEO);

        $form = Form::panel();
        $tabs = Display::tabbed($tabes);
        $form->addElement($tabs);

        return $form;
    }

    /**
     * @return FormInterface
     */
    public function onCreate()
    {
        return $this->onEdit(null);
    }

    /**
     * @return void
     */
    public function onDelete($id)
    {
        // todo: remove if unused
    }

    /**
     * @return void
     */
    public function onRestore($id)
    {
        // todo: remove if unused
    }
}
