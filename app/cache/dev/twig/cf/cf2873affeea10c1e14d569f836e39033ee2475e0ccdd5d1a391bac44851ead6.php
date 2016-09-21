<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_21db620b798b3f89bd74ae36bbe0dc67bb9481574abd7aac4adafb4597d46784 extends Twig_Template
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
        $__internal_8e3f7a616512817d7c56c0f14f5f5d6ca6974c43ff8aba24d7456fc54b6cd02e = $this->env->getExtension("native_profiler");
        $__internal_8e3f7a616512817d7c56c0f14f5f5d6ca6974c43ff8aba24d7456fc54b6cd02e->enter($__internal_8e3f7a616512817d7c56c0f14f5f5d6ca6974c43ff8aba24d7456fc54b6cd02e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_8e3f7a616512817d7c56c0f14f5f5d6ca6974c43ff8aba24d7456fc54b6cd02e->leave($__internal_8e3f7a616512817d7c56c0f14f5f5d6ca6974c43ff8aba24d7456fc54b6cd02e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <tr style="display: none">*/
/*     <td colspan="2">*/
/*         <?php echo $view['form']->widget($form) ?>*/
/*     </td>*/
/* </tr>*/
/* */
