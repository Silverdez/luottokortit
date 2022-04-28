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
        $cardPayments = new FieldsBuilder('card_infos');

        $cardPayments
            ->setLocation('post_type', '==', 'payment');

        $cardPayments
            ->addTab('general_tab', [
                'label' => 'Card Global Infos'
            ])
            ->addNumber('card_rating', [
                'instructions' => '',
                'required' => 0,
                'min' => '0',
                'max' => '5',
                'step' => '0.5',
                'append' => '/5',
            ])
            ->addLink('card_url', [
                'placeholder' => '',
            ])
            ->addNumber('card_maximum_credit', [
                'instructions' => '',
                'required' => 1,
                'prepend' => '€',
            ])
            ->addNumber('card_annual_fee', [
                'instructions' => '',
                'required' => 1,
                'append' => '€',
            ])
            ->addNumber('card_nominal_interest_rate', [
                'instructions' => '',
                'required' => 1,
                'min' => '0',
                'max' => '100',
                'append' => '%',
            ]);

        $cardPayments
            ->addTab('sub_infos_pro_tab',[
                'label' => "Card Pro Sides"
            ])
            ->addRepeater('card_pro_sides',[
                'label' => 'List of Pro Sides',
                'button_label' => 'Add a pro side',
            ])
            ->addText('pro_side_name',[
                'label' => 'Pro Sides Name',
            ])
            ->endRepeater();

        $cardPayments
            ->addTab('sub_infos_cons_tab',[
                'label' => "Card Cons Sides"
            ])
            ->addRepeater('card_cons_sides',[
                'label' => 'List of Cons Sides',
                'button_label' => 'Add a cons side',
            ])
            ->addText('cons_side_name',[
                'label' => 'Cons Sides Name',
            ])
            ->endRepeater();

        $cardPayments
            ->addTab('sub_infos_additional_tab',[
                'label' => "Card Additional Infos"
            ])
            ->addRepeater('card_additional_info',[
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
                'label' => "Card Standard Infos"
            ])
            ->addRepeater('card_standard_info',[
                'label' => 'List of Standard Information',
                'button_label' => 'Add a standard info',
                'min' => 1,
            ])
            ->addText('standard_info_name',[
                'label' => 'Standard Info Name',
            ])
            ->endRepeater();

        return $cardPayments->build();
    }
}
