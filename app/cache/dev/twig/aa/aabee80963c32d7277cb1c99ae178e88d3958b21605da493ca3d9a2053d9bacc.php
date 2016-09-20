<?php

/* @Framework/FormTable/form_row.html.php */
class __TwigTemplate_6d661c4a4ec9041ffa38278e631a18549b2b37e0f12b073d169f845e939ec72c extends Twig_Template
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
        $__internal_258643d69611c32488f4e06d65035782f681d98a1121bbc012021eb049a539c3 = $this->env->getExtension("native_profiler");
        $__internal_258643d69611c32488f4e06d65035782f681d98a1121bbc012021eb049a539c3->enter($__internal_258643d69611c32488f4e06d65035782f681d98a1121bbc012021eb049a539c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/form_row.html.php"));

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
        
        $__internal_258643d69611c32488f4e06d65035782f681d98a1121bbc012021eb049a539c3->leave($__internal_258643d69611c32488f4e06d65035782f681d98a1121bbc012021eb049a539c3_prof);

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
