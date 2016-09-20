<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_c8f401a78f2f5653ceaf63d71348b5d44a6b74689ed26623f9e87fd3c0a67d48 extends Twig_Template
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
        $__internal_a0b249ba1239a360c432b8dbea42790197a04b9a51e03a551408e2256bb6543b = $this->env->getExtension("native_profiler");
        $__internal_a0b249ba1239a360c432b8dbea42790197a04b9a51e03a551408e2256bb6543b->enter($__internal_a0b249ba1239a360c432b8dbea42790197a04b9a51e03a551408e2256bb6543b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_a0b249ba1239a360c432b8dbea42790197a04b9a51e03a551408e2256bb6543b->leave($__internal_a0b249ba1239a360c432b8dbea42790197a04b9a51e03a551408e2256bb6543b_prof);

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
