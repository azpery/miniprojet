<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_778906d2a9f1fdab3a6f8790554643a45cd174243289516bd476b61b3c193c69 extends Twig_Template
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
        $__internal_f6e71a5e4be01a138ffc09b4b3267e4547e72996c3b5beea9c149849907fda4d = $this->env->getExtension("native_profiler");
        $__internal_f6e71a5e4be01a138ffc09b4b3267e4547e72996c3b5beea9c149849907fda4d->enter($__internal_f6e71a5e4be01a138ffc09b4b3267e4547e72996c3b5beea9c149849907fda4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_f6e71a5e4be01a138ffc09b4b3267e4547e72996c3b5beea9c149849907fda4d->leave($__internal_f6e71a5e4be01a138ffc09b4b3267e4547e72996c3b5beea9c149849907fda4d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rest.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child): ?>*/
/*     <?php if (!$child->isRendered()): ?>*/
/*         <?php echo $view['form']->row($child) ?>*/
/*     <?php endif; ?>*/
/* <?php endforeach; ?>*/
/* */
