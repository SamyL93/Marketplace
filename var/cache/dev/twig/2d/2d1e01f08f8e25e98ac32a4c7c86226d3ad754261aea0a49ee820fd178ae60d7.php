<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* product/categorie.html.twig */
class __TwigTemplate_0d7642eae601f0bb3d082441aad3db20c201de4e423625c522876c16dfc34bf5 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/categorie.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "product/categorie.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "product/categorie.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "

<!-- Page Add Section Begin -->
<section class=\"page-add\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"page-breadcrumb\">
                    <h2>Categories<span>.</span></h2>
                    <a href=\"#\">Home</a>
                    <a href=\"#\">Categories</a>

                </div>
            </div>
            <div class=\"col-lg-8\">
                <img src=\"../../public/img/add.jpg\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->

<!-- Categories Page Section Begin -->
<section class=\"categories-page spad\">
    <div class=\"container\">
        <div class=\"categories-controls\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"categories-filter\">
                        <div class=\"cf-left\">
                            <form action=\"#\">
                                <select class=\"sort\">
                                    <option value=\"\">Sort by</option>
                                    <option value=\"\">Orders</option>
                                    <option value=\"\">Newest</option>
                                    <option value=\"\">Price</option>
                                </select>
                            </form>
                        </div>
                        <div class=\"cf-right\">
                            <span>20 Products</span>
                            <a href=\"#\">2</a>
                            <a href=\"#\" class=\"active\">4</a>
                            <a href=\"#\">6</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"../../public/img/products/img-9.jpg\" alt=\"\">
                        <div class=\"p-status\">new</div>
                        <div class=\"hover-icon\">
                            <a href=\"../../public/img/products/img-9.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Promotional offers</h6>
                        </a>
                        <p>\$22.90</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"../../public/img/products/mens_wear.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Men's wear</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"../../public/img/products/img-3.jpg\" alt=\"\">
                                <div class=\"p-status\">new</div>
                                <div class=\"hover-icon\">
                                    <a href=\"../../public/img/products/img-3.jpg\" class=\"pop-up\"><img
                                                src=\"../../public/img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Women's wear</h6>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"../../public/img/products/img-6.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-1.jpg\" alt=\"\">
                                <div class=\"hover-icon\">
                                    <a href=\"img/products/img-1.jpg\" class=\"pop-up\"><img
                                                src=\"img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>One piece bodysuit</h6>
                                </a>
                                <p>\$19.90</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-5.jpg\" alt=\"\">
                        <div class=\"p-status\">new</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-5.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Green Dress with details</h6>
                        </a>
                        <p>\$22.90</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-4.jpg\" alt=\"\">
                        <div class=\"p-status popular\">popular</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-4.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Blue Dress with details</h6>
                        </a>
                        <p>\$35.50</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-8.jpg\" alt=\"\">
                        <div class=\"p-status popular\">popular</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-8.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Blue Dress with details</h6>
                        </a>
                        <p>\$35.50</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-10.jpg\" alt=\"\">
                        <div class=\"p-status popular\">popular</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-10.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                  alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Blue Dress with details</h6>
                        </a>
                        <p>\$35.50</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-11.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>\$25.50</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-12.jpg\" alt=\"\">
                                <div class=\"p-status\">new</div>
                                <div class=\"hover-icon\">
                                    <a href=\"img/products/img-12.jpg\" class=\"pop-up\"><img
                                                src=\"img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>One piece bodysuit</h6>
                                </a>
                                <p>\$19.90</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-14.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>\$25.90</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-15.jpg\" alt=\"\">
                                <div class=\"hover-icon\">
                                    <a href=\"img/products/img-15.jpg\" class=\"pop-up\"><img
                                                src=\"img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>One piece bodysuit</h6>
                                </a>
                                <p>\$19.90</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-13.jpg\" alt=\"\">
                        <div class=\"p-status\">new</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-13.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                  alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Green Dress with details</h6>
                        </a>
                        <p>\$22.90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more-product\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <a href=\"#\" class=\"primary-btn\">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Page Section End -->

    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "product/categorie.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

    {% block body %}


<!-- Page Add Section Begin -->
<section class=\"page-add\">
    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-lg-4\">
                <div class=\"page-breadcrumb\">
                    <h2>Categories<span>.</span></h2>
                    <a href=\"#\">Home</a>
                    <a href=\"#\">Categories</a>

                </div>
            </div>
            <div class=\"col-lg-8\">
                <img src=\"../../public/img/add.jpg\" alt=\"\">
            </div>
        </div>
    </div>
</section>
<!-- Page Add Section End -->

<!-- Categories Page Section Begin -->
<section class=\"categories-page spad\">
    <div class=\"container\">
        <div class=\"categories-controls\">
            <div class=\"row\">
                <div class=\"col-lg-12\">
                    <div class=\"categories-filter\">
                        <div class=\"cf-left\">
                            <form action=\"#\">
                                <select class=\"sort\">
                                    <option value=\"\">Sort by</option>
                                    <option value=\"\">Orders</option>
                                    <option value=\"\">Newest</option>
                                    <option value=\"\">Price</option>
                                </select>
                            </form>
                        </div>
                        <div class=\"cf-right\">
                            <span>20 Products</span>
                            <a href=\"#\">2</a>
                            <a href=\"#\" class=\"active\">4</a>
                            <a href=\"#\">6</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"../../public/img/products/img-9.jpg\" alt=\"\">
                        <div class=\"p-status\">new</div>
                        <div class=\"hover-icon\">
                            <a href=\"../../public/img/products/img-9.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Promotional offers</h6>
                        </a>
                        <p>\$22.90</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"../../public/img/products/mens_wear.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Men's wear</h6>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"../../public/img/products/img-3.jpg\" alt=\"\">
                                <div class=\"p-status\">new</div>
                                <div class=\"hover-icon\">
                                    <a href=\"../../public/img/products/img-3.jpg\" class=\"pop-up\"><img
                                                src=\"../../public/img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Women's wear</h6>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"../../public/img/products/img-6.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>

                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-1.jpg\" alt=\"\">
                                <div class=\"hover-icon\">
                                    <a href=\"img/products/img-1.jpg\" class=\"pop-up\"><img
                                                src=\"img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>One piece bodysuit</h6>
                                </a>
                                <p>\$19.90</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-5.jpg\" alt=\"\">
                        <div class=\"p-status\">new</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-5.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Green Dress with details</h6>
                        </a>
                        <p>\$22.90</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-4.jpg\" alt=\"\">
                        <div class=\"p-status popular\">popular</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-4.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Blue Dress with details</h6>
                        </a>
                        <p>\$35.50</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-8.jpg\" alt=\"\">
                        <div class=\"p-status popular\">popular</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-8.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                 alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Blue Dress with details</h6>
                        </a>
                        <p>\$35.50</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-3 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-10.jpg\" alt=\"\">
                        <div class=\"p-status popular\">popular</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-10.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                  alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Blue Dress with details</h6>
                        </a>
                        <p>\$35.50</p>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"row\">
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-11.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>\$25.50</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-12.jpg\" alt=\"\">
                                <div class=\"p-status\">new</div>
                                <div class=\"hover-icon\">
                                    <a href=\"img/products/img-12.jpg\" class=\"pop-up\"><img
                                                src=\"img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>One piece bodysuit</h6>
                                </a>
                                <p>\$19.90</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-14.jpg\" alt=\"\">
                                <div class=\"p-status sale\">sale</div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>Yellow Maxi Dress</h6>
                                </a>
                                <p>\$25.90</p>
                            </div>
                        </div>
                    </div>
                    <div class=\"col-lg-6 col-md-6\">
                        <div class=\"single-product-item\">
                            <figure>
                                <img src=\"img/products/img-15.jpg\" alt=\"\">
                                <div class=\"hover-icon\">
                                    <a href=\"img/products/img-15.jpg\" class=\"pop-up\"><img
                                                src=\"img/icons/zoom-plus.png\" alt=\"\"></a>
                                </div>
                            </figure>
                            <div class=\"product-text\">
                                <a href=\"#\">
                                    <h6>One piece bodysuit</h6>
                                </a>
                                <p>\$19.90</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-lg-6 col-md-6\">
                <div class=\"single-product-item\">
                    <figure>
                        <img src=\"img/products/img-13.jpg\" alt=\"\">
                        <div class=\"p-status\">new</div>
                        <div class=\"hover-icon\">
                            <a href=\"img/products/img-13.jpg\" class=\"pop-up\"><img src=\"img/icons/zoom-plus.png\"
                                                                                  alt=\"\"></a>
                        </div>
                    </figure>
                    <div class=\"product-text\">
                        <a href=\"#\">
                            <h6>Green Dress with details</h6>
                        </a>
                        <p>\$22.90</p>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"more-product\">
            <div class=\"row\">
                <div class=\"col-lg-12 text-center\">
                    <a href=\"#\" class=\"primary-btn\">Load More</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Categories Page Section End -->

    {% endblock %}", "product/categorie.html.twig", "C:\\wamp64\\www\\Marketplace\\templates\\product\\categorie.html.twig");
    }
}
