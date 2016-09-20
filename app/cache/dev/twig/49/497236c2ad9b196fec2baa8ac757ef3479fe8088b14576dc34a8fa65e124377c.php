<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_c3816fd6cdfc668c8c921692a782a75315c50d9f99c584fa85034eca3db8eae9 extends Twig_Template
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
        $__internal_97ba029305dcaca7164046f9db98eaee4702239abc45aa5f093a6126aceaeb42 = $this->env->getExtension("native_profiler");
        $__internal_97ba029305dcaca7164046f9db98eaee4702239abc45aa5f093a6126aceaeb42->enter($__internal_97ba029305dcaca7164046f9db98eaee4702239abc45aa5f093a6126aceaeb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_97ba029305dcaca7164046f9db98eaee4702239abc45aa5f093a6126aceaeb42->leave($__internal_97ba029305dcaca7164046f9db98eaee4702239abc45aa5f093a6126aceaeb42_prof);

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
