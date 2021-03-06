<!-- PIERRE -->
<section data-background-image='./lib/images/background_pierre.png'>
    <section>
        <h2>It's time for a new stack !</h2>
        <ul>
            <li>Inspired by roots/bedrock</li>
            <li>Folder structure</li>
            <li>Dependencies</li>
            <li>Versionning</li>
            <li>Environments</li>
            <li>Theming</li>
            <li>Performances</li>
            <li>Security</li>
        </ul>
        <aside class="notes">
            Comments
        </aside>
    </section>

    <section>
        <h2>Welcome to ...</h2>
        <img class="fragment"  src="./lib/images/logo/wp-cubi.png" alt="wp-cubi" style="border:none;box-shadow: none;"/>
        <aside class="notes">
            Comments
        </aside>
    </section>

    <section>
        <h2>What's inside ?</h2>
        <pre class="fragment" style="font-size: 0.5em;background: #3f3f3f;color: #dcdcdc; font-weight:bolder;">
|-- .robo
|-- .rsyncignore
|-- RoboFile.php
|-- composer.json
|-- config/
|   |-- application.php
|   |-- environments/
|   |-- htaccess/
|   |-- local.php.sample
|   |-- salt-keys.php
|   |-- vars.php
|-- phpcs.xml
|-- vendor/
|-- web/
|   |-- .htaccess
|   |-- .user.ini
|   |-- app/
|   |   |-- languages/
|   |   |-- modules/
|   |   |-- mu-modules/
|   |   |-- themes/
|   |-- index.php
|   |-- media/
|   |-- wp/
`-- wp-cli.yml
        </pre>
    </section>

    <section>
        <h2>Goodbye Phing, Hello Robo</h2>
        <ul>
            <li>PHP OOP task runner</li>
            <li>Continuous integration</li>
            <li>Globalis / WP base tasks</li>
            <li>RoboFile.php</li>
        </ul>
        <aside class="notes">
            Comments
        </aside>
    </section>

    <section>
        <h2>(mu-)plugins stack</h2>
        <ul style="margin-bottom:30px">
            <li>advanced-custom-fields</li>
            <li>security (disable-rest-api / disable-xmlrpc)</li>
            <li>debug/monitoring (environment info, mail-trapping, query-monitor, wp-crontrol, user-switching)</li>
            <li>optimization (soil, ewww-image-optimize)</li>
            <li>SEO (seo-framework, disallow-indexing)</li>
            <li>and many others (plugins autoloader, wpg-custom-login ... )</li>
        </ul>
        <aside class="notes">
            Comments
        </aside>
    </section>

    <section>
        <h2>Sage and Globbox</h2>
        <ul>
            <li>Theme structure</li>
            <li>Sass preprocessing</li>
            <li>Template wrapping</li>
            <li>Cache buster</li>
            <li>Image optimization</li>
        </ul>
        <aside class="notes">
            Comments
        </aside>
    </section>

    <section>
        <h2>What next ?</h2>
        <video data-autoplay loop style="width: 55%;" src="./lib/videos/wordpress.mp4"></video>
    </section>

</section>
