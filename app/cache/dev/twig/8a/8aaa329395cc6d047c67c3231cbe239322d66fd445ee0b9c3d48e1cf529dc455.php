<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_9d0fcd42dff15b9da56b65a45db014226ef32f61d6e80bef01eff210fa9f21ea extends Twig_Template
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
        $__internal_73b1f5b2590fc28c8466c47098eb932b8298c4b4037fb2ab974886b682ff3884 = $this->env->getExtension("native_profiler");
        $__internal_73b1f5b2590fc28c8466c47098eb932b8298c4b4037fb2ab974886b682ff3884->enter($__internal_73b1f5b2590fc28c8466c47098eb932b8298c4b4037fb2ab974886b682ff3884_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_73b1f5b2590fc28c8466c47098eb932b8298c4b4037fb2ab974886b682ff3884->leave($__internal_73b1f5b2590fc28c8466c47098eb932b8298c4b4037fb2ab974886b682ff3884_prof);

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
