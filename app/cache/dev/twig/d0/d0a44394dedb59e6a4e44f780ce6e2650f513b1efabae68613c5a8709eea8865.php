<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_819e397dcf44cd2fdf9473d0dc441418ec8b9ecbac2db93085bfed78ddafd556 extends Twig_Template
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
        $__internal_12868555bce7253a18c0fd73d4e3ae05dddf5f88cb13f5f20f8923f1ec041dfa = $this->env->getExtension("native_profiler");
        $__internal_12868555bce7253a18c0fd73d4e3ae05dddf5f88cb13f5f20f8923f1ec041dfa->enter($__internal_12868555bce7253a18c0fd73d4e3ae05dddf5f88cb13f5f20f8923f1ec041dfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_12868555bce7253a18c0fd73d4e3ae05dddf5f88cb13f5f20f8923f1ec041dfa->leave($__internal_12868555bce7253a18c0fd73d4e3ae05dddf5f88cb13f5f20f8923f1ec041dfa_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
