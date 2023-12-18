@php
    $settings  = settings();
    $lang = session()->get('languageName');
@endphp
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') | {{ getAppName() }}</title>
        <link rel="shortcut icon" href="{{ getSettingValue('favicon') }}" type="image/x-icon">
        <link rel="icon" href="{{ getSettingValue('favicon') }}" type="image/x-icon">
        <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" type="text/css">


        <link rel="stylesheet" type="text/css" href="{{ asset('front_web/css/jquery-ui.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/iziToast.min.css') }}">

        <link href="{{asset('assets/css/front-third-party.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('css/front-pages.css') }}" rel="stylesheet" type="text/css">
    <link rel='dns-prefetch' href='//code.jquery.com'>
    <link rel='dns-prefetch' href='//fonts.googleapis.com'>
    <script>
        window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/14.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/jthemes.com\/themes\/wp\/jobbox\/wp-includes\/js\/wp-emoji-release.min.js?ver=6.4.2"}};
        /*! This file is auto-generated */
        !function(i,n){var o,s,e;function c(e){try{var t={supportTests:e,timestamp:(new Date).valueOf()};sessionStorage.setItem(o,JSON.stringify(t))}catch(e){}}function p(e,t,n){e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(t,0,0);var t=new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data),r=(e.clearRect(0,0,e.canvas.width,e.canvas.height),e.fillText(n,0,0),new Uint32Array(e.getImageData(0,0,e.canvas.width,e.canvas.height).data));return t.every(function(e,t){return e===r[t]})}function u(e,t,n){switch(t){case"flag":return n(e,"\ud83c\udff3\ufe0f\u200d\u26a7\ufe0f","\ud83c\udff3\ufe0f\u200b\u26a7\ufe0f")?!1:!n(e,"\ud83c\uddfa\ud83c\uddf3","\ud83c\uddfa\u200b\ud83c\uddf3")&&!n(e,"\ud83c\udff4\udb40\udc67\udb40\udc62\udb40\udc65\udb40\udc6e\udb40\udc67\udb40\udc7f","\ud83c\udff4\u200b\udb40\udc67\u200b\udb40\udc62\u200b\udb40\udc65\u200b\udb40\udc6e\u200b\udb40\udc67\u200b\udb40\udc7f");case"emoji":return!n(e,"\ud83e\udef1\ud83c\udffb\u200d\ud83e\udef2\ud83c\udfff","\ud83e\udef1\ud83c\udffb\u200b\ud83e\udef2\ud83c\udfff")}return!1}function f(e,t,n){var r="undefined"!=typeof WorkerGlobalScope&&self instanceof WorkerGlobalScope?new OffscreenCanvas(300,150):i.createElement("canvas"),a=r.getContext("2d",{willReadFrequently:!0}),o=(a.textBaseline="top",a.font="600 32px Arial",{});return e.forEach(function(e){o[e]=t(a,e,n)}),o}function t(e){var t=i.createElement("script");t.src=e,t.defer=!0,i.head.appendChild(t)}"undefined"!=typeof Promise&&(o="wpEmojiSettingsSupports",s=["flag","emoji"],n.supports={everything:!0,everythingExceptFlag:!0},e=new Promise(function(e){i.addEventListener("DOMContentLoaded",e,{once:!0})}),new Promise(function(t){var n=function(){try{var e=JSON.parse(sessionStorage.getItem(o));if("object"==typeof e&&"number"==typeof e.timestamp&&(new Date).valueOf()<e.timestamp+604800&&"object"==typeof e.supportTests)return e.supportTests}catch(e){}return null}();if(!n){if("undefined"!=typeof Worker&&"undefined"!=typeof OffscreenCanvas&&"undefined"!=typeof URL&&URL.createObjectURL&&"undefined"!=typeof Blob)try{var e="postMessage("+f.toString()+"("+[JSON.stringify(s),u.toString(),p.toString()].join(",")+"));",r=new Blob([e],{type:"text/javascript"}),a=new Worker(URL.createObjectURL(r),{name:"wpTestEmojiSupports"});return void(a.onmessage=function(e){c(n=e.data),a.terminate(),t(n)})}catch(e){}c(n=f(s,u,p))}t(n)}).then(function(e){for(var t in e)n.supports[t]=e[t],n.supports.everything=n.supports.everything&&n.supports[t],"flag"!==t&&(n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&n.supports[t]);n.supports.everythingExceptFlag=n.supports.everythingExceptFlag&&!n.supports.flag,n.DOMReady=!1,n.readyCallback=function(){n.DOMReady=!0}}).then(function(){return e}).then(function(){var e;n.supports.everything||(n.readyCallback(),(e=n.source||{}).concatemoji?t(e.concatemoji):e.wpemoji&&e.twemoji&&(t(e.twemoji),t(e.wpemoji)))}))}((window,document),window._wpemojiSettings);
    </script>
    <style id='wp-emoji-styles-inline-css'>

        img.wp-smiley, img.emoji {
            display: inline !important;
            border: none !important;
            box-shadow: none !important;
            height: 1em !important;
            width: 1em !important;
            margin: 0 0.07em !important;
            vertical-align: -0.1em !important;
            background: none !important;
            padding: 0 !important;
        }
    </style>
    <style id='global-styles-inline-css'>
        body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--foreground: #000000;--wp--preset--color--background: #ffffff;--wp--preset--color--primary: #1a4548;--wp--preset--color--secondary: #ffe2c7;--wp--preset--color--tertiary: #F6F6F6;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--gradient--vertical-secondary-to-tertiary: linear-gradient(to bottom,var(--wp--preset--color--secondary) 0%,var(--wp--preset--color--tertiary) 100%);--wp--preset--gradient--vertical-secondary-to-background: linear-gradient(to bottom,var(--wp--preset--color--secondary) 0%,var(--wp--preset--color--background) 100%);--wp--preset--gradient--vertical-tertiary-to-background: linear-gradient(to bottom,var(--wp--preset--color--tertiary) 0%,var(--wp--preset--color--background) 100%);--wp--preset--gradient--diagonal-primary-to-foreground: linear-gradient(to bottom right,var(--wp--preset--color--primary) 0%,var(--wp--preset--color--foreground) 100%);--wp--preset--gradient--diagonal-secondary-to-background: linear-gradient(to bottom right,var(--wp--preset--color--secondary) 50%,var(--wp--preset--color--background) 50%);--wp--preset--gradient--diagonal-background-to-secondary: linear-gradient(to bottom right,var(--wp--preset--color--background) 50%,var(--wp--preset--color--secondary) 50%);--wp--preset--gradient--diagonal-tertiary-to-background: linear-gradient(to bottom right,var(--wp--preset--color--tertiary) 50%,var(--wp--preset--color--background) 50%);--wp--preset--gradient--diagonal-background-to-tertiary: linear-gradient(to bottom right,var(--wp--preset--color--background) 50%,var(--wp--preset--color--tertiary) 50%);--wp--preset--font-size--small: var(--jobbox-font-sm);--wp--preset--font-size--medium: var(--jobbox-font-md);--wp--preset--font-size--large: var(--jobbox-font-lg);--wp--preset--font-size--x-large: var(--jobbox-font-xl);--wp--preset--font-size--2-x-large: var(--jobbox-font-2xl);--wp--preset--font-size--3-x-large: var(--jobbox-font-3xl);--wp--preset--font-family--system-font: var(--jobbox-font-text);--wp--preset--spacing--20: 0.44rem;--wp--preset--spacing--30: 0.67rem;--wp--preset--spacing--40: 1rem;--wp--preset--spacing--50: 1.5rem;--wp--preset--spacing--60: 2.25rem;--wp--preset--spacing--70: 3.38rem;--wp--preset--spacing--80: 5.06rem;--wp--preset--shadow--natural: 6px 6px 9px rgba(0, 0, 0, 0.2);--wp--preset--shadow--deep: 12px 12px 50px rgba(0, 0, 0, 0.4);--wp--preset--shadow--sharp: 6px 6px 0px rgba(0, 0, 0, 0.2);--wp--preset--shadow--outlined: 6px 6px 0px -3px rgba(255, 255, 255, 1), 6px 6px rgba(0, 0, 0, 1);--wp--preset--shadow--crisp: 6px 6px 0px rgba(0, 0, 0, 1);--wp--custom--spacing--small: max(1.25rem, 5vw);--wp--custom--spacing--medium: clamp(2rem, 8vw, calc(4 * var(--wp--style--block-gap)));--wp--custom--spacing--large: clamp(4rem, 10vw, 8rem);--wp--custom--spacing--outer: var(--wp--custom--spacing--small, 1.25rem);--wp--custom--typography--font-size--huge: clamp(2.25rem, 4vw, 2.75rem);--wp--custom--typography--font-size--gigantic: clamp(2.75rem, 6vw, 3.25rem);--wp--custom--typography--font-size--colossal: clamp(3.25rem, 8vw, 6.25rem);--wp--custom--typography--line-height--tiny: 1.15;--wp--custom--typography--line-height--small: 1.2;--wp--custom--typography--line-height--medium: 1.4;--wp--custom--typography--line-height--normal: 1.6;}body { margin: 0;--wp--style--global--content-size: 733px;--wp--style--global--wide-size: 1100px; }.wp-site-blocks > .alignleft { float: left; margin-right: 2em; }.wp-site-blocks > .alignright { float: right; margin-left: 2em; }.wp-site-blocks > .aligncenter { justify-content: center; margin-left: auto; margin-right: auto; }:where(.wp-site-blocks) > * { margin-block-start: 1.5rem; margin-block-end: 0; }:where(.wp-site-blocks) > :first-child:first-child { margin-block-start: 0; }:where(.wp-site-blocks) > :last-child:last-child { margin-block-end: 0; }body { --wp--style--block-gap: 1.5rem; }:where(body .is-layout-flow)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-flow)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-flow)  > *{margin-block-start: 1.5rem;margin-block-end: 0;}:where(body .is-layout-constrained)  > :first-child:first-child{margin-block-start: 0;}:where(body .is-layout-constrained)  > :last-child:last-child{margin-block-end: 0;}:where(body .is-layout-constrained)  > *{margin-block-start: 1.5rem;margin-block-end: 0;}:where(body .is-layout-flex) {gap: 1.5rem;}:where(body .is-layout-grid) {gap: 1.5rem;}body .is-layout-flow > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-flow > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-flow > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignleft{float: left;margin-inline-start: 0;margin-inline-end: 2em;}body .is-layout-constrained > .alignright{float: right;margin-inline-start: 2em;margin-inline-end: 0;}body .is-layout-constrained > .aligncenter{margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > :where(:not(.alignleft):not(.alignright):not(.alignfull)){max-width: var(--wp--style--global--content-size);margin-left: auto !important;margin-right: auto !important;}body .is-layout-constrained > .alignwide{max-width: var(--wp--style--global--wide-size);}body .is-layout-flex{display: flex;}body .is-layout-flex{flex-wrap: wrap;align-items: center;}body .is-layout-flex > *{margin: 0;}body .is-layout-grid{display: grid;}body .is-layout-grid > *{margin: 0;}body{background-color: var(--jobbox-color-white);color: var(--jobbox-color-brand);font-family: var(--jobbox-font-text);font-size: var(--jobbox-font-md);line-height: 1.5;padding-top: 0px;padding-right: 0px;padding-bottom: 0px;padding-left: 0px;}a:where(:not(.wp-element-button)){color: var(--wp--preset--color--foreground);text-decoration: underline;}h1{font-family: var(--jobbox-font-heading);font-size: var(--jobbox-font-3xl);font-weight: 800;line-height: 1.268;}h2{font-family: var(--jobbox-font-heading);font-size: 36px;font-weight: 700;line-height: 1.25;}h3{font-family: var(--jobbox-font-heading);font-size: 28px;font-weight: 700;line-height: 1.25;}h4{font-family: var(--jobbox-font-heading);font-size: 24px;font-weight: 700;line-height: 1.25;}h5{font-family: var(--jobbox-font-heading);font-size: var(--jobbox-font-xl);font-weight: 700;line-height: 1.3;}h6{font-family: var(--wp--preset--font-family--system-font);font-size: var(--wp--preset--font-size--medium);line-height: var(--wp--custom--typography--line-height--normal);}.wp-element-button, .wp-block-button__link{background-color: #32373c;border-width: 0;color: #fff;font-family: inherit;font-size: inherit;line-height: inherit;padding: calc(0.667em + 2px) calc(1.333em + 2px);text-decoration: none;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-foreground-color{color: var(--wp--preset--color--foreground) !important;}.has-background-color{color: var(--wp--preset--color--background) !important;}.has-primary-color{color: var(--wp--preset--color--primary) !important;}.has-secondary-color{color: var(--wp--preset--color--secondary) !important;}.has-tertiary-color{color: var(--wp--preset--color--tertiary) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-foreground-background-color{background-color: var(--wp--preset--color--foreground) !important;}.has-background-background-color{background-color: var(--wp--preset--color--background) !important;}.has-primary-background-color{background-color: var(--wp--preset--color--primary) !important;}.has-secondary-background-color{background-color: var(--wp--preset--color--secondary) !important;}.has-tertiary-background-color{background-color: var(--wp--preset--color--tertiary) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-foreground-border-color{border-color: var(--wp--preset--color--foreground) !important;}.has-background-border-color{border-color: var(--wp--preset--color--background) !important;}.has-primary-border-color{border-color: var(--wp--preset--color--primary) !important;}.has-secondary-border-color{border-color: var(--wp--preset--color--secondary) !important;}.has-tertiary-border-color{border-color: var(--wp--preset--color--tertiary) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-vertical-secondary-to-tertiary-gradient-background{background: var(--wp--preset--gradient--vertical-secondary-to-tertiary) !important;}.has-vertical-secondary-to-background-gradient-background{background: var(--wp--preset--gradient--vertical-secondary-to-background) !important;}.has-vertical-tertiary-to-background-gradient-background{background: var(--wp--preset--gradient--vertical-tertiary-to-background) !important;}.has-diagonal-primary-to-foreground-gradient-background{background: var(--wp--preset--gradient--diagonal-primary-to-foreground) !important;}.has-diagonal-secondary-to-background-gradient-background{background: var(--wp--preset--gradient--diagonal-secondary-to-background) !important;}.has-diagonal-background-to-secondary-gradient-background{background: var(--wp--preset--gradient--diagonal-background-to-secondary) !important;}.has-diagonal-tertiary-to-background-gradient-background{background: var(--wp--preset--gradient--diagonal-tertiary-to-background) !important;}.has-diagonal-background-to-tertiary-gradient-background{background: var(--wp--preset--gradient--diagonal-background-to-tertiary) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}.has-2-x-large-font-size{font-size: var(--wp--preset--font-size--2-x-large) !important;}.has-3-x-large-font-size{font-size: var(--wp--preset--font-size--3-x-large) !important;}.has-system-font-font-family{font-family: var(--wp--preset--font-family--system-font) !important;}
        .wp-block-navigation a:where(:not(.wp-element-button)){color: inherit;}
        .wp-block-pullquote{border-width: 1px 0;font-size: 1.5em;line-height: 1.6;}
        .wp-block-button .wp-block-button__link{background-color: var(--wp--preset--color--primary);border-radius: 0;color: var(--wp--preset--color--background);font-size: var(--wp--preset--font-size--medium);}
        .wp-block-image img, .wp-block-image .wp-block-image__crop-area, .wp-block-image .components-placeholder{border-radius: 15px;}
        .wp-block-cover{border-radius: 15px;}
        .wp-block-post-title{font-family: var(--jobbox-font-heading);font-size: 36px;font-weight: 700;line-height: 1.25;}
        .wp-block-post-comments{padding-top: var(--wp--custom--spacing--small);}
        .wp-block-query-title{font-family: var(--jobbox-font-heading);font-size: 36px;font-weight: 700;line-height: 1.25;}
        .wp-block-quote{border-width: 1px;}
        .wp-block-site-title{font-family: var(--jobbox-font-heading);font-size: var(--wp--preset--font-size--medium);font-style: italic;font-weight: normal;line-height: var(--wp--custom--typography--line-height--normal);}
    </style>
    <link rel='stylesheet' id='contact-form-7-css' href="{{asset('new_template/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.8.4') }}" media='all'>
    <link rel='stylesheet' id='wp-job-manager-bookmarks-frontend-css' href="{{asset('new_template/wp-content/plugins/control-job-manager/vendor/bookmarks/assets/dist/css/frontend.css?ver=1.1.7') }}" media='all'>
    <link rel='stylesheet' id='wp-job-manager-tags-frontend-css' href="{{asset('new_template/wp-content/plugins/control-job-manager/vendor/tags/assets/dist/css/frontend.css?ver=1.1.7') }}" media='all'>
    <link rel='stylesheet' id='jm-application-deadline-css' href="{{asset('new_template/wp-content/plugins/control-job-manager/vendor/application-deadline/assets/dist/css/frontend.css?ver=1.1.7') }}" media=''>
    <style id='woocommerce-inline-inline-css'>
        .woocommerce form .form-row .required { visibility: visible; }
    </style>
    <link rel='stylesheet' id='wp-job-manager-job-listings-css' href="{{ asset('new_template/wp-content/plugins/wp-job-manager/assets/dist/css/job-listings.css?ver=598383a28ac5f9f156e4') }}" media='all'>
    <link rel='stylesheet' id='jobbox-normalize-css' href="{{ asset('new_template/wp-content/themes/jobbox/assets/css/vendors/normalize.css?ver=8.0.1') }}" media='all'>
    <link rel='stylesheet' id='bootstrap-css' href="{{ asset('new_template/wp-content/themes/jobbox/assets/css/bootstrap/bootstrap.css?ver=5.2.2') }}" media='all'>
    <link rel='stylesheet' id='jobbox-uicons-css' href="{{ asset('new_template/wp-content/themes/jobbox/assets/css/vendors/uicons-regular-rounded.css?ver=1.0.0') }}" media='all'>
    <link rel='stylesheet' id='fontawesome-css' href="{{ asset('new_template/wp-content/themes/jobbox/assets/css/all.min.css?ver=6.2.0') }}" media='all'>
    <link rel='stylesheet' id='jobbox-swiper-css' href="{{ asset('new_template/wp-content/themes/jobbox/assets/css/plugins/swiper-bundle.min.css?ver=8.3.2') }}" media='all'>
    <link rel='stylesheet' id='jobbox-magnific-css' href="{{asset(new_template/wp-content/themes/jobbox/assets/css/plugins/magnific-popup.css?ver=1.1.0')}}" media='all'>
    <link rel='stylesheet' id='jobbox-select2-css' href="{{asset('new_template/wp-content/themes/jobbox/assets/css/plugins/select2.min.css?ver=1.0.0')}}" media='all'>
    <link rel='stylesheet' id='jobbox-perfect-scrollbar-css' href="{{asset('new_template/wp-content/themes/jobbox/assets/css/plugins/perfect-scrollbar.css?ver=1.0.0')}}" media='all'>
    <link rel='stylesheet' id='jobbox-animate-css' href="{{asset('new_template/wp-content/themes/jobbox/assets/css/plugins/animate.min.css?ver=3.5.2')}}" media='all'>
    <link rel='stylesheet' id='jobbox-theme-css' href="{{asset('new_template/wp-content/themes/jobbox/assets/css/theme.css?ver=1.0.0')}}" media='all'>
    <link rel='stylesheet' id='jobbox-style-css' href="{{asset('new_template/wp-content/themes/jobbox/assets/css/style.css?ver=1.0.0')}}" media='all'>
    <link rel='stylesheet' id='woocommerce-css' href="{{asset('new_template/wp-content/themes/jobbox/assets/css/woocommerce.css?ver=1.2.0')}}" media='all'>
    <link rel='stylesheet' id='wp-job-manager-css' href="{{asset('new_template/wp-content/themes/jobbox/assets/css/wp-job-manager.css?ver=1.2.0')}}" media='all'>
    <link rel='stylesheet' id='jobbox-css' href="{{asset('new_template/wp-content/themes/jobbox/style.css?ver=6.4.2')}}" media='all'>
    <style id='jobbox-inline-css'>
        :root{--jobbox-font-heading: Plus Jakarta Sans;
            --jobbox-font-text: Plus Jakarta Sans; --jobbox-font-3xs: 10px;
            --jobbox-font-xxs: 10px;
            --jobbox-font-xs: 12px;
            --jobbox-font-sm: 14px;
            --jobbox-font-md: 16px;
            --jobbox-font-md-2: 15px;
            --jobbox-font-lg: 18px;
            --jobbox-font-xl: 20px;
            --jobbox-font-2xl: 22px;
            --jobbox-font-3xl: 56px; --jobbox-color-brand: #05264E;
            --jobbox-color-brand-2: #3C65F5;
            --jobbox-color-white: #ffffff;
            --jobbox-color-green: #85FF83;
            --jobbox-color-text-paragraph: #4F5E64;
            --jobbox-color-text-paragraph-2: #66789C;
            --jobbox-color-text-mutted: #A0ABB8;
            --jobbox-color-border-1: #B4C0E0;
            --jobbox-color-border-2: #E0E6F7;
            --jobbox-color-border-3: #EFF2FB;
            --jobbox-color-black-1: #253D4E; --jobbox-background-1: #f2f3f4;
            --jobbox-background-2: #f4f6fa;
            --jobbox-background-3: #def9ec;
            --jobbox-background-4: #72e0bf;
            --jobbox-background-5: #F8FAFF;
            --jobbox-background-6: #EFF3FC;
            --jobbox-background-7: #F2F6FD;
            --jobbox-background-8: rgba(81,146,255,0.12);
            --jobbox-background-9: #EFF7FF;
            --jobbox-background-10: #bee2ae;
            --jobbox-background-11: #9fdbe9;
            --jobbox-background-12: #9FB5FF;
            --jobbox-background-13: #5aa6ff;
            --jobbox-background-14: #D8F1FF;
            --jobbox-background-15: #F4F7FF;
            --jobbox-background-16: rgba(81,146,255,0.12);
            --jobbox-background-white: #ffffff;
            --jobbox-background-green: #3AAB67;
            --jobbox-background-orange: #F58A3C;
            --jobbox-background-pink: #D159E4;
            --jobbox-background-urgent: #FFF6F1;
            --jobbox-background-brand: #9777fa;
            --jobbox-background-head-single: #FFF9F3;
            --jobbox-background-blue-light-2: #E9F7FF;
            --jobbox-background-primary-trans: rgba(81,146,255,0.3);
            --jobbox-background-primary: rgba(81,146,255,1);
            --jobbox-background-grey: rgba(186,186,186,0.3);
            --jobbox-background-success: #00c070; --jobbox-border-color: #E0E6F6;
            --jobbox-border-color-1: rgba(6,18,36,0.1);
            --jobbox-border-color-3: rgba(26,15,9,0.1);
            --jobbox-border-color-4: rgba(26,15,9,0.1);
            --jobbox-border-color-5: rgba(165,165,165,1); }.card{--bs-card-border-color: var(--jobbox-color-border-2);}.header-logo{--jobbox-logo-size: 150px;}.header-logo{--jobbox-logo-size-sm: 150px;}
    </style>
    <link rel='stylesheet' id='control-elementor-css' href="{{asset('new_template/wp-content/plugins/control-elementor/assets/css/control-elementor.css?ver=1.0.0')}}" media='all'>
    <link rel='stylesheet' id='elementor-icons-css' href="{{asset('new_template/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.25.0')}}" media='all'>
    <link rel='stylesheet' id='elementor-frontend-css' href="{{asset('new_template/wp-content/plugins/elementor/assets/css/frontend-lite.min.css?ver=3.18.1')}}" media='all'>
    <link rel='stylesheet' id='swiper-css' href="{{asset('new_template/wp-content/plugins/elementor/assets/lib/swiper/css/swiper.min.css?ver=5.3.6')}}" media='all'>
    <link rel='stylesheet' id='elementor-post-2295-css' href="{{asset('new_template/wp-content/uploads/elementor/css/post-2295.css?ver=1701925551')}}" media='all'>
    <link rel='stylesheet' id='elementor-global-css' href="{{asset('new_template/wp-content/uploads/elementor/css/global.css?ver=1701925552')}}" media='all'>
    <link rel='stylesheet' id='elementor-post-97-css' href="{{asset('new_template/wp-content/uploads/elementor/css/post-97.css?ver=1701925552')}}" media='all'>
    <link rel='stylesheet' id='control-block-patterns-css' href="{{asset('new_template/wp-content/plugins/control-block-patterns/assets/css/control-block-patterns.css?ver=1.3.5.4')}}" media='all'>
    <style id='control-block-patterns-inline-css'>
        .stick + .main{padding-top: 77px;}
    </style>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin=""><script src="{{asset('wp-includes/js/jquery/jquery.min.js?ver=3.7.1)}}" id="jquery-core-js"></script>
    <script src="{{asset('wp-includes/js/jquery/jquery-migrate.min.js?ver=3.4.1)}}" id="jquery-migrate-js"></script>
    <script src="{{asset('new_template/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.7.0-wc.8.3.1)}}" id="jquery-blockui-js" defer="" data-wp-strategy="defer"></script>
    <script id="wc-add-to-cart-js-extra">
        var wc_add_to_cart_params = {"ajax_url":"\/themes\/wp\/jobbox\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/themes\/wp\/jobbox\/?wc-ajax=%%endpoint%%","i18n_view_cart":"View cart","cart_url":"https:\/\/jthemes.com\/themes\/wp\/jobbox\/cart\/","is_cart":"","cart_redirect_after_add":"no"};
    </script>
    <script src="{{asset('new_template/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=8.3.1)}}" id="wc-add-to-cart-js" defer="" data-wp-strategy="defer"></script>
    <script src="{{asset('new_template/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4-wc.8.3.1)}}" id="js-cookie-js" defer="" data-wp-strategy="defer"></script>
    <script id="woocommerce-js-extra">
        var woocommerce_params = {"ajax_url":"\/themes\/wp\/jobbox\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/themes\/wp\/jobbox\/?wc-ajax=%%endpoint%%"};
    </script>
    <script src="{{asset('new_template/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=8.3.1)}}" id="woocommerce-js" defer="" data-wp-strategy="defer"></script>
    <link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://jthemes.com/themes/wp/jobbox/xmlrpc.php?rsd" >

    <link rel="alternate" type="application/json+oembed" href="{{asset ('new_template/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fjthemes.com%2Fthemes%2Fwp%2Fjobbox%2F') }}" >
    <link rel="alternate" type="text/xml+oembed" href="{{asset ('new_template/wp-json/oembed/1.0/embed-1?url=https%3A%2F%2Fjthemes.com%2Fthemes%2Fwp%2Fjobbox%2F&#038;format=xml')  }}" >
    <noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>
    <style id="wp-custom-css">
        body .mt-5{
            margin-top: 5px !important;
        }
        body .mb-5{
            margin-bottom: 5px !important;
        }
        body .pt-5{
            padding-top: 5px !important;
        }
        body .pb-5{
            padding-top: 5px !important;
        }
        .select2-container--open .select2-dropdown--below {
            border-top: 1px solid #dae0e5;
        }		</style>
</head>

    @yield('page_scripts')
    @foreach(googleJobSchema() as $jobSchema)
        {!! nl2br($jobSchema) !!}
    @endforeach
    </head>
    <body {{$lang == 'pt' || $lang == 'fr' || $lang == 'es' ? 'languages' : ''}}>
    <span class="header-padding"></span>
    @include('front_web.layouts.header')

    @yield('content')

    <!-- Footer Start -->
    @if(Request::segment(1)!='candidate-register' && Request::segment(1)!= 'employer-register'&& Request::segment(1)!='users')
        @include('front_web.layouts.footer')
    @endif
    <!-- Footer End -->
    {{Form::hidden('createNewLetterUrl',route('news-letter.create'),['id'=>'createNewLetterUrl'])}}
    <script data-turbo-eval="false">
        let defaultCountryCodeValue = "{{ getSettingValue('default_country_code')}}"
    </script>
    </body>
</html>
