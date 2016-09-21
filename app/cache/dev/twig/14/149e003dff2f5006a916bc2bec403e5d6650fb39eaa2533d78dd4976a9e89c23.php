<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_8c1b8ba0a12f5e141ee40991c2cdd53b5e896be97da065dbcb4b9de25c3a6ef3 extends Twig_Template
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
        $__internal_70ff82142395d77c2695fc3e5fff4b4cd77c8530882515c73f54388f08b86ff6 = $this->env->getExtension("native_profiler");
        $__internal_70ff82142395d77c2695fc3e5fff4b4cd77c8530882515c73f54388f08b86ff6->enter($__internal_70ff82142395d77c2695fc3e5fff4b4cd77c8530882515c73f54388f08b86ff6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_70ff82142395d77c2695fc3e5fff4b4cd77c8530882515c73f54388f08b86ff6->leave($__internal_70ff82142395d77c2695fc3e5fff4b4cd77c8530882515c73f54388f08b86ff6_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget_expanded.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/* <?php foreach ($form as $child): ?>*/
/*     <?php echo $view['form']->widget($child) ?>*/
/*     <?php echo $view['form']->label($child, null, array('translation_domain' => $choice_translation_domain)) ?>*/
/* <?php endforeach ?>*/
/* </div>*/
/* */
