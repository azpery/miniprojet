<?php

/* @Framework/Form/date_widget.html.php */
class __TwigTemplate_3a0007c63d4292bfb7998f379060a8ee9a672e84a2867c491a24ae55bec0f347 extends Twig_Template
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
        $__internal_6ff4ca5c39e29ec7024867513f77dd0c591778a561511d3f27f4cf3e7b580fbe = $this->env->getExtension("native_profiler");
        $__internal_6ff4ca5c39e29ec7024867513f77dd0c591778a561511d3f27f4cf3e7b580fbe->enter($__internal_6ff4ca5c39e29ec7024867513f77dd0c591778a561511d3f27f4cf3e7b580fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/date_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo str_replace(array('";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["year"]) ? $context["year"] : $this->getContext($context, "year")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["month"]) ? $context["month"] : $this->getContext($context, "month")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["day"]) ? $context["day"] : $this->getContext($context, "day")), "html", null, true);
        echo "'), array(
            \$view['form']->widget(\$form['year']),
            \$view['form']->widget(\$form['month']),
            \$view['form']->widget(\$form['day']),
        ), \$date_pattern) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6ff4ca5c39e29ec7024867513f77dd0c591778a561511d3f27f4cf3e7b580fbe->leave($__internal_6ff4ca5c39e29ec7024867513f77dd0c591778a561511d3f27f4cf3e7b580fbe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/date_widget.html.php";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 5,  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo str_replace(array('{{ year }}', '{{ month }}', '{{ day }}'), array(*/
/*             $view['form']->widget($form['year']),*/
/*             $view['form']->widget($form['month']),*/
/*             $view['form']->widget($form['day']),*/
/*         ), $date_pattern) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
