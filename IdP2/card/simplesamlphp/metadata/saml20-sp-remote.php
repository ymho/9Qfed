<?php


/**
 * SAML 2.0 remote SP metadata for SimpleSAMLphp.
 *
 * See: https://simplesamlphp.org/docs/stable/simplesamlphp-reference-sp-remote
 */

/*
 * Example SimpleSAMLphp SAML 2.0 SP
 */
//$metadata['https://saml2sp.example.org'] = [
//    'AssertionConsumerService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
//    'SingleLogoutService' => 'https://saml2sp.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
//];

/*
 * This example shows an example config that works with Google Workspace (G Suite / Google Apps) for education.
 * What is important is that you have an attribute in your IdP that maps to the local part of the email address at
 * Google Workspace. In example, if your Google account is foo.com, and you have a user that has an email john@foo.com, then you
 * must set the simplesaml.nameidattribute to be the name of an attribute that for this user has the value of 'john'.
 */
//$metadata['google.com'] = [
//    'AssertionConsumerService' => 'https://www.google.com/a/g.feide.no/acs',
//    'NameIDFormat' => 'urn:oasis:names:tc:SAML:1.1:nameid-format:emailAddress',
//    'simplesaml.nameidattribute' => 'uid',
//    'simplesaml.attributes' => false,
//];

//$metadata['https://legacy.example.edu'] = [
//    'AssertionConsumerService' => 'https://legacy.example.edu/saml/acs',
//    /*
//     * Currently, SimpleSAMLphp defaults to the SHA-256 hashing algorithm.
//     * Uncomment the following option to use SHA-1 for signatures directed
//     * at this specific service provider if it does not support SHA-256 yet.
//     *
//     * WARNING: SHA-1 is disallowed starting January the 1st, 2014.
//     * Please refer to the following document for more information:
//     * http://csrc.nist.gov/publications/nistpubs/800-131A/sp800-131A.pdf
//     */
//    //'signature.algorithm' => 'http://www.w3.org/2000/09/xmldsig#rsa-sha1',
//];


//$metadata['https://fed.example.org'] = [
//    'entityid' => 'https://fed.example.org',
//    'contacts' => [],
//    'metadata-set' => 'saml20-sp-remote',
//    'AssertionConsumerService' => [
//        [
//            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-POST',
//            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
//            'index' => 0,
//        ],
//        [
//            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:browser-post',
//            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp',
//            'index' => 1,
//        ],
//        [
//            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Artifact',
//            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
//            'index' => 2,
//        ],
//        [
//            'Binding' => 'urn:oasis:names:tc:SAML:1.0:profiles:artifact-01',
//            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml1-acs.php/default-sp/artifact',
//            'index' => 3,
//        ],
//    ],
//    'SingleLogoutService' => [
//        [
//            'Binding' => 'urn:oasis:names:tc:SAML:2.0:bindings:HTTP-Redirect',
//            'Location' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
//        ],
//    ],
//    'keys' => [
//        [
//            'encryption' => false,
//            'signing' => true,
//            'type' => 'X509Certificate',
//            'X509Certificate' => 'MIIEljCCAv6gAwIBAgIUAb/OQM/ror8vE7pzQh3Jz/20aiAwDQYJKoZIhvcNAQELBQAwcjELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRva3lvMRAwDgYDVQQHDAdDaHVvLWt1MRIwEAYDVQQKDAlNeUNvbXBhbnkxEzARBgNVBAsMCk15RGl2aXNpb24xGDAWBgNVBAMMD2ZlZC5leGFtcGxlLm9yZzAeFw0yMjA3MDgxMjI4NDVaFw0zMjA3MDcxMjI4NDVaMHIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzEQMA4GA1UEBwwHQ2h1by1rdTESMBAGA1UECgwJTXlDb21wYW55MRMwEQYDVQQLDApNeURpdmlzaW9uMRgwFgYDVQQDDA9mZWQuZXhhbXBsZS5vcmcwggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDUXYsiuNrgldUtTvbeqVg+yomTcetLPyGgdN9FJT+3KgH3LCtUbARC+Yg29rrwNwFwhjVh0InyXE7r+H73Ra1UkMekfqkqfX+gC0G/10XYcmkPHOnk3THvrZPoHosivpyd7Pdu/jxxOE6r7ro1Gz85DwnIbeXJtTJBG5fMqk/Xil6tlWECszqW97cCLyugI7oEW/CCxy77yG4Pj5l8gGPLxNL6SCSLNq5jKnCuRGW/QCrhwQz0HCBbSMKkljdvZXi8jEc7yCkXE5vSyUiyzD+mVy4eIh/KyFr6yDRON3a/5PZy9fLTyEvuFgKMTaOzZGwuq4LnKF04F6E1WbfeabB6A/77SpbceLRMIWErjLbiJofKMU4dPNXBgAcQO2NUC/xuRq9gPj4n+wc7TTeTvFg/LFieTJ3mWgDTbU6LaHkSTMy97q2Jx2jel8YQwwas3xlESUjkjFRLVUVZ8lz8dxWexQa/07RLraT3U6INjPHOq/hZ5BVrEvBDJfr8X9rx6AUCAwEAAaMkMCIwCwYDVR0PBAQDAgQwMBMGA1UdJQQMMAoGCCsGAQUFBwMBMA0GCSqGSIb3DQEBCwUAA4IBgQAdyjdLqL6ixrGoNoE4+FPrr1XgypBZ5VO2ul0+k5dFpJl7dfhlK9D8HvS9CdJqSex7eqSho/u02agXNoLJTrbK/L9P8ZA8uqiAC9PobLagSW7mbZ59S9Ji//+rpA8zVYtSG/zSog3LpVzx3pLlhv2PRrdpRdCv9JOoYTe42WDD8Ej2OYOif8WHha9sOjhLCNoKj7b8ktktN8V3/PNi3bySBV1wrVpUO19C/wnzZ3dAFiwLGUeRSy4ob2cE4pszDmFF++eMjkNcOEX8zRsxZCSV/7qZMVAcLkfcVKFImStPPGJ2+RqpXQe3uqcBhcARkrXQGL5mJvwmqx8CsxDVjyUQ0gMfwl+PRD+YN9KGQpNnJNlgOYzFBWWvq3UIMOmexigmb+1VCW972ESqvaUjr27c1Hugsh3IW80tuQlV43wgDcz9WDScl35GgzrvYQKS3a68uaHhaP6W74ySmftnVoSGIU+zdKojthYubRpqO6LWMx8df8ZNIRb8AZMEwuoraLA=',
//        ],
//        [
//            'encryption' => true,
//            'signing' => false,
//            'type' => 'X509Certificate',
//            'X509Certificate' => 'MIIEljCCAv6gAwIBAgIUAb/OQM/ror8vE7pzQh3Jz/20aiAwDQYJKoZIhvcNAQELBQAwcjELMAkGA1UEBhMCSlAxDjAMBgNVBAgMBVRva3lvMRAwDgYDVQQHDAdDaHVvLWt1MRIwEAYDVQQKDAlNeUNvbXBhbnkxEzARBgNVBAsMCk15RGl2aXNpb24xGDAWBgNVBAMMD2ZlZC5leGFtcGxlLm9yZzAeFw0yMjA3MDgxMjI4NDVaFw0zMjA3MDcxMjI4NDVaMHIxCzAJBgNVBAYTAkpQMQ4wDAYDVQQIDAVUb2t5bzEQMA4GA1UEBwwHQ2h1by1rdTESMBAGA1UECgwJTXlDb21wYW55MRMwEQYDVQQLDApNeURpdmlzaW9uMRgwFgYDVQQDDA9mZWQuZXhhbXBsZS5vcmcwggGiMA0GCSqGSIb3DQEBAQUAA4IBjwAwggGKAoIBgQDUXYsiuNrgldUtTvbeqVg+yomTcetLPyGgdN9FJT+3KgH3LCtUbARC+Yg29rrwNwFwhjVh0InyXE7r+H73Ra1UkMekfqkqfX+gC0G/10XYcmkPHOnk3THvrZPoHosivpyd7Pdu/jxxOE6r7ro1Gz85DwnIbeXJtTJBG5fMqk/Xil6tlWECszqW97cCLyugI7oEW/CCxy77yG4Pj5l8gGPLxNL6SCSLNq5jKnCuRGW/QCrhwQz0HCBbSMKkljdvZXi8jEc7yCkXE5vSyUiyzD+mVy4eIh/KyFr6yDRON3a/5PZy9fLTyEvuFgKMTaOzZGwuq4LnKF04F6E1WbfeabB6A/77SpbceLRMIWErjLbiJofKMU4dPNXBgAcQO2NUC/xuRq9gPj4n+wc7TTeTvFg/LFieTJ3mWgDTbU6LaHkSTMy97q2Jx2jel8YQwwas3xlESUjkjFRLVUVZ8lz8dxWexQa/07RLraT3U6INjPHOq/hZ5BVrEvBDJfr8X9rx6AUCAwEAAaMkMCIwCwYDVR0PBAQDAgQwMBMGA1UdJQQMMAoGCCsGAQUFBwMBMA0GCSqGSIb3DQEBCwUAA4IBgQAdyjdLqL6ixrGoNoE4+FPrr1XgypBZ5VO2ul0+k5dFpJl7dfhlK9D8HvS9CdJqSex7eqSho/u02agXNoLJTrbK/L9P8ZA8uqiAC9PobLagSW7mbZ59S9Ji//+rpA8zVYtSG/zSog3LpVzx3pLlhv2PRrdpRdCv9JOoYTe42WDD8Ej2OYOif8WHha9sOjhLCNoKj7b8ktktN8V3/PNi3bySBV1wrVpUO19C/wnzZ3dAFiwLGUeRSy4ob2cE4pszDmFF++eMjkNcOEX8zRsxZCSV/7qZMVAcLkfcVKFImStPPGJ2+RqpXQe3uqcBhcARkrXQGL5mJvwmqx8CsxDVjyUQ0gMfwl+PRD+YN9KGQpNnJNlgOYzFBWWvq3UIMOmexigmb+1VCW972ESqvaUjr27c1Hugsh3IW80tuQlV43wgDcz9WDScl35GgzrvYQKS3a68uaHhaP6W74ySmftnVoSGIU+zdKojthYubRpqO6LWMx8df8ZNIRb8AZMEwuoraLA=',
//        ],
//    ],
//];

$metadata['https://fed.example.org'] = [
    'AssertionConsumerService' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-acs.php/default-sp',
    'SingleLogoutService' => 'https://fed.example.org/simplesaml/module.php/saml/sp/saml2-logout.php/default-sp',
];