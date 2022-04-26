<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Testimonial extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $testimonial = new FieldsBuilder('testimonial');

        $testimonial
            ->setLocation('post_type', '==', 'post');

        $testimonial
            ->addRepeater('items')
                ->addText('item')
            ->endRepeater();

        return $testimonial->build();
    }
}
