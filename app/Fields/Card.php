<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Card extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $cardPayments = new FieldsBuilder('payment_infos');

        $cardPayments
            ->setLocation('post_type', '==', 'payment');

        $cardPayments
            ->addTab('general_tab', [
                'label' => 'Payment Global Infos'
            ])
            ->addNumber('payment_rating', [
                'instructions' => '',
                'required' => 0,
                'min' => '0',
                'max' => '5',
                'step' => '0.5',
            ])
            ->addUrl('payment_url', [
                'default_value' => '',
                'placeholder' => '',
            ])
            ->addNumber('payment_maximum_credit', [
                'instructions' => '',
                'required' => 1,
            ])
            ->addNumber('payment_annual_fee', [
                'instructions' => '',
                'required' => 1,
            ])
            ->addNumber('payment_nominal_interest_rate', [
                'instructions' => '',
                'required' => 1,
                'min' => '0',
                'max' => '100',
            ]);

        $cardPayments
            ->addTab('sub_infos_pro_tab',[
                'label' => "Payment Sub Infos Pro Sides"
            ])
            ->addRepeater('payment_pro_sides',[
                'label' => 'List of Pro Sides',
                'button_label' => 'Add a pro side',
                'min' => 1,
            ])
            ->addText('pro_side_name',[
                'label' => 'Pro Sides Name',
            ])
            ->endRepeater();

        $cardPayments
            ->addTab('sub_infos_cons_tab',[
                'label' => "Payment Sub Infos Cons Sides"
            ])
            ->addRepeater('payment_cons_sides',[
                'label' => 'List of Cons Sides',
                'button_label' => 'Add a cons side',
            ])
            ->addText('cons_side_name',[
                'label' => 'Cons Sides Name',
            ])
            ->endRepeater();

        $cardPayments
            ->addTab('sub_infos_additional_tab',[
                'label' => "Payment Sub Additional Infos"
            ])
            ->addRepeater('payment_additional_info',[
                'label' => 'List of Additional Information',
                'button_label' => 'Add an additional info',
                'min' => 1,
            ])
            ->addText('additional_info_name',[
                'label' => 'Additional Info Name',
            ])
            ->addText('additional_info_value',[
                'label' => 'Additional Info Value',
            ])
            ->endRepeater();

        $cardPayments
            ->addTab('sub_infos_standard_tab',[
                'label' => "Payment Sub Infos Standard"
            ])
            ->addRepeater('payment_standard_info',[
                'label' => 'List of Standard Information',
                'button_label' => 'Add a standard info',
                'min' => 1,
            ])
            ->addText('good_side_name',[
                'label' => 'Standard Info Name',
            ])
            ->endRepeater();

        return $cardPayments->build();
    }
}
