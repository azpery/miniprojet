<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_af425b1ea48346b124625a5cba71e0753b361ec5e8e76e7179db8a30ef493afb extends Twig_Template
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
        $__internal_f003917deeba241396f9617f7c5538e46bce94f5d5b6e844692f951f94e84841 = $this->env->getExtension("native_profiler");
        $__internal_f003917deeba241396f9617f7c5538e46bce94f5d5b6e844692f951f94e84841->enter($__internal_f003917deeba241396f9617f7c5538e46bce94f5d5b6e844692f951f94e84841_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_f003917deeba241396f9617f7c5538e46bce94f5d5b6e844692f951f94e84841->leave($__internal_f003917deeba241396f9617f7c5538e46bce94f5d5b6e844692f951f94e84841_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
