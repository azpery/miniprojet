<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_b1a96088e447911167dcdde1c68af6e46f3baa61056fcc56aa6f894d5e318205 extends Twig_Template
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
        $__internal_f4dbc0e8708d334abff759d1efe533e57316c258a22ffb5f0012381eaf40683f = $this->env->getExtension("native_profiler");
        $__internal_f4dbc0e8708d334abff759d1efe533e57316c258a22ffb5f0012381eaf40683f->enter($__internal_f4dbc0e8708d334abff759d1efe533e57316c258a22ffb5f0012381eaf40683f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

        // line 1
        echo "<tr>
    <td>
        <?php echo \$view['form']->label(\$form) ?>
    </td>
    <td>
        <?php echo \$view['form']->errors(\$form) ?>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f4dbc0e8708d334abff759d1efe533e57316c258a22ffb5f0012381eaf40683f->leave($__internal_f4dbc0e8708d334abff759d1efe533e57316c258a22ffb5f0012381eaf40683f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/form_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr>*/
/*     <td>*/
/*         <?php echo $view['form']->label($form) ?>*/
/*     </td>*/
/*     <td>*/
/*         <?php echo $view['form']->errors($form) ?>*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
