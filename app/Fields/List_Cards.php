<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class List_Cards extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $listCards = new FieldsBuilder('ranking_cards');

        $listCards
            ->setLocation('post_type', '==', 'page');

        $listCards
            ->addRelationship('ranking_card_payment', [
                'label' => 'List cards to chose',
                'instructions' => 'you can select and rearrange the list',
                'required' => 0,
                'conditional_logic' => [],
                'post_type' => ['payment'],
                'filters' => [
                    0 => 'search',
                ],
                'return_format' => 'object',
            ]);

        return $listCards->build();
    }
}
