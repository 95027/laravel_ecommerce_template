<template><div><h2 id="overview" tabindex="-1"><a class="header-anchor" href="#overview"><span>Overview</span></a></h2>
<p>This guide will help you set up and run a Laravel project integrated with VuePress for documentation. The application supports user authentication, role management, payment integration, mails sending and much more.</p>
<h2 id="requirements" tabindex="-1"><a class="header-anchor" href="#requirements"><span>Requirements</span></a></h2>
<ul>
<li>
<p><strong>PHP</strong>: Ensure you have PHP version <code v-pre>^8.1</code> or above installed on your machine.</p>
</li>
<li>
<p><strong>Laravel</strong>: This project requires Laravel version <code v-pre>^11.0</code>.</p>
</li>
<li>
<p><strong>Node.js</strong>: Ensure that Node.js is installed for running scripts. You can download it from <a href="https://nodejs.org/" target="_blank" rel="noopener noreferrer">nodejs.org</a>.</p>
</li>
<li>
<p><strong>Composer</strong>: Composer is required for managing PHP dependencies. You can install it by following the instructions on <a href="https://getcomposer.org/download/" target="_blank" rel="noopener noreferrer">getcomposer.org</a>.</p>
</li>
</ul>
<h2 id="installation" tabindex="-1"><a class="header-anchor" href="#installation"><span>Installation</span></a></h2>
<ul>
<li>
<p><strong>Clone the repository:</strong>: git clone <code v-pre>repository-url</code> cd <code v-pre>project-directory</code></p>
</li>
<li>
<p><strong>Laravel</strong>: Install PHP dependencies: <code v-pre>composer install</code>.</p>
</li>
<li>
<p><strong>Install Node.js dependencies:</strong>: <code v-pre>npm install</code></p>
</li>
<li>
<p><strong>Set up your environment file:</strong>: Copy the example <code v-pre>.env.example</code> file</p>
</li>
<li>
<p><strong>Generate application key:</strong>: <code v-pre>php artisan key:generate</code></p>
</li>
</ul>
<h2 id="configuration" tabindex="-1"><a class="header-anchor" href="#configuration"><span>Configuration</span></a></h2>
<ul>
<li>
<p>Configure your <code v-pre>.env</code> file to set database connection details and other environment-specific settings.</p>
</li>
<li>
<p>Go through your authentication guards and user providers as needed in <code v-pre>config/auth.php</code>.</p>
</li>
<li>
<p>Set up CORS in <code v-pre>config/cors.php</code> to allow cross-origin requests for your API.</p>
</li>
</ul>
<h2 id="running-the-project" tabindex="-1"><a class="header-anchor" href="#running-the-project"><span>Running the Project</span></a></h2>
<ul>
<li>To start the Laravel server, run: <code v-pre>php artisan serve</code>.</li>
<li>To run the VuePress documentation server, execute: <code v-pre>npm run docs:dev</code>.</li>
</ul>
<h2 id="authentication" tabindex="-1"><a class="header-anchor" href="#authentication"><span>Authentication</span></a></h2>
<p>This application uses Laravel breeze for web routes and Sanctum for API authentication. You can authenticate users through the following guards:</p>
<ul>
<li><strong>web:</strong> For regular users.</li>
<li><strong>admin:</strong> For admin access.</li>
<li><strong>vendor:</strong> For vendor access.</li>
<li><strong>employee:</strong> For different roles and permissions using employees table.</li>
<li><strong>api:</strong> For API requests.</li>
</ul>
<h2 id="payments" tabindex="-1"><a class="header-anchor" href="#payments"><span>Payments</span></a></h2>
<p>Stripe is integrated for handling payments. You need to configure your Stripe credentials in the <code v-pre>.env</code> file and set up routes for processing payments through your application.</p>
</div></template>


