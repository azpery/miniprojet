<?php

/* @Framework/Form/form_row.html.php */
class __TwigTemplate_48ae9aebaaaad4aef5889b33fb4e47614300b0396f3802a20484aaa953717447 extends Twig_Template
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
        $__internal_cac157eb55f2813d55e403864c7066c8c6b9876568a69b2895289a7d7ea86276 = $this->env->getExtension("native_profiler");
        $__internal_cac157eb55f2813d55e403864c7066c8c6b9876568a69b2895289a7d7ea86276->enter($__internal_cac157eb55f2813d55e403864c7066c8c6b9876568a69b2895289a7d7ea86276_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_row.html.php"));

        // line 1
        echo "<div>
    <?php echo \$view['form']->label(\$form) ?>
    <?php echo \$view['form']->errors(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
</div>
";
        
        $__internal_cac157eb55f2813d55e403864c7066c8c6b9876568a69b2895289a7d7ea86276->leave($__internal_cac157eb55f2813d55e403864c7066c8c6b9876568a69b2895289a7d7ea86276_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <div>*/
/*     <?php echo $view['form']->label($form) ?>*/
/*     <?php echo $view['form']->errors($form) ?>*/
/*     <?php echo $view['form']->widget($form) ?>*/
/* </div>*/
/* */
