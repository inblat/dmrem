<?php

namespace App\Http\Sections;

use SleepingOwl\Admin\Contracts\DisplayInterface;
use SleepingOwl\Admin\Contracts\FormInterface;
use SleepingOwl\Admin\Contracts\Initializable;
use SleepingOwl\Admin\Section;
use SleepingOwl\Admin\Facades\DisplayFilter;
use SleepingOwl\Admin\Facades\TableColumnFilter;
use SleepingOwl\Admin\Facades\Display;
use SleepingOwl\Admin\Facades\Form;
use SleepingOwl\Admin\Facades\TableColumn;
use SleepingOwl\Admin\Facades\FormElement;
use Illuminate\Support\Facades\Auth;
use App\User;


/**
 * Class Users
 *
 * @property \App\User $model
 *
 * @see http://sleepingowladmin.ru/docs/model_configuration_section
 */
class Users extends Section
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
    protected $title = 'Пользователи';

    protected $alias;
    /**
     * @return DisplayInterface
     */
    public function onDisplay()
    {
        $display= Display::table()->setHtmlAttribute('class', 'table-primary');

        $display->setColumns([
            TableColumn::text('name', 'Username'),
            TableColumn::text('email', 'Email')->setWidth('150px'),
        ])->paginate(20);
        return $display;
    }

    /**
     * @param int $id
     *
     * @return FormInterface
     */
    public function onEdit($id)
    {
        return Form::panel()->addBody([
            FormElement::text('name', 'Username')->required(),
            FormElement::text('email', 'Email')->required(),
            FormElement::password('password', 'Password')->required()->addValidationRule('min:3'),

        ]);
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
