<?php

/**
 * SAML 2.0 remote IdP metadata for SimpleSAMLphp.
 *
 * Remember to remove the IdPs you don't use from this file.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-idp-remote
 */


$metadata['https://hp.example.com/simplesaml/saml2/idp/metadata.php'] = [
    'SingleSignOnService' => 'https://hp.example.com/simplesaml/saml2/idp/SSOService.php',
    'SingleLogoutService' => 'https://hp.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
    'certificate' => 'hospital.pem',
];

//$metadata['https://hp.example.com/simplesaml/saml2/idp/metadata.php'] = [
//    'entityid' => 'https://hp.example.com/simplesaml/saml2/idp/metadata.php',
//    'contacts' => [],
//    'metadata-set' => 'saml20-idp-remote',
//    'SingleSignOnService' => [
//        [
//            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
//            'Location' => 'https://hp.example.com/simplesaml/saml2/idp/SSOService.php',
//        ],
//    ],
//    'SingleLogoutService' => [
//        [
//            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
//            'Location' => 'https://hp.example.com/simplesaml/saml2/idp/SingleLogoutService.php',
//        ],
//    ],
//    'ArtifactResolutionService' => [],
//    'NameIDFormats' => [
//        'urn:oasis:names:tc:SAML:2.0:nameid-format:transient',
//    ],
//    'keys' => [
//        [
//            'encryption' => false,
//            'signing' => true,
//            'type' => 'X509Certificate',
//            'X509Certificate' => 'MIIElDCCAvygAwIBAgIUfbMWUugO3t6TO5RCTz7YRepgZrMwDQYJKoZIhvcNAQELBQAwcTELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRva3lvMRAwDgYDVQQHDAdDaHVvLWt1MRIwEAYDVQQKDAlNeUNvbXBhbnkxEzARBgNVBAsMCk15RGl2aXNpb24xFzAVBgNVBAMMDmhwLmV4YW1wbGUuY29tMB4XDTIyMDcwODEyNDQwOVoXDTMyMDcwNzEyNDQwOVowcTELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRva3lvMRAwDgYDVQQHDAdDaHVvLWt1MRIwEAYDVQQKDAlNeUNvbXBhbnkxEzARBgNVBAsMCk15RGl2aXNpb24xFzAVBgNVBAMMDmhwLmV4YW1wbGUuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEA2f1CvN61nkF/N7kT+4xkl44a7FEWRTSv/8kRO7vQZrVxK/2uvB/9lmHL76vgPov3zcHf4LrrGpk5hdXpbzPVmQBkakdY1ShyQuLI/uDovYZeFWS7is9URTng3e5CY0/emyk97GQC0TytAVyDecPMqemE5Ej4EPNxuVjBhCiM5j8o79JBvoDZJemx3yhJaIjvXYd7aFMAWfqpFU2ng7hvz3onS+31flUr5wjNjOmlTB/fFWmEVylvul4unfTBy0guR1UMBUe3IKvZg7EGnuZn66nt/4uKM4MuxWjDbp24/wW6kMRQVDyee8ZnMGC0Gd5AXCghj7uSLPqMAwj13SGmAS0Lu2FxCcuJSE/JnlA6PYX9S6sfJlNje1bQxKRRTHuhmgrh3y0cyV77hXVxFQXJ54QxJsvO3QC4A8TjwozlxNbQ5MCyiTGGL5ODkCCOUU/OHo9uaBfsvt1FqrvVIE8RnNSFRmnp+afB1+supnNhTSmLF9x1UIdxlCiFpX79PHJzAgMBAAGjJDAiMAsGA1UdDwQEAwIEMDATBgNVHSUEDDAKBggrBgEFBQcDATANBgkqhkiG9w0BAQsFAAOCAYEALLJUXySe2EmdAZ/qjXVT/HPcRSS9kc8jvZ+wYcjjEXHfsYxPhNb99RKBiLZqnsYOyHuHCjvng/8BkqtOaY53y1dg0X2zHwo/lH+7bg3L6I+PjqXKNci5joSp4mXGaXtKk5tE9DCw3DwFQTgSlJO4khyOmMP7VHPymxNnyktKCBCW32ScVQDxg4aIivxM/UjhTwdVbA8k8iJPh3L8e3KfzK3oiW77zh25uwZ3VKTgFRrtWxByOavQpgGLeSxOK3T6X0T9Ce8Tkda2CIWj6kjtPfp8fyk24YWQAQ/R0CF0nRcBEymTjh4x0WTb+n8n5wd1jnwtRG9AbvBMAxDsxAyrj1vtWqX8Bxo4Fb+FyrBEz+aOYOAE19Hf1dzLm136BQytzeTo4aGptrIlskx0wG/8Ff9nj0vrq4Gsiljr1WxaJ7RTvc4I+A13Zc7OnQR1sge5rRRBmmrmc0VcIlQ22m/dfI6PxKmdx5JnxG+86PznQ94SFM0tZvT2PZFT2HS2kww9',
//        ],
//        [
//            'encryption' => true,
//            'signing' => false,
//            'type' => 'X509Certificate',
//            'X509Certificate' => 'MIIElDCCAvygAwIBAgIUfbMWUugO3t6TO5RCTz7YRepgZrMwDQYJKoZIhvcNAQELBQAwcTELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRva3lvMRAwDgYDVQQHDAdDaHVvLWt1MRIwEAYDVQQKDAlNeUNvbXBhbnkxEzARBgNVBAsMCk15RGl2aXNpb24xFzAVBgNVBAMMDmhwLmV4YW1wbGUuY29tMB4XDTIyMDcwODEyNDQwOVoXDTMyMDcwNzEyNDQwOVowcTELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRva3lvMRAwDgYDVQQHDAdDaHVvLWt1MRIwEAYDVQQKDAlNeUNvbXBhbnkxEzARBgNVBAsMCk15RGl2aXNpb24xFzAVBgNVBAMMDmhwLmV4YW1wbGUuY29tMIIBojANBgkqhkiG9w0BAQEFAAOCAY8AMIIBigKCAYEA2f1CvN61nkF/N7kT+4xkl44a7FEWRTSv/8kRO7vQZrVxK/2uvB/9lmHL76vgPov3zcHf4LrrGpk5hdXpbzPVmQBkakdY1ShyQuLI/uDovYZeFWS7is9URTng3e5CY0/emyk97GQC0TytAVyDecPMqemE5Ej4EPNxuVjBhCiM5j8o79JBvoDZJemx3yhJaIjvXYd7aFMAWfqpFU2ng7hvz3onS+31flUr5wjNjOmlTB/fFWmEVylvul4unfTBy0guR1UMBUe3IKvZg7EGnuZn66nt/4uKM4MuxWjDbp24/wW6kMRQVDyee8ZnMGC0Gd5AXCghj7uSLPqMAwj13SGmAS0Lu2FxCcuJSE/JnlA6PYX9S6sfJlNje1bQxKRRTHuhmgrh3y0cyV77hXVxFQXJ54QxJsvO3QC4A8TjwozlxNbQ5MCyiTGGL5ODkCCOUU/OHo9uaBfsvt1FqrvVIE8RnNSFRmnp+afB1+supnNhTSmLF9x1UIdxlCiFpX79PHJzAgMBAAGjJDAiMAsGA1UdDwQEAwIEMDATBgNVHSUEDDAKBggrBgEFBQcDATANBgkqhkiG9w0BAQsFAAOCAYEALLJUXySe2EmdAZ/qjXVT/HPcRSS9kc8jvZ+wYcjjEXHfsYxPhNb99RKBiLZqnsYOyHuHCjvng/8BkqtOaY53y1dg0X2zHwo/lH+7bg3L6I+PjqXKNci5joSp4mXGaXtKk5tE9DCw3DwFQTgSlJO4khyOmMP7VHPymxNnyktKCBCW32ScVQDxg4aIivxM/UjhTwdVbA8k8iJPh3L8e3KfzK3oiW77zh25uwZ3VKTgFRrtWxByOavQpgGLeSxOK3T6X0T9Ce8Tkda2CIWj6kjtPfp8fyk24YWQAQ/R0CF0nRcBEymTjh4x0WTb+n8n5wd1jnwtRG9AbvBMAxDsxAyrj1vtWqX8Bxo4Fb+FyrBEz+aOYOAE19Hf1dzLm136BQytzeTo4aGptrIlskx0wG/8Ff9nj0vrq4Gsiljr1WxaJ7RTvc4I+A13Zc7OnQR1sge5rRRBmmrmc0VcIlQ22m/dfI6PxKmdx5JnxG+86PznQ94SFM0tZvT2PZFT2HS2kww9',
//        ],
//    ],
//];