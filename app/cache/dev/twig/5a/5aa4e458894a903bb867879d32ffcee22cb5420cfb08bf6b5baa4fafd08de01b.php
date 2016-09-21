<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_b26ba01b967a8a31fd68f6060e70a56e9cb5ade94929ed959acbab5bfadd546d extends Twig_Template
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
        $__internal_a515f63e51b6c9f942d8bcfdc05446e62b1186038acdb50d9e241a80b7ef85c9 = $this->env->getExtension("native_profiler");
        $__internal_a515f63e51b6c9f942d8bcfdc05446e62b1186038acdb50d9e241a80b7ef85c9->enter($__internal_a515f63e51b6c9f942d8bcfdc05446e62b1186038acdb50d9e241a80b7ef85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_a515f63e51b6c9f942d8bcfdc05446e62b1186038acdb50d9e241a80b7ef85c9->leave($__internal_a515f63e51b6c9f942d8bcfdc05446e62b1186038acdb50d9e241a80b7ef85c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
