<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_db469602e28f26bdc07a97b13138d7db43a76bb82fa75952a150195e58b35e06 extends Twig_Template
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
        $__internal_7a2798da3d54fa1ec5747a1de55b5edaeb2952a75016440484dd3b437fb898b3 = $this->env->getExtension("native_profiler");
        $__internal_7a2798da3d54fa1ec5747a1de55b5edaeb2952a75016440484dd3b437fb898b3->enter($__internal_7a2798da3d54fa1ec5747a1de55b5edaeb2952a75016440484dd3b437fb898b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_7a2798da3d54fa1ec5747a1de55b5edaeb2952a75016440484dd3b437fb898b3->leave($__internal_7a2798da3d54fa1ec5747a1de55b5edaeb2952a75016440484dd3b437fb898b3_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (count($errors) > 0): ?>*/
/*     <ul>*/
/*         <?php foreach ($errors as $error): ?>*/
/*             <li><?php echo $error->getMessage() ?></li>*/
/*         <?php endforeach; ?>*/
/*     </ul>*/
/* <?php endif ?>*/
/* */
