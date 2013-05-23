<?php

/*
 * This file is part of the RzCodemirrorBundle package.
 *
 * (c) mell m. zamora <mell@rzproject.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Rz\CodemirrorBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\Form\FormView;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CodemirrorType extends AbstractType
{

    /**
     * {@inheritdoc}
     */
    public function finishView(FormView $view, FormInterface $form, array $options)
    {
        $view->vars['mode'] = $options['mode'];
        $view->vars['indent_unit'] = $options['indent_unit'];
        $view->vars['smart_indent'] = $options['smart_indent'];
        $view->vars['tab_size'] = $options['tab_size'];
        $view->vars['indent_with_tabs'] = $options['indent_with_tabs'];
        $view->vars['auto_clear_empty_lines'] = $options['auto_clear_empty_lines'];
        $view->vars['line_wrapping'] = $options['line_wrapping'];
        $view->vars['first_line_number'] = $options['first_line_number'];
        $view->vars['line_numbers'] = $options['line_numbers'];
        $view->vars['line_number_formatter'] = $options['line_number_formatter'];
        $view->vars['gutter'] = $options['gutter'];
        $view->vars['fixed_gutter'] = $options['fixed_gutter'];
        $view->vars['fixed_gutter'] = $options['fixed_gutter'];
        $view->vars['read_only'] = $options['read_only'];
        $view->vars['match_brackets'] = $options['match_brackets'];
        $view->vars['autofocus'] = $options['autofocus'];
        $view->vars['theme'] = $options['theme'];
        $view->vars['show_cursor_when_selecting'] = $options['show_cursor_when_selecting'];
        parent::finishView($view, $form, $options);
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'mode'                  => 'htmlmixed',
            'indent_unit'           => 2,
            'smart_indent'          => false,
            'tab_size'              => 4,
            'indent_with_tabs'      => false,
            'auto_clear_empty_lines'=> true,
            'line_wrapping'         => false,
            'first_line_number'     => 1,
            'line_numbers'          => true,
            'line_number_formatter' => null,
            'gutter'                => false,
            'read_only'             => false,
            'fixed_gutter'          => true,
            'match_brackets'        => true,
            'autofocus'             => null,
            'theme'					=> 'rubyblue',
            'show_cursor_when_selecting' => true,
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getParent()
    {
        return 'textarea';
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'rz_codemirror';
    }

}
