<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Fusionball - Support your team</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
  <!-- 
    - favicon
  -->
  <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

  <!-- 
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/clients/client-2/assets/css/client-2.css">

  <!-- 
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        <!-- Styles / Scripts -->
        @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
            @vite(['resources/css/app.css', 'resources/js/app.js'])
        @else
            <style>
                /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,:before,:after{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x: 0;--tw-border-spacing-y: 0;--tw-translate-x: 0;--tw-translate-y: 0;--tw-rotate: 0;--tw-skew-x: 0;--tw-skew-y: 0;--tw-scale-x: 1;--tw-scale-y: 1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness: proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width: 0px;--tw-ring-offset-color: #fff;--tw-ring-color: rgb(59 130 246 / .5);--tw-ring-offset-shadow: 0 0 #0000;--tw-ring-shadow: 0 0 #0000;--tw-shadow: 0 0 #0000;--tw-shadow-colored: 0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }*,:before,:after{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}:before,:after{--tw-content: ""}html,:host{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;-o-tab-size:4;tab-size:4;font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,samp,pre{font-family:ui-monospace,SFMono-Regular,Menlo,Monaco,Consolas,Liberation Mono,Courier New,monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dl,dd,h1,h2,h3,h4,h5,h6,hr,figure,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}ol,ul,menu{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::-moz-placeholder,textarea::-moz-placeholder{opacity:1;color:#9ca3af}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}button,[role=button]{cursor:pointer}:disabled{cursor:default}img,svg,video,canvas,audio,iframe,embed,object{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}.absolute{position:absolute}.relative{position:relative}.-bottom-16{bottom:-4rem}.-left-16{left:-4rem}.-left-20{left:-5rem}.top-0{top:0}.z-0{z-index:0}.\!row-span-1{grid-row:span 1 / span 1!important}.-mx-3{margin-left:-.75rem;margin-right:-.75rem}.-ml-px{margin-left:-1px}.ml-3{margin-left:.75rem}.mt-4{margin-top:1rem}.mt-6{margin-top:1.5rem}.flex{display:flex}.inline-flex{display:inline-flex}.table{display:table}.grid{display:grid}.\!hidden{display:none!important}.hidden{display:none}.aspect-video{aspect-ratio:16 / 9}.size-12{width:3rem;height:3rem}.size-5{width:1.25rem;height:1.25rem}.size-6{width:1.5rem;height:1.5rem}.h-12{height:3rem}.h-40{height:10rem}.h-5{height:1.25rem}.h-full{height:100%}.min-h-screen{min-height:100vh}.w-5{width:1.25rem}.w-\[calc\(100\%_\+_8rem\)\]{width:calc(100% + 8rem)}.w-auto{width:auto}.w-full{width:100%}.max-w-2xl{max-width:42rem}.max-w-\[877px\]{max-width:877px}.flex-1{flex:1 1 0%}.shrink-0{flex-shrink:0}.transform{transform:translate(var(--tw-translate-x),var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.cursor-default{cursor:default}.resize{resize:both}.grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.\!flex-row{flex-direction:row!important}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-center{align-items:center}.items-stretch{align-items:stretch}.justify-end{justify-content:flex-end}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.justify-items-center{justify-items:center}.gap-2{gap:.5rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.self-center{align-self:center}.overflow-hidden{overflow:hidden}.rounded-\[10px\]{border-radius:10px}.rounded-full{border-radius:9999px}.rounded-lg{border-radius:.5rem}.rounded-md{border-radius:.375rem}.rounded-sm{border-radius:.125rem}.rounded-l-md{border-top-left-radius:.375rem;border-bottom-left-radius:.375rem}.rounded-r-md{border-top-right-radius:.375rem;border-bottom-right-radius:.375rem}.border{border-width:1px}.border-gray-300{--tw-border-opacity: 1;border-color:rgb(209 213 219 / var(--tw-border-opacity, 1))}.bg-\[\#FF2D20\]\/10{background-color:#ff2d201a}.bg-gray-50{--tw-bg-opacity: 1;background-color:rgb(249 250 251 / var(--tw-bg-opacity, 1))}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-gradient-to-b{background-image:linear-gradient(to bottom,var(--tw-gradient-stops))}.from-transparent{--tw-gradient-from: transparent var(--tw-gradient-from-position);--tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)}.via-white{--tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)}.to-white{--tw-gradient-to: #fff var(--tw-gradient-to-position)}.to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.stroke-\[\#FF2D20\]{stroke:#ff2d20}.object-cover{-o-object-fit:cover;object-fit:cover}.object-top{-o-object-position:top;object-position:top}.p-6{padding:1.5rem}.px-2{padding-left:.5rem;padding-right:.5rem}.px-3{padding-left:.75rem;padding-right:.75rem}.px-4{padding-left:1rem;padding-right:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-10{padding-top:2.5rem;padding-bottom:2.5rem}.py-16{padding-top:4rem;padding-bottom:4rem}.py-2{padding-top:.5rem;padding-bottom:.5rem}.pt-3{padding-top:.75rem}.text-center{text-align:center}.font-sans{font-family:Figtree,ui-sans-serif,system-ui,sans-serif,"Apple Color Emoji","Segoe UI Emoji",Segoe UI Symbol,"Noto Color Emoji"}.text-sm{font-size:.875rem;line-height:1.25rem}.text-sm\/relaxed{font-size:.875rem;line-height:1.625}.text-xl{font-size:1.25rem;line-height:1.75rem}.font-medium{font-weight:500}.font-semibold{font-weight:600}.leading-5{line-height:1.25rem}.text-black{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.text-black\/50{color:#00000080}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline{text-decoration-line:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\]{--tw-shadow: 0px 14px 34px 0px rgba(0,0,0,.08);--tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.shadow-sm{--tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);--tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.ring-1{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.ring-black{--tw-ring-opacity: 1;--tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))}.ring-gray-300{--tw-ring-opacity: 1;--tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))}.ring-transparent{--tw-ring-color: transparent}.ring-white{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.ring-white\/\[0\.05\]{--tw-ring-color: rgb(255 255 255 / .05)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.06));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\]{--tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0,0,0,.25));filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.filter{filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.transition{transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,-webkit-backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter;transition-property:color,background-color,border-color,text-decoration-color,fill,stroke,opacity,box-shadow,transform,filter,backdrop-filter,-webkit-backdrop-filter;transition-timing-function:cubic-bezier(.4,0,.2,1);transition-duration:.15s}.duration-150{transition-duration:.15s}.duration-300{transition-duration:.3s}.ease-in-out{transition-timing-function:cubic-bezier(.4,0,.2,1)}.selection\:bg-\[\#FF2D20\] *::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\] *::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white *::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white *::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:bg-\[\#FF2D20\]::-moz-selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:bg-\[\#FF2D20\]::selection{--tw-bg-opacity: 1;background-color:rgb(255 45 32 / var(--tw-bg-opacity, 1))}.selection\:text-white::-moz-selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.selection\:text-white::selection{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:text-black:hover{--tw-text-opacity: 1;color:rgb(0 0 0 / var(--tw-text-opacity, 1))}.hover\:text-black\/70:hover{color:#000000b3}.hover\:text-gray-400:hover{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.hover\:text-gray-500:hover{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.hover\:ring-black\/20:hover{--tw-ring-color: rgb(0 0 0 / .2)}.focus\:z-10:focus{z-index:10}.focus\:border-blue-300:focus{--tw-border-opacity: 1;border-color:rgb(147 197 253 / var(--tw-border-opacity, 1))}.focus\:outline-none:focus{outline:2px solid transparent;outline-offset:2px}.focus\:ring:focus{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-1:focus-visible{--tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow),var(--tw-ring-shadow),var(--tw-shadow, 0 0 #0000)}.focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.active\:bg-gray-100:active{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity, 1))}.active\:text-gray-500:active{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity, 1))}.active\:text-gray-700:active{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity, 1))}@media (min-width: 640px){.sm\:flex{display:flex}.sm\:hidden{display:none}.sm\:size-16{width:4rem;height:4rem}.sm\:size-6{width:1.5rem;height:1.5rem}.sm\:flex-1{flex:1 1 0%}.sm\:items-center{align-items:center}.sm\:justify-between{justify-content:space-between}.sm\:pt-5{padding-top:1.25rem}}@media (min-width: 768px){.md\:row-span-3{grid-row:span 3 / span 3}}@media (min-width: 1024px){.lg\:col-start-2{grid-column-start:2}.lg\:h-16{height:4rem}.lg\:max-w-7xl{max-width:80rem}.lg\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}.lg\:grid-cols-3{grid-template-columns:repeat(3,minmax(0,1fr))}.lg\:flex-col{flex-direction:column}.lg\:items-end{align-items:flex-end}.lg\:justify-center{justify-content:center}.lg\:gap-8{gap:2rem}.lg\:p-10{padding:2.5rem}.lg\:pb-10{padding-bottom:2.5rem}.lg\:pt-0{padding-top:0}.lg\:text-\[\#FF2D20\]{--tw-text-opacity: 1;color:rgb(255 45 32 / var(--tw-text-opacity, 1))}}.rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *){flex-direction:row-reverse}@media (prefers-color-scheme: dark){.dark\:block{display:block}.dark\:hidden{display:none}.dark\:border-gray-600{--tw-border-opacity: 1;border-color:rgb(75 85 99 / var(--tw-border-opacity, 1))}.dark\:bg-black{--tw-bg-opacity: 1;background-color:rgb(0 0 0 / var(--tw-bg-opacity, 1))}.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity, 1))}.dark\:bg-zinc-900{--tw-bg-opacity: 1;background-color:rgb(24 24 27 / var(--tw-bg-opacity, 1))}.dark\:via-zinc-900{--tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);--tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)}.dark\:to-zinc-900{--tw-gradient-to: #18181b var(--tw-gradient-to-position)}.dark\:text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity, 1))}.dark\:text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity, 1))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:text-white\/50{color:#ffffff80}.dark\:text-white\/70{color:#ffffffb3}.dark\:ring-zinc-800{--tw-ring-opacity: 1;--tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))}.dark\:hover\:text-gray-300:hover{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white:hover{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.dark\:hover\:text-white\/70:hover{color:#ffffffb3}.dark\:hover\:text-white\/80:hover{color:#fffc}.dark\:hover\:ring-zinc-700:hover{--tw-ring-opacity: 1;--tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))}.dark\:focus\:border-blue-700:focus{--tw-border-opacity: 1;border-color:rgb(29 78 216 / var(--tw-border-opacity, 1))}.dark\:focus\:border-blue-800:focus{--tw-border-opacity: 1;border-color:rgb(30 64 175 / var(--tw-border-opacity, 1))}.dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))}.dark\:focus-visible\:ring-white:focus-visible{--tw-ring-opacity: 1;--tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))}.dark\:active\:bg-gray-700:active{--tw-bg-opacity: 1;background-color:rgb(55 65 81 / var(--tw-bg-opacity, 1))}.dark\:active\:text-gray-300:active{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity, 1))}}
            </style>
        @endif
    </head>
    <body class="font-sans antialiased dark:bg-black dark:text-white/50">
        <!-- 
    - #HEADER
  -->

  <header class="header" data-header>
    <div class="container">

      <div class="overlay" data-overlay></div>

      <a  href="{{ route('welcome') }}" class="logo">
        <p class="hero-subtitle">Fusionball</p>

      </a>

      <div class="header-actions">

        <button class="search-btn">
          <ion-icon name="search-outline"></ion-icon>
        </button>

        <div class="lang-wrapper">
          <label for="language">
            <ion-icon name="globe-outline"></ion-icon>
          </label>

       
        </div>

        <a href="{{ route('login') }}" class="btn btn-primary">Sign in</a>

      </div>

      <button class="menu-open-btn" data-menu-open-btn>
        <ion-icon name="reorder-two"></ion-icon>
      </button>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">

          <button class="menu-close-btn" data-menu-close-btn>
            <ion-icon name="close-outline"></ion-icon>
          </button>

        </div>

        <ul class="navbar-list">

          <li>
            <a href="{{ route('explore') }}" class="navbar-link">Explore</a>
          </li>

          <li>
            <a href="{{ route('interviews') }}" class="navbar-link">Interviews</a>
          </li>

          <li>
            <a href="{{ route('clubs') }}" class="navbar-link">Clubs</a>
          </li>

          <li>
            <a href="{{ route('trainingvideos') }}" class="navbar-link">Training Videos</a>
          </li>

          <li>
            <a href="{{ route('pricing') }}" class="navbar-link">Pricing</a>
          </li>

        </ul>

        <ul class="navbar-social-list">

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-pinterest"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="navbar-social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

    </div>
  </header>

  <main>
    <article>
      <!-- Client 2 - Bootstrap Brain Component -->
      <section class="py-3 py-md-5 py-xl-8 bg-dark">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6">
              <h2 class="fs-6 text-light mb-2 text-uppercase text-center">Our Clients</h2>
              <h2 class="mb-4 display-5 text-light text-center">Trusted by over 786+ clients.</h2>
              <p class="fs-5 text-light mb-5 text-center">Our clients are our top priority, and we are committed to providing them with the highest level of service.</p>
              <hr class="w-50 mx-auto mb-5 mb-xl-9 border-dark-subtle">
            </div>
          </div>
        </div>

        <div class="container overflow-hidden">
          <div class="row gy-4">
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 284 65">
                  <path d="m141.51,52.13c.49-1.29.74-3.39.74-6.31v-12.29c0-2.83-.25-4.9-.74-6.21-.49-1.31-1.36-1.96-2.61-1.96s-2.05.65-2.54,1.96c-.49,1.31-.74,3.38-.74,6.21v12.29c0,2.92.24,5.02.71,6.31.47,1.29,1.33,1.93,2.57,1.93s2.11-.64,2.61-1.93h0Zm-9.98,6.18c-1.78-1.2-3.05-3.07-3.8-5.6-.75-2.53-1.13-5.9-1.13-10.1v-5.73c0-4.25.43-7.66,1.29-10.23.86-2.57,2.2-4.45,4.02-5.63,1.82-1.18,4.22-1.77,7.18-1.77s5.26.6,7.02,1.8c1.76,1.2,3.05,3.08,3.86,5.63.81,2.55,1.22,5.95,1.22,10.2v5.73c0,4.2-.4,7.58-1.19,10.14-.79,2.55-2.08,4.42-3.86,5.6-1.78,1.18-4.19,1.77-7.24,1.77s-5.59-.6-7.37-1.8m137.82-32.22c-.45.56-.75,1.47-.9,2.74-.15,1.27-.22,3.19-.22,5.76v2.83h6.5v-2.83c0-2.53-.09-4.45-.26-5.76-.17-1.31-.48-2.23-.93-2.77-.45-.54-1.15-.81-2.09-.81s-1.64.28-2.09.84h0Zm-1.13,16.61v2c0,2.53.07,4.43.22,5.7.15,1.27.46,2.19.93,2.77.47.58,1.2.87,2.19.87,1.33,0,2.24-.52,2.74-1.55.49-1.03.76-2.75.8-5.15l7.66.45c.04.34.06.82.06,1.42,0,3.65-1,6.37-2.99,8.17-1.99,1.8-4.82,2.7-8.46,2.7-4.38,0-7.44-1.37-9.2-4.12-1.76-2.74-2.64-6.99-2.64-12.74v-6.89c0-5.92.91-10.24,2.74-12.97,1.82-2.72,4.95-4.09,9.36-4.09,3.05,0,5.38.56,7.02,1.67,1.63,1.12,2.78,2.85,3.44,5.21.67,2.36,1,5.62,1,9.78v6.76h-14.87m-158.33-.74l-10.11-36.49h8.82l3.54,16.54c.9,4.08,1.57,7.55,2,10.43h.26c.3-2.06.97-5.51,2-10.36l3.67-16.61h8.82l-10.23,36.49v17.51h-8.75v-17.51m69.97-21.95v39.45h-6.95l-.77-4.83h-.19c-1.89,3.65-4.72,5.47-8.5,5.47-2.62,0-4.55-.86-5.79-2.57-1.24-1.72-1.87-4.4-1.87-8.05v-29.48h8.88v28.96c0,1.76.19,3.01.58,3.76.39.75,1.03,1.13,1.93,1.13.77,0,1.51-.24,2.22-.71.71-.47,1.23-1.07,1.58-1.8v-31.34h8.88m45.56,0v39.45h-6.95l-.77-4.83h-.19c-1.89,3.65-4.72,5.47-8.5,5.47-2.62,0-4.55-.86-5.79-2.57-1.24-1.72-1.87-4.4-1.87-8.05v-29.48h8.88v28.96c0,1.76.19,3.01.58,3.76.39.75,1.03,1.13,1.93,1.13.77,0,1.51-.24,2.22-.71.71-.47,1.23-1.07,1.58-1.8v-31.34h8.88m-21.42-7.4h-8.82v46.86h-8.69V12.62h-8.82v-7.14h26.32v7.14m42.68,29.8c0,2.87-.12,5.13-.36,6.76-.24,1.63-.63,2.79-1.19,3.48-.56.69-1.31,1.03-2.25,1.03-.71,0-1.41-.17-2.03-.52-.62-.34-1.13-.86-1.51-1.54v-22.4c.3-1.07.82-1.95,1.54-2.64.73-.69,1.52-1.03,2.38-1.03.9,0,1.6.35,2.09,1.06.49.71.84,1.9,1.03,3.57.19,1.67.29,4.05.29,7.14v5.09Zm8.14-16.09c-.54-2.49-1.41-4.29-2.61-5.41-1.2-1.12-2.85-1.67-4.96-1.67-1.63,0-3.15.46-4.57,1.38-1.4.9-2.53,2.16-3.28,3.64h-.07V3.48s-8.56,0-8.56,0v55.99h7.34l.9-3.73h.19c.69,1.33,1.72,2.38,3.09,3.15,1.37.77,2.9,1.16,4.57,1.16,3,0,5.21-1.38,6.63-4.15,1.42-2.77,2.12-7.09,2.12-12.97v-6.24c0-4.42-.27-7.87-.8-10.36M89.02,10.84c-1.04-3.88-4.08-6.91-7.96-7.96-7.02-1.88-35.16-1.88-35.16-1.88,0,0-28.14,0-35.16,1.88-3.88,1.04-6.91,4.08-7.96,7.96-1.88,7.02-1.88,21.66-1.88,21.66,0,0,0,14.64,1.88,21.66,1.04,3.88,4.08,6.91,7.96,7.96,7.02,1.88,35.16,1.88,35.16,1.88,0,0,28.14,0,35.16-1.88,3.88-1.04,6.91-4.08,7.96-7.96,1.88-7.02,1.88-21.66,1.88-21.66,0,0,0-14.64-1.88-21.66m-52.12,35.16v-27l23.38,13.5-23.38,13.5Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 193 65">
                  <path d="m82.71,34.15c0,9.06-7.09,15.74-15.79,15.74s-15.79-6.68-15.79-15.74,7.09-15.74,15.79-15.74,15.79,6.62,15.79,15.74Zm-6.91,0c0-5.66-4.11-9.54-8.88-9.54s-8.88,3.88-8.88,9.54,4.11,9.54,8.88,9.54,8.88-3.94,8.88-9.54Zm40.98,0c0,9.06-7.09,15.74-15.79,15.74s-15.79-6.68-15.79-15.74,7.09-15.74,15.79-15.74,15.79,6.62,15.79,15.74Zm-6.91,0c0-5.66-4.11-9.54-8.88-9.54s-8.88,3.88-8.88,9.54,4.11,9.54,8.88,9.54,8.88-3.94,8.88-9.54Zm39.56-14.79v28.26c0,11.63-6.86,16.37-14.96,16.37-7.63,0-12.22-5.1-13.95-9.28l6.02-2.51c1.07,2.56,3.7,5.59,7.93,5.59,5.19,0,8.4-3.2,8.4-9.23v-2.26h-.24c-1.55,1.91-4.53,3.58-8.29,3.58-7.87,0-15.08-6.86-15.08-15.68s7.21-15.8,15.08-15.8c3.75,0,6.74,1.67,8.29,3.52h.24v-2.56h6.57Zm-6.08,14.85c0-5.54-3.7-9.6-8.4-9.6s-8.77,4.05-8.77,9.6,4,9.48,8.77,9.48,8.4-4,8.4-9.48Zm16.9-31.41v46.14h-6.74V2.8h6.74Zm26.28,36.54l5.37,3.58c-1.73,2.56-5.91,6.98-13.12,6.98-8.94,0-15.62-6.91-15.62-15.74,0-9.36,6.74-15.74,14.85-15.74s12.17,6.5,13.47,10.01l.72,1.79-21.04,8.72c1.61,3.16,4.12,4.77,7.63,4.77s5.96-1.73,7.75-4.36h0Zm-16.52-5.66l14.07-5.84c-.77-1.97-3.1-3.34-5.84-3.34-3.51,0-8.4,3.1-8.23,9.18Zm-144.41-3.61v-6.68h22.51c.22,1.16.33,2.54.33,4.03,0,5.01-1.37,11.21-5.78,15.62-4.29,4.47-9.78,6.86-17.05,6.86-13.47,0-24.8-10.97-24.8-24.44S12.14,1,25.61,1c7.45,0,12.76,2.92,16.75,6.74l-4.71,4.71c-2.86-2.68-6.74-4.77-12.04-4.77-9.84,0-17.53,7.93-17.53,17.77s7.69,17.77,17.53,17.77c6.38,0,10.01-2.56,12.34-4.89,1.89-1.89,3.13-4.59,3.62-8.27h-15.96Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 327 65">
                  <path d="m21.37,63.03h-12.27v-30.58H.75v-9.95h8.36v-7.08c0-8.39,3.7-14.41,15.93-14.41,2.59,0,6.65.52,6.65.52v9.24h-4.27c-4.35,0-6.04,1.32-6.04,4.98v6.76h10.15l-.9,9.95h-9.24v30.58Zm28.14-41.33c-.18,0-.36,0-.54.01-11.37,0-16.58,8.55-16.58,20.7,0,15.3,6.75,21.42,16.67,21.42,5.67,0,9.4-2.39,11.67-6.84v6.04h11.67V22.5h-11.67v6.23c-1.85-4.01-5.68-6.99-11.21-7.03Zm2.97,9.58c4.78,0,7.64,3.33,7.64,9v5.79c.01,3.82-2.36,8.29-7.64,8.29-8.13,0-7.91-8.78-7.91-11.7,0-9.83,4.33-11.38,7.91-11.38h0Zm24.62,11.49c0-4.93-.24-21.04,20.76-21.04,8.43,0,11.95,2.68,11.95,2.68l-2.83,8.77s-3.51-1.94-8.09-1.94c-5.87,0-9.61,3.4-9.61,9.38v4.29c0,5.75,3.62,9.59,9.62,9.59,4.17,0,8.02-1.95,8.02-1.95l2.82,8.59s-3.22,2.7-11.82,2.7c-19.99,0-20.82-14.46-20.82-21.07h0Zm101.11-21.06c11.37,0,16.66,8.55,16.66,20.7,0,15.3-6.75,21.42-16.67,21.42-5.67,0-9.87-2.39-12.13-6.84v6.04h-11.52V2.23l12.23-1.07v27.02c1.77-4.73,7.57-6.47,11.43-6.47h0Zm-3.43,9.57c-4.78,0-8,3.33-8,9v5.79c-.02,3.82,2.22,8.29,8,8.29,8.13,0,7.91-8.78,7.91-11.7,0-9.83-4.33-11.38-7.91-11.38Zm-43.75-9.53c-12.9,0-19.71,7.03-19.71,19.53v2.32c0,16.22,9.56,20.4,20.97,20.4s16.1-3.1,16.1-3.1l-2.29-8.25s-5.9,2.51-12.34,2.51-9.55-1.7-10.29-8.12h25.9v-6.62c0-13.56-7.64-18.67-18.33-18.67h0Zm.31,8.27c4.47,0,7.36,2.74,7.2,9.09h-15.05c.26-6.68,3.38-9.09,7.85-9.09h0Zm87.92-8.32c-13.25,0-20.22,7.47-20.22,20.84,0,18.36,12.02,21.31,20.24,21.31,12.04,0,20.04-6.48,20.04-21.14s-9-21.01-20.07-21.01Zm-.17,9.62c5.82,0,8.13,4.36,8.13,9.32v4.27c0,6.01-3.23,9.49-8.16,9.49-4.61,0-7.84-3.25-7.84-9.49v-4.27c0-6.65,3.85-9.32,7.87-9.32Zm44.6-9.62c-13.25,0-20.22,7.47-20.22,20.84,0,18.36,12.02,21.31,20.24,21.31,12.04,0,20.04-6.48,20.04-21.14s-9-21.01-20.07-21.01Zm-.17,9.62c5.82,0,8.13,4.36,8.13,9.32v4.27c0,6.01-3.23,9.49-8.15,9.49-4.61,0-7.84-3.25-7.84-9.49v-4.27c0-6.65,3.85-9.32,7.87-9.32Zm24.85,31.72V2.23l12.27-1.07v40.75l12.17-19.42h12.95l-12.69,20.11,13.18,20.42h-12.99l-12.62-19.83v19.83h-12.27Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 266 65">
                  <path d="m104.88,23.57h8.37v26.3h-8.37v-26.3Zm10.13,0h8.06v3.6h.16c1.94-2.82,4.46-4.35,8.11-4.35,5.75,0,9.15,4.12,9.15,9.98v17.1h-8.37v-15.42c0-2.77-1.4-4.66-4.12-4.66s-4.61,2.31-4.61,5.55v14.54h-8.37v-26.33Zm-5.93-12.05c2.78,0,5.03,2.25,5.03,5.03s-2.25,5.03-5.03,5.03-5.03-2.25-5.03-5.03,2.25-5.03,5.03-5.03Zm90.29,11.66c-.23-.03-.52-.03-.83-.03-3.19,0-5.34,1.4-7.2,4.51h-.16v-4.09h-8.01v26.3h8.37v-11.82c0-5.47,3.03-8.01,7.83-7.57v-7.31Zm41.1,10.11c-3.34-.62-6.32-.88-6.32-2.72,0-1.63,1.58-2.41,3.65-2.41,2.31,0,3.91.73,4.22,3.08h7.7c-.41-5.18-4.41-8.42-11.87-8.42-6.22,0-11.35,2.88-11.35,8.42,0,6.17,4.87,7.39,9.46,8.16,3.5.62,6.69.88,6.69,3.24,0,1.68-1.58,2.62-4.12,2.62s-4.2-1.06-4.72-3.24h-7.98c.6,5.42,5.34,8.68,12.75,8.68,6.89,0,11.97-2.98,11.97-8.73-.03-6.74-5.47-7.9-10.08-8.68h0Zm-27.65,11.35c-3.45,0-5.39-2.2-5.91-5.75h18.89c.05-5.34-1.48-9.93-4.61-12.8-2.25-2.05-5.23-3.29-8.99-3.29-8.01,0-13.5,6.01-13.5,13.86s5.34,13.97,14.02,13.97c3.34,0,6.01-.88,8.22-2.41,2.31-1.58,3.86-3.86,4.41-6.22h-8.16c-.7,1.66-2.13,2.64-4.35,2.64h0Zm-.47-15.89c2.72,0,4.66,2,4.98,5.13h-10.37c.57-3.11,2.23-5.13,5.39-5.13Zm52.92,14.93c-.39.03-.91.03-1.4.03-1.79,0-2.93-.52-2.93-2.57v-12.34h4.33v-5.23h-4.33v-8.32h-8.16v8.32h-2.57v5.23h2.57v14.12c0,5.65,3.5,7.26,8.37,7.26,1.87,0,3.27-.13,4.12-.31v-6.19Zm-109.83,0c-.34,0-.73.03-1.09.03-1.79,0-2.93-.52-2.93-2.57v-12.34h4.02v-5.23h-4.02v-8.32h-8.16v8.32h-2.72v5.23h2.72v14.12c0,5.65,3.5,7.26,8.37,7.26,1.66,0,2.95-.1,3.81-.26v-6.25Zm-.41-7c0-7.85,5.49-13.86,13.5-13.86,3.76,0,6.74,1.24,8.99,3.29,3.14,2.88,4.66,7.44,4.61,12.8h-18.89c.52,3.55,2.46,5.75,5.91,5.75,2.2,0,3.65-.98,4.35-2.62h8.16c-.57,2.36-2.1,4.61-4.41,6.22-2.2,1.53-4.87,2.41-8.22,2.41-8.68-.03-14.02-6.04-14.02-13.99h0Zm18.66-2.77c-.31-3.14-2.25-5.13-4.98-5.13-3.19,0-4.82,2-5.39,5.13h10.37ZM75.44,13.15h14.54c4.46,0,7.75,1.24,10.03,3.39,2.36,2.2,3.71,5.34,3.71,9.04,0,7.05-4.87,12.02-12.44,12.02h-7.36v12.28h-8.47V13.15Zm14.9,17.26c3.29,0,5.13-1.94,5.13-4.87s-1.89-4.72-5.13-4.72h-6.43v9.61h6.43v-.03ZM32.22,1C14.8,1,.73,15.1.73,32.49c0,13.35,8.29,24.75,20.01,29.34-.29-2.49-.52-6.32.1-9.04.57-2.46,3.68-15.65,3.68-15.65,0,0-.93-1.89-.93-4.66,0-4.38,2.54-7.65,5.7-7.65,2.7,0,3.99,2.02,3.99,4.43,0,2.7-1.71,6.74-2.62,10.5-.75,3.14,1.58,5.7,4.66,5.7,5.6,0,9.9-5.91,9.9-14.41,0-7.54-5.42-12.8-13.16-12.8-8.97,0-14.23,6.71-14.23,13.66,0,2.7,1.04,5.6,2.33,7.18.26.31.29.6.21.91-.23.98-.78,3.14-.88,3.58-.13.57-.47.7-1.06.41-3.89-1.87-6.32-7.62-6.32-12.23,0-9.93,7.2-19.05,20.81-19.05,10.91,0,19.41,7.77,19.41,18.19s-6.84,19.59-16.33,19.59c-3.19,0-6.19-1.66-7.2-3.63,0,0-1.58,6.01-1.97,7.49-.7,2.75-2.62,6.17-3.91,8.27,2.95.91,6.06,1.4,9.33,1.4,17.39,0,31.49-14.1,31.49-31.49-.03-17.42-14.12-31.51-31.51-31.51Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 341 65">
                  <path d="m29.94,1c2.89,0,5.56.22,8.01.88,2.45.44,4.46,1.35,6.25,2.45s3.11,2.67,4.02,4.68c.88,2.01,1.35,4.46,1.35,7.13,0,3.11-.66,5.78-2.23,7.79-1.35,2.01-3.55,3.8-6.25,5.12,3.8,1.1,6.69,3.11,8.45,5.78,1.76,2.67,2.89,6,2.89,9.8,0,3.11-.66,5.78-1.79,8.01-1.1,2.23-2.89,4.24-4.9,5.56-2.01,1.35-4.46,2.45-7.13,3.11-2.67.66-5.34,1.1-8.01,1.1l-29.83.06V1h29.17Zm-1.79,24.94c2.45,0,4.46-.66,6-1.79,1.54-1.13,2.23-3.11,2.23-5.56,0-1.35-.22-2.67-.66-3.55-.44-.88-1.1-1.57-2.01-2.23-.88-.44-1.79-.88-2.89-1.1s-2.23-.22-3.55-.22h-12.91v14.48s13.79-.03,13.79-.03Zm.66,26.28c1.35,0,2.67-.22,3.8-.44,1.1-.22,2.23-.66,3.11-1.35s1.57-1.35,2.23-2.45c.44-1.1.88-2.45.88-4.02,0-3.11-.88-5.34-2.67-6.91-1.79-1.35-4.24-2.01-7.13-2.01h-14.67v17.15h14.45v.03Zm42.99-.22c1.79,1.79,4.46,2.67,8.01,2.67,2.45,0,4.68-.66,6.47-1.79,1.79-1.35,2.89-2.67,3.33-4.02h10.9c-1.79,5.34-4.46,9.14-8.01,11.59-3.55,2.23-7.79,3.55-12.91,3.55-3.55,0-6.69-.66-9.58-1.79-2.89-1.1-5.12-2.67-7.13-4.9-2.01-2.01-3.55-4.46-4.46-7.35-1.1-2.89-1.57-6-1.57-9.58,0-3.33.44-6.47,1.57-9.36s2.67-5.34,4.68-7.57c2.01-2.01,4.46-3.8,7.13-4.9,2.89-1.1,5.78-1.79,9.36-1.79,3.8,0,7.13.66,10.02,2.23,2.89,1.57,5.12,3.33,6.91,6,1.79,2.45,3.11,5.34,4.02,8.45.44,3.11.66,6.25.44,9.8h-32.28c0,3.63,1.32,6.96,3.11,8.75Zm14.04-23.39c-1.57-1.57-4.02-2.45-6.91-2.45-2.01,0-3.55.44-4.9,1.1s-2.23,1.57-3.11,2.45c-.88.88-1.35,2.01-1.57,3.11s-.44,2.01-.44,2.89h20.04c-.44-3.3-1.57-5.53-3.11-7.1h0Zm-19.6-23.37h24.94v6h-24.94v-6ZM118.35,1v23.15h.22c1.57-2.67,3.55-4.46,6-5.56s4.68-1.79,7.13-1.79c3.33,0,6,.44,8.01,1.35,2.01.88,3.8,2.23,4.9,3.8s2.01,3.55,2.45,5.78c.44,2.23.66,4.68.66,7.57v27.39h-12.25v-25.16c0-3.8-.66-6.47-1.79-8.23s-3.08-2.7-5.97-2.7c-3.33,0-5.78,1.1-7.13,2.89-1.57,2.01-2.23,5.34-2.23,9.8v23.39h-12.25V1h12.25Zm38.31,23.61c1.35-2.01,2.89-3.33,4.9-4.68,2.01-1.1,4.24-2.01,6.69-2.45,2.45-.44,4.9-.66,7.35-.66,2.23,0,4.46.22,6.91.44,2.23.22,4.46.88,6.25,1.79,2.01.88,3.33,2.23,4.68,3.8,1.1,1.57,1.79,3.8,1.79,6.47v23.39c0,2.01.22,4.02.44,5.78.22,1.79.88,3.33,1.57,4.24h-12.47c-.44-.44-.66-1.35-.88-2.01-.22-.66-.22-1.57-.22-2.23-2.01,2.01-4.24,3.33-6.91,4.24-2.67.88-5.34,1.1-8.01,1.1-2.23,0-4.02-.22-6-.88-1.79-.44-3.33-1.35-4.9-2.45-1.35-1.1-2.45-2.45-3.33-4.24-.66-1.79-1.1-3.55-1.1-6s.44-4.68,1.35-6.25c.88-1.57,2.01-2.89,3.33-4.02,1.35-.88,3.11-1.79,4.9-2.23s3.55-.88,5.56-1.1c1.79-.22,3.55-.44,5.34-.66s3.33-.44,4.68-.66c1.35-.44,2.45-.88,3.33-1.57.88-.66,1.1-1.57,1.1-2.89s-.22-2.45-.66-3.11c-.44-.66-1.1-1.35-1.79-1.79-.66-.44-1.57-.66-2.45-.88-.88-.22-2.01-.22-3.11-.22-2.45,0-4.24.44-5.56,1.57-1.35,1.1-2.23,2.89-2.45,5.12h-12.25c-.08-2.75.8-5.2,1.93-6.96h0Zm24.28,17.37c-.66.22-1.57.44-2.45.66-.88.22-1.79.22-2.89.44-.88.22-2.01.22-2.89.44s-1.79.44-2.67.66c-.88.22-1.79.66-2.23,1.1-.66.44-1.1,1.1-1.57,1.79-.66.88-.66,1.79-.66,2.89s.22,2.01.66,2.67c.44.66.88,1.35,1.57,1.79.66.44,1.57.66,2.45.88s1.79.22,2.89.22c2.45,0,4.24-.44,5.56-1.1,1.35-.88,2.23-1.79,2.89-2.89s1.1-2.23,1.1-3.33c.22-1.1.22-2.01.22-2.67v-4.68c-.66.44-1.32.91-1.98,1.13Zm32.72-24.06v6.25h.22c1.57-2.67,3.55-4.46,6-5.56s5.12-1.79,7.57-1.79c3.33,0,6,.44,8.01,1.35,2.23.88,3.8,2.23,4.9,3.8,1.1,1.57,2.01,3.55,2.67,5.78.44,2.23.66,4.68.66,7.57v27.39h-12.25v-25.16c0-3.8-.66-6.47-1.79-8.23-1.1-1.79-3.11-2.89-6.25-2.89-3.33,0-5.78,1.35-7.35,3.33-1.57,2.01-2.23,5.34-2.23,9.8v23.39h-12.25V17.93h12.08Zm57.47,8.01c-2.01,0-3.55.44-4.9,1.35-1.35.88-2.45,2.01-3.33,3.55-.88,1.35-1.35,2.89-1.79,4.68s-.44,3.33-.44,5.12c0,1.57.22,3.33.44,4.9.44,1.79.88,3.11,1.79,4.46.88,1.35,1.79,2.45,3.11,3.33,1.35.88,2.89,1.35,4.9,1.35,2.89,0,5.12-.88,6.91-2.45,1.57-1.57,2.67-3.8,2.89-6.69h11.81c-.88,6-3.11,10.46-6.91,13.6-3.8,3.11-8.7,4.68-14.7,4.68-3.33,0-6.47-.66-9.14-1.79-2.89-1.1-5.12-2.67-7.13-4.68-2.01-2.01-3.55-4.46-4.68-7.13-1.1-2.89-1.57-5.78-1.57-9.14,0-3.55.44-6.69,1.57-9.58,1.1-2.89,2.45-5.56,4.46-7.79,2.01-2.23,4.46-3.8,7.13-5.12,2.89-1.1,6-1.79,9.58-1.79,2.67,0,5.12.44,7.57,1.1s4.68,1.79,6.47,3.11c2.01,1.35,3.55,3.11,4.68,5.34,1.1,2.01,1.79,4.68,2.01,7.57h-12.03c-.47-5.31-3.36-7.98-8.7-7.98h0Zm39.85,26.06c1.79,1.79,4.68,2.67,8.01,2.67,2.45,0,4.68-.66,6.47-1.79,1.79-1.35,2.89-2.67,3.33-4.02h10.68c-1.79,5.34-4.46,9.14-8.01,11.59-3.55,2.23-7.79,3.55-12.91,3.55-3.55,0-6.69-.66-9.58-1.79-2.89-1.1-5.12-2.67-7.13-4.9-2.01-2.01-3.55-4.46-4.46-7.35-1.1-2.89-1.57-6-1.57-9.58,0-3.33.44-6.47,1.57-9.36,1.1-2.89,2.67-5.34,4.68-7.57,2.01-2.01,4.46-3.8,7.13-4.9,2.89-1.1,6-1.79,9.36-1.79,3.8,0,7.13.66,9.8,2.23,2.89,1.57,5.12,3.33,6.91,6,1.79,2.45,3.11,5.34,4.02,8.45.88,3.11,1.1,6.47.88,10.02h-32.28c0,3.41,1.32,6.74,3.11,8.53h0Zm14.26-23.39c-1.57-1.57-4.02-2.45-6.91-2.45-2.01,0-3.55.44-4.9,1.1s-2.45,1.57-3.11,2.45c-.66.88-1.35,2.01-1.57,3.11-.22,1.1-.44,2.01-.44,2.89h20.04c-.66-3.3-1.79-5.53-3.11-7.1Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 232 65">
                  <path d="m34.38,27.43c-1.81,0-3.24,1.56-3.24,3.49s1.46,3.49,3.24,3.49,3.24-1.56,3.24-3.49-1.46-3.49-3.24-3.49Zm-11.6,0c-1.81,0-3.24,1.56-3.24,3.49s1.46,3.49,3.24,3.49,3.24-1.56,3.24-3.49c.03-1.94-1.43-3.49-3.24-3.49ZM49.82,1H7.25C3.66,1,.74,3.92.74,7.51v42.57c0,3.59,2.92,6.51,6.51,6.51h36.03l-1.68-5.81,4.07,3.75,3.84,3.53,6.86,5.94V7.51c-.03-3.59-2.95-6.51-6.54-6.51Zm-12.26,41.14s-1.14-1.37-2.1-2.54c4.16-1.18,5.75-3.75,5.75-3.75-1.3.86-2.54,1.46-3.65,1.87-1.59.67-3.11,1.08-4.61,1.37-3.05.57-5.85.41-8.23-.03-1.81-.35-3.37-.83-4.67-1.37-.73-.29-1.52-.64-2.32-1.08-.1-.06-.19-.1-.29-.16-.06-.03-.1-.06-.13-.06-.57-.32-.89-.54-.89-.54,0,0,1.52,2.51,5.56,3.72-.95,1.21-2.13,2.61-2.13,2.61-7.02-.22-9.69-4.8-9.69-4.8,0-10.13,4.57-18.36,4.57-18.36,4.57-3.4,8.9-3.3,8.9-3.3l.32.38c-5.72,1.62-8.32,4.13-8.32,4.13,0,0,.7-.38,1.87-.89,3.4-1.49,6.1-1.87,7.21-2,.19-.03.35-.06.54-.06,1.94-.25,4.13-.32,6.42-.06,3.02.35,6.26,1.24,9.56,3.02,0,0-2.51-2.38-7.91-4l.44-.51s4.35-.1,8.9,3.3c0,0,4.57,8.23,4.57,18.36,0-.03-2.67,4.54-9.69,4.77Zm47.97-27.54h-10.55v11.85l7.02,6.32v-11.5h3.75c2.38,0,3.56,1.14,3.56,2.99v8.8c0,1.84-1.11,3.08-3.56,3.08h-10.8v6.7h10.55c5.66.03,10.96-2.8,10.96-9.28v-9.47c.03-6.61-5.27-9.5-10.93-9.5h0Zm55.28,18.97v-9.72c0-3.49,6.29-4.29,8.2-.79l5.81-2.35c-2.29-5.02-6.45-6.48-9.91-6.48-5.66,0-11.25,3.27-11.25,9.63v9.72c0,6.42,5.59,9.63,11.12,9.63,3.56,0,7.82-1.75,10.17-6.32l-6.23-2.86c-1.52,3.91-7.91,2.95-7.91-.44h0Zm-19.22-8.39c-2.19-.48-3.65-1.27-3.75-2.64.13-3.27,5.18-3.4,8.13-.25l4.67-3.59c-2.92-3.56-6.23-4.51-9.63-4.51-5.18,0-10.2,2.92-10.2,8.45s4.13,8.26,8.67,8.96c2.32.32,4.89,1.24,4.83,2.83-.19,3.02-6.42,2.86-9.25-.57l-4.51,4.23c2.64,3.4,6.23,5.11,9.59,5.11,5.18,0,10.93-2.99,11.15-8.45.32-6.89-4.7-8.64-9.72-9.56h0Zm-21.29,17.63h7.12V14.6h-7.12v28.21Zm120-28.21h-10.55v11.85l7.02,6.32v-11.5h3.75c2.38,0,3.56,1.14,3.56,2.99v8.8c0,1.84-1.11,3.08-3.56,3.08h-10.8v6.7h10.58c5.66.03,10.96-2.8,10.96-9.28v-9.47c0-6.61-5.31-9.5-10.96-9.5Zm-51.75-.38c-5.85,0-11.66,3.18-11.66,9.69v9.63c0,6.45,5.85,9.69,11.72,9.69s11.66-3.24,11.66-9.69v-9.63c0-6.48-5.88-9.69-11.72-9.69Zm4.57,19.32c0,2.03-2.29,3.08-4.54,3.08s-4.57-.98-4.57-3.08v-9.63c0-2.07,2.22-3.18,4.45-3.18s4.67.98,4.67,3.18v9.63Zm32.69-9.63c-.16-6.61-4.67-9.28-10.48-9.28h-11.28v28.21h7.21v-8.96h1.27l6.54,8.96h8.9l-7.69-9.69c3.4-1.08,5.53-4.03,5.53-9.25Zm-10.36,3.81h-4.19v-6.45h4.19c4.48,0,4.48,6.45,0,6.45Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 517 65">
                  <path d="m47.53,39.63H13.05v-8.56h44.46c-1.17-3.63-4.93-7-11.54-7H13.69c-7.39,0-11.67,2.72-11.67,8.69v6.35c0,5.19,4.41,8.17,10.89,8.17h34.87v9.07H.86c1.17,4.93,4.93,7.52,11.67,7.52h35.13c7.39,0,11.02-2.85,11.02-8.94v-6.35c0-5.57-4.28-8.56-11.15-8.94Zm70.39-15.43h-42.52v39.8h12.06v-15.3h31.37c8.69,0,13.48-2.98,13.48-9.98v-4.41c-.13-6.48-5.57-10.11-14.39-10.11Zm3.89,12.7c0,2.85-.52,4.41-5.19,4.41h-29.17l.13-10.37h28.52c5.19,0,5.83,1.56,5.83,4.28v1.69h-.13Zm50.56,11.54h-25.67l-6.35,6.74h37.07l6.35,8.81h14.26l-30.72-41.48-7.26,8.94,12.31,16.98Zm48.74-17.37h45.11c-1.17-4.67-5.7-7-12.19-7h-33.7c-5.83,0-11.41,2.33-11.41,8.69v22.3c0,6.35,5.57,8.69,11.41,8.69h34.09c7.78,0,10.5-2.2,11.8-7.52h-45.11v-25.15Zm98,13.22v-6.74h-36.43v26.44h53.8v-7.52h-41.61v-12.19h24.24Zm-35.13-20.09h54.31v7h-54.31v-7Zm87.76,0h-18.93l22.3,16.33c3.24-2.2,7-4.54,10.37-6.48l-13.74-9.85Zm27.48,20.35c-3.24,2.2-6.48,4.67-9.59,7l16.85,12.31h19.06l-26.31-19.31ZM516.14,1c-103.7,5.96-151.67,50.3-162.43,60.8l-2.2,2.07h19.19C422.55,11.89,497.08,2.69,516.14,1Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 296 65">
                  <path d="m104.66,37.29l-1.76,4.98h-.15c-.29-1.12-.83-2.83-1.71-4.88l-9.43-23.69h-9.23v37.75h6.1v-23.3c0-1.47,0-3.13-.05-5.18-.05-1.03-.15-1.81-.2-2.39h.15c.29,1.47.63,2.54.88,3.22l11.33,27.54h4.3l11.23-27.79c.24-.63.49-1.9.73-2.98h.15c-.15,2.78-.24,5.27-.29,6.79v23.93h6.5V13.6h-8.89l-9.67,23.69Zm24.71-13.04h6.35v27.06h-6.35v-27.06Zm3.22-11.43c-1.07,0-1.95.39-2.69,1.07-.73.68-1.12,1.56-1.12,2.64s.39,1.9,1.12,2.59c.73.68,1.61,1.03,2.69,1.03s2-.39,2.69-1.03c.73-.68,1.12-1.56,1.12-2.59s-.39-1.9-1.12-2.64c-.63-.68-1.56-1.07-2.69-1.07m25.64,11.18c-1.17-.24-2.39-.39-3.57-.39-2.88,0-5.52.63-7.72,1.9-2.2,1.27-3.96,3.03-5.08,5.23-1.17,2.25-1.76,4.83-1.76,7.81,0,2.59.59,4.88,1.71,6.98,1.12,2.05,2.69,3.71,4.79,4.83,2,1.12,4.35,1.71,6.98,1.71,3.03,0,5.62-.63,7.67-1.81l.05-.05v-5.86l-.24.2c-.93.68-2,1.27-3.08,1.61-1.12.39-2.15.59-3.03.59-2.54,0-4.54-.73-5.96-2.34-1.47-1.56-2.2-3.71-2.2-6.4s.73-4.98,2.25-6.59c1.51-1.61,3.52-2.44,5.96-2.44,2.05,0,4.15.68,6.06,2.05l.24.2v-6.2l-.05-.05c-.83-.34-1.76-.73-3.03-.98m20.95-.2c-1.56,0-3.03.49-4.3,1.51-1.07.88-1.81,2.15-2.44,3.66h-.05v-4.74h-6.35v27.06h6.35v-13.82c0-2.34.49-4.3,1.56-5.71,1.07-1.47,2.44-2.2,4.1-2.2.59,0,1.17.15,1.9.24.68.2,1.17.39,1.51.63l.24.2v-6.35l-.15-.05c-.44-.29-1.32-.44-2.39-.44m17.29-.15c-4.44,0-8.01,1.32-10.5,3.91-2.54,2.59-3.76,6.15-3.76,10.65,0,4.2,1.27,7.62,3.71,10.11,2.44,2.44,5.76,3.71,9.91,3.71s7.81-1.32,10.3-3.96c2.54-2.64,3.76-6.15,3.76-10.5s-1.17-7.72-3.57-10.21c-2.3-2.49-5.67-3.71-9.87-3.71m5.08,20.8c-1.17,1.51-3.03,2.25-5.32,2.25s-4.15-.73-5.47-2.34c-1.32-1.51-1.95-3.71-1.95-6.5s.68-5.08,1.95-6.64c1.32-1.56,3.13-2.34,5.42-2.34s4,.73,5.27,2.25c1.27,1.51,1.95,3.71,1.95,6.59-.1,2.93-.63,5.23-1.86,6.74m22.51-8.99c-2-.83-3.27-1.47-3.86-2-.49-.49-.73-1.17-.73-2.05,0-.73.29-1.47,1.03-1.95s1.56-.73,2.78-.73c1.07,0,2.2.2,3.27.49s2.05.73,2.83,1.32l.24.2v-5.96l-.15-.05c-.73-.29-1.71-.59-2.88-.83-1.17-.2-2.25-.29-3.13-.29-3.03,0-5.52.73-7.47,2.34-1.95,1.51-2.88,3.57-2.88,5.96,0,1.27.2,2.39.63,3.32s1.07,1.81,1.95,2.54c.88.68,2.15,1.47,3.91,2.2,1.47.63,2.59,1.12,3.27,1.51.68.39,1.12.83,1.47,1.17.24.39.39.88.39,1.51,0,1.81-1.37,2.69-4.15,2.69-1.07,0-2.2-.2-3.52-.63s-2.54-1.07-3.57-1.81l-.24-.2v6.2l.15.05c.93.44,2.05.73,3.42,1.07,1.37.24,2.59.44,3.66.44,3.27,0,5.96-.73,7.86-2.34,1.95-1.56,2.98-3.57,2.98-6.15,0-1.81-.49-3.42-1.56-4.64-1.42-1.17-3.17-2.39-5.71-3.37m24.03-11.82c-4.44,0-8.01,1.32-10.5,3.91s-3.76,6.15-3.76,10.65c0,4.2,1.27,7.62,3.71,10.11,2.44,2.44,5.76,3.71,9.91,3.71s7.81-1.32,10.3-3.96c2.54-2.64,3.76-6.15,3.76-10.5s-1.17-7.72-3.57-10.21c-2.3-2.49-5.67-3.71-9.87-3.71m5.03,20.8c-1.17,1.51-3.03,2.25-5.32,2.25s-4.15-.73-5.47-2.34c-1.32-1.51-1.95-3.71-1.95-6.5s.68-5.08,1.95-6.64c1.32-1.56,3.13-2.34,5.42-2.34s4,.73,5.27,2.25c1.27,1.51,1.95,3.71,1.95,6.59s-.63,5.23-1.86,6.74m42.34-14.99v-5.23h-6.4v-8.01l-.2.05-6.06,1.81-.15.05v6.1h-9.57v-3.42c0-1.56.39-2.78,1.07-3.57.68-.78,1.71-1.17,2.98-1.17.88,0,1.81.2,2.83.63l.24.15v-5.52l-.15-.05c-.88-.29-2.05-.49-3.57-.49-1.9,0-3.57.44-5.08,1.17-1.51.83-2.64,1.95-3.47,3.47-.83,1.47-1.27,3.13-1.27,5.03v3.76h-4.44v5.18h4.44v21.88h6.4v-21.83h9.57v13.92c0,5.71,2.69,8.6,8.06,8.6.88,0,1.81-.15,2.69-.29.93-.2,1.61-.44,2-.63l.05-.05v-5.23l-.24.2c-.39.24-.73.44-1.32.59-.49.15-.93.2-1.27.2-1.27,0-2.15-.29-2.78-1.03-.59-.68-.88-1.81-.88-3.47v-12.8h6.5ZM.54,1h29.94v29.94H.54V1Zm33.06,0h29.94v29.94h-29.94V1ZM.54,34.06h29.94v29.94H.54v-29.94Zm33.06,0h29.94v29.94h-29.94v-29.94Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 211 65">
                  <path d="m130.67,50.27c-12.15,8.95-29.76,13.73-44.92,13.73-21.26,0-40.4-7.86-54.87-20.94-1.14-1.03-.12-2.43,1.25-1.63,15.62,9.09,34.94,14.56,54.9,14.56,13.46,0,28.26-2.78,41.88-8.56,2.06-.87,3.78,1.35,1.77,2.84m5.05-5.78c-1.55-1.98-10.27-.94-14.18-.47-1.19.15-1.37-.89-.3-1.64,6.94-4.89,18.34-3.48,19.67-1.84,1.33,1.65-.35,13.07-6.87,18.52-1,.84-1.96.39-1.51-.72,1.47-3.66,4.75-11.86,3.19-13.85m-13.91-36.61V3.13c0-.72.55-1.2,1.2-1.2h21.27c.68,0,1.23.49,1.23,1.2v4.07c0,.68-.58,1.57-1.6,2.98l-11.02,15.73c4.1-.1,8.42.51,12.13,2.6.84.47,1.06,1.16,1.13,1.85v5.07c0,.69-.76,1.5-1.57,1.08-6.54-3.43-15.23-3.8-22.47.04-.74.4-1.51-.4-1.51-1.09v-4.81c0-.77,0-2.09.78-3.27l12.77-18.31h-11.11c-.68,0-1.23-.48-1.23-1.19m-77.58,29.64h-6.47c-.62-.05-1.11-.51-1.16-1.1V3.21c0-.66.56-1.19,1.25-1.19h6.03c.63.03,1.13.51,1.17,1.11v4.34h.12c1.57-4.2,4.53-6.15,8.52-6.15s6.58,1.96,8.4,6.15c1.57-4.2,5.12-6.15,8.94-6.15,2.71,0,5.68,1.12,7.49,3.63,2.05,2.79,1.63,6.85,1.63,10.41v20.96c0,.66-.56,1.2-1.26,1.2h-6.46c-.65-.05-1.16-.56-1.16-1.2v-17.6c0-1.4.13-4.9-.18-6.22-.48-2.23-1.93-2.86-3.8-2.86-1.57,0-3.2,1.05-3.87,2.72-.66,1.67-.6,4.48-.6,6.36v17.6c0,.66-.56,1.2-1.25,1.2h-6.46c-.66-.05-1.16-.56-1.16-1.2v-17.6c0-3.7.6-9.15-3.99-9.15s-4.47,5.31-4.47,9.15v17.6c0,.66-.56,1.2-1.25,1.2M163.82,1.32c9.6,0,14.8,8.24,14.8,18.73s-5.74,18.16-14.8,18.16-14.56-8.24-14.56-18.52,5.2-18.37,14.56-18.37m.05,6.78c-4.77,0-5.07,6.5-5.07,10.55s-.06,12.72,5.01,12.72,5.25-6.99,5.25-11.25c0-2.8-.12-6.15-.96-8.81-.73-2.31-2.17-3.21-4.23-3.21m27.19,29.42h-6.44c-.65-.05-1.16-.56-1.16-1.2V3.1c.05-.61.58-1.08,1.24-1.08h6c.56.03,1.03.41,1.16.93v5.08h.12c1.81-4.54,4.35-6.71,8.82-6.71,2.9,0,5.73,1.05,7.55,3.91,1.69,2.66,1.69,7.13,1.69,10.34v20.9c-.07.58-.61,1.05-1.25,1.05h-6.49c-.59-.05-1.08-.48-1.15-1.05v-18.04c0-3.63.42-8.95-4.05-8.95-1.57,0-3.02,1.06-3.74,2.66-.91,2.03-1.03,4.05-1.03,6.29v17.88c0,.66-.57,1.2-1.26,1.2m-86.21-15.86c0,2.52.06,4.62-1.21,6.86-1.03,1.82-2.67,2.94-4.48,2.94-2.48,0-3.94-1.89-3.94-4.69,0-5.51,4.94-6.52,9.63-6.52v1.4m6.52,15.77c-.43.38-1.05.41-1.53.15-2.15-1.78-2.54-2.61-3.71-4.31-3.55,3.62-6.07,4.7-10.67,4.7-5.45,0-9.68-3.36-9.68-10.08,0-5.25,2.84-8.83,6.9-10.57,3.51-1.55,8.42-1.82,12.17-2.25v-.84c0-1.54.12-3.36-.79-4.69-.78-1.19-2.29-1.68-3.63-1.68-2.47,0-4.66,1.26-5.2,3.89-.11.58-.54,1.16-1.13,1.18l-6.27-.67c-.53-.12-1.12-.55-.96-1.36,1.44-7.61,8.32-9.9,14.47-9.9,3.15,0,7.26.84,9.75,3.22,3.15,2.94,2.85,6.86,2.85,11.13v10.08c0,3.03,1.26,4.36,2.44,6,.41.58.5,1.28-.03,1.72-1.32,1.1-3.67,3.15-4.96,4.3v-.02M20.04,21.66c0,2.52.06,4.62-1.21,6.86-1.03,1.82-2.66,2.94-4.48,2.94-2.48,0-3.93-1.89-3.93-4.69,0-5.51,4.94-6.52,9.62-6.52v1.4m6.52,15.77c-.43.38-1.05.41-1.53.15-2.15-1.78-2.53-2.61-3.71-4.31-3.55,3.62-6.06,4.7-10.67,4.7-5.44,0-9.68-3.36-9.68-10.08,0-5.25,2.85-8.83,6.9-10.57,3.51-1.55,8.42-1.82,12.17-2.25v-.84c0-1.54.12-3.36-.78-4.69-.79-1.19-2.3-1.68-3.63-1.68-2.47,0-4.67,1.26-5.21,3.89-.11.58-.54,1.16-1.12,1.18l-6.28-.67c-.53-.12-1.11-.55-.96-1.36C3.5,3.29,10.37,1,16.52,1c3.15,0,7.26.84,9.75,3.22,3.15,2.94,2.85,6.86,2.85,11.13v10.08c0,3.03,1.26,4.36,2.44,6,.42.58.51,1.28-.02,1.72-1.32,1.1-3.67,3.15-4.96,4.3l-.02-.02" fill-rule="evenodd" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 415 65">
                  <path d="m386.08,20.04l9.13-15.82c.52-.89.2-2.01-.67-2.53s-2.01-.22-2.52.67l-9.25,16.02c-7.06-3.22-15-5.02-23.55-5.02s-16.49,1.8-23.55,5.02l-9.25-16.02c-.51-.88-1.64-1.19-2.52-.68,0,0,0,0,0,0-.88.51-1.19,1.64-.68,2.52,0,0,0,0,0,0l9.13,15.82c-15.75,8.53-26.41,24.47-28.17,43.13h110.08c-1.76-18.66-12.43-34.6-28.18-43.13h0Zm-52.13,27.67c-2.55,0-4.61-2.07-4.61-4.61s2.07-4.61,4.61-4.61,4.61,2.07,4.61,4.61c.01,2.54-2.06,4.61-4.61,4.61Zm50.53,0c-2.55,0-4.61-2.07-4.61-4.61s2.07-4.61,4.61-4.61,4.61,2.07,4.61,4.61c.01,2.54-2.06,4.61-4.61,4.61ZM20.54,21.11C10.78,21.11.74,28.94.74,42.63c0,12.52,8.83,21.36,19.8,21.36,9.06,0,13.1-6.08,13.1-6.08v2.65c0,1.25,1.18,2.65,2.65,2.65h6.55V22.05h-9.2v5.22s-4.07-6.16-13.1-6.16h0Zm1.64,8.42c8.04,0,12.25,7.07,12.25,13.1,0,6.72-5.01,13.09-12.24,13.09-6.04,0-12.1-4.9-12.1-13.18,0-7.48,5.21-13.01,12.08-13.01Zm33.45,33.69c-1.41,0-2.65-1.01-2.65-2.65V22.05h9.2v5.09c2.08-3.13,6.16-6.04,12.41-6.04,10.22,0,15.66,8.15,15.66,15.76v26.35h-6.39c-1.68,0-2.81-1.4-2.81-2.81v-21.52c0-4.22-2.59-9.35-8.57-9.35-6.46,0-10.3,6.1-10.3,11.84v21.83h-6.55Zm61.44-42.1c-9.76,0-19.8,7.82-19.8,21.52,0,12.52,8.83,21.36,19.8,21.36,9.06,0,13.1-6.08,13.1-6.08v2.65c0,1.25,1.18,2.65,2.65,2.65h6.55V1.47h-9.2v25.81s-4.07-6.16-13.1-6.16h0Zm1.64,8.42c8.04,0,12.25,7.07,12.25,13.1,0,6.72-5.01,13.09-12.24,13.09-6.04,0-12.1-4.9-12.1-13.18,0-7.48,5.21-13.01,12.08-13.01h0Zm33.45,33.69c-1.41,0-2.65-1.01-2.65-2.65V22.05h9.2v6.86c1.58-3.84,5-7.33,11.07-7.33,1.69,0,3.27.31,3.27.31v9.51s-1.98-.78-4.37-.78c-6.46,0-9.98,6.1-9.98,11.84v20.75h-6.55Zm76.72,0c-1.41,0-2.65-1.01-2.65-2.65V22.05h9.2v41.17h-6.55Zm33.53-42.1c-9.76,0-19.8,7.82-19.8,21.52,0,12.52,8.83,21.36,19.8,21.36,9.06,0,13.1-6.08,13.1-6.08v2.65c0,1.25,1.18,2.65,2.65,2.65h6.55V1.47h-9.2v25.81s-4.07-6.16-13.1-6.16h0Zm1.64,8.42c8.04,0,12.25,7.07,12.25,13.1,0,6.72-5.01,13.09-12.24,13.09-6.04,0-12.1-4.9-12.1-13.18,0-7.48,5.21-13.01,12.08-13.01ZM230.76,1c3.36,0,6.09,2.72,6.09,6.09s-2.72,6.09-6.09,6.09-6.09-2.72-6.09-6.09,2.72-6.09,6.09-6.09Zm-33.44,20.1c-10.23,0-21.46,7.63-21.46,21.46,0,12.6,9.57,21.44,21.44,21.44,14.63,0,21.77-11.76,21.77-21.36,0-11.78-9.2-21.54-21.75-21.54h0Zm.03,8.59c7.07,0,12.35,5.7,12.35,12.89s-5.6,12.97-12.33,12.97c-6.24,0-12.31-5.08-12.31-12.85s5.77-13.02,12.29-13.02h0Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 279 65">
                  <path d="m161.71,25.8h-10.93v1.16c3.42,0,3.97.73,3.97,5.07v7.82c0,4.34-.55,5.13-3.97,5.13-2.62-.37-4.4-1.77-6.84-4.46l-2.81-3.05c3.79-.67,5.8-3.05,5.8-5.74,0-3.36-2.87-5.92-8.24-5.92h-10.75v1.16c3.42,0,3.97.73,3.97,5.07v7.82c0,4.34-.55,5.13-3.97,5.13v1.16h12.15v-1.16c-3.42,0-3.97-.79-3.97-5.13v-2.2h1.04l6.78,8.49h17.77c8.73,0,12.52-4.64,12.52-10.2s-3.79-10.14-12.52-10.14h0Zm-25.58,9.95v-8.12h2.5c2.75,0,3.97,1.89,3.97,4.09s-1.22,4.03-3.97,4.03h-2.5Zm25.77,8.49h-.43c-2.2,0-2.5-.55-2.5-3.36v-13.25h2.93c6.35,0,7.51,4.64,7.51,8.24s-1.16,8.37-7.51,8.37Zm-67.96-6.23l4.21-12.46c1.22-3.6.67-4.64-3.24-4.64v-1.22h11.48v1.22c-3.85,0-4.76.92-6.29,5.37l-6.96,20.88h-.79l-6.23-19.11-6.35,19.11h-.79l-6.78-20.88c-1.47-4.46-2.44-5.37-5.98-5.37v-1.22h13.56v1.22c-3.6,0-4.58.85-3.3,4.64l4.09,12.46,6.17-18.32h1.16l6.04,18.32Zm20.76,8.91c-6.72,0-12.21-4.95-12.21-10.99s5.5-10.93,12.21-10.93,12.21,4.95,12.21,10.93-5.5,10.99-12.21,10.99Zm0-20.03c-5.62,0-7.57,5.07-7.57,9.04s1.95,9.04,7.57,9.04,7.63-5.01,7.63-9.04-1.95-9.04-7.63-9.04Zm74.62,18.01v1.22h-13.98v-1.22c4.09,0,4.82-1.04,4.82-7.14v-9.77c0-6.11-.73-7.08-4.82-7.08v-1.22h12.64c6.29,0,9.77,3.24,9.77,7.57s-3.48,7.51-9.77,7.51h-3.48v2.99c0,6.11.73,7.15,4.82,7.15h0Zm-1.34-23.02h-3.48v10.63h3.48c3.42,0,5.01-2.38,5.01-5.25s-1.59-5.37-5.01-5.37Zm51.72,18.5l-.31,1.1c-.55,2.02-1.22,2.75-5.56,2.75h-.86c-3.17,0-3.72-.73-3.72-5.07v-2.81c4.76,0,5.13.43,5.13,3.6h1.16v-9.1h-1.16c0,3.18-.37,3.6-5.13,3.6v-6.84h3.36c4.34,0,5.01.73,5.56,2.75l.31,1.16h.98l-.43-5.74h-17.95v1.16c3.42,0,3.97.73,3.97,5.07v7.82c0,3.97-.47,4.97-3.16,5.11-2.56-.39-4.32-1.79-6.73-4.44l-2.81-3.05c3.79-.67,5.8-3.05,5.8-5.74,0-3.36-2.87-5.92-8.24-5.92h-10.75v1.16c3.42,0,3.97.73,3.97,5.07v7.82c0,4.34-.55,5.13-3.97,5.13v1.16h12.15v-1.16c-3.42,0-3.97-.79-3.97-5.13v-2.2h1.04l6.78,8.49h25.1l.37-5.74h-.92Zm-32.36-4.64v-8.12h2.5c2.75,0,3.97,1.89,3.97,4.09s-1.22,4.03-3.97,4.03h-2.5Zm44.76,11.17c-2.44,0-4.58-1.28-5.5-2.08-.31.31-.85,1.22-.98,2.08h-1.16v-8.43h1.22c.49,4.03,3.3,6.41,6.9,6.41,1.95,0,3.54-1.1,3.54-2.93,0-1.59-1.4-2.81-3.91-3.97l-3.48-1.65c-2.44-1.16-4.27-3.18-4.27-5.86,0-2.93,2.75-5.43,6.53-5.43,2.02,0,3.72.73,4.76,1.59.3-.24.61-.92.79-1.65h1.16v7.21h-1.28c-.43-2.87-2.02-5.25-5.25-5.25-1.71,0-3.3.98-3.3,2.5s1.28,2.44,4.21,3.79l3.36,1.65c2.93,1.4,4.09,3.66,4.09,5.5,0,3.85-3.36,6.53-7.45,6.53h0Zm18.81,0c-2.44,0-4.58-1.28-5.5-2.08-.31.31-.85,1.22-.98,2.08h-1.16v-8.43h1.22c.49,4.03,3.3,6.41,6.9,6.41,1.95,0,3.54-1.1,3.54-2.93,0-1.59-1.4-2.81-3.91-3.97l-3.48-1.65c-2.44-1.16-4.27-3.18-4.27-5.86,0-2.93,2.75-5.43,6.53-5.43,2.02,0,3.72.73,4.76,1.59.3-.24.61-.92.79-1.65h1.16v7.21h-1.28c-.43-2.87-2.02-5.25-5.25-5.25-1.71,0-3.3.98-3.3,2.5s1.28,2.44,4.21,3.79l3.36,1.65c2.93,1.4,4.09,3.66,4.09,5.5,0,3.85-3.36,6.53-7.45,6.53h0ZM5.15,32.5c0,10.7,6.22,19.94,15.23,24.32L7.49,21.5c-1.55,3.46-2.34,7.21-2.34,11Zm45.27-1.36c0-3.34-1.2-5.65-2.23-7.45-1.37-2.23-2.65-4.11-2.65-6.34,0-2.48,1.88-4.8,4.54-4.8.12,0,.23.01.35.02-4.81-4.4-11.21-7.09-18.25-7.09-9.44,0-17.75,4.84-22.58,12.18.63.02,1.23.03,1.74.03,2.83,0,7.2-.34,7.2-.34,1.46-.09,1.63,2.05.17,2.23,0,0-1.46.17-3.09.26l9.84,29.27,5.91-17.74-4.21-11.54c-1.46-.09-2.83-.26-2.83-.26-1.46-.09-1.29-2.31.17-2.23,0,0,4.46.34,7.12.34,2.83,0,7.2-.34,7.2-.34,1.46-.09,1.63,2.05.17,2.23,0,0-1.47.17-3.09.26l9.77,29.05,2.7-9.01c1.17-3.74,2.06-6.42,2.06-8.74h0Zm-17.77,3.73l-8.11,23.56c2.48.73,5.05,1.1,7.63,1.1,3.15,0,6.16-.54,8.97-1.53-.07-.12-.14-.24-.19-.37l-8.31-22.76Zm23.24-15.33c.12.86.18,1.78.18,2.78,0,2.74-.51,5.82-2.05,9.68l-8.25,23.87c8.03-4.68,13.44-13.39,13.44-23.36,0-4.7-1.2-9.12-3.31-12.97h0ZM32.17,1C14.8,1,.67,15.13.67,32.5s14.13,31.5,31.5,31.5,31.5-14.13,31.5-31.5c0-17.37-14.13-31.5-31.5-31.5Zm0,61.56c-16.57,0-30.06-13.48-30.06-30.06S15.6,2.44,32.17,2.44s30.05,13.48,30.05,30.05-13.48,30.06-30.05,30.06Z" />
                </svg>
              </div>
            </div>
            <div class="col-6 col-md-4 col-xl-3 text-center">
              <div class="text-secondary bg-light px-4 py-3 px-md-6 py-md-4 px-lg-8 py-lg-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="65" fill="currentColor" viewBox="0 0 321 65">
                  <path d="m37.66,12.85l-18.56,11.85,18.56,11.85-18.56,11.85L.53,36.45l18.56-11.85L.53,12.85,19.1,1l18.56,11.85Zm-18.66,39.3l18.56-11.85,18.56,11.85-18.56,11.85-18.56-11.85Zm18.66-15.7l18.56-11.85-18.56-11.75L56.13,1l18.56,11.85-18.56,11.85,18.56,11.85-18.56,11.85-18.47-11.95Zm51.55-23.6h15.01c9.58,0,17.48,5.53,17.48,18.17v2.67c0,12.74-7.41,18.47-17.18,18.47h-15.31V12.85Zm8.39,7.11v24.98h6.42c5.43,0,9.08-3.55,9.08-11.45v-2.07c0-7.9-3.85-11.45-9.38-11.45h-6.12Zm28.54.39h6.71l1.09,7.41c1.28-5.04,4.54-7.7,10.47-7.7h2.07v8.49h-3.46c-6.81,0-8.49,2.37-8.49,9.08v14.61h-8.29v-31.89h-.1Zm22.02,16.59v-.89c0-10.66,6.81-16.49,16.1-16.49s16.1,5.83,16.1,16.49v.89c0,10.47-6.42,16.1-16.1,16.1-10.27-.1-16.1-5.63-16.1-16.1Zm23.7-.1v-.79c0-5.92-2.96-9.48-7.7-9.48s-7.7,3.26-7.7,9.48v.79c0,5.73,2.96,8.99,7.7,8.99,4.74-.1,7.7-3.26,7.7-8.99Zm12.84-16.49h6.91l.79,6.02c1.68-4.05,5.23-6.81,10.47-6.81,8.1,0,13.43,5.83,13.43,16.59v.89c0,10.47-5.92,16-13.43,16-5.04,0-8.49-2.27-10.17-5.92v16.1h-8.1l.1-42.86Zm23.21,16.49v-.69c0-6.32-3.26-9.48-7.6-9.48-4.64,0-7.7,3.55-7.7,9.48v.59c0,5.63,2.96,9.18,7.6,9.18,4.74-.1,7.7-3.16,7.7-9.08h0Zm20.64,9.48l-.69,5.83h-7.11V9.69h8.1v16.29c1.78-4.15,5.33-6.42,10.37-6.42,7.6.1,13.23,5.33,13.23,15.9v.99c0,10.57-5.33,16.59-13.43,16.59-5.33-.1-8.79-2.57-10.47-6.71h0Zm15.4-9.87v-.79c0-5.83-3.16-9.08-7.6-9.08s-7.7,3.65-7.7,9.18v.69c0,5.92,3.06,9.38,7.6,9.38,4.84,0,7.7-3.06,7.7-9.38Zm12.05.49v-.89c0-10.66,6.81-16.49,16.1-16.49s16.1,5.83,16.1,16.49v.89c0,10.47-6.52,16.1-16.1,16.1-10.27-.1-16.1-5.63-16.1-16.1Zm23.8-.1v-.79c0-5.92-2.96-9.48-7.7-9.48s-7.7,3.26-7.7,9.48v.79c0,5.73,2.96,8.99,7.7,8.99,4.74-.1,7.7-3.26,7.7-8.99Zm19.26-1.18l-11.16-15.31h9.58l6.42,9.58,6.52-9.58h9.48l-11.36,15.21,11.95,16.59h-9.38l-7.31-10.57-7.11,10.57h-9.78l12.15-16.49Z" />
                </svg>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="cta">
        <div class="container">

          <div class="title-wrapper">
            <h2 class="cta-title">Trial start first 30 days.</h2>

            <p class="cta-text">
              Enter your email to create or restart your membership.
            </p>
          </div>

          <form action="" class="cta-form">
            <input type="email" name="email" required placeholder="Enter your email" class="email-field">

            <button type="submit" class="cta-form-btn">Get started</button>
          </form>

        </div>
      </section>

    </article>
  </main>

  <footer class="footer">

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand-wrapper">


          <ul class="footer-list">

            <li>
              <a href="./index.html" class="footer-link">Dashboard</a>
            </li>

            <li>
              <a href="#" class="footer-link">Movie</a>
            </li>

            <li>
              <a href="#" class="footer-link">TV Show</a>
            </li>

            <li>
              <a href="#" class="footer-link">Web Series</a>
            </li>

            <li>
              <a href="#" class="footer-link">Pricing</a>
            </li>

          </ul>

        </div>

        <div class="divider"></div>

        <div class="quicklink-wrapper">

          <ul class="quicklink-list">

            <li>
              <a href="#" class="quicklink-link">Faq</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Help center</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Terms of use</a>
            </li>

            <li>
              <a href="#" class="quicklink-link">Privacy</a>
            </li>

          </ul>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-pinterest"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-linkedin"></ion-icon>
              </a>
            </li>

          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">

        <p class="copyright">
          &copy; 2022 <a href="#">codewithsadee</a>. All Rights Reserved
        </p>

        <img src="./assets/images/footer-bottom-img.png" alt="Online banking companies logo" class="footer-bottom-img">

      </div>
    </div>

  </footer>





  <!-- 
    - #GO TO TOP
  -->

  <a href="#top" class="go-top" data-go-top>
    <ion-icon name="chevron-up"></ion-icon>
  </a>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </body>
</html>
