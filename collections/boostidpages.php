<?php

return function ($site) {
    // NOTE: this does not have a cached since cached content is assumed
    // NOTE: this collection does not include drafts
    // PERFORMANCE ISSUE: https://github.com/getkirby/kirby/issues/3746
    $drafts = option('bnomei.boost.drafts');
    return $site->index($drafts)->filter(function ($page) {
        return $page->hasBoost() === true;
    });
};
