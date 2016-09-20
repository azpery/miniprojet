<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_a4b2a2d52f4b66bf358e57ff378eedf48d1327fff82bbe2174fe18419d676dd4 extends Twig_Template
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
        $__internal_f3494738b2ed03c712d1b6204c712b58cc0cbfb1e66849c34144e50b1692a0e7 = $this->env->getExtension("native_profiler");
        $__internal_f3494738b2ed03c712d1b6204c712b58cc0cbfb1e66849c34144e50b1692a0e7->enter($__internal_f3494738b2ed03c712d1b6204c712b58cc0cbfb1e66849c34144e50b1692a0e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_f3494738b2ed03c712d1b6204c712b58cc0cbfb1e66849c34144e50b1692a0e7->leave($__internal_f3494738b2ed03c712d1b6204c712b58cc0cbfb1e66849c34144e50b1692a0e7_prof);

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
