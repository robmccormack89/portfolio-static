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

/* front.twig */
class __TwigTemplate_dac715275a1fe16a93b4086f41836f38e2d14b02acd2bd8501f2c31c789a8be9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.twig", "front.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "
<div data-template=\"homepage.twig\">

  <section class=\"home-hero uk-section uk-section-small home-hero-section\">
    <div class=\"uk-container\">
      <div class=\"uk-height-large uk-cover-container theme-border post-224 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-releases\">
        <img data-src=\"https://rob.com/wp-content/uploads/2021/03/52eb82bd-b282-30fd-9ae4-001974ff1367-1138x388-c-default.jpg\" alt=\"\" data-width data-height uk-cover uk-img class=\"uk-cover\"
          src=\"https://rob.com/wp-content/uploads/2021/03/52eb82bd-b282-30fd-9ae4-001974ff1367-1138x388-c-default.jpg\">
        <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
          <div>
            <span class=\"uk-label home-hero-label\">Featured Article</span>
            <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold\">Provident excepturi tempore temporibus officia nam natus</h1>
            <div class=\"uk-container uk-container-small\">Suscipit qui quos labore facere et voluptatem repellendus dolores molestiae quo dolorem debitis et libero dignissimos laborum facilis provident incidunt et vel quos itaque dolores…</div>
            <a href=\"https://rob.com/provident-excepturi-tempore-temporibus-officia-nam-natus/\" class=\"uk-button uk-button-default uk-margin-top\">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"home-featured uk-section uk-section-small home-featured-section\">
    <div class=\"uk-container\">

      <h2 class=\"uk-text-bold\">Featured Articles</h2>
      <div uk-slider=\"velocity: 5\" class=\"uk-slider\">
        <div class=\"uk-position-relative\">
          <div class=\"uk-slider-container\">
            <ul class=\"uk-slider-items uk-child-width-1-2@m uk-grid uk-grid-medium news-slide\" style=\"transform: translate3d(0px, 0px, 0px);\">
              <li tabindex=\"-1\" class=\"uk-active\">
                <div id=\"post-226\" class=\"uk-card uk-card-body uk-card-small uk-flex uk-flex-middle theme-border post-226 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-releases\">
                  <div class=\"uk-grid uk-grid-medium uk-flex uk-flex-middle\" uk-grid=\"\">
                    <div class=\"uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column\">
                      <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/dolorum-odit-eos-mollitia-sint-vitae/\">
                        <img class=\"tease-feature-related theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/b7627868-e6e8-3d53-bde3-a1d78a6848d4-600x600-c-default.jpg\" alt=\"\" data-width=\"\" data-height=\"\" uk-img=\"\"
                          src=\"https://rob.com/wp-content/uploads/2021/03/b7627868-e6e8-3d53-bde3-a1d78a6848d4-600x600-c-default.jpg\">
                      </a>
                    </div>
                    <div class=\"uk-width-2-3@s uk-width-3-5@m\">
                      <span class=\"uk-label home-featured-label\">Featured Article</span>
                      <h3 class=\"uk-card-title uk-margin-small-top uk-margin-remove-bottom\">
                        <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/dolorum-odit-eos-mollitia-sint-vitae/\">Dolorum odit eos mollitia sint vitae</a>
                      </h3>
                      <span class=\"uk-article-meta\">
                        Media, Releases |
                        4 weeks ago
                      </span>
                    </div>
                  </div>
                </div>
              </li>
              <li tabindex=\"-1\" class=\"uk-active\">
                <div id=\"post-228\" class=\"uk-card uk-card-body uk-card-small uk-flex uk-flex-middle theme-border post-228 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-news\">
                  <div class=\"uk-grid uk-grid-medium uk-flex uk-flex-middle\" uk-grid=\"\">
                    <div class=\"uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column\">
                      <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/at-repellat-quod-veniam-et-consectetur/\">
                        <img class=\"tease-feature-related theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/d8bd2c47-d2a7-32ca-bc47-e72aceb13345-600x600-c-default.jpg\" alt=\"\" data-width=\"\" data-height=\"\" uk-img=\"\"
                          src=\"https://rob.com/wp-content/uploads/2021/03/d8bd2c47-d2a7-32ca-bc47-e72aceb13345-600x600-c-default.jpg\">
                      </a>
                    </div>
                    <div class=\"uk-width-2-3@s uk-width-3-5@m\">
                      <span class=\"uk-label home-featured-label\">Featured Article</span>
                      <h3 class=\"uk-card-title uk-margin-small-top uk-margin-remove-bottom\">
                        <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/at-repellat-quod-veniam-et-consectetur/\">At repellat quod veniam et consectetur</a>
                      </h3>
                      <span class=\"uk-article-meta\">
                        Media, News |
                        1 month ago
                      </span>
                    </div>
                  </div>
                </div>
              </li>
              <li tabindex=\"-1\" class=\"\">
                <div id=\"post-242\" class=\"uk-card uk-card-body uk-card-small uk-flex uk-flex-middle theme-border post-242 post type-post status-publish format-standard has-post-thumbnail hentry category-news\">
                  <div class=\"uk-grid uk-grid-medium uk-flex uk-flex-middle\" uk-grid=\"\">
                    <div class=\"uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column\">
                      <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/expedita-quo-nam-tenetur/\">
                        <img class=\"tease-feature-related theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/315b18db-57b9-3edc-8b25-6f2a85371859-600x600-c-default.jpg\" alt=\"\" data-width=\"\" data-height=\"\" uk-img=\"\">
                      </a>
                    </div>
                    <div class=\"uk-width-2-3@s uk-width-3-5@m\">
                      <span class=\"uk-label home-featured-label\">Featured Article</span>
                      <h3 class=\"uk-card-title uk-margin-small-top uk-margin-remove-bottom\">
                        <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/expedita-quo-nam-tenetur/\">Expedita quo nam tenetur</a>
                      </h3>
                      <span class=\"uk-article-meta\">
                        News |
                        2 months ago
                      </span>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class=\"uk-visible@xl\">
            <a class=\"uk-position-center-left-out uk-position-small uk-link-muted\" href=\"#\" uk-slider-item=\"previous\"><i class=\"fas fa-chevron-left\"></i></a>
            <a class=\"uk-position-center-right-out uk-position-small uk-link-muted\" href=\"#\" uk-slider-item=\"next\"><i class=\"fas fa-chevron-right\"></i></a>
          </div>
        </div>
        <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin\">
          <li uk-slider-item=\"0\" class=\"uk-active\"><a href=\"\"></a></li>
          <li uk-slider-item=\"1\"><a href=\"\"></a></li>
          <li uk-slider-item=\"2\"><a href=\"\"></a></li>
        </ul>
      </div>

    </div>
  </section>

  <section class=\"home-more uk-section uk-section-small home-posts-section\">
    <div class=\"uk-container\">
      <div class=\"uk-grid-large uk-grid\" uk-grid=\"\">

        <div class=\"uk-article uk-width-2-3@m uk-first-column\">

          <h3 class=\"uk-text-bold\">More Articles</h3>
          <div class=\"archive-posts\">
            <article id=\"post-246\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-246 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-news\"
              data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/similique-adipisci-velit-ipsa-itaque-quos-modi/\">Similique adipisci velit ipsa itaque quos
                    modi</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media, News |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/similique-adipisci-velit-ipsa-itaque-quos-modi/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/e34eb831-f8f2-3998-9daf-cde6e328de5b-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/e34eb831-f8f2-3998-9daf-cde6e328de5b-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Molestiae totam dolore dolorem tempore ratione ad et molestiae quidem non eius distinctio nemo occaecati doloribus officiis quos et officiis…</p>
              <a href=\"https://rob.com/similique-adipisci-velit-ipsa-itaque-quos-modi/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-240\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-240 post type-post status-publish format-standard has-post-thumbnail hentry category-media\" data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/provident-nam-voluptas-ipsum/\">Provident nam voluptas ipsum</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/provident-nam-voluptas-ipsum/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/ce29e955-584e-3bbd-af4c-e28570478ef8-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/ce29e955-584e-3bbd-af4c-e28570478ef8-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Enim dicta et et enim voluptas repudiandae possimus consequatur omnis odit et porro saepe corrupti rerum libero optio illo iste…</p>
              <a href=\"https://rob.com/provident-nam-voluptas-ipsum/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-236\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-236 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-releases\"
              data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/corporis-sint-deleniti-eos/\">Corporis sint deleniti eos</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media, Releases |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/corporis-sint-deleniti-eos/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/41b9e667-6372-3c5e-8639-fcfd8e6bcc28-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"Alt Text...\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/41b9e667-6372-3c5e-8639-fcfd8e6bcc28-800x300-c-default.jpg\">
                </a>
                <figcaption class=\"uk-padding-small uk-text-muted uk-text-center tease-image-caption\">Caption...</figcaption>
              </figure>
              <p>Earum voluptas consequuntur et veniam laboriosam. Dolorem sed ad est accusamus animi ut vel corporis. Veniam autem voluptatem nemo assumenda…</p>
              <a href=\"https://rob.com/corporis-sint-deleniti-eos/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-230\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-230 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-news\"
              data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/iure-alias-maxime-voluptate-dolorem-ducimus/\">Iure alias maxime voluptate dolorem ducimus</a>
                </h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media, News |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/iure-alias-maxime-voluptate-dolorem-ducimus/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/ef4004c9-6010-3f01-9a83-615c9af7e05c-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/ef4004c9-6010-3f01-9a83-615c9af7e05c-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Voluptatum velit placeat placeat perspiciatis quo voluptas iusto ab itaque non voluptatem perspiciatis qui omnis explicabo quis suscipit qui ut…</p>
              <a href=\"https://rob.com/iure-alias-maxime-voluptate-dolorem-ducimus/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-234\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-234 post type-post status-publish format-standard has-post-thumbnail hentry category-releases\" data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/voluptas-molestiae-ipsum-aliquam-et-cum-repellat/\">Voluptas molestiae ipsum aliquam et cum
                    repellat</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Releases |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/voluptas-molestiae-ipsum-aliquam-et-cum-repellat/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/683aa88c-1ade-34c0-a7d9-1c80f8155fad-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/683aa88c-1ade-34c0-a7d9-1c80f8155fad-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Autem vel quisquam minus inventore aut dicta error delectus ut nemo voluptatem cupiditate voluptates aut nulla qui est dolor est…</p>
              <a href=\"https://rob.com/voluptas-molestiae-ipsum-aliquam-et-cum-repellat/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-232\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-232 post type-post status-publish format-standard has-post-thumbnail hentry category-releases\" data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/qui-maiores-laboriosam-aut-provident-consequatur-fuga/\">Qui maiores laboriosam aut provident
                    consequatur fuga</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Releases |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/qui-maiores-laboriosam-aut-provident-consequatur-fuga/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/d9bc147d-ad49-33e6-94d7-28bd34740206-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/d9bc147d-ad49-33e6-94d7-28bd34740206-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Blanditiis minima ea illo et cumque quisquam quia. Repudiandae nostrum unde voluptatem quasi et. Voluptas deserunt reiciendis odio provident. Et…</p>
              <a href=\"https://rob.com/qui-maiores-laboriosam-aut-provident-consequatur-fuga/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
          </div>

          <div data-template=\"pagination.twig\">

            <div id=\"ThemePagination\" class=\"pagination-block\" style=\"display: none;\">
              <ul>
                <li>
                  <span class=\"page-number page-numbers current\">1</span>
                </li>
                <li>
                  <a href=\"https://rob.com/page/2/\" class=\"page-number page-numbers\">2</a>
                </li>
                <li>
                  <a href=\"https://rob.com/page/2/\" class=\"next \">Next Page</a>
                </li>
              </ul>
            </div>

            <div class=\"scroll-loaders\">
              <div class=\"page-load-status\">
                <div class=\"loader-ellips infinite-scroll-request\">
                  <span class=\"loader-ellips__dot\"></span>
                  <span class=\"loader-ellips__dot\"></span>
                  <span class=\"loader-ellips__dot\"></span>
                  <span class=\"loader-ellips__dot\"></span>
                </div>
                <p class=\"infinite-scroll-last\">End of posts</p>
                <p class=\"infinite-scroll-error\">No more posts to load</p>
              </div>
              <p><button class=\"view-more-button uk-button uk-button-default uk-align-center\">Load more</button></p>
            </div>

          </div>

        </div>

        ";
        // line 268
        $this->loadTemplate("sidebar.twig", "front.twig", 268)->display($context);
        // line 269
        echo "        
      </div>
    </div>
  </section>

</div>

";
    }

    public function getTemplateName()
    {
        return "front.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  318 => 269,  316 => 268,  50 => 4,  46 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.twig\" %}

{% block content %}

<div data-template=\"homepage.twig\">

  <section class=\"home-hero uk-section uk-section-small home-hero-section\">
    <div class=\"uk-container\">
      <div class=\"uk-height-large uk-cover-container theme-border post-224 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-releases\">
        <img data-src=\"https://rob.com/wp-content/uploads/2021/03/52eb82bd-b282-30fd-9ae4-001974ff1367-1138x388-c-default.jpg\" alt=\"\" data-width data-height uk-cover uk-img class=\"uk-cover\"
          src=\"https://rob.com/wp-content/uploads/2021/03/52eb82bd-b282-30fd-9ae4-001974ff1367-1138x388-c-default.jpg\">
        <div class=\"uk-overlay uk-overlay-primary uk-position-cover uk-flex uk-flex-center uk-flex-middle uk-light uk-text-center\">
          <div>
            <span class=\"uk-label home-hero-label\">Featured Article</span>
            <h1 class=\"uk-margin-top uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold\">Provident excepturi tempore temporibus officia nam natus</h1>
            <div class=\"uk-container uk-container-small\">Suscipit qui quos labore facere et voluptatem repellendus dolores molestiae quo dolorem debitis et libero dignissimos laborum facilis provident incidunt et vel quos itaque dolores…</div>
            <a href=\"https://rob.com/provident-excepturi-tempore-temporibus-officia-nam-natus/\" class=\"uk-button uk-button-default uk-margin-top\">Read more</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class=\"home-featured uk-section uk-section-small home-featured-section\">
    <div class=\"uk-container\">

      <h2 class=\"uk-text-bold\">Featured Articles</h2>
      <div uk-slider=\"velocity: 5\" class=\"uk-slider\">
        <div class=\"uk-position-relative\">
          <div class=\"uk-slider-container\">
            <ul class=\"uk-slider-items uk-child-width-1-2@m uk-grid uk-grid-medium news-slide\" style=\"transform: translate3d(0px, 0px, 0px);\">
              <li tabindex=\"-1\" class=\"uk-active\">
                <div id=\"post-226\" class=\"uk-card uk-card-body uk-card-small uk-flex uk-flex-middle theme-border post-226 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-releases\">
                  <div class=\"uk-grid uk-grid-medium uk-flex uk-flex-middle\" uk-grid=\"\">
                    <div class=\"uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column\">
                      <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/dolorum-odit-eos-mollitia-sint-vitae/\">
                        <img class=\"tease-feature-related theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/b7627868-e6e8-3d53-bde3-a1d78a6848d4-600x600-c-default.jpg\" alt=\"\" data-width=\"\" data-height=\"\" uk-img=\"\"
                          src=\"https://rob.com/wp-content/uploads/2021/03/b7627868-e6e8-3d53-bde3-a1d78a6848d4-600x600-c-default.jpg\">
                      </a>
                    </div>
                    <div class=\"uk-width-2-3@s uk-width-3-5@m\">
                      <span class=\"uk-label home-featured-label\">Featured Article</span>
                      <h3 class=\"uk-card-title uk-margin-small-top uk-margin-remove-bottom\">
                        <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/dolorum-odit-eos-mollitia-sint-vitae/\">Dolorum odit eos mollitia sint vitae</a>
                      </h3>
                      <span class=\"uk-article-meta\">
                        Media, Releases |
                        4 weeks ago
                      </span>
                    </div>
                  </div>
                </div>
              </li>
              <li tabindex=\"-1\" class=\"uk-active\">
                <div id=\"post-228\" class=\"uk-card uk-card-body uk-card-small uk-flex uk-flex-middle theme-border post-228 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-news\">
                  <div class=\"uk-grid uk-grid-medium uk-flex uk-flex-middle\" uk-grid=\"\">
                    <div class=\"uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column\">
                      <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/at-repellat-quod-veniam-et-consectetur/\">
                        <img class=\"tease-feature-related theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/d8bd2c47-d2a7-32ca-bc47-e72aceb13345-600x600-c-default.jpg\" alt=\"\" data-width=\"\" data-height=\"\" uk-img=\"\"
                          src=\"https://rob.com/wp-content/uploads/2021/03/d8bd2c47-d2a7-32ca-bc47-e72aceb13345-600x600-c-default.jpg\">
                      </a>
                    </div>
                    <div class=\"uk-width-2-3@s uk-width-3-5@m\">
                      <span class=\"uk-label home-featured-label\">Featured Article</span>
                      <h3 class=\"uk-card-title uk-margin-small-top uk-margin-remove-bottom\">
                        <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/at-repellat-quod-veniam-et-consectetur/\">At repellat quod veniam et consectetur</a>
                      </h3>
                      <span class=\"uk-article-meta\">
                        Media, News |
                        1 month ago
                      </span>
                    </div>
                  </div>
                </div>
              </li>
              <li tabindex=\"-1\" class=\"\">
                <div id=\"post-242\" class=\"uk-card uk-card-body uk-card-small uk-flex uk-flex-middle theme-border post-242 post type-post status-publish format-standard has-post-thumbnail hentry category-news\">
                  <div class=\"uk-grid uk-grid-medium uk-flex uk-flex-middle\" uk-grid=\"\">
                    <div class=\"uk-width-1-3@s uk-width-2-5@m uk-height-1-1 uk-first-column\">
                      <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/expedita-quo-nam-tenetur/\">
                        <img class=\"tease-feature-related theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/315b18db-57b9-3edc-8b25-6f2a85371859-600x600-c-default.jpg\" alt=\"\" data-width=\"\" data-height=\"\" uk-img=\"\">
                      </a>
                    </div>
                    <div class=\"uk-width-2-3@s uk-width-3-5@m\">
                      <span class=\"uk-label home-featured-label\">Featured Article</span>
                      <h3 class=\"uk-card-title uk-margin-small-top uk-margin-remove-bottom\">
                        <a class=\"uk-link-reset uk-text-bold\" href=\"https://rob.com/expedita-quo-nam-tenetur/\">Expedita quo nam tenetur</a>
                      </h3>
                      <span class=\"uk-article-meta\">
                        News |
                        2 months ago
                      </span>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class=\"uk-visible@xl\">
            <a class=\"uk-position-center-left-out uk-position-small uk-link-muted\" href=\"#\" uk-slider-item=\"previous\"><i class=\"fas fa-chevron-left\"></i></a>
            <a class=\"uk-position-center-right-out uk-position-small uk-link-muted\" href=\"#\" uk-slider-item=\"next\"><i class=\"fas fa-chevron-right\"></i></a>
          </div>
        </div>
        <ul class=\"uk-slider-nav uk-dotnav uk-flex-center uk-margin\">
          <li uk-slider-item=\"0\" class=\"uk-active\"><a href=\"\"></a></li>
          <li uk-slider-item=\"1\"><a href=\"\"></a></li>
          <li uk-slider-item=\"2\"><a href=\"\"></a></li>
        </ul>
      </div>

    </div>
  </section>

  <section class=\"home-more uk-section uk-section-small home-posts-section\">
    <div class=\"uk-container\">
      <div class=\"uk-grid-large uk-grid\" uk-grid=\"\">

        <div class=\"uk-article uk-width-2-3@m uk-first-column\">

          <h3 class=\"uk-text-bold\">More Articles</h3>
          <div class=\"archive-posts\">
            <article id=\"post-246\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-246 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-news\"
              data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/similique-adipisci-velit-ipsa-itaque-quos-modi/\">Similique adipisci velit ipsa itaque quos
                    modi</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media, News |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/similique-adipisci-velit-ipsa-itaque-quos-modi/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/e34eb831-f8f2-3998-9daf-cde6e328de5b-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/e34eb831-f8f2-3998-9daf-cde6e328de5b-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Molestiae totam dolore dolorem tempore ratione ad et molestiae quidem non eius distinctio nemo occaecati doloribus officiis quos et officiis…</p>
              <a href=\"https://rob.com/similique-adipisci-velit-ipsa-itaque-quos-modi/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-240\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-240 post type-post status-publish format-standard has-post-thumbnail hentry category-media\" data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/provident-nam-voluptas-ipsum/\">Provident nam voluptas ipsum</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/provident-nam-voluptas-ipsum/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/ce29e955-584e-3bbd-af4c-e28570478ef8-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/ce29e955-584e-3bbd-af4c-e28570478ef8-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Enim dicta et et enim voluptas repudiandae possimus consequatur omnis odit et porro saepe corrupti rerum libero optio illo iste…</p>
              <a href=\"https://rob.com/provident-nam-voluptas-ipsum/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-236\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-236 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-releases\"
              data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/corporis-sint-deleniti-eos/\">Corporis sint deleniti eos</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media, Releases |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/corporis-sint-deleniti-eos/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/41b9e667-6372-3c5e-8639-fcfd8e6bcc28-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"Alt Text...\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/41b9e667-6372-3c5e-8639-fcfd8e6bcc28-800x300-c-default.jpg\">
                </a>
                <figcaption class=\"uk-padding-small uk-text-muted uk-text-center tease-image-caption\">Caption...</figcaption>
              </figure>
              <p>Earum voluptas consequuntur et veniam laboriosam. Dolorem sed ad est accusamus animi ut vel corporis. Veniam autem voluptatem nemo assumenda…</p>
              <a href=\"https://rob.com/corporis-sint-deleniti-eos/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-230\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-230 post type-post status-publish format-standard has-post-thumbnail hentry category-media category-news\"
              data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/iure-alias-maxime-voluptate-dolorem-ducimus/\">Iure alias maxime voluptate dolorem ducimus</a>
                </h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Media, News |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/iure-alias-maxime-voluptate-dolorem-ducimus/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/ef4004c9-6010-3f01-9a83-615c9af7e05c-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/ef4004c9-6010-3f01-9a83-615c9af7e05c-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Voluptatum velit placeat placeat perspiciatis quo voluptas iusto ab itaque non voluptatem perspiciatis qui omnis explicabo quis suscipit qui ut…</p>
              <a href=\"https://rob.com/iure-alias-maxime-voluptate-dolorem-ducimus/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-234\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-234 post type-post status-publish format-standard has-post-thumbnail hentry category-releases\" data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/voluptas-molestiae-ipsum-aliquam-et-cum-repellat/\">Voluptas molestiae ipsum aliquam et cum
                    repellat</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Releases |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/voluptas-molestiae-ipsum-aliquam-et-cum-repellat/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/683aa88c-1ade-34c0-a7d9-1c80f8155fad-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/683aa88c-1ade-34c0-a7d9-1c80f8155fad-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Autem vel quisquam minus inventore aut dicta error delectus ut nemo voluptatem cupiditate voluptates aut nulla qui est dolor est…</p>
              <a href=\"https://rob.com/voluptas-molestiae-ipsum-aliquam-et-cum-repellat/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
            <article id=\"post-232\" class=\"tease-post-list uk-section uk-section-small uk-padding-remove-top item post-232 post type-post status-publish format-standard has-post-thumbnail hentry category-releases\" data-template=\"tease.twig\">
              <header>
                <h2 class=\"uk-margin-remove-adjacent uk-margin-small-top uk-text-bold uk-margin-small-bottom\"><a class=\"uk-link-reset\" href=\"https://rob.com/qui-maiores-laboriosam-aut-provident-consequatur-fuga/\">Qui maiores laboriosam aut provident
                    consequatur fuga</a></h2>
                <p class=\"uk-article-meta uk-margin-small-bottom\">
                  Releases |
                  2 months ago
                </p>
              </header>
              <figure class=\"uk-position-relatve uk-inline uk-margin-remove\">
                <a href=\"https://rob.com/qui-maiores-laboriosam-aut-provident-consequatur-fuga/\">
                  <img class=\"theme-border\" data-src=\"https://rob.com/wp-content/uploads/2021/03/d9bc147d-ad49-33e6-94d7-28bd34740206-800x300-c-default.jpg\" width=\"800\" height=\"300\" alt=\"\" uk-img=\"\"
                    src=\"https://rob.com/wp-content/uploads/2021/03/d9bc147d-ad49-33e6-94d7-28bd34740206-800x300-c-default.jpg\">
                </a>
              </figure>
              <p>Blanditiis minima ea illo et cumque quisquam quia. Repudiandae nostrum unde voluptatem quasi et. Voluptas deserunt reiciendis odio provident. Et…</p>
              <a href=\"https://rob.com/qui-maiores-laboriosam-aut-provident-consequatur-fuga/\" class=\"uk-button uk-button-default\">Read more</a>
            </article>
          </div>

          <div data-template=\"pagination.twig\">

            <div id=\"ThemePagination\" class=\"pagination-block\" style=\"display: none;\">
              <ul>
                <li>
                  <span class=\"page-number page-numbers current\">1</span>
                </li>
                <li>
                  <a href=\"https://rob.com/page/2/\" class=\"page-number page-numbers\">2</a>
                </li>
                <li>
                  <a href=\"https://rob.com/page/2/\" class=\"next \">Next Page</a>
                </li>
              </ul>
            </div>

            <div class=\"scroll-loaders\">
              <div class=\"page-load-status\">
                <div class=\"loader-ellips infinite-scroll-request\">
                  <span class=\"loader-ellips__dot\"></span>
                  <span class=\"loader-ellips__dot\"></span>
                  <span class=\"loader-ellips__dot\"></span>
                  <span class=\"loader-ellips__dot\"></span>
                </div>
                <p class=\"infinite-scroll-last\">End of posts</p>
                <p class=\"infinite-scroll-error\">No more posts to load</p>
              </div>
              <p><button class=\"view-more-button uk-button uk-button-default uk-align-center\">Load more</button></p>
            </div>

          </div>

        </div>

        {% include 'sidebar.twig' %}
        
      </div>
    </div>
  </section>

</div>

{% endblock %}", "front.twig", "C:\\xampp\\htdocs\\static.com\\app\\views\\front.twig");
    }
}