<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_e88b3dfbe09fa8dd5e6062f5a22fc6ec5cae605fee3f07e0d0abbaa3c77ae221 extends Twig_Template
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
        $__internal_54cd8ff8cfdf53dcec46fc3bbd270fa947d9c898b0e002867b38e9472996dc36 = $this->env->getExtension("native_profiler");
        $__internal_54cd8ff8cfdf53dcec46fc3bbd270fa947d9c898b0e002867b38e9472996dc36->enter($__internal_54cd8ff8cfdf53dcec46fc3bbd270fa947d9c898b0e002867b38e9472996dc36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_54cd8ff8cfdf53dcec46fc3bbd270fa947d9c898b0e002867b38e9472996dc36->leave($__internal_54cd8ff8cfdf53dcec46fc3bbd270fa947d9c898b0e002867b38e9472996dc36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
