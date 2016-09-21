<?php

/* @Framework/FormTable/form_widget_compound.html.php */
class __TwigTemplate_0462fb23a6618d64b52fbff60f02c068c61dfbfac3c215bda025e2cdd1329a33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_22eaafa7f9386c802af005063693e3f23e617b9ee03719659393934ad1151c0e = $this->env->getExtension("native_profiler");
        $__internal_22eaafa7f9386c802af005063693e3f23e617b9ee03719659393934ad1151c0e->enter($__internal_22eaafa7f9386c802af005063693e3f23e617b9ee03719659393934ad1151c0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_widget_compound.html.php"));

        // line 1
        echo "<table <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <tr>
        <td colspan=\"2\">
            <?php echo \$view['form']->errors(\$form) ?>
        </td>
    </tr>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</table>
";
        
        $__internal_22eaafa7f9386c802af005063693e3f23e617b9ee03719659393934ad1151c0e->leave($__internal_22eaafa7f9386c802af005063693e3f23e617b9ee03719659393934ad1151c0e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <table <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <tr>*/
/*         <td colspan="2">*/
/*             <?php echo $view['form']->errors($form) ?>*/
/*         </td>*/
/*     </tr>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </table>*/
/* */
