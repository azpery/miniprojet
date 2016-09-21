<?php

/* @Framework/Form/form_rest.html.php */
class __TwigTemplate_459b0b9103a797dca486c0db7d9dea4be327a981c7ca2b2907f9aec8d50de51e extends Twig_Template
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
        $__internal_c6b91379287dd25414da2738064f4734168d7fae245689b8060e7b9943068c60 = $this->env->getExtension("native_profiler");
        $__internal_c6b91379287dd25414da2738064f4734168d7fae245689b8060e7b9943068c60->enter($__internal_c6b91379287dd25414da2738064f4734168d7fae245689b8060e7b9943068c60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rest.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child): ?>
    <?php if (!\$child->isRendered()): ?>
        <?php echo \$view['form']->row(\$child) ?>
    <?php endif; ?>
<?php endforeach; ?>
";
        
        $__internal_c6b91379287dd25414da2738064f4734168d7fae245689b8060e7b9943068c60->leave($__internal_c6b91379287dd25414da2738064f4734168d7fae245689b8060e7b9943068c60_prof);

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
