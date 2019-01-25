<?php

/* @PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig */
class __TwigTemplate_557fe74a99b6ef34c4874cd8d603ce61567b651f72ddd5e2f054fc34390e6486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'shipping_preferences_carrier_options' => array($this, 'block_shipping_preferences_carrier_options'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 25
        echo "
";
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('shipping_preferences_carrier_options', $context, $blocks);
    }

    public function block_shipping_preferences_carrier_options($context, array $blocks = array())
    {
        // line 29
        echo "  <div class=\"col-xl-10\">
    <div class=\"card\">
      <h3 class=\"card-header\">
        <i class=\"material-icons\">local_shipping</i> ";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Carrier options", array(), "Admin.Shipping.Feature"), "html", null, true);
        echo "
      </h3>
      <div class=\"card-block row\">
        <div class=\"card-text\">
          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Default carrier", array(), "Admin.Shipping.Feature"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "default_carrier", array()), 'errors');
        echo "
              ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "default_carrier", array()), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Your shop's default carrier", array(), "Admin.Shipping.Help"), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Sort by", array(), "Admin.Actions"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 47
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_by", array()), 'errors');
        echo "
              ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_by", array()), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will only be visible in the front office.", array(), "Admin.Shipping.Help"), "html", null, true);
        echo "</small>
            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"form-control-label\">";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Order by", array(), "Admin.Actions"), "html", null, true);
        echo "</label>
            <div class=\"col-sm\">
              ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_way", array()), 'errors');
        echo "
              ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["carrierOptionsForm"] ?? null), "carrier_default_order_way", array()), 'widget');
        echo "
              <small class=\"form-text\">";
        // line 57
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("This will only be visible in the front office.", array(), "Admin.Shipping.Help"), "html", null, true);
        echo "</small>
            </div>
          </div>
        </div>
      </div>
      <div class=\"card-footer\">
        <div class=\"d-flex justify-content-end\">
          <button class=\"btn btn-primary\">";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("Save", array(), "Admin.Actions"), "html", null, true);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
";
    }

    public function getTemplateName()
    {
        return "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  108 => 64,  98 => 57,  94 => 56,  90 => 55,  85 => 53,  78 => 49,  74 => 48,  70 => 47,  65 => 45,  58 => 41,  54 => 40,  50 => 39,  45 => 37,  37 => 32,  32 => 29,  26 => 28,  23 => 27,  20 => 25,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PrestaShop/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig", "/var/www/html/press_shop/src/PrestaShopBundle/Resources/views/Admin/Improve/Shipping/Preferences/Blocks/shipping_preferences_carrier_options.html.twig");
    }
}
