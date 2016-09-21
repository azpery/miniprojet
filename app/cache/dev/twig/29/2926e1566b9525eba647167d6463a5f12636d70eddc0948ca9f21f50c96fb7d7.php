<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a10f479b326383bf7a5fb3198ba810bebc378cd422ab231f4b3abcc819bd108f extends Twig_Template
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
        $__internal_b821c5baec715da2129a838b271ebed00e0ea5987813dfb3b916a8d7dd7c53b9 = $this->env->getExtension("native_profiler");
        $__internal_b821c5baec715da2129a838b271ebed00e0ea5987813dfb3b916a8d7dd7c53b9->enter($__internal_b821c5baec715da2129a838b271ebed00e0ea5987813dfb3b916a8d7dd7c53b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_b821c5baec715da2129a838b271ebed00e0ea5987813dfb3b916a8d7dd7c53b9->leave($__internal_b821c5baec715da2129a838b271ebed00e0ea5987813dfb3b916a8d7dd7c53b9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
