<?php

/* @Framework/Form/form_rows.html.php */
class __TwigTemplate_6686bd9d93544b6d91999e2558f76ace7e5a4c3f166fd08b2c800005203cef54 extends Twig_Template
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
        $__internal_d973fb2a7e4dc5cba71802187b3682d9cb7aed8168bf9cc3f9db77bc3812d9d1 = $this->env->getExtension("native_profiler");
        $__internal_d973fb2a7e4dc5cba71802187b3682d9cb7aed8168bf9cc3f9db77bc3812d9d1->enter($__internal_d973fb2a7e4dc5cba71802187b3682d9cb7aed8168bf9cc3f9db77bc3812d9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_rows.html.php"));

        // line 1
        echo "<?php foreach (\$form as \$child) : ?>
    <?php echo \$view['form']->row(\$child) ?>
<?php endforeach; ?>
";
        
        $__internal_d973fb2a7e4dc5cba71802187b3682d9cb7aed8168bf9cc3f9db77bc3812d9d1->leave($__internal_d973fb2a7e4dc5cba71802187b3682d9cb7aed8168bf9cc3f9db77bc3812d9d1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_rows.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php foreach ($form as $child) : ?>*/
/*     <?php echo $view['form']->row($child) ?>*/
/* <?php endforeach; ?>*/
/* */
