<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_1e1555455ee6aa33b632165f704828e3e2dc0992808d12af23425a9082ce8881 extends Twig_Template
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
        $__internal_9c8c7158c96d49077b9658ce9537e322e080b5f675a1af33b9d836a1017ab371 = $this->env->getExtension("native_profiler");
        $__internal_9c8c7158c96d49077b9658ce9537e322e080b5f675a1af33b9d836a1017ab371->enter($__internal_9c8c7158c96d49077b9658ce9537e322e080b5f675a1af33b9d836a1017ab371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_9c8c7158c96d49077b9658ce9537e322e080b5f675a1af33b9d836a1017ab371->leave($__internal_9c8c7158c96d49077b9658ce9537e322e080b5f675a1af33b9d836a1017ab371_prof);

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
