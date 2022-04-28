<?php

namespace App\Options;

use Log1x\AcfComposer\Options as Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

//class Payments extends Field
//{
//    /**
//     * The option page menu name.
//     *
//     * @var string
//     */
//    public $name = 'Payments';
//
//    /**
//     * The option page menu slug.
//     *
//     * @var string
//     */
//    public $slug = 'payments';
//
//    /**
//     * The option page document title.
//     *
//     * @var string
//     */
//    public $title = 'Payments | Options';
//
//    /**
//     * The option page permission capability.
//     *
//     * @var string
//     */
//    public $capability = 'edit_theme_options';
//
//    /**
//     * The option page menu position.
//     *
//     * @var int
//     */
//    public $position = PHP_INT_MAX;
//
//    /**
//     * The slug of another admin page to be used as a parent.
//     *
//     * @var string
//     */
//    public $parent = null;
//
//    /**
//     * The option page menu icon.
//     *
//     * @var string
//     */
//    public $icon = null;
//
//    /**
//     * Redirect to the first child page if one exists.
//     *
//     * @var boolean
//     */
//    public $redirect = true;
//
//    /**
//     * The post ID to save and load values from.
//     *
//     * @var string|int
//     */
//    public $post = 'options';
//
//    /**
//     * The option page autoload setting.
//     *
//     * @var bool
//     */
//    public $autoload = true;
//
//    /**
//     * Localized text displayed on the submit button.
//     *
//     * @return string
//     */
//    public function updateButton()
//    {
//        return __('Update', 'acf');
//    }
//
//    /**
//     * Localized text displayed after form submission.
//     *
//     * @return string
//     */
//    public function updatedMessage()
//    {
//        return __('Payments Updated', 'acf');
//    }
//
//    /**
//     * The option page field group.
//     *
//     * @return array
//     */
//    public function fields()
//    {
//        $payments = new FieldsBuilder('payments');
//
//        $payments
//            ->addRepeater('payments')
//                ->addText('payment_name')
//                ->addImage('payment_image', [
//                    'return_format' => 'array',
//                    'preview_size' => 'thumbnail',
//                    'library' => 'all',
//                    'min_width' => '',
//                    'min_height' => '',
//                    'min_size' => '',
//                    'max_width' => '',
//                    'max_height' => '',
//                    'max_size' => '',
//                    'mime_types' => '',
//                ])
//                ->addNumber('payment_rating', [
//                    'instructions' => '',
//                    'required' => 0,
//                    'min' => '0',
//                    'max' => '5',
//                    'step' => '0.5',
//                ])
//                ->addUrl('payment_url', [
//                    'default_value' => '',
//                    'placeholder' => '',
//                ])
//                ->addRepeater('payment_good_sides')
//                    ->addText('good_side_name')
//                ->endRepeater()
//            ->endRepeater();
//
//        return $payments->build();
//    }
//}
