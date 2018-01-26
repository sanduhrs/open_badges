<?php

namespace sanduhrs\OpenBadges\VerificationObject;

use sanduhrs\OpenBadges\VerificationObject;

/**
 * Class HostedBadge.
 *
 * @package sanduhrs\OpenBadges
 */
class SignedBadge extends VerificationObject
{
    /**
     * The (HTTP) id of the key used to sign the Assertion.
     *
     * If not present, verifiers will check public key(s) declared in the
     * referenced issuer Profile. If a key is declared here, it must be authorized
     * in the issuer Profile as well. creator is expected to be the dereferencable
     * URI of a document that describes a CryptographicKey.
     *
     * @var string
     */
    protected $creator;
}
