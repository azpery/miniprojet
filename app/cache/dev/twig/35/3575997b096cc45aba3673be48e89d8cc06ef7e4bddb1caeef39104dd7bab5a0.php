<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_d1dc0852857538f79141f806deb9e8aa282ef0b8f39edaaf8ca0e60b6868173c extends Twig_Template
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
        $__internal_8fe6b85909a33927e7f290d1188ee6822722e23b3f8f8d10ff5cb42d6226b32e = $this->env->getExtension("native_profiler");
        $__internal_8fe6b85909a33927e7f290d1188ee6822722e23b3f8f8d10ff5cb42d6226b32e->enter($__internal_8fe6b85909a33927e7f290d1188ee6822722e23b3f8f8d10ff5cb42d6226b32e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_8fe6b85909a33927e7f290d1188ee6822722e23b3f8f8d10ff5cb42d6226b32e->leave($__internal_8fe6b85909a33927e7f290d1188ee6822722e23b3f8f8d10ff5cb42d6226b32e_prof);

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
