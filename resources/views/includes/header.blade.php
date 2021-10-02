<!-- Main jumbotron for a primary marketing message or call to action -->
<div class="jumbotron">
    <div class="container">
        <button><a href="/" title="{{ __('misc.home_alt') }}" alt="{{ __('misc.home_alt') }}">
            <h1>{{ __('misc.homepage_title') }}</h1></button>
        </a>
        <?php
        echo"<pre>";
        print_r($brand)
        ?>
        @yield('introduction_text')
    </div>
</div>
