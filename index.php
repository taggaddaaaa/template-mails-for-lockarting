<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--TODO: define the subject according to the content-->
    <title>*|SUBJECT|*</title>

    <link rel="shortcut icon" href="img/favicon.ico">

    <style type="text/css">
        p {
            margin: 10px 0;
            padding: 0;
        }

        table {
            border-collapse: collapse;
        }

        h1, h2, h3, h4, h5, h6 {
            display: block;
            margin: 0;
            padding: 0;
        }

        img, a img {
            border: 0;
            height: auto;
            outline: none;
            text-decoration: none;
        }

        body, #bodyTable, #bodyCell {
            height: 100%;
            margin: 0;
            padding: 0;
            width: 100%;
        }

        .mcnPreviewText {
            display: none !important;
        }

        #outlook a {
            padding: 0;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        table {
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
        }

        .ReadMsgBody {
            width: 100%;
        }

        .ExternalClass {
            width: 100%;
        }

        p, a, li, td, blockquote {
            mso-line-height-rule: exactly;
        }

        a[href^=tel], a[href^=sms] {
            color: inherit;
            cursor: default;
            text-decoration: none;
        }

        p, a, li, td, body, table, blockquote {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        .ExternalClass, .ExternalClass p, .ExternalClass td, .ExternalClass div, .ExternalClass span, .ExternalClass font {
            line-height: 100%;
        }

        a[x-apple-data-detectors] {
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        .templateContainer {
            max-width: 600px !important;
        }

        a.mcnButton {
            display: block;
        }

        .mcnImage, .mcnRetinaImage {
            vertical-align: bottom;
        }

        .mcnTextContent {
            word-break: break-word;
        }

        .mcnTextContent img {
            height: auto !important;
        }

        .mcnDividerBlock {
            table-layout: fixed !important;
        }

        /*
        @tab Page
        @section Heading 1
        @style heading 1
        */
        h1 {
            /*@editable*/
            color: #222222;
            /*@editable*/
            font-family: Helvetica, sans-serif;
            /*@editable*/
            font-size: 40px;
            /*@editable*/
            font-style: normal;
            /*@editable*/
            font-weight: bold;
            /*@editable*/
            line-height: 150%;
            /*@editable*/
            letter-spacing: normal;
            /*@editable*/
            text-align: center;
        }

        /*
        @tab Page
        @section Heading 2
        @style heading 2
        */
        h2 {
            /*@editable*/
            color: #222222;
            /*@editable*/
            font-family: Helvetica, sans-serif;
            /*@editable*/
            font-size: 34px;
            /*@editable*/
            font-style: normal;
            /*@editable*/
            font-weight: bold;
            /*@editable*/
            line-height: 150%;
            /*@editable*/
            letter-spacing: normal;
            /*@editable*/
            text-align: left;
        }

        /*
        @tab Page
        @section Heading 3
        @style heading 3
        */
        h3 {
            /*@editable*/
            color: #444444;
            /*@editable*/
            font-family: Helvetica, sans-serif;
            /*@editable*/
            font-size: 22px;
            /*@editable*/
            font-style: normal;
            /*@editable*/
            font-weight: bold;
            /*@editable*/
            line-height: 150%;
            /*@editable*/
            letter-spacing: normal;
            /*@editable*/
            text-align: left;
        }

        /*
        @tab Page
        @section Heading 4
        @style heading 4
        */
        h4 {
            /*@editable*/
            color: #949494;
            /*@editable*/
            font-family: Georgia, sans-serif;
            /*@editable*/
            font-size: 20px;
            /*@editable*/
            font-style: italic;
            /*@editable*/
            font-weight: normal;
            /*@editable*/
            line-height: 125%;
            /*@editable*/
            letter-spacing: normal;
            /*@editable*/
            text-align: center;
        }

        /*
        @tab Header
        @section Header Container Style
        */
        #templateHeader {
            /*@editable*/
            background-color: #F7F7F7;
            /*@editable*/
            background-image: none;
            /*@editable*/
            background-repeat: no-repeat;
            /*@editable*/
            background-position: 50% 50%;
            /*@editable*/
            background-size: cover;
            /*@editable*/
            border-top: 0;
            /*@editable*/
            border-bottom: 0;
            /*@editable*/
            padding-top: 54px;
            /*@editable*/
            padding-bottom: 54px;
        }

        /*
        @tab Header
        @section Header Interior Style
        */
        .headerContainer {
            /*@editable*/
            background-color: transparent;
            /*@editable*/
            background-image: none;
            /*@editable*/
            background-repeat: no-repeat;
            /*@editable*/
            background-position: center;
            /*@editable*/
            background-size: cover;
            /*@editable*/
            border-top: 0;
            /*@editable*/
            border-bottom: 0;
            /*@editable*/
            padding-top: 0;
            /*@editable*/
            padding-bottom: 0;
        }

        /*
        @tab Header
        @section Header Text
        */
        .headerContainer .mcnTextContent, .headerContainer .mcnTextContent p {
            /*@editable*/
            color: #757575;
            /*@editable*/
            font-family: Helvetica, sans-serif;
            /*@editable*/
            font-size: 16px;
            /*@editable*/
            line-height: 150%;
            /*@editable*/
            text-align: left;
        }

        /*
        @tab Header
        @section Header Link
        */
        .headerContainer .mcnTextContent a, .headerContainer .mcnTextContent p a {
            /*@editable*/
            color: #007C89;
            /*@editable*/
            font-weight: normal;
            /*@editable*/
            text-decoration: underline;
        }

        /*
        @tab Body
        @section Body Container Style
        */
        #templateBody {
            /*@editable*/
            background-color: #FFFFFF;
            /*@editable*/
            background-image: none;
            /*@editable*/
            background-repeat: no-repeat;
            /*@editable*/
            background-position: center;
            /*@editable*/
            background-size: cover;
            /*@editable*/
            border-top: 0;
            /*@editable*/
            border-bottom: 0;
            /*@editable*/
            padding-top: 36px;
            /*@editable*/
            padding-bottom: 54px;
        }

        /*
        @tab Body
        @section Body Interior Style
        */
        .bodyContainer {
            /*@editable*/
            background-color: transparent;
            /*@editable*/
            background-image: none;
            /*@editable*/
            background-repeat: no-repeat;
            /*@editable*/
            background-position: center;
            /*@editable*/
            background-size: cover;
            /*@editable*/
            border-top: 0;
            /*@editable*/
            border-bottom: 0;
            /*@editable*/
            padding-top: 0;
            /*@editable*/
            padding-bottom: 0;
        }

        /*
        @tab Body
        @section Body Text
        */
        .bodyContainer .mcnTextContent, .bodyContainer .mcnTextContent p {
            /*@editable*/
            color: #757575;
            /*@editable*/
            font-family: Helvetica, sans-serif;
            /*@editable*/
            font-size: 16px;
            /*@editable*/
            line-height: 150%;
            /*@editable*/
            text-align: left;
        }

        /*
        @tab Body
        @section Body Link
        */
        .bodyContainer .mcnTextContent a, .bodyContainer .mcnTextContent p a {
            /*@editable*/
            color: #007C89;
            /*@editable*/
            font-weight: normal;
            /*@editable*/
            text-decoration: underline;
        }

        /*
        @tab Footer
        @section Footer Style
        */
        #templateFooter {
            /*@editable*/
            background-color: #333333;
            /*@editable*/
            background-image: none;
            /*@editable*/
            background-repeat: no-repeat;
            /*@editable*/
            background-position: center;
            /*@editable*/
            background-size: cover;
            /*@editable*/
            border-top: 0;
            /*@editable*/
            border-bottom: 0;
            /*@editable*/
            padding-top: 45px;
            /*@editable*/
            padding-bottom: 63px;
        }

        /*
        @tab Footer
        @section Footer Interior Style
        */
        .footerContainer {
            /*@editable*/
            background-color: transparent;
            /*@editable*/
            background-image: none;
            /*@editable*/
            background-repeat: no-repeat;
            /*@editable*/
            background-position: center;
            /*@editable*/
            background-size: cover;
            /*@editable*/
            border-top: 0;
            /*@editable*/
            border-bottom: 0;
            /*@editable*/
            padding-top: 0;
            /*@editable*/
            padding-bottom: 0;
        }

        /*
        @tab Footer
        @section Footer Text
        */
        .footerContainer .mcnTextContent, .footerContainer .mcnTextContent p {
            /*@editable*/
            color: #FFFFFF;
            /*@editable*/
            font-family: Helvetica, sans-serif;
            /*@editable*/
            font-size: 12px;
            /*@editable*/
            line-height: 150%;
            /*@editable*/
            text-align: center;
        }

        /*
        @tab Footer
        @section Footer Link
        */
        .footerContainer .mcnTextContent a, .footerContainer .mcnTextContent p a {
            /*@editable*/
            color: #FFFFFF;
            /*@editable*/
            font-weight: normal;
            /*@editable*/
            text-decoration: underline;
        }

        @media only screen and (min-width: 768px) {
            .templateContainer {
                width: 600px !important;
            }
        }

        @media only screen and (max-width: 480px) {
            body, table, td, p, a, li, blockquote {
                -webkit-text-size-adjust: none !important;
            }

            body {
                width: 100% !important;
                min-width: 100% !important;
            }

            .mcnRetinaImage {
                max-width: 100% !important;
            }

            .mcnImage {
                width: 100% !important;
            }

            .mcnCartContainer, .mcnCaptionTopContent, .mcnRecContentContainer, .mcnCaptionBottomContent, .mcnTextContentContainer, .mcnBoxedTextContentContainer, .mcnImageGroupContentContainer, .mcnCaptionLeftTextContentContainer, .mcnCaptionRightTextContentContainer, .mcnCaptionLeftImageContentContainer, .mcnCaptionRightImageContentContainer, .mcnImageCardLeftTextContentContainer, .mcnImageCardRightTextContentContainer, .mcnImageCardLeftImageContentContainer, .mcnImageCardRightImageContentContainer {
                max-width: 100% !important;
                width: 100% !important;
            }

            .mcnBoxedTextContentContainer {
                min-width: 100% !important;
            }

            .mcnImageGroupContent {
                padding: 9px !important;
            }

            .mcnCaptionLeftContentOuter .mcnTextContent, .mcnCaptionRightContentOuter .mcnTextContent {
                padding-top: 9px !important;
            }

            .mcnImageCardTopImageContent, .mcnCaptionBottomContent:last-child .mcnCaptionBottomImageContent, .mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent {
                padding-top: 18px !important;
            }

            .mcnImageCardBottomImageContent {
                padding-bottom: 9px !important;
            }

            .mcnImageGroupBlockInner {
                padding-top: 0 !important;
                padding-bottom: 0 !important;
            }

            .mcnImageGroupBlockOuter {
                padding-top: 9px !important;
                padding-bottom: 9px !important;
            }

            .mcnTextContent, .mcnBoxedTextContentColumn {
                padding-right: 18px !important;
                padding-left: 18px !important;
            }

            .mcnImageCardLeftImageContent, .mcnImageCardRightImageContent {
                padding-right: 18px !important;
                padding-bottom: 0 !important;
                padding-left: 18px !important;
            }

            .mcpreview-image-uploader {
                display: none !important;
                width: 100% !important;
            }

            /*
            @tab Mobile Styles
             @section Heading 1
             @tip Make the first-level headings larger in size for better readability on small screens.
             */
            h1 {
                /*@editable*/
                font-size: 30px !important;
                /*@editable*/
                line-height: 125% !important;
            }

            /*
            @tab Mobile Styles
            @section Heading 2
            @tip Make the second-level headings larger in size for better readability on small screens.
            */
            h2 {
                /*@editable*/
                font-size: 26px !important;
                /*@editable*/
                line-height: 125% !important;
            }

            /*
            @tab Mobile Styles
            @section Heading 3
            @tip Make the third-level headings larger in size for better readability on small screens.
            */
            h3 {
                /*@editable*/
                font-size: 20px !important;
                /*@editable*/
                line-height: 150% !important;
            }

            /*
           @tab Mobile Styles
           @section Heading 4
           @tip Make the fourth-level headings larger in size for better readability on small screens.
           */
            h4 {
                /*@editable*/
                font-size: 18px !important;
                /*@editable*/
                line-height: 150% !important;
            }

            /*
           @tab Mobile Styles
           @section Boxed Text
           @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
           */
            .mcnBoxedTextContentContainer .mcnTextContent, .mcnBoxedTextContentContainer .mcnTextContent p {
                /*@editable*/
                font-size: 14px !important;
                /*@editable*/
                line-height: 150% !important;
            }

            /*
                        @tab Mobile Styles
                        @section Header Text
                        @tip Make the header text larger in size for better readability on small screens.
                        */
            .headerContainer .mcnTextContent, .headerContainer .mcnTextContent p {
                /*@editable*/
                font-size: 16px !important;
                /*@editable*/
                line-height: 150% !important;
            }

            /*
                        @tab Mobile Styles
                        @section Body Text
                        @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                        */
            .bodyContainer .mcnTextContent, .bodyContainer .mcnTextContent p {
                /*@editable*/
                font-size: 16px !important;
                /*@editable*/
                line-height: 150% !important;
            }

            /*
                        @tab Mobile Styles
                        @section Footer Text
                        @tip Make the footer content text larger in size for better readability on small screens.
                        */
            .footerContainer .mcnTextContent, .footerContainer .mcnTextContent p {
                /*@editable*/
                font-size: 14px !important;
                /*@editable*/
                line-height: 150% !important;
            }
        }
    </style>
</head>

<body>
<div style="text-align: center;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
        <tr>
            <td align="center" valign="top" id="bodyCell">
                <!-- BEGIN TEMPLATE -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <!--HEADER-->
                    <tr>
                        <td align="center" valign="top" id="templateHeader" data-template-container>

                            <table class="templateContainer" style="align-content: center; border: 0; padding: 0; width: 100%;">
                                <tr>
                                    <td class="headerContainer" style="vertical-align: top;">
                                        <table class="mcnImageBlock" style="min-width:100%; width: 100%;border: 0; padding: 0;">
                                            <tbody class="mcnImageBlockOuter">
                                            <tr>
                                                <td style="padding:9px; vertical-align: top;" class="mcnImageBlockInner">
                                                    <table class="mcnImageContentContainer"
                                                           style="min-width:100%; width: 100%; border: 0; padding: 0;">
                                                        <tbody>
                                                        <tr>
                                                            <td class="mcnImageContent"
                                                                style="padding: 0 9px; text-align:center; vertical-align: top;">

                                                                <img alt="logo Loc'karting"
                                                                     src="img/logo-header.png"
                                                                     style="width:256px; align-content: center; max-width:512px; padding-bottom: 0; display: inline !important; vertical-align: bottom;"
                                                                     class="mcnRetinaImage">
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!--END HEADER-->

                    <!--CONTENT CONTAINER-->
                    <tr>
                        <td align="center" valign="top" id="templateBody" data-template-container>
                            <?php
                            //                                                        include 'defaultContent.php';
                            //                                                        include 'monthlyResults.php';
                            //                                                        include 'personalInfoDeleted.php';

                            ?>
                        </td>
                    </tr>
                    <!--END CONTENT CONTAINER-->

                    <!--FOOTER-->
                    <tr>
                        <td align="center" valign="top" id="templateFooter" data-template-container>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                   class="templateContainer">
                                <tr>
                                    <td valign="top" class="footerContainer">
                                        <!--Reseaux sociaux-->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                               class="mcnFollowBlock" style="min-width:100%;">
                                            <tbody class="mcnFollowBlockOuter">
                                            <tr>
                                                <td align="center" valign="top" style="padding:9px"
                                                    class="mcnFollowBlockInner">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                                           class="mcnFollowContentContainer" style="min-width:100%;">
                                                        <tbody>
                                                        <tr>
                                                            <td align="center"
                                                                style="padding-left:9px;padding-right:9px;">
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                       width="100%" style="min-width:100%;"
                                                                       class="mcnFollowContent">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td align="center" valign="top"
                                                                            style="padding-top:9px; padding-right:9px; padding-left:9px;">
                                                                            <table align="center" border="0"
                                                                                   cellpadding="0" cellspacing="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td align="center" valign="top">
                                                                                        <!--facebook-->
                                                                                        <table align="left" border="0"
                                                                                               cellpadding="0"
                                                                                               cellspacing="0"
                                                                                               style="display:inline;">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td valign="top"
                                                                                                    style="padding-right:10px; padding-bottom:9px;"
                                                                                                    class="mcnFollowContentItemContainer">
                                                                                                    <table border="0"
                                                                                                           cellpadding="0"
                                                                                                           cellspacing="0"
                                                                                                           width="100%"
                                                                                                           class="mcnFollowContentItem">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td align="left"
                                                                                                                valign="middle"
                                                                                                                style="padding: 5px 10px 5px 9px;">
                                                                                                                <table align="left"
                                                                                                                       border="0"
                                                                                                                       cellpadding="0"
                                                                                                                       cellspacing="0"
                                                                                                                       width="">
                                                                                                                    <tbody>
                                                                                                                    <tr>
                                                                                                                        <td align="center"
                                                                                                                            valign="middle"
                                                                                                                            width="24"
                                                                                                                            class="mcnFollowIconContent">
                                                                                                                            <a href="https://www.facebook.com/circuit.lockarting"
                                                                                                                               target="_blank">
                                                                                                                                <img src="img/outline-light-facebook-48.png"
                                                                                                                                     style="display:block;"
                                                                                                                                     height="24"
                                                                                                                                     width="24"
                                                                                                                                     class=""
                                                                                                                                     alt="facebook icon"
                                                                                                                                ></a>
                                                                                                                        </td>
                                                                                                                    </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <!--instagram-->
                                                                                        <table align="left" border="0"
                                                                                               cellpadding="0"
                                                                                               cellspacing="0"
                                                                                               style="display:inline;">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td valign="top"
                                                                                                    style="padding-right:10px; padding-bottom:9px;"
                                                                                                    class="mcnFollowContentItemContainer">
                                                                                                    <table border="0"
                                                                                                           cellpadding="0"
                                                                                                           cellspacing="0"
                                                                                                           width="100%"
                                                                                                           class="mcnFollowContentItem">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td align="left"
                                                                                                                valign="middle"
                                                                                                                style="padding: 5px 10px 5px 9px;">
                                                                                                                <table align="left"
                                                                                                                       border="0"
                                                                                                                       cellpadding="0"
                                                                                                                       cellspacing="0"
                                                                                                                       width="">
                                                                                                                    <tbody>
                                                                                                                    <tr>

                                                                                                                        <td align="center"
                                                                                                                            valign="middle"
                                                                                                                            width="24"
                                                                                                                            class="mcnFollowIconContent">
                                                                                                                            <a href="https://www.instagram.com/lockarting34/"
                                                                                                                               target="_blank">
                                                                                                                                <img src="img/outline-light-instagram-48.png"
                                                                                                                                     style="display:block;"
                                                                                                                                     height="24"
                                                                                                                                     width="24"
                                                                                                                                     class=""
                                                                                                                                     alt="instagram icon"
                                                                                                                                ></a>
                                                                                                                        </td>


                                                                                                                    </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                        <!--website-->
                                                                                        <table align="left" border="0"
                                                                                               cellpadding="0"
                                                                                               cellspacing="0"
                                                                                               style="display:inline;">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td valign="top"
                                                                                                    style="padding-right:0; padding-bottom:9px;"
                                                                                                    class="mcnFollowContentItemContainer">
                                                                                                    <table border="0"
                                                                                                           cellpadding="0"
                                                                                                           cellspacing="0"
                                                                                                           width="100%"
                                                                                                           class="mcnFollowContentItem">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td align="left"
                                                                                                                valign="middle"
                                                                                                                style="padding: 5px 10px 5px 9px;">
                                                                                                                <table align="left"
                                                                                                                       border="0"
                                                                                                                       cellpadding="0"
                                                                                                                       cellspacing="0"
                                                                                                                       width="">
                                                                                                                    <tbody>
                                                                                                                    <tr>

                                                                                                                        <td align="center"
                                                                                                                            valign="middle"
                                                                                                                            width="24"
                                                                                                                            class="mcnFollowIconContent">
                                                                                                                            <a href="https://www.lockarting.fr"
                                                                                                                               target="_blank">
                                                                                                                                <img src="img/outline-light-link-48.png"
                                                                                                                                     style="display:block;"
                                                                                                                                     height="24"
                                                                                                                                     width="24"
                                                                                                                                     class=""
                                                                                                                                     alt="site web"
                                                                                                                                ></a>
                                                                                                                        </td>


                                                                                                                    </tr>
                                                                                                                    </tbody>
                                                                                                                </table>
                                                                                                            </td>
                                                                                                        </tr>
                                                                                                        </tbody>
                                                                                                    </table>
                                                                                                </td>
                                                                                            </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </td>
                                                                                </tr>
                                                                                </tbody>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--Trait de separation-->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                               class="mcnDividerBlock" style="min-width:100%;">
                                            <tbody class="mcnDividerBlockOuter">
                                            <tr>
                                                <td class="mcnDividerBlockInner" style="min-width:100%; padding:18px;">
                                                    <table class="mcnDividerContent" border="0" cellpadding="0"
                                                           cellspacing="0" width="100%"
                                                           style="min-width: 100%;border-top: 2px solid #505050;">
                                                        <tbody>
                                                        <tr>
                                                            <td>
                                                                <span></span>
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        <!--Copyright-->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                               class="mcnTextBlock" style="min-width:100%;">
                                            <tbody class="mcnTextBlockOuter">
                                            <tr>
                                                <td valign="top" class="mcnTextBlockInner" style="padding-top:9px;">
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0"
                                                           style="max-width:100%; min-width:100%;" width="100%"
                                                           class="mcnTextContentContainer">
                                                        <tbody>
                                                        <tr>
                                                            <td valign="top" class="mcnTextContent" style="padding: 0 18px 9px;">
                                                                <em>Copyright ©
                                                                    <!--TODO: remove script and add a PHP variable for the date because emails do not support javascript-->
                                                                    <script>
                                                                        document.write(new Date().getFullYear());
                                                                    </script>
                                                                    - Loc'karting, Tous droits réservés.</em>
                                                                <br>
                                                                <br>
                                                                <strong>Nos coordonnées:</strong>
                                                                <br>
                                                                Loc'karting, circuit de karting, Route Départementale 172, Lieu-dit La Pailletrice, 34470 Pérols.
                                                                <br>
                                                                <a href="tel:0467170342">04.67.17.03.42</a> - <a href="mailto:contact@lockarting.fr">contact@lockarting.fr</a>
                                                                <br>
                                                                <br>
                                                                Tu reçois cet email car tu es inscrit en tant que pilote officiel du circuit Loc'karting.<br>
                                                                Si tu ne souhaites plus utiliser ton compte, tu peux demander à
                                                                <a target="_blank" href="mailto:support@lockarting.fr?subject=Suppression%20de%20mon%20compte%20pilote&body=Je%20souhaite%20effacer%20toutes%20mes%20informations%20personnelles%20svp."
                                                                >effacer toutes tes données personnelles directement par mail</a> 😭.
                                                            </td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <!--END FOOTER-->

                </table>
                <!-- // END TEMPLATE -->
            </td>
        </tr>
    </table>
</div>
</body>
</html>