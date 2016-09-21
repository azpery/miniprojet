<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_96a07023ac10a6a09473991ae2c54d85e51adabd74b45ed3ab623b80bea8575a extends Twig_Template
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
        $__internal_485be288ea5d9d0d9c9c765d7c19d3b242eb99e20a0f0b36420b0b1bf2e8c860 = $this->env->getExtension("native_profiler");
        $__internal_485be288ea5d9d0d9c9c765d7c19d3b242eb99e20a0f0b36420b0b1bf2e8c860->enter($__internal_485be288ea5d9d0d9c9c765d7c19d3b242eb99e20a0f0b36420b0b1bf2e8c860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_485be288ea5d9d0d9c9c765d7c19d3b242eb99e20a0f0b36420b0b1bf2e8c860->leave($__internal_485be288ea5d9d0d9c9c765d7c19d3b242eb99e20a0f0b36420b0b1bf2e8c860_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
