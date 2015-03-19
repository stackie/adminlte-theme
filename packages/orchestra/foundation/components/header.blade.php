<?php

$title = get_meta('title');
$description = get_meta('description'); ?>

<section class="content-header">
    <h1>
        {!! $title or '' !!}
        @if (! empty($description))
        <small>{!! $description or '' !!}</small>
        @endif
    </h1>
</section>
