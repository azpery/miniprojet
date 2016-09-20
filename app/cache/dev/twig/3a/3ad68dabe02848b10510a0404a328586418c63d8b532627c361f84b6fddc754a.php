<?php

/* @Framework/Form/form_widget_compound.html.php */
class __TwigTemplate_92e1379992ff0c3b44c339f2907f69d8586b9a1497ac05ca700c23777d7456ae extends Twig_Template
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
        $__internal_9c41c4ad001fe40305083aae11e90b74f163e0e5c91d5397ab94031eaa557fb8 = $this->env->getExtension("native_profiler");
        $__internal_9c41c4ad001fe40305083aae11e90b74f163e0e5c91d5397ab94031eaa557fb8->enter($__internal_9c41c4ad001fe40305083aae11e90b74f163e0e5c91d5397ab94031eaa557fb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_compound.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
    <?php if (!\$form->parent && \$errors): ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php endif ?>
    <?php echo \$view['form']->block(\$form, 'form_rows') ?>
    <?php echo \$view['form']->rest(\$form) ?>
</div>
";
        
        $__internal_9c41c4ad001fe40305083aae11e90b74f163e0e5c91d5397ab94031eaa557fb8->leave($__internal_9c41c4ad001fe40305083aae11e90b74f163e0e5c91d5397ab94031eaa557fb8_prof);

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
