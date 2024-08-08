<?php

namespace Empyrealinfotech\Permission;

use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Inspiring;

class Permission {
    public function justDoIt() {
        $quoteArr = explode('</>', Inspiring::quote());
        $quote = str_replace('<options=bold>', '', $quoteArr[0]);
        $quoteAuthor = str_replace('<fg=gray>— ', '', $quoteArr[1]);

        return $quote . ' -' . $quoteAuthor;
    }
}
