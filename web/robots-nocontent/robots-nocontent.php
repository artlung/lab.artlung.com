<?php
require_once __DIR__ . '/../../loader.php';
$lab = new ArtlungLab\Lab();
$lab->printHeader('Robots-Nocontent');

?>

    <p class="date-attribution">Circa 2008</p>
    <h1 class="p-name">Robots-Nocontent (2008)</h1>

    <p>According to <a
                href="https://web.archive.org/web/20081102201233/http://help.yahoo.com/l/us/yahoo/search/webcrawler/slurp-14.html">this
            2008 Yahoo! Page</a>, it was at one time possible to hide content inside a page from spidering by Yahoo.</p>

    <blockquote>


        <div class="yui-b">
            <!--Begin question-->
            <div id="hlpQ">
                <h2>
                    <question>How do I mark web page content that is extraneous to the main unique content on the
                        page?
                    </question>
                </h2>
            </div>
            <!--End question-->
            <div></div>
            <!--Begin answer-->
            <div id="hlpA" class="article">
                <answer>Web pages often include headers, footers, navigational sections, repeated boilerplate text,
                    copyright notices, ad sections, or dynamic content that is useful to users — but not to search
                    engines. Webmasters can apply the "robots-nocontent" attribute to indicate to search engines any
                    content that is extraneous to the main unique content of the page. Yahoo! Search observes the
                    class="robots-nocontent" present on XHTML elements, such as div, span, and all others.
                    <p></p>

                    When a "robots-nocontent" tag is used to mark a section of content on a web page, Yahoo! will not
                    use the terms contained in that section as information for finding the page or for the abstract of
                    that page in search results. Note: Using a "robots-nocontent" tag to mark explicit sections of
                    content is not considered "cloaking" because all the content on the page is available to us (unlike
                    "cloaking" where we may be served content that is different from what users see.)
                    <p></p>
                    The "robots-nocontent" tag is a useful tool for webmasters.
                    <br>
                    <ul class="bb-list">
                        <li>It can improve our focus on the main content of your pages.</li>
                        <li>It helps target your pages in search results by making sure the appropriate deep page in
                            your site can surface for the right queries.
                        </li>
                        <li>It helps improve the abstracts for your pages in results by identifying unrelated text on
                            the page and thus omitting it from consideration for the search result summaries.
                        </li>
                    </ul>
                    <p></p>
                    When you successfully target your page content, it can increase the likelihood that the user will
                    find your page, find it relevant, click on your result, and convert.
                    <p></p>
                    <span style="font-weight:bold">Applying the "class=robots-nocontent" Attribute:</span>
                    <br>
                    Listed below are several examples of how to apply this attribute for various uses and different
                    syntax options:

                    <ul class="bb-list">
                        <li>
                            <code class="bb-code">&lt;div class="robots-nocontent"&gt;</code> This is the navigational
                            menu of the site and is common on all pages. It contains many terms and keywords not related
                            to this site <code class="bb-code">&lt;/div&gt;</code>
                        </li>
                        <li>
                            <code class="bb-code">&lt;span class="robots-nocontent"&gt;</code> This is the site header
                            that is present on all pages of the site and is not related to any particular page <code
                                    class="bb-code">&lt;/span&gt;</code>
                        </li>
                        <li>
                            <code class="bb-code">&lt;p class="robots-nocontent"&gt;</code>This is a boilerplate legal
                            disclaimer required on each page of the site <code class="bb-code">&lt;/p&gt;</code>
                        </li>
                        <li>
                            <code class="bb-code">&lt;div class="robots-nocontent"&gt;</code> This is a section where
                            ads are displayed on the page. Words that show up in ads may be entirely unrelated to the
                            page contents <code class="bb-code">&lt;/div&gt;</code>
                        </li>
                    </ul>

                    <p></p>
                    This attribute offers webmasters a great deal of flexibility.You can use the
                    "class=robots-nocontent" attribute with all XHTML tags.
                </answer>
            </div>
            <!--End answer-->


            </form>
            <!--End Yes/No form-->
        </div>

    </blockquote>


<?php
$lab->printFooter(
    [
        'comments' => true
    ]
);

