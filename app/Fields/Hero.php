<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Hero extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $hero = new FieldsBuilder('hero');

        $hero
            ->setLocation('page_type', '==', 'front_page');

        $hero
            ->addTab('general_tab', [
                'label' => 'Général'
            ])
            ->addText('title', [
                'label' => 'Hero Title',
                'instructions' => 'H1 Title of the hero',
                'required' => 1,
            ])
            ->addTextarea('hero_description', [
                'label' => 'Hero Description',
                'instructions' => 'Description inside the hero section',
                'required' => 0,
            ])
            ->addLink('hero_link_url',[
                'label' => 'Hero Link Url'
            ])
            ->addImage('hero_image', [
                'label' => 'Hero Image',
            ]);

        return $hero->build();
    }
}
