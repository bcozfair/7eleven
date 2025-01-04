<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        {{-- bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title class="next-head"> {{ $title }} </title>
    <link rel="stylesheet" href="_next/static/css/styles.6f8b094f.chunk.css" />
    <style id="__jsx-4136534482">
        #nprogress {
            pointer-events: none;
        }

        #nprogress .bar {
            background: #00aa55;
            position: fixed;
            z-index: 1031;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
        }

        #nprogress .peg {
            display: block;
            position: absolute;
            right: 0px;
            width: 100px;
            height: 100%;
            box-shadow: 0 0 10px #00aa55, 0 0 5px #00aa55;
            opacity: 1;
            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            -webkit-transform: rotate(3deg) translate(0px, -4px);
            -ms-transform: rotate(3deg) translate(0px, -4px);
            transform: rotate(3deg) translate(0px, -4px);
        }

        #nprogress .spinner {
            display: "none";
            position: fixed;
            z-index: 1031;
            top: 15px;
            right: 15px;
        }

        #nprogress .spinner-icon {
            width: 18px;
            height: 18px;
            box-sizing: border-box;
            border: solid 2px transparent;
            border-top-color: #00aa55;
            border-left-color: #00aa55;
            border-radius: 50%;
            -webkit-animation: nprogresss-spinner 400ms linear infinite;
            -webkit-animation: nprogress-spinner 400ms linear infinite;
            animation: nprogress-spinner 400ms linear infinite;
        }

        .nprogress-custom-parent {
            overflow: hidden;
            position: relative;
        }

        .nprogress-custom-parent #nprogress .spinner,
        .nprogress-custom-parent #nprogress .bar {
            position: absolute;
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @-webkit-keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        @keyframes nprogress-spinner {
            0% {
                -webkit-transform: rotate(0deg);
                -ms-transform: rotate(0deg);
                transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
                -ms-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }
    </style>
    <style
        data-styled="lphHRx dPZmDC dBZNlS ibJmBf jsnzna djclUK kPOPfn goqUjQ jsICAL fBOFqU gaDhCh jjHUjo iwRKYT kebcJM ifJoTz jqGYPy pqAel"
        data-styled-version="4.2.0">
        /* sc-component-id: header-sc-1a6xmt4-0 */
        .lphHRx {
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            z-index: 100;
            background-color: white;
        }

        .lphHRx::after {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            pointer-events: none;
            box-shadow: 0 5px 10px 0 rgba(208, 208, 208, 0.5);
        }

        .lphHRx .site-header-menu-icons {
            position: relative;
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-menu-icons {
                padding-left: 10px;
                padding-right: 2px;
            }
        }

        .lphHRx .site-header-menu-icons::before {
            background-image: repeating-linear-gradient(0deg,
                    #d9dee3,
                    #d9dee3 6px,
                    transparent 4px,
                    transparent 10px);
            position: absolute;
            left: 0;
            top: 50%;
            bottom: auto;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            width: 1px;
            height: 46px;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-menu-icons::before {
                content: "";
            }
        }

        .lphHRx .site-header-toggle {
            cursor: pointer;
            position: relative;
            width: 44px;
            height: 44px;
            margin-left: -11px;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-toggle {
                display: none;
            }
        }

        .lphHRx .site-header-toggle-inner {
            position: absolute;
            width: 22px;
            height: 17px;
            right: 0;
            bottom: 0;
            left: 0;
            top: 0;
            margin: auto;
        }

        .lphHRx .site-header-toggle span {
            display: block;
            position: absolute;
            width: 100%;
            height: 3px;
            right: 0;
            left: 0;
            margin: auto;
            overflow: hidden;
            opacity: 1;
            -webkit-transform: rotate(0deg);
            -ms-transform: rotate(0deg);
            transform: rotate(0deg);
            -webkit-transition: 0.25s ease-in-out;
            transition: 0.25s ease-in-out;
            -webkit-backface-visibility: hidden;
            backface-visibility: hidden;
        }

        .lphHRx .site-header-toggle span:nth-child(1) {
            top: 0px;
            background-color: #f26f21;
        }

        .lphHRx .site-header-toggle span:nth-child(2) {
            top: 7px;
            background-color: #ec1d25;
        }

        .lphHRx .site-header-toggle span:nth-child(3) {
            top: 14px;
            background-color: #00a54f;
        }

        .lphHRx .site-header-logo {
            font-size: 0;
            height: 100%;
            max-width: 74px;
            position: absolute;
            top: 0;
            left: 50%;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-logo {
                position: relative;
                top: auto;
                left: auto;
                -webkit-transform: none;
                -ms-transform: none;
                transform: none;
            }
        }

        .lphHRx .site-header-logo a {
            display: block;
            height: 100%;
        }

        .lphHRx .site-header-logo a img {
            width: auto;
            height: 100%;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-logo+.site-header-menu-icons {
                display: none;
            }
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-menu {
                height: 100%;
                padding-left: 10px;
                padding-right: 2px;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-header-menu {
                padding-bottom: 18px;
            }
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-wrapper {
                -webkit-box-flex: 1;
                -webkit-flex-grow: 1;
                -ms-flex-positive: 1;
                flex-grow: 1;
                -webkit-flex-basis: 0;
                -ms-flex-preferred-size: 0;
                flex-basis: 0;
                max-width: 100%;
                height: 100%;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-header-wrapper {
                position: fixed;
                top: 0;
                left: 0;
                max-width: 365px;
                width: 88.16425120772947%;
                height: 100%;
                background-color: #fff;
                z-index: 1;
                -webkit-transform: translate(-100%, 0);
                -ms-transform: translate(-100%, 0);
                transform: translate(-100%, 0);
                -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
                -webkit-transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
                transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
            }

            .lphHRx .site-header-wrapper.is-active {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                transform: translate(0, 0);
                -webkit-transition: -webkit-transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
                -webkit-transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
                transition: transform 0.4s cubic-bezier(0.86, 0, 0.07, 1);
            }

            .lphHRx .site-header-wrapper.is-active .site-header-overlay {
                display: block;
            }

            .lphHRx .site-header-wrapper.is-active .site-header-inner {
                box-shadow: 4px 0 8px rgba(0, 0, 0, 0.2);
                -webkit-transition: box-shadow 0.4s ease;
                transition: box-shadow 0.4s ease;
            }
        }

        .lphHRx .site-header-overlay {
            position: absolute;
            left: 100%;
            top: 0;
            width: calc(100vw - 365px);
            height: 100%;
            background-color: rgba(0, 0, 0, 0);
            display: none;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-inner {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: justify;
                -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                justify-content: space-between;
                -webkit-flex-direction: row-reverse;
                -ms-flex-direction: row-reverse;
                flex-direction: row-reverse;
                height: 100%;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-header-inner {
                width: 100%;
                height: 100%;
                overflow: hidden;
                overflow-y: auto;
                -webkit-overflow-scrolling: touch;
                -webkit-transition: box-shadow 0.4s ease;
                transition: box-shadow 0.4s ease;
            }
        }

        .lphHRx .site-header-close {
            position: absolute;
            top: 33px;
            right: 14px;
            z-index: 999;
            border-radius: 100%;
            overflow: hidden;
            font-size: 0;
            box-shadow: 0 2px 4px 0 rgba(173, 173, 173, 0.5);
            cursor: pointer;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-close {
                display: none;
            }
        }

        .lphHRx .site-header-left,
        .lphHRx .site-header-right {
            position: relative;
        }

        @media (min-width: 1024px) {

            .lphHRx .site-header-left,
            .lphHRx .site-header-right {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                height: 100%;
            }
        }

        @media (max-width: 1023px) {

            .lphHRx .site-header-left,
            .lphHRx .site-header-right {
                padding-left: 10px;
                padding-right: 2px;
            }
        }

        .lphHRx .site-header-left {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
        }

        @media (max-width: 1023px) {}

        @media (max-width: 1023px) {
            .lphHRx .site-header-right {
                padding-top: 25px;
                background-image: url(https://www.7eleven.co.th/static/imgs/menu/bg.jpg);
                background-repeat: no-repeat;
                background-size: 100% auto;
                background-position: left top;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-header-right .site-header-menu-icons {
                display: none;
            }
        }

        .lphHRx .site-header-container {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 44px;
        }

        @media (min-width: 768px) {
            .lphHRx .site-header-container {
                height: 64px;
            }
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-container {
                height: 74px;
            }
        }

        .lphHRx .site-header-container::before,
        .lphHRx .site-header-container::after {
            content: "";
            background-image: url("https://www.7eleven.co.th/static/imgs/header/bg-header.svg?timestamp=1.6.22");
            background-repeat: repeat-x;
            background-position: 0 0;
            width: 25%;
            height: 47px;
            position: absolute;
            top: 50%;
            bottom: auto;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        @media (min-width: 1440px) {

            .lphHRx .site-header-container::before,
            .lphHRx .site-header-container::after {
                width: 30vw;
            }
        }

        .lphHRx .site-header-container::before {
            right: calc(100% + 35px);
        }

        .lphHRx .site-header-container::after {
            left: calc(100% + 35px);
        }

        .lphHRx .site-menu-links {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-menu-links {
                height: 100%;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-menu-links {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-menu-links:not(:first-child) {
                margin-top: 40px;
            }
        }

        @media (min-width: 1024px) {
            .lphHRx .site-menu-links--mobile {
                display: none;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-menu-links--mobile {
                display: block;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-menu-links--half {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                -webkit-flex-direction: row;
                -ms-flex-direction: row;
                flex-direction: row;
                padding-top: 10px;
                padding-bottom: 10px;
                position: relative;
            }

            .lphHRx .site-menu-links--half::before {
                content: "";
                display: block;
                position: absolute;
                left: -20px;
                right: -20px;
                top: 0;
                bottom: 0;
                background: #ffffff;
                box-shadow: 0 0 12px 0 rgba(234, 234, 234, 0.5);
            }

            .lphHRx .site-menu-links--half .site-menu-links-item {
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }

            .lphHRx .site-menu-links--half .site-menu-links-item::before {
                content: none;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-menu-links--logout .site-menu-links-item::before {
                content: none;
            }
        }

        @media (hover: hover) {

            .lphHRx .site-menu-links a,
            .lphHRx .site-menu-links button {
                -webkit-transition: color 0.17s ease;
                transition: color 0.17s ease;
            }

            .lphHRx .site-menu-links a:hover,
            .lphHRx .site-menu-links button:hover {
                color: #00a550;
                -webkit-transition: color 0.17s ease;
                transition: color 0.17s ease;
            }
        }

        .lphHRx .site-menu-links button,
        .lphHRx .site-menu-links-item {
            position: relative;
            cursor: pointer;
            display: block;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            color: #525252;
            width: calc(100% - 30px);
        }

        @media (min-width: 1024px) {

            .lphHRx .site-menu-links button,
            .lphHRx .site-menu-links-item {
                width: auto;
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                -ms-flex-pack: center;
                justify-content: center;
                padding-top: 4px;
            }
        }

        @media (max-width: 1023px) {

            .lphHRx .site-menu-links button,
            .lphHRx .site-menu-links-item {
                padding: 6px 0;
                text-align: left;
            }
        }

        @media (min-width: 1024px) {

            .lphHRx .site-menu-links button.is-mobile,
            .lphHRx .site-menu-links-item.is-mobile {
                display: none;
            }
        }

        @media (max-width: 1023px) {

            .lphHRx .site-menu-links button.is-mobile,
            .lphHRx .site-menu-links-item.is-mobile {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
            }
        }

        @media (min-width: 1024px) {

            .lphHRx .site-menu-links button:not(:last-child),
            .lphHRx .site-menu-links-item:not(:last-child) {
                margin-right: 20px;
            }
        }

        .lphHRx .site-menu-links button:before,
        .lphHRx .site-menu-links-item:before {
            display: block;
            position: absolute;
            left: 0;
            bottom: 0;
            height: 1px;
            width: 100%;
            background-image: repeating-linear-gradient(90deg,
                    #d9dee3,
                    #d9dee3 6px,
                    #0000 4px,
                    #0000 10px);
        }

        @media (max-width: 1023px) {

            .lphHRx .site-menu-links button:before,
            .lphHRx .site-menu-links-item:before {
                content: none;
            }
        }

        .lphHRx .site-menu-links button i,
        .lphHRx .site-menu-links-item i {
            width: 30px;
            height: 30px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin-right: 15px;
        }

        @media (min-width: 1024px) {

            .lphHRx .site-menu-links button i,
            .lphHRx .site-menu-links-item i {
                height: 22px;
                margin-right: 0;
            }
        }

        @media (min-width: 1024px) {

            .lphHRx .site-menu-links button i+span,
            .lphHRx .site-menu-links-item i+span {
                margin-top: 13px;
            }
        }

        .lphHRx .site-menu-links button span,
        .lphHRx .site-menu-links-item span {
            position: relative;
            color: currentColor;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 18px;
            line-height: 1;
        }

        .lphHRx .site-menu-links button span:after,
        .lphHRx .site-menu-links-item span:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: -8px;
            width: 100%;
            height: 3px;
            background-color: #00a550;
            border-radius: 50em;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            -webkit-transform: scaleX(0);
            -ms-transform: scaleX(0);
            transform: scaleX(0);
            -webkit-transition: -webkit-transform 0.17s ease;
            -webkit-transition: transform 0.17s ease;
            transition: transform 0.17s ease;
        }

        @media (max-width: 1023px) {

            .lphHRx .site-menu-links button span:after,
            .lphHRx .site-menu-links-item span:after {
                bottom: 0;
            }
        }

        .lphHRx .site-menu-links button .submenu-toggle,
        .lphHRx .site-menu-links-item .submenu-toggle {
            position: absolute;
            z-index: 10;
            left: 100%;
            margin-right: 0;
            text-align: center;
            display: none;
        }

        .lphHRx .site-menu-links button .submenu-toggle.is-active,
        .lphHRx .site-menu-links-item .submenu-toggle.is-active {
            -webkit-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            transform: rotate(180deg);
        }

        @media (max-width: 1023px) {

            .lphHRx .site-menu-links button .submenu-toggle,
            .lphHRx .site-menu-links-item .submenu-toggle {
                display: block;
            }
        }

        @media (min-width: 1024px) {

            .lphHRx .site-menu-links button.is-active span:after,
            .lphHRx .site-menu-links-item.is-active span:after {
                -webkit-transform: scaleX(1);
                -ms-transform: scaleX(1);
                transform: scaleX(1);
            }

            @media (hover: hover) {

                .lphHRx .site-menu-links button:hover .menu-label span:after,
                .lphHRx .site-menu-links-item:hover .menu-label span:after {
                    -webkit-transform: scaleX(1);
                    -ms-transform: scaleX(1);
                    transform: scaleX(1);
                    -webkit-transition: -webkit-transform 0.17s ease;
                    -webkit-transition: transform 0.17s ease;
                    transition: transform 0.17s ease;
                }
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .site-menu-links:not(.site-menu-links--half) .site-menu-links-item {
                position: relative;
            }

            .lphHRx .site-menu-links:not(.site-menu-links--half) .site-menu-links-item:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                width: calc(100% + 30px);
                height: 1px;
                background-image: url("https://www.7eleven.co.th/static/imgs/account/bg-dashed.svg");
                background-repeat: repeat-x;
            }
        }

        .lphHRx .menu-label {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (min-width: 1024px) {
            .lphHRx .menu-label {
                -webkit-flex-direction: column;
                -ms-flex-direction: column;
                flex-direction: column;
            }
        }

        .lphHRx .submenu {
            position: absolute;
            left: 0;
            top: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            display: none;
            background: #ffffff;
        }

        .lphHRx .submenu.is-full::before {
            content: "";
            background: white;
            position: absolute;
            left: -50vw;
            top: 0;
            width: 200vw;
            height: 100%;
            box-shadow: 0 2px 4px 0 rgba(230, 230, 230, 0.5);
        }

        .lphHRx .submenu.is-full .submenu-box {
            -webkit-flex: 0 0 200px;
            -ms-flex: 0 0 200px;
            flex: 0 0 200px;
            max-width: 200px;
            margin-bottom: 0;
            padding-right: 16px;
            padding-left: 16px;
            box-shadow: none;
        }

        .lphHRx .submenu.is-full .submenu-box:after {
            content: "";
            background-image: repeating-linear-gradient(0deg,
                    #d9dee3,
                    #d9dee3 6px,
                    transparent 4px,
                    transparent 10px);
            position: absolute;
            right: 0;
            top: auto;
            bottom: 40px;
            width: 1px;
            height: calc(100% - 120px);
        }

        .lphHRx .submenu.is-full .submenu-box h3 {
            margin-bottom: 0;
        }

        .lphHRx .submenu.is-full .submenu-box h3>span {
            font-size: 23px;
            border-bottom: 2px solid #00a550;
        }

        .lphHRx .submenu.is-full .submenu-box h3>span:after {
            content: none;
        }

        @media (max-width: 1024px) {
            .lphHRx .submenu.is-full .submenu-box h3>span {
                font-size: 18px;
                border-bottom: 0;
            }
        }

        .lphHRx .submenu.is-full .submenu-box ul {
            margin-top: 21px;
        }

        .lphHRx .submenu:not(.is-full) .submenu-box>h3:not(:last-child),
        .lphHRx .submenu:not(.is-full) .submenu-box .submenu-box__item {
            position: relative;
        }

        .lphHRx .submenu:not(.is-full) .submenu-box>h3:not(:last-child):after,
        .lphHRx .submenu:not(.is-full) .submenu-box .submenu-box__item:after {
            content: "";
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 1px;
            background-image: url("https://www.7eleven.co.th/static/imgs/account/bg-dashed.svg");
            background-repeat: repeat-x;
        }

        .lphHRx .submenu .submenu-box {
            background-color: #fff;
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex: 0 0 200px;
            -ms-flex: 0 0 200px;
            flex: 0 0 200px;
            max-width: none;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            padding-top: 40px;
            padding-bottom: 40px;
            padding-right: 30px;
            padding-left: 30px;
            box-shadow: 0 2px 2px rgba(0, 0, 0, 0.1);
        }

        .lphHRx .submenu .submenu-box:not(:last-child) {
            margin-right: 16px;
        }

        .lphHRx .submenu .submenu-box:not(:last-child) ul::after {
            content: "";
        }

        .lphHRx .submenu .submenu-box:last-child {
            margin-bottom: 0;
        }

        .lphHRx .submenu .submenu-box button.is-active {
            color: #00a550;
        }

        .lphHRx .submenu .submenu-box__item h3 {
            margin-bottom: 0;
        }

        .lphHRx .submenu .submenu-box__item ul {
            padding: 0 20px;
            margin-bottom: 10px;
        }

        .lphHRx .submenu h3 {
            color: #636363;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 23px;
            line-height: 1;
            -webkit-letter-spacing: 0.04em;
            -moz-letter-spacing: 0.04em;
            -ms-letter-spacing: 0.04em;
            letter-spacing: 0.04em;
            white-space: nowrap;
            padding: 10px 0;
        }

        @media (max-width: 1023px) {
            .lphHRx .submenu h3 {
                padding: 15px 0;
            }
        }

        @media (hover: hover) {
            .lphHRx .submenu h3:hover {
                color: #00a550;
            }
        }

        .lphHRx .submenu h3.is-active {
            color: #00a550;
        }

        .lphHRx .submenu ul {
            height: 100%;
            position: relative;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .lphHRx .submenu ul li {
            display: block;
            color: #525252;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 20px;
            line-height: 1;
            -webkit-letter-spacing: 0.044em;
            -moz-letter-spacing: 0.044em;
            -ms-letter-spacing: 0.044em;
            letter-spacing: 0.044em;
        }

        .lphHRx .submenu ul li:not(:last-child) {
            margin-bottom: 5px;
        }

        .lphHRx .submenu ul li a {
            display: inline-block;
            color: currentColor;
        }

        .lphHRx .submenu ul li a.highlight {
            color: #00a550;
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
        }

        @media (max-width: 1023px) {
            .lphHRx .submenu ul {
                margin-top: 0;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .submenu {
                padding: 0 0 0 45px;
            }

            .lphHRx .submenu.is-active {
                display: block;
                position: relative;
            }

            .lphHRx .submenu.is-full h3,
            .lphHRx .submenu:not(.is-full) h3 {
                position: relative;
                font-size: 18px;
            }

            .lphHRx .submenu.is-full h3:after,
            .lphHRx .submenu:not(.is-full) h3:after {
                content: "";
                position: absolute;
                left: 0;
                bottom: 0;
                width: calc(100% + 30px) !important;
                height: 1px;
                background-image: url("https://www.7eleven.co.th/static/imgs/account/bg-dashed.svg");
                background-repeat: repeat-x;
            }

            .lphHRx .submenu.is-full h3>span,
            .lphHRx .submenu:not(.is-full) h3>span {
                font-family: DBHelvethaicaMonX;
                font-weight: normal;
                line-height: 1;
                -webkit-letter-spacing: 0.04em;
                -moz-letter-spacing: 0.04em;
                -ms-letter-spacing: 0.04em;
                letter-spacing: 0.04em;
            }

            .lphHRx .submenu.is-full .submenu-box,
            .lphHRx .submenu:not(.is-full) .submenu-box {
                max-width: none;
                padding: 0;
                margin: 10px 0;
                max-width: none;
                box-shadow: none;
            }

            .lphHRx .submenu.is-full .submenu-box ul,
            .lphHRx .submenu:not(.is-full) .submenu-box ul {
                display: none;
                margin-top: 0;
            }

            .lphHRx .submenu.is-full .submenu-box ul.is-active,
            .lphHRx .submenu:not(.is-full) .submenu-box ul.is-active {
                display: block;
            }

            .lphHRx .submenu.is-full .submenu-box:not(:last-child),
            .lphHRx .submenu:not(.is-full) .submenu-box:not(:last-child) {
                margin-right: 0;
            }

            .lphHRx .submenu.is-full .submenu-box:after,
            .lphHRx .submenu:not(.is-full) .submenu-box:after {
                content: none;
            }

            .lphHRx .submenu.is-full:before {
                content: none;
            }

            .lphHRx .submenu.is-full h3 {
                padding: 0 0 10px;
            }

            .lphHRx .submenu.is-full .submenu-box .submenu-toggle {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                top: -3px;
            }

            .lphHRx .submenu:not(.is-full) h3 {
                padding: 10px 0;
            }

            .lphHRx .submenu:not(.is-full) .submenu-box {
                margin: 0;
            }

            .lphHRx .submenu:not(.is-full) .submenu-box h3:last-child:after {
                content: none;
            }

            .lphHRx .submenu:not(.is-full) .submenu-box .submenu-toggle {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                top: 5px;
            }

            .lphHRx .submenu:not(.is-full) .submenu-box__item ul {
                margin: 5px 0;
            }
        }

        @media (min-width: 1024px) {
            @media (hover: hover) {
                .lphHRx .site-menu-links-item:hover .submenu {
                    display: -webkit-box;
                    display: -webkit-flex;
                    display: -ms-flexbox;
                    display: flex;
                }
            }
        }

        .lphHRx .site-menu-icons {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            height: 100%;
        }

        .lphHRx .site-menu-icons-item {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .lphHRx .site-menu-icons-item:not(:last-child) {
            margin-right: 10px;
        }

        @media (min-width: 1024px) {
            .lphHRx .site-menu-icons-item:not(:last-child) {
                margin-right: 20px;
            }
        }

        @media (min-width: 1024px) {
            .lphHRx .site-menu-icons-item.find-store {
                display: none;
            }
        }

        .lphHRx .site-menu-icons-item i {
            width: 24px;
            height: 24px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .lphHRx .site-menu-icons-item span.count {
            position: absolute;
            top: -2px;
            right: calc(100% - 10px);
            background: #ff0000;
            border-radius: 50em;
            min-width: 16px;
            height: 16px;
            padding-left: 4px;
            padding-right: 4px;
            color: #fff;
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
            font-size: 16px;
            line-height: 14px;
            padding-top: 2px;
            text-align: center;
            box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
        }

        @media (min-width: 1024px) {
            .lphHRx .site-header-card {
                margin-left: 20px;
            }
        }

        .lphHRx .allmember-card {
            position: relative;
            display: block;
            width: 100%;
        }

        @media (min-width: 1024px) {
            .lphHRx .allmember-card {
                width: 96px;
            }
        }

        .lphHRx .allmember-card::before {
            content: "";
            display: block;
            position: relative;
            width: 100%;
            padding-top: 47.692307692307695%;
        }

        @media (min-width: 1024px) {
            .lphHRx .allmember-card::before {
                padding-top: 63.24786324786325%;
            }
        }

        .lphHRx .allmember-card--hidden {
            display: none;
        }

        .lphHRx .allmember-card-inner {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
            border-radius: 15px 15px 0 0;
            overflow: hidden;
        }

        @media (min-width: 1024px) {
            .lphHRx .allmember-card-inner {
                border-radius: 5px;
                box-shadow: 0 2px 4px 0 rgba(148, 148, 148, 0.5);
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .allmember-card-inner {
                box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.5);
            }
        }

        .lphHRx .allmember-card-image {
            background-color: #fefefe;
        }

        .lphHRx .allmember-card-image img {
            display: block;
            border-radius: 15px 15px 0 0;
            overflow: hidden;
            width: 100%;
        }

        @media (min-width: 1024px) {
            .lphHRx .allmember-card-image img {
                border-radius: 5px;
            }
        }

        .lphHRx .allmember-card-content {
            position: absolute;
            left: 0;
            right: 0;
            bottom: 0;
            top: 0;
        }

        .lphHRx .allmember-card-logined .allmember-card-content {
            right: 0;
            text-align: right;
            padding-right: 4px;
        }

        @media (max-width: 1023px) {
            .lphHRx .allmember-card-logined .allmember-card-content {
                padding-right: 10px;
            }
        }

        .lphHRx .allmember-card-logined .card-point {
            color: #1d4d9c;
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
            font-size: 20px;
            line-height: 0.9em;
        }

        @media (max-width: 1023px) {
            .lphHRx .allmember-card-logined .card-point {
                font-size: 46px;
                margin-top: 3px;
            }
        }

        .lphHRx .allmember-card-logined .card-unit {
            color: black;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 10px;
            line-height: 1;
            margin-top: -4px;
        }

        @media (max-width: 1023px) {
            .lphHRx .allmember-card-logined .card-unit {
                color: #1d4d9c;
                font-family: DBHelvethaicaMonXBd;
                font-weight: normal;
                font-size: 20px;
                margin-right: 2px;
                margin-top: -8px;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .allmember-card-login {
                position: absolute;
                left: 0;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }
        }

        .lphHRx .allmember-card-login .card-text p {
            color: white;
            font-family: DBHelvethaicaMonXCond;
            font-weight: normal;
            font-size: 14px;
            line-height: 1;
            -webkit-letter-spacing: 0.009em;
            -moz-letter-spacing: 0.009em;
            -ms-letter-spacing: 0.009em;
            letter-spacing: 0.009em;
        }

        .lphHRx .allmember-card-login .card-text p span {
            display: block;
            font-size: 10px;
        }

        .lphHRx .allmember-card-login .allmember-card-content {
            left: 30px;
            padding-top: 10px;
        }

        .lphHRx .allmember-card-login .card-point-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            color: white;
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
            font-size: 14px;
            line-height: 1;
            -webkit-letter-spacing: 0.016em;
            -moz-letter-spacing: 0.016em;
            -ms-letter-spacing: 0.016em;
            letter-spacing: 0.016em;
        }

        .lphHRx .allmember-card-login .card-unit {
            padding-left: 4px;
        }

        .lphHRx .account {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (max-width: 1023px) {
            .lphHRx .account {
                margin-bottom: 62px;
            }
        }

        .lphHRx .account-avatar {
            -webkit-flex: 0 0 46px;
            -ms-flex: 0 0 46px;
            flex: 0 0 46px;
            max-width: 46px;
        }

        @media (max-width: 1023px) {
            .lphHRx .account-avatar {
                -webkit-flex: 0 0 50px;
                -ms-flex: 0 0 50px;
                flex: 0 0 50px;
                max-width: 50px;
            }
        }

        .lphHRx .account-avatar a {
            position: relative;
            border-radius: 50%;
            overflow: hidden;
            display: block;
            width: 46px;
            height: 46px;
            background-image: url("https://www.7eleven.co.th/static/imgs/header/avatar/avatar-bg.svg");
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: 100% auto;
            background-color: #00a550;
        }

        @media (max-width: 1023px) {
            .lphHRx .account-avatar a {
                width: 50px;
                height: 50px;
            }
        }

        .lphHRx .account-avatar img {
            border-radius: 50%;
            overflow: hidden;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            width: 100%;
            height: auto;
        }

        .lphHRx .account-detail {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            padding-left: 10px;
        }

        .lphHRx .account-login {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .lphHRx .account-login>* {
            color: #525252;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 20px;
            line-height: 1;
            -webkit-letter-spacing: 0.025em;
            -moz-letter-spacing: 0.025em;
            -ms-letter-spacing: 0.025em;
            letter-spacing: 0.025em;
        }

        .lphHRx .account-login a {
            color: currentColor;
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .lphHRx .account-login a+a {
            margin-left: 13px;
        }

        .lphHRx .account-login a+a::before {
            content: "";
            width: 1px;
            height: 14px;
            background-color: #d1d1d1;
            margin-right: 13px;
            display: block;
        }

        .lphHRx .account-name {
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
            max-width: 160px;
        }

        .lphHRx .account-name>* {
            color: #525252;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 20px;
            line-height: 1;
            -webkit-letter-spacing: 0.025em;
            -moz-letter-spacing: 0.025em;
            -ms-letter-spacing: 0.025em;
            letter-spacing: 0.025em;
        }

        .lphHRx .account-login+.account-progress,
        .lphHRx .account-name+.account-progress {
            margin-top: 5px;
            margin-bottom: 5px;
        }

        @media (max-width: 1023px) {

            .lphHRx .account-login+.account-progress,
            .lphHRx .account-name+.account-progress {
                margin-top: 15px;
                margin-bottom: 0;
            }
        }

        @media (max-width: 1023px) {
            .lphHRx .account-progress {
                position: absolute;
                left: 0;
                top: 100%;
                width: 100%;
            }
        }

        .lphHRx .account-progress .progress {
            position: relative;
            background-color: #e3e3e3;
            width: 145px;
            height: 15px;
            border-radius: 50em;
        }

        @media (max-width: 1023px) {
            .lphHRx .account-progress .progress {
                width: 100%;
                height: 22px;
                box-shadow: 0 2px 4px 0 rgba(191, 191, 191, 0.5);
            }
        }

        .lphHRx .account-progress span.level {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
            font-size: 12px;
            line-height: 15px;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            text-align: center;
        }

        @media (max-width: 1023px) {
            .lphHRx .account-progress span.level {
                font-size: 18px;
                line-height: 22px;
            }
        }

        .lphHRx .account-progress span.question {
            position: absolute;
            right: 4px;
            top: 3px;
            bottom: auto;
            background-image: url("https://www.7eleven.co.th/static/imgs/header/avatar/question.svg");
            background-repeat: no-repeat;
            background-position: 0 0;
            background-size: 100% auto;
            background-color: #ff0000;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            box-shadow: 0 1px 1px 0 rgba(120, 120, 120, 0.5);
            font-size: 0;
        }

        @media (max-width: 1023px) {
            .lphHRx .account-progress span.question {
                width: 16px;
                height: 16px;
            }
        }

        .lphHRx .account-progress .progress-bar {
            position: absolute;
            left: 0;
            top: 0;
            width: 0%;
            height: 100%;
            border-radius: 50em;
            background-color: #ffba02;
        }

        .lphHRx .account-progress .progress-bar::after {
            content: "";
            background-image: url("https://www.7eleven.co.th/static/imgs/header/avatar/star.png");
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            width: 32px;
            height: 31px;
            position: absolute;
            top: 50%;
            right: -15px;
            bottom: auto;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }

        @media (max-width: 1023px) {
            .lphHRx .account-progress .progress-bar::after {
                width: 40px;
                right: -20px;
            }
        }

        .lphHRx .tooltip .tooltip-text {
            visibility: hidden;
            width: 90px;
            background-color: #fff;
            color: #636363;
            font-size: 18px;
            font-style: normal;
            text-align: center;
            border-radius: 6px;
            padding: 5px 0;
            position: absolute;
            z-index: 1;
            top: 30px;
            opacity: 0;
            -webkit-transition: opacity 0.3s;
            transition: opacity 0.3s;
            box-shadow: 2px 2px 4px 2px rgba(0, 0, 0, 0.1);
        }

        @media (max-width: 1024px) {
            .lphHRx .tooltip .tooltip-text {
                display: none;
            }
        }

        .lphHRx .tooltip:hover .tooltip-text {
            visibility: visible;
            opacity: 1;
        }

        @media (min-width: 1024px) and (max-width: 1105px) {

            .lphHRx .site-menu-links>a:nth-child(3),
            .lphHRx .site-menu-links a:nth-child(4) {
                display: none;
            }
        }

        /* sc-component-id: footer-sc-1uticjy-0 */
        .pqAel {
            overflow: hidden;
            background-color: #00693e;
            padding-top: 45px;
            padding-bottom: 45px;
        }

        .pqAel .footer-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        @media (max-width: 1024px) {
            .pqAel .footer-wrapper {
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
                display: block;
            }
        }

        .pqAel .footer-colomns {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin-left: -20px;
            margin-right: -20px;
        }

        @media (min-width: 1024px) {
            .pqAel .footer-colomns {
                -webkit-flex-wrap: nowrap;
                -ms-flex-wrap: nowrap;
                flex-wrap: nowrap;
            }
        }

        @media (min-width: 1440px) {
            .pqAel .footer-colomns {
                margin-left: -30px;
                margin-right: -30px;
            }
        }

        .pqAel .footer-colomn {
            position: relative;
            padding-left: 20px;
            padding-right: 20px;
            -webkit-flex: 0 0 100%;
            -ms-flex: 0 0 100%;
            flex: 0 0 100%;
            max-width: 100%;
        }

        .pqAel .footer-colomn:nth-child(1),
        .pqAel .footer-colomn:nth-child(2) {
            padding-left: 20px;
            padding-right: 20px;
            -webkit-flex: 0 0 50%;
            -ms-flex: 0 0 50%;
            flex: 0 0 50%;
            max-width: 50%;
        }

        @media (min-width: 425px) {
            .pqAel .footer-colomn {
                padding-left: 20px;
                padding-right: 20px;
                -webkit-flex: 0 0 50%;
                -ms-flex: 0 0 50%;
                flex: 0 0 50%;
                max-width: 50%;
            }
        }

        @media (min-width: 1024px) {
            .pqAel .footer-colomn {
                -webkit-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }

            .pqAel .footer-colomn:nth-child(1),
            .pqAel .footer-colomn:nth-child(2) {
                -webkit-flex-basis: auto;
                -ms-flex-preferred-size: auto;
                flex-basis: auto;
            }
        }

        @media (min-width: 1440px) {
            .pqAel .footer-colomn {
                padding-left: 30px;
                padding-right: 30px;
            }

            .pqAel .footer-colomn:nth-child(1),
            .pqAel .footer-colomn:nth-child(2) {
                padding-left: 30px;
                padding-right: 30px;
            }
        }

        @media (min-width: 1024px) {
            .pqAel .footer-colomn:not(:last-child)::after {
                content: "";
                position: absolute;
                top: -10px;
                right: 0;
                bottom: -10px;
                width: 1px;
                background-image: linear-gradient(0deg,
                        rgba(255, 255, 255, 0),
                        rgba(255, 255, 255, 0.25) 50%,
                        rgba(255, 255, 255, 0) 100%);
            }
        }

        .pqAel .footer-widget {
            margin-top: 30px;
        }

        @media (min-width: 1024px) {
            .pqAel .footer-widget {
                margin-top: 0;
            }
        }

        .pqAel .footer-widget+.footer-widget {
            margin-top: 33px;
        }

        .pqAel .footer-logo {
            margin-bottom: 20px;
        }

        @media (min-width: 1024px) {
            .pqAel .footer-logo {
                padding-right: 20px;
            }
        }

        @media (min-width: 1440px) {
            .pqAel .footer-logo {
                padding-right: 30px;
            }
        }

        .pqAel .footer-logo a {
            display: block;
            max-width: 80px;
        }


        .pqAel .footer-title>* {
            color: white;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 24px;
            line-height: 1;
            -webkit-letter-spacing: 0.025em;
            -moz-letter-spacing: 0.025em;
            -ms-letter-spacing: 0.025em;
            letter-spacing: 0.025em;
        }

        .pqAel .footer-title+.footer-menu {
            margin-top: 19px;
        }

        .pqAel .footer-title+.footer-download {
            margin-top: 23px;
        }

        .pqAel .footer-title+.footer-subscribe {
            margin-top: 14px;
        }

        .pqAel .footer-title+.footer-social {
            margin-top: 13px;
        }

        .pqAel .footer-subscribe .form-group {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            border: 1px solid #fff;
            border-radius: 5px;
            width: 100%;
            height: 40px;
            max-width: 260px;
            overflow: hidden;
            -webkit-transition: border-color 0.17s ease;
            transition: border-color 0.17s ease;
        }

        .pqAel .footer-subscribe .form-group.is-error {
            border-color: #ec1d24;
            -webkit-transition: border-color 0.17s ease;
            transition: border-color 0.17s ease;
        }

        @media (min-width: 1440px) {
            .pqAel .footer-subscribe .form-group {
                width: 260px;
            }
        }

        .pqAel .footer-subscribe .ui-hidden {
            color: transparent;
            font: 0/0 a !important;
            text-shadow: none;
            background-color: transparent;
            width: 1px;
            height: 1px;
            display: inline-block;
            overflow: hidden;
            position: absolute !important;
            border: 0 !important;
            padding: 0 !important;
            margin: 0 !important;
            -webkit-clip: rect(0 0 0 0);
            clip: rect(0 0 0 0);
        }

        .pqAel .footer-subscribe input,
        .pqAel .footer-subscribe select,
        .pqAel .footer-subscribe textarea,
        .pqAel .footer-subscribe button {
            background-color: transparent;
            border: none;
            border-radius: 0;
            box-shadow: none;
            color: inherit;
            font-size: inherit;
            margin: 0;
            padding: 0;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        .pqAel .footer-subscribe label,
        .pqAel .footer-subscribe input,
        .pqAel .footer-subscribe select,
        .pqAel .footer-subscribe textarea {
            position: relative;
            width: 100%;
            display: block;
        }

        .pqAel .footer-subscribe button {
            display: inline-block;
            text-align: center;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .pqAel .footer-subscribe input[type="email"] {
            color: white;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 18px;
            line-height: normal;
            -webkit-letter-spacing: 0.025em;
            -moz-letter-spacing: 0.025em;
            -ms-letter-spacing: 0.025em;
            letter-spacing: 0.025em;
            padding-left: 16px;
            padding-right: 16px;
        }

        .pqAel .footer-subscribe input[type="email"].placeholder {
            text-shadow: none;
            -webkit-text-fill-color: initial;
            opacity: 1;
            color: white;
        }

        .pqAel .footer-subscribe input[type="email"]:-moz-placeholder {
            text-shadow: none;
            -webkit-text-fill-color: initial;
            opacity: 1;
            color: white;
        }

        .pqAel .footer-subscribe input[type="email"]::-moz-placeholder {
            text-shadow: none;
            -webkit-text-fill-color: initial;
            opacity: 1;
            color: white;
        }

        .pqAel .footer-subscribe input[type="email"]:-ms-input-placeholder {
            text-shadow: none;
            -webkit-text-fill-color: initial;
            opacity: 1;
            color: white;
        }

        .pqAel .footer-subscribe input[type="email"]::-webkit-input-placeholder {
            text-shadow: none;
            -webkit-text-fill-color: initial;
            opacity: 1;
            color: white;
        }

        .pqAel .footer-subscribe button {
            padding-left: 16px;
            padding-right: 16px;
            background-color: white;
            color: #353a41;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 18px;
            line-height: normal;
            -webkit-letter-spacing: 0.025em;
            -moz-letter-spacing: 0.025em;
            -ms-letter-spacing: 0.025em;
            letter-spacing: 0.025em;
            white-space: nowrap;
            border-left: 1px solid #fff;
        }

        @media (hover: hover) {
            .pqAel .footer-subscribe button {
                -webkit-transition: background-color 0.17s ease,
                    color 0.17s ease;
                transition: background-color 0.17s ease, color 0.17s ease;
            }

            .pqAel .footer-subscribe button:hover {
                background-color: #00a550;
                color: #ffffff;
                -webkit-transition: background-color 0.17s ease,
                    color 0.17s ease;
                transition: background-color 0.17s ease, color 0.17s ease;
            }
        }

        .pqAel .footer-menu ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .pqAel .footer-menu li {
            color: white;
            font-family: DBHelvethaicaMonX;
            font-weight: normal;
            font-size: 18px;
            line-height: 1;
        }

        .pqAel .footer-menu li:not(:last-child) {
            margin-bottom: 5px;
        }

        .pqAel .footer-menu a {
            color: currentColor;
            cursor: pointer;
        }

        @media (hover: hover) {
            .pqAel .footer-menu a:hover {
                -webkit-text-decoration: underline;
                text-decoration: underline;
            }
        }

        .pqAel .footer-download {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-left: -10px;
            margin-right: -10px;
        }

        .pqAel .footer-download-item {
            padding-left: 10px;
            padding-right: 10px;
        }

        .pqAel .footer-download-app:not(:last-child) {
            margin-bottom: 10px;
        }

        .pqAel .footer-download-app img {
            min-width: 100px;
        }

        .pqAel .footer-social ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .pqAel .footer-social li:not(:last-child) {
            margin-right: 20px;
        }

        .pqAel .footer-social a {
            display: block;
            -webkit-transform: translate(0, 0);
            -ms-transform: translate(0, 0);
            transform: translate(0, 0);
            -webkit-transition: -webkit-transform 0.17s ease;
            -webkit-transition: transform 0.17s ease;
            transition: transform 0.17s ease;
        }

        @media (hover: hover) {
            .pqAel .footer-social a:hover {
                -webkit-transform: translate(0, -3px);
                -ms-transform: translate(0, -3px);
                transform: translate(0, -3px);
                -webkit-transition: -webkit-transform 0.17s ease;
                -webkit-transition: transform 0.17s ease;
                transition: transform 0.17s ease;
            }
        }

        /* sc-component-id: header-sc-14g3y87-0 */
        .jsnzna {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-bottom: 15px;
        }

        .jsnzna .section-header__title {
            color: #00693e;
            font-family: DBHelvethaicaMonXBd;
            font-size: 36px;
            font-weight: normal;
        }

        @media (max-width: 425px) {
            .jsnzna .section-header__title {
                font-size: 28px;
            }
        }

        .jsnzna.has-category {
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        @media (max-width: 425px) {
            .jsnzna .section-header__select {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
            }
        }

        .jsnzna .section-header__more {
            color: #353b50;
            font-family: DBHelvethaicaMonX;
            font-size: 18px;
            -webkit-text-decoration: underline;
            text-decoration: underline;
            -webkit-transition: color 0.15s ease;
            transition: color 0.15s ease;
        }

        @media (hover: hover) {
            .jsnzna .section-header__more:hover {
                color: #00693e;
                -webkit-transition: color 0.15s ease;
                transition: color 0.15s ease;
            }
        }

        @media (max-width: 768px) {}

        .jsnzna .category__control {
            border: 0;
            border-bottom: 1px solid #979797;
            border-radius: 0;
            box-shadow: none;
        }

        .jsnzna .category__indicator-separator {
            display: none;
        }

        .jsnzna .category__value-container {
            width: 220px;
        }

        /* sc-component-id: slider-fullwidth-sc-1etrns3-0 */
        .dBZNlS {
            position: relative;
        }

        .dBZNlS.no-mobile .item,
        .dBZNlS.no-mobile .item-youtube {
            padding-top: 31.25% !important;
        }

        .dBZNlS .item-youtube {
            background-color: #000;
            padding-top: 31.25%;
            position: relative;
        }

        .dBZNlS .item-youtube>.thumb,
        .dBZNlS .item-youtube>iframe {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .dBZNlS .item-youtube>iframe {
            opacity: 0;
            -webkit-transition: opacity 0.3s ease;
            transition: opacity 0.3s ease;
        }

        .dBZNlS .item-youtube>.thumb {
            display: block;
            object-fit: cover;
        }

        @media (max-width: 768px) and (orientation: portrait) {
            .dBZNlS .item-youtube {
                padding-top: 50%;
            }
        }

        .dBZNlS .youtube-container {
            position: relative;
        }

        .dBZNlS .play-btn {
            position: absolute;
            left: 20px;
            bottom: 40px;
        }

        .dBZNlS .play-btn img {
            display: block;
        }

        @media (min-width: 768px) {
            .dBZNlS .play-btn {
                left: 40px;
                bottom: 60px;
            }
        }

        .dBZNlS .is-active .item-youtube>.thumb {
            display: none;
        }

        .dBZNlS .is-active .item-youtube>iframe {
            opacity: 1;
            -webkit-transition: opacity 0.3s ease;
            transition: opacity 0.3s ease;
        }

        .dBZNlS .slick-slider {
            position: relative;
        }

        .dBZNlS .item {
            display: block !important;
            padding-top: 31.25%;
            position: relative;
        }

        .dBZNlS .item img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        @media (max-width: 768px) and (orientation: portrait) {
            .dBZNlS .item {
                padding-top: 50%;
            }
        }

        .dBZNlS .slick-dots {
            list-style: none;
            font-size: 0;
            width: 100%;
            position: absolute;
            left: 0;
            bottom: 15px;
            display: -webkit-box !important;
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .dBZNlS .slick-dots>li:not(:first-child) {
            padding-left: 8px;
        }

        .dBZNlS .slick-dots button {
            cursor: pointer;
            width: 12px;
            height: 12px;
            border-radius: 50%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            -webkit-transition: background-color 0.15s ease;
            transition: background-color 0.15s ease;
        }

        @media (hover: hover) {
            .dBZNlS .slick-dots button:hover {
                background-color: #00693e;
                -webkit-transition: background-color 0.15s ease;
                transition: background-color 0.15s ease;
            }
        }

        .dBZNlS .slick-dots .slick-active button {
            background-color: #00693e;
        }

        .dBZNlS .slick-arrow {
            position: absolute;
            z-index: 10;
            cursor: pointer;
        }

        .dBZNlS .slick-prev,
        .dBZNlS .slick-next {
            position: absolute;
            top: 50%;
            width: 49px;
            height: 49px;
            margin-top: -24.5px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.45);
            border-radius: 50%;
            -webkit-transition: background-color 0.15s ease;
            transition: background-color 0.15s ease;
        }

        @media (hover: hover) {

            .dBZNlS .slick-prev:hover,
            .dBZNlS .slick-next:hover {
                background-color: #00693e;
                -webkit-transition: background-color 0.15s ease;
                transition: background-color 0.15s ease;
            }
        }

        .dBZNlS .slick-prev {
            left: 10px;
        }

        .dBZNlS .slick-next {
            right: 10px;
        }

        /* sc-component-id: hero-banner-tbu0cq-0 */
        .dPZmDC .line {
            width: 100%;
            height: 10px;
            background-color: #00693e;
        }

        /* sc-component-id: normal-sc-1m2b5l6-0 */
        .kPOPfn.no-title .item-thumb {
            margin-bottom: 34px;
            border-radius: 8px;
        }

        .kPOPfn.no-title .item-detail {
            display: none;
        }

        .kPOPfn a {
            display: block;
        }

        .kPOPfn a .item-thumb {
            overflow: hidden;
            border-radius: 8px;
        }

        @media (hover: hover) {
            .kPOPfn a .item-thumb img {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                -webkit-transition: -webkit-transform 0.3s ease;
                -webkit-transition: transform 0.3s ease;
                transition: transform 0.3s ease;
                border-radius: 8px;
            }

            .kPOPfn a .item-thumb:hover img {
                -webkit-transform: scale(1.05);
                -ms-transform: scale(1.05);
                transform: scale(1.05);
                -webkit-transition: -webkit-transform 0.3s ease;
                -webkit-transition: transform 0.3s ease;
                transition: transform 0.3s ease;
                border-radius: 8px;
            }
        }

        .kPOPfn a .item-title {
            color: #525252;
        }

        @media (hover: hover) {
            .kPOPfn a .item-title {
                -webkit-transition: color 0.17s ease;
                transition: color 0.17s ease;
            }

            .kPOPfn a .item-title:hover {
                color: #00a550;
                -webkit-transition: color 0.17s ease;
                transition: color 0.17s ease;
            }
        }

        .kPOPfn .item-thumb img {
            width: 100%;
            display: block;
        }

        .kPOPfn .item-detail {
            padding-top: 20px;
        }

        .kPOPfn .item-title,
        .kPOPfn p {
            font-size: 24px;
            line-height: 1em;
        }

        .kPOPfn .item-title {
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
        }

        .kPOPfn.flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -10px;
        }

        .kPOPfn.flex>* {
            padding: 0 10px;
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            max-width: 50%;
        }

        .kPOPfn.flex .item-title {
            margin-bottom: 10px;
        }

        .kPOPfn.is-flex {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
        }

        .kPOPfn.is-flex .item-thumb {
            -webkit-flex-basis: 200px;
            -ms-flex-preferred-size: 200px;
            flex-basis: 200px;
            max-width: 200px;
        }

        .kPOPfn.is-flex .item-detail {
            margin-left: 20px;
            -webkit-flex-basis: calc(100% - 200px);
            -ms-flex-preferred-size: calc(100% - 200px);
            flex-basis: calc(100% - 200px);
        }

        @media (max-width: 425px) {
            .kPOPfn.is-flex .item-thumb {
                -webkit-flex-basis: 120px;
                -ms-flex-preferred-size: 120px;
                flex-basis: 120px;
                max-width: 120px;
            }

            .kPOPfn.is-flex .item-detail {
                -webkit-flex-basis: calc(100% - 120px);
                -ms-flex-preferred-size: calc(100% - 120px);
                flex-basis: calc(100% - 120px);
            }
        }

        /* sc-component-id: slider-block-kaglhz-0 */
        .djclUK .slider-image {
            position: relative;
        }

        .djclUK .slider-image .slick-dots {
            list-style: none;
            font-size: 0;
            width: auto;
            position: absolute;
            right: 15px;
            bottom: 15px;
            display: -webkit-box !important;
            display: -webkit-flex !important;
            display: -ms-flexbox !important;
            display: flex !important;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .djclUK .slider-image .slick-dots>li:not(:first-child) {
            padding-left: 5px;
        }

        .djclUK .slider-image .slick-dots button {
            cursor: pointer;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #ffffff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.5);
            -webkit-transition: background-color 0.15s ease;
            transition: background-color 0.15s ease;
        }

        @media (hover: hover) {
            .djclUK .slider-image .slick-dots button:hover {
                background-color: #ec1d24;
                -webkit-transition: background-color 0.15s ease;
                transition: background-color 0.15s ease;
            }
        }

        .djclUK .slider-image .slick-dots .slick-active button {
            background-color: #ec1d24;
        }

        .djclUK .slider-image .slick-slider {
            -ms-touch-action: unset;
            touch-action: unset;
        }

        .djclUK.slider-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-overflow-scrolling: touch;
            width: 100vw;
            overflow-x: scroll;
            overflow-y: hidden;
            position: relative;
            left: -15px;
            margin-bottom: 15px;
        }

        .djclUK.slider-container>* {
            padding: 0 5px;
            min-width: 90vw;
        }

        .djclUK.slider-container>*:first-child {
            margin-left: 15px;
        }

        .djclUK.slider-container>*:last-child {
            margin-right: 15px;
        }

        /* sc-component-id: highlight-qyoevi-0 */
        .ibJmBf .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0 -17px;
        }

        .ibJmBf .row>.col {
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            max-width: 50%;
            padding: 0 17px;
        }

        .ibJmBf .row>.col.is-first {
            -webkit-flex-basis: 43.5%;
            -ms-flex-preferred-size: 43.5%;
            flex-basis: 43.5%;
            max-width: 43.5%;
        }

        .ibJmBf .row>.col.is-last {
            -webkit-flex-basis: 56.5%;
            -ms-flex-preferred-size: 56.5%;
            flex-basis: 56.5%;
            max-width: 56.5%;
        }

        .ibJmBf .row.is-single>.col {
            -webkit-flex-basis: 100%;
            -ms-flex-preferred-size: 100%;
            flex-basis: 100%;
            max-width: 100%;
        }

        @media (max-width: 1024px) {
            .ibJmBf .row {
                margin: 0 -10px;
            }

            .ibJmBf .row>.col {
                padding: 0 10px;
            }

            .ibJmBf .row .no-title .item-thumb {
                margin-bottom: 2.5vw;
            }
        }

        @media (max-width: 768px) {
            .ibJmBf .row {
                display: block;
            }

            .ibJmBf .row>.col {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .ibJmBf .row>.col.is-first,
            .ibJmBf .row>.col.is-last {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .ibJmBf .row>.col:first-child {
                margin-bottom: 20px;
            }

            .ibJmBf .row>.col .row {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin: 0 -10px;
            }

            .ibJmBf .row>.col .row>* {
                padding: 0 10px;
            }

            .ibJmBf .row>.col .row>*>.flex {
                display: block;
                -webkit-align-items: center;
                -webkit-box-align: center;
                -ms-flex-align: center;
                align-items: center;
                margin: 0 -10px;
            }

            .ibJmBf .row>.col .row>*>.flex>* {
                padding: 20px 10px 0;
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            @media (max-width: 425px) {
                .ibJmBf .row>.col .row {
                    margin: 0 -5px;
                }

                .ibJmBf .row>.col .row>* {
                    padding: 0 5px;
                }
            }

            .ibJmBf .row .no-title .item-thumb {
                margin-bottom: 20px;
            }

            @media (max-width: 425px) {
                .ibJmBf .row .no-title .item-thumb {
                    margin-bottom: 10px;
                }
            }
        }

        /* sc-component-id: slider-carousel-contgh-0 */
        .jsICAL .slick-slider {
            margin: 0 -14px;
        }

        @media (max-width: 1024px) {
            .jsICAL .slick-slider {
                margin: 0 -10px;
            }
        }

        .jsICAL .slick-track {
            margin-left: 0;
        }

        .jsICAL .slick-slide {
            padding: 0 14px;
        }

        @media (max-width: 1024px) {
            .jsICAL .slick-slide {
                padding: 0 10px;
            }
        }

        .jsICAL .slick-slide img {
            width: 100%;
        }

        .jsICAL .slick-arrow {
            position: absolute;
            z-index: 2;
            cursor: pointer;
        }

        .jsICAL .slick-prev,
        .jsICAL .slick-next {
            position: absolute;
            top: 50%;
            width: 49px;
            height: 49px;
            margin-top: -25px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            border-radius: 50%;
            background-color: rgba(119, 119, 119, 0.75);
            -webkit-transition: background-color 0.15s ease;
            transition: background-color 0.15s ease;
        }

        @media (hover: hover) {

            .jsICAL .slick-prev:hover,
            .jsICAL .slick-next:hover {
                background-color: #00693e;
                -webkit-transition: background-color 0.15s ease;
                transition: background-color 0.15s ease;
            }
        }

        .jsICAL .slick-prev {
            left: -11px;
        }

        @media (max-width: 768px) {
            .jsICAL .slick-prev {
                left: 15px;
            }
        }

        @media (max-width: 425px) {
            .jsICAL .slick-prev {
                display: none;
            }
        }

        .jsICAL .slick-next {
            right: -11px;
        }

        @media (max-width: 768px) {
            .jsICAL .slick-next {
                right: 15px;
            }
        }

        @media (max-width: 425px) {
            .jsICAL .slick-next {
                display: none;
            }
        }

        .jsICAL .slider-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-overflow-scrolling: touch;
            width: 100vw;
            overflow-x: scroll;
            overflow-y: hidden;
            position: relative;
            left: -15px;
        }

        .jsICAL .slider-container>* {
            padding: 0 5px;
            min-width: 45vw;
        }

        .jsICAL .slider-container>*:first-child {
            margin-left: 15px;
        }

        .jsICAL .slider-container>*:last-child {
            margin-right: 15px;
        }

        /* sc-component-id: carousel-sc-13vce3f-0 */
        .goqUjQ .slick-prev,
        .goqUjQ .slick-next {
            top: calc(50% - 38px);
        }

        @media (max-width: 425px) {
            .goqUjQ .slick-slider {
                padding: 0 10px;
            }

            .goqUjQ .slick-list {
                overflow: visible;
            }

            .goqUjQ .slick-slide {
                padding: 0 5px;
            }
        }

        .goqUjQ.ratio-1-1 .item-thumb {
            position: relative;
            padding-top: 100%;
            background-color: #f2f2f2;
        }

        .goqUjQ.ratio-1-1 .item-thumb>img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        /* sc-component-id: promotion-xpjxo9-0 */
        .fBOFqU .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0 -17px;
        }

        @media (max-width: 1024px) {
            .fBOFqU .row {
                margin: 0 -10px;
            }
        }

        @media (max-width: 768px) {
            .fBOFqU .row {
                display: block;
            }
        }

        .fBOFqU .col {
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            max-width: 50%;
            padding: 0 17px;
        }

        @media (max-width: 1024px) {
            .fBOFqU .col {
                padding: 0 10px;
            }
        }

        @media (max-width: 768px) {
            .fBOFqU .col {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        @media (max-width: 425px) {
            .fBOFqU .slick-list {
                overflow: visible;
            }

            .fBOFqU .slick-slide {
                padding: 0 5px;
            }
        }

        /* sc-component-id: all-member-sc-3v46e3-0 */
        .gaDhCh .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0 -17px;
        }

        .gaDhCh .row>.col {
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            max-width: 50%;
            padding: 0 17px;
        }

        @media (max-width: 1024px) {
            .gaDhCh .row {
                margin: 0 -10px;
            }

            .gaDhCh .row>.col {
                padding: 0 10px;
            }

            .gaDhCh .row .no-title .item-thumb {
                margin-bottom: 2.5vw;
            }
        }

        @media (max-width: 768px) {
            .gaDhCh .row {
                display: block;
            }

            .gaDhCh .row>.col {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }

            .gaDhCh .row>.col:first-child {
                margin-bottom: 20px;
            }

            .gaDhCh .row>.col .row {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                margin: 0 -10px;
            }

            .gaDhCh .row>.col .row>* {
                padding: 0 10px;
            }

            .gaDhCh .row .no-title .item-thumb {
                margin-bottom: 20px;
            }
        }

        /* sc-component-id: videos-sc-1p414au-0 */
        .ifJoTz .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0 -15px;
        }

        .ifJoTz .row>* {
            padding: 0 15px;
        }

        @media (max-width: 1024px) {
            .ifJoTz .row {
                margin: 0 -10px;
            }

            .ifJoTz .row>* {
                padding: 0 10px;
            }
        }

        @media (max-width: 1024px) {
            .ifJoTz .row {
                display: block;
            }
        }

        .ifJoTz .col-video {
            -webkit-flex-basis: calc(100% - 280px);
            -ms-flex-preferred-size: calc(100% - 280px);
            flex-basis: calc(100% - 280px);
            max-width: calc(100% - 280px);
        }

        @media (max-width: 1024px) {
            .ifJoTz .col-video {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
                margin-bottom: 20px;
            }
        }

        .ifJoTz .col-fb {
            -webkit-flex-basis: 280px;
            -ms-flex-preferred-size: 280px;
            flex-basis: 280px;
            max-width: 280px;
        }

        @media (max-width: 1024px) {
            .ifJoTz .col-fb {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        .ifJoTz .yt-iframe {
            background-color: #000;
            position: relative;
            padding-top: 52.65%;
        }

        .ifJoTz .yt-iframe>* {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
        }

        .ifJoTz .item-row {
            margin-top: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin-left: -10px;
            margin-right: -10px;
        }

        .ifJoTz .item-row>* {
            padding: 0 10px;
        }

        @media (max-width: 1024px) {
            .ifJoTz .item-row {
                -webkit-flex-wrap: wrap;
                -ms-flex-wrap: wrap;
                flex-wrap: wrap;
            }
        }

        @media (max-width: 425px) {
            .ifJoTz .item-row {
                display: none;
            }
        }

        .ifJoTz .col-subscribe {
            -webkit-flex-basis: 200px;
            -ms-flex-preferred-size: 200px;
            flex-basis: 200px;
            max-width: 200px;
        }

        .ifJoTz .col-thumb {
            -webkit-flex-basis: calc(100% - 200px);
            -ms-flex-preferred-size: calc(100% - 200px);
            flex-basis: calc(100% - 200px);
            max-width: calc(100% - 200px);
        }

        @media (max-width: 1024px) {
            .ifJoTz .col-thumb {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        .ifJoTz .row-thumb {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            margin: 0 -10px;
        }

        .ifJoTz .row-thumb>* {
            padding: 0 10px;
            -webkit-flex-basis: 33.333333333333336%;
            -ms-flex-preferred-size: 33.333333333333336%;
            flex-basis: 33.333333333333336%;
            max-width: 33.333333333333336%;
        }

        @media (max-width: 1024px) {
            .ifJoTz .row-thumb {
                margin: 0 -5px;
            }

            .ifJoTz .row-thumb>* {
                padding: 0 5px;
            }
        }

        @media (max-width: 1024px) {
            .ifJoTz .row-thumb {
                margin-bottom: 20px;
            }
        }

        .ifJoTz .subscribe {
            text-align: center;
        }

        @media (max-width: 1024px) {
            .ifJoTz .subscribe {
                margin-bottom: 20px;
            }
        }

        .ifJoTz .subscribe-logo {
            margin-bottom: 10px;
        }

        .ifJoTz .subscribe-logo img {
            display: block;
            width: 100%;
        }

        .ifJoTz .subscribe-title {
            font-size: 24px;
        }

        .ifJoTz .subscribe-link {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            background-color: red;
            color: #ffffff;
            padding: 5px;
            border-radius: 4px;
            font-size: 18px;
        }

        .ifJoTz .subscribe-link .icon {
            margin-right: 5px;
        }

        .ifJoTz .item-thumb>*:not(:first-child) {
            margin-top: 10px;
        }

        .ifJoTz .item-thumb__title,
        .ifJoTz .item-thumb p {
            font-size: 20px;
        }

        .ifJoTz .item-thumb p {
            line-height: 1em;
        }

        /* sc-component-id: network-sc-13lx7wf-0 */
        .jqGYPy .row {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -10px;
        }

        .jqGYPy .row>* {
            padding: 0 10px;
        }

        @media (max-width: 425px) {
            .jqGYPy .row>* {
                -webkit-flex-basis: 33.333333333333336%;
                -ms-flex-preferred-size: 33.333333333333336%;
                flex-basis: 33.333333333333336%;
                max-width: 33.333333333333336%;
                margin: 10px 0;
            }
        }

        .jqGYPy .item {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        @media (hover: hover) {
            .jqGYPy .item {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                -webkit-transition: -webkit-transform 0.17s ease;
                -webkit-transition: transform 0.17s ease;
                transition: transform 0.17s ease;
            }

            .jqGYPy .item:hover {
                -webkit-transform: scale(1.1);
                -ms-transform: scale(1.1);
                transform: scale(1.1);
                -webkit-transition: -webkit-transform 0.17s ease;
                -webkit-transition: transform 0.17s ease;
                transition: transform 0.17s ease;
            }
        }

        .jqGYPy .slick-track {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .jqGYPy .slider-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-overflow-scrolling: touch;
            width: 100vw;
            overflow-x: scroll;
            overflow-y: hidden;
            position: relative;
            left: -15px;
            margin-bottom: 15px;
        }

        .jqGYPy .slider-container>* {
            padding: 0 5px;
            min-width: 37vw;
        }

        .jqGYPy .slider-container>*:first-child {
            margin-left: 15px;
        }

        .jqGYPy .slider-container>*:last-child {
            margin-right: 15px;
        }

        /* sc-component-id: hr-sc-4l3tr0-0 */
        .iwRKYT {
            width: 100%;
            margin: 30px auto;
            height: 1px;
            background-image: url("https://www.7eleven.co.th/static/imgs/account/bg-dashed.svg");
            background-repeat: repeat-x;
        }

        /* sc-component-id: service-category-x99621-0 */
        .kebcJM.no-title .item-thumb {
            margin-bottom: 34px;
        }

        .kebcJM.no-title .item-detail {
            display: none;
        }

        .kebcJM a {
            display: block;
        }

        .kebcJM a .item-thumb {
            overflow: hidden;
        }

        @media (hover: hover) {
            .kebcJM a .item-thumb img {
                -webkit-transform: scale(1);
                -ms-transform: scale(1);
                transform: scale(1);
                -webkit-transition: -webkit-transform 0.3s ease;
                -webkit-transition: transform 0.3s ease;
                transition: transform 0.3s ease;
            }

            .kebcJM a .item-thumb:hover img {
                -webkit-transform: scale(1.05);
                -ms-transform: scale(1.05);
                transform: scale(1.05);
                -webkit-transition: -webkit-transform 0.3s ease;
                -webkit-transition: transform 0.3s ease;
                transition: transform 0.3s ease;
            }
        }

        .kebcJM a .item-title {
            color: #525252;
        }

        @media (hover: hover) {
            .kebcJM a .item-title {
                -webkit-transition: color 0.17s ease;
                transition: color 0.17s ease;
            }

            .kebcJM a .item-title:hover {
                color: #00a550;
                -webkit-transition: color 0.17s ease;
                transition: color 0.17s ease;
            }
        }

        .kebcJM .item-thumb {
            background-color: #f2f2f2;
            position: relative;
            width: 100%;
            padding-top: 46.794871794871795%;
        }

        .kebcJM .item-thumb img {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            display: block;
            object-fit: cover;
        }

        .kebcJM .item-detail {
            padding-top: 20px;
            height: 3em;
            overflow: hidden;
        }

        .kebcJM .item-detail+* {
            padding-top: 10px;
        }

        .kebcJM .item-title,
        .kebcJM p {
            font-size: 24px;
            line-height: 1em;
        }

        .kebcJM .item-title {
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
        }

        .kebcJM .item-category {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin: 0 -10px;
        }

        .kebcJM .item-category>* {
            padding: 0 10px;
        }

        .kebcJM .item-category img {
            display: block;
            -webkit-transform-origin: left center;
            -ms-transform-origin: left center;
            transform-origin: left center;
            height: 32px;
            width: auto;
        }

        .kebcJM .item-category__date {
            color: #525252;
        }

        /* sc-component-id: related-service-b3foje-0 */
        @media (max-width: 425px) {
            .jjHUjo .slick-slider {
                padding: 0 10px;
            }

            .jjHUjo .slick-list {
                overflow: visible;
            }

            .jjHUjo .slick-slide {
                padding: 0 5px;
            }
        }

        .jjHUjo .slick-next,
        .jjHUjo .slick-prev {
            top: calc(50% - 60px);
        }

        /* sc-component-id: sc-global-249260563 */
        html {
            box-sizing: border-box;
        }

        *,
        *::before,
        *::after {
            box-sizing: inherit;
        }

        :root {
            -moz-tab-size: 4;
            tab-size: 4;
        }

        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI",
                Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji",
                "Segoe UI Emoji", "Segoe UI Symbol";
        }

        hr {
            height: 0;
        }

        abbr[title] {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp,
        pre {
            font-family: SFMono-Regular, Consolas, "Liberation Mono", Menlo,
                Courier, monospace;
            font-size: 1em;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        fieldset {
            padding: 0.35em 0.75em 0.625em;
        }

        legend {
            padding: 0;
        }

        progress {
            vertical-align: baseline;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        summary {
            display: list-item;
        }

        html,
        body {
            -ms-overflow-style: -ms-autohiding-scrollbar;
        }

        img {
            max-width: 100%;
        }

        a {
            -webkit-text-decoration: none;
            text-decoration: none;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p {
            margin: 0;
        }

        ul {
            margin: 0;
            padding: 0;
        }

        /* sc-component-id: sc-global-2729729416 */
        @font-face {
            font-family: DBHelvethaicaMonXCond;
            src: url("static/fonts/DBHelvethaicaMonXCond.woff2") format("woff2"),
                url("static/fonts/DBHelvethaicaMonXCond.woff") format("woff"),
                url("static/fonts/DBHelvethaicaMonXCond.ttf") format("truetype");
        }

        @font-face {
            font-family: DBHelvethaicaMonX;
            src: url("static/fonts/DBHelvethaicaMonX.woff2") format("woff2"),
                url("static/fonts/DBHelvethaicaMonX.woff") format("woff"),
                url("static/fonts/DBHelvethaicaMonX.ttf") format("truetype");
        }

        @font-face {
            font-family: DBHelvethaicaMonXBd;
            src: url("static/fonts/DBHelvethaicaMonXBd.woff2") format("woff2"),
                url("static/fonts/DBHelvethaicaMonXBd.woff") format("woff"),
                url("static/fonts/DBHelvethaicaMonXBd.ttf") format("truetype");
        }

        @font-face {
            font-family: db_heaventroundedcond;
            src: url("static/fonts/db_heaventrounded_cond_v3.2-webfont.woff2") format("woff2"),
                url("static/fonts/db_heaventrounded_cond_v3.2-webfont.woff") format("woff"),
                url("static/fonts/db_heaventrounded_cond_v3.2-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: db_helvethaica_x75_bd;
            src: url("static/fonts/db_helvethaica_x_bd_v3.2-webfont.woff2") format("woff2"),
                url("static/fonts/db_helvethaica_x_bd_v3.2-webfont.woff") format("woff"),
                url("static/fonts/db_helvethaica_x_bd_v3.2-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: db_helvethaica_x65_med;
            src: url("static/fonts/db_helvethaica_x_med_v3.2-webfont.woff2") format("woff2"),
                url("static/fonts/db_helvethaica_x_med_v3.2-webfont.woff") format("woff"),
                url("static/fonts/db_helvethaica_x_med_v3.2-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: db_helvethaica_x55_regular;
            src: url("static/fonts/db_helvethaica_x_v3.2-webfont.woff2") format("woff2"),
                url("static/fonts/db_helvethaica_x_v3.2-webfont.woff") format("woff"),
                url("static/fonts/db_helvethaica_x_v3.2-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        @font-face {
            font-family: digital_display_tfbregular;
            src: url("static/fonts/digital_display_tfb-webfont.woff2") format("woff2"),
                url("static/fonts/digital_display_tfb-webfont.woff") format("woff"),
                url("static/fonts/digital_display_tfb-webfont.ttf") format("truetype");
            font-weight: normal;
            font-style: normal;
        }

        * {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        #all-members {
            color: #525252;
            font-family: DBHelvethaicaMonX;
            font-size: 24px;
        }

        /* sc-component-id: sc-global-980414209 */
        #all-members .site-global {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            min-height: 100vh;
        }

        #all-members .page-container {
            position: relative;
            -webkit-flex: 1 0 auto;
            -ms-flex: 1 0 auto;
            flex: 1 0 auto;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            margin-top: 74px;
            overflow: hidden;
        }

        @media (max-width: 1023px) {
            #all-members .page-container {
                margin-top: 64px;
            }
        }

        @media (max-width: 767px) {
            #all-members .page-container {
                margin-top: 44px;
            }
        }

        #all-members .container {
            position: relative;
            width: 100%;
            max-width: 1300px;
            padding: 0 15px;
            margin: 0 auto;
        }

        @media (min-width: 425px) {
            #all-members .container {
                padding: 0 20px;
            }
        }

        @media (min-width: 1024px) {
            #all-members .container {
                padding: 0 40px;
            }
        }

        @media (min-width: 1440px) {
            #all-members .container {
                padding: 0 80px;
            }
        }

        #all-members .section {
            padding: 30px 0;
        }

        #all-members .section.no-pdb {
            padding-bottom: 0;
        }

        .flex-container {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            margin: 0 -11px;
        }

        .flex-container>* {
            padding: 0 11px;
            margin-bottom: 30px;
        }

        @media (max-width: 1024px) {
            .flex-container {
                margin: 0 -10px;
            }

            .flex-container>* {
                padding: 0 10px;
                margin-bottom: 20px;
            }
        }

        @media (max-width: 425px) {
            .flex-container {
                margin: 0 -5px;
            }

            .flex-container>* {
                padding: 0 5px;
            }
        }

        .flex-container.flex-container__col-2>* {
            -webkit-flex-basis: 50%;
            -ms-flex-preferred-size: 50%;
            flex-basis: 50%;
            max-width: 50%;
        }

        @media (max-width: 768px) {
            .flex-container.flex-container__col-2>* {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        .flex-container.flex-container__col-3>* {
            -webkit-flex-basis: 33.333333333333336%;
            -ms-flex-preferred-size: 33.333333333333336%;
            flex-basis: 33.333333333333336%;
            max-width: 33.333333333333336%;
        }

        @media (max-width: 768px) {
            .flex-container.flex-container__col-3>* {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 425px) {
            .flex-container.flex-container__col-3>* {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        .flex-container.flex-container__col-4>* {
            -webkit-flex-basis: 25%;
            -ms-flex-preferred-size: 25%;
            flex-basis: 25%;
            max-width: 25%;
        }

        @media (max-width: 768px) {
            .flex-container.flex-container__col-4>* {
                -webkit-flex-basis: 33.333333333333336%;
                -ms-flex-preferred-size: 33.333333333333336%;
                flex-basis: 33.333333333333336%;
                max-width: 33.333333333333336%;
            }
        }

        @media (max-width: 425px) {
            .flex-container.flex-container__col-4>* {
                -webkit-flex-basis: 50%;
                -ms-flex-preferred-size: 50%;
                flex-basis: 50%;
                max-width: 50%;
            }
        }

        @media (max-width: 375px) {
            .flex-container.flex-container__col-4>* {
                -webkit-flex-basis: 100%;
                -ms-flex-preferred-size: 100%;
                flex-basis: 100%;
                max-width: 100%;
            }
        }

        .flex-container.is-reverse>*:nth-child(even) .flex {
            -webkit-flex-direction: row-reverse;
            -ms-flex-direction: row-reverse;
            flex-direction: row-reverse;
        }

        @media (max-width: 768px) {
            .flex-container.is-reverse .flex {
                display: block;
                margin-bottom: 20px;
            }

            .flex-container.is-reverse .flex .item-thumb {
                margin-bottom: 10px;
            }
        }

        /* sc-component-id: sc-global-971361979 */
        .section-register {
            margin-top: auto;
            margin-bottom: auto;
        }

        .login-container {
            position: relative;
            max-width: 1440px;
            margin-left: auto;
            margin-right: auto;
            height: 100%;
            min-height: 730px;
        }

        .login-box {
            width: 43.05555555555556%;
            margin-left: auto;
            height: 100%;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            min-height: 730px;
        }

        @media (max-width: 1024px) {
            .login-box {
                width: 100%;
            }
        }

        .login-banner-box {
            position: absolute;
            left: 0;
            top: 0;
            width: 56.94444444444444%;
            height: 100%;
        }

        @media (max-width: 1024px) {
            .login-banner-box {
                display: none;
            }
        }

        .login-banner {
            position: absolute;
            right: 0;
            top: 0;
            bottom: 0;
            width: 60vw;
            background-repeat: no-repeat;
            background-size: cover;
            background-position: right center;
        }

        .login-banner-image {
            position: absolute;
            left: -9.024390243902438%;
            bottom: 0;
            font-size: 0;
        }

        .login-banner-circle {
            position: absolute;
            right: 0;
            top: 0;
            width: 68.78048780487805%;
            max-width: 564px;
            line-height: 0;
        }

        .login-banner-text {
            text-align: center;
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            bottom: 0;
            z-index: 1;
            max-width: 336px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-direction: column;
            -ms-flex-direction: column;
            flex-direction: column;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            margin: auto;
        }

        .login-banner-text h2 {
            color: #00693e;
            font-family: DBHelvethaicaMonXBd;
            font-size: 48px;
            font-weight: normal;
            font-style: normal;
            line-height: 43px;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
        }

        .login-banner-text h2+p {
            margin-top: 11px;
        }

        .login-banner-text p {
            line-height: 1;
        }

        .step {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            margin-top: 23px;
            margin-bottom: 23px;
        }

        .step ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .step li {
            position: relative;
        }

        .step li::after {
            width: 30px;
            height: 6px;
            margin: 0;
            position: absolute;
            left: 50%;
            top: 4px;
            background: #d8d8d8;
            box-shadow: inset 0 0 3px 0 rgba(140, 140, 140, 0.5);
        }

        .step li:not(:last-child) {
            margin-right: 16px;
        }

        .step li:not(:last-child)::after {
            content: "";
        }

        .step li>* {
            display: block;
            position: relative;
            z-index: 1;
            width: 14px;
            height: 14px;
        }

        .step li>*::before {
            content: "";
            position: absolute;
            z-index: 1;
            left: 50%;
            right: auto;
            -webkit-transform: translateX(-50%);
            -ms-transform: translateX(-50%);
            transform: translateX(-50%);
            width: 14px;
            height: 14px;
            background: #ffffff;
            border: 1px solid #d4d4d4;
            border-radius: 50%;
        }

        .step li.visited::after {
            background: #00a550;
            box-shadow: none;
        }

        .step li.visited>*::before,
        .step li.current>*::before {
            border: 3px solid #00a550;
        }

        .form {
            max-width: 380px;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
            padding-top: 80px;
            padding-bottom: 80px;
        }

        @media (max-width: 768px) {
            .form {
                padding-top: 30px;
                padding-bottom: 30px;
            }
        }

        .form .form-middle {
            position: relative;
        }

        .form .form-media img {
            display: block;
            margin: 0 auto;
        }

        .form .form-headline {
            text-align: center;
        }

        .form .form-headline::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-image: repeating-linear-gradient(90deg,
                    #d9dee3,
                    #d9dee3 6px,
                    transparent 4px,
                    transparent 10px);
            margin-top: 12px;
        }

        .form .form-headline h1 {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-size: 36px;
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
        }

        .form .form-headline h2 {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-size: 30px;
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
        }

        .form .form-input {
            padding-top: 60px;
            padding-bottom: 60px;
        }

        .form .form-bottom {
            text-align: center;
        }

        .form .form-bottom::before {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-image: repeating-linear-gradient(90deg,
                    #d9dee3,
                    #d9dee3 6px,
                    transparent 4px,
                    transparent 10px);
            margin-bottom: 20px;
        }

        .form .form-bottom h1 {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-size: 36px;
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
        }

        .form .form-bottom h2 {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-size: 30px;
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
        }

        .form .form-bottom h2+p {
            margin-top: 11px;
        }

        .form .form-bottom p small {
            font-size: 18px;
            line-height: 1.222em;
            display: block;
        }

        .form .form-bottom p a {
            position: relative;
            color: #00a550;
        }

        .form .form-bottom p a::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-color: currentColor;
            position: absolute;
            bottom: 4px;
            left: 0;
        }

        .form .form-bottom p+.btn-wrapper {
            margin-top: 23px;
        }

        .form .form-bottom .btn-link {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-weight: normal;
            font-size: 24px;
            line-height: 1;
            display: inline-block;
            position: relative;
            margin-top: 30px;
        }

        .form .form-bottom .btn-link::after {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-color: currentColor;
            position: absolute;
            bottom: 4px;
            left: 0;
        }

        .form .form-email {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-size: 36px;
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
            text-align: center;
            padding-bottom: 20px;
        }

        .form .form-email::before {
            content: "";
            display: block;
            width: 100%;
            height: 1px;
            background-image: repeating-linear-gradient(90deg,
                    #d9dee3,
                    #d9dee3 6px,
                    transparent 4px,
                    transparent 10px);
            margin-bottom: 17px;
        }

        .form .form-icon-block {
            position: relative;
            font-size: 0;
            line-height: 0;
            text-align: center;
            margin: auto;
            height: 240px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: flex-end;
            -webkit-box-align: flex-end;
            -ms-flex-align: flex-end;
            align-items: flex-end;
            padding-bottom: 10px;
        }

        .form .form-icon-block .form-icon-block-inner {
            width: 100%;
            padding-bottom: 80px;
            background-image: url("https://www.7eleven.co.th/static/imgs/register/shadow.png");
            background-repeat: no-repeat;
            background-position: center bottom;
        }

        .form .hr {
            position: relative;
            height: 1px;
            width: 100%;
            background-image: repeating-linear-gradient(90deg,
                    #d9dee3,
                    #d9dee3 6px,
                    transparent 4px,
                    transparent 10px);
        }

        .form .hr span {
            color: #525252;
            font-family: DBHelvethaicaMonXBd;
            font-size: 20px;
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
            padding-left: 30px;
            padding-right: 30px;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            margin-top: -2px;
            background-color: white;
        }

        .login-form .hr {
            margin-top: 30px;
            margin-bottom: 30px;
        }

        .login-form .form-headline::after {
            margin-top: 22px;
        }

        .login-form .form-bottom {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            margin-top: 30px;
        }

        .login-form .form-bottom::before {
            content: none;
        }

        .login-form .btn-social-wrapper {
            margin-top: 30px;
        }

        .login-form a.forgot-password {
            color: #525252;
            font-size: 20px;
            line-height: 1em;
        }

        .text-blue {
            color: #195dbd !important;
        }

        .text-green {
            color: #00693e !important;
        }

        .text-green-dark {
            color: #00693e !important;
        }

        .text-black-dark {
            color: #000000 !important;
        }

        input,
        select,
        textarea,
        button {
            background-color: transparent;
            border: none;
            border-radius: 0;
            -webkit-box-shadow: none;
            box-shadow: none;
            color: inherit;
            font-size: inherit;
            margin: 0;
            padding: 0;
            outline: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            -o-appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        select {
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        select::-ms-expand {
            display: none;
        }

        label,
        input,
        select,
        textarea {
            position: relative;
            width: 100%;
            display: block;
        }

        label {
            color: #525252;
            font-family: DBHelvethaicaMonX;
            font-size: 20px;
            font-weight: normal;
            font-style: normal;
            line-height: 1;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
        }

        input,
        select,
        textarea {
            color: #525252;
            font-family: DBHelvethaicaMonX;
            font-size: 20px;
            font-weight: normal;
            font-style: normal;
            line-height: normal;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: none;
            height: 40px;
            padding-left: 16px;
            padding-right: 16px;
            border: 1px solid #bdbdbd;
            border-radius: 50em;
            background-color: white;
            -webkit-transition: background-color 250ms, box-shadow 250ms;
            transition: background-color 250ms, box-shadow 250ms;
        }

        input:focus:not([data-input-method="mouse"]):not([data-input-method="touch"]) {
            box-shadow: 0 0 0 4px rgba(#0187c5, 0.28),
                0 0 1px 1px rgba(#0187c5, 0.16);
            z-index: 1;
        }

        .input-group {
            position: relative;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -webkit-align-items: stretch;
            -webkit-box-align: stretch;
            -ms-flex-align: stretch;
            align-items: stretch;
            width: 100%;
            height: 40px;
            margin-left: auto;
            margin-right: auto;
            border: 1px solid #bdbdbd;
            border-radius: 50em;
            background-color: white;
            overflow: hidden;
            -webkit-transition: border-color 0.17s ease;
            transition: border-color 0.17s ease;
        }

        .input-group:not(:last-child) {
            margin-bottom: 20px;
        }

        .input-group.input-group--small {
            max-width: 300px;
        }

        .input-group.is-error {
            border-color: #ec1d24;
            -webkit-transition: border-color 0.17s ease;
            transition: border-color 0.17s ease;
        }

        .input-group .input-label,
        .input-group input {
            -webkit-box-flex: 1;
            -webkit-flex-grow: 1;
            -ms-flex-positive: 1;
            flex-grow: 1;
            -webkit-flex-basis: 0;
            -ms-flex-preferred-size: 0;
            flex-basis: 0;
            max-width: 100%;
            border: 0;
            border-radius: 0;
            height: 38px;
        }

        .input-group .input-label {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            height: 100%;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            padding: 0 16px;
        }

        .input-group .input-label span {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .input-group .input-lists {
            -webkit-align-self: center;
            -ms-flex-item-align: center;
            align-self: center;
            padding-left: 16px;
            padding-right: 16px;
        }

        .input-group-prepend,
        .input-group-append {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 0;
            line-height: 0;
        }

        .input-group-prepend {
            -webkit-flex: 0 0 60px;
            -ms-flex: 0 0 60px;
            flex: 0 0 60px;
            max-width: 60px;
            margin-right: -16px;
        }

        .input-group-append {
            -webkit-flex: 0 0 40px;
            -ms-flex: 0 0 40px;
            flex: 0 0 40px;
            max-width: 40px;
        }

        .input-clickable {
            cursor: pointer;
        }

        .input-lists {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-flex-wrap: wrap;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
        }

        .input-lists .input-list {
            position: relative;
        }

        .input-lists .input-list:not(:last-child) {
            margin-right: 16px;
        }

        input[type="radio"],
        input[type="checkbox"] {
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 100%;
            margin: 0;
            padding: 0;
            opacity: 0;
            z-index: 2;
            cursor: pointer;
            border: 0;
            background: none;
            font-size: 0;
        }

        input[type="radio"]+label,
        input[type="checkbox"]+label {
            padding: 0;
            margin: 0;
            padding-left: 30px;
            cursor: pointer;
            position: relative;
            min-height: 20px;
        }

        input[type="radio"]+label::before,
        input[type="radio"]+label::after,
        input[type="checkbox"]+label::before,
        input[type="checkbox"]+label::after {
            content: "";
            display: block;
            position: absolute;
            left: 0;
            top: 0;
            width: 20px;
            height: 20px;
        }

        input[type="radio"]+label::before,
        input[type="checkbox"]+label::before {
            border: 1px solid #525252;
            -webkit-transition: border-color 0.3s cubic-bezier(0.2, 1, 0.3, 1),
                background-color 0.3s cubic-bezier(0.2, 1, 0.3, 1);
            transition: border-color 0.3s cubic-bezier(0.2, 1, 0.3, 1),
                background-color 0.3s cubic-bezier(0.2, 1, 0.3, 1);
        }

        input[type="radio"]+label::after,
        input[type="checkbox"]+label::after {
            left: 3px;
            top: 3px;
            width: 14px;
            height: 14px;
            background-image: url("https://www.7eleven.co.th/static/imgs/icons/icon-checked.svg");
            background-repeat: no-repeat;
            background-position: center center;
            background-color: #00a550;
            -webkit-transform: scale(0);
            -ms-transform: scale(0);
            transform: scale(0);
            -webkit-transform-origin: center center;
            -ms-transform-origin: center center;
            transform-origin: center center;
            -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -webkit-transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        input[type="radio"]:checked+label::before,
        input[type="checkbox"]:checked+label::before {
            border-color: #e0e3e5;
            -webkit-transition: border-color 0.3s cubic-bezier(0.2, 1, 0.3, 1),
                background-color 0.3s cubic-bezier(0.2, 1, 0.3, 1);
            transition: border-color 0.3s cubic-bezier(0.2, 1, 0.3, 1),
                background-color 0.3s cubic-bezier(0.2, 1, 0.3, 1);
        }

        input[type="radio"]:checked+label::after,
        input[type="checkbox"]:checked+label::after {
            -webkit-transform: scale(1);
            -ms-transform: scale(1);
            transform: scale(1);
            -webkit-transition: -webkit-transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            -webkit-transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            transition: transform 0.2s cubic-bezier(0.175, 0.885, 0.32, 1.275);
        }

        input[type="radio"]+label::before,
        input[type="radio"]+label::after {
            border-radius: 50%;
        }

        input[type="checkbox"]+label::before,
        input[type="checkbox"]+label::after {
            border-radius: 4px;
        }

        /* sc-component-id: sc-global-1358909891 */
        button {
            background-color: transparent;
            border: 0;
            margin: 0;
            outline: 0;
            padding: 0;
        }

        .btn-group-wrapper {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
        }

        .btn-group-wrapper .btn {
            -webkit-flex: 0 0 calc(50% - 10px);
            -ms-flex: 0 0 calc(50% - 10px);
            flex: 0 0 calc(50% - 10px);
            max-width: calc(50% - 10px);
            white-space: nowrap;
            min-width: initial;
        }

        @media (max-width: 425px) {
            .btn-group-wrapper {
                display: block;
            }

            .btn-group-wrapper .btn {
                width: 100%;
                -webkit-flex: 0 0 100%;
                -ms-flex: 0 0 100%;
                flex: 0 0 100%;
                max-width: 100%;
            }

            .btn-group-wrapper .btn:not(:first-child) {
                margin-top: 10px;
            }
        }

        .btn-social-wrapper .btn:not(:last-child) {
            margin-bottom: 14px;
        }

        .btn {
            cursor: pointer;
            display: inline-block;
            text-align: center;
            width: auto;
            height: auto;
            cursor: pointer;
            background-color: #00a550;
            border: 1px solid #00a550;
            border-radius: 50em;
            padding-top: 7px;
            padding-bottom: 7px;
            padding-left: 25px;
            padding-right: 25px;
            min-width: 180px;
            color: white;
            font-family: DBHelvethaicaMonXBd;
            font-size: 24px;
            font-weight: normal;
            font-style: normal;
            line-height: 1em;
            -webkit-letter-spacing: normal;
            -moz-letter-spacing: normal;
            -ms-letter-spacing: normal;
            letter-spacing: normal;
            text-transform: uppercase;
        }

        .btn.has-icon {
            display: -webkit-inline-box;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
        }

        .btn.has-icon i {
            margin-left: 30px;
        }

        .btn.has-icon i img {
            display: block;
        }

        @media (hover: hover) {
            .btn:not(.btn-icon) {
                -webkit-transition: background-color 0.17s ease,
                    color 0.17s ease;
                transition: background-color 0.17s ease, color 0.17s ease;
            }

            .btn:not(.btn-icon):hover {
                background-color: #fff;
                color: #00a550;
                -webkit-transition: background-color 0.17s ease,
                    color 0.17s ease;
                transition: background-color 0.17s ease, color 0.17s ease;
            }
        }

        @media (hover: hover) {
            .btn.btn-icon {
                -webkit-transform: translate(0, 0);
                -ms-transform: translate(0, 0);
                transform: translate(0, 0);
                -webkit-transition: -webkit-transform 0.17s ease;
                -webkit-transition: transform 0.17s ease;
                transition: transform 0.17s ease;
            }

            .btn.btn-icon:hover {
                -webkit-transform: translate(0, -2px);
                -ms-transform: translate(0, -2px);
                transform: translate(0, -2px);
                -webkit-transition: -webkit-transform 0.17s ease;
                -webkit-transition: transform 0.17s ease;
                transition: transform 0.17s ease;
            }
        }

        .btn-small {
            font-size: 20px;
            padding-top: 9px;
            padding-bottom: 9px;
        }

        .btn-full {
            width: 100%;
        }

        .btn-border {
            color: #00a550;
            background-color: transparent;
        }

        @media (hover: hover) {
            .btn-border:not(.btn-icon):hover {
                background-color: #00a550;
                color: #fff;
            }
        }

        .btn-blue {
            background-color: #195dbd;
            border-color: #195dbd;
        }

        @media (hover: hover) {
            .btn-blue:not(.btn-icon):hover {
                color: #195dbd;
            }
        }

        .btn-facebook {
            background-color: #3b5998;
            border-color: #3b5998;
        }

        .btn-google {
            background-color: #ffffff;
            border-color: #ffffff;
            border: 1px solid rgb(189, 189, 189);
            color: #000000;
        }

        .btn-cancel {
            background-color: #ff0000;
            border-color: #ff0000;
        }

        @media (hover: hover) {
            .btn-cancel:not(.btn-icon):hover {
                color: #ff0000;
            }
        }

        .btn-icon {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
        }

        .btn-prepend {
            -webkit-flex: 0 0 20px;
            -ms-flex: 0 0 20px;
            flex: 0 0 20px;
            max-width: 20px;
            height: 20px;
            margin-right: 20px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 0;
            line-height: 0;
        }

        .btn-prepend-google {
            -webkit-flex: 0 0 40px;
            -ms-flex: 0 0 40px;
            flex: 0 0 40px;
            max-width: 40px;
            height: 20px;
            margin-right: 5px;
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-align-items: center;
            -webkit-box-align: center;
            -ms-flex-align: center;
            align-items: center;
            -webkit-box-pack: center;
            -webkit-justify-content: center;
            -ms-flex-pack: center;
            justify-content: center;
            font-size: 0;
            line-height: 0;
            margin-left: -24px;
        }

        /* sc-component-id: sc-global-1728064642 */
        #all-members-modal {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            display: none;
        }

        #all-members-modal.is-active {
            display: block;
        }

        #all-members-modal>* {
            width: 100%;
            height: 100%;
            overflow: auto;
            -webkit-overflow-scrolling: touch;
        }

        .modal__overlay {
            position: fixed;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
        }

        .modal__outer {
            display: table;
            width: 100%;
            height: 100%;
        }

        .modal__inner {
            display: table-cell;
            vertical-align: middle;
        }

        .modal__content {
            position: relative;
            background-color: #fff;
            padding: 20px;
        }

        .modal__close {
            background-color: #fff;
            position: absolute;
            right: 0;
            top: 0;
            z-index: 2;
        }
    </style>   

</head>

<body id="all-members">

    <div id="__next">
        <div class="site-global">
            <header class="header-sc-1a6xmt4-0 lphHRx">
                <div class="container">
                    <div class="site-header-container">
                        <div class="site-header-toggle">
                            <div class="site-header-toggle-inner">
                                <span></span><span></span><span></span>
                            </div>
                        </div>
                        <div class="site-header-logo">
                            <a href="{{ route('home') }}"><img
                                    src="https://www.7eleven.co.th/static/imgs/logo.svg?timestamp=1.6.22"
                                    alt="7-11" />
                            </a>
                        </div>
                        <div class="site-header-menu-icons">
                            <nav class="site-menu-icons">
                                <a href="https://www.7eleven.co.th/" class="site-menu-icons-item tooltip"><i><img
                                            src="https://www.7eleven.co.th/static/imgs/icons/icon-search.svg" alt="" /><span
                                            class="tooltip-text">ค้นหา</span></i></a><button
                                    class="site-menu-icons-item tooltip">
                                    <i><img src="https://www.7eleven.co.th/static/imgs/icons/icon-like.svg" alt="" /><span
                                            class="tooltip-text">รายการโปรด</span></i></button><button
                                    class="site-menu-icons-item tooltip" style="cursor: pointer">
                                    <i><img src="https://www.7eleven.co.th/static/imgs/icons/icon-notification.svg" alt="" /><span
                                            class="tooltip-text">แจ้งเตือน</span></i>
                                </button>
                            </nav>
                        </div>
                        <div class="site-header-wrapper false">
                            <div class="site-header-overlay"></div>
                            <div class="site-header-close">
                                <img src="https://www.7eleven.co.th/static/imgs/header/menu/icon-close.svg" alt="" />
                            </div>
                            <div class="site-header-inner">
                                <div class="site-header-right">
                                    <div class="site-header-menu-icons">
                                        <nav class="site-menu-icons">
                                            <a href="https://www.7eleven.co.th/"
                                                class="site-menu-icons-item tooltip"><i><img
                                                        src="https://www.7eleven.co.th/static/imgs/icons/icon-search.svg" alt="" /><span
                                                        class="tooltip-text">ค้นหา</span></i></a><button
                                                class="site-menu-icons-item tooltip">
                                                <i><img src="https://www.7eleven.co.th/static/imgs/icons/icon-like.svg" alt="" /><span
                                                        class="tooltip-text">รายการโปรด</span></i></button><button
                                                class="site-menu-icons-item tooltip" style="cursor: pointer">
                                                <i><img src="https://www.7eleven.co.th/static/imgs/icons/icon-notification.svg"
                                                        alt="" /><span
                                                        class="tooltip-text">แจ้งเตือน</span></i>
                                            </button>
                                        </nav>
                                    </div>
                                    <div class="site-header-account">
                                        <div class="account">
                                            <div class="account-avatar">
                                                <a href="https://www.7eleven.co.th/login"><img src=""
                                                        alt="" /></a>
                                            </div>
                                            <div class="account-detail">
                                                <div class="account-login">
                                                    <a href="https://www.7eleven.co.th/login">เข้าสู่ระบบ</a><a
                                                        href="{{ route('register') }}">สมัครสมาชิก</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="site-header-card">
                                        <div class="allmember-card">
                                            <div class="allmember-card-inner">
                                                <a href="{{ route('home') }}">
                                                    <div class="allmember-card-logined">
                                                        <div class="allmember-card-image">
                                                            <img src="https://www.7eleven.co.th/static/imgs/header/allmember-card-new.svg?timestamp=1.6.22"
                                                                alt="" />
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="site-header-left">
                                    <div class="site-header-menu">
                                        <nav class="site-menu-links site-menu-links--mobile site-menu-links--half">
                                        </nav>
                                        <nav class="site-menu-links">
                                            <a class="site-menu-links-item is-active is-mobile"
                                                href="{{ route('home') }}">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-index.svg"
                                                            alt="" /></i><span>หน้าแรก</span>
                                                </div>
                                            </a><a class="site-menu-links-item" href="{{ route('shop') }}">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-7online.svg"
                                                            alt="" /></i><span>All Online</span>
                                                </div>
                                            </a><a class="site-menu-links-item">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-home.svg"
                                                            alt="" /></i><span>ร้านเซเว่น</span><i
                                                        class="submenu-toggle"><img
                                                            src="static/imgs/menu/icon-arrow.svg"
                                                            alt="" /></i>
                                                </div>
                                                <div class="submenu is-full">
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div data-route="/promotion">
                                                                โปรโมชั่น
                                                            </div>
                                                        </h3>
                                                        <ul>
                                                            <li>
                                                                <button class="false" data-route="/promotion/trade">
                                                                    สินค้าราคาพิเศษ
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false"
                                                                    data-route="/promotion/allmember">
                                                                    ALL
                                                                    member
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false"
                                                                    data-route="/promotion/matching">
                                                                    จับคู่อิ่ม
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false" data-route="/promotion/sale">
                                                                    ลดอย่างแรง
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false" data-route="/promotion/redeem">
                                                                    แลกคะแนนอิ่มฟรี
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div data-route="/new-product">
                                                                สินค้า
                                                            </div>
                                                        </h3>
                                                        <ul>
                                                            <li>
                                                                <button class="false"
                                                                    data-route="/new-product/bakery">
                                                                    อาหารและเบเกอรี่
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false"
                                                                    data-route="/new-product/drink">
                                                                    เครื่องดื่ม
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div>
                                                                บริการ
                                                            </div>
                                                        </h3>
                                                        <ul>
                                                            <li>
                                                                <button class="false" data-route="/speed-d-tracking">
                                                                    เช็คสถานะการจัดส่ง
                                                                    สปีด-ดี
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false" data-route="/speed-d-booking">
                                                                    ส่งพัสดุ
                                                                    สปีด-ดี
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div data-route="/lifestyle">
                                                                ไลฟ์สไตล์
                                                            </div>
                                                        </h3>
                                                        <ul>
                                                            <li>
                                                                <button class="false"
                                                                    data-route="/lifestyle/cooking">
                                                                    เมนูง่ายๆ
                                                                    ทำเองได้ที่บ้าน
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false" data-route="/lifestyle/health">
                                                                    สุขภาพ
                                                                </button>
                                                            </li>
                                                            <li>
                                                                <button class="false"
                                                                    data-route="/lifestyle/knowledge">
                                                                    สาระน่ารู้
                                                                </button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div data-route="/coupon">
                                                                คูปอง
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </a><a class="site-menu-links-item"
                                                href="https://www.7eleven.co.th/promotion">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-promotion.svg"
                                                            alt=""
                                                            style="
                                                                    width: 26px;
                                                                " /></i><span>โปรโมชั่น</span><i
                                                        class="submenu-toggle"><img
                                                            src="static/imgs/menu/icon-arrow.svg"
                                                            alt="" /></i>
                                                </div>
                                                <div class="submenu">
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div data-route="/promotion/trade">
                                                                สินค้าราคาพิเศษ
                                                            </div>
                                                        </h3>
                                                        <h3 class="">
                                                            <div data-route="">
                                                                ALL Online
                                                            </div>
                                                        </h3>
                                                        <h3 class="">
                                                            <div data-route="/promotion/sale">
                                                                ลดอย่างแรง
                                                            </div>
                                                        </h3>
                                                        <h3 class="">
                                                            <div data-route="/promotion/matching">
                                                                จับคู่อิ่ม
                                                            </div>
                                                        </h3>
                                                        <h3 class="">
                                                            <div data-route="/promotion/allmember">
                                                                ALL member
                                                            </div>
                                                        </h3>
                                                        <h3 class="">
                                                            <div data-route="/promotion/redeem">
                                                                แลกคะแนนอิ่มฟรี
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </a><a class="site-menu-links-item"
                                                href="https://www.7eleven.co.th/new-product">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-product.svg"
                                                            alt=""
                                                            style="
                                                                    width: 30px;
                                                                " /></i><span>สินค้า</span><i
                                                        class="submenu-toggle"><img
                                                            src="static/imgs/menu/icon-arrow.svg"
                                                            alt="" /></i>
                                                </div>
                                                <div class="submenu">
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div data-route="/new-product/bakery">
                                                                อาหารและเบเกอรี่
                                                            </div>
                                                        </h3>
                                                        <h3 class="">
                                                            <div data-route="/new-product/drink">
                                                                เครื่องดื่ม
                                                            </div>
                                                        </h3>
                                                    </div>
                                                </div>
                                            </a><a class="site-menu-links-item"
                                                href="https://www.7eleven.co.th/allmember/non-member">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-allmember.svg"
                                                            alt="" /></i><span>ออลล์
                                                        เมมเบอร์</span><i class="submenu-toggle"><img
                                                            src="static/imgs/menu/icon-arrow.svg"
                                                            alt="" /></i>
                                                </div>
                                                <div class="submenu">
                                                    <div class="submenu-box">
                                                        <h3 class="">
                                                            <div data-route="/promotion/allmember">
                                                                โปรโมชั่นเฉพาะสมาชิก
                                                            </div>
                                                        </h3>
                                                        <div class="submenu-box__item">
                                                            <h3 class="">
                                                                <div data-route="/about">
                                                                    เกี่ยวกับ
                                                                    ALL
                                                                    member<i class="submenu-toggle"><img
                                                                            src="static/imgs/menu/icon-arrow.svg"
                                                                            alt="" /></i>
                                                                </div>
                                                            </h3>
                                                            <ul>
                                                                <li>
                                                                    <button class="false"
                                                                        data-route="/about/how-to-register">
                                                                        ขั้นตอนการสมัคร
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button class="false"
                                                                        data-route="/about/benefit">
                                                                        สิทธิพิเศษสมาชิก
                                                                    </button>
                                                                </li>
                                                                <li>
                                                                    <button class="false" data-route="/about/faq">
                                                                        FAQ
                                                                    </button>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a><a class="site-menu-links-item"
                                                href="https://www.7eleven.co.th/find-store">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-pin.svg"
                                                            alt="" /></i><span>ค้นหาร้าน</span>
                                                </div>
                                            </a>
                                        </nav>
                                        <nav class="site-menu-links site-menu-links--mobile"></nav>
                                        <nav class="site-menu-links site-menu-links--mobile site-menu-links--logout">
                                            <a class="site-menu-links-item" href="https://www.7eleven.co.th/logout">
                                                <div class="menu-label">
                                                    <i><img src="static/imgs/header/menu/icon-logout.svg"
                                                            alt="" /></i><span>ออกจากระบบ</span>
                                                </div>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <main> {{ $slot }} </main>

            <footer class="footer-sc-1uticjy-0 pqAel">
                <div class="container">
                    <div class="footer-wrapper">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="{{ route('home') }}"><img
                                        src="https://www.7eleven.co.th/static/imgs/Logo_Footer.svg?timestamp=1.6.22"
                                        alt="" style="background-color: #ffffff" /></a>
                            </div>
                        </div>
                        <div class="footer-right">
                            <div class="footer-colomns">
                                <div class="footer-colomn">
                                    <div class="footer-widget">
                                        <div class="footer-title">
                                            <h3>เกี่ยวกับเรา</h3>
                                        </div>
                                        <div class="footer-menu">
                                            <ul>
                                                <li>
                                                    <a href="https://www.cpall.co.th/" target="_blank">รู้จักซีพี
                                                        ออลล์</a>
                                                </li>
                                                <li>
                                                    <a href="https://job.cpall.co.th/v2/Default.aspx"
                                                        target="_blank">ร่วมงานกับเรา</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.cpall.co.th/store-business-partner/"
                                                        target="_blank">ร่วมธุรกิจ7-Eleven</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.cpall.co.th/news/"
                                                        target="_blank">ข่าวและกิจกรรม</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.7eleven.co.th/cookie">นโยบายการใช้คุกกี้
                                                        (Cookies Policy)</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.7eleven.co.th/privacy-notice">การแจ้งการประมวลผลข้อมูลส่วนบุคคลของสมาชิก
                                                        (Privacy Notice)</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.7eleven.co.th/term-and-condition-allmember">ข้อกำหนดและเงื่อนไขสมาชิก
                                                        ALL member</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-colomn">
                                    <div class="footer-widget">
                                        <div class="footer-title">
                                            <h3>ช่วยเหลือ</h3>
                                        </div>
                                        <div class="footer-menu">
                                            <ul>
                                                <li>
                                                    <a href="https://www.7eleven.co.th/about/faq">คำถามที่พบบ่อย</a>
                                                </li>
                                                <li>
                                                    <a href="tel:028267744">คอลเซ็นเตอร์
                                                        02-826-7744</a>
                                                </li>
                                                <li>
                                                    <a href="tel:028267777">บริการสมาชิก
                                                        02-826-7777</a>
                                                </li>
                                                <li>
                                                    <a href="https://www.7eleven.co.th/contact-us">ติดต่อเรา</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-colomn">
                                    <div class="footer-widget">
                                        <div class="footer-title">
                                            <h3>ติดตามเรา</h3>
                                        </div>
                                        <div class="footer-social">
                                            <ul>
                                                <li>
                                                    <a href="https://www.facebook.com/7ElevenThailand/"><img
                                                            src="static/imgs/icons/icon-facebook.svg"
                                                            alt="Facebook" /></a>
                                                </li>
                                                <li>
                                                    <a href="https://twitter.com/7eleventhailand"><img
                                                            src="static/imgs/icons/icon-twitter.svg"
                                                            alt="Twitter" /></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.instagram.com/7.eleventhailand/?hl=en"><img
                                                            src="static/imgs/icons/icon-instagram.svg"
                                                            alt="Instagram" /></a>
                                                </li>
                                                <li>
                                                    <a href="https://www.youtube.com/channel/UCpu3-NFPc8Fl0WIVsGdb3KA"><img
                                                            src="static/imgs/icons/icon-youtube.svg"
                                                            alt="Youtube" /></a>
                                                </li>
                                                <li>
                                                    <a href="https://page.line.me/cpall"><img
                                                            src="static/imgs/icons/icon-line.svg"
                                                            alt="Line" /></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="footer-widget">
                                        <div class="footer-title">
                                            <h3>
                                                รับโปรโมชั่นและดีลพิเศษก่อนใคร
                                            </h3>
                                        </div>
                                        <div class="footer-subscribe">
                                            <form novalidate="" class="form-subscribe">
                                                <div class="form-group false">
                                                    <label for="" class="ui-hidden"></label><input
                                                        type="email" placeholder="ใส่อีเมล์ของคุณ"
                                                        value="" /><button type="submit">
                                                        เข้าร่วม
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer-colomn">
                                    <div class="footer-widget">
                                        <div class="footer-title">
                                            <h3>ดาวน์โหลดแอป 7-Eleven</h3>
                                        </div>
                                        <div class="footer-download">
                                            <div class="footer-download-item">
                                                <div class="footer-download-qrcode">
                                                    <img src="static/imgs/footer/qrcode.png" alt="" />
                                                </div>
                                            </div>
                                            <div class="footer-download-item">
                                                <div class="footer-download-apps">
                                                    <div class="footer-download-app">
                                                        <a href="http://bit.ly/w7appSt" target="_blank"><img
                                                                src="static/imgs/footer/appstore.svg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="footer-download-app">
                                                        <a href="http://bit.ly/w7appPl" target="_blank"><img
                                                                src="static/imgs/footer/googleplay.svg"
                                                                alt="" /></a>
                                                    </div>
                                                    <div class="footer-download-app">
                                                        <a href="https://appgallery.huawei.com/app/C101676101"
                                                            target="_blank"><img
                                                                src="static/imgs/footer/huaweistore.svg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <div id="all-members-modal"></div>

    <!-- เพิ่ม Bootstrap และ jQuery JS -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
    

    <script>
        window.addEventListener('load', function() {
            const observer = new MutationObserver(function(mutations) {
                mutations.forEach(function(mutation) {
                    if (mutation.type === 'childList') {
                        let imgElements = document.querySelectorAll('img');
                        imgElements.forEach(function(img) {
                            // ตรวจสอบและเปลี่ยน URL สำหรับทุกภาพ
                            if (img.src && img.src.startsWith(window.location.origin +
                                    '/static/imgs/')) {
                                img.src = 'https://www.7eleven.co.th' + img.src.substring(
                                    window.location.origin.length);
                            }
                        });
                    }
                });
            });

            // เริ่มติดตามการเปลี่ยนแปลงใน DOM
            observer.observe(document.body, {
                childList: true,
                subtree: true
            });
        });


        document.querySelectorAll('a').forEach(function(link) {
            link.style.textDecoration = 'none';
        });
    </script>


</body>

</html>
