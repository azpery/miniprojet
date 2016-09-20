<?php

/* @Framework/Form/choice_widget_expanded.html.php */
class __TwigTemplate_5bc252c6c8efd4bfb14df1647408f0fe3a4b8e6c3ebca5181e76689238260e97 extends Twig_Template
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
        $__internal_721e097970e0b63ff036cbd7aa0d78a98a4eca10b9fdaeb7efc3fda9ab1790d4 = $this->env->getExtension("native_profiler");
        $__internal_721e097970e0b63ff036cbd7aa0d78a98a4eca10b9fdaeb7efc3fda9ab1790d4->enter($__internal_721e097970e0b63ff036cbd7aa0d78a98a4eca10b9fdaeb7efc3fda9ab1790d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget_expanded.html.php"));

        // line 1
        echo "<div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
<?php foreach (\$form as \$child): ?>
    <?php echo \$view['form']->widget(\$child) ?>
    <?php echo \$view['form']->label(\$child, null, array('translation_domain' => \$choice_translation_domain)) ?>
<?php endforeach ?>
</div>
";
        
        $__internal_721e097970e0b63ff036cbd7aa0d78a98a4eca10b9fdaeb7efc3fda9ab1790d4->leave($__internal_721e097970e0b63ff036cbd7aa0d78a98a4eca10b9fdaeb7efc3fda9ab1790d4_prof);

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
