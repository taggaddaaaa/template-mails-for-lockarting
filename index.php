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

        #outlook a {
            padding: 0;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }

        table {
            mso-table-lspace: 0;
            mso-table-rspace: 0;
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

        .mcnTextContent {
            word-break: break-word;
        }

        .mcnTextContent img {
            height: auto !important;
        }

        /*
        @tab Page
        @section Heading 1
        @style heading 1
        */
        h1 {
            color: #222222;
            font-family: Helvetica, sans-serif;
            font-size: 40px;
            font-style: normal;
            font-weight: bold;
            line-height: 150%;
            letter-spacing: normal;
            text-align: center;
        }

        /*
        @tab Page
        @section Heading 2
        @style heading 2
        */
        h2 {
            color: #222222;
            font-family: Helvetica, sans-serif;
            font-size: 34px;
            font-style: normal;
            font-weight: bold;
            line-height: 150%;
            letter-spacing: normal;
            text-align: left;
        }

        /*
        @tab Page
        @section Heading 3
        @style heading 3
        */
        h3 {
            color: #444444;
            font-family: Helvetica, sans-serif;
            font-size: 22px;
            font-style: normal;
            font-weight: bold;
            line-height: 150%;
            letter-spacing: normal;
            text-align: left;
        }

        /*
        @tab Page
        @section Heading 4
        @style heading 4
        */
        h4 {
            color: #949494;
            font-family: Georgia, sans-serif;
            font-size: 20px;
            font-style: italic;
            font-weight: normal;
            line-height: 125%;
            letter-spacing: normal;
            text-align: center;
        }

        /*
        @tab Header
        @section Header Container Style
        */
        #templateHeader {
            background-color: #F7F7F7;
            background-image: none;
            background-repeat: no-repeat;
            background-position: 50% 50%;
            border-top: 0;
            border-bottom: 0;
            padding-top: 54px;
            padding-bottom: 54px;
        }

        /*
        @tab Header
        @section Header Interior Style
        */
        .headerContainer {
            background-color: transparent;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        /*
        @tab Header
        @section Header Text
        */
        .headerContainer .mcnTextContent, .headerContainer .mcnTextContent p {
            color: #757575;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            line-height: 150%;
            text-align: left;
        }

        /*
        @tab Header
        @section Header Link
        */
        .headerContainer .mcnTextContent a, .headerContainer .mcnTextContent p a {
            color: #007C89;
            font-weight: normal;
            text-decoration: underline;
        }

        /*
        @tab Body
        @section Body Text
        */
        .mcnTextContent,  .mcnTextContent p {
            color: #757575;
            font-family: Helvetica, sans-serif;
            font-size: 16px;
            line-height: 150%;
            text-align: left;
        }

        /*
        @tab Body
        @section Body Link
        */
        .mcnTextContent a,  .mcnTextContent p a {
            color: #007C89;
            font-weight: normal;
            text-decoration: underline;
        }

        /*
        @tab Footer
        @section Footer Style
        */
        #templateFooter {
            background-color: #333333;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            padding-top: 45px;
            padding-bottom: 63px;
        }

        /*
        @tab Footer
        @section Footer Interior Style
        */
        .footerContainer {
            background-color: transparent;
            background-image: none;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            border-top: 0;
            border-bottom: 0;
            padding-top: 0;
            padding-bottom: 0;
        }

        /*
        @tab Footer
        @section Footer Text
        */
        .footerContainer .mcnTextContent, .footerContainer .mcnTextContent p {
            color: #FFFFFF;
            font-family: Helvetica, sans-serif;
            font-size: 12px;
            line-height: 150%;
            text-align: center;
        }

        /*
        @tab Footer
        @section Footer Link
        */
        .footerContainer .mcnTextContent a, .footerContainer .mcnTextContent p a {
            color: #FFFFFF;
            font-weight: normal;
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

            .mcnCaptionLeftContentOuter .mcnTextContent, .mcnCaptionRightContentOuter .mcnTextContent {
                padding-top: 9px !important;
            }

            .mcnCaptionBlockInner .mcnCaptionTopContent:last-child .mcnTextContent {
                padding-top: 18px !important;
            }

            .mcnTextContent {
                padding-right: 18px !important;
                padding-left: 18px !important;
            }

            /*
            @tab Mobile Styles
             @section Heading 1
             @tip Make the first-level headings larger in size for better readability on small screens.
             */
            h1 {
                font-size: 30px !important;
                line-height: 125% !important;
            }

            /*
            @tab Mobile Styles
            @section Heading 2
            @tip Make the second-level headings larger in size for better readability on small screens.
            */
            h2 {
                font-size: 26px !important;
                line-height: 125% !important;
            }

            /*
            @tab Mobile Styles
            @section Heading 3
            @tip Make the third-level headings larger in size for better readability on small screens.
            */
            h3 {
                font-size: 20px !important;
                line-height: 150% !important;
            }

            /*
           @tab Mobile Styles
           @section Heading 4
           @tip Make the fourth-level headings larger in size for better readability on small screens.
           */
            h4 {
                font-size: 18px !important;
                line-height: 150% !important;
            }

            /*
           @tab Mobile Styles
           @section Boxed Text
           @tip Make the boxed text larger in size for better readability on small screens. We recommend a font size of at least 16px.
           */
            .mcnBoxedTextContentContainer .mcnTextContent, .mcnBoxedTextContentContainer .mcnTextContent p {
                font-size: 14px !important;
                line-height: 150% !important;
            }

            /*
                        @tab Mobile Styles
                        @section Header Text
                        @tip Make the header text larger in size for better readability on small screens.
                        */
            .headerContainer .mcnTextContent, .headerContainer .mcnTextContent p {
                font-size: 16px !important;
                line-height: 150% !important;
            }

            /*
                        @tab Mobile Styles
                        @section Body Text
                        @tip Make the body text larger in size for better readability on small screens. We recommend a font size of at least 16px.
                        */
            .mcnTextContent,  .mcnTextContent p {
                font-size: 16px !important;
                line-height: 150% !important;
            }

            /*
                        @tab Mobile Styles
                        @section Footer Text
                        @tip Make the footer content text larger in size for better readability on small screens.
                        */
            .footerContainer .mcnTextContent, .footerContainer .mcnTextContent p {
                font-size: 14px !important;
                line-height: 150% !important;
            }
        }
    </style>
</head>

<body>
<div style="text-align: center;">
    <table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
        <tr>
            <td style="vertical-align:top;" align="center" id="bodyCell">
                <!-- BEGIN TEMPLATE -->
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <!--HEADER-->
                    <tr>
                        <td style="vertical-align:top;" align="center" id="templateHeader" data-template-container>

                            <table class="templateContainer" style="align-content: center; border: 0; padding: 0; width: 100%;">
                                <tr>
                                    <td class="headerContainer" style="vertical-align: top;">
                                        <table style="min-width:100%; width: 100%;border: 0; padding: 0;">
                                            <tbody>
                                            <tr>
                                                <td style="padding:9px; vertical-align: top;">
                                                    <table style="min-width:100%; width: 100%; border: 0; padding: 0;">
                                                        <tbody>
                                                        <tr>
                                                            <td style="padding: 0 9px; text-align:center; vertical-align: top;">

                                                                <img alt="logo Loc'karting"
                                                                     src="img/logo-header.png"
                                                                     style="vertical-align:bottom;
                                                                            width:256px;
                                                                            align-content: center;
                                                                            max-width:512px;
                                                                            padding-bottom: 0;
                                                                            display: inline !important;">
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
                        <td align="center" data-template-container style="background-color: #FFFFFF;
                                                                          background-image: none;
                                                                          background-repeat: no-repeat;
                                                                          background-position: center;
                                                                          background-size: cover;
                                                                          border-top: 0;
                                                                          border-bottom: 0;
                                                                          padding-top: 36px;
                                                                          padding-bottom: 54px;
                                                                          vertical-align: top;">
							<?php
							//							include 'defaultContent.php';
							//							include 'monthlyResults.php';
							//							include 'personalInfoDeleted.php';
							//							include 'kartCoinPurchase.php';
							//							include 'register.php';
							//							include 'retrievePassword.php';
							?>
                        </td>
                    </tr>
                    <!--END CONTENT CONTAINER-->

                    <!--FOOTER-->
                    <tr>
                        <td style="vertical-align:top;" align="center" id="templateFooter" data-template-container>
                            <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%"
                                   class="templateContainer">
                                <tr>
                                    <td style="vertical-align:top;" class="footerContainer">
                                        <!--Reseaux sociaux-->
                                        <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                               style="min-width:100%;">
                                            <tbody>
                                            <tr>
                                                <td align="center" style="padding:9px; vertical-align:top;">
                                                    <table border="0" cellpadding="0" cellspacing="0" width="100%"
                                                           style="min-width:100%;">
                                                        <tbody>
                                                        <tr>
                                                            <td align="center" style="padding-left:9px;padding-right:9px;">
                                                                <table border="0" cellpadding="0" cellspacing="0"
                                                                       width="100%" style="min-width:100%;">
                                                                    <tbody>
                                                                    <tr>
                                                                        <td align="center"
                                                                            style="vertical-align:top;
                                                                                   padding-top:9px;
                                                                                   padding-right:9px;
                                                                                   padding-left:9px;">
                                                                            <table align="center" border="0"
                                                                                   cellpadding="0" cellspacing="0">
                                                                                <tbody>
                                                                                <tr>
                                                                                    <td style="vertical-align:top;" align="center">
                                                                                        <!--facebook-->
                                                                                        <table align="left" border="0"
                                                                                               cellpadding="0"
                                                                                               cellspacing="0"
                                                                                               style="display:inline;">
                                                                                            <tbody>
                                                                                            <tr>
                                                                                                <td style="vertical-align:top; padding-right:10px; padding-bottom:9px;"
                                                                                                >
                                                                                                    <table border="0"
                                                                                                           cellpadding="0"
                                                                                                           cellspacing="0"
                                                                                                           width="100%">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td align="left"
                                                                                                                style="vertical-align:middle; padding: 5px 10px 5px 9px;">
                                                                                                                <table align="left"
                                                                                                                       border="0"
                                                                                                                       cellpadding="0"
                                                                                                                       cellspacing="0"
                                                                                                                       width="">
                                                                                                                    <tbody>
                                                                                                                    <tr>
                                                                                                                        <td align="center"
                                                                                                                            width="24"
                                                                                                                            style="vertical-align:middle;">
                                                                                                                            <a href="https://www.facebook.com/circuit.lockarting"
                                                                                                                               target="_blank">
                                                                                                                                <img src="img/outline-light-facebook-48.png"
                                                                                                                                     style="display:block;"
                                                                                                                                     height="24"
                                                                                                                                     width="24"
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
                                                                                                <td style="vertical-align:top; padding-right:10px; padding-bottom:9px;">
                                                                                                    <table border="0"
                                                                                                           cellpadding="0"
                                                                                                           cellspacing="0"
                                                                                                           width="100%">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td align="left"
                                                                                                                style="vertical-align:middle; padding: 5px 10px 5px 9px;">
                                                                                                                <table align="left"
                                                                                                                       border="0"
                                                                                                                       cellpadding="0"
                                                                                                                       cellspacing="0">
                                                                                                                    <tbody>
                                                                                                                    <tr>

                                                                                                                        <td style="vertical-align:middle;"
                                                                                                                            align="center"
                                                                                                                            width="24">
                                                                                                                            <a href="https://www.instagram.com/lockarting34/"
                                                                                                                               target="_blank">
                                                                                                                                <img src="img/outline-light-instagram-48.png"
                                                                                                                                     style="display:block;"
                                                                                                                                     height="24"
                                                                                                                                     width="24"
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
                                                                                                <td style="vertical-align: top; padding-right:0; padding-bottom:9px;">
                                                                                                    <table border="0"
                                                                                                           cellpadding="0"
                                                                                                           cellspacing="0"
                                                                                                           width="100%">
                                                                                                        <tbody>
                                                                                                        <tr>
                                                                                                            <td align="left"
                                                                                                                style="vertical-align: middle; padding: 5px 10px 5px 9px;">
                                                                                                                <table align="left"
                                                                                                                       border="0"
                                                                                                                       cellpadding="0"
                                                                                                                       cellspacing="0">
                                                                                                                    <tbody>
                                                                                                                    <tr>

                                                                                                                        <td style="vertical-align:middle;"
                                                                                                                            align="center"
                                                                                                                            width="24">
                                                                                                                            <a href="https://www.lockarting.fr"
                                                                                                                               target="_blank">
                                                                                                                                <img src="img/outline-light-link-48.png"
                                                                                                                                     style="display:block;"
                                                                                                                                     height="24"
                                                                                                                                     width="24"
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
                                        <table border="0" cellpadding="0" cellspacing="0"
                                               style="table-layout: fixed !important; min-width:100%; width:100%;">
                                            <tbody>
                                            <tr>
                                                <td style="min-width:100%; padding:18px;">
                                                    <table border="0" cellpadding="0"
                                                           cellspacing="0"
                                                           style="min-width: 100%;border-top: 2px solid #505050; width: 100%;">
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
                                        <table border="0" cellpadding="0" cellspacing="0" style="min-width:100%; width: 100%;">
                                            <tbody>
                                            <tr>
                                                <td style="vertical-align:top; padding-top:9px;">
                                                    <table align="left" border="0" cellpadding="0" cellspacing="0"
                                                           style="max-width:100% !important; min-width:100%; width: 100% !important;">
                                                        <tbody>
                                                        <tr>
                                                            <td class="mcnTextContent" style="padding: 0 18px 9px; vertical-align:top;">
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
                                                                Si tu  souhaites te désabonner de cette (magnifique) newsletter, c'est par
                                                                <a target="_blank" href="mailto:support@lockarting.fr?subject=Désabonnement%20de%20la%20newsletter%20de%20Loc'karting&body=Je%20souhaite%20me%20désabonner%20de%20la%20newsletter%20svp."
                                                                > ICI</a> 😭.
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
