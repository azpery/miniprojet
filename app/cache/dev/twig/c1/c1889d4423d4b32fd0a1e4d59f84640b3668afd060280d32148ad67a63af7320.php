<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_7d40bce4389949cf5738aaeccfaa5ff8c3bb43820e7217cb7eebc6017f1e2035 extends Twig_Template
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
        $__internal_9e44b5d75d2226f69e4cc547a1ba144495bc37a26def804de7b170ff70dbe48c = $this->env->getExtension("native_profiler");
        $__internal_9e44b5d75d2226f69e4cc547a1ba144495bc37a26def804de7b170ff70dbe48c->enter($__internal_9e44b5d75d2226f69e4cc547a1ba144495bc37a26def804de7b170ff70dbe48c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9e44b5d75d2226f69e4cc547a1ba144495bc37a26def804de7b170ff70dbe48c->leave($__internal_9e44b5d75d2226f69e4cc547a1ba144495bc37a26def804de7b170ff70dbe48c_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_compound.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*     <?php if (!$form->parent && $errors): ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php endif ?>*/
/*     <?php echo $view['form']->block($form, 'form_rows') ?>*/
/*     <?php echo $view['form']->rest($form) ?>*/
/* </div>*/
/* */
