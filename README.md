*lab.artlung.com*

I originally created the site [lab.artlung.com](https://lab.artlung.com) in 2001 or so because the "Lab" pages on my site at [artlung.com](https://artlung.com) had gotten unwieldy. It's gotten a fair amount of traffic over the years as a resource for code snippets, utilities and experiments.

* 2010
  * Comments were added using [Disqus](https://disqus.com).
* 2016 
  * I created a private repository for the site.
* 2024 
  * I made the repository public as part of [IndieWeb Black Friday Create Day](https://indieweb.org/events/2024-black-friday-create-day).
  * [PHP_CodeSniffer](https://github.com/squizlabs/PHP_CodeSniffer) was added
  * Preliminary PHPUnit tests added
  * OG:Image Support Added
  * XML SiteMap Support
  * Random Post Keystroke added (alt-r or option-r)
  * All pages have a specific `yaml` file to help manage metadata
  * `tag-adder.php` script makes it easy to add tags to existing content
  * `yaml-management.php` script makes it easy to add metadata to existing content
  * Unit tests now check for at least one tag on each page
  * `og-images.php` script uses `shot-scraper` to generate images for `og:image` tags
  * `generate-nav-value.php` populates the `Nav` class with values from the `yaml` files
  * Webmention capture and display added on individual pages and on the main nav alongside Disqus comment counts (when active)


![example workflow](https://github.com/artlung/lab.artlung.com/actions/workflows/ci.yml/badge.svg)
