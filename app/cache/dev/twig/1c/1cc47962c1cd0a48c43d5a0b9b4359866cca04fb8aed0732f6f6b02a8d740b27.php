<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_a5ae2adef0a7a79123a073044ee6becd8091ff833c08565b262bd865aeae52be extends Twig_Template
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
        $__internal_92b5540adddf424b07ca96cdd5b994bc2374de2845cb023bc641cfdee07f85c9 = $this->env->getExtension("native_profiler");
        $__internal_92b5540adddf424b07ca96cdd5b994bc2374de2845cb023bc641cfdee07f85c9->enter($__internal_92b5540adddf424b07ca96cdd5b994bc2374de2845cb023bc641cfdee07f85c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_92b5540adddf424b07ca96cdd5b994bc2374de2845cb023bc641cfdee07f85c9->leave($__internal_92b5540adddf424b07ca96cdd5b994bc2374de2845cb023bc641cfdee07f85c9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
